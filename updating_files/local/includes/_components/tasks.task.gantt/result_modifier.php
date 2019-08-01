<?php

$arResult["GROUPS"][0] = ['SORT' => -200000];

if(!function_exists('sortBySort'))
{
    function sortBySort($a, $b)
    {
        if($a['SORT'] == $b['SORT'])
        {
            return 0;
        }

        return ($a['SORT'] < $b['SORT']) ? -1 : 1;
    }
}

uasort($arResult["GROUPS"], 'sortBySort');

$arTmp = $arResult["LIST"];

foreach($arResult["LIST"] as $arTask)
{
    $arResult['GROUPS'][$arTask['GROUP_ID']]['TASKS'][] = $arTask;
}

$sorting = 0;
$arResult["LIST"] = [];
foreach($arResult['GROUPS'] as $k => $arGroup)
{
    foreach($arGroup['TASKS'] as $arTask)
    {
        $arTask['SORTING'] = $sorting;
        $sorting = $sorting + 10;
        $arResult["LIST"][] = $arTask;
    }

    unset($arResult['GROUPS'][$k]['TASKS']);
}

unset($arResult["GROUPS"][0]);