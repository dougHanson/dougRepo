<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Doug Hanson">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Bankwest Digital Creative | Doug Hanson | Web Design and Development, Perth</title>
	<meta name="description" content="Digital creative and web design developed by Doug Hanson for Bankwest in Perth, Western Australia.">
	<meta name="keywords" content="bankwest, digital creative, web design, digital designer, web development, front end developer, ux design, perth, doug hanson">

	<!-- build:css -->
	<link rel="stylesheet" href="css/styles.css" media="all">
	<!-- endbuild -->

	<!-- individual banner styles -->
	<style>
		.title h1 {	color: #636362;	padding: 15px; }
		.bg-img {	
			background: #FF920B;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to top, #FCFCFB, #FF920B);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to top, #FCFCFB, #FF920B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}
		.bg-img img {	min-width: auto; min-height: auto; width: 725px; right: 30px; top: 90px; }	
		.intro-effect-jam3.modify .bg-img img { top: -200px;	}			
		@media (max-width: 1670px) {
			.title h1 {	background: #fcfcfc; }		
			.intro-effect-jam3.modify .title h1 {	background: none;	margin-top: -10px; }			
		}		
		@media (max-width: 960px) {
			.bg-img img { right: -100px; top: 20px;	}
		}			
	</style>
</head>
	

<body class="project-page">
	
<?php 
	// DECLARE PROJECT VARIABLE - refer to data.js
	// Multicomm
	$project = 'bankwest'; 
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
						<img class="lazy-load" src="img/sun.min.png" data-src="img/sun-large.png" alt="Bankwest Digital Design" />
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
							<p>Bankwest</p>
							<!--<p><img src="img/multicomm-devices.png" alt="Multicomm Website Screenshot" class="img-responsive"></p>-->
							
							<p class="h3 subheading padding-0 margin-0">The process</p>
							<p>sdfsdfsdf</p>
							
						
							
							<p>
								<div class="item">
									<a href="img/multicomm-code.png" data-lightbox="code" data-title="Sample of HTML code">
										<img data-src="img/multicomm-code.png" alt="HTML" class="lazy-load img-shadow">
									</a>
								</div>
							</p>
							
					

							<!-- additional screenshots -->
							<p class="h3 subheading padding-0 margin-top-20">Additional screenshots</p>
							<div class="owl-carousel owl-theme">
								<div class="item">
									<a href="img/sunny.png" data-lightbox="bankwest" data-title="Mobile homepage"><img class="lazy-load" data-src="img/sunny.png" /></a>
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