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
$link = "";
?>

<?php
foreach($arResult['PROPERTIES'] as $property) {
    switch($property['NAME']) {
        case 'link':
            $link = $property['VALUE'];
            break;
    }
} 
?>

<?if(isset($arResult["NAME"])):?>
<!--маркет-->
<div class="NB_nav_special NB_rounded-30 nav-item d-flex align-items-center justify-content-center">
		<a href="<?=$link?>" class="nav-link d-flex flex-row align-items-center">
			<?if((!isset($arParams["DISPLAY_PICTURE"]) || $arParams["DISPLAY_PICTURE"]!="N") && is_array($arResult["DETAIL_PICTURE"])):?>
			<div class="NB_nav_special_ico" style="background-image: url('<?=$arResult["DETAIL_PICTURE"]["SRC"]?>')"></div>
			<?else:?>
				<div class="NB_nav_special_ico"></div>
			<?endif;?>
				<div class="NB_nav_special_p Fmenu"><?=$arResult["NAME"]?></div>
		</a>
</div>



<?endif;?>