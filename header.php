<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html lang="ru">

<head>

    
    <?$APPLICATION -> ShowHead();?>
    <title><?$APPLICATION -> ShowTitle();?></title>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Open Graph Protocol Start -->
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="">
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:image" content="" />
    <!-- Open Graph Protocol End -->

    <!-- Reset Phone Style Start -->
    <meta name="format-detection" content="telephone=no">
    <!-- Reset Phone Style End -->

    <!-- Template Basic Images Start -->
    <link rel="icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <meta name="msapplication-navbutton-color" content="#000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <!-- Custom Browsers Color End -->

    <!-- Other Scripts, Bootstrap First -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap">

    <?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/bootstrap/css/bootstrap.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/font-awesome/css/font-awesome.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/plugins.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/microtip/microtip.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/magnific-popup/magnific-popup.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/main.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/media.css');
    ?>

</head>

<body>
    <div id="panel">
        <?$APPLICATION-> ShowPanel();?>
    </div>
    <div class="top-line">
        <div class="container-fluid">
            <div class="row">

            </div>
        </div>
    </div>

     <!-- HEADER START -->
     <header id="header" class="header">

        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-auto col-12">
                        <div class="region-select">
                            <p>Ваш регион: <a href="#">Красноярск</a></p>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <ul>
                            <li><a href="#">Доставка и оплата</a></li>
                            <li><a href="#">Акции</a></li>
                            <li><a href="#">Новости</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="fixed-header" id="fixed-header">

            <div class="header-middle d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4">
							<a href="/" class="logo">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-4">
                            <div class="header-phone">
								 <?$APPLICATION->IncludeFile(
								 SITE_DIR."include/phone.php",
								 array(),
								 array(
									"MODE"=>"html"
									)  
								 );?>
                                <a href="" class="orderphone">Заказать обратный звонок</a>
                            </div>
                        </div>

                        <div class="col-lg-4 d-lg-block d-xl-none">
                            <div class="header-right">
                                <ul>
                                    <li>
                                        <div class="header-shops">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/karta.svg"></img>
                                            <a href="#">Все магазины</a>
                                        </div>
                                    </li>
                                    <li><a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/lich-kab.svg"></a></li>
                                    <li><a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/korzina.svg"></a></li>
                                    <li><a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/izbrannoe.svg"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-4 ">
                            <div class="header-search">
                                <form action="#" method="get">
                                    <div class="header-search-wrapper">
                                        <input type="search" class="form-control" name="q" id="q" placeholder="Поиск"
                                            required="">
                                        <button class="btn" type="submit"><i class="fa fa-search"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-3 d-none d-xl-block">
                            <div class="header-right">
                                <ul>
                                    <li>
                                        <div class="header-shops">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/karta.svg"></object>
                                            <a href="#">Все магазины</a>
                                        </div>
                                    </li>
                                    <li><a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/lich-kab.svg"></a></li>
                                    <li><a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/korzina.svg"></a></li>
                                    <li><a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/izbrannoe.svg"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--MAIN MENU START -->
            <div class="nav-wrap main-menu">
                <div class="container">

                    <div class="menu-mobile-wrapper d-block d-lg-none">

						<a href="/">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/logo/logo.png" alt="">
                        </a>
                        <div class="mobile-icons">
                            <a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/izbrannoe.svg"></a>
                            <a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/korzina.svg"></a>
                        </div>
                    </div>

                    <nav class="menu" id="menu">
                        <ul>
                            <li class="d-block d-lg-none">
                                <div class="header-search">
                                    <form action="#" method="get">
                                        <div class="header-search-wrapper">
                                            <input type="search" class="form-control" name="q" id="q"
                                                placeholder="Поиск" required="">
                                            <button class="btn" type="submit"><i class="fa fa-search"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li><a href="#">Весна-лето 2020</a>
                                <ul>
                                    <li>
                                        <a href="#">Женская обувь</a>

                                        <a href="#">Весна-лето 2020</a>
                                        <ul>
                                            <li><a href="#">В наличии</a></li>
                                        </ul>

                                        <a href="#">Тип обуви</a>
                                        <ul>
                                            <li><a href="#">Кеды(1)</a></li>
                                            <li><a href="#">Кроссовки(14)</a></li>
                                            <li><a href="#">Полуботинки(2)</a></li>
                                            <li><a href="#">Балетки(33)</a></li>
                                            <li><a href="#">Туфли(1)</a></li>
                                            <li><a href="#">Босоножки(24)</a></li>
                                            <li><a href="#">Сандалии(2)</a></li>
                                            <li><a href="#">Сабо(13)</a></li>
                                            <li><a href="#">Шлепанцы(91)</a></li>
                                            <li><a href="#">Ботинки(210)</a></li>
                                            <li><a href="#">Ботильоны(335)</a></li>
                                            <li><a href="#">Полусапоги(310)</a></li>
                                            <li><a href="#">Сапоги(104)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Стиль</a>
                                        <ul>
                                            <li><a href="#">Классический(56)</a></li>
                                            <li><a href="#">Повседневный(143)</a></li>
                                            <li><a href="#">Спортивный(83)</a></li>
                                            <li><a href="#">Для активного отдыха(51)</a></li>
                                        </ul>
                                        <a href="#">Особые свойства</a>
                                        <ul>
                                            <li><a href="#">Обувь с Gore-Tex(70)</a></li>
                                            <li><a href="#">Обувь с Hydromax(22)</a></li>
                                        </ul>
                                        <a href="#">Товары со скидкой(346)</a>
                                        <a href="#" class="info-img"><img src="<?=SITE_TEMPLATE_PATH?>/images/b1.jpg" alt=""></a>
                                    </li>
                                    <li><a href="#">Категория</a>
                                        <ul>
                                            <li><a href="#">Подкатегория</a></li>
                                            <li><a href="#">Подкатегория</a></li>
                                            <li><a href="#">Подкатегория</a></li>
                                            <li><a href="#">Подкатегория</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Для женщин</a>
                                <ul>
                                    <li><a href="#">Категория</a></li>
                                    <li><a href="#">Категория</a></li>
                                    <li><a href="#">Категория</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Для мужчин</a>
                                <ul>
                                    <li><a href="#">Категория</a>
                                        <ul>
                                            <li><a href="#">Подкатегория</a></li>
                                            <li><a href="#">Подкатегория</a></li>
                                            <li><a href="#">Подкатегория</a></li>
                                            <li><a href="#">Подкатегория</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Категория</a>
                                        <ul>
                                            <li><a href="#">Подкатегория</a></li>
                                            <li><a href="#">Подкатегория</a></li>
                                            <li><a href="#">Подкатегория</a></li>
                                            <li><a href="#">Подкатегория</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Категория</a>
                                        <ul>
                                            <li><a href="#">Подкатегория</a></li>
                                            <li><a href="#">Подкатегория</a></li>
                                            <li><a href="#">Подкатегория</a></li>
                                            <li><a href="#">Подкатегория</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Дисконт</a>
                            <li class="bottom-part-menu d-block d-lg-none">
                                <p class="region-select">Ваш регион: <a href="#">Красноярск</a></p>
                                <a href="tel:" class="phone">+7 (931) 222-22-22</a>
                                <p class="autorization"><a href="#">Регистрация</a>/ <a href="#">Войти</a></p>
                                <a href="#">Доставка и оплата</a>
                                <a href="#">Обмен и возврат</a>
                                <a href="#">Бонусная программа</a>
                                <a href="#">Вопросы и ответы</a>
                                <a href="#">Контакты</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
            <!--MAIN MENU END -->
        </div>

    </header>
    <!-- HEADER END -->

    <div class="main-wrapper">

    <? if ($APPLICATION->GetCurPage(false) !== '/'): ?>
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<?$APPLICATION->IncludeComponent(
						"bitrix:breadcrumb",
						"",
						Array(
							"PATH" => "",
							"SITE_ID" => "s1",
							"START_FROM" => "0"
						)
					);?>
                </div>
            </div>
        </div>
    </div>
    <? endif; ?>

	<? if ($APPLICATION->GetCurPage(false) !== '/'): ?>
    <section class="inner-part">
            <div class="container">
	<? endif; ?>