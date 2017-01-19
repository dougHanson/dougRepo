// OWL CAROUSEL - initiate Owl Carousel plugin 
$(document).ready(function() {
  $(".owl-carousel").owlCarousel({
	stagePadding: 0,
	nav: true
  });
});



// FADE CONTENT ON SCROLL
  var fadeStart = 150;
  var fadeUntil = 700;
	var fadingClass = $('.fadeOut');
	var fadingFastClass = $('.fadeOut--fast');

$(window).bind('scroll', function(){
	var offset = $(document).scrollTop();
	var opacity = 0;	
  if ( offset<=fadeStart ) {
  	opacity=1;
  } 
	else if ( offset<=fadeUntil ) {
		opacity = 1-(offset-fadeStart)/(fadeUntil);
	}
    fadingClass.css('opacity',opacity);
		fadingClass.css('top',offset*0.4); 
    fadingFastClass.css('opacity',opacity);
		fadingFastClass.css('top',offset*0.4); 	
});



// PARALLAX SCROLLING
(function($) {
    
  $.fn.parallax = function(options) {
    var windowHeight = $(window).height();
    // Establish default settings
    var settings = $.extend({ speed: 0.15 }, options);
  
    // Iterate over each object in collection
    return this.each( function() {
      
      // Save a reference to the element
      var $this = $(this);
    
      // Set up Scroll Handler
      $(document).scroll(function(){
        var scrollTop = $(window).scrollTop();
        var offset = $this.offset().top;
        var height = $this.outerHeight();
      
        // Check if above or below viewport
        if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
          return;
        }
      
        var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
      
        // Apply the Y Background Position to Set the Parallax Effect
        $this.css('background-position', 'center ' + yBgPosition + 'px');
      });
    });
  }
}(jQuery));

$('.parallax-bg').parallax({
  speed : 0.4
});


// MASONRY GRID LAYOUT (remove if using css columns instead)
$(function(){
  $('.masonry-container').masonry({
    // options
    itemSelector : '.work-item',
    columnWidth: function( containerWidth ) {
      return containerWidth / 4; 
    }(),
    // isOriginTop: false  //puts most recent work at top of grid
  });
});



// 3D FLIP ANIMATION FOR WORK ITEMS
/*$(function() {	
	$(".work-item").click(function(){
		var id = $(this).attr('id');
		$(this).toggleClass('flip3d').addClass('hasAnimated');
		setTimeout(function(){ 
			$("."+id).fadeIn(); 
			$('body').addClass('noscroll');
		}, 500);

		
		$(".close-content,nav a").click(function(){
			$("."+id).fadeOut(500); 
			$('body').removeClass('noscroll');
			$('.hasAnimated').removeClass('flip3d');
		});		

	});
});	*/



// INPUT FIELDS - special effects from codrops 
(function() {
  // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
  if (!String.prototype.trim) {
    (function() {
      // Make sure we trim BOM and NBSP
      var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
      String.prototype.trim = function() {
        return this.replace(rtrim, '');
      };
    })();
  }

  [].slice.call( document.querySelectorAll( 'input.input__field, textarea.input__field' ) ).forEach( function( inputEl ) {
    // in case the input is already filled..
    if( inputEl.value.trim() !== '' ) {
      classie.add( inputEl.parentNode, 'input--filled' );
    }

    // events:
    inputEl.addEventListener( 'focus', onInputFocus );
    inputEl.addEventListener( 'blur', onInputBlur );
  } );

  function onInputFocus( ev ) {
    classie.add( ev.target.parentNode, 'input--filled' );
  }

  function onInputBlur( ev ) {
    if( ev.target.value.trim() === '' ) {
      classie.remove( ev.target.parentNode, 'input--filled' );
    }
  }
})();



// NAV MENU - add smooth scrolling 
var scrollSpeed = 1200;
$(".nav-about").click(function() {
    $('html, body').animate({
        scrollTop: $(".about").offset().top-50
    }, scrollSpeed);
});
$(".nav-contact").click(function() {
    $('html, body').animate({
        scrollTop: $(".contact-me").offset().top-50
    }, scrollSpeed);
});
$(".nav-home").click(function() {
    $('html, body').animate({
        scrollTop: $(".hero-content").offset().top
    }, scrollSpeed);
});
$(".nav-works").click(function() {
    $('html, body').animate({
        scrollTop: $(".selected-works").offset().top-50
    }, scrollSpeed);
});
	
  

	