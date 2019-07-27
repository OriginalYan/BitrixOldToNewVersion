<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/scripts/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/connect.php';

$mas_tables = array(
    'b_task',
    'b_tasks',
    'b_tasks_checklist_items',
    'b_tasks_columns',
    'b_tasks_counters',
    'b_tasks_dependence',
    'b_tasks_effective',
    'b_tasks_elapsed_time',
    'b_tasks_favorite',
    'b_tasks_log',
    'b_tasks_member',
    'b_tasks_proj_dep',
    'b_tasks_reminder',
    'b_tasks_sorting',
    'b_tasks_stages',
    'b_tasks_syslog',
    'b_tasks_tag',
    'b_tasks_task_dep',
    'b_tasks_task_parameter',
    'b_tasks_task_stage',
    'b_tasks_task_template_access',
    'b_tasks_template',
    'b_tasks_template_chl_item',
    'b_tasks_template_dep',
    'b_tasks_timer',
    'b_tasks_viewed',
    'b_task_operation',
);

$path_to_file = 'C:/Users/y.sokolikov/Desktop/OSPanel/new_import/tasks_to_prod.sql';

//createTableForImport($mas_tables, 'import_', $connect_from);
SetOriginalData($mas_tables, 'import_', '', $path_to_file, $connect_to, $connect_from);