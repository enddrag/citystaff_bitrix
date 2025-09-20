<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$id= '';
$name = '';

foreach($arResult['PROPERTIES'] as $arProp){
    if($arProp['NAME']=='link_name')$name = $arProp['VALUE'];
    else if($arProp['NAME']=='link_href')$id = $arProp['VALUE'];
}
?>
<div class="NB2_bonusInfo_left_item d-flex flex-row justify-content-between">
    <div class="NB2_bonusInfo_left_item_black NB_rounded-20 d-flex flex-row align-items-center">
        <div class="NB2_bonusInfo_left_item_black_item d-flex flex-column justify-content-center">
            <?if((!isset($arParams["DISPLAY_PREVIEW_TEXT"]) || $arParams["DISPLAY_PREVIEW_TEXT"]!="N") && $arResult["PREVIEW_TEXT"]):?>
    <h4><?=$arResult["PREVIEW_TEXT"]?></h4>
<?endif;?>
            <?if($arResult["DETAIL_TEXT"] <> ''):?>
                <p class="Fbody"><?=$arResult["DETAIL_TEXT"];?></p>
            <?endif?>
            <p class="Fmenu NB2_gradient_button d-flex flex-row align-items-center justify-content-center" data-modal="<?=$id?>">
                <?=$name?>
            </p>
        </div>
        <?if((!isset($arParams["DISPLAY_PICTURE"]) || $arParams["DISPLAY_PICTURE"]!="N") && is_array($arResult["DETAIL_PICTURE"])):?>
            <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>" class="NB2_bonusInfo_left_item_black_img d-flex flex-row align-items-center justify-content-center">
        <?endif?>
    </div>
</div>
<?php
    $showClass = '';
    $showMonkey = 'display: none;';
    $showRequest = 'display: flex;';
    if(isset($_GET['ref_sent'])) {
        if (strip_tags($_GET['ref_sent']) == "success") {
            $showClass = "NB_active";
            $showRequest = 'display: none;';
            $showMonkey = 'display: flex;';
        }
        else if (strip_tags($_GET['ref_sent']) == "fail") {
            $showClass = "NB_active";
        }
    }
?>
		<!--модальное окно-->
    <section class="NB_modal d-flex flex-row align-items-center justify-content-center <?=$showClass?>" id="<?=$id?>">
        <div class="NB_modal_item d-flex flex-column align-items-center">
            <img alt="X" src="<?=SITE_TEMPLATE_PATH?>/assets/img/X.svg" class="NB_modal_item_X close_modal">
            <div class="NB_modal_item_item flex-column align-items-center" id="survey" style="<?=$showRequest?>">
                <h4>Заполните имя и контакт друга, чтобы мы могли учесть заявку</h4>
                <script data-b24-form="inline/25/5wmkc3" data-skip-moving="true">(function(w,d,u){var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})(window,document,'https://stage.citystaff.asgardd.tech/upload/crm/form/loader_25_5wmkc3.js');</script>
                <p class="Fa NB_modal_item_footer">Нажимая на кнопку «Отправить», вы даёте согласие на обработку персональных данных.</p>
            </div>
            <div class="NB_modal_item_item flex-column align-items-center" id="happyMonkey" style="<?=$showMonkey?>">
                <h4>Заявка принята!</h4>
                <p class="Fbody NB_modal_item_p">Мы начислим 5 000 ₽ после выхода вашего друга на работу</p>
                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/monkey.png" alt="" class="NB_modal_monkey">
            </div>
        </div>
    </section>