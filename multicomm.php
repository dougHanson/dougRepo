<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Doug Hanson">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Multicomm Website | Doug Hanson | Web Design and Development, Perth</title>
	<meta name="description" content="A case study of a freelance web development project by Doug Hanson, a web designer and front end developer from Perth, Western Australia.">
	<meta name="keywords" content="multicomm, web design, designer, web development, front end developer, ux design, perth, doug hanson">

	<!-- build:css -->
	<link rel="stylesheet" href="css/styles.css" media="all">
	<!-- endbuild -->

	<!-- individual banner styles -->
	<style>
		.title { padding: 15px;	background: rgba(99, 99, 98, 0.4); }		
		.intro-effect-jam3.modify .title { background: none; }		
		@media (max-width: 1400px) {
			.title h1 { text-shadow: 1px 1px 2px #636362;	}
			.intro-effect-jam3.modify .title h1 { text-shadow: none; margin-top: -10px; }
		}		
		@media (max-width: 960px) {
			.bg-img img {	right: -200px; top: 0; }
			.intro-effect-jam3.modify .bg-img img { top: -60px; }
		}
	</style>
</head>
	

<body class="project-page">
	
<?php 
	// DECLARE PROJECT VARIABLE - refer to data.js
	// Multicomm
	$project = 'multicomm'; 
	//include('inc/_skeleton.php'); 	
?>

	<!-- include frames and nav -->
	<?php include('inc/_nav.php'); ?>

	<div class="wrapper__outer">
		<div class="wrapper__inner">

			<div id="container" class="intro-effect-jam3">

				<!-- heading image -->
				<header class="header">
					<div class="bg-img">
						<img class="lazy-load" data-src="img/multicomm-header.jpg" alt="Multicomm Website Development" />
					</div>
				</header>

				<!-- heading -->
				<div class="container">
					<div class="col-sm-12 title">
						<h1 class="font-bold grey-6" id="projectTitle"></h1>
					</div>
				</div>

				<article class="content">
					<div class="container">


						<!-- ###############################
						//   Page specific content
						#################################### -->
						<div class="col-lg-9">

							<p class="h3 subheading padding-0 margin-0">At a glance</p>
							<p>Multicomm's new website was a freelance web development project which I completed in my spare time. Keeping nothing but the original colours, it began with a rebranding exercise, including the design of a new&nbsp;logo.</p>
							<!--<p><img src="img/multicomm-devices.png" alt="Multicomm Website Screenshot" class="img-responsive"></p>-->
							
							<p class="h3 subheading padding-0 margin-0">The process</p>
							<p>As this page was being built from scratch, I started by using <a href="http://styletil.es/">Style Tiles</a> to <strong>communicate the visual elements of the online brand</strong> to the client. After further requirements gathering I was able to produce templated <strong>web designs</strong> for the homepage, category pages and content pages.</p>
							
							<p><img data-src="img/multicomm-business.png" alt="Multicomm Website Screenshot" class="lazy-load img-shadow margin-bottom-20"></p>
							
							<p class="h3 subheading padding-0 margin-top-40 margin-bottom-0">The build</p>
							<p>For the build, I chose to use <strong>Bootstrap</strong> as my <strong>CSS framework</strong>, as it would allow for rapid <strong>web development</strong>. I used a basic <strong>PHP mail script</strong> to add functionality to the form, and leveraged the <strong>Google Maps API</strong> to display the client's three office locations on the one map.</p>
							
							<p>
								<div class="item">
									<a href="img/multicomm-code.png" data-lightbox="code" data-title="Sample of HTML code">
										<img data-src="img/multicomm-code.png" alt="HTML" class="lazy-load img-shadow">
									</a>
								</div>
							</p>
							
							
							<p class="h3 subheading padding-0 margin-top-40 margin-bottom-0">The result</p>
							<p>The result was a fully <strong>responsive website</strong> which the client was extremely pleased with, and is still live at the time of publishing this case study.</p>
							


							<!-- additional screenshots -->
							<p class="h3 subheading padding-0 margin-top-20">Additional screenshots</p>
							<div class="owl-carousel owl-theme">
								<div class="item">
									<a href="img/multicomm-mobile-home.png" data-lightbox="multicomm" data-title="Mobile homepage"><img class="lazy-load" data-src="img/multicomm-mobile-home.png" /></a>
								</div>
								<div class="item">
									<a href="img/multicomm-mobile-nav.png" data-lightbox="multicomm" data-title="Mobile navigation"><img class="lazy-load" data-src="img/multicomm-mobile-nav.png" /></a>
								</div>
								<div class="item">
									<a href="img/multicomm-mobile-page.png" data-lightbox="multicomm" data-title="Product page"><img class="lazy-load" data-src="img/multicomm-mobile-page.png" /></a>
								</div>
								<div class="item">
									<a href="img/multicomm-mobile-contact.png" data-lightbox="multicomm" data-title="Contact form"><img class="lazy-load" data-src="img/multicomm-mobile-contact.png" /></a>
								</div>
								<div class="item">
									<a href="img/multicomm-style-tile.png" data-lightbox="multicomm" data-title="brand elements"><img class="lazy-load" data-src="img/multicomm-style-tile.png" style="border: 1px solid #d1d1d0" /></a>
								</div>								
							</div>
							<p class="margin-bottom-40">&nbsp;</p>

						</div>
						<!-- end page specific content -->
						
						

						<!-- additional project info -->
						<?php include('inc/_sidebar.php'); ?>


					</div>
					<!-- end container -->

					<!-- next & prev slides -->
					<?php include('inc/_project-slides.php'); ?>

				</article>

			</div>

		</div>
	</div>
	<!-- end iiNet Plan Refreshes -->

	<!-- include footer -->
	<?php include('inc/_footer.php'); ?>

	<!-- page specific scripts -->
	<script>
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
	</script>

</body>