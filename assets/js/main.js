/*------------------------------------------------
Trydo Html5 Creative Ahency Template
All Main Js Here  

Index All JS 
-----------------------
        01. Wow Active
        02. Counter Up
        03. Feature Icon Activation
        04. Youtub Popup 
        05. Slick Activation            
        06. Paralax Window
        07. LightBox
        08. Parallax Activation
        09. Masonry Activation
        10. ScrollUp Activation
        11. Mobile Menu Activation
        12. Smoth Scroll
--------------------------------------------------*/

// const { init } = require("aos");


(function ($) {
    'use strict';

    // MEGADRONE

        // $(".drone-title").hover(function() {
        //   $("#frame").toggleClass("down-150");
        //   $("#esc").toggleClass("down-100");
        //   $("#bot-spacer").toggleClass("down-100");
        //   $("#motor").toggleClass("down-50");
        //   $("#fc").toggleClass("down-50");
      
        //   $("#nut").toggleClass("up-200");
        //   $("#prop").toggleClass("up-100");
        //   $("#top-spacer").toggleClass("up-75");
        //   $("#xt60").toggleClass("up-50");
        //   $("#wire").toggleClass("up-50");
        //   $("#fpv").toggleClass("up-100");
        //   $("#gopro").toggleClass("up-150");
        //   $("#vtx").toggleClass("up-100");
        // });

        var timeLine = $('.video-page .time-line');
        var initScroll = false;

        if (timeLine) {
            timeLine.scroll(function () {
                // $('body').scrollTo('#time-line');
                document.getElementById("time-line").scrollIntoView({ behavior: 'smooth', block: 'center' });

                

            });
        }


         var position = $(window).scrollTop(); 

         $(window).scroll(function() {
            var scroll = $(window).scrollTop();
    
            if(scroll > position) {
                $("#frame").addClass("down-150");
                $("#esc").addClass("down-100");
                $("#bot-spacer").addClass("down-100");
                $("#motor").addClass("down-50");
                $("#fc").addClass("down-50");

                $("#nut").addClass("up-200");
                $("#prop").addClass("up-100");
                $("#top-spacer").addClass("up-75");
                $("#xt60").addClass("up-50");
                $("#wire").addClass("up-50");
                $("#fpv").addClass("up-100");
                $("#gopro").addClass("up-150");
                $("#vtx").addClass("up-100");
            } else {
                $("#frame").removeClass("down-150");
                $("#esc").removeClass("down-100");
                $("#bot-spacer").removeClass("down-100");
                $("#motor").removeClass("down-50");
                $("#fc").removeClass("down-50");

                $("#nut").removeClass("up-200");
                $("#prop").removeClass("up-100");
                $("#top-spacer").removeClass("up-75");
                $("#xt60").removeClass("up-50");
                $("#wire").removeClass("up-50");
                $("#fpv").removeClass("up-100");
                $("#gopro").removeClass("up-150");
                $("#vtx").removeClass("up-100");
            }
            position = scroll;
        });


    /*-------------------- 
        00. header animation 
    --------------------*/

    var position = $(window).scrollTop(); 

    if (position !== 0) {
        $('header').addClass('not-top');
    }

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll == 0) {
            $('header').removeClass('not-top');
        }

        if (scroll !== 0) {
            $('header').addClass('not-top');
        }

        if(scroll > position && position > 800) {
            $('header').addClass('hide-scroll');

        } else {
            $('header').removeClass('hide-scroll');
        }
        position = scroll;
    });

    /*-------------------- 
        01. Wow Active 
    --------------------*/

    new WOW().init();


    /*-----------------------
    	02. Counter Up
    -------------------------*/

    $('.count').counterUp({
        delay: 10,
        time: 1000
    });


    /*----------------------------------
        03. Feature Icon Activation  
    --------------------------------------*/

    feather.replace()

    /*--------------------------- 
    	04. Youtub Popup 
    -----------------------------*/

    $('.play__btn').yu2fvl();

    /*--------------------------
        05. Slick Activation 
    ----------------------------*/

    function slickactivation() {
        // Check if element exists
        $.fn.elExists = function () {
            return this.length > 0;
        };
        // Variables
        var $html = $('html'),
            $elementCarousel = $('.rn-slick-activation');
        if ($elementCarousel.elExists()) {
            var slickInstances = [];
            $elementCarousel.each(function (index, element) {
                var $this = $(this);
                // Carousel Options
                var $options = typeof $this.data('slick-options') !== 'undefined' ? $this.data('slick-options') : '';
                var $spaceBetween = $options.spaceBetween ? parseInt($options.spaceBetween) : 0,
                    $spaceBetween_xl = $options.spaceBetween_xl ? parseInt($options.spaceBetween_xl) : 0,
                    $isCustomArrow = $options.isCustomArrow ? $options.isCustomArrow : false,
                    $customPrev = $isCustomArrow === true ? ($options.customPrev ? $options.customPrev : '') : '',
                    $customNext = $isCustomArrow === true ? ($options.customNext ? $options.customNext : '') : '',
                    $vertical = $options.vertical ? $options.vertical : false,
                    $focusOnSelect = $options.focusOnSelect ? $options.focusOnSelect : false,
                    $asNavFor = $options.asNavFor ? $options.asNavFor : '',
                    $fade = $options.fade ? $options.fade : false,
                    $autoplay = $options.autoplay ? $options.autoplay : false,
                    $autoplaySpeed = $options.autoplaySpeed ? $options.autoplaySpeed : 5000,
                    $swipe = $options.swipe ? $options.swipe : false,
                    $adaptiveHeight = $options.adaptiveHeight ? $options.adaptiveHeight : false,

                    $arrows = $options.arrows ? $options.arrows : false,
                    $dots = $options.dots ? $options.dots : false,
                    $infinite = $options.infinite ? $options.infinite : false,
                    $centerMode = $options.centerMode ? $options.centerMode : false,
                    $centerPadding = $options.centerPadding ? $options.centerPadding : '',
                    $speed = $options.speed ? parseInt($options.speed) : 1000,
                    $prevArrow = $arrows === true ? ($options.prevArrow ? '<span class="' + $options.prevArrow.buttonClass + '"><i class="' + $options.prevArrow.iconClass + '"></i></span>' : '<button class="slick-prev">previous</span>') : '',
                    $nextArrow = $arrows === true ? ($options.nextArrow ? '<span class="' + $options.nextArrow.buttonClass + '"><i class="' + $options.nextArrow.iconClass + '"></i></span>' : '<button class="slick-next">next</span>') : '',
                    $slidesToShow = $options.slidesToShow ? parseInt($options.slidesToShow, 10) : 1,
                    $slidesToScroll = $options.slidesToScroll ? parseInt($options.slidesToScroll, 10) : 1;

                /*Responsive Variable, Array & Loops*/
                var $responsiveSetting = typeof $this.data('slick-responsive') !== 'undefined' ? $this.data('slick-responsive') : '',
                    $responsiveSettingLength = $responsiveSetting.length,
                    $responsiveArray = [];
                for (var i = 0; i < $responsiveSettingLength; i++) {
                    $responsiveArray[i] = $responsiveSetting[i];

                }

                // Adding Class to instances
                $this.addClass('slick-carousel-' + index);
                $this.parent().find('.slick-dots').addClass('dots-' + index);
                $this.parent().find('.slick-btn').addClass('btn-' + index);

                if ($spaceBetween != 0) {
                    $this.addClass('slick-gutter-' + $spaceBetween);
                }
                if ($spaceBetween_xl != 0) {
                    $this.addClass('slick-gutter-xl-' + $spaceBetween_xl);
                }
                $this.slick({
                    slidesToShow: $slidesToShow,
                    slidesToScroll: $slidesToScroll,
                    asNavFor: $asNavFor,
                    autoplay: $autoplay,
                    autoplaySpeed: $autoplaySpeed,
                    speed: $speed,
                    infinite: $infinite,
                    arrows: $arrows,
                    dots: $dots,
                    vertical: $vertical,
                    focusOnSelect: $focusOnSelect,
                    centerMode: $centerMode,
                    centerPadding: $centerPadding,
                    fade: $fade,
                    adaptiveHeight: $adaptiveHeight,
                    prevArrow: $prevArrow,
                    nextArrow: $nextArrow,
                    responsive: $responsiveArray,
                });

                if ($isCustomArrow === true) {
                    $($customPrev).on('click', function () {
                        $this.slick('slickPrev');
                    });
                    $($customNext).on('click', function () {
                        $this.slick('slickNext');
                    });
                }
            });

            // Updating the sliders in tab
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $elementCarousel.slick('setPosition');
            });
        }
    }
    slickactivation()


    /*--------------------------
        06. Paralax Window  
    --------------------------*/

    $('.parallax-window').parallax({
        naturalWidth: 600,
        naturalHeight: 400
    });

    /* -------------------------
    	07. LightBox
    ----------------------------*/

    lightGallery(document.getElementById('animated-thumbnials'), {
        thumbnail: true,
        animateThumb: false,
        showThumbByDefault: false
    });

    /*--------------------------------
        08. Parallax Activation
    ---------------------------------*/

    function stellarParallax() {
        if ($(window).width() > 1024) {
            $.stellar();
        } else {
            $.stellar('destroy');
            $('.parallax').css('background-position', '');
        }
    }

    function SetResizeContent() {
        stellarParallax();
    }
    SetResizeContent();


    /*--------------------------------
        09. Masonry Activation
    ---------------------------------*/
    $('.rn-masonary-wrapper').imagesLoaded(function () {
        // filter items on button click
        $('.messonry-button').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
        // init Isotope
        var $grid = $('.mesonry-list').isotope({
            itemSelector: '.masonry_item',
            percentPosition: true,
            transitionDuration: '0.7s',
            layoutMode: 'fitRows',
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: 1,
            }
        });
    });
    $('.messonry-button button').on('click', function (event) {
        $(this).siblings('.is-checked').removeClass('is-checked');
        $(this).addClass('is-checked');
        event.preventDefault();
    });

    /*--------------------------------
        10. ScrollUp Activation
    ---------------------------------*/

    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'slide'
    });


    
    /*--------------------------------
        11. Mobile Menu Activation
    ---------------------------------*/

    function mobileMenuActive() {
        $('.humberger-menu').on('click', function (e) {
            e.preventDefault();
            $('.header-wrapper').addClass('menu-open');
            $('html').css({
                overflow: "hidden"
            })
        })
        $('.close-menu').on('click', function (e) {
            e.preventDefault();
            $('.header-wrapper').removeClass('menu-open');
            $('.has-droupdown > a').removeClass('open').siblings('.submenu').removeClass('active');
            $('html').css({
                overflow: ""
            })
        })
        $('.has-droupdown > a').on('click', function (e) {
            e.preventDefault();
            $(this).siblings('.submenu').toggleClass('active');
            $(this).toggleClass('open')
        })
    }
    mobileMenuActive()


    /*--------------------------------
        12. Smoth Scroll
    ---------------------------------*/

    $(document).on('click', '.smoth-animation', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });



    $(window).scroll(function () {
        if ($(this).scrollTop() > 250) {
            $('.header--sticky').addClass('sticky')
        }else{
            $('.header--sticky').removeClass('sticky')
        }
    })



