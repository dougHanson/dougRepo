						<div class="col-lg-2 col-lg-offset-1 sidebar">
							<p class="h4 subheading font-bold margin-0 margin-bottom-0">
								<span class="hidden-xl">Skills</span>
								<span class="visible-xl">Skills used</span>
							</p>
							<div class="margin-bottom-20">
								<?php if(isset($skills)) { foreach ($skills as $a_skill) { ?>	
										<h2 class="tag"> <?php print $a_skill ?></h2>
								<?php	} } ?>											
							</div>		

							<p class="h4 subheading font-bold margin-bottom-0">Client</p>
							<p class="margin-top-0" id="projectClient"><?php print $client ?></p>				

							<?php if(isset($website)) { ?>
							<p class="h4 subheading font-bold margin-top-20 margin-bottom-0">
								<span class="visible-xl">Live website</span>
								<span class="hidden-xl">Website</span>
							</p>
							<p class="margin-top-0"><a href="<?php print $website_url ?>" target="_blank"><?php print $website ?></a></p>
							<?php } ?>

							<?php if(isset($year)) { ?>
							<p class="h4 subheading font-bold margin-top-20 margin-bottom-0">When</p>
							<p class="margin-top-0"><?php print $year ?></p>
							<?php } ?>					

							<!--<p class="h4 subheading font-bold margin-top-20 margin-bottom-0">Share</p>
							<p class="margin-top-0">facebook</p>			-->	
						</div>


<script>
	
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