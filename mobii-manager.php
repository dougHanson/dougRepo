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
	
	<style>
		.title { width: auto; }
		.title h1 { color: #636362; padding: 15px; transition: 0.5s;}
		@media (max-width: 1580px) {
			.title h1 { color: #636362; background: #fcfcfc; padding: 15px; transition: 0.5s; }
			.intro-effect-jam3.modify .title h1 { background: none; transition: 0.5s;}
		}			
	</style>	


</head>

<body class="project-page">	


<?php /* ####################
					DEFINE PROJECT 
############################# */ ?>
<?php 
	$title = 'Mobii Manager App Design';
	$client = 'iiNet';
	//$brand_colours = [ '#ff8200', '#d21f2a', '#0090ab', '#808080', '#fff' ];
	$year = '2016';		
	$skills = array('mobile app design',  'UI/UX', 'interaction design', 'Adobe Photoshop');
	
	//$website = 'www.iinet.net.au';	
	//$website_url = '//www.iinet.net.au/internet-products/broadband/adsl';
	
	$next_project = array('multicomm', 'Multicomm Website');
	$previous_project = array('iinet-plan-pages', 'iiNet Plan Page Redesign');
?>


<!-- include frames and nav --> 	
<?php include('inc/_nav.php'); ?>

	<!-- iiNet plan refreshes -->
	<div class="wrapper">		
		<div class="wrapper__outer">

			<div id="container" class="intro-effect-jam3" style="position: relative;">	
				
				<header class="header">
					<div class="bg-img">
						<img src="img/mobii-manager-header.jpg" alt="Mobile App Design" />
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
							<p class="margin-bottom-40">iiNet had just released  shiny new mobile broadband hardware, which was using the generic Huawei Android app to operate the hardware. I designed a tailored iiNet Android app which strengthened the brand, whilst providing a better user experience than the generic app. Once all stakeholders were happy with the design, I worked with an external development agency, guiding them through the anitcipated UX and interactions, as well as supplying all graphical elements.</p>
							<p><img src="img/mobii-designs.png" class="margin-bottom-20" alt="" / style="max-width: 100%; float: left;"></p>
							<p><img src="img/mobii-designs-2.png" class="margin-bottom-20" alt="" / style="max-width: 100%; float: left;"></p>
							<p><img src="img/mobii-designs-3.png" alt="" / style="max-width: 100%; float: left;"></p>
							<p class="margin-bottom-40"><!-- --></p>
							

							<!--<div class="owl-carousel owl-theme">
								<div class="item"><img src="img/iinet-plan-pages-mobile-banner.png" /></div>
								<div class="item"><img src="img/iinet-plan-pages-mobile-signup.png" /></div>
							</div>-->
							
			
							<p class="margin-bottom-40"><!-- --></p>		

						</div>

						<!-- additional project info -->
						<?php include('inc/_sidebar.php'); ?>	
					

					</div> <!-- end container -->

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
		$(window).on('beforeunload', function(){
			$(window).scrollTop(0);
		});	

		$('.owl-carousel').owlCarousel({
				loop:true,
				margin:10,
				nav:false,
				autoHeight:true,
				responsive:{
						0:{
								items:1
						},
						600:{
								items:2
						},
						1000:{
								items:2
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
					if ( viewportWidth > 1200 ) {
						sidebar.css('top', y - 700);
					}
					else {
						sidebar.css('top', 0);	
					}
				}
			});

		});
	</script>	
	
</body>
	
