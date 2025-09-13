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

$title = "";
$paragraph="";
$a_link="";
$a_name="";
foreach($arResult['PROPERTIES'] as $property){
	switch($property['NAME']){
		case 'title':
			$title = $property['VALUE'];
			break;
		case 'paragraph':
			$paragraph = $property['VALUE'];
			break;
		case 'a_link':
			$a_link = $property['VALUE'];
			break;
		case 'a_name':
			$a_name = $property['VALUE'];
			break;
	}
}
?>

<!--приветственный баннер-->
<div class="NB_corner-box widthBase">
	<a href="<?=$a_link?>" class="NB_corner-a NB_rounded-30 d-flex align-items-center justify-content-center"><?=$a_name?></a>
	<div class="NB_corner_content d-flex flex-column justify-content-end">
		<p class="NB_corner_p"><?=$paragraph?></p>
		<h1 class="NB_corner_h"><?=$title?></h1>
	</div>
</div>
