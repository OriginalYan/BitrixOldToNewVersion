<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/connect.php';

$mas_tables = array(
    'b_forum',
    'b_forum2site',
    'b_forum_dictionary',
    'b_forum_filter',
    'b_forum_group',
    'b_forum_group_lang',
    'b_forum_letter',
    'b_forum_message',
    'b_forum_perms',
    'b_forum_pm_folder',
    'b_forum_topic',
    'b_forum_user',
    'b_forum_user_forum',
    'b_forum_user_topic'
);

$path_to_file = 'C:/Users/y.sokolikov/Desktop/OSPanel/new_import/forum_to_prod.sql';

//createTableForImport($mas_tables, 'import_', $connect_from);
SetOriginalData($mas_tables, 'import_', '', $path_to_file, $connect_to, $connect_from);