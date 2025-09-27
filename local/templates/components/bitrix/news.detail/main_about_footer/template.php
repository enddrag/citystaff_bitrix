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

<!--зеленое послесловие-->
<div class="NB_about_footer NB_rounded-20 d-flex flex-row justify-content-between flex-wrap align-items-center">
    <?php
    if ((!isset($arParams['DISPLAY_PICTURE']) || $arParams['DISPLAY_PICTURE'] != 'N') && is_array($arResult['DETAIL_PICTURE'])) : ?>
        <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="<?= $arResult['DETAIL_PICTURE']['ALT'] ?>"
             class="NB_about_footer_title d-flex flex-column justify-content-center">
    <?php endif ?>
    <?php
    if ($arResult['DETAIL_TEXT'] <> '') : ?>
        <div class="NB_about_footer_p text-white d-flex justify-content-start align-items-center Fbody">
            <?= $arResult['DETAIL_TEXT']; ?>
        </div>
    <?php endif; ?>
</div>

