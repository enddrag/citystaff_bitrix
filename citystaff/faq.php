<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("помощь");
?> <!--баннер faq-->
    <section class="NB_banner d-flex flex-column align-items-center" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.37) 100%), url('img/faq.png'); background-size: cover; background-repeat: no-repeat; background-position-y: 20%">
       <!--навигационное меню сайта-->
        <nav class="NB_menu NB_menu_color NB_backdrop-blur NB_rounded-50 widthBase navbar navbar-expand-lg d-flex flex-row justify-content-around">
            <div class="NB_left d-flex flex-row justify-content-around align-items-center">
                <?php $APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"main_header_logotype", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
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
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "logo_header",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FIELD_CODE" => array(
			0 => "NAME",
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
			1 => "link",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "main_header_logotype"
	),
	false
);?>
                <!--Основное содержимое меню-->
                <?php $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_header_search", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "17",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "1000",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "sug_link",
			1 => "sug_name",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main_header_search"
	),
	false
);?>
                <?php $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "main_header_menu",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(0=>"",),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N"
                )
            );?>
            </div>
            <div class="NB_right d-flex flex-row justify-content-around align-items-center">
                <?php $APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"main_header_aftermenu", 
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
		"ELEMENT_CODE" => "after_menu",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FIELD_CODE" => array(
			0 => "NAME",
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
			1 => "link",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "main_header_aftermenu"
	),
	false
);?>
                <?php $APPLICATION->IncludeComponent(
                "bitrix:system.auth.form",
                "main_header_avatar",
            Array()
            );?>
            </div>
         </nav>

        <!--приветственный баннер-->
        <div class="NB3_banner d-flex flex-row justify-content-between align-items-center">
            <div class="NB3_banner_content d-flex flex-column">
                <h3 class="text-white">Ваше мнение важно</h3>
                <p class="Fbody text-white">Делитесь идеями, замечаниями и предложениями — мы читаем каждое сообщение и учитываем обратную связь при улучшении процессов внутри компании.</p>
            </div>
            <div class="NB3_banner_form d-flex flex-column align-items-center justify-content-between NB_rounded-20">
                <input type="text" placeholder="Имя" class="NB3_banner_form_input form-control NB_rounded-20 Fmenu" name="">
                <textarea name="" class="NB3_banner_form_text  form-control NB_rounded-20 Fmenu" placeholder="Напишите здесь свою идею, предложение или комментарий"></textarea>
                <p class="NB3_banner_form_p text-white">*Можно написать об улучшениях, внутренних процессах, идеях, атмосфере и т.д.</p>
                <div class="NB_modal_gradient d-flex flex-row align-items-center justify-content-center">
                    <input type="submit" value="отправить сообщение" class="NB3_banner_form_button Fmenu">
                </div>
                

            </div>
        </div>
    </section>

    <!--как мы работаем-->
    <section class="widthBase d-flex flex row align-items-center justify-content-between NB3_info1">
        <div class="NB3_info1_38 d-flex flex-row align-items-center justify-content-center">
            <img src="img/эллипс.png" alt="" class="NB3_info1_38_img">
        </div>
        <div class="NB3_info1_62 d-flex flex-column justify-content-center">
            <h3>Как мы работаем <mark>с обратной связью</mark></h3>
            <h4>Что происходит после отправки сообщения?</h4>
            <div class="Fbody d-flex flex-row align-items-center">
                <ol>
                    <li>Обращения сортируются HR-командой;</li>
                    <li>Обратная связь без подписи учитывается в анализе и решениях, но не обсуждается лично;</li>
                    <li>Подписанные обращения — могут быть взяты в работу с индивидуальным ответом;</li>
                    <li>Отчетность по инициативам и изменениям транслируется в Ленте в Bitrix и в личные сообщения.</li>
                </ol>
            </div>
        </div>
    </section>

    <!--вопрсоы баннер-->
    <section class="widthBase d-flex flex row align-items-center justify-content-between NB3_info2  NB_rounded-20">
        <div class="NB3_info1_62 d-flex flex-column justify-content-center">
            <h3>Часто задаваемые <mark>вопросы</mark></h3>
            <p class="Fbody d-flex flex-row align-items-center">Здесь собраны самые популярные вопросы от сотрудников и короткие, понятные ответы. Если не нашли нужное — можно сразу задать вопрос.</p>
        </div>
        <div class="NB3_info1_38 d-flex flex-row align-items-center justify-content-center">
            <img src="img/finger.png" alt="" class="NB3_info1_38_img">
        </div>
    </section>

    <!--вопросики-->
    <section class="NB3_q widthBase d-flex flex-row justify-content-center NB_rounded-20">
        <div class="NB3_q_items widthBase d-flex flex-row flex-wrap justify-content-center">
            <div class="NB3_q_item d-flex flex-column align-items-center justify-content-between NB_rounded-20">
                <div class="NB3_q_item_ask d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">
                        К кому обратиться по начислению зарплаты?
                    </p>
                    <div class="NB3_q_X NB_rounded-circle d-flex flex-row align-items-center justify-content-center"></div>
                </div>
                <p class="NB3_q_item_answ flex-row align-items-center Fbody NB_rounded-20">
                    Дарим подарки, предоставляем матпомощь и приглашаем на мероприятия.
                </p>
            </div>
            <div class="NB3_q_item d-flex flex-column align-items-center justify-content-between NB_rounded-20">
                <div class="NB3_q_item_ask d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">
                        К кому обратиться по начислению зарплаты?
                    </p>
                    <div class="NB3_q_X NB_rounded-circle d-flex flex-row align-items-center justify-content-center"></div>
                </div>
                <p class="NB3_q_item_answ flex-row align-items-center Fbody NB_rounded-20">
                    Дарим подарки, предоставляем матпомощь и приглашаем на мероприятия.
                </p>
            </div>
            <div class="NB3_q_item d-flex flex-column align-items-center justify-content-between NB_rounded-20">
                <div class="NB3_q_item_ask d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">
                        К кому обратиться по начислению зарплаты?
                    </p>
                    <div class="NB3_q_X NB_rounded-circle d-flex flex-row align-items-center justify-content-center"></div>
                </div>
                <p class="NB3_q_item_answ flex-row align-items-center Fbody NB_rounded-20">
                    Дарим подарки, предоставляем матпомощь и приглашаем на мероприятия.
                </p>
            </div>
            <div class="NB3_q_item d-flex flex-column align-items-center justify-content-between NB_rounded-20">
                <div class="NB3_q_item_ask d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">
                        К кому обратиться по начислению зарплаты?
                    </p>
                    <div class="NB3_q_X NB_rounded-circle d-flex flex-row align-items-center justify-content-center"></div>
                </div>
                <p class="NB3_q_item_answ flex-row align-items-center Fbody NB_rounded-20">
                    Дарим подарки, предоставляем матпомощь и приглашаем на мероприятия.
                </p>
            </div>
            <div class="NB3_q_item d-flex flex-column align-items-center justify-content-between NB_rounded-20">
                <div class="NB3_q_item_ask d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">
                        К кому обратиться по начислению зарплаты?
                    </p>
                    <div class="NB3_q_X NB_rounded-circle d-flex flex-row align-items-center justify-content-center"></div>
                </div>
                <p class="NB3_q_item_answ flex-row align-items-center Fbody NB_rounded-20">
                    Дарим подарки, предоставляем матпомощь и приглашаем на мероприятия.
                </p>
            </div>
            <div class="NB3_q_item d-flex flex-column align-items-center justify-content-between NB_rounded-20">
                <div class="NB3_q_item_ask d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">
                        К кому обратиться по начислению зарплаты?
                    </p>
                    <div class="NB3_q_X NB_rounded-circle d-flex flex-row align-items-center justify-content-center"></div>
                </div>
                <p class="NB3_q_item_answ flex-row align-items-center Fbody NB_rounded-20">
                    Дарим подарки, предоставляем матпомощь и приглашаем на мероприятия.
                </p>
            </div>
            <div class="NB3_q_item d-flex flex-column align-items-center justify-content-between NB_rounded-20">
                <div class="NB3_q_item_ask d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">
                        К кому обратиться по начислению зарплаты?
                    </p>
                    <div class="NB3_q_X NB_rounded-circle d-flex flex-row align-items-center justify-content-center"></div>
                </div>
                <p class="NB3_q_item_answ flex-row align-items-center Fbody NB_rounded-20">
                    Дарим подарки, предоставляем матпомощь и приглашаем на мероприятия.
                </p>
            </div>
            <div class="NB3_q_item d-flex flex-column align-items-center justify-content-between NB_rounded-20">
                <div class="NB3_q_item_ask d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">
                        К кому обратиться по начислению зарплаты?
                    </p>
                    <div class="NB3_q_X NB_rounded-circle d-flex flex-row align-items-center justify-content-center"></div>
                </div>
                <p class="NB3_q_item_answ flex-row align-items-center Fbody NB_rounded-20">
                    Дарим подарки, предоставляем матпомощь и приглашаем на мероприятия.
                </p>
            </div>
            <div class="NB3_q_item d-flex flex-column align-items-center justify-content-between NB_rounded-20">
                <div class="NB3_q_item_ask d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">
                        К кому обратиться по начислению зарплаты?
                    </p>
                    <div class="NB3_q_X NB_rounded-circle d-flex flex-row align-items-center justify-content-center"></div>
                </div>
                <p class="NB3_q_item_answ flex-row align-items-center Fbody NB_rounded-20">
                    Дарим подарки, предоставляем матпомощь и приглашаем на мероприятия.
                </p>
            </div>
        </div>
    </section>
