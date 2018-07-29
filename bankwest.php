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
		.title h1 { padding: 15px; color: #636362; background: rgba(255, 255, 255, 0.8); }
		.intro-effect-jam3.modify .title h1 { background: none; margin-top: -10px; padding: 0; }
		
		.bg-img {	
			background: #efefef;  /* fallback for old browsers */
			background-image: linear-gradient(to top, #ffecd2 0%, #fcb69f 100%); /*juicy peach */
			border-bottom: 1px solid #dfdfdf;
			/*background-image: radial-gradient(73% 147%, #EADFDF 59%, #ECE2DF 100%), radial-gradient(91% 146%, rgba(255,255,255,0.50) 47%, rgba(0,0,0,0.50) 100%);
 			background-blend-mode: screen;*/ /*elegance */	
		}
		.bg-img img { 
			min-width: auto; min-height: auto;
			width: 500px; 
			right: -150px; 
			top: 70px; 
		}	
		.intro-effect-jam3.modify .bg-img img { 
			top: -40px; 
			right: 20px; 
			width: 320px; 
		}
		
		@media (min-width: 375px) {
			.bg-img img { 
				right: -80px; 
				top: 70px; 
			}			
			.intro-effect-jam3.modify .title h1 { margin-top: 0px; }	
		}
		
		@media (min-width: 768px) {
			.bg-img img { 
				width: 600px;
				right: 0;
				top: 120px;
			}
			.intro-effect-jam3.modify .bg-img img { 
				top: -40px; 
				right: 30px; 
				width: 400px; 
			}
			.intro-effect-jam3.modify .title { top: 250px; }
		}	
		
		@media (min-width: 992px) {
			.bg-img img { 
				right: -50px; 
			}
			.intro-effect-jam3.modify .bg-img img { 
				right: 50px; 
			}			
		}	
		
		@media (min-width: 1360px) {
			.title { background: none; }
			.bg-img img { 
				width: 700px; 
				top: 10px; 
				right: 50px; 
			}
			.intro-effect-jam3.modify .bg-img img { 
				right: 15%; 
				top: -90px;
				width: 500px;
			}
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
						<img class="img-center lazy-load" src="img/sun.min.png" data-src="img/sun-large.png" alt="Bankwest Digital Design" />
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

							<!-- <p class="h3 subheading padding-0 margin-0">At a glance</p> -->
							<p>Over 6 years working at Bankwest allowed me to produce a variety of online digital creative. Below is a sample. </p>
							
							
							<p class="h3 subheading padding-0 margin-0">Website</p>
							<p>Designed and implemented changes to the existing Bankwest website. Was involved with large scale development projects, including a <strong>website refresh</strong> which included defining <strong>taxonomy, information architecture, developing UI and graphical elements</strong>, and generating content. The new website was integrated with an <strong>enterprise content management system</strong>, namely <strong>Fatwire&nbsp;CMS</strong>. </p>
							<div class="item margin-bottom-20">
									<img src="img/loading.gif" data-src="img/bankwest-site.jpg" alt="Bankwest eDM" class="lazy-load img-center img-shadow">
							</div>
							<p>&nbsp;</p>
							
							
							<p class="h3 subheading padding-0 margin-0">Landing pages</p>
							<p>A large number of on-brand, dynamic <strong>campaign landing pages</strong> were developed using <strong>HTML, CSS, Javascript and JQuery</strong>. These were designed to have a single call to action, driving sales through the online application&nbsp;system. </p>

							<div class="owl-carousel owl-theme">
								<div class="item">
										<img src="img/loading.gif" data-src="img/bankwest-landing-mobile.png" alt="Bankwest eDM" class="lazy-load img-center img-responsive">
								</div>
								<div class="item">
										<img src="img/loading.gif" data-src="img/bankwest-landing-page-more.jpg" alt="Bankwest eDM" class="lazy-load img-center img-responsive">
								</div>									
							</div>

						
						
							<p class="h3 subheading padding-0 margin-bottom-0 margin-top-20">eDMs</p>
							<p>Optimised for viewing on mobile devices, I created eDMs which rendered well in all major email clients, using clean code and best practices for conversion.</p>	
						
							<div class="owl-carousel owl-theme">		
								<div class="item">
										<img src="img/loading.gif" class="lazy-load img-center img-responsive" data-src="img/bankwest-edm-service.png" />
								</div>	
								<div class="item">
										<img src="img/loading.gif" class="lazy-load img-center img-responsive" data-src="img/bankwest-edm-sales.png" />
								</div>
							</div>
						

							<!--<p class="h3 subheading padding-0 margin-bottom-0 margin-top-40">Calculators</p>

							<p>&nbsp;</p>		-->		
							

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
			loop: false,
			margin: 30,
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