// OWL CAROUSEL - initiate Owl Carousel plugin 
/*$('.owl-carousel').owlCarousel({
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
});*/



// FADE WRAPPER IN ON PAGE LOAD
$(".wrapper__outer").animate({
  "opacity": "1"
}, 300);



//DISPLAY SKELETON CSS UNTIL PAGE READY
$(document).ready(function () {
  $('.skeleton').fadeOut(200);
  //setTimeout ( function() {
  $('.wrapper').css('opacity', '1');
  //}, 200);
});



// FADE CONTENT ON SCROLL
var fadeStart = 150;
var fadeUntil = 750;
var fadingClass = $('.fadeOut');
var fadingFastClass = $('.fadeOut--fast');

$(window).bind('scroll', function () {
  var offset = $(document).scrollTop();
  var opacity = 0;
  if (offset <= fadeStart) {
    opacity = 1;
    fadingFastClass.css('opacity', 1);
  } else if (offset <= fadeUntil) {
    opacity = 1 - (2 * ((offset - fadeStart) / (fadeUntil)));
    fadingFastClass.css('opacity', opacity - 0.5);
  }
  if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) { // && $(window).width() > 768 ) {
    fadingClass.css('opacity', opacity);
    fadingClass.css('top', offset * 0.4);
    fadingFastClass.css('top', offset * 0.9);
  }
});



// PARALLAX SCROLLING
(function ($) {

  $.fn.parallax = function (options) {
    var windowHeight = $(window).height();
    // Establish default settings
    var settings = $.extend({
      speed: 0.15
    }, options);

    // Iterate over each object in collection
    return this.each(function () {

      // Save a reference to the element
      var $this = $(this);

      // Set up Scroll Handler
      $(document).scroll(function () {
        var scrollTop = $(window).scrollTop();
        var offset = $this.offset().top;
        var height = $this.outerHeight();

        // Check if above or below viewport
        if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
          return;
        }

        var yBgPosition = Math.round((offset - scrollTop) * settings.speed);

        // Apply the Y Background Position to Set the Parallax Effect (NOT ON MOBILE)
        if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
          $this.css('background-position', 'center ' + yBgPosition + 'px');
        }

      });
    });
  };
}(jQuery));

$('.parallax-bg').parallax({
  speed: 0.4
});



//SHOW ALL BUTTON ON HOMEPAGE
$('.show-all-btn').click(function () {
  $('.show-all-content').slideDown();
  $('.show-all-btn').hide();
  $('html, body').animate({
    scrollTop: $(".show-all-content").offset().top - 200
  }, 500);
});



// INPUT FIELDS - special effects from codrops 
(function () {
  // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
  if (!String.prototype.trim) {
    (function () {
      // Make sure we trim BOM and NBSP
      var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
      String.prototype.trim = function () {
        return this.replace(rtrim, '');
      };
    })();
  }

  [].slice.call(document.querySelectorAll('input.input__field, textarea.input__field')).forEach(function (inputEl) {
    // in case the input is already filled..
    if (inputEl.value.trim() !== '') {
      classie.add(inputEl.parentNode, 'input--filled');
    }

    // events:
    inputEl.addEventListener('focus', onInputFocus);
    inputEl.addEventListener('blur', onInputBlur);
  });

  function onInputFocus(ev) {
    classie.add(ev.target.parentNode, 'input--filled');
  }

  function onInputBlur(ev) {
    if (ev.target.value.trim() === '') {
      classie.remove(ev.target.parentNode, 'input--filled');
    }
  }
})();



//FORM VALIDATION	
function isValidField(field) {
  field.addClass('input-valid').removeClass('input-error');
}

function notValidField(field) {
  field.removeClass('input-valid').addClass('input-error');
}


$('#input-name').blur(function () {
  var nameEntered = this.value;
  var alphaExp = /^(?=.*[a-zA-Z])[a-zA-Z -]+$/;
  if (alphaExp.test(nameEntered)) {
    isValidField($(this));
    $('.input-name__validation').fadeOut();
  } else {
    notValidField($(this));
    $('.input-name__validation').text('Name should not contain numbers or special characters').fadeIn();
  }
});

