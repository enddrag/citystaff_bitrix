<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

CJSCore::Init();
?>


<!--профиль-->
<?php
// Дробим ФИО пользователя
$fullName = $arResult['USER_NAME'];
$nameParts = explode(' ', $fullName);
$lastName = $nameParts[1];
$firstName = $nameParts[0];
$middleName = $nameParts[2];
global $USER;
$user = CUser::GetByID($USER->GetID())->Fetch();
$avatar = CFile::GetFileArray($user['PERSONAL_PHOTO']);
?>
<div class="d-flex align-items-center justify-content-end NB_avatar">
    <?php
    if ($arResult['USER_NAME']) : ?>
        <span class="NB1_avatar_name me-2 Fmenu"><?= $firstName . ' ' . mb_substr($lastName, 0, 1, 'UTF-8') . '.' ?></span>
        <img src="<?= $avatar ? $avatar['SRC'] : SITE_TEMPLATE_PATH . '/assets/img/avatar.jpg' ?>" alt="фото профиля"
             class="user-avatar NB_avatar_photo NB_rounded-circle">
    <?php else : ?>
        <?php
        header('location: ../bitrix');
        exit(); ?>
    <?php endif ?>

</div>
