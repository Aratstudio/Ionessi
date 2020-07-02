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
?>

<div class="top-slider">
    <div class="owl-carousel owl-theme">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<a href="<?php if(is_array($arItem["DISPLAY_PROPERTIES"]['SLIDER_LINK'])) echo $arItem['DISPLAY_PROPERTIES']['SLIDER_LINK']['VALUE']; else echo ''; ?>">
            	<img src="<?= $arItem['DETAIL_PICTURE']['SRC'] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" class="d-none d-md-block">
            	<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" class="d-block d-md-none">
			</a>
        </div>
        <?endforeach;?>
    </div>
    <div class="owl-theme">
        <div class="owl-controls">
            <div class="custom-nav owl-nav"></div>
        </div>
    </div>
</div>
