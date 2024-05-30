(function ($) {
    "use strict";

    // Preloader
    $(window).on('load', function () {
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({ 'overflow': 'visible' });
    });

    // Sticky Menu
    let header = $('.sticky-header');
    let win = $(window);

    win.on('scroll', function () {
        let scroll = win.scrollTop();
        if (scroll < 1) {
            header.removeClass("scroll-on");
        } else {
            header.addClass("scroll-on");
        }
    });

    // Home 2 Slider
    let homeslide2 = $(".home-slide-2");

    homeslide2.owlCarousel({
        items: 1,
        nav: false,
        loop: true,
        dots: false,
        smartSpeed: 450,
        autoplay: true,
        animateOut: 'fadeOut',
        navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-next'></i>"]
    });
    homeslide2.on("translate.owl.carousel", function (e) {
        $(".banner-title").removeClass("animated fadeInLeft").css("opacity", "0");
        $(".slide-txt p, .slide-txt span").removeClass("animated fadeInLeft").css("opacity", "0");
        $(".slide-txt .custom-btn").removeClass("animated fadeInDown").css("opacity", "0");
        $(".slide-img").removeClass("animated fadeInUp").css("opacity", "0");
        $(".slide-bg.sb-1").removeClass("animated fadeInLeft").css("opacity", "0");
        $(".slide-bg.sb-2").removeClass("animated fadeInRight").css("opacity", "0");
    });
    homeslide2.on("translated.owl.carousel", function (e) {
        $(".banner-title").addClass("animated fadeInLeft").css("opacity", "1");
        $(".slide-txt p, .slide-txt span").addClass("animated fadeInLeft").css("opacity", "1");
        $(".slide-txt .custom-btn").addClass("animated fadeInDown").css("opacity", "1");
        $(".slide-img").addClass("animated fadeInUp").css("opacity", "0");
        $(".slide-bg.sb-1").addClass("animated fadeInLeft").css("opacity", "1");
        $(".slide-bg.sb-2").addClass("animated fadeInRight").css("opacity", "1");
    });

    // Home 3 Slider 
    let homeSlider = $(".banner-slide");
    homeSlider.owlCarousel({
        items: 1,
        nav: true,
        loop: true,
        dots: false,
        autoplay: true,
        smartSpeed: 450,
        animateOut: 'fadeOut',
        navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-next'></i>"]
    });

    homeSlider.on("translate.owl.carousel", function (e) {
        $(".banner-title").removeClass("animated fadeInUp").css("opacity", "0");
        $(".slide-txt p,.slide-txt span").removeClass("animated fadeInLeft").css("opacity", "0");
        $(".slide-txt .custom-btn").removeClass("animated fadeInDown").css("opacity", "0");
        $(".slide-img").removeClass("animated fadeInUp").css("opacity", "0");
    });
    homeSlider.on("translated.owl.carousel", function (e) {
        $(".banner-title").addClass("animated fadeInUp").css("opacity", "1");
        $(".slide-txt p,.slide-txt span").addClass("animated fadeInLeft").css("opacity", "1");
        $(".slide-txt .custom-btn").addClass("animated fadeInDown").css("opacity", "1");
        $(".slide-img").addClass("animated fadeInUp").css("opacity", "0");
    });
    // Home 2 Slider
    let bannerSlide5 = $(".banner-slide-5");

    bannerSlide5.owlCarousel({
        items: 1,
        nav: false,
        loop: true,
        dots: true,
        smartSpeed: 450,
        autoplay: true,
        navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-next'></i>"]
    });
    // Brands Carousel
    let brands = $(".trusted-brands");
    brands.owlCarousel({
        margin: 10,
        responsiveClass: true,
        nav: false,
        dots: false,
        loop: true,
        slideTransition: 'linear',
        autoplayTimeout: 4500,
        autoplayHoverPause: true,
        autoplaySpeed: 4500,
        autoplay: true,
        stagePadding: 10,
        responsive: {
            0: {
                items: 1,
                nav: true,
                navText: ["<i class='flaticon-previous'></i>", "<i class='flaticon-next-1'></i>"],
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4,
            }
        },
    });

    // Team Carousel
    let team = $('.team-wrap');
    team.owlCarousel({
        nav: false,
        dots: false,
        loop: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            }
        }

    });
    $('.card1').click(function () {
        $(this).toggleClass('flip');
    });


    // Quote Carousel
    let quote = $('.quote-slider');
    quote.owlCarousel({
        nav: false,
        dots: true,
        loop: true,
        autoplay: true,
        center: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 3,
            }
        }

    });
    let quote5 = $(".testimonial-5-carousel");


    quote5.on('initialized.owl.carousel changed.owl.carousel', function (e) {
        if (!e.namespace) {
            return;
        }
        var carousel = e.relatedTarget;
        $('.slider-counter span').text(carousel.relative(carousel.current()) + 1 + ' / ' + '0' + carousel.items().length);
    }).owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        autoplay: true,
        dots: true,
        // dotsData: true,
        dotsContainer: "#testimonials-avatar",
        nav: false,
    });



    // Quote 2 Slider
    let quote2 = $(".quote-slider2");

    quote2.owlCarousel({
        items: 2,
        nav: true,
        navText: ["<i class='flaticon-next-1'></i>", "<i class='flaticon-previous'></i>"],
        loop: true,
        margin: 40,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            800: {
                items: 2,
            },
            1000: {
                items: 2,
            }
        }
    });

    // WOW Js
    function wowAnimation() {
        new WOW({
            offset: 100,
            animateClass: 'animated',
            mobile: true
        }).init()
    }
    wowAnimation();

    //Counter  Init
    $('.counter').counterUp({
        delay: 10,
        time: 1000,
    });

    //Venobox Light box
    $('.video').venobox({
        share: ['facebook', 'twitter', 'download']
    });
    //Venobox Light box
    $('.service-video').venobox({
        share: ['facebook', 'twitter', 'download']
    });

    //FAQ Popup
    $('.faq-popup').venobox();

    //Venobox Light box
    $('.bn-video').venobox({
        share: ['facebook', 'twitter', 'download']
    });

    // Portfolio Isotope 
    let $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
    });

    $('.portfolio-menu').on('click', '.button', function () {
        let filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });

    // change active class on buttons
    $('.portfolio-menu').each(function (i, buttonGroup) {
        let $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function () {
            $buttonGroup.find('.active').removeClass('active');
            $(this).addClass('active');
        });
    });

    // Portfolio 2 Massionary
    let $massonaryGrid = $('.masson-grid').isotope({
        itemSelector: '.item',
        percentPosition: true,
        masonry: {
            // use outer width of grid-sizer for columnWidth
            columnWidth: '.grid-sizer'
        }
    });

    $('.portfolio-menu.massionary-menu').on('click', '.button', function () {
        let filterValue = $(this).attr('data-filter');
        $massonaryGrid.isotope({ filter: filterValue });
    });

    // Scrollup Init
    $.scrollUp({
        scrollName: 'scrollUp', // Element ID
        topSpeed: 300, // Speed back to top (ms)
        animation: 'fade', // Fade, slide, none
        animationInSpeed: 200, // Animation in speed (ms)
        animationOutSpeed: 200, // Animation out speed (ms)
        scrollText: '', // Text for element <i class="flaticon-up-arrow">
    });

    // Product Quantity JS
    var productQty = $(".pro-qty");
    productQty.append('<div class="inc qty-btn">+</div>');
    productQty.append('<div class= "dec qty-btn">-</div>');
    $('.qty-btn').on('click', function (e) {
        e.preventDefault();
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find('input').val(newVal);
    });

    // Slider Range

    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 500,
        values: [25, 500],
        slide: function (event, ui) {
            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " - $" + $("#slider-range").slider("values", 1));

    /* Different Address Form */
    $('#billform-dirrentswitch').on('change', function () {
        if ($(this).is(':checked')) {
            $('.checkout-differentform').slideDown();
        } else {
            $('.checkout-differentform').slideUp();
        }
    });

    /* Checkout Payment Method */

    $('.checkout-payment input[type="radio"]').each(function () {
        if ($(this).is(':checked')) {
            $(this).siblings('.pay-option-content').slideDown();
        }
        $(this).siblings('label').on('click', function () {
            $('.checkout-payment input[type="radio"]').prop('checked', false).siblings('.pay-option-content').slideUp();
            $(this).prop('checked', true).siblings('.pay-option-content').slideDown();
        });
    });

    // mailchimp subscription
    let mailchimp = $(".mailchimp-sform");
    if (mailchimp.length > 0) {
        /*  MAILCHIMP  */
        mailchimp.ajaxChimp({
            language: 'es',
            callback: mailchimpCallback,
            url: "https://facebook.us17.list-manage.com/subscribe/post?u=e8c07b57e07350179b0d6325b&amp;id=437442d4eb" //Replace this with your own mailchimp post URL.
        });
    }

    function mailchimpCallback(resp) {
        if (resp.result === 'success') {
            $('.subscription-success').html('<i class="fa fa-check"></i><br/>' + resp.msg).fadeIn(1500);
            $('.subscription-error').fadeOut(500);

        } else if (resp.result === 'error') {
            $('.subscription-error').html('<i class="fa fa-times"></i><br/>' + resp.msg).fadeIn(1500);
        }
    }
    $.ajaxChimp.translations.es = {
        'submit': 'Submitting...',
        0: 'We have sent you a confirmation email',
        1: 'Please enter a value',
        2: 'An email address must contain a single @',
        3: 'The domain portion of the email address is invalid (the portion after the @: )',
        4: 'The username portion of the email address is invalid (the portion before the @: )',
        5: 'This email address looks fake or invalid. Please enter a real email address'
    };


})(jQuery);
