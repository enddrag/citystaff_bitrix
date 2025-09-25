$(document).ready(function() {

    /*----------------------Модальное окно----------------------*/

    // Функция открытия модального окна
    function openModal(modalId) {
        $('#' + modalId).addClass('NB_active');
        $('body').css('overflow', 'hidden'); // Блокируем прокрутку фона
    }

    // Функция закрытия модального окна
    function closeModal(modalId) {
        $('#' + modalId).removeClass('NB_active');
        
        // Восстанавливаем прокрутку только если нет других открытых модальных окон
        if ($('.NB_active').length === 0) {
            $('body').css('overflow', 'auto');
        }

        //сбрасываем значения (показываем форму, прячем обезьянок)
        $('#survey').css('display', 'flex');
        $('#happyMonkey').css('display', 'none');
        $('#sadMonkey').css('display', 'none');
    }

    // Открытие модального окна по клику на кнопку с атрибутом data-modal
    $(document).on('click', '[data-modal]', function() {
        var modalId = $(this).data('modal');
        openModal(modalId);
    });

    // Закрытие модального окна по клику на кнопки закрытия
    $(document).on('click', '.close_modal', function() {
        var modalId = $(this).closest('.NB_modal').attr('id');
        closeModal(modalId);
    });

    // Закрытие модального окна при нажатии Escape
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') {
            $('.NB_active').each(function() {
                closeModal($(this).attr('id'));
            });
        }
    });

    // Закрытие модального окна при клике на фон (оверлей)
    $(document).on('click', '.NB_modal.NB_active', function(e) {
        if ($(e.target).hasClass('NB_active') && !$(e.target).closest('.NB_modal_item').length) {
            closeModal($(this).attr('id'));
        }
    });

    /*----------------------------------------------------------*/


    /*--------------------Помощь в валидации--------------------*/

    //прячем информацию об отправке формы
    function hideAlertMessages(){
        $('.NB_modal .b24-form-state').each(function (){
            $(this).css('display', 'none');
        });
    }
    //проверка видимости
    function isVisible(element) {
        return $(element).is(':visible');
    }
    //изменения
    function changes() {
        $('.b24-form-control-alert-message').each(function() {
            var $alert = $(this);
            var $container = $alert.closest('.b24-form-control-container');

            if (isVisible($alert)) {
                $container.addClass('NB_modal_form_error');
            } else {
                $container.removeClass('NB_modal_form_error');
            }
        });
        //при успешной отправке формы получаем веселую обезьянку (либо грустную)
        if($('.NB_modal .b24-form-state.b24-form-success').css('display') === 'flex'){
            hideAlertMessages();
            $('#survey').css('display', 'none');
            $('#happyMonkey').css('display', 'flex');
        }
        else if($('.NB_modal .b24-form-state.b24-form-error').css('display') === 'flex' || $('.NB_modal .b24-form-state.b24-form-warning').css('display') === 'flex'){
            hideAlertMessages();
            $('#survey').css('display', 'none');
            $('#sadMonkey').css('display', 'flex');
        }
    }
    // наблюдатель изменения DOM
    var obs = new MutationObserver(function(){
        changes();
    });

    obs.observe(document.body, {
        childList: true,
        subtree: true,
        attributes: true,
        attributeFilter: ['style', 'class']
    });
    changes();



    /*----------------------------------------------------------*/
});