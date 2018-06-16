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

	<!-- React -->
	<script src="https://unpkg.com/react@15.6.1/dist/react.js"></script>
	<script src="https://unpkg.com/react-dom@15.6.1/dist/react-dom.js"></script>
	<script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
	
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
	/* ##########################
		DEFINE PROJECT 
	############################# */ 
	
	$title = '<span class="hidden-xxs">iiNet</span> Product Page Redesign';
	$client = 'iiNet';
	//$brand_colours = [ '#ff8200', '#d21f2a', '#0090ab', '#808080', '#fff' ];
	//$year = '2016';		
	$skills = array('HTML5', 'CSS3', 'PHP', 'AngularJS', 'UX Design', 'User Testing', 'SASS', 'OOCSS/BEM');
	
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

			<div id="container" class="intro-effect-jam3">

				<header class="header">
					<div class="bg-img">
						<img src="img/iinet-plan-pages-header.jpg" alt="iiNet Product Page Refresh" />
					</div>
				</header>

				<div class="container">
					<div class="col-sm-12 title">
						<div class="font-bold grey-6" id="root"></div>
					</div>	
				</div>

				<article class="content">
					<div class="container">
						
						
<div id="root"></div>
<script type="text/babel">

function formatName(user) {
  return user.firstName + ' ' + user.lastName;
}

const user = {
  firstName: 'Doug',
  lastName: 'Hanson'
};

const element = (
  <h1>
    Hello, {formatName(user)}!
  </h1>
);

ReactDOM.render(
  element,
  document.getElementById('root')
);
</script>						


						<!-- content -->
						<div class="col-lg-9">

							<!-- brand colours -->
							<p class="margin-0">
								<?php if(isset($brand_colours)) { foreach ($brand_colours as $a_colour) { ?>
									<span class="brand-colour" style="background: <?php print $a_colour ?>"> </span>
								<?php } } ?>
							</p>
							
							<p class="margin-0">

									<span class="brand-colour" id="projectBrandColours"> </span>

							</p>							

							<!-- copy -->
							<p class="h3 subheading padding-0 margin-0">At a glance</p>
							<p>iiNet's core product pages presented a complex user experience. They were not responsive, and were no longer aligned with the brand. Each product page also had a unique interface and layout, confusing potential customers and customer service representatives. This presented an opportunity to improve the user experience, by simplifying these pages and unifying them with each other and the brand. </p>

							<p class="h3 subheading padding-0 margin-0">The process</p>
							<p>To begin gathering <strong>user requirements</strong>, I conducted a <strong>focus group</strong> with customer service reps, to identify pain points with the existing design. This gave insight not only into what users like and dislike, but also what users do, how they do it, and what frustrates them. I then conducted an <strong>expert review</strong> and a <strong>competitor analysis</strong>, to investigate the best way to solve the identified problems.</p>
							<p>Iterations of <strong>wireframes and designs</strong> followed, and reviewed by key stakeholders at each major step. Once a very basic <strong>prototype</strong> was ready, <strong>user testing sessions</strong> were then conducted with a handful of users, which allowed us to identify any remaining issues and refine the design further.</p>

							<p><img src="img/iinet-plan-pages-naked-dsl.png" alt="iiNet Product Page Refresh" class="img-shadow"></p>
							<p class="margin-bottom-40">&nbsp;</p>

							<p class="h3 subheading padding-0 margin-0">The result</p>
							<p>The new design was created with a stepped approach, making it easy for users to understand. Each plan is broken out into its own box, with emphasis on the benefit (the quota) rather than the price. The address check field was previously overlooked, so this was given more prominence as the first step. Large checkboxes have a very distinct active state to make it clear to the user what they have chosen.</p>
							<p>The new responsive pages reduce cognitive load by breaking down the plan customisation into intuitive steps. Both <strong>conversion and bounce rates improved once the new pages were released</strong>.</p>


							<p class="h3 subheading padding-0 margin-top-40">Additional screenshots</p>
							<div class="owl-carousel owl-theme">
								<div class="item">
									<a href="img/iinet-plan-pages-mobile-banner.png" data-lightbox="iinet-plan-pages" data-title="Campaign banner"><img src="img/iinet-plan-pages-mobile-banner.png" /></a>
								</div>
								<div class="item">
									<a href="img/iinet-plan-pages-mobile-plans.png" data-lightbox="iinet-plan-pages" data-title="Broadband plans"><img src="img/iinet-plan-pages-mobile-plans.png" /></a>
								</div>
								<div class="item">
									<a href="img/iinet-plan-pages-mobile-signup.png" data-lightbox="iinet-plan-pages" data-title="Signup summary"><img src="img/iinet-plan-pages-mobile-signup.png" /></a>
								</div>
							</div>
							<p class="margin-bottom-40">&nbsp;</p>

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

	<script>
		//Scroll page back to top on refresh, to ensure loading effect is maintained
		$(window).on('beforeunload', function() {
			$(window).fadeOut(), 2000;
			$(window).scrollTop(0), 15000;
		});

		//project population
		//document.getElementById("projectTitle").innerHTML = projects.product_page_redesign.title;
		//document.getElementById("projectClient").innerHTML = projects.product_page_redesign.client;
		
		//for ( var i=0; i <= projects.product_page_redesign.brand_colours.length; i++) {
		//	$('#projectBrandColours').css('background', projects.product_page_redesign.brand_colours[i-1]);
		//}
	
	</script> 	

</body>
