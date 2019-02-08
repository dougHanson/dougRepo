<footer class="text-center" >
	
	<div class="wrapper">		
		<div class="wrapper__inner">	
			<div class="container text-center">					
				<div class="row">
					
					<div class="col-sm-12">
						<p class="text-center">Copyright Doug Hanson 2019</p>
					</div>
					
					<!-- social media icons -->
					<div class="social-wrapper">
						<a class="social-icon-footer" href="//www.linkedin.com/in/doug83/" target="_blank">
							<div class="social-icon__bg social-icon__bg--transparent"></div>
							<div class="social-icon__svg social-icon__svg--linkedin">
								<?php echo file_get_contents("svg/linkedin.svg"); ?>
							</div>
						</a>

						<a class="social-icon-footer" href="//facebook.com/doug83" target="_blank">
							<div class="social-icon__bg social-icon__bg--transparent"></div>
							<div class="social-icon__svg social-icon__svg--facebook">
								<?php echo file_get_contents("svg/facebook.svg"); ?>
							</div>
						</a>

						<a class="social-icon-footer" href="//twitter.com/doug83" target="_blank">
							<div class="social-icon__bg social-icon__bg--transparent"></div>
							<div class="social-icon__svg social-icon__svg--twitter">
								<?php echo file_get_contents("svg/twitter.svg"); ?>
							</div>
						</a>

						<a class="social-icon-footer" href="//au.pinterest.com/dhanson1087/" target="_blank">
							<div class="social-icon__bg social-icon__bg--transparent"></div>
							<div class="social-icon__svg social-icon__svg--pinterest">
								<?php echo file_get_contents("svg/pinterest.svg"); ?>
							</div>
						</a>
					</div>	
					<!-- end social icons -->
					
				</div>								
			</div>
		</div>
	</div>
	
</footer>


<!-- jQuery CDN --> 
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> 


<!-- build:js --> 
<script src="js/data.js"></script> 
<script src="js/plugins/lozad.min.js"></script>
<script src="js/plugins/classie.js"></script>  
<script src="js/plugins/svganimations.js"></script>	
<script src="js/plugins/owl.carousel.min.js"></script> 
<script src="js/plugins/lightbox.js"></script>
<script src="js/main.js"></script> 
<!-- endbuild --> 


<!-- Google Analytics -->
<?php if ($_SERVER['SERVER_NAME'] != 'localhost') { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81920963-1', 'auto');
  ga('send', 'pageview');	
</script>
<?php } ?>
<!-- end Google Analytics -->


