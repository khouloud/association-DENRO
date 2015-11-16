//fonction eb jquerry qui permet de scroller vers le lien qui commence par un #

$(document).ready(function(){
    $('a[href^="#"]').on('click',function (elem) {
        elem.preventDefault();

        var lien = this.hash;
        var $lien = $(lien);
        $('a[href^="#"]').css("border","none");
        $(this).css("border-bottom","1px solid #f0525b");

        $('html, body').stop().animate({
            'scrollTop': $lien.offset().top
        }, 900, 'swing', function () {

            window.location.hash = lien;

        });
    });
});



//	Animated header


$(function(){
    var shrinkHeader = 150;
    $(window).scroll(function() {
        var scroll = getCurrentScroll();
        if ( scroll >= shrinkHeader ) {
            $('.nav-nav').addClass('shrink');
            $('#logo img').first().attr("src",'images/logo.png');
        }
        else {
            $('.nav-nav').removeClass('shrink');
            $('#logo img').first().attr("src",'images/logo.png');

        }
    });
    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }
});


//fonction de jquery permettant de scroller vers le haut

$(window).scroll(function () {
    if ($(this)
            .scrollTop() > 100) {
        $('.scrollToTop')
            .fadeIn();

    } else {
        $('.scrollToTop')
            .fadeOut();

    }
});

$('.scrollToTop').click(function () {
    $('html, body').animate({
        scrollTop: 0
    }, 1000);
    return false;
});
//////////////////////slideshow////////////
//(function($){
    //setInterval(function(){
      //  $(".slideshow ul li:first-child").animate({"margin-left": -1200}, 1000, function(){
        //    $(this).css("margin-left",0).appendTo(".slideshow ul");
        //});
    //}, 3500);
//})(jQuery);

jQuery(function($) {

    // settings
    var $slider = $('.slider'); // class or id of carousel slider
    var $slide = 'li'; // could also use 'img' if you're not using a ul
    var $transition_time = 1000; // 1 second
    var $time_between_slides = 4000; // 4 seconds

    function slides(){
        return $slider.find($slide);
    }

    slides().fadeOut();

    // set active classes
    slides().first().addClass('active');
    slides().first().fadeIn($transition_time);

    // auto scroll
    $interval = setInterval(
        function(){
            var $i = $slider.find($slide + '.active').index();

            slides().eq($i).removeClass('active');
            slides().eq($i).fadeOut($transition_time);

            if (slides().length == $i + 1) $i = -1; // loop to start

            slides().eq($i + 1).fadeIn($transition_time);
            slides().eq($i + 1).addClass('active');
        }
        , $transition_time +  $time_between_slides
    );

});

//////////////////////////pop up ///////////////////////////
