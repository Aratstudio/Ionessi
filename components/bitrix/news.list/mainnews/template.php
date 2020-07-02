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
<section class="main-actions">
    <div class="container">
        <div class="row">
            <?if($arParams["DISPLAY_TOP_PAGER"]):?>
            <?= $arResult["NAV_STRING"] ?><br />
            <?endif;?>
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div class="action-item">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?echo $arItem[" NAME"]?>">
                        </a>
                        <div class="action-content">
                            <h2>
                                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                                    <?
                                        $str = $arItem["NAME"];
                                        echo TruncateText($str, 90);
                                    ?>
                                </a>
                            </h2>
                            <p>
                                <?
                                    $str = $arItem["PREVIEW_TEXT"];
                                    echo TruncateText($str, 130);
                                ?>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</section>