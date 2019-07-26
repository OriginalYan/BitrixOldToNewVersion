<?

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/connect.php';

$mas_tables = array(
    'b_file'
);

//$path_to_file = $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/files_sql_add_more_command/uts_and_utm_to_prod.sql';

createTableForImport($mas_tables, 'import_', $connect_from);
//SetOriginalData($mas_tables, 'import_', '', $path_to_file, $connect_to, $connect_from);
