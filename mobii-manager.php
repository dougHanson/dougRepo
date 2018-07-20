<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Doug Hanson">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Mobile App Design | Doug Hanson | Web and Mobile Design, Perth</title>
	<meta name="description" content="Doug Hanson is a web designer and front end developer from Perth, Western Australia.">
	<meta name="keywords" content="mobii manager, web design, designer, web development, front end developer, ux design, perth, doug hanson">

	<!-- build:css -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,600|Dancing+Script" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/styles.css" media="all">
	<!-- endbuild -->

	<!-- individual banner styles -->
	<style>
		.title h1 {	color: #636362;	padding: 15px; }
		.bg-img {	background: #fcece3; background: -webkit-linear-gradient(to left, #fdedf7, #fcecdf); background: linear-gradient(to left, #fdedf7, #fcecdf); }		
		.bg-img img {	min-width: auto; min-height: auto; width: 685px; right: 50px; top: 50px; }	
		.intro-effect-jam3.modify .bg-img img { top: -40px;	}			
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
	// Mobii Manager
	$project = 'mobii_manager'; 
?>

	<!-- include frames and nav -->
	<?php include('inc/_nav.php'); ?>

	<div class="wrapper__outer">
		<div class="wrapper__inner">

			<div id="container" class="intro-effect-jam3">

				<!-- header image -->
				<header class="header">
					<div class="bg-img">
						<img src="img/mobii-manager-big.png" alt="Mobile App Design" />
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
						#################################### -->>
						<div class="col-lg-9">

							<p class="h3 subheading padding-0 margin-0">At a glance</p>
							<p class="margin-bottom-40">iiNet had just released shiny new mobile broadband hardware, which was using the generic Huawei Android app to operate the hardware. I designed a tailored iiNet Android app which strengthened the brand, whilst providing a better user experience than the generic app. </p>
							<p><img src="img/mobii-designs.png" class="margin-bottom-20 img-responsive" alt=""></p>
							
							
							<p class="h3 subheading padding-0 margin-0">The process</p>
							<p>To kick the project off, I met with Product Managers to understand to conduct <strong>requirements gathering</strong> for the project. After toying with some <strong>paper sketches</strong>, I turned the best ones into <strong>high fidelity wireframes</strong> to seek intitial stakeholder feedback. Once all stakeholders were happy with the look and feel, I developed a <strong>rapid prototype using basic HTML, CSS &amp; JavaScript</strong>. This allowed me to demonstrate the desired <strong>UX and interactions</strong> to the external development agency, whom then turned my prototype into a <strong>native Android app</strong>.</p>
							<p><img src="img/mobii-designs-2.png" class="margin-bottom-20 img-responsive" alt=""></p>
							<p><img src="img/mobii-designs-3.png" class="img-responsive" alt=""></p>
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