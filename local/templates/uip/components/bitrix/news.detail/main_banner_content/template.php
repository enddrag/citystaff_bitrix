<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Disk\Driver;
use Bitrix\Disk\File;
use Bitrix\Disk\Internals\ObjectTable;
use Bitrix\Main\Loader;
use Bitrix\Main\UI\Extension;
use Bitrix\Main\UI\Viewer\ItemAttributes;

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

Extension::load('ui.viewer');

$title = '';
$paragraph = '';
$a_link = '';
$file_link = '';
$a_name = '';

foreach ($arResult['PROPERTIES'] as $property) {
    switch ($property['NAME']) {
        case 'title':
            $title = $property['VALUE'];
            break;
        case 'paragraph':
            $paragraph = $property['VALUE'];
            break;
        case 'a_link':
            if (
                Loader::includeModule('disk')
                && $storage = Driver::getInstance()->getStorageByCommonId('shared_files_s1')
            ) {
                $a_link = $property['VALUE'];
                $file = File::getModelList([
                    'filter' => [
                        'STORAGE_ID' => $storage->getId(),
                        '=TYPE' => ObjectTable::TYPE_FILE,
                        '=NAME' => $a_link,
                    ],
                    'limit' => 1,
                ]);

                $file = $file ? $file[0] : [];

                if ($file) {
                    $urlManager = Driver::getInstance()->getUrlManager();
                    $file_link = $urlManager->getUrlForDownloadFile($file);
                    $attributes = ItemAttributes::tryBuildByFileId(
                        $file->getId(),
                        $urlManager->getUrlForDownloadFile($file),
                    )->setTitle($file->getName());
                    $fileExtension = strtolower($file->getExtension());
                    $videoExtensions = ['mp4', 'avi', 'mov', 'wmv', 'flv', 'webm'];
                    $audioExtensions = ['mp3', 'wav', 'ogg'];
                    $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

                    if (in_array($fileExtension, $videoExtensions)) {
                        $attributes->setAttribute('data-viewer-type', 'video');
                    } elseif (in_array($fileExtension, $audioExtensions)) {
                        $attributes->setAttribute('data-viewer-type', 'audio');
                    } elseif (in_array($fileExtension, $imageExtensions)) {
                        $attributes->setAttribute('data-viewer-type', 'image');
                    } else {
                        $attributes->setAttribute('data-viewer-type', 'file');
                    }
                }
            }
            break;
        case 'a_name':
            $a_name = $property['VALUE'];
            break;
    }
}
?>
<div class="NB_corner-box widthBase">
    <?php if (!empty($attributes)) :?>
        <p class="NB_corner-a NB_rounded-30 d-flex align-items-center justify-content-center" <?=$attributes?> ><?= $a_name ?></p>
    <?php endif;?>
    <div class="NB_corner_content d-flex flex-column justify-content-end">
        <p class="NB_corner_p"><?= $paragraph ?></p>
        <h1 class="NB_corner_h"><?= $title ?></h1>
    </div>
</div>
<?php if ($file_link) { ?>
    <video autoplay loop muted playsinline class="NB_banner_preview">
        <source src="<?=$file_link?>" type="video/mp4">
    </video>
<?php } ?>
