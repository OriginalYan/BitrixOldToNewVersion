<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/scripts/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/connect.php';

$mas_tables = array(
    'b_sonet_group',
    'b_sonet_group_favorites',
    'b_sonet_group_site',
    'b_sonet_group_subject',
    'b_sonet_group_subject_site',
    'b_sonet_group_view',
    'b_sonet_user_content_view'
);

$path_to_file = 'C:/Users/y.sokolikov/Desktop/OSPanel/new_import/sonet_to_prod.sql';

//createTableForImport($mas_tables, 'import_', $connect_from);
SetOriginalData($mas_tables, 'import_', '', $path_to_file, $connect_to, $connect_from);
