<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
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
<div class="NB_about_content_wrap d-flex flex-wrap-reverse justify-content-between">
    <?php
    foreach ($arResult["ITEMS"] as $arItem) : ?>
        <?php
        $this->AddEditAction(
            $arItem['ID'],
            $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT")
        );
        $this->AddDeleteAction(
            $arItem['ID'],
            $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
        );
        ?>
        <?php
        $selectSection = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
        if ($arSection = $selectSection->GetNext()) {
            if (mb_strtolower($arSection['NAME']) != 'о нас пункты') {
                continue;
            }
        } else {
            continue;
        }
        ?>
        <div class="NB_about_content_wrap_item d-flex flex-column justify-content-end"
             id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <?php
            if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])) : ?>
                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                     alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="NB_about_content_wrap_item_img">
            <?php endif ?>
            <?php
            if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]) : ?>
                <h4 class="NB_about_content_wrap_item_p d-flex flex-row align-items-center"><?php
                    echo $arItem["PREVIEW_TEXT"]; ?></h4>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
