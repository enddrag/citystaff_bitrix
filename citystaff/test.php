<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?php
global $USER;
$user = CUser::GetByID($USER->GetID())->Fetch();
$avatar = CFile::GetFileArray($user['PERSONAL_PHOTO']);
?>
<div class="user-info">
 <img alt="<?= htmlspecialchars($user['NAME'] . ' ' . $user['LAST_NAME']) ?>" src="<?= $avatar ? $avatar['SRC'] : '/default-avatar.png' ?>
	 "> <?= htmlspecialchars($user['NAME'] . ' ' . $user['LAST_NAME']) ?>
</div>
<p class="Fmenu NB2_gradient_button d-flex flex-row align-items-center justify-content-center" data-modal="application">
	 Оставить заявку
</p>
 <!--модальное окно--> <section class="NB_modal d-flex flex-row align-items-center justify-content-center" id="application">
<div class="NB_modal_item d-flex flex-column align-items-center">
 <img alt="X" src="/local/templates/landing/assets/img/X.svg" class="NB_modal_item_X close_modal">
	<div class="NB_modal_item_item flex-column align-items-center" id="survey" style="display: flex;">
		<h4>Заполните имя и контакт друга, чтобы мы могли учесть заявку</h4>
		<form action="#" method="post" class="NB_modal_form d-flex flex-column align-items-center">
			<div class="NB_modal_input_form_items d-flex flex-column align-items-center NB_modal_form_error">
 <input type="text" class="NB_modal_input_form_input form-control Fmenu" placeholder="Заполните" data-ddg-inputtype="unknown">
				<p class="NB_modal_error">
					 ошибка валидации
				</p>
			</div>
			<div class="NB_modal_input_form_items d-flex flex-column align-items-center NB_modal_form_error">
 <input type="text" class="NB_modal_input_form_input form-control Fmenu" placeholder="Заполните" data-ddg-inputtype="unknown">
				<p class="NB_modal_error">
					 ошибка валидации
				</p>
			</div>
			<div class="NB_modal_input_form_items d-flex flex-column align-items-center NB_modal_form_error">
 <input type="text" class="NB_modal_input_form_input form-control Fmenu" placeholder="Заполните" data-ddg-inputtype="unknown">
				<p class="NB_modal_error">
					 ошибка валидации
				</p>
			</div>
			<div class="NB_modal_input_form_items d-flex flex-column align-items-center NB_modal_form_error">
				 <!-- Скрытый select для формы -->
				<select name="vacancy" required="" class="NB_hidden-select" data-ddg-inputtype="unknown">
					<option value="" disabled="" selected=""></option>
					<option value="pm">Менеджер проектаffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff</option>
					<option value="js">Разработчик JavaScript</option>
					<option value="uiux">Дизайнеров UI/UX</option>
					<option value="data">Аналитик данных</option>
					<option value="qa">Тестировщик</option>
				</select>
				 <!-- Кастомный выпадающий список -->
				<div class="NB_modal_select Fmenu">
					<div class="NB_selected-option NB_placeholder">
						 на какую вакансию
					</div>
					<div class="NB_options-container">
						<div class="NB_option" data-value="pm">
							 Менеджер проектаffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
						</div>
						<div class="NB_option" data-value="js">
							 Разработчик JavaScript
						</div>
						<div class="NB_option" data-value="uiux">
							 Дизайнеров UI/UX
						</div>
						<div class="NB_option" data-value="data">
							 Аналитик данных
						</div>
						<div class="NB_option" data-value="qa">
							 Тестировщик
						</div>
					</div>
				</div>
				<p class="NB_modal_error">
					 ошибка валидации
				</p>
			</div>
			<div class="NB_modal_input_form_items d-flex flex-column align-items-center NB_modal_form_error">
 <input type="text" class="NB_modal_input_form_input form-control Fmenu" placeholder="Заполните" data-ddg-inputtype="unknown">
				<p class="NB_modal_error">
					 ошибка валидации
				</p>
			</div>
			<div class="NB_modal_gradient d-flex flex-row align-items-center justify-content-center">
 <input type="submit" value="Оставить заявку" class="NB_modal_input_form_button Fmenu d-flex flex-row align-items-center justify-content-center">
			</div>
		</form>
		<p class="Fa NB_modal_item_footer">
			 Нажимая на кнопку «Отправить», вы даёте согласие на обработку персональных данных.
		</p>
	</div>
	<div class="NB_modal_item_item flex-column align-items-center" id="happyMonkey" style="display: none;">
		<h4>Заявка принята!</h4>
		<p class="Fbody NB_modal_item_p">
			 Мы начислим 5 000 ₽ после выхода вашего друга на работу
		</p>
 <img src="img/monkey.png" alt="" class="NB_modal_monkey">
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
    </script><?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>