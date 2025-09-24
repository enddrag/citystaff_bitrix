<?php
global $APPLICATION, $IB_ID;
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная', true);

?>
    <!----баннер лендинга---->
    <section class="NB_banner d-flex flex-column align-items-center"
             style=" background: linear-gradient(#00000000 0%, black)">
        <video autoplay loop muted playsinline class="NB_banner_preview">
            <source src="<?=SITE_TEMPLATE_PATH?>/assets/img/banner.mp4" type="video/mp4">
        </video>
        <!--навигационное меню сайта-->
        <nav class="NB_menu NB_menu_color NB_backdrop-blur NB_rounded-50 widthBase navbar navbar-expand-lg d-flex flex-row justify-content-around">
            <div class="NB_left d-flex flex-row justify-content-around align-items-center">
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:news.detail',
                    'main_header_logotype',
                    [
                        'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                        'ADD_ELEMENT_CHAIN' => 'N',
                        'ADD_SECTIONS_CHAIN' => 'Y',
                        'AJAX_MODE' => 'N',
                        'AJAX_OPTION_ADDITIONAL' => '',
                        'AJAX_OPTION_HISTORY' => 'N',
                        'AJAX_OPTION_JUMP' => 'N',
                        'AJAX_OPTION_STYLE' => 'N',
                        'BROWSER_TITLE' => '-',
                        'CACHE_GROUPS' => 'Y',
                        'CACHE_TIME' => '36000000',
                        'CACHE_TYPE' => 'A',
                        'CHECK_DATES' => 'Y',
                        'DETAIL_URL' => '',
                        'DISPLAY_BOTTOM_PAGER' => 'Y',
                        'DISPLAY_DATE' => 'N',
                        'DISPLAY_NAME' => 'N',
                        'DISPLAY_PICTURE' => 'Y',
                        'DISPLAY_PREVIEW_TEXT' => 'N',
                        'DISPLAY_TOP_PAGER' => 'N',
                        'ELEMENT_CODE' => 'logo_header',
                        'ELEMENT_ID' => $_REQUEST['ELEMENT_ID'],
                        'FIELD_CODE' => [
                            0 => 'NAME',
                            1 => '',
                        ],
                        'IBLOCK_ID' => '',
                        'IBLOCK_TYPE' => 'CityStaffUIP',
                        'IBLOCK_URL' => '',
                        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                        'MESSAGE_404' => '',
                        'META_DESCRIPTION' => '-',
                        'META_KEYWORDS' => '-',
                        'PAGER_BASE_LINK_ENABLE' => 'N',
                        'PAGER_SHOW_ALL' => 'N',
                        'PAGER_TEMPLATE' => '.default',
                        'PAGER_TITLE' => 'Страница',
                        'PROPERTY_CODE' => [
                            0 => '',
                            1 => 'link',
                            2 => '',
                        ],
                        'SET_BROWSER_TITLE' => 'N',
                        'SET_CANONICAL_URL' => 'N',
                        'SET_LAST_MODIFIED' => 'N',
                        'SET_META_DESCRIPTION' => 'N',
                        'SET_META_KEYWORDS' => 'N',
                        'SET_STATUS_404' => 'N',
                        'SET_TITLE' => 'N',
                        'SHOW_404' => 'N',
                        'STRICT_SECTION_CHECK' => 'N',
                        'USE_PERMISSIONS' => 'N',
                        'USE_SHARE' => 'N',
                        'COMPONENT_TEMPLATE' => 'main_header_logotype',
                    ],
                    false
                ); ?>
                <!--Основное содержимое меню-->
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:news.list',
                    'main_header_search',
                    [
                        'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                        'ADD_SECTIONS_CHAIN' => 'Y',
                        'AJAX_MODE' => 'N',
                        'AJAX_OPTION_ADDITIONAL' => '',
                        'AJAX_OPTION_HISTORY' => 'N',
                        'AJAX_OPTION_JUMP' => 'N',
                        'AJAX_OPTION_STYLE' => 'Y',
                        'CACHE_FILTER' => 'N',
                        'CACHE_GROUPS' => 'Y',
                        'CACHE_TIME' => '36000000',
                        'CACHE_TYPE' => 'A',
                        'CHECK_DATES' => 'Y',
                        'DETAIL_URL' => '',
                        'DISPLAY_BOTTOM_PAGER' => 'Y',
                        'DISPLAY_DATE' => 'Y',
                        'DISPLAY_NAME' => 'Y',
                        'DISPLAY_PICTURE' => 'Y',
                        'DISPLAY_PREVIEW_TEXT' => 'Y',
                        'DISPLAY_TOP_PAGER' => 'N',
                        'FIELD_CODE' => [
                            0 => '',
                            1 => '',
                        ],
                        'FILTER_NAME' => '',
                        'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
                        'IBLOCK_ID' => $IB_ID["sug"],
                        'IBLOCK_TYPE' => 'CityStaffUIP',
                        'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
                        'INCLUDE_SUBSECTIONS' => 'Y',
                        'MESSAGE_404' => '',
                        'NEWS_COUNT' => '1000',
                        'PAGER_BASE_LINK_ENABLE' => 'N',
                        'PAGER_DESC_NUMBERING' => 'N',
                        'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                        'PAGER_SHOW_ALL' => 'N',
                        'PAGER_SHOW_ALWAYS' => 'N',
                        'PAGER_TEMPLATE' => '.default',
                        'PAGER_TITLE' => 'Новости',
                        'PARENT_SECTION' => '',
                        'PARENT_SECTION_CODE' => '',
                        'PREVIEW_TRUNCATE_LEN' => '',
                        'PROPERTY_CODE' => [
                            0 => 'sug_link',
                            1 => 'sug_name',
                            2 => '',
                        ],
                        'SET_BROWSER_TITLE' => 'N',
                        'SET_LAST_MODIFIED' => 'N',
                        'SET_META_DESCRIPTION' => 'Y',
                        'SET_META_KEYWORDS' => 'Y',
                        'SET_STATUS_404' => 'N',
                        'SET_TITLE' => 'N',
                        'SHOW_404' => 'N',
                        'SORT_BY1' => 'ACTIVE_FROM',
                        'SORT_BY2' => 'SORT',
                        'SORT_ORDER1' => 'DESC',
                        'SORT_ORDER2' => 'ASC',
                        'STRICT_SECTION_CHECK' => 'N',
                        'COMPONENT_TEMPLATE' => 'main_header_search',
                    ],
                    false
                ); ?>
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:menu',
                    'main_header_menu',
                    [
                        'ALLOW_MULTI_SELECT' => 'N',
                        'CHILD_MENU_TYPE' => 'left',
                        'DELAY' => 'N',
                        'MAX_LEVEL' => '1',
                        'MENU_CACHE_GET_VARS' => [0 => ''],
                        'MENU_CACHE_TIME' => '3600',
                        'MENU_CACHE_TYPE' => 'N',
                        'MENU_CACHE_USE_GROUPS' => 'Y',
                        'ROOT_MENU_TYPE' => 'top',
                        'USE_EXT' => 'N',
                    ]
                ); ?>
            </div>
            <div class="NB_right d-flex flex-row justify-content-around align-items-center">
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:news.detail',
                    'main_header_aftermenu',
                    [
                        'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                        'ADD_ELEMENT_CHAIN' => 'N',
                        'ADD_SECTIONS_CHAIN' => 'N',
                        'AJAX_MODE' => 'N',
                        'AJAX_OPTION_ADDITIONAL' => '',
                        'AJAX_OPTION_HISTORY' => 'N',
                        'AJAX_OPTION_JUMP' => 'N',
                        'AJAX_OPTION_STYLE' => 'N',
                        'BROWSER_TITLE' => '-',
                        'CACHE_GROUPS' => 'Y',
                        'CACHE_TIME' => '36000000',
                        'CACHE_TYPE' => 'A',
                        'CHECK_DATES' => 'Y',
                        'DETAIL_URL' => '',
                        'DISPLAY_BOTTOM_PAGER' => 'N',
                        'DISPLAY_DATE' => 'N',
                        'DISPLAY_NAME' => 'N',
                        'DISPLAY_PICTURE' => 'Y',
                        'DISPLAY_PREVIEW_TEXT' => 'N',
                        'DISPLAY_TOP_PAGER' => 'N',
                        'ELEMENT_CODE' => 'after_menu',
                        'ELEMENT_ID' => $_REQUEST['ELEMENT_ID'],
                        'FIELD_CODE' => [
                            0 => 'NAME',
                            1 => '',
                        ],
                        'IBLOCK_ID' => '',
                        'IBLOCK_TYPE' => 'CityStaffUIP',
                        'IBLOCK_URL' => '',
                        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                        'MESSAGE_404' => '',
                        'META_DESCRIPTION' => '-',
                        'META_KEYWORDS' => '-',
                        'PAGER_BASE_LINK_ENABLE' => 'N',
                        'PAGER_SHOW_ALL' => 'N',
                        'PAGER_TEMPLATE' => '.default',
                        'PAGER_TITLE' => 'Страница',
                        'PROPERTY_CODE' => [
                            0 => '',
                            1 => 'link',
                            2 => '',
                        ],
                        'SET_BROWSER_TITLE' => 'N',
                        'SET_CANONICAL_URL' => 'N',
                        'SET_LAST_MODIFIED' => 'N',
                        'SET_META_DESCRIPTION' => 'N',
                        'SET_META_KEYWORDS' => 'N',
                        'SET_STATUS_404' => 'N',
                        'SET_TITLE' => 'N',
                        'SHOW_404' => 'N',
                        'STRICT_SECTION_CHECK' => 'N',
                        'USE_PERMISSIONS' => 'N',
                        'USE_SHARE' => 'N',
                        'COMPONENT_TEMPLATE' => 'main_header_aftermenu',
                    ],
                    false
                ); ?>
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:system.auth.form',
                    'main_header_avatar',
                    []
                ); ?>
            </div>
        </nav>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:news.detail',
            'main_banner_content',
            [
                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                'ADD_ELEMENT_CHAIN' => 'N',
                'ADD_SECTIONS_CHAIN' => 'N',
                'AJAX_MODE' => 'N',
                'AJAX_OPTION_ADDITIONAL' => '',
                'AJAX_OPTION_HISTORY' => 'N',
                'AJAX_OPTION_JUMP' => 'N',
                'AJAX_OPTION_STYLE' => 'N',
                'BROWSER_TITLE' => '-',
                'CACHE_GROUPS' => 'Y',
                'CACHE_TIME' => '36000000',
                'CACHE_TYPE' => 'A',
                'CHECK_DATES' => 'Y',
                'COMPONENT_TEMPLATE' => '.default',
                'DETAIL_URL' => '',
                'DISPLAY_BOTTOM_PAGER' => 'Y',
                'DISPLAY_DATE' => 'Y',
                'DISPLAY_NAME' => 'N',
                'DISPLAY_PICTURE' => 'N',
                'DISPLAY_PREVIEW_TEXT' => 'N',
                'DISPLAY_TOP_PAGER' => 'N',
                'ELEMENT_CODE' => 'bt1',
                'ELEMENT_ID' => $_REQUEST['ELEMENT_ID'],
                'FIELD_CODE' => [0 => 'NAME', 1 => ''],
                'IBLOCK_ID' => '',
                'IBLOCK_TYPE' => 'CityStaffUIP',
                'IBLOCK_URL' => '',
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                'MESSAGE_404' => '',
                'META_DESCRIPTION' => '-',
                'META_KEYWORDS' => '-',
                'PAGER_BASE_LINK_ENABLE' => 'N',
                'PAGER_SHOW_ALL' => 'N',
                'PAGER_TEMPLATE' => '.default',
                'PAGER_TITLE' => 'Страница',
                'PROPERTY_CODE' => [0 => '', 1 => 'a_link'],
                'SET_BROWSER_TITLE' => 'N',
                'SET_CANONICAL_URL' => 'N',
                'SET_LAST_MODIFIED' => 'N',
                'SET_META_DESCRIPTION' => 'Y',
                'SET_META_KEYWORDS' => 'N',
                'SET_STATUS_404' => 'N',
                'SET_TITLE' => 'N',
                'SHOW_404' => 'N',
                'STRICT_SECTION_CHECK' => 'N',
                'USE_PERMISSIONS' => 'N',
                'USE_SHARE' => 'N',
            ]
        ); ?>
    </section>
    <!--о нас-->
    <section data-nav-title="О нас" id="about" class="NB_content flex-column aling-items-center widthBase">
        <div class="NB_about_content d-flex flex-column">
            <div class="NB_about_content_container d-flex flex-row justify-content-between">
                <div class="NB_about_left d-flex flex-column justify-content-around">
                    <!--кто мы сегодня?-->
                    <div class="NB_about_content_title">
                        <?php
                        $APPLICATION->IncludeComponent(
                            'bitrix:main.include',
                            'main_about_title',
                            [
                                'AREA_FILE_SHOW' => 'file',
                                'AREA_FILE_SUFFIX' => 'inc',
                                'COMPONENT_TEMPLATE' => 'main_about_title',
                                'EDIT_TEMPLATE' => '',
                                'PATH' => '/local/templates/landing/includes/main_about_title.php',
                            ]
                        ); ?>
                        <?php
                        $APPLICATION->IncludeComponent(
                            'bitrix:main.include',
                            'main_about_p',
                            [
                                'AREA_FILE_SHOW' => 'file',
                                'AREA_FILE_SUFFIX' => 'inc',
                                'EDIT_TEMPLATE' => '',
                                'PATH' => '/local/templates/landing/includes/main_about_p.php',
                            ]
                        ); ?>
                    </div>
                    <!--главный контент страницы-->
                    <div class="NB_about_content_main d-flex">
                        <!--информация-->
                        <?php
                        $APPLICATION->IncludeComponent(
                            'bitrix:news.list',
                            'main_about_items',
                            [
                                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                                'ADD_SECTIONS_CHAIN' => 'Y',
                                'AJAX_MODE' => 'N',
                                'AJAX_OPTION_ADDITIONAL' => '',
                                'AJAX_OPTION_HISTORY' => 'N',
                                'AJAX_OPTION_JUMP' => 'N',
                                'AJAX_OPTION_STYLE' => 'Y',
                                'CACHE_FILTER' => 'N',
                                'CACHE_GROUPS' => 'Y',
                                'CACHE_TIME' => '36000000',
                                'CACHE_TYPE' => 'A',
                                'CHECK_DATES' => 'Y',
                                'COMPONENT_TEMPLATE' => '.default',
                                'DETAIL_URL' => '',
                                'DISPLAY_BOTTOM_PAGER' => 'Y',
                                'DISPLAY_DATE' => 'Y',
                                'DISPLAY_NAME' => 'Y',
                                'DISPLAY_PICTURE' => 'Y',
                                'DISPLAY_PREVIEW_TEXT' => 'Y',
                                'DISPLAY_TOP_PAGER' => 'N',
                                'FIELD_CODE' => [0 => 'ID', 1 => 'IBLOCK_SECTION_ID', 2 => 'PREVIEW_PICTURE'],
                                'FILTER_NAME' => '',
                                'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
                                'IBLOCK_ID' => $IB_ID["about_us"],
                                'IBLOCK_TYPE' => 'CityStaffUIP',
                                'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
                                'INCLUDE_SUBSECTIONS' => 'Y',
                                'MESSAGE_404' => '',
                                'NEWS_COUNT' => '20',
                                'PAGER_BASE_LINK_ENABLE' => 'N',
                                'PAGER_DESC_NUMBERING' => 'N',
                                'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                                'PAGER_SHOW_ALL' => 'N',
                                'PAGER_SHOW_ALWAYS' => 'N',
                                'PAGER_TEMPLATE' => '.default',
                                'PAGER_TITLE' => 'Новости',
                                'PARENT_SECTION' => '',
                                'PARENT_SECTION_CODE' => '',
                                'PREVIEW_TRUNCATE_LEN' => '',
                                'PROPERTY_CODE' => [0 => '', 1 => ''],
                                'SET_BROWSER_TITLE' => 'N',
                                'SET_LAST_MODIFIED' => 'N',
                                'SET_META_DESCRIPTION' => 'Y',
                                'SET_META_KEYWORDS' => 'Y',
                                'SET_STATUS_404' => 'N',
                                'SET_TITLE' => 'N',
                                'SHOW_404' => 'N',
                                'SORT_BY1' => 'ACTIVE_FROM',
                                'SORT_BY2' => 'SORT',
                                'SORT_ORDER1' => 'DESC',
                                'SORT_ORDER2' => 'ASC',
                                'STRICT_SECTION_CHECK' => 'N',
                            ]
                        ); ?>
                    </div>
                </div>
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '.default',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'COMPONENT_TEMPLATE' => '.default',
                        'EDIT_TEMPLATE' => '',
                        'PATH' => '/local/templates/landing/includes/main_about_img.php',
                    ],
                    false
                ); ?>
            </div>
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:news.detail',
                'main_about_footer',
                [
                    'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                    'ADD_ELEMENT_CHAIN' => 'N',
                    'ADD_SECTIONS_CHAIN' => 'N',
                    'AJAX_MODE' => 'N',
                    'AJAX_OPTION_ADDITIONAL' => '',
                    'AJAX_OPTION_HISTORY' => 'N',
                    'AJAX_OPTION_JUMP' => 'N',
                    'AJAX_OPTION_STYLE' => 'N',
                    'BROWSER_TITLE' => '-',
                    'CACHE_GROUPS' => 'Y',
                    'CACHE_TIME' => '36000000',
                    'CACHE_TYPE' => 'A',
                    'CHECK_DATES' => 'Y',
                    'COMPONENT_TEMPLATE' => '.default',
                    'DETAIL_URL' => '',
                    'DISPLAY_BOTTOM_PAGER' => 'Y',
                    'DISPLAY_DATE' => 'N',
                    'DISPLAY_NAME' => 'N',
                    'DISPLAY_PICTURE' => 'Y',
                    'DISPLAY_PREVIEW_TEXT' => 'Y',
                    'DISPLAY_TOP_PAGER' => 'N',
                    'ELEMENT_CODE' => 'about_footer',
                    'ELEMENT_ID' => $_REQUEST['ELEMENT_ID'],
                    'FIELD_CODE' => [0 => '', 1 => ''],
                    'IBLOCK_ID' => '',
                    'IBLOCK_TYPE' => 'CityStaffUIP',
                    'IBLOCK_URL' => '',
                    'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                    'MESSAGE_404' => '',
                    'META_DESCRIPTION' => '-',
                    'META_KEYWORDS' => '-',
                    'PAGER_BASE_LINK_ENABLE' => 'N',
                    'PAGER_SHOW_ALL' => 'N',
                    'PAGER_TEMPLATE' => '.default',
                    'PAGER_TITLE' => 'Страница',
                    'PROPERTY_CODE' => [0 => '', 1 => ''],
                    'SET_BROWSER_TITLE' => 'N',
                    'SET_CANONICAL_URL' => 'N',
                    'SET_LAST_MODIFIED' => 'N',
                    'SET_META_DESCRIPTION' => 'N',
                    'SET_META_KEYWORDS' => 'N',
                    'SET_STATUS_404' => 'N',
                    'SET_TITLE' => 'N',
                    'SHOW_404' => 'N',
                    'STRICT_SECTION_CHECK' => 'N',
                    'USE_PERMISSIONS' => 'N',
                    'USE_SHARE' => 'N',
                ]
            ); ?>
        </div>
    </section>
    <!--карусель клиентов-->
    <section data-nav-title="Наши партнеры" id="partners" class="NB_content">
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            'main_clients_title',
            [
                'AREA_FILE_SHOW' => 'file',
                'AREA_FILE_SUFFIX' => 'inc',
                'EDIT_TEMPLATE' => '',
                'PATH' => '/local/templates/landing/includes/main_clients_title.php',
            ]
        ); ?>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:news.list',
            'main_clients_items',
            [
                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                'ADD_SECTIONS_CHAIN' => 'Y',
                'AJAX_MODE' => 'N',
                'AJAX_OPTION_ADDITIONAL' => '',
                'AJAX_OPTION_HISTORY' => 'N',
                'AJAX_OPTION_JUMP' => 'N',
                'AJAX_OPTION_STYLE' => 'Y',
                'CACHE_FILTER' => 'N',
                'CACHE_GROUPS' => 'Y',
                'CACHE_TIME' => '36000000',
                'CACHE_TYPE' => 'A',
                'CHECK_DATES' => 'Y',
                'COMPONENT_TEMPLATE' => '.default',
                'DETAIL_URL' => '',
                'DISPLAY_BOTTOM_PAGER' => 'Y',
                'DISPLAY_DATE' => 'Y',
                'DISPLAY_NAME' => 'Y',
                'DISPLAY_PICTURE' => 'Y',
                'DISPLAY_PREVIEW_TEXT' => 'Y',
                'DISPLAY_TOP_PAGER' => 'N',
                'FIELD_CODE' => [0 => '', 1 => ''],
                'FILTER_NAME' => '',
                'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
                'IBLOCK_ID' => $IB_ID["clients"],
                'IBLOCK_TYPE' => 'CityStaffUIP',
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
                'INCLUDE_SUBSECTIONS' => 'Y',
                'MESSAGE_404' => '',
                'NEWS_COUNT' => '20',
                'PAGER_BASE_LINK_ENABLE' => 'N',
                'PAGER_DESC_NUMBERING' => 'N',
                'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                'PAGER_SHOW_ALL' => 'N',
                'PAGER_SHOW_ALWAYS' => 'N',
                'PAGER_TEMPLATE' => '.default',
                'PAGER_TITLE' => 'Новости',
                'PARENT_SECTION' => '',
                'PARENT_SECTION_CODE' => '',
                'PREVIEW_TRUNCATE_LEN' => '',
                'PROPERTY_CODE' => [0 => '', 1 => ''],
                'SET_BROWSER_TITLE' => 'N',
                'SET_LAST_MODIFIED' => 'N',
                'SET_META_DESCRIPTION' => 'Y',
                'SET_META_KEYWORDS' => 'Y',
                'SET_STATUS_404' => 'N',
                'SET_TITLE' => 'N',
                'SHOW_404' => 'N',
                'SORT_BY1' => 'ACTIVE_FROM',
                'SORT_BY2' => 'SORT',
                'SORT_ORDER1' => 'DESC',
                'SORT_ORDER2' => 'ASC',
                'STRICT_SECTION_CHECK' => 'N',
            ]
        ); ?>
    </section>
    <!--Что нас объединяет-->
    <section data-nav-title="Что нас объединяет?" id="union" class="NB_content">
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            'main_union_title',
            [
                'AREA_FILE_SHOW' => 'file',    // Показывать включаемую область
                'AREA_FILE_SUFFIX' => 'inc',
                'EDIT_TEMPLATE' => '',    // Шаблон области по умолчанию
                'PATH' => '/local/templates/landing/includes/main_union_title.php',    // Путь к файлу области
            ],
            false
        ); ?>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:news.list',
            'main_union_item',
            [
                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                'ADD_SECTIONS_CHAIN' => 'Y',
                'AJAX_MODE' => 'N',
                'AJAX_OPTION_ADDITIONAL' => '',
                'AJAX_OPTION_HISTORY' => 'N',
                'AJAX_OPTION_JUMP' => 'N',
                'AJAX_OPTION_STYLE' => 'Y',
                'CACHE_FILTER' => 'N',
                'CACHE_GROUPS' => 'Y',
                'CACHE_TIME' => '36000000',
                'CACHE_TYPE' => 'A',
                'CHECK_DATES' => 'Y',
                'DETAIL_URL' => '',
                'DISPLAY_BOTTOM_PAGER' => 'Y',
                'DISPLAY_DATE' => 'Y',
                'DISPLAY_NAME' => 'Y',
                'DISPLAY_PICTURE' => 'Y',
                'DISPLAY_PREVIEW_TEXT' => 'Y',
                'DISPLAY_TOP_PAGER' => 'N',
                'FIELD_CODE' => [0 => 'CODE', 1 => 'NAME', 2 => 'PREVIEW_TEXT', 3 => ''],
                'FILTER_NAME' => '',
                'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
                'IBLOCK_ID' => $IB_ID["uniting"],
                'IBLOCK_TYPE' => 'CityStaffUIP',
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
                'INCLUDE_SUBSECTIONS' => 'Y',
                'MESSAGE_404' => '',
                'NEWS_COUNT' => '20',
                'PAGER_BASE_LINK_ENABLE' => 'N',
                'PAGER_DESC_NUMBERING' => 'N',
                'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                'PAGER_SHOW_ALL' => 'N',
                'PAGER_SHOW_ALWAYS' => 'N',
                'PAGER_TEMPLATE' => '.default',
                'PAGER_TITLE' => 'Новости',
                'PARENT_SECTION' => '',
                'PARENT_SECTION_CODE' => '',
                'PREVIEW_TRUNCATE_LEN' => '',
                'PROPERTY_CODE' => [0 => '', 1 => ''],
                'SET_BROWSER_TITLE' => 'N',
                'SET_LAST_MODIFIED' => 'N',
                'SET_META_DESCRIPTION' => 'Y',
                'SET_META_KEYWORDS' => 'Y',
                'SET_STATUS_404' => 'N',
                'SET_TITLE' => 'N',
                'SHOW_404' => 'N',
                'SORT_BY1' => 'ACTIVE_FROM',
                'SORT_BY2' => 'SORT',
                'SORT_ORDER1' => 'DESC',
                'SORT_ORDER2' => 'ASC',
                'STRICT_SECTION_CHECK' => 'N',
            ]
        ); ?>
    </section>
    <!--Отделы-->
    <section data-nav-title="Структура" id="struct"
             class="NB_content NB_content_department widthBase flex-column align-items-center justify-content-center">
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            'main_structure_title',
            [
                'AREA_FILE_SHOW' => 'file',
                'AREA_FILE_SUFFIX' => 'inc',
                'EDIT_TEMPLATE' => '',
                'PATH' => '/local/templates/landing/includes/main_structure_title.php',
            ]
        ); ?>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            'main_structure_minititle',
            [
                'AREA_FILE_SHOW' => 'file',
                'AREA_FILE_SUFFIX' => 'inc',
                'EDIT_TEMPLATE' => '',
                'PATH' => '/local/templates/landing/includes/main_structure_minititle.php',
            ]
        ); ?>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            'main_structure_p',
            [
                'AREA_FILE_SHOW' => 'file',
                'AREA_FILE_SUFFIX' => 'inc',
                'EDIT_TEMPLATE' => '',
                'PATH' => '/local/templates/landing/includes/main_structure_p.php',
            ]
        ); ?>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            'main_structure_button',
            [
                'AREA_FILE_SHOW' => 'file',
                'AREA_FILE_SUFFIX' => 'inc',
                'EDIT_TEMPLATE' => '',
                'PATH' => '/local/templates/landing/includes/main_structure_button.php',
            ]
        ); ?>
        <div class="NB_content_department_img">
        </div>
    </section>
    <!--модальное окно-->
    <section class="NB_modal d-flex flex-row align-items-center justify-content-center" id="modal1">
        <div class="NB_modal_item d-flex flex-column align-items-center">
            <img alt="X" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/X.svg" class="NB_modal_item_X close_modal">
            <div class="NB_modal_item_item flex-column align-items-center d-flex text-white">
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    'main_modal_struct',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'EDIT_TEMPLATE' => '',
                        'PATH' => '/local/templates/landing/includes/main_modal_item.php',
                        'COMPONENT_TEMPLATE' => 'main_modal_struct',
                    ],
                    false
                ); ?>
            </div>
        </div>
    </section>
    <!--Традиции-->
    <section data-nav-title="Наши традиции" id="tradition"
             class="NB_content NB_content_tradition widthBase d-flex flex-column">
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            'main_gallery_title',
            [
                'AREA_FILE_SHOW' => 'file',
                'AREA_FILE_SUFFIX' => 'inc',
                'COMPONENT_TEMPLATE' => 'main_gallery_title',
                'EDIT_TEMPLATE' => '',
                'PATH' => '/local/templates/landing/includes/main_gallery_title.php',
            ]
        ); ?>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            'main_gallery_p',
            [
                'AREA_FILE_SHOW' => 'file',
                'AREA_FILE_SUFFIX' => 'inc',
                'COMPONENT_TEMPLATE' => 'main_gallery_p',
                'EDIT_TEMPLATE' => '',
                'PATH' => '/local/templates/landing/includes/main_gallery_p.php',
            ]
        ); ?>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:photo.sections.top',
            'main_gallery_items',
            [
                'CACHE_FILTER' => 'N',
                'CACHE_GROUPS' => 'Y',
                'CACHE_TIME' => '36000000',
                'CACHE_TYPE' => 'A',
                'DETAIL_URL' => '',
                'ELEMENT_COUNT' => '9',
                'ELEMENT_SORT_FIELD' => 'sort',
                'ELEMENT_SORT_ORDER' => 'asc',
                'FIELD_CODE' => ['NAME', 'PREVIEW_PICTURE', ''],
                'FILTER_NAME' => 'arrFilter',
                'IBLOCK_ID' => $IB_ID['gallery'],
                'IBLOCK_TYPE' => 'CityStaffUIP',
                'LINE_ELEMENT_COUNT' => '3',
                'PROPERTY_CODE' => ['', ''],
                'SECTION_COUNT' => '20',
                'SECTION_FIELDS' => ['ID', 'CODE', 'NAME', ''],
                'SECTION_SORT_FIELD' => 'sort',
                'SECTION_SORT_ORDER' => 'asc',
                'SECTION_URL' => '',
                'SECTION_USER_FIELDS' => ['', ''],
            ]
        ); ?>
        <div class="NB_content_tradition_footer">
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                'main_gallery_footer_p',
                [
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'EDIT_TEMPLATE' => '',
                    'PATH' => '/local/templates/landing/includes/main_gallery_footer_p.php',
                ]
            ); ?>
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:news.detail',
                'main_gallery_button',
                [
                    'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                    // Формат показа даты
                    'ADD_ELEMENT_CHAIN' => 'N',
                    // Включать название элемента в цепочку навигации
                    'ADD_SECTIONS_CHAIN' => 'Y',
                    // Включать раздел в цепочку навигации
                    'AJAX_MODE' => 'N',
                    // Включить режим AJAX
                    'AJAX_OPTION_ADDITIONAL' => '',
                    // Дополнительный идентификатор
                    'AJAX_OPTION_HISTORY' => 'N',
                    // Включить эмуляцию навигации браузера
                    'AJAX_OPTION_JUMP' => 'N',
                    // Включить прокрутку к началу компонента
                    'AJAX_OPTION_STYLE' => 'Y',
                    // Включить подгрузку стилей
                    'BROWSER_TITLE' => '-',
                    // Установить заголовок окна браузера из свойства
                    'CACHE_GROUPS' => 'Y',
                    // Учитывать права доступа
                    'CACHE_TIME' => '36000000',
                    // Время кеширования (сек.)
                    'CACHE_TYPE' => 'A',
                    // Тип кеширования
                    'CHECK_DATES' => 'Y',
                    // Показывать только активные на данный момент элементы
                    'COMPONENT_TEMPLATE' => '.default',
                    'DETAIL_URL' => '',
                    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                    'DISPLAY_BOTTOM_PAGER' => 'Y',
                    // Выводить под списком
                    'DISPLAY_DATE' => 'Y',
                    // Выводить дату элемента
                    'DISPLAY_NAME' => 'Y',
                    // Выводить название элемента
                    'DISPLAY_PICTURE' => 'Y',
                    // Выводить детальное изображение
                    'DISPLAY_PREVIEW_TEXT' => 'Y',
                    // Выводить текст анонса
                    'DISPLAY_TOP_PAGER' => 'N',
                    // Выводить над списком
                    'ELEMENT_CODE' => 'gallery_button',
                    // Код новости
                    'ELEMENT_ID' => $_REQUEST['ELEMENT_ID'],
                    // ID новости
                    'FIELD_CODE' => [    // Поля
                        0 => '',
                        1 => '',
                    ],
                    'IBLOCK_ID' => '',
                    // Код информационного блока
                    'IBLOCK_TYPE' => 'CityStaffUIP',
                    // Тип информационного блока (используется только для проверки)
                    'IBLOCK_URL' => '',
                    // URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
                    'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
                    // Включать инфоблок в цепочку навигации
                    'MESSAGE_404' => '',
                    // Сообщение для показа (по умолчанию из компонента)
                    'META_DESCRIPTION' => '-',
                    // Установить описание страницы из свойства
                    'META_KEYWORDS' => '-',
                    // Установить ключевые слова страницы из свойства
                    'PAGER_BASE_LINK_ENABLE' => 'N',
                    // Включить обработку ссылок
                    'PAGER_SHOW_ALL' => 'N',
                    // Показывать ссылку "Все"
                    'PAGER_TEMPLATE' => '.default',
                    // Шаблон постраничной навигации
                    'PAGER_TITLE' => 'Страница',
                    // Название категорий
                    'PROPERTY_CODE' => [    // Свойства
                        0 => 'link',
                        1 => 'name',
                    ],
                    'SET_BROWSER_TITLE' => 'N',
                    // Устанавливать заголовок окна браузера
                    'SET_CANONICAL_URL' => 'N',
                    // Устанавливать канонический URL
                    'SET_LAST_MODIFIED' => 'N',
                    // Устанавливать в заголовках ответа время модификации страницы
                    'SET_META_DESCRIPTION' => 'Y',
                    // Устанавливать описание страницы
                    'SET_META_KEYWORDS' => 'Y',
                    // Устанавливать ключевые слова страницы
                    'SET_STATUS_404' => 'N',
                    // Устанавливать статус 404
                    'SET_TITLE' => 'N',
                    // Устанавливать заголовок страницы
                    'SHOW_404' => 'N',
                    // Показ специальной страницы
                    'STRICT_SECTION_CHECK' => 'N',
                    // Строгая проверка раздела для показа элемента
                    'USE_PERMISSIONS' => 'N',
                    // Использовать дополнительное ограничение доступа
                    'USE_SHARE' => 'N',
                    // Отображать панель соц. закладок
                ],
                false
            ); ?>
        </div>
    </section>
    <!--где и как мы общаемся-->
    <section data-nav-title="Где и как мы общаемся" id="chats"
             class="NB_content NB_content_community d-flex flex-column widthBase">
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            'main_union_title',
            [
                'AREA_FILE_SHOW' => 'file',
                'AREA_FILE_SUFFIX' => 'inc',
                'COMPONENT_TEMPLATE' => 'main_union_title',
                'EDIT_TEMPLATE' => '',
                'PATH' => '/local/templates/landing/includes/main_community_title.php',
            ]
        ); ?>
        <div class="NB_content_community_content d-flex flex-row justify-content-between">
            <div class="NB_content_community_content_item d-flex flex-column justify-content-between">
                <div class="NB_content_community_content_item_left NB_rounded-20 d-flex flex-column">
                    <?php
                    $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        'main_community_item_title',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/local/templates/landing/includes/main_community_item_title1.php',
                        ]
                    ); ?>
                    <?php
                    $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        'main_community_item_p',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/local/templates/landing/includes/main_community_item_p1.php',
                        ]
                    ); ?>
                    <?php
                    $APPLICATION->IncludeComponent(
                        'bitrix:news.detail',
                        'main_community_button',
                        [
                            'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                            'ADD_ELEMENT_CHAIN' => 'N',
                            'ADD_SECTIONS_CHAIN' => 'Y',
                            'AJAX_MODE' => 'N',
                            'AJAX_OPTION_ADDITIONAL' => '',
                            'AJAX_OPTION_HISTORY' => 'N',
                            'AJAX_OPTION_JUMP' => 'N',
                            'AJAX_OPTION_STYLE' => 'Y',
                            'BROWSER_TITLE' => '-',
                            'CACHE_GROUPS' => 'Y',
                            'CACHE_TIME' => '36000000',
                            'CACHE_TYPE' => 'A',
                            'CHECK_DATES' => 'Y',
                            'DETAIL_URL' => '',
                            'DISPLAY_BOTTOM_PAGER' => 'Y',
                            'DISPLAY_DATE' => 'Y',
                            'DISPLAY_NAME' => 'Y',
                            'DISPLAY_PICTURE' => 'Y',
                            'DISPLAY_PREVIEW_TEXT' => 'Y',
                            'DISPLAY_TOP_PAGER' => 'N',
                            'ELEMENT_CODE' => 'button_community_2',
                            'ELEMENT_ID' => $_REQUEST['ELEMENT_ID'],
                            'FIELD_CODE' => [0 => '', 1 => ''],
                            'IBLOCK_ID' => '',
                            'IBLOCK_TYPE' => 'CityStaffUIP',
                            'IBLOCK_URL' => '',
                            'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
                            'MESSAGE_404' => '',
                            'META_DESCRIPTION' => '-',
                            'META_KEYWORDS' => '-',
                            'PAGER_BASE_LINK_ENABLE' => 'N',
                            'PAGER_SHOW_ALL' => 'N',
                            'PAGER_TEMPLATE' => '.default',
                            'PAGER_TITLE' => 'Страница',
                            'PROPERTY_CODE' => [0 => 'link', 1 => ''],
                            'SET_BROWSER_TITLE' => 'N',
                            'SET_CANONICAL_URL' => 'N',
                            'SET_LAST_MODIFIED' => 'N',
                            'SET_META_DESCRIPTION' => 'Y',
                            'SET_META_KEYWORDS' => 'Y',
                            'SET_STATUS_404' => 'N',
                            'SET_TITLE' => 'N',
                            'SHOW_404' => 'N',
                            'STRICT_SECTION_CHECK' => 'N',
                            'USE_PERMISSIONS' => 'N',
                            'USE_SHARE' => 'N',
                        ]
                    ); ?>
                    <?php
                    $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/local/templates/landing/includes/main_community_item_img1.php',
                        ]
                    ); ?>
                </div>
                <div class="NB_content_community_content_item_left NB_rounded-20 d-flex flex-column">
                    <?php
                    $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        'main_community_item_title',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/local/templates/landing/includes/main_community_item_title2.php',
                        ]
                    ); ?>
                    <?php
                    $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        'main_community_item_p',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/local/templates/landing/includes/main_community_item_p2.php',
                        ]
                    ); ?>
                    <?php
                    $APPLICATION->IncludeComponent(
                        'bitrix:news.detail',
                        'main_community_button',
                        [
                            'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                            'ADD_ELEMENT_CHAIN' => 'N',
                            'ADD_SECTIONS_CHAIN' => 'Y',
                            'AJAX_MODE' => 'N',
                            'AJAX_OPTION_ADDITIONAL' => '',
                            'AJAX_OPTION_HISTORY' => 'N',
                            'AJAX_OPTION_JUMP' => 'N',
                            'AJAX_OPTION_STYLE' => 'Y',
                            'BROWSER_TITLE' => '-',
                            'CACHE_GROUPS' => 'Y',
                            'CACHE_TIME' => '36000000',
                            'CACHE_TYPE' => 'A',
                            'CHECK_DATES' => 'Y',
                            'DETAIL_URL' => '',
                            'DISPLAY_BOTTOM_PAGER' => 'Y',
                            'DISPLAY_DATE' => 'Y',
                            'DISPLAY_NAME' => 'Y',
                            'DISPLAY_PICTURE' => 'Y',
                            'DISPLAY_PREVIEW_TEXT' => 'Y',
                            'DISPLAY_TOP_PAGER' => 'N',
                            'ELEMENT_CODE' => 'button_community_1',
                            'ELEMENT_ID' => $_REQUEST['ELEMENT_ID'],
                            'FIELD_CODE' => [0 => '', 1 => ''],
                            'IBLOCK_ID' => '',
                            'IBLOCK_TYPE' => 'CityStaffUIP',
                            'IBLOCK_URL' => '',
                            'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
                            'MESSAGE_404' => '',
                            'META_DESCRIPTION' => '-',
                            'META_KEYWORDS' => '-',
                            'PAGER_BASE_LINK_ENABLE' => 'N',
                            'PAGER_SHOW_ALL' => 'N',
                            'PAGER_TEMPLATE' => '.default',
                            'PAGER_TITLE' => 'Страница',
                            'PROPERTY_CODE' => [0 => 'link', 1 => ''],
                            'SET_BROWSER_TITLE' => 'N',
                            'SET_CANONICAL_URL' => 'N',
                            'SET_LAST_MODIFIED' => 'N',
                            'SET_META_DESCRIPTION' => 'Y',
                            'SET_META_KEYWORDS' => 'Y',
                            'SET_STATUS_404' => 'N',
                            'SET_TITLE' => 'N',
                            'SHOW_404' => 'N',
                            'STRICT_SECTION_CHECK' => 'N',
                            'USE_PERMISSIONS' => 'N',
                            'USE_SHARE' => 'N',
                        ]
                    ); ?>
                    <?php
                    $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/local/templates/landing/includes/main_community_item_img2.php',
                        ]
                    ); ?>
                </div>
            </div>
            <div class="NB_content_community_content_item">
                <div class="NB_content_community_content_item_right NB_rounded-20 d-flex flex-column">
                    <?php
                    $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        'main_community_item_title3',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/local/templates/landing/includes/main_community_item_title3.php',
                        ]
                    ); ?>
                    <?php
                    $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        'main_community_item_p3',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'COMPONENT_TEMPLATE' => '.default',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/local/templates/landing/includes/main_community_item_p3.php',
                        ]
                    ); ?>
                    <?php
                    $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/local/templates/landing/includes/main_community_item_img3.php',
                        ]
                    ); ?>
                </div>
            </div>
        </div>
    </section>
    <!--подписчики-->
    <section data-nav-title="За нами интересно наблюдать" id="social" class="NB_content d-flex flex-column widthBase">
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            'main_union_title',
            [
                'AREA_FILE_SHOW' => 'file',
                'AREA_FILE_SUFFIX' => 'inc',
                'EDIT_TEMPLATE' => '',
                'PATH' => '/local/templates/landing/includes/main_look_title.php',
            ]
        ); ?>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:news.list',
            'main_subs',
            [
                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                'ADD_SECTIONS_CHAIN' => 'Y',
                'AJAX_MODE' => 'N',
                'AJAX_OPTION_ADDITIONAL' => '',
                'AJAX_OPTION_HISTORY' => 'N',
                'AJAX_OPTION_JUMP' => 'N',
                'AJAX_OPTION_STYLE' => 'Y',
                'CACHE_FILTER' => 'N',
                'CACHE_GROUPS' => 'Y',
                'CACHE_TIME' => '36000000',
                'CACHE_TYPE' => 'A',
                'CHECK_DATES' => 'Y',
                'DETAIL_URL' => '',
                'DISPLAY_BOTTOM_PAGER' => 'Y',
                'DISPLAY_DATE' => 'Y',
                'DISPLAY_NAME' => 'Y',
                'DISPLAY_PICTURE' => 'Y',
                'DISPLAY_PREVIEW_TEXT' => 'Y',
                'DISPLAY_TOP_PAGER' => 'N',
                'FIELD_CODE' => ['', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'DETAIL_PICTURE', ''],
                'FILTER_NAME' => '',
                'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
                'IBLOCK_ID' => $IB_ID['subscribes'],
                'IBLOCK_TYPE' => 'CityStaffUIP',
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
                'INCLUDE_SUBSECTIONS' => 'Y',
                'MESSAGE_404' => '',
                'NEWS_COUNT' => '20',
                'PAGER_BASE_LINK_ENABLE' => 'N',
                'PAGER_DESC_NUMBERING' => 'N',
                'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                'PAGER_SHOW_ALL' => 'N',
                'PAGER_SHOW_ALWAYS' => 'N',
                'PAGER_TEMPLATE' => '.default',
                'PAGER_TITLE' => 'Новости',
                'PARENT_SECTION' => '',
                'PARENT_SECTION_CODE' => '',
                'PREVIEW_TRUNCATE_LEN' => '',
                'PROPERTY_CODE' => ['link', 'link_text', 'link_api'],
                'SET_BROWSER_TITLE' => 'N',
                'SET_LAST_MODIFIED' => 'N',
                'SET_META_DESCRIPTION' => 'Y',
                'SET_META_KEYWORDS' => 'Y',
                'SET_STATUS_404' => 'N',
                'SET_TITLE' => 'N',
                'SHOW_404' => 'N',
                'SORT_BY1' => 'ACTIVE_FROM',
                'SORT_BY2' => 'SORT',
                'SORT_ORDER1' => 'DESC',
                'SORT_ORDER2' => 'ASC',
                'STRICT_SECTION_CHECK' => 'N',
            ]
        ); ?>
    </section>
    <section class="widthBase NB_content NB_bottomMenu d-flex flex-row flex-wrap align-items-center">
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:news.detail',
            'main_bottommenu_link1',
            [
                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                'ADD_ELEMENT_CHAIN' => 'N',
                'ADD_SECTIONS_CHAIN' => 'N',
                'AJAX_MODE' => 'N',
                'AJAX_OPTION_ADDITIONAL' => '',
                'AJAX_OPTION_HISTORY' => 'N',
                'AJAX_OPTION_JUMP' => 'N',
                'AJAX_OPTION_STYLE' => 'N',
                'BROWSER_TITLE' => '-',
                'CACHE_GROUPS' => 'Y',
                'CACHE_TIME' => '36000000',
                'CACHE_TYPE' => 'A',
                'CHECK_DATES' => 'Y',
                'DETAIL_URL' => '',
                'DISPLAY_BOTTOM_PAGER' => 'N',
                'DISPLAY_DATE' => 'N',
                'DISPLAY_NAME' => 'N',
                'DISPLAY_PICTURE' => 'N',
                'DISPLAY_PREVIEW_TEXT' => 'Y',
                'DISPLAY_TOP_PAGER' => 'N',
                'ELEMENT_CODE' => 'main_bottommenu_link1',
                'ELEMENT_ID' => $_REQUEST['ELEMENT_ID'],
                'FIELD_CODE' => [
                    0 => '',
                    1 => '',
                ],
                'IBLOCK_ID' => '',
                'IBLOCK_TYPE' => 'CityStaffUIP',
                'IBLOCK_URL' => '',
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                'MESSAGE_404' => '',
                'META_DESCRIPTION' => '-',
                'META_KEYWORDS' => '-',
                'PAGER_BASE_LINK_ENABLE' => 'N',
                'PAGER_SHOW_ALL' => 'N',
                'PAGER_TEMPLATE' => '.default',
                'PAGER_TITLE' => 'Страница',
                'PROPERTY_CODE' => [
                    0 => '',
                    1 => 'link',
                    2 => 'name',
                    3 => '',
                ],
                'SET_BROWSER_TITLE' => 'N',
                'SET_CANONICAL_URL' => 'N',
                'SET_LAST_MODIFIED' => 'N',
                'SET_META_DESCRIPTION' => 'N',
                'SET_META_KEYWORDS' => 'N',
                'SET_STATUS_404' => 'N',
                'SET_TITLE' => 'N',
                'SHOW_404' => 'N',
                'STRICT_SECTION_CHECK' => 'N',
                'USE_PERMISSIONS' => 'N',
                'USE_SHARE' => 'N',
                'COMPONENT_TEMPLATE' => 'main_bottommenu_link1',
            ],
            false
        ); ?>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            '',
            [
                'AREA_FILE_SHOW' => 'file',
                'AREA_FILE_SUFFIX' => 'inc',
                'EDIT_TEMPLATE' => '',
                'PATH' => '/local/templates/landing/includes/main_bottommenu_arrow.php',
            ]
        ); ?>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:news.detail',
            'main_bottommenu_link1',
            [
                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                'ADD_ELEMENT_CHAIN' => 'N',
                'ADD_SECTIONS_CHAIN' => 'N',
                'AJAX_MODE' => 'N',
                'AJAX_OPTION_ADDITIONAL' => '',
                'AJAX_OPTION_HISTORY' => 'N',
                'AJAX_OPTION_JUMP' => 'N',
                'AJAX_OPTION_STYLE' => 'N',
                'BROWSER_TITLE' => '-',
                'CACHE_GROUPS' => 'Y',
                'CACHE_TIME' => '36000000',
                'CACHE_TYPE' => 'A',
                'CHECK_DATES' => 'Y',
                'DETAIL_URL' => '',
                'DISPLAY_BOTTOM_PAGER' => 'N',
                'DISPLAY_DATE' => 'N',
                'DISPLAY_NAME' => 'N',
                'DISPLAY_PICTURE' => 'N',
                'DISPLAY_PREVIEW_TEXT' => 'Y',
                'DISPLAY_TOP_PAGER' => 'N',
                'ELEMENT_CODE' => 'main_bottommenu_link2',
                'ELEMENT_ID' => $_REQUEST['ELEMENT_ID'],
                'FIELD_CODE' => [
                    0 => '',
                    1 => '',
                ],
                'IBLOCK_ID' => '',
                'IBLOCK_TYPE' => 'CityStaffUIP',
                'IBLOCK_URL' => '',
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                'MESSAGE_404' => '',
                'META_DESCRIPTION' => '-',
                'META_KEYWORDS' => '-',
                'PAGER_BASE_LINK_ENABLE' => 'N',
                'PAGER_SHOW_ALL' => 'N',
                'PAGER_TEMPLATE' => '.default',
                'PAGER_TITLE' => 'Страница',
                'PROPERTY_CODE' => [
                    0 => '',
                    1 => 'link',
                    2 => 'name',
                    3 => '',
                ],
                'SET_BROWSER_TITLE' => 'N',
                'SET_CANONICAL_URL' => 'N',
                'SET_LAST_MODIFIED' => 'N',
                'SET_META_DESCRIPTION' => 'N',
                'SET_META_KEYWORDS' => 'N',
                'SET_STATUS_404' => 'N',
                'SET_TITLE' => 'N',
                'SHOW_404' => 'N',
                'STRICT_SECTION_CHECK' => 'N',
                'USE_PERMISSIONS' => 'N',
                'USE_SHARE' => 'N',
                'COMPONENT_TEMPLATE' => 'main_bottommenu_link1',
            ],
            false
        ); ?>
    </section>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>