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
?>
<div class="d-flex flex-row justify-content-center">
    <div class="NB_content_cyrcles widthBase d-flex flex-row">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="NB_content_cyrcles_item NB_rounded-circle d-flex flex-column align-items-center justify-content-center" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="NB_content_cyrcles_item_card d-flex flex-column justify-content-around">
			<div class="NB_content_cyrcles_item_number Fbody_big">
				<?=$arItem["FIELDS"]['CODE']?>
            </div>
            <div class="NB_content_cyrcles_item_p">
                <?=$arItem["FIELDS"]['PREVIEW_TEXT']?>      
            </div>
            <h4 class="NB_content_cyrcles_item_h">
				<?=$arItem["FIELDS"]['NAME']?>
            </h4>
		</div>	
	</div>
<?endforeach;?>
	</div>
</div>
