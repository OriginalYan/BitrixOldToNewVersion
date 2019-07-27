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
    