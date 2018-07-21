// OWL CAROUSEL - initiate Owl Carousel plugin 
$('.owl-carousel').owlCarousel({
	stagePadding: 0,
	lazyLoad: true,
	loop: false,
	margin: 10,
	nav: false,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 1
		},
		1400: {
			items: 2
		}
	}
});


	
// FADE WRAPPER IN ON PAGE LOAD
$(".wrapper__outer").animate({"opacity": "1"}, 300);



//DISPLAY SKELETON CSS UNTIL PAGE READY
$(document).ready( function() {  
	$('.skeleton').fadeOut(200);
	//setTimeout ( function() {
		$('.wrapper').css('opacity','1');				
	//}, 200);
});



// FADE CONTENT ON SCROLL
var fadeStart = 150;
var fadeUntil = 750;
var fadingClass = $('.fadeOut');
var fadingFastClass = $('.fadeOut--fast');

$(window).bind('scroll', function() {
	var offset = $(document).scrollTop();
	var opacity = 0;
	if (offset <= fadeStart) {
		opacity = 1;
		fadingFastClass.css('opacity', 1);
	}
	else if (offset <= fadeUntil) {
		opacity = 1-(1.8*((offset-fadeStart)/(fadeUntil)));
		fadingFastClass.css('opacity', opacity-0.5);
	}	
	if ( ! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) { // && $(window).width() > 768 ) {
		fadingClass.css('opacity',opacity);
		fadingClass.css('top',offset*0.4); 
		fadingFastClass.css('top',offset*0.9); 
	}
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
      
        // Apply the Y Background Position to Set the Parallax Effect (NOT ON MOBILE)
				if( ! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
					$this.css('background-position', 'center ' + yBgPosition + 'px');
				}				
        
      });
    });
  };
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
var scrollSpeed = 1000;
var pathname = window.location.pathname; // Returns path only

	$(".nav-home").click(function(e) {
		if (pathname === "/index.php" || pathname === '/' || pathname === '/~doug.hanson/') { 
			e.preventDefault();
			$('html, body').animate({
				scrollTop: $(".hero-content").offset().top
			}, scrollSpeed);			
		}
	});

	$(".nav-works").click(function(e) {
		if (pathname === "/index.php" || pathname === '/' || pathname === '/~doug.hanson/') { 
			e.preventDefault();
			$('html, body').animate({
				scrollTop: $(".selected-works").offset().top
			}, scrollSpeed);			
		}	
	});	

	$(".nav-about").click(function(e) {	
		if (pathname === "/index.php" || pathname === '/' || pathname === '/~doug.hanson/') { 
			e.preventDefault();
			$('html, body').animate({
				scrollTop: $(".about").offset().top
			}, scrollSpeed);			
		}				
	});

	$(".nav-contact").click(function(e) {
		if (pathname === "/index.php" || pathname === '/' || pathname === '/~doug.hanson/') { 
			e.preventDefault();
			$('html, body').animate({
				scrollTop: $(".contact-me").offset().top
			}, scrollSpeed);			
		}				
	});



// PROGRESS BAR ANIMATION
$(function() {
	var $progress = $('#progress');
	$(document).ajaxStart(function() {
		//only add progress bar if not added yet.
		if ($progress.length === 0) {
			$progress = $('<div><dt/><dd/></div>').attr('id', 'progress');
			$("body").append($progress);
		}
		$progress.width((50 + Math.random() * 30) + "%");
	});

	$(document).ajaxComplete(function() {
		//End loading animation
		$progress.width("100%").delay(200).fadeOut(400, function() {
			$progress.width("0%").delay(200).show();
		});
	});

	$('.progressLoad').on('click', function() {
		$.getJSON('http://jsonip.com');
	});
});

	

//FLOATING SIDEBAR 
$(function() {
	
	if($('.sidebar').length) {

		var sidebar = $('.sidebar');
		var top = sidebar.offset().top;

		$(window).scroll(function(event) {
			var viewportWidth = $(window).width();
			var y = $(this).scrollTop() + 400;
			var base = $('footer').offset().top - window.scrollY;
			if (y >= top && base > 960) {
				if (viewportWidth > 1200) {
					sidebar.css('top', y - 700);
				} else {
					sidebar.css('top', 0);
				}
			}
		});
	
	}

});


