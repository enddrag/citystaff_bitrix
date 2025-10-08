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
<!--спорт-->
<section data-nav-title="Поддержка здоровья" id="sport"
         class="widthBase NB_content NB2_sport d-flex flex-row justify-content-between">
    <div class="NB2_sport_left d-flex flex-column justify-content-center">
        <?php
        if ((!isset($arParams['DISPLAY_PREVIEW_TEXT']) || $arParams['DISPLAY_PREVIEW_TEXT'] != 'N') && $arResult['PREVIEW_TEXT']) : ?>
            <h3>
                <?= $arResult['PREVIEW_TEXT'] ?>
            </h3>
        <?php endif; ?>
        <?php
        if ($arResult['DETAIL_TEXT'] <> '') : ?>
            <p class="Fbody"><?= $arResult['DETAIL_TEXT']; ?></p>
        <?php endif ?>
        <div class="NB2_sport_left_links d-flex flex-row justify-content-between">
            <a href="<?= $item[1] ?>" class="Fmenu NB2_gradient_button d-flex flex-row align-items-center justify-content-center">
                <?= $item[0] ?>
            </a>
            <a href="<?= $item[3] ?>" class="NB1_info_item_a d-flex flex-row align-items-center justify-content-start">
                <p class="Fmenu NB1_info_item_a_p"><?= $item[2] ?></p>
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/arrow.svg" alt="стрелочка" class="NB1_info_item_a_arrow">
            </a>
        </div>
    </div>
    <?php
    if ((!isset($arParams['DISPLAY_PICTURE']) || $arParams['DISPLAY_PICTURE'] != 'N') && is_array($arResult['DETAIL_PICTURE'])) : ?>
        <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="<?= $arResult['DETAIL_PICTURE']['ALT'] ?>"
             class="NB2_sport_right NB_rounded-20">
    <?php endif ?>
</section>
