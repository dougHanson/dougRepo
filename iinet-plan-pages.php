<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Doug Hanson">
	<title>Doug Hanson - Web Designer</title>
	<meta name="description" content="Web designer from Perth, Western Australia. Doug Hanson.">
	<meta name="keywords" content="web design perth, doug, hanson">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- fonts Raleway & Dancing Script-->
	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,600,800|Dancing+Script" rel="stylesheet" type="text/css">
	
	<!-- build:css -->
	<link rel="stylesheet" href="css/styles.css" media="all">			
	<!-- endbuild -->

</head>


<body>					

<!-- include frames and nav --> 	
<?php include('inc/_nav.php'); ?>

	<!-- iiNet plan refreshes -->
	<div class="wrapper">		
		<div class="wrapper__outer">


			<!-- banner -->	
			<div class="container">	
				<img src="img/iinet-header.png" class="work-content__banner" >	
			</div>


			<div class="container" style="position: relative; overflow-x: hidden; padding-bottom: 100px;">

				<!-- content -->

				<div class="col-sm-9">
					<!-- brand colours -->	
					<span class="brand-colour" style="background: #ff8200;"> </span>
					<span class="brand-colour" style="background: #d21f2a;"> </span>
					<span class="brand-colour" style="background: #0090ab;"> </span>
					<span class="brand-colour" style="background: #808080;"> </span>
					<span class="brand-colour" style="background: #fff;"> </span>									
					<h1 class="h4 font-bold grey-6 text-uppercase">iiNet Plan Page Redesign</h3>

					<p>When I began working at iiNet, the core product pages presented a complex user experience, were not responsive, and no longer aligned with the brand. Each product page also had a unique appearance and layout, confusing potential customers and customer service reps.</p>
					<p>This presented an opportunity to improve the user experience, by simplifying these pages and unifying them with each other and the brand. The new responsive pages reduce cognitive load by breaking down the plan customisation into intuitive steps.</p>
					<p>Both conversion and bounce rates improved once the new pages were released.</p>
					<p class="margin-bottom-40"><!-- --></p>					
				</div>

				<div class="col-sm-2 col-sm-offset-1 margin-top-20">
					<p class="h6 font-bold margin-bottom-0 hidden-xs">Client</p>
					<p class="margin-top-0 hidden-xs">iiNet</p>

					<p class="h6 font-bold margin-bottom-0 hidden-xs">Skills used</p>
					<p class="margin-top-0 hidden-xs">
						<span class="tag">HTML5</span>
						<span class="tag">CSS3</span>
						<span class="tag">PHP</span>
						<span class="tag">AngularJS</span>
						<span class="tag">User Testing</span>
					</p>					

					<p class="h6 font-bold margin-bottom-0">Live website</p>
					<p class="margin-top-0"><a href="//iinet.net.au/internet-products/broadband/adsl/" target="_blank">www.iinet.net.au</a></p>
				</div>

				
				<!-- svg paths for arrows #TODO move into svg files--> 
				<div class="svg-wrap">
					<svg width="64" height="64" viewBox="0 0 64 64">
						<path id="arrow-left-1" d="M46.077 55.738c0.858 0.867 0.858 2.266 0 3.133s-2.243 0.867-3.101 0l-25.056-25.302c-0.858-0.867-0.858-2.269 0-3.133l25.056-25.306c0.858-0.867 2.243-0.867 3.101 0s0.858 2.266 0 3.133l-22.848 23.738 22.848 23.738z" />
					</svg>
					<svg width="64" height="64" viewBox="0 0 64 64">
						<path id="arrow-right-1" d="M17.919 55.738c-0.858 0.867-0.858 2.266 0 3.133s2.243 0.867 3.101 0l25.056-25.302c0.858-0.867 0.858-2.269 0-3.133l-25.056-25.306c-0.858-0.867-2.243-0.867-3.101 0s-0.858 2.266 0 3.133l22.848 23.738-22.848 23.738z" />
					</svg>
				</div>
				
				<!-- arrow navigation -->
				<section>
					<div class="nav-slide">
						<a class="prev" href="mobii-manager.php">
							<span class="icon-wrap"><svg class="icon" width="32" height="32" viewBox="0 0 64 64"><use xlink:href="#arrow-left-1"></svg></span>
							<div>
								<h3><span>previous project</span>Multicomm Website</h3>
								<img src="img/1.png" alt="Prev thumb"/>
							</div>
						</a>
						<a class="next" href="mobii-manager.php">
							<span class="icon-wrap"><svg class="icon" width="32" height="32" viewBox="0 0 64 64"><use xlink:href="#arrow-right-1"></svg></span>
							<div>
								<h3><span>next project</span>Mobii Manager</h3>
								<img src="img/2.png" alt="Next thumb"/>
							</div>
						</a>
					</div>
				</section>
	
				
				
			</div>
		</div>
	</div>	
	<!-- end iiNet Plan Refreshes -->
	
	<!-- include footer --> 	
	<?php include('inc/_footer.php'); ?>	
	
</body>
	
