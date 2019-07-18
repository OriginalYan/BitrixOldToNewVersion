<?php


function createTableForImport($tables = array(), $prefix = 'import_'){

    if (!empty($tables) && $prefix != ""){
        $dsn = 'mysql:host=bitrix-new.devinotest.local;port=3306;dbname=bitrix24prod;charset=utf8;';
        $user = 'root';
        $password = 'willbechanged';

        try {
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            foreach ($tables as $table) {
                $str_query = "SELECT COUNT(*) AS LINE_COUNT FROM `information_schema`.`TABLES` WHERE TABLE_NAME = '" . $table ."'";
                $res = $dbh->query($str_query);
                $mas_res = $res->fetch();

                if ($mas_res['LINE_COUNT']){

                    $dbh->exec('USE bitrix24prod;');

                    $DROPAllOldTable = "DROP TABLE IF EXISTS " . $prefix . $table . ";";
                    $createNewTable = "CREATE TABLE bitrix24prod." . $prefix . $table . " SELECT * FROM bitrix24prod." . $table . ";";

                    $dbh->exec($DROPAllOldTable);
                    $dbh->exec($createNewTable);

                } else {
                    exit('Таблицы ' . $table . ' не существует');
                }
            }

        } catch (PDOException $e) {
            exit('Ошибка подключения ' . $e->getMessage());
        }
    }
    return 'Все копии таблиц успешно созданы с преффиксом ' . $prefix ;
}

function debug($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

//function SetOriginalData($mas_tables = array(), $preffix = 'import_', $path_to_file){
    //if (!empty($mas_tables) && $preffix != "" && $path_to_file != ""){
        $file_add_start = fopen($_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/files_sql_add_more_command/test.sql', 'r+');
        fwrite($file_add_start, '/*start_more*/');
        fclose($file_add_start);

        //$file_add_end = fopen($_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/files_sql_add_more_command/test.sql', 'a+');
        //fwrite($file_add_end, '/*end_more*/');
        //fclose($file_add_end);
    //}
//}