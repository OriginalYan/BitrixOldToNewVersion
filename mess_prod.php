<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/connect.php';

$mas_tables = array(
    'b_im_alias',
    'b_im_chat',
    'b_im_last_search',
    'b_im_message',
    'b_im_message_param',
    'b_im_recent',
    'b_im_relation',
    'b_im_status'
);

$path_to_file = 'C:/Users/y.sokolikov/Desktop/OSPanel/new_import/mess_to_prod.sql';

//createTableForImport($mas_tables, 'import_', $connect_from);
SetOriginalData($mas_tables, 'import_', '', $path_to_file, $connect_to, $connect_from);

//на строчке примерно 1366298 sql скрипта изменить дефолт данные