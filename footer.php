<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>


<? if ($APPLICATION->GetCurPage(false) !== '/'): ?>

	</div>
</section>
<? endif; ?>

</div>

<!-- Footer Start -->
<footer class="footer">
    <div class="container grid">

        <div class="footer-widget">
            <h3>Помощь покупателю</h3>
            <?$APPLICATION->IncludeFile(
				 SITE_DIR."include/footer-help.php",
				 array(),
				 array(
					"MODE"=>"html"
					)  
			 );?>
        </div>

        <div class="footer-widget">
            <h3>Информация</h3>
            <?$APPLICATION->IncludeFile(
				 SITE_DIR."include/footer-information.php",
				 array(),
				 array(
					"MODE"=>"html"
					)  
			 );?>
        </div>

        <div class="footer-widget send-part">
            <h3>Подпишись на новости <br />и акции</h3>
            <div class="send-order">
                <form action="">
                    <input type="text" class="form-control" placeholder="Ваш e-mail*">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" checked="">
                        <label class="form-check-label" for="gridCheck">
                            Я соглашаюсь c <a href="#">обработкой</a> своих персональных данных
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-send">Подписаться</button>
                </form>
            </div>
        </div>

        <div class="footer-widget">
            <h3>О компании</h3>
            <?$APPLICATION->IncludeFile(
				 SITE_DIR."include/footer-about.php",
				 array(),
				 array(
					"MODE"=>"html"
					)  
			 );?>
        </div>

        <div class="footer-widget">
            <h3>Контактная информация</h3>
            <div class="contacts-info">
				 <?$APPLICATION->IncludeFile(
				 SITE_DIR."include/phone.php",
				 array(),
				 array(
					"MODE"=>"html"
					)  
				 );?>
				 <?$APPLICATION->IncludeFile(
				 SITE_DIR."include/email.php",
				 array(),
				 array(
					"MODE"=>"html"
					)  
				 );?>
            </div>
            <h3><a href="#">Все магазины</a></h3>
			<h3 class="social">Мы в соцсетях:</h3>
			 <?$APPLICATION->IncludeFile(
			 SITE_DIR."include/social.php",
			 array(),
			 array(
				"MODE"=>"html"
				)  
			 );?>
            <h3 class="cards-title">Принимаем к оплате</h3>
            <img src="<?=SITE_TEMPLATE_PATH?>/images/cards.jpg" alt="">
        </div>

    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; 2014-2020 АО «Ионесси»</p>
                    <p class="madeby">Разработка сайта: <a href="">Онлайн Медиа</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
<div id="back-to-top">
    <a href="#top"><i class="fa fa-angle-up"></i></a>
</div>
<!-- jQuery Scripts -->

<?
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/plugins.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/owlcarousel/owl.carousel.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/slick/slick.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/magnific-popup/jquery.magnific-popup.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/common.js');
//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vue.min.js');

?>

<!-- Yandex Maps for Shops List Start -->
<script src="http://api-maps.yandex.ru/2.1/?apikey=e7013d94-7e09-47d5-a582-4344d4364bc4&lang=ru_RU" type="text/javascript"></script>
<? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/map.js'); ?>
<!-- Yandex Maps for Shops List End -->

</body>

</html>