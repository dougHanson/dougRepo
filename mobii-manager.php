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

<?php /* ####################
					DEFINE PROJECT 
############################# */ 
	
	$title = '<span class="hidden-xxs">Mobii Manager</span> App Design';
	$client = 'iiNet';
	//$brand_colours = [ '#ff8200', '#d21f2a', '#0090ab', '#808080', '#fff' ];
	$year = '2014';		
	$skills = array('mobile app design', 'UI/UX', 'interaction design', 'Adobe Photoshop');
	
	//$website = 'www.iinet.net.au';	
	//$website_url = '//www.iinet.net.au/internet-products/broadband/adsl';
	
	$next_project = array('multicomm', 'Multicomm Website');
	$previous_project = array('iinet-plan-pages', 'iiNet Plan Page Redesign');
?>


			<!-- include frames and nav -->
			<?php include('inc/_nav.php'); ?>

				<!-- Mobii Manager -->
				<div class="wrapper">
					<div class="wrapper__outer">

						<div id="container" class="intro-effect-jam3">

							<header class="header">
								<div class="bg-img">
									<img src="img/mobii-manager-big.png" alt="Mobile App Design" />
								</div>
							</header>

							<div class="container">
								<div class="title">
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
										<p class="margin-bottom-40">iiNet had just released shiny new mobile broadband hardware, which was using the generic Huawei Android app to operate the hardware. I designed a tailored iiNet Android app which strengthened the brand, whilst providing a better user experience than the generic app. Once all stakeholders were happy with the design, I worked with an external development agency, guiding them through the anitcipated UX and interactions, as well as supplying all graphical elements.</p>
										<p><img src="img/mobii-designs.png" class="margin-bottom-20 img-responsive" alt=""></p>
										<p><img src="img/mobii-designs-2.png" class="margin-bottom-20 img-responsive" alt=""></p>
										<p><img src="img/mobii-designs-3.png" class="img-responsive" alt=""></p>
										<p class="margin-bottom-40">&nbsp;</p>

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

				<script>
					//Scroll page back to top on refresh, to ensure loading effect is maintained
					$(window).on('beforeunload', function() {
						$(window).scrollTop(0), 5000;
					});	
				</script>		

</body>