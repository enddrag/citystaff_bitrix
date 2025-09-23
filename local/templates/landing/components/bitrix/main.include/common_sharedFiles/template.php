<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Disk\Driver;
use Bitrix\Disk\Internals\ObjectTable;
use Bitrix\Main\Loader;
use Bitrix\Main\UI\Extension;
use Bitrix\Main\UI\Viewer\ItemAttributes;

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

$this->setFrameMode(true);
Extension::load('ui.viewer');

$contextIgnore = 'шаблон';
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
            ];
        }
    }
}
?>
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
            )->setTitle($file['name']);?>

            <div class="NB1_docs_item_right d-flex flex-row justify-content-between">
                    <span class="Fa NB1_docs_item_right_look d-flex flex-row align-items-center"
                          <?= $attributes ?>style="cursor: pointer;">
                        смотреть
                    </span>
                <a href="<?= $file['download'] ?>" class="NB1_docs_item_right_download d-flex"
                   style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/img/download.svg');"></a>
            </div>
        </div>
        <?php
    endforeach; ?>
</div>
<h4 class="NB1_docs_items_empty" id="nodocuments">-----------документов нет----------- </h4>
