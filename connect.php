<?php

//данные для подключения к бд откуда будут браться таблицы
$connect_from = array(
    'DSN' => 'mysql:host=bitrix-new.devinotest.local;port=3306;dbname=bitrix24prod;charset=utf8;',
    'PASS' => 'bitrix24prod',
    'LOGIN' => 'bitrix24prod',
    'DB_NAME' => 'bitrix24prod'
);

//данные для подключения к бд куда будут они копироваться
$connect_to = array(
    'DSN' => 'mysql:host=bitrix-new.devinotest.local;port=3306;dbname=bitrix24;charset=utf8;',
    'PASS' => 'bitrix24',
    'LOGIN' => 'bitrix24',
    'DB_NAME' => 'bitrix24'
);