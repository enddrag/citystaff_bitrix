<?php
global $APPLICATION, $IB_ID;
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('помощь');
?>
    <!--баннер faq-->
    <section data-nav-title="Ваше мнение важно" id="opinion" class="NB_banner d-flex flex-column align-items-center"
             style="background: linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.37) 100%), url('<?=SITE_TEMPLATE_PATH?>/assets/img/faq.png'); background-size: cover; background-repeat: no-repeat; background-position-y: 20%">
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
                        'COMPONENT_TEMPLATE' => 'main_header_logotype',
                        'DETAIL_URL' => '',
                        'DISPLAY_BOTTOM_PAGER' => 'Y',
                        'DISPLAY_DATE' => 'N',
                        'DISPLAY_NAME' => 'N',
                        'DISPLAY_PICTURE' => 'Y',
                        'DISPLAY_PREVIEW_TEXT' => 'N',
                        'DISPLAY_TOP_PAGER' => 'N',
                        'ELEMENT_CODE' => 'logo_header',
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
                        'COMPONENT_TEMPLATE' => 'main_header_search',
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
                        'COMPONENT_TEMPLATE' => 'main_header_aftermenu',
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
                ); ?>
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:system.auth.form',
                    'main_header_avatar',
                    []
                ); ?>
            </div>
        </nav>
        <!--приветственный баннер-->
        <div class="NB3_banner d-flex flex-row justify-content-between align-items-center">
            <div class="NB3_banner_content d-flex flex-column">
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    'common_f_b_t',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        // Показывать включаемую область
                        'AREA_FILE_SUFFIX' => 'inc',
                        'EDIT_TEMPLATE' => '',
                        // Шаблон области по умолчанию
                        'PATH' => '/local/templates/landing/includes/common_f_b_t.php',
                        // Путь к файлу области
                    ],
                    false
                ); ?>
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    'main_about_p',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'EDIT_TEMPLATE' => '',
                        'PATH' => '/local/templates/landing/includes/common_f_b_p.php',
                        'COMPONENT_TEMPLATE' => 'main_about_p',
                    ],
                    false
                ); ?>
            </div>
            <div class="NB3_banner_form d-flex flex-column align-items-center justify-content-between NB_rounded-20">
                <script data-b24-form="inline/27/ptwyaz" data-skip-moving="true">(function (w, d, u) {
                        var s = d.createElement('script');
                        s.async = true;
                        s.src = u + '?' + (Date.now() / 180000 | 0);
                        var h = d.getElementsByTagName('script')[0];
                        h.parentNode.insertBefore(s, h);
                    })(window, document, 'https://stage.citystaff.asgardd.tech/upload/crm/form/loader_27_ptwyaz.js');
                </script>
            </div>
        </div>
    </section>
    <!--как мы работаем-->
    <section data-nav-title="Как мы работаем с обратной связью?" id="howWork"
             class="widthBase d-flex flex row align-items-center justify-content-between NB3_info1">
        <div class="NB3_info1_38 d-flex flex-row align-items-center justify-content-center">
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                '.default',
                [
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'COMPONENT_TEMPLATE' => '.default',
                    'EDIT_TEMPLATE' => '',
                    'PATH' => '/local/templates/landing/includes/common_b_f_HowWork_img.php',
                ],
                false
            ); ?>
        </div>
        <div class="NB3_info1_62 d-flex flex-column justify-content-center">
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                'main_community_item_title3',
                [
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'COMPONENT_TEMPLATE' => 'main_community_item_title3',
                    'EDIT_TEMPLATE' => '',
                    'PATH' => '/local/templates/landing/includes/common_b_f_HowWork_t.php',
                ]
            ); ?>
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                'common_h4',
                [
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'COMPONENT_TEMPLATE' => 'common_h4',
                    'EDIT_TEMPLATE' => '',
                    'PATH' => '/local/templates/landing/includes/common_b_f_HowWork_t2.php',
                ],
                false
            ); ?>
            <div class="Fbody d-flex flex-row align-items-center">
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    'common_b_f_HowWork',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'COMPONENT_TEMPLATE' => 'common_b_f_HowWork',
                        'EDIT_TEMPLATE' => '',
                        'PATH' => '/local/templates/landing/includes/common_b_f_HowWork_p.php',
                    ],
                    false
                ); ?>
            </div>
        </div>
    </section>
    <!--вопросы баннер-->
    <section class="widthBase d-flex flex row align-items-center justify-content-between NB3_info2 NB_rounded-20">
        <div class="NB3_info1_62 d-flex flex-column justify-content-center">
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                'main_union_title',
                [
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'COMPONENT_TEMPLATE' => 'main_union_title',
                    'EDIT_TEMPLATE' => '',
                    'PATH' => '/local/templates/landing/includes/common_f_greenb_h.php',
                ]
            ); ?>
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                'main_about_p',
                [
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'COMPONENT_TEMPLATE' => 'main_about_p',
                    'EDIT_TEMPLATE' => '',
                    'PATH' => '/local/templates/landing/includes/common_f_greenb_p.php',
                ]
            ); ?>
        </div>
        <div class="NB3_info1_38 d-flex flex-row align-items-center justify-content-center">
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                '.default',
                [
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'COMPONENT_TEMPLATE' => '.default',
                    'EDIT_TEMPLATE' => '',
                    'PATH' => '/local/templates/landing/includes/common_f_greenb_img.php',
                ],
                false
            ); ?>
        </div>
    </section>
    <!--вопросики-->
    <section data-nav-title="Частые вопросы" id="answers"
             class="NB3_q widthBase d-flex flex-row justify-content-center NB_rounded-20">
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:news.list',
            'common_f_questions',
            [
                'COMPONENT_TEMPLATE' => '.default',
                'IBLOCK_TYPE' => 'CityStaffUIP',
                // Тип информационного блока (используется только для проверки)
                'IBLOCK_ID' => $IB_ID["DetailInfo"],
                // Код информационного блока
                'NEWS_COUNT' => '100',
                // Количество новостей на странице
                'SORT_BY1' => 'ACTIVE_FROM',
                // Поле для первой сортировки новостей
                'SORT_ORDER1' => 'DESC',
                // Направление для первой сортировки новостей
                'SORT_BY2' => 'SORT',
                // Поле для второй сортировки новостей
                'SORT_ORDER2' => 'ASC',
                // Направление для второй сортировки новостей
                'FILTER_NAME' => '',
                // Фильтр
                'FIELD_CODE' => [    // Поля
                    0 => '',
                    1 => '',
                ],
                'PROPERTY_CODE' => [    // Свойства
                    0 => '',
                    1 => '',
                ],
                'CHECK_DATES' => 'Y',
                // Показывать только активные на данный момент элементы
                'DETAIL_URL' => '',
                // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                'AJAX_MODE' => 'N',
                // Включить режим AJAX
                'AJAX_OPTION_JUMP' => 'N',
                // Включить прокрутку к началу компонента
                'AJAX_OPTION_STYLE' => 'Y',
                // Включить подгрузку стилей
                'AJAX_OPTION_HISTORY' => 'N',
                // Включить эмуляцию навигации браузера
                'AJAX_OPTION_ADDITIONAL' => '',
                // Дополнительный идентификатор
                'CACHE_TYPE' => 'A',
                // Тип кеширования
                'CACHE_TIME' => '36000000',
                // Время кеширования (сек.)
                'CACHE_FILTER' => 'N',
                // Кешировать при установленном фильтре
                'CACHE_GROUPS' => 'Y',
                // Учитывать права доступа
                'PREVIEW_TRUNCATE_LEN' => '',
                // Максимальная длина анонса для вывода (только для типа текст)
                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                // Формат показа даты
                'SET_TITLE' => 'N',
                // Устанавливать заголовок страницы
                'SET_BROWSER_TITLE' => 'N',
                // Устанавливать заголовок окна браузера
                'SET_META_KEYWORDS' => 'Y',
                // Устанавливать ключевые слова страницы
                'SET_META_DESCRIPTION' => 'Y',
                // Устанавливать описание страницы
                'SET_LAST_MODIFIED' => 'N',
                // Устанавливать в заголовках ответа время модификации страницы
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
                // Включать инфоблок в цепочку навигации
                'ADD_SECTIONS_CHAIN' => 'Y',
                // Включать раздел в цепочку навигации
                'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
                // Скрывать ссылку, если нет детального описания
                'PARENT_SECTION' => '',
                // ID раздела
                'PARENT_SECTION_CODE' => '',
                // Код раздела
                'INCLUDE_SUBSECTIONS' => 'Y',
                // Показывать элементы подразделов раздела
                'STRICT_SECTION_CHECK' => 'N',
                // Строгая проверка раздела для показа списка
                'DISPLAY_DATE' => 'Y',
                // Выводить дату элемента
                'DISPLAY_NAME' => 'Y',
                // Выводить название элемента
                'DISPLAY_PICTURE' => 'Y',
                // Выводить изображение для анонса
                'DISPLAY_PREVIEW_TEXT' => 'Y',
                // Выводить текст анонса
                'PAGER_TEMPLATE' => '.default',
                // Шаблон постраничной навигации
                'DISPLAY_TOP_PAGER' => 'N',
                // Выводить над списком
                'DISPLAY_BOTTOM_PAGER' => 'Y',
                // Выводить под списком
                'PAGER_TITLE' => 'Новости',
                // Название категорий
                'PAGER_SHOW_ALWAYS' => 'N',
                // Выводить всегда
                'PAGER_DESC_NUMBERING' => 'N',
                // Использовать обратную навигацию
                'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                // Время кеширования страниц для обратной навигации
                'PAGER_SHOW_ALL' => 'N',
                // Показывать ссылку "Все"
                'PAGER_BASE_LINK_ENABLE' => 'N',
                // Включить обработку ссылок
                'SET_STATUS_404' => 'N',
                // Устанавливать статус 404
                'SHOW_404' => 'N',
                // Показ специальной страницы
                'MESSAGE_404' => '',
                // Сообщение для показа (по умолчанию из компонента)
            ],
            false
        ); ?>
    </section>
    <script type="text/javascript">
        $(document).ready(function () {

            /*--------------------ответы на вопросы---------------------*/
            $('.NB3_q_X').click(function () {
                //ищем ближайший элемент
                let answerBlock = $(this).closest('.NB3_q_item').find('.NB3_q_item_answ');
                //заменяем тоггл класса кнопки
                $(this).toggleClass('NB3_q_active');
                //убираем лишний элемент
                $('.NB3_q_item_answ').not(answerBlock).slideUp(200);
                $('.NB3_q_X').not($(this)).removeClass('NB3_q_active');
                //toggle элемента
                answerBlock.slideToggle(200);
            });

            /*----------------------------------------------------------*/

        });
    </script>
    <!--чат с поддержкой-->
    <section data-nav-title="Чат с поддержкой" id="supportChats" class="widthBase NB_content">
        <div class="d-flex flex-row justify-content-between NB3_info3 NB_rounded-20">
            <div class="NB3_info1_38 d-flex flex-row align-items-center justify-content-between">
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'EDIT_TEMPLATE' => '',
                        'PATH' => '/local/templates/landing/includes/common_f_chat_img.php',
                    ]
                ); ?>
            </div>
            <div class="NB3_info1_62 d-flex flex-column justify-content-center align-items-start">
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    'common_f_b_t',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'COMPONENT_TEMPLATE' => 'common_f_b_t',
                        'EDIT_TEMPLATE' => '',
                        'PATH' => '/local/templates/landing/includes/common_f_chat_t.php',
                    ]
                ); ?>
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    'main_about_p',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'COMPONENT_TEMPLATE' => 'main_about_p',
                        'EDIT_TEMPLATE' => '',
                        'PATH' => '/local/templates/landing/includes/common_f_chat_p.php',
                    ]
                ); ?>
                <?php
                $APPLICATION->IncludeComponent(
                    'bitrix:news.detail',
                    'common_f_b_a',
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
                        'ELEMENT_CODE' => 'link_faq',
                        // Код новости
                        'ELEMENT_ID' => $_REQUEST['ELEMENT_ID'],
                        // ID новости
                        'FIELD_CODE' => [    // Поля
                            0 => 'link',
                            1 => 'name',
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
                <img src="/local/templates/landing/assets/img/supportarrow.svg" alt="" class="NB3_info1_arrow">
            </div>
        </div>
    </section>
    <!--график работ-->
    <section data-nav-title="График работ" id="workhours"
             class="d-flex flex-row justify-content-between NB3_WH widthBase NB_content">
        <?php
        $APPLICATION->IncludeComponent(
            'bitrix:main.include',
            '.default',
            [
                'AREA_FILE_SHOW' => 'file',
                'AREA_FILE_SUFFIX' => 'inc',
                'COMPONENT_TEMPLATE' => '.default',
                'EDIT_TEMPLATE' => '',
                'PATH' => '/local/templates/landing/includes/common_f_WH_img.php',
            ],
            false
        ); ?>
        <div class="d-flex flex-column align-items-center justify-content-between NB3_WH_item NB_rounded-20">
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                'main_community_item_title3',
                [
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'COMPONENT_TEMPLATE' => 'main_community_item_title3',
                    'EDIT_TEMPLATE' => '',
                    'PATH' => '/local/templates/landing/includes/common_f_WH_h.php',
                ],
                false
            ); ?>
            <?php
            $APPLICATION->IncludeComponent(
                'bitrix:news.list',
                'common_f_workhours',
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
                    'IBLOCK_ID' => $IB_ID["DetailInfo"],
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
                    'PROPERTY_CODE' => [
                        0 => '',
                        1 => '',
                    ],
                    'SET_BROWSER_TITLE' => 'N',
                    'SET_LAST_MODIFIED' => 'N',
                    'SET_META_DESCRIPTION' => 'Y',
                    'SET_META_KEYWORDS' => 'Y',
                    'SET_STATUS_404' => 'N',
                    'SET_TITLE' => 'N',
                    'SHOW_404' => 'N',
                    'SORT_BY1' => 'ID',
                    'SORT_BY2' => 'SORT',
                    'SORT_ORDER1' => 'ASC',
                    'SORT_ORDER2' => 'ASC',
                    'STRICT_SECTION_CHECK' => 'N',
                    'COMPONENT_TEMPLATE' => 'common_f_workhours',
                ],
                false
            ); ?>
        </div>
        <div class="NB3_WH_circle NB3_WH_circle_first NB_rounded-circle">
        </div>
        <div class="NB3_WH_circle NB3_WH_circle_second NB_rounded-circle">
        </div>
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
<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>