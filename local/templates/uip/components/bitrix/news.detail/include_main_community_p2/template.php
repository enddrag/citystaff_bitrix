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

if ($arResult['DETAIL_TEXT'] <> '') : ?>
    <p class="Fbody_big NB_content_community_content_item_right_p NB_rounded-20 "><?= $arResult['DETAIL_TEXT']; ?></p>
<?php endif; ?>

