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
<?php
$arr = [];
$dir = $_SERVER['DOCUMENT_ROOT'];

// Получаем все PHP-файлы в текущей директории
$files = glob($dir . '/*.php');

foreach ($files as $file) {
    $content = file_get_contents($file);

    // Ищем все секции с атрибутами data-nav-title и id
    preg_match_all(
            '/<section\s+[^>]*data-nav-title="([^"]*)"[^>]*id="([^"]*)"[^>]*>/i',
            $content,
            $matches,
            PREG_SET_ORDER
    );

    foreach ($matches as $match) {
        $arr[] = [
                'title' => $match[1],
                'url' => basename($file).'#'.$match[2]
        ];
    }
}
?>
	<!--поиск-->
  <div class="NB_search NB_search_size NB_search_color NB_backdrop-blur NB_rounded-30 search-box d-flex me-3 align-items-center justify-content-around">
  		<input type="search" placeholder="Найти" class="NB_search_input NB_search_input_color form-control Fmenu" id="search_input">
  		<?php $APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"main_header_search_ico", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "search",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "main_header_search_ico"
	),
	false
);?>
  			<div class="NB_search_help d-flex flex-column" id="search_help">
  				<!--подсказки-->
  		</div>
  </div>
<script>
const links = [
    <?php foreach($arResult["ITEMS"] as $arItem):?>
        { title: "<?=$arItem['PROPERTIES']['sug_name']['VALUE'];?>", url: "<?=$arItem['PROPERTIES']['sug_link']['VALUE'];?>" },
    <?php endforeach;?>
    <?php foreach($arr as $item):?>
    { title: "<?=$item['title'];?>", url: "<?=$item['url'];?>" },
    <?php endforeach;?>

];
</script>