$('#input-email').blur(function () {
  var emailEntered = this.value;
  var emailExp = /^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$/;
  if (emailExp.test(emailEntered)) {
    isValidField($(this));
    $('.input-email__validation').fadeOut();
  } else {
    notValidField($(this));
    $('.input-email__validation').text('Please enter a valid email address').fadeIn();
  }
});

$('#input-message').blur(function () {
  var messageEntered = this.value;
  var messageExp = /[a-zA-Z]/;
  if (messageExp.test(messageEntered)) {
    isValidField($(this));
    $('.input-message__validation').fadeOut();
  } else {
    notValidField($(this));
    $('.input-message__validation').text('Please enter a message').fadeIn();
  }
});



// NAV MENU - add smooth scrolling 
var scrollSpeed = 1000;
var pathname = window.location.pathname; // Returns path only

$(".nav-home").click(function (e) {
  if (pathname === "/index.php" || pathname === '/' || pathname === '/~doug.hanson/') {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $(".hero-content").offset().top
    }, scrollSpeed);
  }
});

$(".nav-works").click(function (e) {
  if (pathname === "/index.php" || pathname === '/' || pathname === '/~doug.hanson/') {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $(".selected-works").offset().top
    }, scrollSpeed);
  }
});

$(".nav-about").click(function (e) {
  if (pathname === "/index.php" || pathname === '/' || pathname === '/~doug.hanson/') {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $(".about").offset().top
    }, scrollSpeed);
  }
});

$(".nav-contact").click(function (e) {
  if (pathname === "/index.php" || pathname === '/' || pathname === '/~doug.hanson/') {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $(".contact-me").offset().top
    }, scrollSpeed);
  }
});



// PROGRESS BAR ANIMATION
$(function () {
  var $progress = $('#progress');
  $(document).ajaxStart(function () {
    //only add progress bar if not added yet.
    if ($progress.length === 0) {
      $progress = $('<div><dt/><dd/></div>').attr('id', 'progress');
      $("body").append($progress);
    }
    $progress.width((50 + Math.random() * 30) + "%");
  });

  $(document).ajaxComplete(function () {
    //End loading animation
    $progress.width("100%").delay(200).fadeOut(400, function () {
      $progress.width("0%").delay(200).show();
    });
  });

  $('.progressLoad').on('click', function () {
    $.getJSON('http://jsonip.com');
  });
});



//FLOATING SIDEBAR 
$(function () {

  if ($('.sidebar').length) {

    var sidebar = $('.sidebar');
    var top = sidebar.offset().top;

    $(window).scroll(function (event) {
      var viewportWidth = $(window).width();
      var y = $(this).scrollTop() + 400;
      var base = $('footer').offset().top - window.scrollY;
      if (y >= top && base > 960) {
        if (viewportWidth > 1200) {
          sidebar.css('top', y - 700); //todo: addClass to set position fixed top:0 instead
          //sidebar.css({'position': 'fixed', 'top': 0, 'right': 0});
        } else {
          sidebar.css('top', 0);
        }
      }
    });

  }

});


var currentYear = (new Date).getFullYear();
$('.js-year').html(currentYear);


//INITIALISE LAZY LOAD (LOZAD)
lozad('.lazy-load', {
  load: function (el) {
    el.src = el.dataset.src;
    el.onload = function () {
      //if not homepage, fadeIn images. Don't fadeIn on homepage as interferes with SVG animations.
      var pathname = window.location.pathname;
      if (pathname != "/index.php" && pathname != '/' && pathname != '/~doug.hanson' && pathname != '/~doug.hanson/index.php') {
        el.classList.add('fadeIn'); //see utilities.scss for fadeIn class
      }
    };
  }
}).observe();

//LAZY LOAD BG IMAGES
$(function () {
  'use strict';
  // Page is loaded

  //if ( ! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && $(window).width() > 991 ) {
  //var asideImg = new Image();	
  //asideImg.src = 'img/aside.jpg';
  //asideImg.onload = function() {
  //$('.vertical-menu').css("background-image", "url('"+asideImg.src+"')"); 
  //};
  //}

  if ($('.hero-content').length) {
    var heroImg = new Image();
    heroImg.src = 'img/perth-bg.jpg';
    heroImg.onload = function () {
      $('.hero-content').css("background-image", "url('" + heroImg.src + "')");
    };
  }

  // Once images are loaded replace the src of the HTML element

});