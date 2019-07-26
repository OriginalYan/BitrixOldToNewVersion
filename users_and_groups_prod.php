<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/connect.php';

$mas_tables = array(
    'b_user',
    'b_user_access',
    'b_user_access_check',
    'b_user_counter',
    'b_user_digest',
    'b_user_field_enum',
    'b_user_field_lang',
    'b_user_group',
    'b_user_hit_auth',
    'b_user_index',
    'b_user_option',
    'b_user_stored_auth',
);

//b_user_field трогать не нужно

$path_to_file = 'C:/Users/y.sokolikov/Desktop/OSPanel/new_import/user_and_group_to_prod.sql';

//createTableForImport($mas_tables, 'import_', $connect_from);
SetOriginalData($mas_tables, 'import_', '', $path_to_file, $connect_to, $connect_from);
