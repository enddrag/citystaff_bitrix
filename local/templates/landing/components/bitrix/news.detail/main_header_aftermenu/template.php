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
?>
<?php foreach ($arResult['PROPERTIES'] as $property) {
    if ($property['NAME'] == 'link') {
        $link = $property['VALUE'];
    }
}
$hide = false;
if ($arResult['PREVIEW_TEXT'] <> '') {
    if ($arResult['PREVIEW_TEXT'] === '1') {
        $hide = true;
    }
}
if (!$hide) :?>
    <?php if (isset($arResult['NAME'])) : ?>
        <div class="NB_nav_special NB_rounded-30 nav-item d-flex align-items-center justify-content-center">
            <a href="<?= $link ?>" class="nav-link d-flex flex-row align-items-center">
                <?php
                if ((!isset($arParams['DISPLAY_PICTURE']) || $arParams['DISPLAY_PICTURE'] != 'N') && is_array($arResult['DETAIL_PICTURE'])) : ?>
                    <div class="NB_nav_special_ico"
                         style="background-image: url('<?= $arResult['DETAIL_PICTURE']['SRC'] ?>')"></div>
                <?php else : ?>
                    <div class="NB_nav_special_ico"></div>
                <?php endif; ?>
                <div class="NB_nav_special_p Fmenu"><?= $arResult['NAME'] ?></div>
            </a>
        </div>
    <?php endif; ?>
<?php else :?>
    <div class="NB_nav_special NB_rounded-30 nav-item d-flex align-items-center justify-content-center" style="visibility: hidden !important;">
    </div>
<?php endif; ?>

