<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

use Bitrix\Main\Page\Asset;
use Bitrix\Main\UI\Extension;
use Bitrix\Main\UI\Viewer\ItemAttributes;

Extension::load('ui.viewer');

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/docsBase.js');

global $APPLICATION, $IB_ID, $fileList, $templateList;

$APPLICATION->SetTitle('База знаний и документы');
?>
    <!--навигационное меню сайта-->
    <nav class="NB_menu NB1_menu_color widthBase navbar navbar-expand-lg d-flex flex-row justify-content-around">
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
                    'ELEMENT_CODE' => 'logo_black',
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
                    'PROPERTY_CODE' => [0 => '', 1 => 'link', 2 => ''],
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
            <!--Основное содержимое меню-->
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:news.list',
                'common_header_search',
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
                    'FIELD_CODE' => [0 => '', 1 => ''],
                    'FILTER_NAME' => '',
                    'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
                    'IBLOCK_ID' => $IB_ID['sug'],
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
                    'PROPERTY_CODE' => [0 => 'sug_link', 1 => 'sug_name', 2 => ''],
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
            <!--пункты навигации-->
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:menu',
                'common_header_menu',
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
                    'PROPERTY_CODE' => [0 => '', 1 => 'link', 2 => ''],
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
            );
?>
            <?php
$APPLICATION->IncludeComponent(
    'bitrix:system.auth.form',
    'header_avatar',
    [
        'PAGE' => 'common',
    ],
); ?>
        </div>
    </nav>
    <!--баннер-->
    <section class="NB1_banner d-flex flex-row widthBase">
        <div class="NB1_banner_left d-flex flex-row justify-content-between align-items-center">
            <?php
$APPLICATION->IncludeComponent(
    'bitrix:news.detail',
    'include_docsBase_banner_greating',
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
        'ELEMENT_CODE' => 'common_docs_banner_item1',
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
            1 => '',
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
    ],
    false
); ?>
            <?php
$APPLICATION->IncludeComponent(
    'bitrix:news.detail',
    'include_basic',
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
        'ELEMENT_CODE' => 'common_docs_item_img',
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
            1 => '',
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
    ],
    false
); ?>
        </div>
        <div class="NB1_banner_right d-flex flex-column align-items-center justify-content-center">
            <?php
$APPLICATION->IncludeComponent(
    'bitrix:news.detail',
    'include_h3_empty',
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
        'ELEMENT_CODE' => 'common_docs_banner_item2',
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
            1 => '',
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
    ],
    false
); ?>
            <?php
