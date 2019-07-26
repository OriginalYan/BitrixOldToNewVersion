<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/connect.php';


$mas_table = array(
    'b_calendar_access',
    'b_calendar_event',
    'b_calendar_event_sect',
    'b_calendar_section',
    'b_calendar_type'
);

$path_file = 'C:/Users/y.sokolikov/Desktop/OSPanel/new_import/calendar_to_prod.sql';

//createTableForImport($mas_table, 'import_', $connect_from);
SetOriginalData($mas_table, 'import_', '', $path_file, $connect_to, $connect_from);