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

?>
<div class="NB_content_tradition_gallery d-flex flex-row flex-wrap widthBase justify-content-center">
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
            if ($arSection['CODE'] !== 'NOTGALLERY') {
                continue;
            }
        }

        if ($arParams['DISPLAY_PICTURE'] != 'N' && is_array($arItem['PREVIEW_PICTURE'])) : ?>
            <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>"
                 id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
                 class="NB_content_tradition_gallery_item NB_rounded-20">
        <?php endif ?>
    <?php endforeach; ?>
</div>
