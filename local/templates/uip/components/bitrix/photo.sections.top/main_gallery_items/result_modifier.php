<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var $arParams
 * @var $arResult
 */

$arResult['TD_WIDTH'] = round(100 / $arParams['LINE_ELEMENT_COUNT']) . '%';
$arResult['nRowsPerItem'] = 2; //Image and Name
$arResult['bDisplayFields'] = count($arParams['FIELD_CODE']) > 0;

foreach ($arResult['SECTIONS'] as $section_id => $arSection) {
    foreach ($arSection['ITEMS'] as $arItem) {
        if (count($arItem['DISPLAY_PROPERTIES']) > 0) {
            $arResult['bDisplayFields'] = true;
        }

        if ($arResult['bDisplayFields']) {
            break;
        }
    }
}

if ($arResult['bDisplayFields']) {
    $arResult['nRowsPerItem']++;
}

foreach ($arResult['SECTIONS'] as $section_id => $arSection) {
    $arResult['SECTIONS'][$section_id]['ROWS'] = [];
    while (count($arSection['ITEMS']) > 0) {
        $arRow = array_splice($arSection['ITEMS'], 0, $arParams['LINE_ELEMENT_COUNT']);

        while (count($arRow) < $arParams['LINE_ELEMENT_COUNT']) {
            $arRow[] = false;
        }

        $arResult['SECTIONS'][$section_id]['ROWS'][] = $arRow;
    }
}
