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
	<link href="https://fonts.googleapis.com/css?family=Raleway|Dancing+Script" rel="stylesheet" type="text/css">	
	<link rel="stylesheet" href="css/styles.css" media="all">		
	
	
	<!-- endbuild -->

</head>

<body class="project-page">	


<?php /* ####################
					DEFINE PROJECT 
############################# */ ?>
<?php 
	$title = 'iiNet Plan Page Redesign';
	$client = 'iiNet';
	//$brand_colours = [ '#ff8200', '#d21f2a', '#0090ab', '#808080', '#fff' ];
	//$year = '2016';		
	$skills = array('HTML5', 'CSS3', 'PHP', 'Angular JS', 'User Testing');
	
	$website = 'www.iinet.net.au';	
	$website_url = '//www.iinet.net.au/internet-products/broadband/adsl';
	
	$next_project = array('multicomm', 'Multicomm Website');
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
						<img src="img/1.jpg" alt="" />
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
							<p class="h2 subheading padding-0 margin-0">At a glance</p>
							<p>iiNet's core product pages presented a complex user experience. They were not responsive, and were no longer aligned with the brand. Each product page also had a unique interface and layout, confusing potential customers and customer service representatives. This presented an opportunity to improve the user experience, by simplifying these pages and unifying them with each other and the brand. </p>

							<p><strong>The process:</strong><br>The first step was to conduct a handful of user testing sessions, to identify the main pain points for users. The designs were then refined.</p>

							<p><strong>The outcome:</strong><br>The new responsive pages reduce cognitive load by breaking down the plan customisation into intuitive steps. Both conversion and bounce rates improved once the new pages were released.</p>
							
							<p>[old page] Here's an example of the pages which needed improvement</p>

							<p>[banner, subnav, breadcrumbs] banner integrated with current ATL campaign artwork, featuring hero plan.</p>


							<p>[carousel steps 1 and 2 | step 3 4 5]new design created with a stepped approach, making it easy for users to understand. User testing was then conducted with a handful of customer service reps, which allowed us to refine the design further and highlight key plan features, and clear feedback as to plan availability. Checkbox element created to allow for clear feedback as to what has been selected.</p>

							<p>[step 6] order summary was simplified to make all costs transparent, with a large primary CTA. </p>

							<p>[accordion] further information about each product was neatly concealed within and expandable accordion, reducing the height and complexity of the page. Awards and testimonials, which act as support for purchase decision have been included on every plan page. </p>

							<p>[responsive images] All pages are now responsive, and X% of traffic is on mobile</p>

							<p>[link to live site or full screenshot which opens in new tab]</p>
							
							
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
	
	
	<script>
	$(function() {

		var sidebar = $('.sidebar');
		var top = sidebar.offset().top;

		$(window).scroll(function(event) {
			var y = $(this).scrollTop() + 400;
			if (y >= top) {
				sidebar.css('top', y - 700);
			}
		});
	});
</script>	
	
</body>
	
