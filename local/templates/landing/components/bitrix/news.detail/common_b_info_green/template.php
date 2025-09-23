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
?>
<div class="NB2_bonusInfo_right_item">
    <?php
    if ((!isset($arParams['DISPLAY_PICTURE']) || $arParams['DISPLAY_PICTURE'] != 'N') && is_array($arResult['DETAIL_PICTURE'])) : ?>
        <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="<?= $arResult['DETAIL_PICTURE']['ALT'] ?>"
             class="NB2_bonusInfo_right_item_ico">
    <?php endif ?>
    <?php
    if ((!isset($arParams['DISPLAY_NAME']) || $arParams['DISPLAY_NAME'] != 'N') && $arResult['NAME']) : ?>
        <h4><?= $arResult['NAME'] ?></h4>
    <?php endif; ?>
    <?php
    if ($arResult['DETAIL_TEXT'] <> '') : ?>
        <p class="Fbody"><?= $arResult['DETAIL_TEXT']; ?></p>
    <?php endif ?>
    <?php
    $i = 0;
    foreach ($arResult['PROPERTIES'] as $arProp) {
        $item[$i] = $arProp['VALUE'];
        $i++;
    } ?>
    <a href="<?= $item[3] ?>"
       class="Fmenu NB2_gradient_button d-flex flex-row align-items-center justify-content-center"><?= $item[2] ?></a>
    <a href="<?= $item[1] ?>" class="NB1_info_item_a d-flex flex-row align-items-center justify-content-start">
        <p class="Fmenu NB1_info_item_a_p"><?= $item[0] ?></p>
        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/white_arrow.svg" alt="стрелочка" class="NB1_info_item_a_arrow">
    </a>
</div>
<div class="NB2_bonusInfo_right_item">
    <?php
if ((!isset($arParams['DISPLAY_PICTURE']) || $arParams['DISPLAY_PICTURE'] != 'N') && is_array($arResult['PREVIEW_PICTURE'])) : ?>
        <img src="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arResult['PREVIEW_PICTURE']['ALT'] ?>"
             class="NB2_bonusInfo_right_item_img">
    <?php endif ?>
</div>
