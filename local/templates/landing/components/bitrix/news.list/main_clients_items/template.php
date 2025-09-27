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

$allItems = [];
foreach ($arResult['ITEMS'] as $arItem){
    $selectSection = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
    if ($arSection = $selectSection->GetNext()) {
        if ($arSection['CODE'] !== 'clients') {
            continue;
        }
    } else {
        continue;
    }
    $allItems[] = $arItem;

}
$itemsCount = count($allItems);
$items1 = 0;//количество элементов в первой карусели
$items2 = 0;//количество элементов в первой карусели
if ($itemsCount == 1) {
    $items1 = 1;
    $items2 = 0;
} else {
    if ($itemsCount == 0) {
        $items1 = 0;
        $items2 = 0;
    } else {
        $items1 = floor($itemsCount / 2);
        $items2 = $itemsCount - $items1;
    }
}
$i = 0;
?>
<div class="NB_content_corusel ontheleft">
    <!--логотипы-->
    <?php
    foreach ($allItems as $arItem) : ?>
        <?php
        if ($i < $items1) : ?>
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
            <div class="NB_content_corusel_item d-flex align-items-center justify-content-center"
                 style="flex: 0 0 calc(100% / <?= $items1 ?>);" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <?php
                if ($arParams['DISPLAY_PICTURE'] != 'N' && is_array($arItem['PREVIEW_PICTURE'])) : ?>
                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>">
                    <?php
                endif ?>
            </div>
            <?php
            $i += 1;
        else :?>
            <?php break; ?>
        <?php endif; ?>

    <?php endforeach; ?>

    <?php
    $i = 0;//чтобы пройти мимо лишних элементов?>
    <!--дубликаты-->
    <?php
    foreach ($allItems as $arItem) : ?>
        <?php
        if ($i < $items1) : ?>
            <div class="NB_content_corusel_item d-flex align-items-center justify-content-center"
                 style="flex: 0 0 calc(100% / <?= $items1 ?>);" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <?php
                if ($arParams['DISPLAY_PICTURE'] != 'N' && is_array($arItem['PREVIEW_PICTURE'])) : ?>
                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>">
                <?php endif ?>
            </div>
            <?php
            $i += 1;
        else :?>
            <?php break; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<div class="NB_content_corusel d-flex flex-row ontheright">
    <?php
    $i = 0;//чтобы пройти мимо лишних элементов?>
    <!--логотипы-->
    <?php
    foreach ($allItems as $arItem) : ?>
        <?php
        if ($i >= $items1) : ?>
            <?php
            if ($i < $itemsCount) : ?>
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
                <div class="NB_content_corusel_item d-flex align-items-center justify-content-center"
                     style="flex: 0 0 calc(100% / <?= $items2 ?>);" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <?php
                    if ($arParams['DISPLAY_PICTURE'] != 'N' && is_array($arItem['PREVIEW_PICTURE'])) : ?>
                        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                             alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>">
                    <?php endif ?>
                </div>
            <?php endif; ?>
            <?php
            $i += 1; ?>
        <?php else : ?>
            <?php
            $i += 1; ?>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php
    $i = 0;//чтобы пройти мимо лишних элементов?>
    <!--дубликаты-->
    <?php
    foreach ($allItems as $arItem) : ?>
        <?php
        if ($i >= $items1) : ?>
            <?php
            if ($i < $itemsCount) : ?>
                <div class="NB_content_corusel_item d-flex align-items-center justify-content-center"
                     style="flex: 0 0 calc(100% / <?= $items2 ?>);" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <?php
                    if ($arParams['DISPLAY_PICTURE'] != 'N' && is_array($arItem['PREVIEW_PICTURE'])) : ?>
                        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                             alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>">
                    <?php endif ?>
                </div>
            <?php endif; ?>
            <?php
            $i += 1; ?>
        <?php else : ?>
            <?php
            $i += 1; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
