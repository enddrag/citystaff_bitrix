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

foreach ($arResult['PROPERTIES'] as $property) {
    if ($property['NAME'] == 'link') {
        $link = $property['VALUE'];
    }
}

if ((!isset($arParams['DISPLAY_PICTURE']) || $arParams['DISPLAY_PICTURE'] != 'N') && is_array($arResult['DETAIL_PICTURE'])) : ?>
    <a href="<?= $link ?>" class="NB_logo navbar-brand text-white fw-bold d-flex flex-column">
        <img
                src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>"
                alt="<?= $arResult['DETAIL_PICTURE']['ALT'] ?>"
                class="NB_logo_img"
        />
    </a>
<?php endif ?>
