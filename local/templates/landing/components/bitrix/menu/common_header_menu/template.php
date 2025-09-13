<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<?php if (!empty($arResult)):?>
<!--пункты навигации-->
<ul class="NB_navbar navbar-nav mx-auto d-flex align-items-center justify-content-between">
<?php
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
    <?php if($arItem["SELECTED"]):?>
     <li class="nav-item NB1_nav_item d-flex align-items-center justify-content-center">

        <a href="<?=$arItem["LINK"]?>" class="NB1_nav_item_active Fmenu d-flex flex-row align-items-center justify-content-center text-center">
            <?=$arItem["TEXT"]?>
        </a>
    </li>
    <?php else:?>
    <li class="nav-item NB1_nav_item d-flex align-items-center justify-content-center">
        <a href="<?=$arItem["LINK"]?>" class="Fmenu d-flex flex-row align-items-center justify-content-center text-center">
            <?=$arItem["TEXT"]?>
        </a>
    </li>
    <?php endif?>

    <?php endforeach?>

</ul>



<?php endif?>