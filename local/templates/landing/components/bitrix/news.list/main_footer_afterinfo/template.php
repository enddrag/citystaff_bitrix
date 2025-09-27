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
<div class="NB_footer_afterinfo d-flex flex-row">
    <?php
    foreach ($arResult['ITEMS'] as $arItem) : ?>
        <?php
        $selectSection = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
        if ($arSection = $selectSection->GetNext()) {
            if ($arSection['CODE'] !== "TermsOfService") {
                continue;
            }
        } else {
            continue;
        }
        ?>
        <?php
        $link = '';
        foreach ($arItem['PROPERTIES'] as $property) {
            if ($property['NAME'] == 'link') {
                $link = $property['VALUE'];
            }
        } ?>
        <?php
        if (!empty($link)) : ?>
            <div class="NB_footer_afterinfo_content" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <a href="<?= $link ?>" class="NB_footer_afterinfo_content_a"><?= $arItem['NAME'] ?></a>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php
    foreach ($arResult['ITEMS'] as $arItem) : ?>
        <?php
        $selectSection = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
        if ($arSection = $selectSection->GetNext()) {
            if ($arSection['CODE'] !== "TermsOfService") {
                continue;
            }
        } else {
            continue;
        }
        ?>
        <?php
        $link = '';
        foreach ($arItem['PROPERTIES'] as $property) {
            if ($property['NAME'] == 'link') {
                $link = $property['VALUE'];
            }
        } ?>
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
                ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]
        );
        ?>
        <?php
        if (empty($link)) : ?>
            <div class="NB_footer_afterinfo_content pr-0 ml-auto"
                 id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <p class="NB_footer_afterinfo_content_p">
                    <?= $arItem['NAME'] ?>
                </p>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
