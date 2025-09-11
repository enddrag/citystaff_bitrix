<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

 <?$APPLICATION->ShowHead();?> <?php
          $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/styles/bootstrap.min.css');
          $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/styles/main.css');
          $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/jquery.min.js');
          $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/search.js');
     ?> <script type="text/javascript">
        $(document).ready(function(){

            /*----------------------Модальное окно----------------------*/

            // Функция открытия модального окна
            function openModal() {
                $('#modal').addClass('NB_active');
                $('body').css('overflow', 'hidden'); // Блокируем прокрутку фона
            }
            
            // Функция закрытия модального окна
            function closeModal() {
                $('#modal').removeClass('NB_active');
                $('body').css('overflow', 'auto'); // Восстанавливаем прокрутку
            }
            
            // Открытие модального окна по клику на кнопку
            $('#openModal').on('click', openModal);
            
            // Закрытие модального окна по клику на кнопки закрытия
            $('#closeModal').on('click', closeModal);
            
            // Закрытие модального окна при нажатии Escape
            $(document).on('keydown', function(e) {
                if (e.key === 'Escape' && $('#modal').hasClass('NB_active')) {
                    closeModal();
                }
            });
            // Закрытие модального окна при нажатии на любую область, кроме окна
            $("#modal").on('click', function(e){
                if ($(e.target).hasClass('NB_active') && !$(e.target).closest('#modal > div').length){
                    closeModal();
                }
            });

            /*----------------------------------------------------------*/
            /*----------------------галерея-------------------------*/
    // Функция для фильтрации галереи
    function filterGallery(sectionClass) {
        $('.NB_content_tradition_gallery_item').each(function() {
            if ($(this).hasClass(sectionClass)) {
                $(this).css('display', 'block').animate({ opacity: 1 }, 250);
            } else {
                $(this).css('display', 'none');
                    $(this).css('opacity', '0');
            }
        });
    }

    // Обработчик клика на элементы меню
    $('.NB_content_tradition_menu_item').click(function() {
        // Удаляем активные классы у всех элементов меню
        $('.NB_content_tradition_menu_item').removeClass('NB_menu_active NB_backdrop-blur');
        
        // Добавляем активные классы к текущему элементу
        $(this).addClass('NB_menu_active NB_backdrop-blur');
        
        // Получаем идентификатор (первый класс из id элемента)
        const sectionId = $(this).attr('id').split(' ')[0];
        
        // Фильтруем галерею
        filterGallery(sectionId);
    });

    // Активируем первый элемент меню при загрузке страницы
    if ($('.NB_content_tradition_menu_item').length > 0) {
        $('.NB_content_tradition_menu_item').first().click();
    }
            /*----------------------------------------------------------*/

            /*-----------------------Подписчики-------------------------*/

            // работа с количеством подписчиков
            function getSubscribersText(count) {
                if (count % 10 === 1 && count % 100 !== 11) {return 'подписчик';} 
                else if ((count % 10 >= 2 && count % 10 <= 4) && (count % 100 < 10 || count % 100 >= 20)) {return 'подписчика'; } 
                else {return 'подписчиков';}
            }

            $.ajax({
                url: `https://api.telegram.org/bot${botToken}/getChatMembersCount?chat_id=${channelUsername}`,
                method: 'GET',
                data: {
                    chat_id: channelUsername,

                },
                success: function(response) {
                    const TGsubscribersCount = response.result;
                    const TGsubscribersText = getSubscribersText(`${TGsubscribersCount}`);
                    $('#tg').text(`${TGsubscribersCount} ${TGsubscribersText}`);
                },
                error: function(xhr, status, error) {
                    console.error('Ошибка вывода количества подписчиков:', error);
                }
            });
            $.ajax({
                url: 'https://api.vk.com/method/groups.getById',
                method: 'GET',
                dataType: 'JSONP', // VK API требует JSONP для кросс-доменных запросов
                data: {
                    group_id: vkGroupId,
                    fields: 'members_count',
                    access_token: vkAccessToken,
                    v: '5.199' // Версия API
                },
                success: function(response) {
                    if (response.error) {
                        console.error('Ошибка VK API:', response.error);
                        return;
                    }
                    const VKsubscribersCount = response.response.groups[0].members_count;
                    const VKsubscribersText = getSubscribersText(`${VKsubscribersCount}`);
                    $('#vk').text(`${VKsubscribersCount} ${VKsubscribersText}`);
                },
                error: function(xhr, status, error) {
                    console.error('Ошибка запроса:', error);
                }
            });
            /*----------------------------------------------------------*/
        });
    </script>
<div>
	 <?$APPLICATION->ShowPanel();?>
</div>