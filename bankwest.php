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

<?php $project = 'bankwest'; ?>


	<!-- include frames and nav -->
	<?php include('inc/_nav.php'); ?>

	<!-- iiNet plan refreshes -->
	<div class="wrapper__outer">
		<div class="wrapper__inner">

			<div id="container" class="intro-effect-jam3">

				<header class="header">
					<div class="bg-img">
						
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
								<?php } } ?>
							</p>	
							
							<p id="projectBrandColours"></p>

					

						</div>

						<!-- additional project info -->
						<?php include('inc/_sidebar.php'); ?>

					</div>
					<!-- end container -->

					<!-- next & prev slides -->
					<div>
						<?php include('inc/_project-slides.php'); ?>
					</div>

				</article>

			</div>

		</div>
	</div>
	<!-- end iiNet Plan Refreshes -->

	<!-- include footer -->
	<?php include('inc/_footer.php'); ?>


</body>