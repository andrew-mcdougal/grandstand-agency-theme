jQuery(document).ready (function() {
	

	jQuery('article.artist-pod .grabber').equalHeights();
	jQuery('.category-pod .grabber').equalHeights();
	//jQuery('.widget_categories li a').equalHeights();
	jQuery('.category-container a').equalHeights();
	
	// Testimonials slider in Artist single page
    /*jQuery(".flexslider").flexslider({
        animation: "slide",
        directionNav: false,
    });
	*/

    // Home page animate rollover link by adding class "hover"
    jQuery('.category-pod').hover(
	function() {
    	jQuery(this).find('.artist-excerpt').addClass('hover');
	}, function() {
		jQuery(this).find('.artist-excerpt').removeClass('hover');
	});

	// Truncate exerpt on Category artist grabber text
	jQuery(function(){
		jQuery('.artist-excerpt p').succinct({
			size: 170
		});
		
		jQuery('.related-acts li p').succinct({
			size: 20
		});
	});

	// Masonry layout of song list
	jQuery('#masonry').masonry({ singleMode: true });
	
		jQuery('#tab-container').easytabs();

	
});

(function($) {

function smoothScroll() {
	// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 600, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });	
}

	
	function homeHeights() {
		$('.secondary-container .columns').equalHeights();
	}
	
	function homeSlider() {

		var $slider = $('.home-slides');

		$('.home-slides').on('init', function(event, slick) {
			console.log('loaded');
			setTimeout(homeHeights, 200);
			$('.home-slides').css({
				'opacity': "1",
				'height': 'auto'
			});
		});

		$('.home-slides').slick({
			dots: true,
			autoplay: true,
			autoplaySpeed: 7000,
			arrows: false
		});


		
	}

	$(window).load(function() {
		smoothScroll();
		setTimeout(homeSlider, 200);
	});
	

	
})( jQuery );



