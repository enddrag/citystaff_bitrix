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
foreach($arResult['PROPERTIES'] as $prop){
    if($prop['CODE'] === 'link')$link = $prop['VALUE'];
}
if ($arResult['DETAIL_TEXT'] <> '') : ?>
    <a href="<?=$link?>" class="Fmenu NB_content_department_a NB_rounded-30 d-flex flex-row justify-content-center align-items-center"><?= $arResult['DETAIL_TEXT']; ?></a>
<?php endif;?>