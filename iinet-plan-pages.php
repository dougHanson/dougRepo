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
	<link rel="stylesheet" href="css/styles.css" media="all">
	<!-- endbuild -->

	<!-- individual banner styles -->
	<style>
		.title h1 { color: #636362; }		
		.intro-effect-jam3.modify .bg-img {	top: -47px;	transition: 0.5s; }		
		@media (max-width: 1400px) {
			.title h1 {	background: #fcfcfc; padding: 15px;	}
			.intro-effect-jam3.modify .title h1 { background: none; padding: 0; margin-top: -2px;	}
		}
		@media (max-width: 768px) {
			.bg-img img { right: -110px; top: -40px; }
			.intro-effect-jam3.modify .bg-img img { top: -60px;	}
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
							<p>iiNet's core product pages presented a complex user experience. They were not responsive, and were no longer aligned with the brand. Each product page also had a unique interface and layout, confusing potential customers and customer service representatives. This presented an opportunity to improve the user experience, by simplifying these pages and unifying them with each other and the brand. </p>

							<p class="h3 subheading padding-0 margin-0">The process</p>
							<p>To begin gathering <strong>user requirements</strong>, I conducted a <strong>focus group</strong> with customer service reps, to identify pain points with the existing design. This gave insight not only into what users like and dislike, but also what users do, how they do it, and what frustrates them. I then conducted an <strong>expert review</strong> and a <strong>competitor analysis</strong>, to investigate the best way to solve the identified problems.</p>
							<p>Iterations of <strong>wireframes and designs</strong> followed, and reviewed by key stakeholders at each major step. Once a very basic <strong>prototype</strong> was ready, <strong>user testing sessions</strong> were then conducted with a handful of users, which allowed us to identify any remaining issues and refine the design further.</p>

							<p><img data-src="img/iinet-plan-pages-naked-dsl.png" alt="iiNet Product Page Refresh" class="lazy-load img-shadow"></p>
							<p class="margin-bottom-40">&nbsp;</p>
							
							<p class="h3 subheading padding-0 margin-0">The code</p>
							<p>A sample of the AngularJS code, more to come.</p>

							<p>
								<div class="item">
									<a href="img/iinet-plan-pages-code.png" data-lightbox="code" data-title="Sample of AngularJS">
										<img data-src="img/iinet-plan-pages-code.png" alt="AngularJS code" class="lazy-load img-shadow">
									</a>
								</div>
							</p>
							<p class="margin-bottom-20">&nbsp;</p>							

							<p class="h3 subheading padding-0 margin-0">The result</p>
							<p>The new design was created with a stepped approach, making it easy for users to understand. Each plan is broken out into its own box, with emphasis on the benefit (the quota) rather than the price. The address check field was previously overlooked, so this was given more prominence as the first step. Large checkboxes have a very distinct active state to make it clear to the user what they have chosen.</p>
							<p>The new responsive pages reduce cognitive load by breaking down the plan customisation into intuitive steps. Both <strong>conversion and bounce rates improved once the new pages were released</strong>.</p>

							<!-- additional screenshots -->
							<p class="h3 subheading padding-0 margin-top-40">Additional screenshots</p>
							<div class="owl-carousel owl-theme">
								<div class="item">
									<a href="img/iinet-plan-pages-mobile-banner.png" data-lightbox="iinet-plan-pages" data-title="Campaign banner"><img data-src="img/iinet-plan-pages-mobile-banner.png" class="lazy-load" /></a>
								</div>
								<div class="item">
									<a href="img/iinet-plan-pages-mobile-plans.png" data-lightbox="iinet-plan-pages" data-title="Broadband plans"><img data-src="img/iinet-plan-pages-mobile-plans.png" class="lazy-load"  /></a>
								</div>
								<div class="item">
									<a href="img/iinet-plan-pages-mobile-signup.png" data-lightbox="iinet-plan-pages" data-title="Signup summary"><img data-src="img/iinet-plan-pages-mobile-signup.png" class="lazy-load"  /></a>
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


</body>
