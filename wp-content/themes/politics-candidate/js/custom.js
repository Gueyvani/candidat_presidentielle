jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay: 500,
		animation: {opacity:'show',height:'show'},
		speed:'fast'
	});
});

function politics_candidate_menu_open() {
	jQuery(".side-menu").addClass('open');
}
function politics_candidate_menu_close() {
	jQuery(".side-menu").removeClass('open');
}

(function( $ ) {
	// Back to top
	jQuery(document).ready(function () {
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 0) {
      	jQuery('.scrollup').fadeIn();
      } else {
        jQuery('.scrollup').fadeOut();
      }
    });
    jQuery('.scrollup').click(function () {
      jQuery("html, body").animate({
        scrollTop: 0
      }, 600);
      return false;
    });
	});

	// Window load function
	window.addEventListener('load', (event) => {
		jQuery(".preloader").delay(2000).fadeOut("slow");
	});

})( jQuery );

( function( window, document ) {
	function politics_candidate_keepFocusInMenu() {
		document.addEventListener( 'keydown', function( e ) {
			const politics_candidate_nav = document.querySelector( '.side-menu' );

			if ( ! politics_candidate_nav || ! politics_candidate_nav.classList.contains( 'open' ) ) {
				return;
			}

			const elements = [...politics_candidate_nav.querySelectorAll( 'input, a, button' )],
				politics_candidate_lastEl = elements[ elements.length - 1 ],
				politics_candidate_firstEl = elements[0],
				politics_candidate_activeEl = document.activeElement,
				tabKey = e.keyCode === 9,
				shiftKey = e.shiftKey;

			if ( ! shiftKey && tabKey && politics_candidate_lastEl === politics_candidate_activeEl ) {
				e.preventDefault();
				politics_candidate_firstEl.focus();
			}

			if ( shiftKey && tabKey && politics_candidate_firstEl === politics_candidate_activeEl ) {
				e.preventDefault();
				politics_candidate_lastEl.focus();
			}
		} );
	}
	

	politics_candidate_keepFocusInMenu();

} )( window, document );

jQuery(document).ready(function () {
	jQuery( ".tablinks" ).first().addClass( "active" );
});

function politics_candidate_project_tab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  jQuery('#'+ cityName).show()
  evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
	jQuery('.tabcontent').hide();
	jQuery('.tabcontent:first').show();

	var politics_candidate_mydate =jQuery('.date').val();
  	jQuery(".countdown").each(function(){
      	politics_candidate_countdown(jQuery(this),politics_candidate_mydate);
  	});
});


jQuery(document).ready(function() {
    jQuery("#slider .inner_carousel h1 a").each(function() {
        var text = jQuery(this).text();
        var words = text.split(" ");
        var lastWord = words[words.length - 1];
        var newText = "";
        for (var i = 0; i < words.length - 1; i++) {
            newText += words[i] + " ";
        }
        newText += '<span class="last-word">' + lastWord + "</span>";
        jQuery(this).html(newText);
    });
});


function politics_candidate_countdown($timer,politics_candidate_mydate){
    // Set the date we're counting down to
    var politics_candidate_countDownDate = new Date(politics_candidate_mydate).getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {
        // Get todays date and time
        var now = new Date().getTime();
        // Find the distance between now an the count down date
        var distance = politics_candidate_countDownDate - now;
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        // Output the result in an element with id="timer"
        $timer.html( "<div class='numbers'><span class='count'>" + days + "</span><br><span class='text'>Days</span>" + "</div>" + "   " +"<div class='numbers'><span class='count'>" + hours + "</span><br><span class='text'>Hours</span>" + "</div>" + "   " + "<div class='numbers'><span class='count'>" + minutes + "</span><br><span class='text'>Minutes</span>" + "</div>" + "   " + "<div class='numbers'><span class='count'>" + seconds + "</span><br><span class='text'>Seconds</spn" + "</div>");
        
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            $timer.html("EVENT EXPIRED");
        }
    }, 1000);
}