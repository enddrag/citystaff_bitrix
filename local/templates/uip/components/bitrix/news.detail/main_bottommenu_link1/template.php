<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);

$link = '';
$name = '';

foreach ($arResult['PROPERTIES'] as $property) {
    switch ($property['NAME']) {
        case 'link':
            $link = $property['VALUE'];
            break;
        case 'name':
            $name = $property['VALUE'];
            break;
    }
}
?>
<a href="<?= $link ?>" class="Fmenu">
    <?= $name ?>
</a>
