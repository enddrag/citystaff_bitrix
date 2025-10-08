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
<?php
foreach ($arResult['ITEMS'] as $arItem): ?>
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
        if ($arSection['CODE'] != 'offices') {
            continue;
        }
    } else {
        continue;
    }
    ?>
    <div class="NB3_WH_item_item d-flex flex-column align-items-end justify-content-between"
         id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <div class="NB3_WH_i_i_info d-flex flex-row justify-content-between">
            <p class="Fbody d-flex flex-row align-items-center">
                <?php
                if ($arParams['DISPLAY_NAME'] != 'N' && $arItem['NAME']): ?>
                    <?= $arItem['NAME'] ?>:
                <?php endif; ?>
            </p>
            <p class="Fbody d-flex flex-column align-items-end">
                <?php
                if ($arParams['DISPLAY_PREVIEW_TEXT'] != 'N' && $arItem['PREVIEW_TEXT']): ?>
                    <?php
                    echo $arItem['PREVIEW_TEXT']; ?>
                <?php endif; ?>
            </p>
        </div>
        <?php
        if ($arParams['DISPLAY_DETAIL_TEXT'] != 'N' && $arItem['DETAIL_TEXT']): ?>
            <div class="NB3_WH_i_i_info">
                <p class="Fmenu">
                    <?php
                    echo $arItem['DETAIL_TEXT']; ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
<?php endforeach; ?>
