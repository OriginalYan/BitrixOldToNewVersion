<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/scripts/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/connect.php';

$mas_tables = array(
    'b_blog',
    'b_blog_category',
    'b_blog_comment',
    'b_blog_group',
    'b_blog_post',
    'b_blog_post_category',
    'b_blog_post_param',
    'b_blog_site_path',
    'b_blog_socnet',
    'b_blog_socnet_rights',
    'b_blog_user',
    'b_blog_user_group',
    'b_blog_user_group_perms'
);

$path_to_file = 'C:/Users/y.sokolikov/Desktop/OSPanel/new_import/blog_to_prod.sql';

//createTableForImport($mas_tables, 'import_', $connect_from);
SetOriginalData($mas_tables, 'import_', '', $path_to_file, $connect_to, $connect_from);
