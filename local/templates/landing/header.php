<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?$APPLICATION->ShowHead();?>
    <?php
          $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/styles/bootstrap.min.css');
          $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/styles/main.css');
          $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/styles/common.css');
          $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/jquery.min.js');
          $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/search.js');
          $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/modal.js');
     ?>
    <script type="text/javascript">
        $(document).ready(function(){


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
        });
    </script>
</head>
<body>
    <div>
        <?$APPLICATION->ShowPanel();?>
    </div>
</body>
