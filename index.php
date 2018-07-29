<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Doug Hanson">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	
	<title>Doug Hanson | Web Development Perth</title>
	<meta name="description" content="Doug Hanson is a web designer and front end web developer from Perth, Western Australia.">
	<meta name="keywords" content="web design, designer, web development, front end developer, ux design, perth, doug hanson">
	
	<!-- build:css -->
	<link rel="stylesheet" href="css/styles.min.css" media="all">
	<style>
		.wrapper { opacity: 0; transition: all 200ms; } /* hide content until DOM ready */
	</style>
	<!-- endbuild -->

	<?php //include('/inc/_favicons.php'); ?>
</head>


<body>
	
<?php include('inc/_skeleton.php'); ?>
	
<?php /*

  // Define your username and password
  $username = "doug";
  $password = "password";
			
  if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) {
?>
		<div class="col-md-2 col-md-offset-5">
			<h1 style="margin-top: 100px;">Login</h1>

			<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<p><label for="txtUsername">Username:</label>
					<br /><input type="text" title="Enter your Username" name="txtUsername" /></p>

					<p><label for="txtpassword">Password:</label>
					<br /><input type="password" title="Enter your password" name="txtPassword" /></p>

					<p><input type="submit" name="Submit" value="Login" /></p>

			</form>
		</div>
<?php
  }	
  else {
*/ ?>	
	

<div class="wrapper"> 
      
