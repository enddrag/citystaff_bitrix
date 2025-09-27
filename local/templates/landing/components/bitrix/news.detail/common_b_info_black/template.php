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
$id = '';
$name = '';

foreach ($arResult['PROPERTIES'] as $arProp) {
    if ($arProp['NAME'] == 'link_name') {
        $name = $arProp['VALUE'];
    }
}
?>
<div class="NB2_bonusInfo_left_item d-flex flex-row justify-content-between">
    <div class="NB2_bonusInfo_left_item_black NB_rounded-20 d-flex flex-row align-items-center">
        <div class="NB2_bonusInfo_left_item_black_item d-flex flex-column justify-content-center">
            <?php
            if ((!isset($arParams['DISPLAY_PREVIEW_TEXT']) || $arParams['DISPLAY_PREVIEW_TEXT'] != 'N') && $arResult['PREVIEW_TEXT']) : ?>
                <h4><?= $arResult['PREVIEW_TEXT'] ?></h4>
            <?php endif; ?>
            <?php
            if ($arResult['DETAIL_TEXT'] <> '') : ?>
                <p class="Fbody"><?= $arResult['DETAIL_TEXT']; ?></p>
            <?php endif ?>
            <p class="Fmenu NB2_gradient_button d-flex flex-row align-items-center justify-content-center"
               data-modal="application">
                <?= $name ?>
            </p>
        </div>
        <?php
        if ((!isset($arParams['DISPLAY_PICTURE']) || $arParams['DISPLAY_PICTURE'] != 'N') && is_array($arResult['DETAIL_PICTURE'])) : ?>
            <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="<?= $arResult['DETAIL_PICTURE']['ALT'] ?>"
                 class="NB2_bonusInfo_left_item_black_img d-flex flex-row align-items-center justify-content-center">
        <?php endif ?>
    </div>
</div>
