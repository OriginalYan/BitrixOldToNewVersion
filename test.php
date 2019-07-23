<?php
/**
 *
 * скрипт изменения идентификаторов структуры организации
 */
/*
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';


$arFilter = Array("IBLOCK_ID" => 5, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
$res = CIBlockSection::GetList(Array('SORT' => 'ASC'), $arFilter, false);
while ($ob = $res->Fetch()) {
    $masDepart[] = array(
        'ID_DEPART' => $ob['ID'],
        'NAME_DEPART' => $ob['NAME'],
        'XML_ID' => $ob['XML_ID']
    );
}

global $DB;

$str_query = 'SELECT * FROM b_uts_user';
$qw = $DB->Query($str_query);

while ($qr = $qw->Fetch()){
    $curMasDepart[] = $qr;
}


foreach ($curMasDepart as $key => $itemDepart) {
    $departID = unserialize($itemDepart['UF_DEPARTMENT']);
    $valueID = $itemDepart['VALUE_ID'];
    $new_DEPART = array();

    foreach ($departID as $key1 => $rr){
        foreach ($masDepart as $key2 => $item) {
            if ($rr == $item['XML_ID'])
                $new_DEPART[$key1] = intval($item['ID_DEPART']);
        }
    }

    $new_DEPART = "'" . serialize($new_DEPART) . "'";

    $table = 'b_uts_user';
    $fields = array(
        'UF_DEPARTMENT' => $new_DEPART
    );

    $DB->Update($table, $fields, "WHERE VALUE_ID = '" . $valueID . "'", $err_mess . __LINE__);

}*/




