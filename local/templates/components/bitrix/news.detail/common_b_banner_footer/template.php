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
?>

<div class="NB2_banner_footer NB_rounded-20 d-flex flex-row justify-content-between align-items-center">
    <?php
    if ($arResult['DETAIL_TEXT'] <> '') : ?>
        <p class="Fbody"><?= $arResult['DETAIL_TEXT']; ?></p>
    <?php endif ?>
    <?php
    if (
        (!isset($arParams['DISPLAY_PICTURE']) || $arParams['DISPLAY_PICTURE'] != 'N') && is_array(
            $arResult['DETAIL_PICTURE']
        )
    ) : ?>
        <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="<?= $arResult['DETAIL_PICTURE']['ALT'] ?>"
             class="NB2_banner_footer_img">
    <?php endif ?>
</div>