<!-- include frames and nav --> 	
<?php include('inc/_nav.php'); ?>
      
  <!-- body content -->
	<section class="wrapper__outer">
		<div class="wrapper__inner"> 
	
			<!-- ###############################
			//   Intro / hero content
			#################################### -->		
			<div id="hero-content" class="hero-content parallax-bg">
				<div class="lazy-load hero-content__bg">
					<!--<div class="fadeOut"><a href="index.php"><img src="img/namelogo.png" /></a></div>-->
					<h3 class="h1 hero-heading fadeOut"><span>Doug Hanson</span></h3>
					<h1 class="h3 subheading subheading__hero grey-2 fadeOut">Web Designer &amp; Front-end Developer based in Perth, Western Australia</h1>

					<div class="mouse_scroll fadeOut--fast visible-lg">
						<div class="mouse">
							<div class="wheel"></div>
						</div>
						<div>
							<span class="m_scroll_arrows unu"></span>
							<span class="m_scroll_arrows doi"></span>
							<span class="m_scroll_arrows trei"></span>
						</div>
					</div>
				</div>
			</div>
			<!-- end hero content -->
          

			<!-- ###############################
			//   Selected Works
			#################################### -->
			<section id="selected-works" class="selected-works container">

				<h4 class="h3 subheading text-center margin-0">my portfolio</h4>
				<h4 class="h2 text-center">Selected works</h4>
				<div class="text-center"><img src="img/arrow.png" /></div>

				<div style="margin-top:40px;" class="masonry-container">

					<!-- 1 -->
					<a href="iinet-plan-pages.php" class="progressLoad">
						<article class="work-item">
							<div class="work-item__drawings" id="drawings">
								<img class="lazy-load illustration" data-src="img/finn-balloons.png" alt="" style="max-width: 244px;" />
								<?php echo file_get_contents("svg/finn.svg"); ?>
							</div>

							<div class="work-item__content">
								<p class="work-item__heading">Product Page Redesign</p>
								<h2 class="h5 subheading">ux / web design &amp; development</h2>
							</div>
						</article>
					</a>

					<!-- 2 -->
					<a href="mobii-manager.php" class="progressLoad">
						<article class="work-item">
							<div class="work-item__drawings" id="drawings">
								<img class="lazy-load illustration" data-src="img/mobii-manager.png" alt="" style="max-width: 300px;" />
								<?php echo file_get_contents("svg/galaxy-phone.svg"); ?>
							</div>

							<div class="work-item__content">
								<p class="work-item__heading">Mobii Manager</p>
								<h2 class="h5 subheading">ux / mobile design </h2>
							</div>
						</article>
					</a>

					<!-- 3 -->
					<a href="multicomm.php" class="progressLoad">
						<article class="work-item">
							<div class="work-item__drawings" id="drawings">
								<img class="lazy-load illustration" data-src="img/multicomm.png" alt="" style="max-width: 300px; padding-top:15px;" />
								<?php echo file_get_contents("svg/multicomm.svg"); ?>
							</div>

							<div class="work-item__content">
								<p class="work-item__heading">Multicomm Website</p>
								<h2 class="h5 subheading">branding / web design &amp; development</h2>
							</div>
						</article>
					</a>

					<!-- 4
					<a href="bankwest.php" class="progressLoad">
						<article class="work-item">
							<div class="work-item__drawings" id="drawings">
								<img class="illustration" src="img/sunny.png" alt="" style="max-width: 250px; padding-top: 25px;" />
								<?php //echo file_get_contents("svg/sun.svg"); ?>															
							</div> 

							<div class="work-item__content">
								<p class="work-item__heading">Bankwest Digital Design</p>
								<h2 class="h5 subheading">web design / web development / email&nbsp;marketing</h2>
							</div>
						</article>
					</a>			
					-->


				</div>

			</section>
			<!-- end selected works -->


			<hr>


			<!-- ###############################
			//   About me
			#################################### -->
			<section id="about" class="about container">
				<h4 class="h3 subheading text-center margin-0">roles and experience</h4>
				<h4 class="h2 text-center">About me</h4>
				<div class="text-center"><img src="img/arrow.png" /></div>
				<div class="col-lg-9">
					<br>
					<p>Over 8 years of hands on experience in user-centred web design &amp; front end web development. Experience designing User Interfaces (UI) and User Experience (UX) for products from various domains. Expertise in handling projects in Web development, Responsive Web Design, JavaScript, JQuery, AngularJS, HTML5, CSS3, SASS and&nbsp;PHP.</p>
					<p class="hidden-xs hidden-xxs">A driven, creative professional with a broad technical skill set. An excellent communicator experienced in interpreting and implementing client and staff visions of new websites and digital creative.</p>
					<p>&nbsp;</p>
				</div>
				<div class="col-lg-3 text-right visible-lg">
					<div id="drawings">
						<img data-src="img/doug.png" class="lazy-load profile-pic img-circle">
						<?php //echo file_get_contents("svg/doug.svg"); ?>
					</div>
				</div>


				<div class="col-lg-12">
					<h4>Experience</h4>
					<table class="full-width">
						<tbody>
							<tr>
								<td width="150px">iiNet
									<br>2013 - Present</td>
								<td>
									<strong>Senior Web Designer</strong>
									<br>
									<span class="hidden-xxs"><span class="hidden-xs">To deliver design, development, and ongoing maintenance of web-based products and systems to support business initiatives.</span> Create prototypes, UI, IA, graphical and architectural requirements, and conduct usability assessments to evaluate solutions at the information architecture &amp; design level.</span>
								</td>
							</tr>
							<tr>
								<td>Bankwest
									<br>2010 - 2013</td>
								<td>
									<strong>Digital Production Specialist</strong>
									<br>
									<span class="hidden-xxs">Work with key stakeholders to design and deliver innovative digital creative elements to drive Bankwest initiatives. <span class="hidden-xs">Designed and implemented changes to the existing Bankwest website and was involved with large scale development projects, including a website refresh and designs for the original Bankwest Mobile App.</span></span>
								</td>
							</tr>
							<tr>
								<td>Bankwest
									<br>2009 - 2010</td>
								<td>
									<strong>Online Marketing Manager</strong>
									<br>
									<span class="hidden-xxs"><span class="hidden-xs">To manage the marketing and customer experience of multiple product portfolios via the online channel.</span> Responsible for implementing well defined campaign strategies, campaign optimisation, budget management, agency relationships, and online creative development.</span>
								</td>
							</tr>
							<tr>
								<td>Bankwest
									<br>2007 - 2009</td>
								<td>
									<strong>eCommerce Marketing Coordinator</strong>
									<br>
									<span class="hidden-xxs">To coordinate the Bankwest online marketing and sales function, responsible for online marketing execution, management information reporting, agency relationships and strategic projects.</span>
								</td>
							</tr>
							<tr>
								<td>White Chalk Road
									<br>2006 - 2007</td>
								<td>
									<strong>Internet Marketing Consultant</strong>
									<br>
									<span class="hidden-xxs"><span class="hidden-xs">To manage a wide, varied portfolio of over 20 clients and improve ROI through Search Engines by implementing proven SEO methodologies.</span> Responsible for setting up, managing, and optimising small SEM campaigns within Google Adwords to drive acquisitions and improve ROI.</span>
								</td>
							</tr>
						</tbody>
					</table>

					<!-- resume` link -->
					<div class="row">
						<div class="col-sm-12 margin-top-30 ">
							<a href="doc/Doug-Hanson-Resume.pdf" target="_blank" class="button progressLoad margin-right-10">Download Resume` (PDF 72kB)</a>
						</div>
					</div>

				</div>

			</section>
			<!-- end about me -->

			<hr>

			<!-- ###############################
			//   Contact
			#################################### -->
			<section id="contact" class="contact-me container">

				<h4 class="h3 subheading text-center margin-0">get in touch</h4>
				<h4 class="h2 text-center">Contact</h4>
				<div class="text-center"><img src="img/arrow.png" /></div>


				<?php
				//if submit button is clicked, send email
				if (isset($_POST['submitted'])) {


					//get the data entered in the forms
					$name = $_POST['input-name'];
					$email = $_POST['input-email'];
					//$contact = $_POST['input-contact'];
					$message = $_POST['input-message'];

					//compose the email message 
					$to = "doug83@iinet.net.au";
					$email_from = "doug83@iinet.net.au";   
					$email_subject = "Email from portfolio website" ; 
					$email_body = "A new message has been submitted:\n

					Name: $name \n  
					Email Address: $email \n              
					Enquiry: $message"; 

					//from my address to stop spam catcher
					$headers = "From: $email_from \n"; 
					$headers .= "Reply-To: $email \n"; 

					//send email
					mail($to,$email_subject,$email_body,$headers);   

					//thankyou message on website
					echo "<div class='clearfix'><!-- --></div><p class='thankyou-msg font-heavy'>Thank you ".$name.", I'll respond to your message shortly.</p>";         

				}
				?>
				

				<!-- begin mailform -->
				<iframe name="no-reload" style="display:none;"></iframe>
				<form method='post' action='index.php#contacted' style="margin-top: 2em;">
					<div class="col-sm-6">
						<span class="input">
						<input class="input__field" type="text" id="input-name" name="input-name" maxlength="50" required="required" />
						<label class="input__label" for="input-name">
							<i class="input__icon svg-user svg-user-dims"></i>
							<span class="input__label-content">Name</span>
						</label>
						</span>
						<p class="input-name__validation font-xs margin-top-0"></p>
					</div>

					<div class="col-sm-6">
						<span class="input">
						<input class="input__field" type="email" id="input-email" name="input-email" maxlength="70" required="required" />
						<label class="input__label" for="input-email">
					  		<i class="input__icon svg-mail svg-mail-dims"></i>
							<span class="input__label-content">Email</span>
						</label>
						</span>
						<p class="input-email__validation font-xs margin-top-0"></p>
					</div>

					<div class="col-sm-12">
						<span class="input">
						<textarea class="input__field" type="text" id="input-message" name="input-message" maxlength="2000" required="required"></textarea>
						<label class="input__label" for="input-message">
							<i class="input__icon svg-pen svg-pen-dims"></i>
							<span class="input__label-content">Message</span>
						</label>
						</span>
						<p class="input-message__validation font-xs margin-top-0"></p>
					</div>

					<div class="col-sm-12 text-center">
						<button class="button button__primary progressLoad text-right" name="submitted">&nbsp; Send message &nbsp;</button>
					</div>
				</form>
				<!-- end mailform -->
			</section>

		<div id="contacted"><!-- --></div>
		<!-- end contact me -->  
			
          
    </div>
    <!-- end wrapper__outer --> 
		
  </section>
  <!-- end wrapper -->
	
  <div class="clearfix"> </div>

      
</div>
<!-- end body content --> 
	
<!-- include footer --> 	
<?php include('inc/_footer.php'); ?>


</body>
</html>