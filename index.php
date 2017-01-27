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
	<link rel="stylesheet" type="text/css" href="css/plugins/_svganimations.css" />	
	<!-- endbuild -->

	<style type="text/css">

		
		
	</style>
	
	<?php include('/inc/_favicons.php'); ?>
</head>


<body>

	
<?php /*

  // Define your username and password
  $username = "doug";
  $password = "p2j01256";
			
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
	
	
	
<div style="position: relative;"> 
      
<!-- include frames and nav --> 	
<?php include('inc/_nav.php'); ?>
      
  <!-- body content -->
  <section class="wrapper">
    <div class="wrapper__outer"> 
          
			<!-- -------------------------------------
			//   Intro / hero content
			------------------------------------------ -->		
      <div id="hero-content" class="hero-content parallax-bg">
        <div class="hero-content__bg">
<!--          <img src="img/logo.png" alt="" />-->
          <h1 class="hero-heading fadeOut"><span>Doug Hanson</span></h1>
          <h3 class="subheading subheading__hero fadeOut">Web Designer &amp; Front-end Developer based in Perth, Western Australia</h3>
        
					<!--<div class="mouse_scroll fadeOut--fast visible-lg">
						<div class="mouse">
							<div class="wheel"></div>
						</div>
						<div>
							<span class="m_scroll_arrows unu"></span>
							<span class="m_scroll_arrows doi"></span>
							<span class="m_scroll_arrows trei"></span>
						</div>
					</div>	-->			
				
				
				</div>
				

				
				
      </div>
      <!-- end hero content --> 
          

       
			
			<!-- -------------------------------------
			//   Selected Works
			------------------------------------------ -->			
      <section id="selected-works" class="selected-works container pad-lr-20">
				
        <p class="h3 subheading text-center margin-0">my portfolio</p>
        <h2 class="text-center">Selected works</h2>				
        <div class="text-center"><img src="img/arrow.png" /></div>     

        <div style="margin-top:40px;" class="masonry-container">  

					
					<a href="iinet-plan-pages.php" class="progressLoad">
						<article class="work-item">
							<div class="work-item__drawings" id="drawings">
								<img class="illustration" src="img/finn-balloons.png" alt="" style="width:100%; max-width: 244px;" />
								<?php echo file_get_contents("svg/finn.svg"); ?>															
							</div>

							<div class="work-item__content">
								<p class="work-item__heading">Product Page Redesign</p>
								<p class="h5 subheading">ux / web design &amp; development</p>
							</div>
						</article>
					</a>
							
					
					<a href="mobii-manager.php" class="progressLoad">
						<article class="work-item">
							<div class="work-item__drawings" id="drawings" style="height: 300px;">
								<img class="illustration" src="img/mobii-manager.png" alt="" style="padding-top: 50px; width:100%; max-width: 360px;" />
								<?php echo file_get_contents("svg/galaxy-phone.svg"); ?>															
							</div>

							<div class="work-item__content">
								<p class="work-item__heading">Mobii Manager</p>
								<p class="h5 subheading">ux / mobile design </p>
							</div>
						</article>
					</a>
					

					<a href="iinet-plan-pages/" class="progressLoad">
						<article class="work-item">
							<div class="work-item__drawings" id="drawings" style="height: 300px; width:100%; max-width: 360px;">
								<img class="illustration" src="img/multicomm.png" style="padding-top: 76px;" alt="" />
								<?php echo file_get_contents("svg/multicomm.svg"); ?>															
							</div>

							<div class="work-item__content">
								<p class="work-item__heading">Multicomm Website</p>
								<p class="h5 subheading">branding / web design &amp; development</p>
							</div>
						</article>
					</a>
										
										
				 <!--			
					
          <a href="#">
            <article class="work-item"> 
							<img src="img/iihelp.png" style="width: 100%;" />
							<div class="work-item__content">
								<p class="work-item__heading">iiHelp redesign</p>
								<p class="subheading">ux / web design</p> 
							</div> 
            </article>
          </a>       
  
					
          <a href="#">
            <article class="work-item"> 
							<img src="img/owl1.jpg" style="width: 100%;" />
							<div class="work-item__content">
								<p class="work-item__heading">Bankwest Mobile App</p>
								<p class="subheading">mobile design</p> 
							</div> 
            </article>
          </a>      					


          <a href="#">
            <article class="work-item"> 
							<img src="img/world-passion-change.png" style="width: 100%;" />
							<div class="work-item__content">
								<p class="work-item__heading">World. Passion. Change.</p>
								<p class="subheading">branding / web design / web development</p> 
							</div> 
            </article> 
          </a> 
					
          <a href="#">
            <article class="work-item"> 
							<img src="img/owl3.jpg" style="width: 100%;" />
							<div class="work-item__content">
								<p class="work-item__heading">Maiko Flyers</p>
								<p class="subheading">branding / graphic design</p> 
							</div> 
            </article> 
          </a> 		-->			
                            
        </div>

      </section>
      <!-- end selected works --> 
				
			
			<hr>
			
			
			
			<!-- -------------------------------------
			//   About me
			------------------------------------------ -->		
      <section id="about" class="about container">
        <div class="h3 subheading text-center margin-0">roles and experience</div>
        <h2 class="text-center">About me</h2>
        <div class="text-center"><img src="img/arrow.png" /></div>
        <div class="col-lg-9">
					<br>
          <p>A driven, creative professional with a broad technical skill set. An excellent communicator experienced in interpreting and implementing client and staff visions of new websites and digital creative. Enjoys collaborating with colleagues and clients, and will voluntarily help and teach whenever needed, with expertise ranging from design, development and conceptualization to programming and management.</p> 
          <p>&nbsp;</p>
        </div> 
        <div class="col-lg-3 text-right visible-lg">
							<div id="drawings">
								<img src="img/doug.png" class="profile-pic img-circle" style="width:90%; width: 180px;">
								<?php //echo file_get_contents("svg/doug.svg"); ?>															
							</div>					
          
        </div>  				
				
        


        <div class="col-lg-12">        
          <h4>Experience</h4>   
          <table class="full-width">
            <tbody>
              <tr>
                <td width="150px">iiNet<br>2013 - Present</td>
                <td>
									<strong>Senior Web Designer</strong><br>
									<span class="hidden-xxs">To deliver design, development, and ongoing maintenance of web-based products and systems to support business initiatives. Create prototypes, UI, IA, graphical and architectural requirements, and conduct usability assessments to evaluate solutions at the information architecture &amp; design level.</span>
								</td>
              </tr>
              <tr>
                <td>Bankwest<br>2010 - 2013</td>
                <td>
									<strong>Digital Production Specialist</strong><br>
									<span class="hidden-xxs">Work with key stakeholders to design and deliver innovative digital creative elements to drive Bankwest initiatives.</span>
								</td>
              </tr>
              <tr>
                <td>Bankwest<br>2009 - 2010</td>
                <td>
									<strong>Online Marketing Manager</strong><br>
									<span class="hidden-xxs">To manage the marketing and customer experience of multiple product portfolios via the online channel. Responsible for implementing well defined campaign strategies, campaign optimisation, budget management, agency relationships, and online creative development.</span>
								</td>
              </tr>  
              <tr>
                <td>Bankwest<br>2007 - 2009</td>
                <td>
									<strong>eCommerce Marketing Coordinator</strong><br>
									<span class="hidden-xxs">To coordinate the Bankwest online marketing and sales function, responsible for online marketing execution, management information reporting, agency relationships and strategic projects.</span>
								</td>
              </tr>                   
            </tbody>
          </table> 
					
					<div class="row">
						<div class="col-sm-12 margin-top-30 ">
							<a href="doc/Doug-Hanson-Resume.pdf" target="_blank" class="button progressLoad margin-right-10">Download Resume` (80kB)</a> 
						</div>	
					</div>
					
				</div>  
          

          
     
                             
      </section>
      <!-- end about me --> 
      
			

      <hr>

			<!-- -------------------------------------
			//   Contact
			------------------------------------------ -->		
      <section id="contact" class="contact-me container pad-lr-20">
        <div class="col-sm-12 row">
        
          <p class="h3 subheading text-center margin-0">get in touch</p>
          <h2 class="text-center">Contact</h2>
          <div class="text-center"><img src="img/arrow.png" /></div>    
          
          <!-- begin mailform -->
          <iframe name="no-reload" style="display:none;"></iframe>
		      <form method='post' action='#contact' style="margin-top: 2em;">     
            <div class="col-sm-6">
              <span class="input">
                <input class="input__field" type="text" id="input-name" name="input-name" />
                <label class="input__label" for="input-name">
                  <i class="input__icon svg-user svg-user-dims"></i>
                  <span class="input__label-content">Name</span>
                </label>
              </span>
            </div>
            
            <div class="col-sm-6">
              <span class="input">
                <input class="input__field" type="email" id="input-email" name="input-email" />
                <label class="input__label" for="input-email">
                  <i class="input__icon svg-mail svg-mail-dims"></i>
                  <span class="input__label-content">Email</span>
                </label>
              </span>
            </div>
                        
            <div class="col-sm-12">          
              <span class="input">
                <textarea class="input__field" type="text" id="input-message" name="input-message"></textarea>
                <label class="input__label" for="input-message">
                  <i class="input__icon svg-pen svg-pen-dims"></i>
                  <span class="input__label-content">Message</span>
                </label>
                
              </span>  
            </div>                            
            
            <div class="col-sm-12 text-center">
              <button class="button button__primary progressLoad text-right" name="submitted">Send message</button>
            </div> 
          </form> 

          <?php
            if (isset($_POST['submitted']))
            //if submit button is clicked, send email
            {
          
              //get the data entered in the forms
              $name = $_POST['input-name'];
              $email = $_POST['input-email'];
              //$contact = $_POST['input-contact'];
              $message = $_POST['input-message'];
            
              //compose the email message 
              $to = "doug83@iinet.net.au";
              $email_from = "doug83@iinet.net.au";   
              $email_subject = "Email from portfolio website" ; 
              $email_body = "A new message has been submitted by the online form on my website:\n
               
              Name: $name \n  
              Email Address: $email \n " + 
              //Contact number: $contact \n 
              "Enquiry: $message"; 
            
              //from multicomm address to stop spam catcher
              $headers = "From: $email_from \n"; 
              $headers .= "Reply-To: $email \n"; 
            
              //send email
              mail($to,$email_subject,$email_body,$headers);
          
              //thankyou message on website
              echo "<div class='clearfix'><!-- --></div><p id='contact' style='background:#E6EFC2; color:#529214; border:1px solid #CCDC8C;padding:3px 14px; text-align:center;' >Thank you $name, I'll respond to your message shortly.</p>";
         
            }
          ?>          
          <!-- end mailform -->
          
        </div>
      </section>
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

<?php//  } ?>
  
</body>
</html>