$APPLICATION->IncludeComponent(
    'bitrix:news.detail',
    'include_Fbody',
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
        'ELEMENT_CODE' => 'common_docs_banner_item3',
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
            1 => '',
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
    ],
    false
); ?>
        </div>
    </section>
    <!--общее-->
    <section data-nav-title="Общее" id="general" class="NB1_section_info NB_content widthBase d-flex flex-column">
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:news.detail',
            'include_h3_basic',
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
                'ELEMENT_CODE' => 'common_info_title1',
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
                    1 => '',
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
            ],
            false
        ); ?>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:news.list',
            'common_docs_info',
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
                'FIELD_CODE' => [0 => '', 1 => ''],
                'FILTER_NAME' => '',
                'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
                'IBLOCK_ID' => $IB_ID['docsInfo'],
                'IBLOCK_TYPE' => 'CityStaffUIP',
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
                'INCLUDE_SUBSECTIONS' => 'Y',
                'MESSAGE_404' => '',
                'NEWS_COUNT' => '500',
                'PAGER_BASE_LINK_ENABLE' => 'N',
                'PAGER_DESC_NUMBERING' => 'N',
                'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                'PAGER_SHOW_ALL' => 'N',
                'PAGER_SHOW_ALWAYS' => 'N',
                'PAGER_TEMPLATE' => '.default',
                'PAGER_TITLE' => 'Новости',
                'PARENT_SECTION' => '',
                'PARENT_SECTION_CODE' => 'docs_info',
                'PREVIEW_TRUNCATE_LEN' => '',
                'PROPERTY_CODE' => [0 => 'link_name', 1 => 'link_href'],
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
        <div class="NB1_info_circle NB1_info_circle_green">
        </div>
        <div class="NB1_info_circle NB1_info_circle_blue">
        </div>
    </section>
    <!--документы-->
    <section data-nav-title="Документы" id="documents_list" class="NB1_docs d-flex flex-column NB_content widthBase">
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:news.detail',
            'include_h3_basic',
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
                'ELEMENT_CODE' => 'common_info_title2',
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
                    1 => '',
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
            ],
            false
        ); ?>
        <!--поиск-->
        <div class="NB_search NB1_docs_item_size NB1_search_color NB_backdrop-blur NB_rounded-30 search-box d-flex me-3 align-items-center justify-content-around">
            <input type="search" placeholder="Найти" class="NB_search_input form-control Fmenu" id="search_documents">
            <div class="NB_search_ico NB1_search_ico_color NB_rounded-circle" id="search_documents_ico">
            </div>
        </div>
        <div class="NB1_docs_items" id="documents">
            <?php
            //проходимся по каждому документу и заполняем массив файлов
            foreach ($fileList as $file) :?>
                <div class="NB1_docs_item NB1_docs_item_size flex-row justify-content-between align-items-center"
                     style="display: flex;">
                    <p class="Fa">
                        <?= $file['name'] ?>
                    </p>
                    <?php
                    // Генерируем атрибуты для просмотрщика
                    $attributes = ItemAttributes::tryBuildByFileId(
                        $file['id'],
                        $file['download']
                    )->setTitle($file['name']);
                    $fileExtension = strtolower($file['getExtension']);
                    $videoExtensions = ['mp4', 'avi', 'mov', 'wmv', 'flv', 'webm'];
                    $audioExtensions = ['mp3', 'wav', 'ogg'];
                    $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
                    $documentExtensions = [
                        'pdf',
                        'doc',
                        'docx',
                        'xls',
                        'xlsx',
                        'ppt',
                        'pptx',
                        'txt',
                        'rtf',
                        'odt',
                        'ods',
                        'odp',
                        'csv',
                        'md',
                    ];

                    if (in_array($fileExtension, $videoExtensions)) {
                        $attributes->setAttribute('data-viewer-type', 'video');
                    } elseif (in_array($fileExtension, $audioExtensions)) {
                        $attributes->setAttribute('data-viewer-type', 'audio');
                    } elseif (in_array($fileExtension, $imageExtensions)) {
                        $attributes->setAttribute('data-viewer-type', 'image');
                    } elseif (in_array($fileExtension, $documentExtensions)) {
                        $attributes->setAttribute('data-viewer-type', 'document');
                    } else {
                        $attributes = '';
                    }
                    ?>
                    <div class="NB1_docs_item_right d-flex flex-row justify-content-between" id="<?= $file['id'] ?>">
                        <?php if (!empty($attributes)) : ?>
                            <span class="Fa NB1_docs_item_right_look d-flex flex-row align-items-center"
                                  <?= $attributes ?>style="cursor: pointer;">
                                смотреть
                            </span>
                        <?php else : ?>
                            <a href="<?= $file['download'] ?>" class="Fa NB1_docs_item_right_look d-flex flex-row align-items-center">смотреть</a>
                        <?php endif; ?>
                        <a href="<?= $file['download'] ?>" class="NB1_docs_item_right_download d-flex"
                           style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/assets/img/download.svg');"></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <h4 class="NB1_docs_items_empty" id="nodocuments">-----------документов нет----------- </h4>
    </section>
    <!--баннер шаблонов-->
    <section data-nav-title="Шаблоны" id="Bannertemplates"
             class="NB1_bannerT d-flex flex-row justify-content-between NB_content widthBase">
        <div class="NB1_bannerT_content d-flex flex-column justify-content-center">
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:news.detail',
                'include_h3_empty',
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
                    'ELEMENT_CODE' => 'common_docs_banner_item4',
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
                        1 => '',
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
                ],
                false
            ); ?>
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:news.detail',
                'include_Fbody',
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
                    'ELEMENT_CODE' => 'common_docs_banner_item5',
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
                        1 => '',
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
                ],
                false
            ); ?>
        </div>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:news.detail',
            'include_basic',
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
                'ELEMENT_CODE' => 'common_docs_banner_item6',
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
                    1 => '',
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
            ],
            false
        ); ?>
    </section>
    <!--шаблоны-->
    <section class="NB1_docs d-flex flex-column NB_content widthBase" id="templates_list">
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:news.detail',
            'include_h4_empty',
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
                'ELEMENT_CODE' => 'common_docs_h4',
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
                    1 => '',
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
            ],
            false
        ); ?>
        <!--поиск-->
        <div class="NB_search NB1_docs_item_size NB1_search_color NB_backdrop-blur NB_rounded-30 search-box d-flex me-3 align-items-center justify-content-around">
            <input type="search" placeholder="Найти" class="NB_search_input form-control Fmenu"
                   id="search_templates">
            <div class="NB_search_ico NB1_search_ico_color NB_rounded-circle" id="search_templates_ico">
            </div>
        </div>
        <div class="NB1_docs_items d-flex flex-row flex-wrap" id="templates">
            <?php
            //проходимся по каждому документу и заполняем массив файлов
            foreach ($templateList as $file) :?>
                <div class="NB1_docs_item NB1_docs_item_size flex-row justify-content-between align-items-center"
                     style="display: flex;">
                    <p class="Fa">
                        <?= $file['name'] ?>
                    </p>
                    <?php
                    // Генерируем атрибуты для просмотрщика
                    $attributes = ItemAttributes::tryBuildByFileId(
                        $file['id'],
                        $file['download']
                    )->setTitle($file['name']);
                    $fileExtension = strtolower($file['getExtension']);
                    $videoExtensions = ['mp4', 'avi', 'mov', 'wmv', 'flv', 'webm'];
                    $audioExtensions = ['mp3', 'wav', 'ogg'];
                    $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
                    $documentExtensions = [
                        'pdf',
                        'doc',
                        'docx',
                        'xls',
                        'xlsx',
                        'ppt',
                        'pptx',
                        'txt',
                        'rtf',
                        'odt',
                        'ods',
                        'odp',
                        'csv',
                        'md',
                    ];

                    if (in_array($fileExtension, $videoExtensions)) {
                        $attributes->setAttribute('data-viewer-type', 'video');
                    } elseif (in_array($fileExtension, $audioExtensions)) {
                        $attributes->setAttribute('data-viewer-type', 'audio');
                    } elseif (in_array($fileExtension, $imageExtensions)) {
                        $attributes->setAttribute('data-viewer-type', 'image');
                    } elseif (in_array($fileExtension, $documentExtensions)) {
                        $attributes->setAttribute('data-viewer-type', 'document');
                    } else {
                        $attributes = '';
                    }
                    ?>
                    <div class="NB1_docs_item_right d-flex flex-row justify-content-between"
                         id="<?= $file['id'] ?>">
                        <?php
                    if (!empty($attributes)) : ?>
                            <span class="Fa NB1_docs_item_right_look d-flex flex-row align-items-center"
                                  <?= $attributes ?>style="cursor: pointer;">
                                        смотреть
                                    </span>
                        <?php else : ?>
                            <a href="<?= $file['download'] ?>"
                               class="Fa NB1_docs_item_right_look d-flex flex-row align-items-center">смотреть</a>
                        <?php
                        endif; ?>
                        <a href="<?= $file['download'] ?>" class="NB1_docs_item_right_download d-flex"
                           style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/assets/img/download.svg');"></a>
                    </div>
                </div>
            <?php
            endforeach; ?>
        </div>
        <h4 class="NB1_docs_items_empty" id="notemplates">-----------шаблонов нет----------- </h4>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:news.detail',
            'common_link_hr',
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
                'ELEMENT_CODE' => 'common_link_hr',
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
                    0 => 'name',
                    1 => 'link',
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
                // Отображать панель соц. Закладок
            ],
            false
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
                'ELEMENT_CODE' => 'docs_bottommenu_1',
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
            ],
            false
        ); ?>
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:news.detail',
            'include_basic',
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
                'ELEMENT_CODE' => 'main_bottommenu_arrow',
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
                    1 => '',
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
            ],
            false
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
                'ELEMENT_CODE' => 'docs_bottommenu_2',
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
            ],
            false
        ); ?>
    </section>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
