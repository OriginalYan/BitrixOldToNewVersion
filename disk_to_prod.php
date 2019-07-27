<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/scripts/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/connect.php';

$mas_tables = array(
    'b_disk_attached_object',
    'b_disk_deleted_log',
    'b_disk_external_link',
    'b_disk_object',
    'b_disk_object_path',
    'b_disk_recently_used',
    'b_disk_right',
    'b_disk_right_setup_session',
    'b_disk_sharing',
    'b_disk_simple_right',
    'b_disk_storage',
    'b_disk_version',
    'b_disk_volume',
);

$path_to_file = 'C:/Users/Yan/Downloads/disk_more_to_prod.sql';

//createTableForImport($mas_tables, 'import_', $connect_from);
SetOriginalData($mas_tables, 'import_', '', $path_to_file, $connect_to, $connect_from);