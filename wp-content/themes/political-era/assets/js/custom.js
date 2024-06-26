(function ($) {

    'use strict';

    $(function(){
        /*ripple effect*/
        if ( $.fn.ripples ) {
          $('.feature-section,.footer-top').ripples({
            resolution: 512,
            dropRadius:35,
            perturbance:0.07
          }); 
        }

    });


    $('.main-slider-wrap').slick({
      infinite: true,
      slidesToShow: 1,
      dots: true,
      arrows :false,
      slidesToScroll: 1,
      adaptiveHeight: true
    });

    /* back-to-top button */
    $('.back-to-top').hide();
    $('.back-to-top').on("click", function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
    });

    $(window).scroll(function () {
        var scrollheight = 400;
        if ($(window).scrollTop() > scrollheight) {
            $('.back-to-top').fadeIn();

        } else {
            $('.back-to-top').fadeOut();
        }
    });

    /*meanmenu js for responsive menu for header-layout-1*/
    $('.main-navigation').meanmenu({
        meanMenuContainer: '.brand-nav-wrap .meanmenu-container',
        meanScreenWidth: "840",
        meanRevealPosition: "right",
    });

    

    /*mission-vision-slider*/
    $('.mission-vision-slider').slick({
      infinite:true,
      slidesToShow:2,
      dots:true,
      arrows:false,
      slidesToScroll:1,
      vertical: true,
    });

    /*measuring and managing height of each slides of mission-vision-slider*/
    var maxHeight = -1;
    $('.mission-vision-slider .slick-slide').each(function() {
      if ($(this).height() > maxHeight) {
        maxHeight = $(this).height();
      }
    });
    $('.mission-vision-slider .slick-slide').each(function() {
      if ($(this).height() < maxHeight) {
        $(this).css('margin', Math.ceil((maxHeight-$(this).height())/2) + 'px 0');
      }
    });

    /*shop section carousel*/
    $('.shop-wrap').slick({
      infinite: true,
      slidesToShow: 3,
      dots: true,
      arrows : false,
      slidesToScroll: 1,
      responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
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
      ]
    });

    /*tab-content-slides*/
    $('.history-content-wrap').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: '.history-date-wrap',
        dots: false,
        arrows:false,
        focusOnSelect: true,                         
        centerPadding: 0,
        responsive: [
          {
            breakpoint:640,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    });

    $('.history-date-wrap').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        fade: false,
        asNavFor: '.history-content-wrap', 
        responsive:[
          {
            breakpoint:640,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    });   
   

    //tab js

    $('.bio-tab-contain .tab-option  li').on("click", function () {
      var tab_id = $(this).attr('data-tab');
      $('.bio-tab-contain .tab-option  li').removeClass('current');
      $('.bio-tab-contain .tab-content-wrap .tab-content').removeClass('current');
      $(this).addClass('current');
      $("." + tab_id).addClass('current');
    });

    $('.about-us-tab .tab-option  li').on("click", function () {
      var tab_id = $(this).attr('data-tab');
      $('.about-us-tab .tab-option  li').removeClass('current');
      $('.about-us-tab .tab-content-wrap .tab-content').removeClass('current');
      $(this).addClass('current');
      $("." + tab_id).addClass('current');
    });

    $('.promise-detail-wrap .tab-option  li').on("click", function () {
      var tab_id = $(this).attr('data-tab');
      $('.promise-detail-wrap .tab-option  li').removeClass('current');
      $('.promise-detail-wrap .tab-content-wrap .tab-content').removeClass('current');
      $(this).addClass('current');
      $("." + tab_id).addClass('current');
    });

    /*for pop up video*/
    $('.popup-video').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    /*sticky sidebar*/
    $('.section-left , .sidebar ,#primary, #secondary').theiaStickySidebar({
      additionalMarginTop: 30
    });

    /*initializing wow.js for animation*/
    new WOW().init({
        offset: 0
    });

    /*hoverdir js */
    $('.promise-wrap .promise-item figure ').hoverdir();

    /*hgroup-wrap top fixed while scrolling*/
    var getHeaderHeight = $('.hgroup-wrap').outerHeight();
    var lastScrollPosition = 0;
    $(window).scroll(function() {
      var currentScrollPosition = $(window).scrollTop();
      if ($(window).scrollTop() > 2 * (getHeaderHeight) ) {
        $('body').addClass('scrollActive').css('padding-top', getHeaderHeight);
        $('.hgroup-wrap').css('top', 0);
        lastScrollPosition = currentScrollPosition;
      } else {
        $('body').removeClass('scrollActive').css('padding-top', 0);
      }
    });
})(jQuery);
