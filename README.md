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

4) для ганта в файле /bitrix/js/tasks/gantt.js изменить

**Строчка 1345** поменять `var GanttProject = function(chart, id, name, sort)` и в самом объекте добавить `this.sort = sort;`. 

**Строчка 64** `this.projects = {0 : new GanttProject(this, 0, "Default Project", 0)};`.

**Строчка 351** `var project = this.__createProject(json.id, json.name, json.sort);
             
             	if (project == null)
             	{
             		return null;
             	}
             
             	if (BX.type.isNumber(json.sort))
             	{
             		project.sort = json.sort;
             	}`

**Строчка 405** 

                BX.GanttChart.prototype.__createProject = function(id, name, sort)
                {
                
                    if (!BX.type.isNumber(id) || !BX.type.isNotEmptyString(name) || !BX.type.isNumber(sort))
                    {
                        return null;
                    }
                
                    return new GanttProject(this, id, name, sort);
                
                };
            
