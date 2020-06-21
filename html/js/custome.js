jQuery(document).ready(function($) {
// hamburgers
var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) { hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
        }, false);
      });
    }
// hamburgers
//menu
var pull = jQuery('#pull');
menu = jQuery('#menu-bg');
menuHeight  = menu.height();
jQuery(pull).on('click', function(e) {
e.preventDefault();
menu.slideToggle(1000);
});
jQuery(window).resize(function(){
var w = $(window).width();
if(w > 320 && menu.is(':hidden')) {
menu.removeAttr('style');
}
});
//menu

//scroll top
jQuery(window).scroll(function() {

    if (jQuery(this).scrollTop() > 100) {
        jQuery(".scrollup").addClass("active");
    } else {
        jQuery(".scrollup").removeClass("active");
    }
});
jQuery(".scrollup").click(function() {
    jQuery("html, body").animate({
        scrollTop: 0
    }, 600);
    return false;
});

//scroll top



// Owl Slider

$('.banner-top').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: false,
    items: 1,
    nav: false,
    dots: false,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:false,
});

$('.portfolio-invest').owlCarousel({
    loop: true,
    margin: 0,
    responsiveClass: true,
    dots:false,
    nav: true,
    responsive: {
        0: {
            items: 1,
            nav: false,
            dots:true,
            
        },
        576: {
            items: 2,
            nav: true
        },
        992: {
            items: 4,
            nav: true,
            loop: false
        }
    }
});

$('.scoutpads-part').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        576: {
            items: 3,
            nav: false
        },
        992: {
            items: 5,
            nav: true,
            loop: false
        }
    }
});

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 3,
            nav: false
        },
        1000: {
            items: 5,
            nav: true,
            loop: false
        }
    }
});

//machheight
jQuery(".matchHeight").matchHeight(); 


});
