<!DOCTYPE html>
<html>

<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Doug Hanson">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Interactive Jobs Portal | Doug Hanson | Web Development and Design, Perth</title>
	<meta name="description" content="Interactive jobs portal utilising Maps API. Created by Doug Hanson, a front end web developer in Perth, Western Australia.">
	<meta name="keywords" content="maps api, dept education, open maps, google maps, liferay, freemarker, web design, designer, web development, front end developer, ux design, perth, doug hanson">

	<!-- build:css -->
	<link rel="stylesheet" href="css/styles.css" media="all">
	<!-- endbuild -->

</head>

<?php 	
	// DECLARE PROJECT VARIABLE - refer to data.js
	$project = 'jobs'; 
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
						<img src="img/jobs-header.min.png" data-src="img/jobs-header.png" class="lazy-load" alt="Interactive Jobs Portal" />
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
							<p>Current job listing page was just a table, business wanted something more visual and sophisticated.</p>

							<p class="h3 subheading padding-0 margin-0">The process</p>
							<p>Met with business. Competitore analysis and expert review. Wireframes and designs. </p>

							<div class="item">
								<a href="img/jobs-thumb.png" data-lightbox="jobs" data-title="Jobs UI Design"><img src="img/loading.gif" data-src="img/jobs-thumb.png" class="lazy-load img-responsive img-center img-shadow" /></a>
							</div>				
							<p>&nbsp;</p>
							
							<p class="h3 subheading padding-0 margin-0">The build</p>
							<p>Built UI. Integrated with Freemarker to read JSON. Integrated filters/search using JPlist. Integrated maps api. Accessibility. Responsive. Can be customised by authors.</p>
							
							<div class="item margin-bottom-20">
								<a href="img/jobs-js.png" data-lightbox="code" data-title="Sample of JS code">
									<img src="img/loading.gif" data-src="img/jobs-js.png" alt="Sample AngularJS code" class="lazy-load img-shadow img-center">
								</a>
							</div>
							<p>&nbsp;</p>
											

							<p class="h3 subheading padding-0 margin-0">The result</p>
							<p>Good.</p>

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