<script type="text/javascript">
        $(document).ready(function() {

            /*--------------------ответы на вопросы---------------------*/
            $('.NB3_q_X').click(function() {
                //ищем ближайший элемент
                var answerBlock = $(this).closest('.NB3_q_item').find('.NB3_q_item_answ');   
                //заменяем тоггл класса кнопки
                $(this).toggleClass('NB3_q_active');  
                //убираем лишний элемент
                $('.NB3_q_item_answ').not(answerBlock).slideUp(200);
                $('.NB3_q_X').not($(this)).removeClass('NB3_q_active');
                //тогл элемента
                answerBlock.slideToggle(200);       
            });
            
            /*----------------------------------------------------------*/

        });
    </script>

    <!--чат с поддержкой-->
    <section class="widthBase NB_content">
        <div class="d-flex flex-row justify-content-between NB3_info3 NB_rounded-20">
            <div class="NB3_info1_38 d-flex flex-row align-items-center justify-content-between">
                <img src="img/каткова2.png" alt="" class="NB3_info1_img NB_rounded-circle">
            </div>
            <div class="NB3_info1_62 d-flex flex-column justify-content-center">
                <h3 class="text-white">Не нашли ответа?</h3>
                <p class="Fbody text-white">Задать вопрос Екатерине Катковой</p>
                <a href="#" class="NB3_info1_a Fmenu d-flex flex-column align-items-center justify-content-center NB_rounded-50">Перейти в чат</a>
                <img src="img/supportarrow.svg" alt="" class="NB3_info1_arrow">
            </div>
        </div>
    </section>

    <!--график работ-->
    <section class="d-flex flex-row justify-content-between NB3_WH widthBase NB_content">
        <img src="img/календарь.png" alt="" class="NB3_WH_item_img">
        <div class="d-flex flex-column align-items-center justify-content-between NB3_WH_item NB_rounded-20">
            <h3>График работы <mark>по городам</mark></h3>
            <div class="NB3_WH_item_item d-flex flex-column align-items-end justify-content-between">
                <div class="NB3_WH_i_i_info d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">Ижевск:</p>
                    <p class="Fbody d-flex flex-row align-items-center">Пн–Пт: с 06:30 до 21:45<br>Сб–Вс: с 07:30 до 16:45</p>
                </div>
                <div class="NB3_WH_i_i_info">
                    <p class="Fmenu"><mark>В остальное время офис находится под охраной.<br><br>Если вам нужно попасть в офис вне графика — заранее предупредите руководителя. Он согласует доступ и организует <br>открытие помещения.</mark></p>
                </div>
            </div>
            <div class="NB3_WH_item_item d-flex flex-column align-items-end justify-content-between">
                <div class="NB3_WH_i_i_info d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">Ижевск:</p>
                    <p class="Fbody d-flex flex-column aling-items-end">Пн–Пт: с 06:30 до 21:45<mark>Сб–Вс: с 07:30 до 16:45</mark></p>
                </div>
            </div>
            <div class="NB3_WH_item_item d-flex flex-column align-items-end justify-content-between">
                <div class="NB3_WH_i_i_info d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">Ижевск:</p>
                    <p class="Fbody d-flex flex-column aling-items-end">Пн–Пт: с 06:30 до 21:45<mark>Сб–Вс: с 07:30 до 16:45</mark></p>
                </div>
            </div>
            <div class="NB3_WH_item_item d-flex flex-column align-items-end justify-content-between">
                <div class="NB3_WH_i_i_info d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">Ижевск:</p>
                    <p class="Fbody d-flex flex-column aling-items-end">Пн–Пт: с 06:30 до 21:45<mark>Сб–Вс: с 07:30 до 16:45</mark></p>
                </div>
            </div>
            <div class="NB3_WH_item_item d-flex flex-column align-items-end justify-content-between">
                <div class="NB3_WH_i_i_info d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">Ижевск:</p>
                    <p class="Fbody d-flex flex-column aling-items-end">Пн–Пт: с 06:30 до 21:45<mark>Сб–Вс: с 07:30 до 16:45</mark></p>
                </div>
            </div>
            <div class="NB3_WH_item_item d-flex flex-column align-items-end justify-content-between">
                <div class="NB3_WH_i_i_info d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">Ижевск:</p>
                    <p class="Fbody d-flex flex-column aling-items-end">Пн–Пт: с 06:30 до 21:45<mark>Сб–Вс: с 07:30 до 16:45</mark></p>
                </div>
            </div>
            <div class="NB3_WH_item_item d-flex flex-column align-items-end justify-content-between">
                <div class="NB3_WH_i_i_info d-flex flex-row justify-content-between">
                    <p class="Fbody d-flex flex-row align-items-center">Ижевск:</p>
                    <p class="Fbody d-flex flex-column aling-items-end">Пн–Пт: с 06:30 до 21:45<mark>Сб–Вс: с 07:30 до 16:45</mark></p>
                </div>
            </div>
        </div>
        <div class="NB3_WH_circle NB3_WH_circle_first NB_rounded-circle"></div>
        <div class="NB3_WH_circle NB3_WH_circle_second NB_rounded-circle"></div>
    </section>

     <section class="widthBase NB_content NB_bottomMenu d-flex flex-row flex-wrap align-items-center">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"main_bottommenu_link1",
	Array(
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
		"COMPONENT_TEMPLATE" => "main_bottommenu_link1",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "main_bottommenu_link1",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FIELD_CODE" => array(0=>"",1=>"",),
		"IBLOCK_ID" => "12",
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
		"PROPERTY_CODE" => array(0=>"",1=>"link",2=>"name",3=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/landing/includes/main_bottommenu_arrow"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"main_bottommenu_link1",
	Array(
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
		"COMPONENT_TEMPLATE" => "main_bottommenu_link1",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "main_bottommenu_link2",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FIELD_CODE" => array(0=>"",1=>"",),
		"IBLOCK_ID" => "12",
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
		"PROPERTY_CODE" => array(0=>"",1=>"link",2=>"name",3=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	)
);?> </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>