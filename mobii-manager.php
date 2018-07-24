<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Doug Hanson">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Mobile App Design | Doug Hanson | Web and Mobile Design, Perth</title>
	<meta name="description" content="Mobile Application design case study by Doug Hanson, a web designer and front end developer from Perth, Western Australia.">
	<meta name="keywords" content="mobii manager, web design, designer, web development, front end developer, ux design, perth, doug hanson">

	<!-- build:css -->
	<link rel="stylesheet" href="css/styles.css" media="all">
	<!-- endbuild -->

	<!-- individual banner styles -->
	<style>
		
		/* mobile first */
		.title h1 {	background: #fcfcfc; color: #636362; padding: 15px; }
		.bg-img {	
			background: rgba(247,143,29,.4); 
			background: -webkit-linear-gradient(to left, rgba(247,143,29,.3), rgba(189,18,52,.3)); 
			background: linear-gradient(to left, rgba(247,143,29,0.3), rgba(189,18,52,0.3)); 
		}			
		.bg-img img { 
			top: 20px; 
			right: -160px; 
			min-width: auto; 
			min-height: auto; 
			width: 725px;
		}	
		.intro-effect-jam3.modify .bg-img img { 
			top: 0px;
			right: -40px; 			 
			width: 400px; 
		}
		
		@media (min-width: 768px) {
			.bg-img img { 
				top: 90px; 
				right: -60px; 
			}
			.intro-effect-jam3.modify .bg-img img { 
				top: 0px; 
				right: -20px; 				
				width: 582px; 
			}			
		}
		
		@media (min-width: 992px) {
			.bg-img img { 
				right: 0px; 
			}
			.intro-effect-jam3.modify .bg-img img { 
				right: 80px;
			}	
			.intro-effect-jam3.modify .title h1 {
				background: none;
				margin-top: -10px; 
			}
		}	
		
		@media (min-width: 1670px) {
			.title h1 {	background: none; }
			.bg-img img { 
				right: 10%; 
			}
			.intro-effect-jam3.modify .bg-img img { 
				right: 10%; 
				top: 0px; 
				width: 640px; 
			}				
		}			
		
		
		
		
	</style>
</head>
	

<body class="project-page">

<?php 
	// DECLARE PROJECT VARIABLE - refer to data.js
	// Mobii Manager
	$project = 'mobii_manager'; 
	//include('inc/_skeleton.php'); 	
?>

	<!-- include frames and nav -->
	<?php include('inc/_nav.php'); ?>

	<div class="wrapper__outer">
		<div class="wrapper__inner">

			<div id="container" class="intro-effect-jam3">

				<!-- header image -->
				<header class="header">
					<div class="bg-img">
						<img class="lazy-load" data-src="img/mobii-header.png" alt="Mobile App Design" />
					</div>
				</header>

				<!-- heading -->
				<div class="container">
					<div class="title">
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
							<p class="margin-bottom-40">iiNet had just released shiny new mobile broadband hardware, which was using the generic Huawei Android app to operate the hardware. I designed a tailored iiNet Android app which strengthened the brand, whilst providing a better user experience than the generic&nbsp;app. </p>

							
							<div class="owl-carousel owl-theme margin-bottom-20">
								<div class="item">
									<a href="img/mobii-02.png" data-lightbox="mobii" data-title="Mobii Manager"><img class="lazy-load" data-src="img/mobii-02.png" /></a>
								</div>
								<div class="item">
									<a href="img/mobii-05.png" data-lightbox="mobii" data-title="Mobii Manager"><img class="lazy-load" data-src="img/mobii-05.png" /></a>
								</div>	
								<div class="item">
									<a href="img/mobii-11.png" data-lightbox="mobii" data-title="Mobii Manager"><img class="lazy-load" data-src="img/mobii-11.png" /></a>
								</div>	
								<div class="item">
									<a href="img/mobii-12.png" data-lightbox="mobii" data-title="Mobii Manager"><img class="lazy-load" data-src="img/mobii-12.png" /></a>
								</div>	
								<div class="item">
									<a href="img/mobii-13.png" data-lightbox="mobii" data-title="Mobii Manager"><img class="lazy-load" data-src="img/mobii-13.png" /></a>
								</div>									
								<div class="item">
									<a href="img/mobii-06.png" data-lightbox="mobii" data-title="Mobii Manager"><img class="lazy-load" data-src="img/mobii-06.png" /></a>
								</div>
								<div class="item">
									<a href="img/mobii-07.png" data-lightbox="mobii" data-title="Mobii Manager"><img class="lazy-load" data-src="img/mobii-07.png" /></a>
								</div>	
								<div class="item">
									<a href="img/mobii-08.png" data-lightbox="mobii" data-title="Mobii Manager"><img class="lazy-load" data-src="img/mobii-08.png" /></a>
								</div>	
								<div class="item">
									<a href="img/mobii-09.png" data-lightbox="mobii" data-title="Mobii Manager"><img class="lazy-load" data-src="img/mobii-09.png" /></a>
								</div>	
								<div class="item">
									<a href="img/mobii-10.png" data-lightbox="mobii" data-title="Mobii Manager"><img class="lazy-load" data-src="img/mobii-10.png" /></a>
								</div>	
							</div>							
							
							
							<p class="h3 subheading padding-0 margin-0">The process</p>
							<p>To kick the project off, I met with Product Managers to understand to conduct <strong>requirements gathering</strong> for the project. After toying with some <strong>paper sketches</strong>, I turned the best ones into <strong>high fidelity wireframes</strong> to seek intitial stakeholder feedback. Once all stakeholders were happy with the look and feel, I developed a <strong>rapid prototype using basic HTML, CSS &amp; JavaScript</strong>. This allowed me to demonstrate the desired <strong>UX and interactions</strong> to the external development agency, whom then turned my prototype into a <strong>native&nbsp;Android&nbsp;app</strong>.</p>
							

							<p class="margin-top-40"><img data-src="img/mobii-manager-big-light.png" class="lazy-load img-responsive img-center" alt=""></p>

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
			//lazyLoad: true,
			margin: 20,
			nav: false,
			responsive: {
				0: {
					items: 2
				},
				600: {
					items: 3
				},
				1400: {
					items: 4
				}
			}
		});
	</script>

</body>