<?php if (isset($project)) { ?>	
<script>

	//Scroll page back to top on refresh, to ensure loading effect is maintained
	$(window).on('beforeunload', function() {			
		$(window).scrollTop(0),200;
	});

	//get current project from defined php variable
	var thisProject = projects.<?php echo $project ?>;

	//title & client
	$('#projectTitle').html(thisProject.title);
	$('#projectClient').html(thisProject.client);

	//brand colours
	if (!!thisProject.brand_colours) {
		for ( var i=0; i < thisProject.brand_colours.length; i++) {
			$('#projectBrandColours').append("<span class='brand-colour' style='background: " + thisProject.brand_colours[i] + "'></span>");
		}
	}
	else { $('#projectBrandColours').hide(); }

	//skills
	for ( var skill=0; skill < thisProject.skills.length; skill++) {
		$('#projectSkills').append("<h2 class='tag'>" + thisProject.skills[skill] + "</h2>");
	}

	//year
	if (!!thisProject.year) {
		$('#projectYear').html(thisProject.year);
	}
	else { $('#projectYear').parent().hide(); }

	//website
	if (!!thisProject.website) {
		$('#projectWebsite').append("<a href='" + thisProject.website_url + "' target='_blank'>" + thisProject.website + "</a>");
	}
	else { $('#projectWebsite').parent().hide(); }

	//next projects
	var nextObject = projectOrder.indexOf("<?php echo $project ?>")+1;
	if (nextObject > projectOrder.length-1) { nextObject = 0; } //loop back to start
	var nextProject = projectOrder[nextObject];
	var next = projects[nextProject];
	$('#projectNextLink').attr("href", next.url);
	$('#projectNextTitle').append(next.title);
	$('#projectNextImg').attr("src", "img/" + next.thumbnail);
	$('#projectNextPosition').append(" (" + (nextObject+1) + " of " + projectOrder.length + ")") ;

	//previous projects
	var prevObject = projectOrder.indexOf("<?php echo $project ?>")-1;
	if (prevObject < 0) { prevObject = projectOrder.length-1; } //loop back to end
	var prevProject = projectOrder[prevObject];
	var prev = projects[prevProject];
	$('#projectPrevLink').attr("href", prev.url);
	$('#projectPrevTitle').append(prev.title);
	$('#projectPrevImg').attr("src", "img/" + prev.thumbnail);		
	$('#projectPrevPosition').append(" (" + (prevObject+1) + " of " + projectOrder.length + ")") ;


//scroll animation - disabled on mobile as doesn't render correctly
(function() {

	if( ! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

		// detect if IE : from http://stackoverflow.com/a/16657946		
		var ie = (function() {
			var undef, rv = -1; // Return value assumes failure.
			var ua = window.navigator.userAgent;
			var msie = ua.indexOf('MSIE ');
			var trident = ua.indexOf('Trident/');

			if (msie > 0) {
				// IE 10 or older => return version number
				rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
			} else if (trident > 0) {
				// IE 11 (or newer) => return version number
				var rvNum = ua.indexOf('rv:');
				rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
			}

			return ((rv > -1) ? rv : undef);
		}());


		// disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179					
		// left: 37, up: 38, right: 39, down: 40,
		// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
		var keys = [32],
			wheelIter = 0;

		function preventDefault(e) {
			e = e || window.event;
			if (e.preventDefault)
				e.preventDefault();
			e.returnValue = false;
		}

		function keydown(e) {
			for (var i = keys.length; i--;) {
				if (e.keyCode === keys[i]) {
					preventDefault(e);
					return;
				}
			}
		}

		function touchmove(e) {
			preventDefault(e);
		}

		function wheel(e) {
			// for IE 
			//if( ie ) {
			//preventDefault(e);
			//}
		}

		function disable_scroll() {
			window.onmousewheel = document.onmousewheel = wheel;
			document.onkeydown = keydown;
			document.body.ontouchmove = touchmove;
		}

		function enable_scroll() {
			window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;
		}

		var docElem = window.document.documentElement,
			scrollVal,
			isRevealed,
			noscroll,
			isAnimating,
			container = document.getElementById('container')
			//trigger = container.querySelector('button.trigger');

		function scrollY() {
			return window.pageYOffset || docElem.scrollTop;
		}

		function scrollPage() {
			scrollVal = scrollY();

			if (noscroll && !ie) {
				if (scrollVal < 0) return false;
				// keep it that way
				window.scrollTo(0, 0);
			}

			if (classie.has(container, 'notrans')) {
				classie.remove(container, 'notrans');
				return false;
			}

			if (isAnimating) {
				return false;
			}

			if (scrollVal <= 0 && isRevealed) {
				toggle(0);
			} 
			else if (scrollVal > 0 && !isRevealed) {
				toggle(1);
			}
		}

		function toggle(reveal) {
			isAnimating = true;

			if (reveal) {
				classie.add(container, 'modify');
				//$('.content').css('margin-top','-300px');
			} 
			else {
				noscroll = true;
				disable_scroll();
				classie.remove(container, 'modify');
			}

			// simulating the end of the transition:
			setTimeout(function() {
				isRevealed = !isRevealed;
				isAnimating = false;
				if (reveal) {
					noscroll = false;
					enable_scroll();
				}
			}, 600);
		}

		// refreshing the page...
		var pageScroll = scrollY();
		noscroll = pageScroll === 0;

		disable_scroll();

		if (pageScroll) {
			isRevealed = true;
			classie.add(container, 'notrans');
			classie.add(container, 'modify');
		}

		window.addEventListener('scroll', scrollPage);
		//trigger.addEventListener('click', function() {
		//	toggle('reveal');
		//});

	} //end if not mobile device logic

	else {		
		var	container = document.getElementById('container');		
		container.className += " modify";
	}

})();	

</script> 
<?php } ?>