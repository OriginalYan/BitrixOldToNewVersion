<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/scripts/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/connect.php';

$mas_tables = array(
    'b_sonet_group',
    'b_sonet_group_favorites',
    'b_sonet_group_site',
    'b_sonet_user2group',
    'b_sonet_group_subject',
    'b_sonet_group_subject_site',
    'b_sonet_group_view',
    'b_sonet_user_content_view',
    'b_utm_sonet_comment',
    'b_utm_sonet_log',
    'b_uts_sonet_comment',
    'b_uts_sonet_group',
    'b_uts_sonet_log',
);

$path_to_file = 'C:/Users/y.sokolikov/Desktop/sonet_local.sql';

//createTableForImport($mas_tables, 'import_', $connect_from);

SetOriginalData($mas_tables, 'import_', '

ALTER TABLE b_uts_sonet_group
ADD `UF_SORT` double DEFAULT NULL AFTER UF_SG_DEPT;

', $path_to_file, $connect_to, $connect_from);
