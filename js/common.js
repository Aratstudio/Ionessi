$(function() {
    "use strict";
    // Custom JS
    
    var h = document.getElementById("fixed-header");
    var readout = document.getElementsByClassName("main-wrapper");
    var stuck = false;
    var stickPoint = getDistance();
    
    function getDistance() {
      var topDist = h.offsetTop;
      return topDist;
    }
    
    window.onscroll = function(e) {
      var distance = getDistance() - window.pageYOffset;
      var offset = window.pageYOffset;
      readout.innerHTML = stickPoint + '   ' + distance + '   ' + offset + '   ' + stuck;
      
      if ( (distance <= 0) && !stuck) {
        h.classList.toggle("header-fixed");
        stuck = true;
      }
      
      else if (stuck && (offset <= stickPoint)){
        h.classList.toggle("header-fixed");
        stuck = false;
      }
      
    }


});



/* Selectors
-------------------------------------------------------*/

$('.color-selector ul li').on('click', function(e) {
    $(".color-selector ul li").removeClass("active");
    $(this).addClass("active");
});

$('.size-selector ul li').on('click', function(e) {
    $(".size-selector ul li").removeClass("active");
    $(this).addClass("active");
});


/* Quantity Counters
-------------------------------------------------------*/

$('.qty-box .quantity-right-plus').on('click', function () {
var $qty = $('.qty-box .input-number');
var currentVal = parseInt($qty.val(), 10);
if (!isNaN(currentVal)) {
    $qty.val(currentVal + 1);
}
});

$('.qty-box .quantity-left-minus').on('click', function () {
var $qty = $('.qty-box .input-number');
var currentVal = parseInt($qty.val(), 10);
if (!isNaN(currentVal) && currentVal > 1) {
    $qty.val(currentVal - 1);
}
});


/* Scroll to Top
-------------------------------------------------------*/

(function() {
    "use strict";

    var docElem = document.documentElement,
        didScroll = false,
        changeHeaderOn = 550;
        document.querySelector( '#back-to-top' );
    function init() {
        window.addEventListener( 'scroll', function() {
            if( !didScroll ) {
                didScroll = true;
                setTimeout( scrollPage, 50 );
            }
        }, false );
    }
    
})();

$(window).scroll(function(event){
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
        $("#back-to-top").addClass("show");
    } else {
        $("#back-to-top").removeClass("show");
    }
});

$('a[href="#top"]').on('click',function(){
    $('html, body').animate({scrollTop: 0}, 'slow');
    return false;
});


/* SLIDERS
-------------------------------------------------------*/

$('.owl-products').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    stagePadding: 5,
    responsive: {
        0: {
            items: 2,
            margin: 5,
            nav: false,
            dots: true
        },
        1000: {
            items: 3
        },
        1200: {
            items: 5
        },
        1300: {
            items: 5
        }
    }
})

$('.owl-reviews').owlCarousel({
    loop: true,
    margin: 50,
    nav: true,
    dots: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        1000: {
            items: 2
        },
        1100: {
            items: 3
        },
        1300: {
            items: 4
        }
    }
})

$('.top-slider .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    margin: 0,
    nav: true,
    lazyLoad: true,
    navContainer: '.top-slider .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

$('.slider-main').slick({
    slidesToShow: 1,
    infinite: false,
    arrows: false,
    asNavFor: '.slider-nav',
    vertical: false,
    autoplay: false,
    verticalSwiping: false,
    fade: true,
    centerMode: false,
    responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            horizontalSwiping: true,
            fade: false,
            dots: true,
            infinite: true
          }
        }

      ]
});


$('.slider-nav').slick({
    slidesToShow: 4,
    asNavFor: '.slider-main',
    vertical: true,
    focusOnSelect: true,
    autoplay: false,
    infinite: false
});


/* READMORE
-------------------------------------------------------*/

$(function () {
    $('#readmore').readmore({
        moreLink: '<a href="#" class="readmorelink">читать далее</a>',
        lessLink: '<a href="#" class="readmorelink">свернуть</a>',
        collapsedHeight: 100,
        speed: 200,
        afterToggle: function (trigger, element, expanded) {
            if (!expanded) { 
                $('html, body').animate({ scrollTop: $(element).offset().top }, { duration: 100 });
            }
        }
    });
});



/* ZOOMSL
-------------------------------------------------------*/
/*
jQuery(function(){
        
    $(".zoomsl").imagezoomsl({
       innerzoom: true,
       disablewheel: true,
       zindex: 1,
       switchsides:false,
       loopspeedanimate: 3,
       scrollspeedanimate:1.2,
       magnifiereffectanimate: "fadeIn",
       magnifierborder: "1px solid #2b2e36"		 
    });
 });  
*/

 /* MEGA MENU
-------------------------------------------------------*/