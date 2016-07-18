<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Doug Hanson">
    <title>Doug Hanson - Web Designer</title>
    <meta name="description" content="Gluon - an HTML boilerplate by Doug Hanson.">
    <meta name="keywords" content="gluon, boilerplate, html, doug, hanson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts Raleway & Dancing Script-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,600,800|Dancing+Script" rel="stylesheet" type="text/css">
    <!-- build:css -->
    <link rel="stylesheet" href="css/styles.css" media="all">
			<link rel="stylesheet" href="css/plugins/_grid3d.css" media="all">
    <!-- endbuild -->

    <style type="text/css">
.wrapper {
  margin: 1.5vw;
}
.wrapper__outer {
  padding-left: 290px;
  height: 100%;
}

@media (max-width: 991px) {
  .wrapper__outer {
      height: 100%;
      padding-left: 0px;
  }
}

.hero-content {
  background: url('img/perth-bg.png') #f7f7f7;
  min-height: 94vh;
  background-position: center 15px;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  margin-bottom: 80px;
}

.icon__homepage {
  background-position: -80px -60px;
  height: 20px;
  width: 20px;
}

hr { padding: 20px 0; width: 85%; }

</style>
<?php include('/inc/_favicons.php'); ?>
</head>


<body>

<div style="position: relative;"> 
      
  <!-- frame borders -->
  <div class="frame frame__top"></div>
  <div class="frame frame__bottom"></div>
  <div class="frame frame__left"></div>
  <div class="frame frame__right"></div>
  <!-- end frame borders --> 
      
  <!-- left hand nav include -->
  <aside class="vertical-menu">
    <div class="vertical-menu__logo"> <img src="img/logo-retina.png" /> </div>
    <nav>
      <ul>
        <li class="nav-home"><a href="#"><i class="icon icon__homepage"></i><span>Intro</span></a></li>
        <li class="nav-about"><a href="#"><i class="icon icon__homepage"></i><span>About me</span></a></li>
        <li class="nav-works"><a href="#"><i class="icon icon__homepage"></i><span>Selected works</span></a></li>
        <li class="nav-contact"><a href="#"><i class="icon icon__homepage"></i><span>Contact</span></a></li>        
      </ul>
    </nav>
  </aside>
  <!-- end left hand nav include --> 
      
  <!-- body content -->
  <section class="wrapper">
    <div class="wrapper__outer"> 
          
      <!-- hero content -->
      <div class="hero-content parallax-bg" style="height: 80vh;">
        <div style="text-align: center; padding-top: 210px;  min-height: 510px;"> 
<!--          <img src="img/logo.png" alt="" />-->
          <h1 class="hero-heading"><span>Doug Hanson</span></h1>
          <h3 class="subheading subheading__hero">Web Designer from Perth, Western Australia</h3>
          <img src="img/three-stars.png" alt="" /> 
        </div>
      </div>
      <!-- end hero content --> 
          
      <!-- about me -->
      <section class="about container">
        <div class="h3 subheading text-center margin-0">roles and experience</div>
        <h2 class="text-center text-uppercase">About me</h2>
        <div class="text-center"><img src="img/arrow.png" /></div>
        <div class="col-lg-10 col-lg-offset-1">
          <p>A driven, creative professional with a broad technical skill set. An excellent communicator experienced in interpreting and implementing client and staff visions of new websites and digital creative. Enjoys collaborating with colleagues and clients, and will voluntarily help and teach whenever needed, with expertise ranging from design, development and conceptualization to programming and management.</p> 
            <p>Put some personal bullshit here.</p>
          <p>&nbsp;</p>
        </div>        
        
        <div class="col-sm-3 text-right hidden-xs hidden-xxs">
          <img src="img/doug.png" class="img-circle" style="width:100%;border:1em solid #fff;">
        </div>        

        <div class="col-sm-9">        
          <h4>Experience</h4>   
          <table class="full-width">
            <tbody>
              <tr>
                <td>iiNet<br>2013 - Present</td>
                <td><strong>Senior Web Designer</strong><br>To deliver design, development, and ongoing maintenance of web-based products and systems to support business initiatives. Create prototypes, UI, IA, graphical and architectural requirements, and conduct usability assessments to evaluate solutions at the information architecture &amp; design level.</td>
              </tr>
              <tr>
                <td>Bankwest<br>2010 - 2013</td>
                <td><strong>Digital Production Specialist</strong><br>Work with key stakeholders to design and deliver innovative digital creative elements to drive Bankwest initiatives.</td>
              </tr>
              <tr>
                <td>Bankwest<br>2009 - 2010</td>
                <td><strong>Online Marketing Manager</strong><br>To manage the marketing and customer experience of multiple product portfolios via the online channel. Responsible for implementing well defined campaign strategies, campaign optimisation, budget management, agency relationships, and online creative development.</td>
              </tr>  
              <tr>
                <td>Bankwest<br>2007 - 2009</td>
                <td><strong>eCommerce Marketing Coordinator</strong><br>To coordinate the Bankwest online marketing and sales function, responsible for online marketing execution, management information reporting, agency relationships and strategic projects.</td>
              </tr>                   
            </tbody>
          </table> 
          
          <div class="margin-top-30">
            <a href="doc/Doug-Hanson-Resume.pdf" target="_blank" class="button margin-right-10">Download Resume (86kB)</a> 
            <a class="button button__primary nav-contact">Get in touch</a>          
          </div>
          
        </div>       
                             
      </section>
      <!-- end about me --> 
      
      <hr>
          
      <!-- selected works -->
      <section class="selected-works container pad-lr-20">
        <p class="h3 subheading text-center margin-0">my portfolio</p>
        <h2 class="text-center text-uppercase">Selected works</h2>
        <div class="text-center"><img src="img/arrow.png" /></div>     

        <div style="margin-top:40px;" > <!--class="masonry-container"--> 
 
          <a href="#">
            <article class="work-item work-item--2w"> 
							<img src="img/mobii-manager.png" style="width: 100%;" />
							<div class="work-item__content">
								<p class="work-item__heading">Mobii Manager</p>
								<p class="subheading">ux / branding / mobile design</p> 
							</div> 
            </article>
          </a>  					
					
					
					<a href="#">
            <article class="work-item"> 
							<img src="img/iinet.png" style="width: 100%;" />
							<div class="work-item__content">
								<p class="work-item__heading">iiNet</p>
								<p class="subheading">ux / web design / web development</p>                          
							</div>
            </article>
          </a> 

					
          <a href="#">
            <article class="work-item"> 
							<img src="img/multicomm.png" style="width: 100%;" />
							<div class="work-item__content">
								<p class="work-item__heading">Multicomm Website</p>
								<p class="subheading">branding / ux / web design / web development</p> 
							</div> 
            </article>
          </a>					
          
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
            <article class="work-item   work-item--2h"> 
							<img src="img/maiko.png" style="width: 100%;" />
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
          </a> 					
                            
        </div>

      </section>
      <!-- end selected works --> 
			
			
			
			
