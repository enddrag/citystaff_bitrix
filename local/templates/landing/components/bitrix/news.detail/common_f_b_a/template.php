<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$name = "";
$link = "";
foreach ($arResult["PROPERTIES"] as $arProp) {
    if($arProp["NAME"] == "link") $link = $arProp["VALUE"];
    else if ($arProp["NAME"] == "name") $name = $arProp["VALUE"];
}
?>
<a href="<?=$link?>" class="NB3_info1_a Fmenu d-flex flex-column align-items-center justify-content-center NB_rounded-50"><?=$name?></a>