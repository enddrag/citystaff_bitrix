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

$link = 'За что начисляются?';

//формируем массив данных для js
$modalsData = [];
foreach ($arResult['ITEMS'] as $arItem) {
    $modalsData[$arItem['CODE']] = $arItem['DETAIL_TEXT'];
}
?>
<script>
    $(document).ready(function () {
        const modalsData = <?= json_encode($modalsData) ?>;
        $(document).on('click', '[data-modal]', function () {
            let modalCode = $(this).attr('id');
            $(".NB_modal_item_text").html(modalsData[modalCode]);

        });
    });
</script>
<div class="NB2_stafcoin_items d-flex flex-row flex-wrap justify-content-center">
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
        ?>
        <div class="NB2_stafcoin_item NB_rounded-20 d-flex flex-row justify-content-between align-items-center"
             id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <p class="Fbody NB2_stafcoin_item_p">
                <?php
                if ($arParams['DISPLAY_NAME'] != 'N' && $arItem['NAME']) : ?>
                    <?= $arItem['NAME'] ?>
                <?php endif; ?>
            </p>
            <div class="NB2_stafcoin_item_right d-flex flex-row justify-content-between NB2_stafcoin_item_p">
                <p class="Fbody NB2_stafcoin_item_right_modal" id="<?= $arItem['CODE'] ?>" data-modal="staffcoins">
                    <?php
                    foreach ($arItem['PROPERTIES'] as $arProp) {
                        if ($arProp['VALUE']) {
                            $link = $arProp['VALUE'];
                        }
                    }

                    echo $link; ?>
                </p>
                <p class="Fbody">
                    <?php
                    if ($arParams['DISPLAY_PREVIEW_TEXT'] != 'N' && $arItem['PREVIEW_TEXT']) {
                        echo $arItem['PREVIEW_TEXT'];
                    } ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
