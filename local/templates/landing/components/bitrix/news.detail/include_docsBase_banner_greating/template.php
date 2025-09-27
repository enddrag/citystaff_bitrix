<?php

use Bitrix\Intranet\CurrentUser;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
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
$currentUser = CurrentUser::get();
$firstName = $currentUser->GetFirstName();
if ($arResult['DETAIL_TEXT'] <> '') : ?>
    <h3 class="NB1_banner_left_item d-flex flex-column align-items-start justify-content-center">
        <?=$arResult['DETAIL_TEXT'];?>
        <mark><?=$firstName?>!</mark>
    </h3>
<?php endif; ?>