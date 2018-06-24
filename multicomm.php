<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Doug Hanson">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Multicomm Website | Doug Hanson | Web Design and Development, Perth</title>
	<meta name="description" content="Doug Hanson is a web designer and front end developer from Perth, Western Australia.">
	<meta name="keywords" content="multicomm, web design, designer, web development, front end developer, ux design, perth, doug hanson">

	<!-- build:css -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,600|Dancing+Script" rel="stylesheet" type="text/css">
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
	
<?php $project = 'multicomm'; ?>

	<!-- include frames and nav -->
	<?php include('inc/_nav.php'); ?>

	<!-- Multicomm -->
	<div class="wrapper__outer">
		<div class="wrapper__inner">

			<div id="container" class="intro-effect-jam3">

				<header class="header">
					<div class="bg-img">
						<img src="img/multicomm-header.jpg" alt="Multicomm Website Development" />
					</div>
				</header>

				<div class="container">
					<div class="col-sm-12 title">
						<h1 class="font-bold grey-6" id="projectTitle"></h1>
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
							<p>Multicomm's new website was a freelance project I completed in my spare time. Keeping nothing but the original colours, it began with a rebranding exercise, including the design of a new logo. This led to wireframes, designs, and eventually the build&nbsp;and&nbsp;implementation.</p>
							<!--<p><img src="img/multicomm-devices.png" alt="Multicomm Website Screenshot" class="img-responsive"></p>-->
							<p><img src="img/multicomm-business.png" alt="Multicomm Website Screenshot" class="img-shadow"></p>
							<p class="margin-bottom-40">&nbsp;</p>

							<p class="h3 subheading padding-0 margin-top-40">Additional screenshots</p>
							<div class="owl-carousel owl-theme">
								<div class="item">
									<a href="img/multicomm-mobile-home.png" data-lightbox="multicomm" data-title="Mobile homepage"><img src="img/multicomm-mobile-home.png" /></a>
								</div>
								<div class="item">
									<a href="img/multicomm-mobile-nav.png" data-lightbox="multicomm" data-title="Mobile navigation"><img src="img/multicomm-mobile-nav.png" /></a>
								</div>
								<div class="item">
									<a href="img/multicomm-mobile-page.png" data-lightbox="multicomm" data-title="Product page"><img src="img/multicomm-mobile-page.png" /></a>
								</div>
								<div class="item">
									<a href="img/multicomm-mobile-contact.png" data-lightbox="multicomm" data-title="Contact form"><img src="img/multicomm-mobile-contact.png" /></a>
								</div>
							</div>
							<p class="margin-bottom-40">&nbsp;</p>

						</div>

						<!-- additional project info -->
						<?php include('inc/_sidebar.php'); ?>


					</div>
					<!-- end container -->

					<!-- next & prev slides -->
					<div class="project-slides">
						<?php include('inc/_project-slides.php'); ?>
					</div>

				</article>

			</div>

		</div>
	</div>
	<!-- end iiNet Plan Refreshes -->

	<!-- include footer -->
	<?php include('inc/_footer.php'); ?>

	<script>
		//Scroll page back to top on refresh, to ensure loading effect is maintained
		$(window).on('beforeunload', function() {
			$(window).scrollTop(0), 5000;
		});	
	</script>		


</body>