<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/scripts/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/connect.php';

$mas_tables = array(
    'b_utm_blog_comment',
    'b_utm_blog_post',
    'b_utm_calendar_event',
    'b_utm_forum_message',
    'b_utm_sonet_comment',
    'b_utm_sonet_log',
    'b_utm_tasks_task',
    'b_utm_tasks_task_template',
    'b_utm_user',
    'b_uts_blog_comment',
    'b_uts_blog_post',
    'b_uts_calendar_event',
    'b_uts_forum_message',
    'b_uts_sonet_comment',
    'b_uts_sonet_group',
    'b_uts_sonet_log',
    'b_uts_tasks_task',
    'b_uts_tasks_task_template',
    'b_uts_user'
);

$path_to_file = 'C:/Users/y.sokolikov/Desktop/OSPanel/new_import/uts_and_utm_to_prod.sql';

//createTableForImport($mas_tables, 'import_', $connect_from);
SetOriginalData($mas_tables, 'import_', '

ALTER TABLE b_uts_user
ADD `UF_VI_PASSWORD` text COLLATE utf8_unicode_ci AFTER UF_BXDAVEX_CALSYNC,
ADD `UF_VI_BACKPHONE` text COLLATE utf8_unicode_ci AFTER UF_VI_PASSWORD,
ADD `UF_VI_PHONE` text COLLATE utf8_unicode_ci AFTER UF_VI_BACKPHONE,
ADD `UF_VI_PHONE_PASSWORD` text COLLATE utf8_unicode_ci AFTER UF_VI_PHONE,
ADD `UF_BXDAVEX_MAILBOX` text COLLATE utf8_unicode_ci AFTER UF_VI_PHONE_PASSWORD;

ALTER TABLE b_uts_sonet_group
ADD `UF_SORT` double DEFAULT NULL AFTER UF_SG_DEPT;

ALTER TABLE b_uts_tasks_task_template ADD `UF_AUTO_878903998800` double DEFAULT NULL AFTER UF_TASK_WEBDAV_FILES;

ALTER TABLE b_uts_crm_lead ADD `UF_INTER_PHONE` text COLLATE UTF8_UNICODE_CI AFTER UF_CRM_1562831340,
ADD `UF_INTEREST_SERVICE` int(18) DEFAULT NULL, 
ADD `UF_INN` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_KPP` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_NON_RESIDENT` int(18) DEFAULT NULL,  
ADD `UF_TAXATION_TYPE` int(18) DEFAULT NULL, 
ADD `UF_TYPE_OF_ACTIVITY` int(18) DEFAULT NULL, 
ADD `UF_HEAD_COMPANY` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_CUSTOMER_CATEGORY` int(18) DEFAULT NULL, 
ADD `UF_CITY` text COLLATE UTF8_UNICODE_CI,
ADD `UF_OGRN` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_OKPO` text COLLATE UTF8_UNICODE_CI,
ADD `UF_OKTMO` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_OKATO` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_ACTUAL_ADRESS_LF` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_LEGAL_ADRESS` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_MAILING_ADRESS_LF` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_BIK_LF` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_KCH_LF` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_ACCOUNT_LF` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_NAME_BANK_LF` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_DATE_BIRTH` date DEFAULT NULL, 
ADD `UF_GENDER` int(18) DEFAULT NULL, 
ADD `UF_SERIES` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_NUMBER` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_ISSUED_BY` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_REGISTRATION_ADRE` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_INN_IP` text COLLATE utf8_unicode_ci,
ADD `UF_AGE` double DEFAULT NULL, 
ADD `UF_FIO_HEAD` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_OGRN_IP` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_DATE_ISSUE` text COLLATE UTF8_UNICODE_CI, 
ADD `UF_CRM_UF_ORIG` int(18) DEFAULT NULL, 
ADD `UF_TYPE` int(18) DEFAULT NULL;

', $path_to_file, $connect_to, $connect_from);