/*-------------------------------------------------------------
  Contact Form Activation
---------------------------------------------------------------*/ 

$(function() {

    // Get the form.
    var form = $('#contact-form-active');
  
    // Get the messages div.
    var formMessages = $('.form-messege-active');
  
    // Set up an event listener for the contact form.
    $(form).submit(function(e) {
      // Stop the browser from submitting the form.
      e.preventDefault();
  
      // Serialize the form data.
      var formData = $(form).serialize();
  
      // Submit the form using AJAX.
      $.ajax({
        type: 'POST',
        url: $(form).attr('action'),
        data: formData
      })
      .done(function(response) {
        // Make sure that the formMessages div has the 'success' class.
        $(formMessages).removeClass('error');
        $(formMessages).addClass('success');
  
        // Set the message text.
        $(formMessages).text(response);
  
        // Clear the form.
        $('#contact-form input,#contact-form textarea').val('');
      })
      .fail(function(data) {
        // Make sure that the formMessages div has the 'error' class.
        $(formMessages).removeClass('success');
        $(formMessages).addClass('error');
  
        // Set the message text.
        if (data.responseText !== '') {
          $(formMessages).text(data.responseText);
        } else {
          $(formMessages).text('Oops! An error occured and your message could not be sent.');
        }
      });
    });
  
  });
  



})(jQuery)