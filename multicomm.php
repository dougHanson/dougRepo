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

	<style>
		.title { width: auto; }
		@media (max-width: 2000px) {
			.title h1 { text-shadow: 1px 1px 2px #636362; transition: 0.5s; }
			.intro-effect-jam3.modify .title h1 { text-shadow: none; transition: 0.5s; }
		}			
	</style>		
	
</head>

<body class="project-page">	


<?php /* ####################
					DEFINE PROJECT 
############################# */ ?>
<?php 
	$title = 'Multicomm Website';
	$client = 'Multicomm';
	//$brand_colours = [ '#ff8200', '#d21f2a', '#0090ab', '#808080', '#fff' ];
	//$year = '2016';		
	$skills = array('HTML5', 'CSS3', 'jQuery', 'branding', 'PHP', 'UX design', 'logo design', 'interaction design', 'freelance');
	
	$website = 'www.multicomm.com.au';	
	$website_url = '//www.multicomm.com.au/';
	
	$next_project = array('iinet-plan-pages', 'iiNet Plan Page Redesign');
	$previous_project = array('mobii-manager', 'Mobii Manager');
?>
	
	

<!-- include frames and nav --> 	
<?php include('inc/_nav.php'); ?>

	<!-- iiNet plan refreshes -->
	<div class="wrapper">		
		<div class="wrapper__outer">

			<div id="container" class="intro-effect-jam3" style="position: relative;">	
				
				<header class="header">
					<div class="bg-img">
						<img src="img/multicomm-header.jpg" alt="" />
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
							<p>Multicomm's new website was a freelance project I completed in my spare time. Keeping nothing but the original colours, it began with a rebranding exercise, including the design of a new logo. This led to wireframes, designs, and eventually the build&nbsp;and&nbsp;implementation.</p>
							<p><img src="img/multicomm-business.png" alt="" / style="max-width: 100%; box-shadow: 0px 15px 25px #636362;"></p>
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
	
