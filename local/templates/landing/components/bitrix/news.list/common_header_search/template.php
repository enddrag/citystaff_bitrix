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
$dir = $_SERVER['DOCUMENT_ROOT']."/citystaff";

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
<!--поиск-->
    <div class="NB_search NB1_search_color NB_search_size NB_backdrop-blur NB_rounded-30 search-box d-flex me-3 align-items-center justify-content-around">
            <input type="search" placeholder="Найти" class="NB_search_input form-control Fmenu" id="search_input">
            <?php $APPLICATION->IncludeComponent("bitrix:news.detail", "main_header_search_ico_green", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить детальное изображение
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"ELEMENT_CODE" => "search_green",	// Код новости
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],	// ID новости
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "",	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Страница",	// Название категорий
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа элемента
		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
		"USE_SHARE" => "N",	// Отображать панель соц. закладок
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