/**
 * Created by Darwin Morocho on 21/06/2017.
 */
$(function () {


    $("#toTop").click(function () {
        //1 second of animation time
        //html works for FFX but not Chrome
        //body works for Chrome but not FFX
        //This strange selector seems to work universally
        $("html, body").animate({scrollTop: 0}, 400);
    });


    var scrollTop = 0;
    $(window).scroll(function () {
        scrollTop = $(window).scrollTop();
        var width = $(window).width();


        if (scrollTop >= 100) {
            $("#toTop").fadeIn('slow');
        } else {
            $("#toTop").fadeOut('slow');
        }

        if (scrollTop >= 50) {
            $('#navigation').addClass('smaller');
            $('#logo').addClass('smaller');
            $('#header').addClass('smaller');
        } else {
            $('#navigation').removeClass('smaller');
            $('#logo').removeClass('smaller');
            $('#header').removeClass('smaller');
        }

    });


    $('.scroll-to').on('click', function (event) {

        var target = $(this.getAttribute('href'));

        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 100
            }, 1000);
        }

    });


    $("#agenda").slick({
        dots: true,
        infinite: true,
        autoplay: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.nav-toggle').click(function (e) {
        $('#main-nav').toggleClass('open');
    });


    new WOW().init();


});