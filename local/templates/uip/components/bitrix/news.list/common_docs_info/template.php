<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

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

$lhref = '';
$lname = '';
?>

<div class="NB1_info">
    <?php
    foreach ($arResult['ITEMS'] as $arItem) : ?>
        <?php
        $this->AddEditAction(
            $arItem['ID'],
            $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT')
        );

        $this->AddDeleteAction(
            $arItem['ID'],
            $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'),
            ['CONFIRM' => Loc::getMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]
        );

        $selectSection = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
        if ($arSection = $selectSection->GetNext()) {
            if ($arSection['NAME'] != 'документы инфо') {
                continue;
            }
        }
        ?>
        <div class="NB1_info_item d-flex flex-column" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <?php
            if ($arParams['DISPLAY_PICTURE'] != 'N' && is_array($arItem['PREVIEW_PICTURE'])) : ?>
                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>"
                     class="NB1_info_item_img">
            <?php endif ?>
            <?php
            if ($arParams['DISPLAY_NAME'] != 'N' && $arItem['NAME']) : ?>
                <h4><?= $arItem['NAME'] ?></h4>
            <?php endif; ?>
            <?php
            if ($arParams['DISPLAY_PREVIEW_TEXT'] != 'N' && $arItem['PREVIEW_TEXT']) : ?>
                <p class="Fbody"><?= $arItem['PREVIEW_TEXT']; ?></p>
            <?php endif; ?>
            <?php
            foreach ($arItem['PROPERTIES'] as $arProp) {
                if ($arProp['NAME'] == 'link_name') {
                    $lname = $arProp['VALUE'];
                } else {
                    if ($arProp['NAME'] == 'link_href') {
                        $lhref = $arProp['VALUE'];
                    }
                }
            } ?>
            <a href="<?= $lhref ?>" class="NB1_info_item_a d-flex flex-row align-items-center justify-content-start">
                <p class="Fmenu NB1_info_item_a_p"><?= $lname ?></p>
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/arrow.svg" alt="стрелочка" class="NB1_info_item_a_arrow">
            </a>
        </div>
    <?php endforeach; ?>
</div>
