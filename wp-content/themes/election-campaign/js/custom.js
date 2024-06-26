jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
	});
});

function election_campaign_menu_open() {
	jQuery(".menu-brand.primary-nav").addClass('show');
}
function election_campaign_menu_close() {
	jQuery(".menu-brand.primary-nav").removeClass('show');
}

var election_campaign_Keyboard_loop = function (elem) {
    var election_campaign_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');

    var election_campaign_firstTabbable = election_campaign_tabbable.first();
    var election_campaign_lastTabbable = election_campaign_tabbable.last();
    /*set focus on first input*/
    election_campaign_firstTabbable.focus();

    /*redirect last tab to first input*/
    election_campaign_lastTabbable.on('keydown', function (e) {
        if ((e.which === 9 && !e.shiftKey)) {
            e.preventDefault();
            election_campaign_firstTabbable.focus();
        }
    });

    /*redirect first shift+tab to last input*/
    election_campaign_firstTabbable.on('keydown', function (e) {
        if ((e.which === 9 && e.shiftKey)) {
            e.preventDefault();
            election_campaign_lastTabbable.focus();
        }
    });

    /* allow escape key to close insiders div */
    elem.on('keyup', function (e) {
        if (e.keyCode === 27) {
            elem.hide();
        }
        ;
    });
};

// scroll
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
	    if (jQuery(this).scrollTop() > 0) {
	        jQuery('#scrollbutton').fadeIn();
	    } else {
	        jQuery('#scrollbutton').fadeOut();
	    }
	});
	jQuery(window).on("scroll", function () {
	   document.getElementById("scrollbutton").style.display = "block";
	});
	jQuery('#scrollbutton').click(function () {
	    jQuery("html, body").animate({
	        scrollTop: 0
	    }, 600);
	    return false;
	});
});

jQuery(function($){
	$('.mobiletoggle').click(function () {
        election_campaign_Keyboard_loop($('.menu-brand.primary-nav'));
    });
});

// preloader
jQuery(function($){
    setTimeout(function(){
        $(".frame").delay(1000).fadeOut("slow");
    });
});

jQuery('document').ready(function($){
    $('.main-search span a').click(function(){
        $(".searchform_page").slideDown(500);
        election_campaign_Keyboard_loop($('.searchform_page'));
    });

    $('.close a').click(function(){
        $(".searchform_page").slideUp(500);
    });
}); 

jQuery('document').ready(function(){
  var owl = jQuery('#slider .owl-carousel');
    owl.owlCarousel({
    nav: true,
    autoplay : false,
    lazyLoad: true,
    autoplayTimeout: 9000,
    loop: false,
    dots:true,
    navText : ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
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
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

jQuery(document).ready(function () {
    
    function election_campaign_search_loop_focus(element) {
        var election_campaign_focus = element.find('select, input, textarea, button, a[href]');
        var election_campaign_firstFocus = election_campaign_focus[0];  
        var election_campaign_lastFocus = election_campaign_focus[election_campaign_focus.length - 1];
        var KEYCODE_TAB = 9;

        element.on('keydown', function election_campaign_search_loop_focus(e) {
            var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

            if (!isTabPressed) { 
              return; 
            }

            if ( e.shiftKey ) /* shift + tab */ {
              if (document.activeElement === election_campaign_firstFocus) {
            election_campaign_lastFocus.focus();
              e.preventDefault();
            }
          } else /* tab */ {
            if (document.activeElement === election_campaign_lastFocus) {
                election_campaign_firstFocus.focus();
              e.preventDefault();
            }
          }
        });
    }

  jQuery('.toggle-btn a').click(function(){
    jQuery(".header-sidebar").addClass('show');
    election_campaign_search_loop_focus(jQuery('.header-sidebar'));
  });

  jQuery('.header-sidebar .close-pop a').click(function(){
    jQuery(".header-sidebar").removeClass('show');
  });
});

jQuery(document).ready(function() {
   jQuery("#slider .carousel-caption h1 a").each(function() {
       var t = jQuery(this).text();
       var splitT = t.split(" ");
       var secondIndex = 1;
       var lastIndex = splitT.length - 1;
       var newText = "";
       for (var i = 0; i < splitT.length; i++) {
           if (i == secondIndex || i == lastIndex) {
               newText += "<span style='color:#CF2E2E'>";
               newText += splitT[i] + " ";
               newText += "</span>";
           } else {
               newText += splitT[i] + " ";
           }
       }
       jQuery(this).html(newText);
   });
});