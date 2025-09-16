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
<?foreach($arResult["PROPERTIES"] as $pid=>$arProperty):?>
			<?if($arProperty["NAME"] == 'link'){
					$link = $arProperty["VALUE"];
			}?>
<?endforeach;?>
	<?if((!isset($arParams["DISPLAY_PICTURE"]) || $arParams["DISPLAY_PICTURE"]!="N") && is_array($arResult["DETAIL_PICTURE"])):?>
		<a href="<?=$link?>" class="NB_blur NB_content_community_a NB_backdrop-blur NB_rounded-30 d-flex flex-row align-items-center justify-content-center" style="background-image: url('<?=$arResult["DETAIL_PICTURE"]["SRC"]?>')"></a>
	<?endif?>

