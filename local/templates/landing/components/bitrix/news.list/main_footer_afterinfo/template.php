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


<?

	$type = 45;
	$arSection = null;
	foreach($arResult["ITEMS"] as $arItem){

		$selectSection = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
		if($arSection = $selectSection->GetNext()) if($arItem['IBLOCK_SECTION_ID']==$type){
			break;
		}
	}
	if($arSection['ID']!=$type) $arSection = false;
?>

<?if(!empty($arSection['NAME'])):?>
	<div class="NB_footer_afterinfo d-flex flex-row">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?if($arItem['IBLOCK_SECTION_ID']==$type):?>
				<?
					$link = "";
					foreach($arItem['PROPERTIES'] as $property) {
								switch($property['NAME']) {
									case 'link':
										$link = $property['VALUE'];
										break;
						}
					}?>
				<?if(!empty($link)):?>
					<div class="NB_footer_afterinfo_content" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<a href="<?=$link?>" class="NB_footer_afterinfo_content_a"><?=$arItem["NAME"]?></a>
					</div>
				<?endif;?>
			<?endif;?>
		<?endforeach;?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?if($arItem['IBLOCK_SECTION_ID']==$type):?>
					<?
					$link = "";
					foreach($arItem['PROPERTIES'] as $property) {
								switch($property['NAME']) {
									case 'link':
										$link = $property['VALUE'];
										break;
						}
					}?>
				<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<?if(empty($link)):?>
					<div class="NB_footer_afterinfo_content pr-0 ml-auto" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<p class="NB_footer_afterinfo_content_p">
							<?=$arItem["NAME"]?>
						</p>      
					</div>
				<?endif;?>
			<?endif;?>
		<?endforeach;?>
	</div>
<?endif;?>