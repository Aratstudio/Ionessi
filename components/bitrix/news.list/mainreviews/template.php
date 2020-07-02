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
<section class="reviews-section">
    <div class="container">
        <div class="section-title">
            <h2>Отзывы покупателей</h2>
        </div>
    </div>
    <div class="container">
        <div class="gallery-wrapper">
            <div class="owl-carousel owl-reviews owl-theme gallery content-section">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="reviews-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div class="rating">
                        <?php
                        $starFilled = '<i class="fa fa-star" aria-hidden="true"></i> ';
                        $starEmpty = '<i class="fa fa-star-o" aria-hidden="true"></i> ';
                        switch ($arItem['DISPLAY_PROPERTIES']['REVIEW_RATING']['VALUE']) {
                            case 1:
                                echo str_repeat($starFilled, 1), str_repeat($starEmpty, 4);
                                break;
                            case 2:
                                echo str_repeat($starFilled, 2), str_repeat($starEmpty, 3);
                                break;
                            case 3:
                                echo str_repeat($starFilled, 3), str_repeat($starEmpty, 2);
                                break;
                            case 4:
                                echo str_repeat($starFilled, 4), str_repeat($starEmpty, 1);
                                break;
                            default:
                                echo str_repeat($starFilled, 5), str_repeat($starEmpty, 0);
                                break;
                        }
                        ?>
                    </div>
                    <a href="<?echo $arItem['DISPLAY_PROPERTIES']['PRODUCT_ANKHOR']['VALUE'] ?>" class="reviews-title">
                        <h3>
                            <?echo $arItem["NAME"]?>
                        </h3>
                    </a>
                    <p class="reviews-description">
                        <?echo $arItem["PREVIEW_TEXT"];?>
                    </p>
                    <p class="reviews-autor">
                        <?echo $arItem['DISPLAY_PROPERTIES']['REVIEW_AUTHOR']['VALUE'] ?>
                    </p>
                </div>
                <?endforeach;?>
            </div>
        </div>
    </div>
</section>