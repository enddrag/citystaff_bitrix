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
<div class="photo-sections-top">
    <?php
        foreach ($arResult['SECTIONS'] as $arSection): ?>
        <p class="Fbody NB_content_tradition_p NB_content_tradition_gallery_filter <?= $arSection['CODE'] ?>"><?=$arSection['DESCRIPTION']?></p>
    <?php endforeach?>
    <div class="NB_content_tradition_menu NB_rounded-50 widthBase d-flex flex-row justify-content-around align-items-center">
        <?php
        foreach ($arResult['SECTIONS'] as $arSection): ?>
            <?php
            if (!empty($arSection['ITEMS'])): ?>
                <?php
                $this->AddEditAction(
                    'section_' . $arSection['ID'],
                    $arSection['ADD_ELEMENT_LINK'],
                    CIBlock::GetArrayByID($arSection['IBLOCK_ID'], 'ELEMENT_ADD'),
                    ['ICON' => 'bx-context-toolbar-create-icon']
                );
                $this->AddEditAction(
                    'section_' . $arSection['ID'],
                    $arSection['EDIT_LINK'],
                    CIBlock::GetArrayByID($arSection['IBLOCK_ID'], 'SECTION_EDIT')
                );
                $this->AddDeleteAction(
                    'section_' . $arSection['ID'],
                    $arSection['DELETE_LINK'],
                    CIBlock::GetArrayByID($arSection['IBLOCK_ID'], 'SECTION_DELETE'),
                    ['CONFIRM' => GetMessage('CT_BPS_SECTION_DELETE_CONFIRM')]
                );
                if ($arSection['CODE'] == 'NOTGALLERY') {
                    continue;
                }
                ?>
                <div class="d-flex flex-row align-items-center justify-content-center NB_content_tradition_menu_item NB_rounded-30 Fbody text-white NB_backdrop-blur"
                     id="<?= $arSection['CODE'] ?> <?= $this->GetEditAreaId('section_' . $arSection['ID']); ?>">
                    <?= $arSection['NAME'] ?>
                </div>
            <?php endif; ?>

        <?php endforeach; ?>
    </div>
    <div class="NB_content_tradition_gallery d-flex flex-row flex-wrap widthBase">
        <?php
        foreach ($arResult['SECTIONS'] as $arSection): ?>
            <?php
            foreach ($arSection['ROWS'] as $arItems): ?>
                <?php
                foreach ($arItems as $arItem): ?>
                    <?php
                    if (is_array($arItem)): ?>
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
                            ['CONFIRM' => GetMessage('CT_BPS_ELEMENT_DELETE_CONFIRM')]
                        );
                        if ($arSection['CODE'] == 'NOTGALLERY') {
                            continue;
                        }
                        ?>
                        <?php
                        if (is_array($arItem['PICTURE'])): ?>
                            <img
                                class="NB_content_tradition_gallery_item NB_content_tradition_gallery_filter NB_rounded-20 <?= $arSection['CODE'] ?>"
                                id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
                                src="<?= $arItem['PICTURE']['SRC'] ?>"
                                alt="<?= $arItem['PICTURE']['ALT'] ?>"
                            />
                        <?php
                        endif; ?>
                    <?php
                    endif; ?>
                <?php
                endforeach ?>
            <?php
            endforeach ?>
        <?php
        endforeach; ?>
    </div>
</div>
