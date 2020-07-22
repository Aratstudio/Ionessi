<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 * 
 */

global $APPLICATION;



//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

$strReturn .= '<div class="bx-breadcrumb" itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);



for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');
	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
			$strReturn .= '
				<div class="bx-breadcrumb-item" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					'.$arrow.'
					<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">
						<span itemprop="name">'.$title.'</span>
					</a>
					<meta itemprop="position" content="'.($index + 1).'" />
				</div>';
	}
	else
	{
		$strReturn .= '
			<div class="bx-breadcrumb-item">
				'.$arrow.'
				<span>'.$title.'</span>
			</div>';
	}


}
 

$strReturn .= '<div style="clear:both"></div></div>';

return $strReturn;










// for($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++)
// {
//   if($index > 0) {
//     $strReturn .= '<li><span>&nbsp;&gt;&nbsp;</span></li>';
//     $cutLink=explode("/", $arResult[$index]["LINK"]);//разбиваем путь на SECTION_CODE
//     $cnt=count($cutLink);//считаем количество элементов массива
//     $numSecNow=$cnt-2;//номер текущего (чпу со "/" на конце, поэтому -2)
//     $secNow=$cutLink["$numSecNow"];//нужный нам SECTION_CODE
//   }
//   else $secNow="first";//не обязательно ваще
//   //тут код рабкод. 
//   $iblock_id = 1; //мы должны знать ID инфоблока каталога
//   $custom_name = 'UF_ALT_NAME'; //символьный код свойства для кастомного тайтла
//   if(CModule::IncludeModule("iblock")){
//     $dbSection = CIBlockSection::GetList(
//       array("SORT"=>"ASC"),//сортировка по возрастанию. нам все равно
//       array(
//         "IBLOCK_ID" => $iblock_id,//ищем наше свойство по ID инфоблока
//         "CODE" => $secNow//и по найденному SECTION_CODE
//         ),
//       false,//хз че
//       array($custom_name)//тут собсно то, что нам нужно достать
//     );
//     if ($arSection = $dbSection->GetNext()){
//       $new_name = $arSection["$custom_name"];
//     }
//   }
//   $title = htmlspecialcharsex($arResult[$index]["TITLE"]);//из стандартного шаблона
//   if ($new_name) {//если нашли, что нам нужно, присваиваем его
//     $name=$new_name;
//   }
//   else {//если нет - оставляем стандартный
//     $name=$title;
//   }
  
//   if($arResult[$index]["LINK"] <> ""&&$index<(count($arResult)-1))//уже попсовый костыль, чтоб последняя крошка была без ссылки
//     $strReturn .= '<li><span typeof="v:Breadcrumb"><a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" rel="v:url" property="v:title">'.$name.'</a><span></li>';
//   else
//     $strReturn .= '<li>'.$name.'</li>';
// }
// $strReturn .= "</ul> ";//$str
// return $strReturn;