jQuery(document).ready(function($) {




 





    
        
         //setup jPanel Menu
  if($.jPanelMenu) {
    var jPM = $.jPanelMenu({
      menu: '.mobile-toggle',
      direction: 'right',
	  duration: 400,
      trigger: '.mobile-toggle-trigger',
      openPosition: '85%',
	  beforeOpen: function() {
        $('span#bg').fadeIn();
      
      },
      beforeClose: function() {
		$('span#bg').fadeOut();
     
      },
	  afterOpen: function() {
        $('.mobile-toggle-trigger').addClass('open');
        $('html').addClass('jpanel-menu-open');
         
      },
      afterClose: function() {
        $('.mobile-toggle-trigger').removeClass('open');
        $('html').removeClass('jpanel-menu-open');
		$('span#bg').fadeOut();
      }
    });
    
    //jRespond settings
    var jRes = jRespond([
      {
        label: 'small',
        enter: 0,
        exit: 991
      }
    ]);
    
    //turn jPanel Menu on/off as needed
    jRes.addFunc({
        breakpoint: 'small',
        enter: function() {
          jPM.on();
          
          //add help mobile classes
          $('html').addClass('breakpoint-mobile');
        },
        exit: function() {
          jPM.off();
          $('html').removeClass('breakpoint-mobile');
        }
    });
  }
  
	
	



    //***************************
    // BannerOne Functions
    //***************************
   
$(function() {
  $('.carousel-inner .carousel-item:first').addClass('active');
});


// Owl Carousel //


		jQuery(".member-slider").owlCarousel({
			'autoPlay' : 5000,
			'items' : 3,
			'itemsDesktop' : [1200, 3],
			'itemsDesktopSmall' : [1000, 2],
			'itemsTablet' : [768, 1],
			'stopOnHover' : true,
		});


		jQuery(".full-slider .prev").click(function(){
			jQuery(".member-slider").trigger('owl.prev');
			
			return false;
		});

		jQuery(".full-slider .next").click(function(){
			jQuery(".member-slider").trigger('owl.next');
			
			return false;
		});


       







	
	jQuery( function ( $ ) {
    'use strict';

    // Smooth scroll on anchor links
    $('a[href^="#"]').not(".noscroll").on('click', function(e) {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-20
        }, 900, 'swing', function() {
            window.location.hash = target;
        });
    });

});
	
	
	



});

        