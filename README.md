_**Полный перенос осуществляется с использований ф-ий:**_

Таблицы, которые дополнительно мы переносим:

1) `b_file` - все данные с prod начиная с идентификатора 800, по тому же принципу,
что и все остальные таблицы
2) `b_ldap_server` - таблица ldap соединений, по тому же принципу. Дополнительно к 
этому добавляем код <br>
    <code>
    ALTER TABLE b_ldap_server ADD `CONNECTION_TYPE` int(11) DEFAULT NULL,
    ADD `SET_DEPARTMENT_HEAD` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
    ADD `LDAP_OPT_TIMELIMIT` int(11) NOT NULL DEFAULT '100',
    ADD `LDAP_OPT_TIMEOUT` int(11) NOT NULL DEFAULT '5',
    ADD `LDAP_OPT_NETWORK_TIMEOUT` int(11) NOT NULL DEFAULT '5';
    </code>
    
3) И еще пару строчек в блокноте


_МОМЕНТЫ, КОТОРЫЕ НУЖНО ПРАВИТЬ НА БОЮ:_

1) Для сортировки задач в "список" нужно добавить result_modifier.php в /local/includes/_component/tasks.task.list/ <br>


                global $DB; 
                
                $getSortByGroup = $DB->query('SELECT b_sonet_group.ID, b_uts_sonet_group.UF_SORT FROM b_sonet_group INNER JOIN b_uts_sonet_group ON b_sonet_group.ID = b_uts_sonet_group.VALUE_ID ORDER BY b_uts_sonet_group.UF_SORT ASC;');
                
                while($row = $getSortByGroup->fetch()){
                    $masGroupSort[] = $row;
                }
                
                foreach ($arResult['LIST'] as $key => $itemTask)
                {
                    foreach($masGroupSort as $elementGroup){
                        if ($itemTask['GROUP_ID'] == $elementGroup['ID']){
                            $arResult['LIST'][$key]['SORT_BY_SONET'] = $elementGroup['UF_SORT'];
                        }
                    }
                }
                
                if (!function_exists('sortGroupByUF_SORT'))
                {
                    function sortGroupByUF_SORT($a, $b){
                        if ($a['SORT_BY_SONET'] == $b['SORT_BY_SONET']) return 0;
                        return $a['SORT_BY_SONET'] > $b['SORT_BY_SONET'] ? 1 : -1;
                    }
                }
                usort($arResult['LIST'], 'sortGroupByUF_SORT');
2)  Для сортировки задач в "гант" нужно добавить result_modifier.php в /local/includes/_component/tasks.task.gantt/ <br>


                $arResult["GROUPS"][0] = ['SORT' => -200000];
                
                if(!function_exists('sortBySort'))
                {
                    function sortBySort($a, $b)
                    {
                        if($a['SORT'] == $b['SORT'])
                        {
                            return 0;
                        }
                        
                        return ($a['SORT'] < $b['SORT']) ? -1 : 1;
                    }
                }
                
                uasort($arResult["GROUPS"], 'sortBySort');
                
                $arTmp = $arResult["LIST"];
                
                foreach($arResult["LIST"] as $arTask)
                {
                    $arResult['GROUPS'][$arTask['GROUP_ID']]['TASKS'][] = $arTask;
                }
                
                $sorting = 0;
                
                $arResult["LIST"] = [];
                
                foreach($arResult['GROUPS'] as $k => $arGroup)
                {
                    foreach($arGroup['TASKS'] as $arTask)
                    {
                        $arTask['SORTING'] = $sorting;
                        $sorting = $sorting + 10;
                        $arResult["LIST"][] = $arTask;
                    }
                    
                    unset($arResult['GROUPS'][$k]['TASKS']);
                }
                
                unset($arResult["GROUPS"][0]);

3) В шаблон гант добавить (строчка 531)

   ` var projects = [
        <? $i = 0?>
        <? foreach((array)$arResult["GROUPS"] as $arGroup):?>
        <? $i++ ?>
        {
            id: <?=$arGroup["ID"]?>,
            sort : <?=$arGroup["SORT"]?>,
            name: "<?=CUtil::JSEscape($arGroup["NAME"])?>",
            opened: <?=CUtil::PhpToJSObject($arGroup["EXPANDED"])?>,
            canCreateTasks: <?=CUtil::PhpToJSObject($arGroup["CAN_CREATE_TASKS"])?>,
            canEditTasks: <?=CUtil::PhpToJSObject($arGroup["CAN_EDIT_TASKS"])?>
        }<? if ($i != sizeof($arResult["GROUPS"])):?>,<?endif?>
        <? endforeach?>
    ];`


4) для ганта в файле /bitrix/js/tasks/gantt.js изменить

Строчка 1345 поменять `var GanttProject = function(chart, id, name, sort)` и в самом объекте добавить 
`this.sort = sort;`. Строчка 64 `this.projects = {0 : new GanttProject(this, 0, "Default Project", 0)};`.
Строчка 351 `var project = this.__createProject(json.id, json.name, json.sort);
             
             	if (project == null)
             	{
             		return null;
             	}
             
             	if (BX.type.isNumber(json.sort))
             	{
             		project.sort = json.sort;
             	}`

Строчка 405 

                BX.GanttChart.prototype.__createProject = function(id, name, sort)
                {
                
                    if (!BX.type.isNumber(id) || !BX.type.isNotEmptyString(name) || !BX.type.isNumber(sort))
                    {
                        return null;
                    }
                
                    return new GanttProject(this, id, name, sort);
                
                };

**_далее подключить их в компоненте битрикс_**                

5) в файл класса задач в листе добавить

`
array("NAME" => "300", "VALUE" => "300"),
		array("NAME" => "500", "VALUE" => "500"),
		array("NAME" => "1000", "VALUE" => "1000" )
		array("NAME" => "5000", "VALUE" => "5000" )
`

6) а в ганте в классе сделать `return 10000`