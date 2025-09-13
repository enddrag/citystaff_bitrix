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
});