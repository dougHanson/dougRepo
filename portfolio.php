<!DOCTYPE html>
<html lang="en-AU">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Doug Hanson">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Fetch AngularJS Web Application | Doug Hanson | Web Development and Design, Perth</title>
	<meta name="description" content="Website rebuild case study by Doug Hanson, a web designer and front end developer from Perth, Western Australia.">
	<meta name="keywords" content="fetch, web design, designer, web development, front end developer, ux design, iinet, perth, doug hanson">

	<!-- build:css -->
	<link rel="stylesheet" href="css/styles.css" media="all">
	<!-- endbuild -->

</head>

<?php 	
	// DECLARE PROJECT VARIABLE - refer to data.js
	$project = 'fetch'; 
?>
	
<body class="project-page" id="<?php echo $project ?>">

	<!-- include frames and nav -->
	<?php include('inc/_nav.php'); ?>

	<div class="wrapper__outer">
		<div class="wrapper__inner">

			<div id="container" class="intro-effect-jam3">

				<!-- header image -->
				<header class="header">
					<div class="bg-img">
						<img data-src="img/fetch.jpg" class="lazy-load" alt="Fetch TV" />
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
							<p>Lorem ipsum.</p>

							<p class="h3 subheading padding-0 margin-0">The process</p>
							<p>lorem ipsum.</p>

							<img src="img/loading.gif" data-src="img/fetch.png" alt="" class="lazy-load img-shadow img-center margin-bottom-20">
							<p>&nbsp;</p>
							
							<p class="h3 subheading padding-0 margin-0">The build</p>
							<p>lorem ipsum.</p>

							
							<div class="item margin-bottom-20">
								<a href="img/iinet-plan-pages-code.png" data-lightbox="code" data-title="Sample of AngularJS code">
									<img src="img/loading.gif" data-src="img/iinet-plan-pages-code.png" alt="Sample AngularJS code" class="lazy-load img-shadow img-center">
								</a>
							</div>
							<p>&nbsp;</p>
											

							<p class="h3 subheading padding-0 margin-0">The result</p>
							<p>lorem ipsum.</p>

							<!-- additional screenshots -->
							<p class="h3 subheading padding-0 margin-top-40">Additional screenshots</p>
							<div class="owl-carousel owl-theme">
								<div class="item">
									<a href="img/iinet-plan-pages-mobile-banner.png" data-lightbox="iinet-plan-pages" data-title="Campaign banner"><img src="img/loading.gif" data-src="img/iinet-plan-pages-mobile-banner.png" class="lazy-load img-center" /></a>
								</div>
								<div class="item">
									<a href="img/iinet-plan-pages-mobile-plans.png" data-lightbox="iinet-plan-pages" data-title="Broadband plans"><img src="img/loading.gif" data-src="img/iinet-plan-pages-mobile-plans.png" class="lazy-load img-center" /></a>
								</div>
								<div class="item">
									<a href="img/iinet-plan-pages-mobile-signup.png" data-lightbox="iinet-plan-pages" data-title="Signup summary"><img src="img/loading.gif" data-src="img/iinet-plan-pages-mobile-signup.png" class="lazy-load img-center" /></a>
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