<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><p class="Fmenu NB2_gradient_button d-flex flex-row align-items-center justify-content-center" data-modal="application">
	 Оставить заявку
</p>
<?php
    $showClass = '';
    $showMonkey = 'display: none;';
    $showRequest = 'display: flex;';
    if(isset($_GET['ref_sent'])) {
        if (strip_tags($_GET['ref_sent']) == "success") {
            $showClass = "NB_active";
            $showRequest = 'display: none;';
            $showMonkey = 'display: flex;';
        }
        else if (strip_tags($_GET['ref_sent']) == "fail") {
            $showClass = "NB_active";
        }
    }
?>
    <!--модальное окно-->
    <section class="NB_modal d-flex flex-row align-items-center justify-content-center <?=$showClass?>" id="application">
        <div class="NB_modal_item d-flex flex-column align-items-center">
         <img alt="X" src="/local/templates/landing/assets/img/X.svg" class="NB_modal_item_X close_modal">
            <div class="NB_modal_item_item flex-column align-items-center" id="survey" style="<?=$showRequest?>">
                <h4>Заполните имя и контакт друга, чтобы мы могли учесть заявку</h4>
                <script data-b24-form="inline/25/5wmkc3" data-skip-moving="true">(function(w,d,u){var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})(window,document,'https://stage.citystaff.asgardd.tech/upload/crm/form/loader_25_5wmkc3.js');</script>
                <p class="Fa NB_modal_item_footer">
                     Нажимая на кнопку «Отправить», вы даёте согласие на обработку персональных данных.
                </p>
            </div>
            <div class="NB_modal_item_item flex-column align-items-center" id="happyMonkey" style="<?=$showMonkey?>">
                <h4>Заявка принята!</h4>
                <p class="Fbody NB_modal_item_p">
                     Мы начислим 5 000 ₽ после выхода вашего друга на работу
                </p>
                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/monkey.png" alt="" class="NB_modal_monkey">
            </div>
        </div>
    </section>

        <script>
            $(document).ready(function() {
            // Инициализация кастомного селекта
            $('.NB_modal_select .NB_selected-option').click(function() {
                $('.NB_modal_select').toggleClass('NB_open');
            });

            // Обработка выбора опции
            $('.NB_modal_select .NB_option').click(function() {
                var value = $(this).data('value');
                var text = $(this).text();

                // Обновление отображения выбранной опции
                $('.NB_modal_select .NB_selected-option').text(text).removeClass('NB_placeholder');

                // Обновление значения в скрытом select
                $('select.hidden-select').val(value);

                // Закрытие выпадающего списка
                $('.NB_modal_select').removeClass('NB_open');
            });

            // Закрытие выпадающего списка при клике вне его
            $(document).mouseup(function(e) {
                var container = $('.NB_modal_select');
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.removeClass('NB_open');
                }
            });

        });
        </script>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>