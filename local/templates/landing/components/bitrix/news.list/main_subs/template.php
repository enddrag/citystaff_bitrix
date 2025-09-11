<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

$link = '';
$link_text = '';
$url = 'asd';
$subs = '';
$httpClient = new \Bitrix\Main\Web\HttpClient([
        'socketTimeout' => 10,
        'streamTimeout' => 30,
        'version' => \Bitrix\Main\Web\HttpClient::HTTP_1_1,
]);

?>

<div class="NB_content_cards d-flex flex-row flex-wrap">
    <?php foreach($arResult["ITEMS"] as $arItem):?>
	<?php
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
        <?php foreach($arItem["PROPERTIES"] as $arProperty){
            if($arProperty['NAME'] == 'link')
                $link =$arProperty['VALUE'];
            else if($arProperty['NAME'] == 'link_text'){
                $link_text = $arProperty['VALUE'];
            }
            else if($arProperty['NAME'] == 'link_api'){
                $url = $arProperty['VALUE'];
                $response = $httpClient->get($url);
                $status = $httpClient->getStatus();
                if($status == 200){
                    // Декодируем JSON-ответ
                    $response = \Bitrix\Main\Web\Json::decode($response);

                    if($response['result'])$subs = $response['result'];
                    else if($response['response']['0']['members_count']) $subs = $response['response']['0']['members_count'];
                }
                if($subs != '') {
                    if ($subs % 10 === 1 && $subs % 100 !== 11) $subs = $subs.' подписчик';
                    else if (($subs % 10 >= 2 && $subs % 10 <= 4) && ($subs % 100 < 10 || $subs % 100 >= 20))$subs = $subs.' подписчика';
                    else $subs = $subs.' подписчиков';
                }
            }
        }?>
    <div class="NB_content_card_item d-flex flex-column justify-content-between" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
        <div class="NB_content_card_item_banner">
                <?php if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                    <div class="NB_content_card_item_banner_img NB_rounded-30">
                        <img
                                src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                        />
                    </div>
                <?php endif?>
                <?php if(is_array($arItem['FIELDS']["DETAIL_PICTURE"])):?>
                <div class="NB_content_card_item_banner_logo NB_backdrop-blur NB_rounded-circle d-flex flex-row align-items-center justify-content-center">
                    <img src="<?=$arItem['FIELDS']["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arItem['FIELDS']["DETAIL_PICTURE"]['ALT']?>">
                </div>
                <?php endif?>
        </div>
        <p class="Fbody NB_content_card_item_p">
            <?php if(!empty($arItem["PREVIEW_TEXT"])):?>
                <?=$arItem["PREVIEW_TEXT"]?>
            <?php endif?>
        </p>
        <p class="Fbody NB_content_card_item_sub"><?=$subs?></p>
        <div class="NB_content_card_item_subscribe NB_rounded-30 NB_subscribe_<?=$arItem['CODE']?> d-flex flex-row align-items-center justify-content-center">
            <img src="<?php if(is_array($arItem['FIELDS']["DETAIL_PICTURE"])):?><?=$arItem['FIELDS']["DETAIL_PICTURE"]["SRC"]?><?php endif?>" alt="" class="NB_content_card_item_subscribe_img">
            <a href="<?=$link?>" class="Fmenu text-white"><?=$link_text?></a>
        </div>
    </div>
    <?php endforeach;?>
</div>
