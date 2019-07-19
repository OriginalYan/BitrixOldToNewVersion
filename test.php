<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/connect.php';

try {
    $pdo = new PDO($connect_to['DSN'], $connect_to['LOGIN'], $connect_to['PASS']);

} catch (PDOException $e) {
    exit('Ошибка подключения ' . $e->getMessage());
}