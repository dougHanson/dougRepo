<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Doug Hanson">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	
	<title>iiNet Plan Page Redesign | Doug Hanson | Web Design and Development, Perth</title>
	<meta name="description" content="Doug Hanson is a web designer and front end developer from Perth, Western Australia.">
	<meta name="keywords" content="iinet plan pages, web design, designer, web development, front end developer, ux design, perth, doug hanson">


	<!-- build:css -->
	<link href="https://fonts.googleapis.com/css?family=Raleway|Dancing+Script" rel="stylesheet" type="text/css">	
	<link rel="stylesheet" href="css/styles.css" media="all">		
	
	
	<!-- endbuild -->

</head>


<body>	

<?php /* ####################
					DEFINE PROJECT 
############################# */ ?>
<?php 
	$title = 'iiNet Plan Page Redesign';
	$client = 'iiNet';
	$brand_colours = [ '#ff8200', '#d21f2a', '#0090ab', '#808080', '#fff' ];
	//$year = '2016';		
	$skills = [ 'HTML5', 'CSS3', 'PHP', 'Angular JS', 'User Testing' ];
	$website = 'www.iinet.net.au';	
	$website_url = '//www.iinet.net.au/internet-products/broadband/adsl';
	
	$next_project = ['multicomm', 'Multicomm Website'];
	$previous_project = ['mobii-manager', 'Mobii Manager'];
?>
	
	

<!-- include frames and nav --> 	
<?php include('inc/_nav.php'); ?>

	<!-- iiNet plan refreshes -->
	<div class="wrapper">		
		<div class="wrapper__outer">


			<!-- banner -->	
			<!--<div class="container">	
				<img src="" alt="" class="work-content__banner" >	
			</div>-->


			<div class="" style="position: relative; overflow-x: hidden; padding-bottom: 100px;">
			<div id="container" class="intro-effect-jam3">	
			<header class="header">
				<div class="bg-img">
					<img src="img/1.jpg" alt="" />
				</div>

			</header>
				<div class="container"><div class="col-sm-12 title">
							<h1 class="h3 font-bold grey-6"><?php print $title ?></h1>
					</div>	</div>
				
			<article class="content">
				<div class="container">
			
						
					<!-- content -->
					<div class="col-sm-9">

						<!-- brand colours -->	
						<?php /*<p class="margin-0">
							<?php foreach ($brand_colours as $a_colour) { ?>	
									<span class="brand-colour" style="background: <?php print $a_colour ?>"> </span>
							<?php	} ?>	
						</p>	*/  ?>		



						<!-- content -->
					
						
						<p class="h3 subheading padding-0 margin-0">At a glance</p>
						<p>iiNet's core product pages presented a complex user experience. They were not responsive, and were no longer aligned with the brand. Each product page also had a unique interface and layout, confusing potential customers and customer service representatives. This presented an opportunity to improve the user experience, by simplifying these pages and unifying them with each other and the brand. </p>

						<p><strong>The process:</strong><br>The first step was to conduct a handful of user testing sessions, to identify the main pain points for users. The designs were then refined.</p>

						<p><strong>The outcome:</strong><br>The new responsive pages reduce cognitive load by breaking down the plan customisation into intuitive steps. Both conversion and bounce rates improved once the new pages were released.</p>
						<p class="margin-bottom-40"><!-- --></p>		

					</div>



					<!-- additional info -->
					<div class="col-sm-2 col-sm-offset-1 ">

						<p class="h5 subheading font-bold margin-0 margin-bottom-0">Skills used</p>
						<p class="margin-0">
							<?php foreach ($skills as $a_skill) { ?>	
									<h2 class="tag"> <?php print $a_skill ?></h2>
							<?php	} ?>											
						</p>		

						<p class="h5 subheading font-bold margin-bottom-0">Client</p>
						<p class="margin-top-0"><?php print $client ?></p>				

						<?php if(isset($website)) { ?>
						<p class="h5 subheading font-bold margin-top-20 margin-bottom-0">Live website</p>
						<p class="margin-top-0"><a href="<?php print $website_url ?>" target="_blank"><?php print $website ?></a></p>
						<?php } ?>

						<?php if(isset($year)) { ?>
						<p class="h5 subheading font-bold margin-top-20 margin-bottom-0">When</p>
						<p class="margin-top-0"><?php print $year ?></p>
						<?php } ?>					

						<p class="h5 subheading font-bold margin-top-20 margin-bottom-0">Share</p>
						<p class="margin-top-0">facebook</p>				
					</div>

				</div>
				
				
				<?php include('inc/_project-slides.php'); ?>	
		
				
				
	

			</article>				
				
			</div>
		</div>
	</div>	
	<!-- end iiNet Plan Refreshes -->
	
	<!-- include footer --> 	
	<?php include('inc/_footer.php'); ?>	
		
		
		<script>
			(function() {

				// detect if IE : from http://stackoverflow.com/a/16657946		
				var ie = (function(){
					var undef,rv = -1; // Return value assumes failure.
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
				var keys = [32], wheelIter = 0;

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
					container = document.getElementById( 'container' ),
					trigger = container.querySelector( 'button.trigger' );

				function scrollY() {
					return window.pageYOffset || docElem.scrollTop;
				}
				
				function scrollPage() {
					scrollVal = scrollY();
					
					if( noscroll && !ie ) {
						if( scrollVal < 0 ) return false;
						// keep it that way
						window.scrollTo( 0, 0 );
					}

					if( classie.has( container, 'notrans' ) ) {
						classie.remove( container, 'notrans' );
						return false;
					}

					if( isAnimating ) {
						return false;
					}
					
					if( scrollVal <= 0 && isRevealed ) {
						toggle(0);
					}
					else if( scrollVal > 0 && !isRevealed ){
						toggle(1);
					}
				}

				function toggle( reveal ) {
					isAnimating = true;
					
					if( reveal ) {
						classie.add( container, 'modify' );
						//$('.content').css('margin-top','-300px');
					}
					else {
						noscroll = true;
						disable_scroll();
						classie.remove( container, 'modify' );
					}

					// simulating the end of the transition:
					setTimeout( function() {
						isRevealed = !isRevealed;
						isAnimating = false;
						if( reveal ) {
							noscroll = false;
							enable_scroll();
						}
					}, 600 );
				}

				// refreshing the page...
				var pageScroll = scrollY();
				noscroll = pageScroll === 0;
				
				disable_scroll();
				
				if( pageScroll ) {
					isRevealed = true;
					classie.add( container, 'notrans' );
					classie.add( container, 'modify' );
				}
				
				window.addEventListener( 'scroll', scrollPage );
				trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
			})();
		</script>		
	
</body>
	
