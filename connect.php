<?php

//данные для подключения к бд откуда будут браться таблицы
$connect_from = array(
    'DSN' => 'mysql:host=bitrix-new.devinotest.local;port=3306;dbname=bitrix24prod;charset=utf8;',
    'PASS' => 'willbechanged',
    'LOGIN' => 'root',
    'DB_NAME' => 'bitrix24prod'
);

//данные для подключения к бд куда будут они копироваться
$connect_to = array(
    'DSN' => 'mysql:host=localhost;port=3306;dbname=bitrix24loc;charset=utf8;',
    'PASS' => '',
    'LOGIN' => 'root',
    'DB_NAME' => 'bitrix24loc'
);