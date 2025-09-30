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
<div class="NB2_bonusInfo_left_item d-flex flex-row justify-content-between">
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
        $selectSection = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
        if ($arSection = $selectSection->GetNext()) {
            if ($arSection['CODE'] !== "bonus_white") {
                continue;
            }
        } else {
            continue;
        }
        $link = '';
        $name = '';
        ?>
        <div class="NB2_bonusInfo_left_item_white NB_rounded-20 d-flex flex-column justify-content-between"
             id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="d-flex flex-column">
                <?php
                if ($arItem["NAME"]) : ?>
                    <h4><?= $arItem["NAME"] ?></h4>
                <?php endif; ?>

                <?php
                if (($arItem["DETAIL_TEXT"] ?? '') !== '') : ?>
                    <p class="Fbody">
                        <?php print_r($arItem["DETAIL_TEXT"]); ?></p>
                <?php endif; ?>
            </div>
            <?php

            foreach ($arItem['PROPERTIES'] as $arProp) {
                if ($arProp['NAME'] == 'link_name') {
                    $name = $arProp['VALUE'];
                } else {
                    if ($arProp['NAME'] == 'link_href') {
                        $link = $arProp['VALUE'];
                    }
                }
            }
            ?>
            <a href="<?= $link ?>" class="NB1_info_item_a d-flex flex-row align-items-center justify-content-start">
                <p class="Fmenu NB1_info_item_a_p"><?= $name ?></p>
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/arrow.svg" alt="стрелочка" class="NB1_info_item_a_arrow">
            </a>
        </div>
    <?php endforeach; ?>
</div>
