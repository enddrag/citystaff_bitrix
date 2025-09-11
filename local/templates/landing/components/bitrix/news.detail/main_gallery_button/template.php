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
$value = "";
?>
<div class="NB_content_tradition_footer_link d-flex flex-row align-items-center justify-content-center">
	<?if((!isset($arParams["DISPLAY_NAME"]) || $arParams["DISPLAY_NAME"]!="N") && $arResult["NAME"]):?>
		<?foreach($arResult["PROPERTIES"] as $pid=>$arProperty){
			if($arProperty["NAME"] == 'link') $link = $arProperty["VALUE"];
			else if($arProperty["NAME"] == 'name') $value = $arProperty["VALUE"];
		}?>
		<a class="NB_content_tradition_footer_a NB_rounded-30 Fmenu d-flex flex-row justify-content-center align-items-center" href="<?=$link?>"><?=$value?></a>
		<?if((!isset($arParams["DISPLAY_PICTURE"]) || $arParams["DISPLAY_PICTURE"]!="N") && is_array($arResult["DETAIL_PICTURE"])):?>
			<img
				class="NB_content_tradition_footer_img"
				src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
				alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
				/>
		<?endif?>
<?endif;?>
</div>