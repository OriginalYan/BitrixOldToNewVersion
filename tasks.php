<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/functions.php';
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
    'b_tasks_file',
    'b_tasks_files_temporary',
    'b_tasks_filters',
    'b_tasks_log',
    'b_tasks_member',
    'b_tasks_msg_throttle',
    'b_tasks_projects',
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

$path_to_file = $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/files_sql_add_more_command/import_tasks.sql';
$path_to_file_sonet = $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/files_sql_add_more_command/sonet_group.sql';

//createTableForImport($mas_tables, 'import_', $connect_from);
//SetOriginalData($mas_tables, 'import_', '', $path_to_file, $connect_to, $connect_from);

$mas_tab_uts = array(
    'b_sonet_group',
    'b_uts_sonet_group',
    'b_sonet_group_subject'
);

//createTableForImport($mas_tab_uts, 'import_', $connect_from);
//SetOriginalData($mas_tab_uts, 'import_', 'ALTER TABLE b_uts_sonet_group ADD UF_SORT double DEFAULT NULL AFTER UF_SG_DEPT', $path_to_file_sonet, $connect_to, $connect_from);

