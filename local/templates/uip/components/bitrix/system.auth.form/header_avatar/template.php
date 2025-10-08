<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Engine\CurrentUser;
use Bitrix\Main\UserTable;

/**
 * @var $arParams
 * @var $arResult
 */

$item = UserTable::getRow([
    'select' => [
        'ID',
        'NAME',
        'LAST_NAME',
        'PERSONAL_PHOTO',
    ],
    'filter' => [
        'ID' => CurrentUser::get()->getId(),
    ],
]);

$userName = $item['NAME'] . ' ' . ($item['LAST_NAME'] ? mb_substr($item['LAST_NAME'], 0, 1) . '.' : '');
$avatar = CFile::GetFileArray($item['PERSONAL_PHOTO']);
?>
<div class="d-flex align-items-center justify-content-end NB_avatar">
    <?php
    if ($arResult['USER_NAME']) : ?>
        <span class="<?= $arParams['PAGE'] == 'common' ? 'NB1_avatar_name' : 'text-white' ?> me-2 Fmenu">
            <?= $userName ?>
        </span>
        <img
            src="<?= $avatar ? $avatar['SRC'] : SITE_TEMPLATE_PATH . '/assets/img/avatar.jpg' ?>"
            alt="<?= $userName ?>>"
            class="user-avatar NB_avatar_photo NB_rounded-circle"
        />
    <?php endif ?>
</div>
