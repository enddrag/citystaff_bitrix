<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

use Bitrix\Disk\Internals\ObjectTable;
use Bitrix\Main\Loader;
use Bitrix\Disk\Driver;
use Bitrix\Disk\Folder;
use Bitrix\Disk\Storage;
use Bitrix\Main\UI\Viewer\ItemAttributes;

//идентификатор диска
$storageId = 0;
if($arResult["FILE"] <> ''){
	ob_start();
	include($arResult["FILE"]);
	$storageId = strip_tags((int) trim(ob_get_clean()));
	if(empty($storageId))$storageId = 3;
}

//игнорируемое слово
$strignore = "анкета";


    $fileList = [];

    if (Loader::includeModule('disk')) {
        // Загружаем расширение для просмотрщика
        \Bitrix\Main\UI\Extension::load("ui.viewer");
        //для понимания буду комментировать
        //запрашиваем список всех папок из корня
        $storage = Storage::loadById($storageId);
        $securityContext = $storage->getCurrentUserSecurityContext();
        $urlManager = Driver::getInstance()->getUrlManager();
        //$urlManager уже готов
        $folderList = ObjectTable::getList([
            'filter' => [
                'STORAGE_ID' => $storageId,
            ]
        ]);
        //проходимся по всему списку
        while ($folderItem = $folderList->fetch()) {
            //загружаем директорию
            $item = Folder::loadById($folderItem['ID']);
            if(!$item) continue;
            //получаем все документы из директории
            $ChildrenList = $item->getChildren($securityContext, [
                'filter' => [
                    'TYPE' => ObjectTable::TYPE_FILE,
                ]
            ]);
            foreach($ChildrenList as $Child) {
                $filename = $Child->getName();
                //получаем расширения файлов
                $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                //массив дозволенных расширений
                $allowedExtensions = ['doc', 'docx', 'dot', 'dotx', 'docm', 'dotm', 'xls', 'xlsx', 'xlsm', 'xlt', 'xltx', 'xltm', 'xlsb', 'xlw', 'ppt', 'pptx', 'pptm', 'pps', 'ppsx', 'ppsm', 'pot', 'potx', 'potm', 'pdf'];
                //игнорируем неподходящие файлы
                if(!in_array($extension, $allowedExtensions)) continue;
                //игнорируем все шаблоны
                if(str_contains(mb_strtolower($filename), mb_strtolower($strignore)))continue;

                //вырезаем постфикс для отображения
                $filename = basename($filename, "." . $extension);
                $fileList[] = [
                    'id'=>$Child->getId(),
                    'name' => $filename,
                    'show' => $urlManager->getUrlForShowFile($Child),
                    'download' => $urlManager->getUrlForDownloadFile($Child),
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
        foreach($fileList as $file):?>
            <div class="NB1_docs_item NB1_docs_item_size flex-row justify-content-between align-items-center" style="display: flex;">
                <p class="Fa">
                    <?=$file['name']?>
                </p>
                <?php
                // Генерируем атрибуты для просмотрщика
                $attributes = ItemAttributes::tryBuildByFileId(
                    $file['id'],
                    $file['download']
                )->setTitle($file['name']);
                ?>

                <div class="NB1_docs_item_right d-flex flex-row justify-content-between">
                    <span class="Fa NB1_docs_item_right_look d-flex flex-row align-items-center" <?= $attributes ?>style="cursor: pointer;">
                        смотреть
                    </span>
                    <a href="<?=$file['download']?>" class="NB1_docs_item_right_download d-flex" style="background-image: url('/upload/medialibrary/28a/polug4h6bqgq5qm33m8m9kpv5tg5nchz/download.svg');"></a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <h4 class="NB1_docs_items_empty" id="nodocuments">-----------документов нет----------- </h4>
