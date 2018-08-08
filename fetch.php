<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Doug Hanson">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Fetch AngularJS Web Application | Doug Hanson | Web Development and Design, Perth</title>
	<meta name="description" content="AngularJS web application case study by Doug Hanson, a front end web developer in Perth, Western Australia.">
	<meta name="keywords" content="fetch, web design, designer, web development, front end developer, ux design, iinet, perth, doug hanson">

	<!-- build:css -->
	<link rel="stylesheet" href="css/styles.css" media="all">
	<!-- endbuild -->

</head>

<?php 	
	// DECLARE PROJECT VARIABLE - refer to data.js
	$project = 'fetch'; 
?>
	
<body class="project-page" id="<?php echo $project ?>">

	<!-- include frames and nav -->
	<?php include('inc/_nav.php'); ?>

	<div class="wrapper__outer">
		<div class="wrapper__inner">

			<div id="container" class="intro-effect-jam3">

				<!-- header image -->
				<header class="header">
					<div class="bg-img">
						<img src="img/fetch-header.min.png" data-src="img/fetch-header.png" class="lazy-load" alt="Fetch TV" />
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
							<p>iiNet was promoting a Fetch TV offer which enabled users to purchase discounted Fetch hardware and one channel pack for $10, and individual channel packs for $6 each, when purchasing internet on a 24 month contract. Users could also upgrade the Fetch set top box to a Fetch Mighty for an additional $250, and could purchase up to three set top boxes. The challenges came from showcasing a detailed offer without confusing our end users, and programming the complexities in <strong>AngularJS</strong>. </p>

							<p class="h3 subheading padding-0 margin-0">The process</p>
							<p>After meeting with the Marketing &amp; Products teams to determine the most important features to promote, multiple <strong>mobile first wireframes</strong> and eventually <strong>web designs</strong> were worked up in Photoshop, to play with how the information could be laid out while providing a seamless <strong>user experience</strong>. To make things easier to use, additional options such as upgrading hardware and purchasing Ultimate Channel Pack were only revealed to the user once they had opted to purchase a basic Fetch subscription.</p>

							<div class="item">
								<a href="img/fetch.gif" data-lightbox="fetch" data-title="Fetch TV UI Design"><img src="img/loading.gif" data-src="img/fetch.gif" class="lazy-load img-responsive img-center img-shadow" /></a>
							</div>				
							<p>&nbsp;</p>
							
							<p class="h3 subheading padding-0 margin-0">The build</p>
							<p>Following suit from the web designs, I began the build using a <strong>mobile first approach using HTML and SASS</strong>. This allowed me to add additional <strong>CSS media queries</strong> to style the content as the window size increased. <strong>Browser and display testing</strong> was then carried out to ensure the display was <strong>platform&nbsp;agnostic</strong>.</p>
							<p>The single page <strong>AngularJS web application</strong> proved quite challenging, as there was a large number of moving parts. To keep the authoring experience clean, I ensured that <strong>best coding pracitces</strong> were used, such as avoiding global variables, and using directives only for DOM manipulation. Robust testing was carried out throughout the <strong>web development</strong>&nbsp;phase.</p>
							
							<div class="item margin-bottom-20">
								<a href="img/fetch-angular-js.png" data-lightbox="code" data-title="Sample of AngularJS code">
									<img src="img/loading.gif" data-src="img/fetch-angular-js.png" alt="Sample AngularJS code" class="lazy-load img-shadow img-center">
								</a>
							</div>
							<p>&nbsp;</p>											

							<p class="h3 subheading padding-0 margin-0">The result</p>
							<p>Fetch can now be purchased with any eligible Internet service on the iiNet website. Since this implementation the UI has changed somewhat, to keep up with changing business priorities.</p>

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