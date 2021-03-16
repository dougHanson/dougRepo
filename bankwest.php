<!DOCTYPE html>
<html lang="en-AU">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Doug Hanson">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Digital Creative for Bankwest | Doug Hanson | Digital Design and Development, Perth</title>
  <meta name="description" content="Digital creative and web design developed by Doug Hanson for Bankwest in Perth, Western Australia.">
  <meta name="keywords" content="bankwest, digital creative, web design, digital designer, web development, front end developer, ux design, perth, doug hanson">

  <!-- build:css -->
  <link rel="stylesheet" href="css/styles.css" media="all">
  <!-- endbuild -->

</head>

<?php
	// DECLARE PROJECT VARIABLE - refer to data.js
	$project = 'bankwest';
?>

<body class="project-page" id="<?php echo $project ?>">

  <!-- include frames and nav -->
  <?php include('inc/_nav.php'); ?>

  <div class="wrapper__outer">
    <div class="wrapper__inner">

      <div id="container" class="intro-effect-jam3">

        <!-- heading image -->
        <header class="header">
          <div class="bg-img">
            <img
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA+CAMAAABA6ohLAAAC91BMVEUAAACajXLLxaKzZCvitYCzbDr26bT8xVX6vT/37HLKVSimUiiUQxrqpky30LzGYSfygD+SNiKeOiqGgGrv6bzk3MD85b96FROLNhy8WjrobjaiTjnndjrdcCru1XuIjHn39uPsdym4aThMbGX1jVaxklaZQh2GJB2XMyjYfz7wmDT33HuKMhyOOxyzdGhvODHLVytSFhfEZiTygTzBWS+HKhqFKBr78ML211rx+ci6dVPBiXJQVFLxiX3647jwpUHpUya4f2n/5lb572KupGj8tJLDmm/0miHykSPzlyHxjSPvhyTvgiWIJxr80jzubiT1oCD1nR/2ox777mzsaCX3qx1/IxfqYyXnXiX6uxv78Hb84EL3ph38wzTXUyjqRiTzlCL7wSzZaSjIXCjicCf5tRr762P7yTq+Uyf9ziX9viP3pyKkNCKbMiD783/75lnDRiftfSTyiSPvdiPpbyONLhz784rhWyayPyWqSCSVKh779qv8zTL8ui/9sSviZyfQTif8xCH67lr73k3QZSn5tifldifXQCe5RyX6rSTpfSSsPCTtVCL7/mf92jjteSbsdCS0UCTtXSCUNB6ELBr8+s779JP85VD72ET2pDH81S/YYSjQWyjITifxgCOfQyKOGRr4sBn9+9/8+Ln89pv8/3LdVifBYyblMSanJSHoORbrQxF1DRD8+LPJOSiYPiGjPCH2nxqCHBl+KxhvHhP782P92FH970ugUye5PCe2KiTyeyP3owj896P83Vr881b60Ezxaj22bjf/5THqhyrZdyr/oR//1RXxexQCABDzig78/oKjcErlVynkgSfWhybpkiG4WiGKDhveeBXWaBLucg7XIwb8+MH65Hjp1GvgxGjhpz/5nSHNKSCZGx/nIx30kRViEw/80qn5pHH82WnRuWT7/1u/pFOyhzh2Oi36VCH+kSClDR3bURvsihPJYhPcTgr9vQn7lAS2KQT8t3jzq0zJSgb3JAB+Q15OMVpdQyUyKRHDUBDPib01AAAAR3RSTlMADR44NBx//f3flGhRPS4s/su7U089+/rgurmkknl0cW9UTzb98vDn2cvFubCPgHp28erd29G/vqOfnWdP5N7c1c7MyrCdkTx/r0oAAAfmSURBVEjHndd1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"
              data-src="img/sun-large.png" class="img-center lazy-load" alt="Bankwest Digital Design" />
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
              <p>Over 6 years working at Bankwest allowed me to produce a variety of online digital creative. Below is a small&nbsp;sample.</p>

              <!-- website -->
              <p class="h3 subheading padding-0 margin-0">Website</p>
              <p>Designed and implemented changes to the existing Bankwest website. Was involved with large scale development projects, including a <strong>website refresh</strong> which included defining <strong>taxonomy, information architecture, developing UI and graphical elements</strong>, and generating content. The new website was integrated with an <strong>enterprise content management system</strong>, namely <strong>Fatwire&nbsp;CMS</strong>. </p>
              <div class="item margin-bottom-20">
                <img src="img/loading.gif" data-src="img/bankwest-site.jpg" alt="Bankwest eDM" class="lazy-load lazy-load--loading img-center img-shadow">
              </div>
              <p>&nbsp;</p>

              <!-- landing pages -->
              <p class="h3 subheading padding-0 margin-0">Landing pages</p>
              <p>A large number of on-brand, dynamic <strong>campaign landing pages</strong> were developed using <strong>HTML, CSS, Javascript and JQuery</strong>. These were designed to have a single call to action, driving sales through the online application&nbsp;system. </p>

              <div class="owl-carousel owl-theme">
                <div class="item">
                  <img src="img/loading.gif" data-src="img/bankwest-landing-mobile.png" alt="Bankwest eDM" class="lazy-load lazy-load--loading img-frame img-center img-responsive">
                </div>
                <div class="item">
                  <img src="img/loading.gif" data-src="img/bankwest-landing-page-more.jpg" alt="Bankwest eDM" class="lazy-load  lazy-load--loadingimg-frame img-center img-responsive">
                </div>
              </div>

              <!-- edms -->
              <p class="h3 subheading padding-0 margin-bottom-0 margin-top-20">eDMs</p>
              <p>Optimised for viewing on mobile devices, I created eDMs which rendered well in all major email clients, using clean code and best practices for&nbsp;conversion.</p>

              <div class="owl-carousel owl-theme">
                <div class="item">
                  <img src="img/loading.gif" class="lazy-load lazy-load--loading img-frame img-center img-responsive" data-src="img/bankwest-edm-service.png" alt="" />
                </div>
                <div class="item">
                  <img src="img/loading.gif" class="lazy-load lazy-load--loading img-frame img-center img-responsive" data-src="img/bankwest-edm-sales.png" alt="" />
                </div>
              </div>

              <!-- calculators -->
              <!--<p class="h3 subheading padding-0 margin-bottom-0 margin-top-40">Calculators</p>-->

              <p>&nbsp;</p>


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

  <!-- page specific scripts -->
  <script>
    // OWL CAROUSEL - initiate Owl Carousel plugin
    $('.owl-carousel').owlCarousel({
      stagePadding: 0,
      //lazyLoad: true,
      loop: false,
      margin: 30,
      nav: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1400: {
          items: 2
        }
      }
    });
  </script>

</body>