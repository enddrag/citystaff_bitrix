<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Disk\Driver;
use Bitrix\Disk\Internals\ObjectTable;
use Bitrix\Intranet\CurrentUser;
use Bitrix\Main\Context;
use Bitrix\Main\Loader;
use Bitrix\Main\Page\Asset;
use Bitrix\Main\UI\Extension;

if (!CurrentUser::get()->isAuthorized()) {
    LocalRedirect('/auth/?backurl=' . urlencode($_SERVER['REQUEST_URI']));
}

global $APPLICATION;

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/styles/main.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/styles/common.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/search.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/modal.js');

Extension::load(['jquery3', 'ui.bootstrap4']);

if ($_SERVER['PHP_SELF'] != Context::getCurrent()->getRequest()->getRequestedPage()) {
    LocalRedirect($_SERVER['PHP_SELF']);
}

Loader::includeModule('iblock');
Extension::load('ui.viewer');

$IB_ID = [];
$res = CIBlock::GetList(
    ['SORT' => 'ASC', 'NAME' => 'ASC'],
    ['ACTIVE' => 'Y', 'TYPE' => 'CityStaffUIP']
);

while ($iblock_list = $res->Fetch()) {
    if (!empty($iblock_list['CODE'])) {
        $IB_ID[$iblock_list['CODE']] = $iblock_list['ID'];
    }
}

$contextIgnore = [
    'шаблон',
    'образец',
    'бланк',
    'заявление',
];
$extension = [
    '.docx',
    '.doc',
    '.xlsx',
    '.xls',
    '.pptx',
    '.ppt',
    '.pdf',
];

$fileList = [];
$templateList = [];

if (
    Loader::includeModule('disk')
    && $storage = Driver::getInstance()->getStorageByCommonId('shared_files_s1')
) {
    $securityContext = $storage->getCurrentUserSecurityContext();
    $urlManager = Driver::getInstance()->getUrlManager();
    $folderObjectList = $storage->getChildren($securityContext, [
        'filter' => [
            'TYPE' => ObjectTable::TYPE_FOLDER,
        ],
        'order' => [
            'ID' => 'DESC',
        ],
    ]);

    foreach ($folderObjectList as $folder) {
        $fileObjectList = $folder->getChildren($securityContext, [
            'filter' => [
                'TYPE' => ObjectTable::TYPE_FILE,
                '%NAME' => $extension,
                '!%NAME' => $contextIgnore,
            ],
            'order' => [
                'ID' => 'DESC',
            ],
        ]);

        foreach ($fileObjectList as $file) {
            $fileList[] = [
                'id' => $file->getId(),
                'name' => str_replace($extension, '', $file->getName()),
                'download' => $urlManager->getUrlForDownloadFile($file),
                'getExtension' => $file->getExtension(),
            ];
        }
    }

    foreach ($folderObjectList as $folder) {
        $fileObjectList = $folder->getChildren($securityContext, [
            'filter' => [
                'TYPE' => ObjectTable::TYPE_FILE,
                [
                    'LOGIC' => 'AND',
                    ['%NAME' => $extension],
                    ['%NAME' => $contextIgnore],
                ],
            ],
            'order' => [
                'ID' => 'DESC',
            ],
        ]);

        foreach ($fileObjectList as $file) {
            $templateList[] = [
                'id' => $file->getId(),
                'name' => str_replace($extension, '', $file->getName()),
                'download' => $urlManager->getUrlForDownloadFile($file),
                'getExtension' => $file->getExtension(),
            ];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php $APPLICATION->ShowHead(); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            /*----------------------галерея-------------------------*/
            // Функция для фильтрации галереи
            function filterGallery(sectionClass) {
                $('.NB_content_tradition_gallery_filter').each(function () {
                    if ($(this).hasClass(sectionClass)) {
                        $(this).css('display', 'block').animate({opacity: 1}, 250);
                    } else {
                        $(this).css('display', 'none');
                        $(this).css('opacity', '0');
                    }
                });
            }

            // Обработчик клика на элементы меню
            $('.NB_content_tradition_menu_item').click(function () {
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
        <?php $APPLICATION->ShowPanel(); ?>
    </div>
</body>
