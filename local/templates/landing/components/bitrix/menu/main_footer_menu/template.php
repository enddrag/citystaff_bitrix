<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="NB_footer_content d-flex flex-column">
		<p class="NB_footer_content_title Fbody_big text-white">Меню</p>
		<div class="NB_footer_content_item d-flex flex-wrap">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<div class="NB_footer_content_item_p Fmenu">
			<a href="<?=$arItem["LINK"]?>" class="NB_footer_content_item_a"><?=$arItem["TEXT"]?></a>
		</div>
	<?else:?>
		<div class="NB_footer_content_item_p Fmenu">
			<a href="<?=$arItem["LINK"]?>" class="NB_footer_content_item_a"><?=$arItem["TEXT"]?></a>
		</div>
	<?endif?>
<?endforeach?>
		</div>
</div>
<?endif?>