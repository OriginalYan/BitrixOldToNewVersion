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

3)  `b_disk_object`
    `b_disk_attached_object`,
    `b_disk_external_link`,
    `b_disk_object_path`
    `b_disk_recently_used` - таблицы с данными о файлах, тоже берем все файлы после идентификатора 800
     
    1) <code>CREATE TABLE import_b_disk_object<br> SELECT * FROM b_disk_object WHERE FILE_ID > 800;</code>
    2) 
        `CREATE TABLE import_b_disk_attached_object
         SELECT b_disk_attached_object.ID, b_disk_attached_object.OBJECT_ID, b_disk_attached_object.VERSION_ID, b_disk_attached_object.IS_EDITABLE, b_disk_attached_object.ALLOW_EDIT, b_disk_attached_object.ALLOW_AUTO_COMMENT, b_disk_attached_object.MODULE_ID, b_disk_attached_object.ENTITY_TYPE, b_disk_attached_object.ENTITY_ID, b_disk_attached_object.CREATE_TIME, b_disk_attached_object.CREATED_BY
         FROM b_disk_attached_object
         INNER JOIN import_b_disk_object ON b_disk_attached_object.OBJECT_ID = import_b_disk_object.ID ORDER BY b_disk_attached_object.ID ASC;`
    3) 
        `CREATE TABLE import_b_disk_external_link 
         SELECT b_disk_external_link.ID,b_disk_external_link.OBJECT_ID, b_disk_external_link.VERSION_ID, b_disk_external_link.HASH, b_disk_external_link.PASSWORD, b_disk_external_link.SALT, b_disk_external_link.DEATH_TIME, b_disk_external_link.DESCRIPTION, b_disk_external_link.DOWNLOAD_COUNT, b_disk_external_link.TYPE, b_disk_external_link.CREATE_TIME, b_disk_external_link.CREATED_BY
         FROM b_disk_external_link
         INNER JOIN import_b_disk_object ON b_disk_external_link.OBJECT_ID = import_b_disk_object.ID ORDER BY b_disk_external_link.ID ASC;`
    4)  
        `CREATE TABLE import_b_disk_object_path
         SELECT b_disk_object_path.ID, b_disk_object_path.PARENT_ID, b_disk_object_path.OBJECT_ID, b_disk_object_path.DEPTH_LEVEL
         FROM b_disk_object_path
         INNER JOIN import_b_disk_object ON b_disk_object_path.OBJECT_ID = import_b_disk_object.ID ORDER BY b_disk_object_path.ID ASC;`
    5)  
        `CREATE TABLE import_b_disk_recently_used
        SELECT b_disk_recently_used.ID, b_disk_recently_used.USER_ID, b_disk_recently_used.OBJECT_ID, b_disk_recently_used.CREATE_TIME
        FROM b_disk_recently_used
        INNER JOIN import_b_disk_object ON b_disk_recently_used.OBJECT_ID = import_b_disk_object.ID ORDER BY b_disk_recently_used.ID ASC;`
     
     После экспорта этих данных в файл дописать в начало: 
    `DROP TABLE IF EXISTS import_b_disk_object; TRUNCATE b_disk_object;`
    `DROP TABLE IF EXISTS import_b_disk_attached_object; TRUNCATE b_disk_attached_object;`
    `DROP TABLE IF EXISTS import_b_disk_external_link; TRUNCATE b_disk_external_link;`
    `DROP TABLE IF EXISTS import_b_disk_object_path; TRUNCATE b_disk_object_path;`
    `DROP TABLE IF EXISTS import_b_disk_recently_used; TRUNCATE b_disk_recently_used;`
    
     И в конец:
     `ALTER TABLE import_b_disk_object MODIFY ETAG varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL AFTER EXTERNAL_HASH;
      ALTER TABLE import_b_disk_object ADD SEARCH_INDEX mediumtext COLLATE utf8_unicode_ci AFTER VIEW_ID;`
      
      `INSERT INTO b_disk_object SELECT * FROM import_b_disk_object;`
      `INSERT INTO b_disk_attached_object SELECT * FROM import_b_disk_attached_object;`
      `INSERT INTO b_disk_external_link SELECT * FROM import_b_disk_external_link;`
      `INSERT INTO b_disk_object_path SELECT * FROM import_b_disk_object_path;`
      `INSERT INTO b_disk_recently_used SELECT * FROM import_b_disk_recently_used;`
     
    