<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Doug Hanson">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>iiNet Plan Page Redesign | Doug Hanson | Web Design and Development, Perth</title>
	<meta name="description" content="Website rebuild case study by Doug Hanson, a web designer and front end developer from Perth, Western Australia.">
	<meta name="keywords" content="iinet plan pages, web design, designer, web development, front end developer, ux design, perth, doug hanson">

	<!-- build:css -->
	<link rel="stylesheet" href="css/styles.min.css" media="all">
	<!-- endbuild -->

	<!-- individual banner styles -->
	<style>
		/* mobile first */
		.title { padding: 15px;	background: rgba(255, 255, 255, 0.8); }
		.title h1 { background: none; color: #636362; }
		
		.intro-effect-jam3.modify .title { background: none; top: 150px; }
		.intro-effect-jam3.modify .title h1 { padding: 0; }
		
		.bg-img img { 
			top: 0; 
			right: -150px; 			
			width: 1300px; 
		}
		.intro-effect-jam3.modify .bg-img img { 
			top: -10px; 
			right: 0; 
			width: 400px; 
		}
		
		@media (min-width: 400px) {
			.bg-img img { 
				right: 0px;				
				width: 1100px; 
			}
			.intro-effect-jam3.modify .bg-img img { 
				width: 100%; 
			}
		}				
		@media (min-width: 768px) {
			.bg-img img { width: auto; }
			.intro-effect-jam3.modify .bg-img img { 
				top: -70px; 
				right: 0px; 
				width: auto; 
			}
			.intro-effect-jam3.modify .title { top: 250px; }
		}		
		@media (min-width: 992px) {
			.bg-img img { right: -50px; }
			.intro-effect-jam3.modify .bg-img img { right: -50px;  }	
			.intro-effect-jam3.modify .title h1 {	margin-top: -10px; }			
		}		
		@media (min-width: 1360px) {
			.title { background: none; }
			.bg-img img { right: 0; }
			.intro-effect-jam3.modify .bg-img img {  right: 0; }
		}						
	</style>
</head>


<body class="project-page">

<?php 	
	// DECLARE PROJECT VARIABLE - refer to data.js
	// iiNet plan page redesign and rebuild
	$project = 'product_page_redesign'; 
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
						<img data-src="img/iinet-plan-pages-header.jpg" class="lazy-load" alt="iiNet Product Page Refresh" />
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
							<p>iiNet's core product pages presented a complex user experience. They were not responsive, and were no longer aligned with the brand. Each product page also had a unique interface and layout, confusing potential customers and customer service representatives. This presented an opportunity to improve the user experience, by simplifying these pages and unifying them with each other and the&nbsp;brand.</p>

							<p class="h3 subheading padding-0 margin-0">The process</p>
							<p>To begin gathering <strong>user requirements</strong>, I conducted a <strong>focus group</strong> with customer service reps, to identify pain points with the existing design. This gave insight not only into what users like and dislike, but also what users do, how they do it, and what frustrates them. I then conducted an <strong>expert review</strong> and a <strong>competitor analysis</strong>, to investigate the best way to solve the identified problems.</p>
							<p>Iterations of <strong>wireframes and designs</strong> followed, and reviewed by key stakeholders at each major step. Once a very basic <strong>prototype</strong> was ready, <strong>user testing sessions</strong> were then conducted with a handful of users, which allowed us to identify any remaining issues and refine the design&nbsp;further.</p>

							<img src="img/loading.gif" data-src="img/iinet-plan-pages-naked-dsl.png" alt="iiNet Product Page Refresh" class="lazy-load img-shadow img-center margin-bottom-20">
							<p>&nbsp;</p>
							
							<p class="h3 subheading padding-0 margin-0">The build</p>
							<p>To begin the build, I started by coding the <strong>basic UI using HTML and SASS</strong>. The majority of UI components exist within a <strong>bespoke CSS framework which has evolved from Bootstrap</strong>, which allowed for <strong>rapid web development</strong>. I then added some additional <strong>media queries</strong> and styles to ensure the content was presentable at all breakpoints. At this stage the first round of <strong>display testing was conducted using supported browsers and devices</strong>.</p>
							<p>Once the UI was code complete, I was able to focus on building the <strong>single page AngularJS application</strong>. After adding the relevant product data to the model, the ng-repeat directive was used to cycle through each of the plans, and various <strong>Angular expressions and directives</strong> were used to bind this product's information to the view which is seen by end users. Additional <strong>JavaScript was written within the Angular Controller</strong> to control the different states of&nbsp;the&nbsp;UI.</p>

							
							<div class="item margin-bottom-20">
								<a href="img/iinet-plan-pages-code.png" data-lightbox="code" data-title="Sample of AngularJS code">
									<img src="img/loading.gif" data-src="img/iinet-plan-pages-code.png" alt="Sample AngularJS code" class="lazy-load img-shadow img-center">
								</a>
							</div>
							<p>&nbsp;</p>
											

							<p class="h3 subheading padding-0 margin-0">The result</p>
							<p>The new design was created with a stepped approach, making it easy for users to understand. Each plan is broken out into its own box, with emphasis on the benefit (the quota) rather than the price. The address check field was previously overlooked, so this was given more prominence as the first step. Large checkboxes have a very distinct active state to make it clear to the user what they have chosen.</p>
							<p>The new responsive pages reduce cognitive load by breaking down the plan customisation into intuitive steps. Both <strong>conversion and bounce rates improved once the new pages were&nbsp;released</strong>.</p>

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