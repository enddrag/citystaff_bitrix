<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application;
use Bitrix\Main\Localization\Loc;
use Citystaff\Base\Helper\FileHelper;

/**
 * @var array $arParams
 * @var array $arResult
 */

$coreTemplatePath = '/bitrix/components/bitrix/crm.deal.list/templates/.default';
Loc::loadMessages(Application::getDocumentRoot() . $coreTemplatePath . '/template.php');
$this->addExternalCss($coreTemplatePath . '/style.css');

$fileContent = FileHelper::getContentPhpFile(
    Application::getDocumentRoot() . $coreTemplatePath . '/template.php',
    false,
    false,
    false
);

/** 113813 Изменение даты в сделках */
$fileContent = str_replace(
    [
        'FormatDate($arResult[\'TIME_FORMAT\'], MakeTimeStamp($dateCreate), $now)',
        'FormatDate($arResult[\'TIME_FORMAT\'], MakeTimeStamp($dateModify), $now)',
    ],
    [
        '$dateCreate',
        '$dateModify',
    ],
    $fileContent
);

eval('?>' . $fileContent);
