<?php

//Добавить код в компонент bitrix:tasks.task.list после 1415 строки

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