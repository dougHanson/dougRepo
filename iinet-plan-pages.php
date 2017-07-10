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
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,600|Dancing+Script" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/styles.css" media="all">
	<!-- endbuild -->

	<style>
		.title {
			width: auto;
		}
		
		.title h1 {
			color: #636362;
			padding: 0px;
		}
		
		.intro-effect-jam3.modify .bg-img img {
			top: -47px;
			transition: 0.5s;
		}
		
		.bg-img img {
			transition: 0.5s;
			top: 0;
		}
		
		@media (max-width: 1400px) {
			.title h1 {
				color: #636362;
				background: #fcfcfc;
				padding: 15px;
				transition: 0.5s;
			}
			.intro-effect-jam3.modify .title h1 {
				background: none;
				transition: 0.5s;
				padding: 0;
				margin-top: -2px;
			}
		}
		
		@media (max-width: 960px) {
			.bg-img img {
				right: -110px;
				top: -40px;
				transition: 0.5s;
			}
			.intro-effect-jam3.modify .bg-img img {
				top: -60px;
				transition: 0.5s;
			}
		}
	</style>


</head>

<body class="project-page">


	<?php /* ####################
					DEFINE PROJECT 
############################# */ ?>
		<?php 
	$title = '<span class="hidden-xxs">iiNet</span> Product Page Redesign';
	$client = 'iiNet';
	//$brand_colours = [ '#ff8200', '#d21f2a', '#0090ab', '#808080', '#fff' ];
	//$year = '2016';		
	$skills = array('HTML5', 'CSS3', 'PHP', 'Angular JS', 'User Testing', 'SASS', 'OOCSS/BEM');
	
	$website = 'www.iinet.net.au';	
	$website_url = '//www.iinet.net.au/internet-products/broadband/naked-dsl';
	
	$next_project = array('mobii-manager', 'Mobii Manager');
	$previous_project = array('multicomm', 'Multicomm Website');
?>



			<!-- include frames and nav -->
			<?php include('inc/_nav.php'); ?>

				<!-- iiNet plan refreshes -->
				<div class="wrapper">
					<div class="wrapper__outer">

						<div id="container" class="intro-effect-jam3" style="position: relative;">

							<header class="header">
								<div class="bg-img">
									<img src="img/iinet-plan-pages-header.jpg" alt="" />
								</div>
							</header>

							<div class="container">
								<div class="col-sm-12 title">
									<h1 class="font-bold grey-6"><?php print $title ?></h1>
								</div>
							</div>

							<article class="content">
								<div class="container">


									<!-- content -->
									<div class="col-lg-9">

										<!-- brand colours -->
										<p class="margin-0">
											<?php if(isset($brand_colours)) { foreach ($brand_colours as $a_colour) { ?>
												<span class="brand-colour" style="background: <?php print $a_colour ?>"> </span>
												<?php	} } ?>
										</p>

										<!-- copy -->
										<p class="h3 subheading padding-0 margin-0">At a glance</p>
										<p>iiNet's core product pages presented a complex user experience. They were not responsive, and were no longer aligned with the brand. Each product page also had a unique interface and layout, confusing potential customers and customer service representatives. This presented an opportunity to improve the user experience, by simplifying these pages and unifying them with each other and the brand. </p>
										<p><img src="img/iinet-plan-pages-naked-dsl.png" alt="iiNet Product Page Refresh" class="img-shadow"></p>
										<p class="margin-bottom-40">&nbsp;</p>


										<p class="h3 subheading padding-0 margin-0">The process</p>
										<p>The new design was created with a stepped approach, making it easy for users to understand. User testing sessions were then conducted with a handful of customer service reps, which allowed us to identify pain points for users and refine the design further to highlight key plan features.</p>
										<p>Each plan is broken out into its own box, with emphasis on the benefit (the quota) rather than the price. Large checkboxes are with a very distinct active state to make it clear to the user what they have chosen.</p>



										<p class="h3 subheading padding-0 margin-0">The result</p>
										<p>The new responsive pages reduce cognitive load by breaking down the plan customisation into intuitive steps. Both conversion and bounce rates improved once the new pages were released.</p>



										<p class="h3 subheading padding-0 margin-0">Additional screenshots</p>
										<div class="owl-carousel owl-theme">
											<div class="item"><img src="img/iinet-plan-pages-mobile-banner.png" /></div>
											<div class="item"><img src="img/iinet-plan-pages-mobile-plans.png" /></div>
											<div class="item"><img src="img/iinet-plan-pages-mobile-signup.png" /></div>
										</div>


										<p class="margin-bottom-40">
											<!-- -->
										</p>

									</div>

									<!-- additional project info -->
									<?php include('inc/_sidebar.php'); ?>


								</div>
								<!-- end container -->

								<!-- next & prev slides -->
								<div style="margin-top:150px;">
									<?php include('inc/_project-slides.php'); ?>
								</div>

							</article>

						</div>

					</div>
				</div>
				<!-- end iiNet Plan Refreshes -->

				<!-- include footer -->
				<?php include('inc/_footer.php'); ?>


					<script type="text/javascript">
						$(window).on('beforeunload', function() {
							$(window).scrollTop(0), 1000;
						});

						$('.owl-carousel').owlCarousel({
							loop: true,
							margin: 10,
							nav: false,
							//autoHeight:true,
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
						})

						$(function() {

							var sidebar = $('.sidebar');
							var top = sidebar.offset().top;

							$(window).scroll(function(event) {
								var viewportWidth = $(window).width();
								var y = $(this).scrollTop() + 400;
								if (y >= top) {
									if (viewportWidth > 1200) {
										sidebar.css('top', y - 700);
									} else {
										sidebar.css('top', 0);
									}
								}
							});

						});
					</script>

</body>