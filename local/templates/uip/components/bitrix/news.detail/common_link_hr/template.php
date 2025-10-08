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

$link = '';
$name = '';
?>
<div class="NB1_docs_content_info d-flex flex-row">
    <?php
    if ($arResult['DETAIL_TEXT'] <> '') : ?>
        <p class="Fa"><?= $arResult['DETAIL_TEXT']; ?></p>
    <?php endif ?>
    <?php
    foreach ($arResult['PROPERTIES'] as $arProp) {
        if ($arProp['NAME'] == 'name') {
            $name = $arProp['VALUE'];
        } else {
            if ($arProp['NAME'] == 'link') {
                $link = $arProp['VALUE'];
            }
        }
    } ?>
    <a href="<?= $link ?>" class="Fa NB1_info_item_a"><?= $name ?></a>
</div>