<section class="grid3d vertical" id="grid3d">
	<div class="grid-wrap">
		<div class="grid">
			<figure><img src="img/owl1.jpg" alt="img01"/></figure>
			<figure><img src="img/owl2.jpg" alt="img02"/></figure>
			<figure><img src="img/owl3.jpg" alt="img03"/></figure>
			<!-- ... -->
		</div>
	</div><!-- /grid-wrap -->
	
	
	<div class="content">
		<div>
			<div class="dummy-img"></div>
			<p class="dummy-text">Some text</p>
			<p class="dummy-text">Some more text</p>
		</div>
		<div>
			<div class="dummy-img"></div>
			<p class="dummy-text">Some text</p>
			<p class="dummy-text">Some more text</p>
		</div>
		<div>
			<div class="dummy-img"></div>
			<p class="dummy-text">Some text</p>
			<p class="dummy-text">Some more text</p>
		</div>		
		<span class="loading"></span>
		<span class="icon close-content"></span>
	</div>
</section>			

			
			
      
      <hr>
      
      <!-- contact me -->
      <section class="contact-me container pad-lr-20">
        <div class="row">
        
          <p class="h3 subheading text-center margin-0">get in touch</p>
          <h2 class="text-center text-uppercase">Contact</h2>
          <div class="text-center"><img src="img/arrow.png" /></div>    
          
          <!-- begin mailform -->
          <iframe name="no-reload" style="display:none;"></iframe>
		      <form method='post' action='#contact' style="margin-top: 2em;">     
            <div class="col-sm-12">
              <span class="input">
                <input class="input__field" type="text" id="input-name" name="input-name" />
                <label class="input__label" for="input-name">
                  <i class="input__icon"></i>
                  <span class="input__label-content">Name</span>
                </label>
              </span>
            </div>
            
            <div class="col-sm-12">
              <span class="input">
                <input class="input__field" type="email" id="input-email" name="input-email" />
                <label class="input__label" for="input-email">
                  <i class="input__icon"></i>
                  <span class="input__label-content">Email</span>
                </label>
              </span>
            </div>
                        
            <div class="col-sm-12">          
              <span class="input">
                <textarea class="input__field" type="text" id="input-message" name="input-message"></textarea>
                <label class="input__label" for="input-message">
                  <i class="input__icon"></i>
                  <span class="input__label-content">Message</span>
                </label>
                
              </span>  
            </div>                            
            
            <div class="text-center col-sm-12">
              <button class="button button__primary text-right" name="submitted">Send message</button>
            </div> 
          </form> 
            
          <?php
            if (isset($_POST['submitted']))
            //if submit button is clicked, send email
            {
          
              //get the data entered in the forms
              $name = $_POST['input-name'];
              $email = $_POST['input-email'];
              $contact = $_POST['input-contact'];
              $message = $_POST['input-message'];
            
              //compose the email message 
              $to = "doug83@iinet.net.au";
              $email_from = "doug83@iinet.net.au";   
              $email_subject = "Email from My website" ; 
              $email_body = "A new message has been submitted by the online form on My website:\n
               
              Name: $name \n  
              Email Address: $email \n  
              Contact number: $contact \n 
              Enquiry: $message"; 
            
              //from multicomm address to stop spam catcher
              $headers = "From: $email_from \n"; 
              $headers .= "Reply-To: $email \n"; 
            
              //send email
              mail($to,$email_subject,$email_body,$headers);
          
              //thankyou message on website
              echo "<p style='background:#E6EFC2; color:#529214;border:1px solid #CCDC8C;padding:3px 14px;'>Thank you $name, we will respond to your message shortly.</p>";
         
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
  <!-- end body content --> 
      
</div>
<?php include('inc/_footer.php'); ?>

<!-- jQuery CDN --> 
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> 
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> 

<!-- JS plugins --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>

<!-- build:js --> 
<script src="js/plugins/classie.js"></script>  
<script src="js/plugins/jquery.ui.touch-punch.min.js"></script> 
<script src="js/modules/horizontal-menu.js"></script> 
<script src="js/plugins/owl.carousel.js"></script> 
<script src="js/main.js"></script> 
	
		<script src="js/plugins/modernizr.custom.js"></script>
		<script src="js/plugins/helper.js"></script>
		<script src="js/plugins/grid3d.js"></script>
		<script>
			new grid3D( document.getElementById( 'grid3d' ) );
		</script>	
<!-- endbuild --> 
  
</body>
</html>