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
<?php
$type = 44;
$arSection = null;
foreach ($arResult["ITEMS"] as $arItem) {
    $selectSection = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
    if ($arSection = $selectSection->GetNext()) {
        if ($arItem['IBLOCK_SECTION_ID'] == $type) {
            break;
        }
    }
}
if ($arSection['ID'] != $type) {
    $arSection = false;
}
?>
<?php
if (!empty($arSection['NAME'])) : ?>
    <div class="NB_footer_content d-flex flex-column">
        <p class="NB_footer_content_title Fbody_big text-white">
            <?= $arSection['NAME'] ?>
        </p>
        <div class="NB_footer_content_item">
            <?php
            foreach ($arResult["ITEMS"] as $arItem) : ?>
                <?php
                $link = "";
                foreach ($arItem['PROPERTIES'] as $property) {
                    if ($property['NAME'] == 'link') {
                        $link = $property['VALUE'];
                    }
                }
                ?>
                <?php
                if ($arItem['IBLOCK_SECTION_ID'] == $type) : ?>
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
                    if (is_array($arItem["PREVIEW_PICTURE"])) : ?>
                        <a href="<?= $link ?>" class="NB_footer_content_item_a"
                           id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                 alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
                        </a>
                    <?php else : ?>
                        <div class="NB_footer_content_item_p Fmenu" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <?= $arItem["NAME"] ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>


<?php endif; ?>
