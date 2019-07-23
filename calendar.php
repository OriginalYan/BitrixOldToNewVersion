<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/connect.php';

$path_file = $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/files_sql_add_more_command/import_calendar.sql';

$mas_table = array(
    'b_calendar_access',
    'b_calendar_attendees',
    'b_calendar_event',
    'b_calendar_event_sect',
    'b_calendar_push',
    'b_calendar_section',
    'b_calendar_type'
);

//createTableForImport($mas_table, 'import_', $connect_from);
SetOriginalData($mas_table, 'import_', '', $path_file, $connect_to, $connect_from);