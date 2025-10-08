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
<div class="NB3_q_items widthBase d-flex flex-row flex-wrap justify-content-center">
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
            if ($arSection['CODE'] != 'questions') {
                continue;
            }
        } else {
            continue;
        }
        ?>
        <div class="NB3_q_item d-flex flex-column align-items-center justify-content-between NB_rounded-20"
             id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="NB3_q_item_ask d-flex flex-row justify-content-between">
                <?php
                if ($arParams['DISPLAY_PREVIEW_TEXT'] != 'N' && $arItem['PREVIEW_TEXT']) : ?>
                    <p class="Fbody d-flex flex-row align-items-center">
                        <?= $arItem['PREVIEW_TEXT']; ?>
                    </p>
                <?php endif; ?>
                <div class="NB3_q_X NB_rounded-circle d-flex flex-row align-items-center justify-content-center">
                </div>
            </div>
            <?php
            if ($arParams['DISPLAY_DETAIL_TEXT'] != 'N' && $arItem['DETAIL_TEXT']) : ?>
                <p class="NB3_q_item_answ flex-row align-items-center Fbody NB_rounded-20">
                    <?php echo $arItem['DETAIL_TEXT']; ?>
                </p>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
