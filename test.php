<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix_perenos/connect.php';

try {
    $pdo = new PDO($connect_to['DSN'], $connect_to['LOGIN'], $connect_to['PASS']);
    $res = 'SHOW CREATE TABLE b_tasks';
    $rr = $pdo->query($res);

    $cr_tab = $rr->fetch()['Create Table'];
} catch (PDOException $e) {
    exit('Ошибка подключения ' . $e->getMessage());
}