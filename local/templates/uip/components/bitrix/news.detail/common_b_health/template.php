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

$item = ['', '', '', ''];
$i = 0;

foreach ($arResult['PROPERTIES'] as $arProp) {
    $item[$i] = $arProp['VALUE'];
    $i++;
}
?>
<div class="NB2_sport_left_links d-flex flex-row">
    <a href="<?= $item[1] ?>" class="Fmenu NB2_gradient_button d-flex flex-row align-items-center justify-content-center">
        <?= $item[0] ?>
    </a>
    <a href="<?= $item[3] ?>" class="NB1_info_item_a d-flex flex-row align-items-center justify-content-start ml-5">
        <p class="Fmenu NB1_info_item_a_p"><?= $item[2] ?></p>
        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/arrow.svg" alt="стрелочка" class="NB1_info_item_a_arrow">
    </a>
</div>
