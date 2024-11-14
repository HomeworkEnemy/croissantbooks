
// classes section
jQuery('document').ready(function(){
  var owl = jQuery('#sponsor-section .owl-carousel');
    owl.owlCarousel({
    margin:20,
    autoplay : true,
    autoplayTimeout: 90000,
    loop: false,
    dots:true,
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

function pest_control_treatment_menu_open_nav() {
	window.pest_control_treatment_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function pest_control_treatment_menu_close_nav() {
	window.pest_control_treatment_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
 	"use strict";
 	jQuery('.main-menu > ul').superfish({
		delay: 500,
		animation: {opacity:'show',height:'show'},
		speed: 'fast'
 	});
});

jQuery(document).ready(function () {
	window.pest_control_treatment_currentfocus=null;
  	pest_control_treatment_checkfocusdElement();
	var pest_control_treatment_body = document.querySelector('body');
	pest_control_treatment_body.addEventListener('keyup', pest_control_treatment_check_tab_press);
	var pest_control_treatment_gotoHome = false;
	var pest_control_treatment_gotoClose = false;
	window.pest_control_treatment_responsiveMenu=false;
 	function pest_control_treatment_checkfocusdElement(){
	 	if(window.pest_control_treatment_currentfocus=document.activeElement.className){
		 	window.pest_control_treatment_currentfocus=document.activeElement.className;
	 	}
 	}
 	function pest_control_treatment_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.pest_control_treatment_responsiveMenu){
			if (!e.shiftKey) {
				if(pest_control_treatment_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				pest_control_treatment_gotoHome = true;
			} else {
				pest_control_treatment_gotoHome = false;
			}

		}else{

			if(window.pest_control_treatment_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.pest_control_treatment_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.pest_control_treatment_responsiveMenu){
				if(pest_control_treatment_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					pest_control_treatment_gotoClose = true;
				} else {
					pest_control_treatment_gotoClose = false;
				}

			}else{

			if(window.pest_control_treatment_responsiveMenu){
			}}}}
		}
	 	pest_control_treatment_checkfocusdElement();
	}
});

jQuery('document').ready(function($){
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);
  $(window).scroll(function(){
	var sticky = $('.header-sticky'),
		scroll = $(window).scrollTop();

	if (scroll >= 100) sticky.addClass('header-fixed');
	else sticky.removeClass('header-fixed');
});
});

jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});

// // Video Popup
(function( $ ) {
    $(document).ready(function(){
        $('#openBtn').on('click', function() {
          $('#videoOverlay').css('display', 'flex');
        });
        $('.close-btn').on('click', function() {
          $('#videoOverlay').hide();
        });
    });
})( jQuery );

// search
jQuery(document).ready(function () {
	function pest_control_treatment_search_loop_focus(element) {
	var pest_control_treatment_focus = element.find('select, input, textarea, button, a[href]');
	var pest_control_treatment_firstFocus = pest_control_treatment_focus[0];  
	var pest_control_treatment_lastFocus = pest_control_treatment_focus[pest_control_treatment_focus.length - 1];
	var KEYCODE_TAB = 9;

	element.on('keydown', function pest_control_treatment_search_loop_focus(e) {
	  var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

	  if (!isTabPressed) { 
		return; 
	  }

	  if ( e.shiftKey ) /* shift + tab */ {
		if (document.activeElement === pest_control_treatment_firstFocus) {
		  pest_control_treatment_lastFocus.focus();
			e.preventDefault();
		  }
		} else /* tab */ {
		if (document.activeElement === pest_control_treatment_lastFocus) {
		  pest_control_treatment_firstFocus.focus();
			e.preventDefault();
		  }
		}
	});
  }
  jQuery('.search-box span a').click(function(){
	  jQuery(".serach_outer").slideDown(1000);
	  pest_control_treatment_search_loop_focus(jQuery('.serach_outer'));
  });

  jQuery('.closepop a').click(function(){
	  jQuery(".serach_outer").slideUp(1000);
  });
});

// banner text

jQuery(document).ready(function() {
  jQuery("#banner h2").each(function() {
    var t = jQuery(this).text();
    var splitT = t.split(" ");
    var newText = "";
    for (var i = 0; i < splitT.length; i++) {
      if (i == 5 || i == 6) { // Adjusted to highlight 5th and 6th words
        newText += "<span class='banner-highlight' style='color:#339D55;font-weight:600;'>";
        newText += splitT[i] + " ";
        newText += "</span>";
      } else {
        newText += splitT[i] + " ";
      }      
    }    
    jQuery(this).html(newText);
  });
});


// classes section
jQuery('document').ready(function(){
  var owl = jQuery('#about-sec .owl-carousel');
    owl.owlCarousel({
    margin:20,
   	padding:10,
    autoplay : true,
    autoplayTimeout: 3000,
    loop: false,
    dots:true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2
      },
      1199: {
        items: 3,
        margin:10
      },
      1200: {
        items: 4,
        margin:10,
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

// tab

jQuery(document).ready(function () {
	jQuery( ".tablinks" ).first().addClass( "active" );
});

function pest_control_treatment_services_tab(evt, cityName) {
  var pest_control_treatment_i, pest_control_treatment_tabcontent, pest_control_treatment_tablinks;
  pest_control_treatment_tabcontent = document.getElementsByClassName("tabcontent");
  for (pest_control_treatment_i = 0; pest_control_treatment_i < pest_control_treatment_tabcontent.length; pest_control_treatment_i++) {
    pest_control_treatment_tabcontent[pest_control_treatment_i].style.display = "none";
  }
  pest_control_treatment_tablinks = document.getElementsByClassName("tablinks");
  for (pest_control_treatment_i = 0; pest_control_treatment_i < pest_control_treatment_tablinks.length; pest_control_treatment_i++) {
    pest_control_treatment_tablinks[pest_control_treatment_i].className = pest_control_treatment_tablinks[pest_control_treatment_i].className.replace(" active", "");
  }
  jQuery('#'+ cityName).show()
  evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
	jQuery('.tabcontent').hide();
	jQuery('.tabcontent:first').show();

	// button js
	jQuery('.features-clicked').on('click', function() {
	  // jQuery(this).toggleClass('show');
	  jQuery('.features-clicked').toggleClass('show');

	  jQuery('.nav-item.dropdown .dropdown-menu').toggleClass('show');
	});
});