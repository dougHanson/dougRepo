<!DOCTYPE html>
<html lang="en-AU">

<head>
<!--
   ___                   __ __
  / _ \___  __ _____ _  / // /__ ____  ___ ___  ___
 / // / _ \/ // / _ `/ / _  / _ `/ _ \(_-</ _ \/ _ \
/____/\___/\_,_/\_, / /_//_/\_,_/_//_/___/\___/_//_/
               /___/
-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Doug Hanson">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Doug Hanson | Web Development and Design, Perth</title>
  <meta name="description"        content="Doug Hanson is a web designer and front end web developer from Perth, Western Australia.">
  <meta name="keywords"           content="web design, designer, web development, front end developer, ux design, perth, doug hanson">
  <meta name="twitter:card"       content="summary_large_image">
  <meta name="twitter:creator"    content="@Doug83">
  <meta name="twitter:image"      content="http://members.iinet.net.au/~doug.hanson/img/doug.png">
  <meta name="twitter:image:src"  content="http://members.iinet.net.au/~doug.hanson/img/doug.png">  
  <meta property="og:title"       content="Doug Hanson | Web Development and Design, Perth" />
  <meta property="og:description" content="View work from Doug Hanson, a front end web developer from Perth, Western Australia." />
  <meta property="og:image"       content="http://members.iinet.net.au/~doug.hanson/img/doug.png" />

  <!-- build:css -->
  <link rel="stylesheet" href="css/styles.css" media="all">
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
    <div class="wrapper__outer">
      <div class="wrapper__inner">

      <!-- ###############################
			//   Intro / hero content
			#################################### -->
        <section id="hero-content" class="hero-content parallax-bg">
          <div class="lazy-load hero-content__bg">
            <!--<div class="fadeOut"><a href="home.php"><img src="img/namelogo.png" /></a></div>-->
            <h2 class="h1 hero-heading fadeOut"><span>Doug Hanson</span></h2>
            <h1 class="h3 subheading subheading__hero grey-2 fadeOut">Web designer &amp; front end developer based in Perth, Western&nbsp;Australia</h1>

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
        </section>
        <!-- end hero content -->


      <!-- ###############################
			//   Selected Works
			#################################### -->
        <section id="selected-works" class="selected-works container">

          <p class="h3 subheading text-center margin-0">my portfolio</p>
          <p class="h2 text-center">Selected works</p>
          <div class="text-center"><img src="svg/spear.svg" alt="" height="10" width="227"></div>

          <div class="work-item-wrapper">
            <div class="row">

              <!-- NEW FUTURE -->
              <a href="new-future.php" class="progressLoad" aria-label="New Future website">
                <article class="work-item">
                  <div class="work-item__drawings" style="padding-top: 140px;">
                    <img class="illustration lazy-load lazy-load--loading" src="img/loading.gif" data-src="img/new-future.png" alt="" style="max-width: 280px; padding-top: 140px;" />
                    <?php echo file_get_contents("svg/new-future.svg"); ?>
                  </div>

                  <div class="work-item__content">
                    <p class="work-item__heading">New Future website</p>
                    <h2 class="h5 work-item__subheading">ui &amp; ux design / web&nbsp;development</h2>
                  </div>
                </article>
              </a>

              <!-- POLICIES -->
              <a href="policies.php" class="progressLoad" aria-label="Policies website">
                <article class="work-item">
                  <div class="work-item__drawings" style="padding-top: 55px;">
                    <img class="illustration lazy-load lazy-load--loading" src="img/loading.gif" data-src="img/policies.png" alt="" style="max-width: 155px; padding-top: 53px;" />
                    <?php echo file_get_contents("svg/policies.svg"); ?>
                  </div>

                  <div class="work-item__content">
                    <p class="work-item__heading">Policies website</p>
                    <h2 class="h5 work-item__subheading">ux design / web&nbsp;development</h2>
                  </div>
                </article>
              </a>

              <!-- JOBS BOARD -->
              <a href="jobs.php" class="progressLoad" aria-label="Interactive Job Portal">
                <article class="work-item work-item--jobs">
                  <div class="work-item__drawings" >
                    <img class="illustration lazy-load lazy-load--loading" src="img/loading.gif" data-src="img/jobs-wa.png" alt="" style="max-width: 225px; padding-top: 15px;" />
                    <?php echo file_get_contents("svg/jobs.svg"); ?>
                  </div>

                  <div class="work-item__content">
                    <p class="work-item__heading">Interactive Job Portal</p>
                    <h2 class="h5 work-item__subheading">ux design / web development / application&nbsp;development</h2>
                  </div>
                </article>
              </a>

              <!-- FETCH ANGULAR JS -->
              <a href="fetch.php" class="progressLoad" aria-label="AngularJS Fetch TV App">
                <article class="work-item work-item__content--pull-up-mobile">
                  <div class="work-item__drawings" >
                    <img class="illustration lazy-load lazy-load--loading" src="img/loading.gif" data-src="img/fetch-mini.png" alt="" style="max-width: 250px; padding-top: 25px;" />
                    <?php echo file_get_contents("svg/fetch-mini.svg"); ?>
                  </div>

                  <div class="work-item__content work-item__content--pull-up-mobile">
                    <p class="work-item__heading">AngularJS Fetch TV App</p>
                    <h2 class="h5 work-item__subheading">web design / ux development / single page&nbsp;application</h2>
                  </div>
                </article>
              </a>

              <!-- IINET PLAN PAGES -->
              <a href="iinet-plan-pages.php" class="progressLoad" aria-label="Product Page Redesign">
                <article class="work-item">
                  <div class="work-item__drawings">
                    <img class="illustration lazy-load lazy-load--loading" src="img/loading.gif" data-src="img/finn-balloons.png" alt="" style="max-width: 244px;" />
                    <?php echo file_get_contents("svg/finn.svg"); ?>
                  </div>

                  <div class="work-item__content">
                    <p class="work-item__heading">Product Page Redesign</p>
                    <h2 class="h5 work-item__subheading">ux design / web development &amp; design</h2>
                  </div>
                </article>
              </a>

              <!-- MOBII MANAGER -->
              <a href="mobii-manager.php" class="progressLoad" aria-label="Mobii Manager">
                <article class="work-item">
                  <div class="work-item__drawings">
                    <img class="illustration lazy-load lazy-load--loading" src="img/loading.gif" data-src="img/mobii-manager.png" alt="" style="max-width: 300px;" />
                    <?php echo file_get_contents("svg/galaxy-phone.svg"); ?>
                  </div>

                  <div class="work-item__content">
                    <p class="work-item__heading">Mobii Manager</p>
                    <h2 class="h5 work-item__subheading">mobile app design / ui design</h2>
                  </div>
                </article>
              </a>

              <!-- MULTICOMM -->
              <a href="multicomm.php" class="progressLoad" aria-label="Multicomm Website">
                <article class="work-item show-all-content">
                  <div class="work-item__drawings">
                    <img class="illustration lazy-load lazy-load--loading" src="img/loading.gif" data-src="img/multicomm.png" alt="" style="max-width: 300px; padding-top:15px;" />
                    <?php echo file_get_contents("svg/multicomm.svg"); ?>
                  </div>

                  <div class="work-item__content">
                    <p class="work-item__heading">Multicomm Website</p>
                    <h2 class="h5 work-item__subheading">branding / web design &amp; development</h2>
                  </div>
                </article>
              </a>

              <!-- BANKWEST -->
              <a href="bankwest.php" class="progressLoad" aria-label="Bankwest Digital Design">
                <article class="work-item show-all-content">
                  <div class="work-item__drawings">
                    <img class="illustration lazy-load lazy-load--loading" src="img/loading.gif" data-src="img/sunny.png" alt="" style="max-width: 250px; padding-top: 25px;" />
                    <?php echo file_get_contents("svg/sun.svg"); ?>
                  </div>

                  <div class="work-item__content">
                    <p class="work-item__heading">Bankwest Digital Design</p>
                    <h2 class="h5 work-item__subheading">digital creative / digital marketing / web&nbsp;authoring</h2>
                  </div>
                </article>
              </a>

            </div>

            <!-- show all btn -->
            <div class="col-sm-12 text-center">
              <button class="button progressLoad text-center show-all-btn margin-top-40">Show all</button>
            </div>

          </div>

        </section>
        <!-- end selected works -->


        <hr>


      <!-- ###############################
			//   About me
			#################################### -->
        <section id="about" class="about container">
          <p class="h3 subheading text-center margin-0">roles and experience</p>
          <p class="h2 text-center">About me</p>
          <div class="text-center"><img src="svg/spear.svg" alt="" height="10" width="227" class="margin-bottom-40"></div>
          <div class="col-lg-9">
            <p>Over <span class="js-years-experience">10</span> years of hands on experience in user-centred web design &amp; front end web development. Experience designing User Interfaces (UI) and User Experience (UX) for products from various domains. Expertise in handling projects in Web development, Responsive Web Design, JavaScript, JQuery, AngularJS, HTML5, CSS3, SASS, Freemarker and&nbsp;PHP.</p>
            <p class="hidden-xs hidden-xxs">A driven, creative professional with a broad technical skill set. An excellent communicator experienced in interpreting and implementing client and staff visions of new websites and digital creative.</p>
            <p>&nbsp;</p>
          </div>
          <div class="col-lg-3 text-center visible-lg">
            <div id="drawings" class="margin-top-10">
              <img src="img/loading.gif" data-src="img/doug.png" class="lazy-load profile-pic img-circle lazy-load--loading" alt="Doug Hanson, web developer Perth">
              <?php //echo file_get_contents("svg/doug.svg"); ?>
            </div>
          </div>


          <div class="col-lg-12">
            <p>Experience</p>
            <table class="full-width">
              <tbody>
                <tr>
                  <td class="td-employer"><a href="https://www.campfire.com.au/" target="_blank" rel="noreferrer">Campfire</a>
                    <br>2018 - Present</td>
                  <td>
                    <strong>Front-end Web Developer</strong>
                    <br>
                    <span class="hidden-xxs">Based at the Department of Education WA as a front-end developer, working to improve the public facing website for end-users and content authors. <span class="hidden-xs">Currently developing for Liferay DXP with a strong focus on accessibility and creating better user&nbsp;experiences.</span></span>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://www.iinet.net.au/" target="_blank" rel="noreferrer">iiNet</a>
                    <br>2013 - 2018</td>
                  <td>
                    <strong>Senior Web Designer</strong>
                    <br>
                    <span class="hidden-xxs"><span class="hidden-xs">Designed, developed, and maintained iiNet's web-based products and systems to support business initiatives.</span> Created prototypes, UI, IA, graphical and architectural requirements, and conducted usability assessments to evaluate solutions before implementing the front&nbsp;end.</span>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://www.bankwest.com.au/" target="_blank" rel="noreferrer">Bankwest</a>
                    <br>2010 - 2013</td>
                  <td>
                    <strong>Digital Production Specialist</strong>
                    <br>
                    <span class="hidden-xxs">Worked with key stakeholders to design and deliver innovative digital creative elements to drive Bankwest initiatives. <span class="hidden-xs">Designed and implemented changes to the existing Bankwest website and was involved with large scale development projects, including a website refresh and designs for the original Bankwest&nbsp;Mobile&nbsp;App.</span></span>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://www.bankwest.com.au/" target="_blank" rel="noreferrer">Bankwest</a>
                    <br>2009 - 2010</td>
                  <td>
                    <strong>Online Marketing Manager</strong>
                    <br>
                    <span class="hidden-xxs"><span class="hidden-xs">Managed the marketing and customer experience of multiple product portfolios via the online channel.</span> Responsible for implementing well defined campaign strategies, campaign optimisation, budget management, agency relationships, and online creative&nbsp;development.</span>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://www.bankwest.com.au/" target="_blank" rel="noreferrer">Bankwest</a>
                    <br>2007 - 2009</td>
                  <td>
                    <strong>eCommerce Marketing Coordinator</strong>
                    <br>
                    <span class="hidden-xxs">Coordinated the Bankwest online marketing and sales function, responsible for online marketing execution, management information reporting, agency relationships and strategic&nbsp;projects.</span>
                  </td>
                </tr>
                <tr>
                  <td><a href="https://www.whitechalkroad.com.au/" target="_blank" rel="noreferrer">White Chalk Road</a>
                    <br>2006 - 2007</td>
                  <td>
                    <strong>Internet Marketing Consultant</strong>
                    <br>
                    <span class="hidden-xxs">Managed a wide, varied portfolio of over 20 clients to improve ROI through Search Engines by implementing proven SEO methodologies. <span class="hidden-xs">Responsible for setting up, managing, and optimising small SEM campaigns within Google Adwords to drive acquisitions and improve&nbsp;ROI.</span></span>
                  </td>
                </tr>
              </tbody>
            </table>

            <!-- resume` link -->
            <div class="row">
              <div class="col-sm-12 margin-top-30 ">
                <a href="doc/Doug-Hanson-Resume.pdf" target="_blank" class="button button--primary progressLoad margin-right-10">Download Resume` (PDF 161kB)</a>
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

          <p class="h3 subheading text-center margin-0">get in touch</p>
          <p class="h2 text-center">Contact</p>
          <div class="text-center"><img src="svg/spear.svg" height="10" width="227" alt=""></div>


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
          <form method='post' action='home.php#contacted' style="margin-top: 2em;">
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
              <button class="button button--primary progressLoad text-right" name="submitted">Send message</button>
            </div>
          </form>
          <!-- end mailform -->
        </section>

        <div id="contacted">
          <!-- -->
        </div>
        <!-- end contact me -->


      </div>
      <!-- end wrapper__inner -->

    </div>
    <!-- end wrapper__outer -->

    <div class="clearfix"> </div>


  </div>
  <!-- end wrapper -->

  <!-- include footer -->
  <?php include('inc/_footer.php'); ?>


</body>

</html>