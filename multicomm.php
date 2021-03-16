<!DOCTYPE html>
<html lang="en-AU">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Doug Hanson">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Website Development for Multicomm | Doug Hanson | Web Design and Development, Perth</title>
  <meta name="description" content="A case study of a freelance web development project by Doug Hanson, a web designer and front end developer from Perth, Western Australia.">
  <meta name="keywords" content="multicomm, web design, designer, web development, front end developer, ux design, perth, doug hanson">

  <!-- build:css -->
  <link rel="stylesheet" href="css/styles.css" media="all">
  <!-- endbuild -->

</head>

<?php
	// DECLARE PROJECT VARIABLE - refer to data.js
	$project = 'multicomm';
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
              src="data:image/png;base64,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"
              data-src="img/multicomm-header.jpg" class="lazy-load" alt="Multicomm Website Development" />
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
              <p>Multicomm's new website was a freelance web development project which I completed in my spare time. Keeping nothing but the original colours, it began with a rebranding exercise, including the design of a new&nbsp;logo.</p>
              <!--<p><img src="img/multicomm-devices.png" alt="Multicomm Website Screenshot" class="img-responsive"></p>-->

              <p class="h3 subheading padding-0 margin-0">The process</p>
              <p>As this page was being built from scratch, I started by using <a href="http://styletil.es/">Style Tiles</a> to <strong>communicate the visual elements of the online brand</strong> to the client. After further requirements gathering I was able to produce templated <strong>web designs</strong> for the homepage, category pages and content&nbsp;pages.</p>

              <div class="item">
                <a href="img/multicomm-business.jpg" data-lightbox="Multicomm" data-title="Multicomm Web Design"><img src="img/loading.gif" data-src="img/multicomm-business.jpg" alt="Multicomm Website Screenshot" class="lazy-load lazy-load--loading img-center img-shadow margin-bottom-40"></a>
              </div>

              <p class="h3 subheading padding-0 margin-top-40 margin-bottom-0">The build</p>
              <p>For the build, I chose to use <strong>Bootstrap</strong> as my <strong>CSS framework</strong>, as it would allow for rapid <strong>web development</strong>. I used a basic <strong>PHP mail script</strong> to add functionality to the form, and leveraged the <strong>Google Maps API</strong> to display the client's three office locations on the one&nbsp;map.</p>

              <div class="item margin-bottom-20">
                <a href="img/multicomm-code.png" data-lightbox="code" data-title="Sample of HTML code">
                  <img src="img/loading.gif" data-src="img/multicomm-code.png" alt="HTML" class="lazy-load lazy-load--loading img-center img-shadow">
                </a>
              </div>
              <p>&nbsp;</p>


              <p class="h3 subheading padding-0 margin-0">The result</p>
              <p>The result was a fully <strong>responsive website</strong> which the client was extremely pleased with, and is still live at the time of publishing this case&nbsp;study.</p>

              <!-- additional screenshots -->
              <p class="h3 subheading padding-0 margin-top-40">Additional screenshots</p>
              <div class="owl-carousel owl-theme">
                <div class="item">
                  <a href="img/multicomm-mobile-home.png" data-lightbox="multicomm" data-title="Mobile homepage">
                    <img class="img-center lazy-load lazy-load--loading" src="img/loading.gif" data-src="img/multicomm-mobile-home.png" alt="" /></a>
                </div>
                <div class="item">
                  <a href="img/multicomm-mobile-nav.png" data-lightbox="multicomm" data-title="Mobile navigation">
                    <img class="img-center lazy-load lazy-load--loading" src="img/loading.gif" data-src="img/multicomm-mobile-nav.png" alt="" /></a>
                </div>
                <div class="item">
                  <a href="img/multicomm-mobile-page.png" data-lightbox="multicomm" data-title="Product page">
                    <img class="img-center lazy-load lazy-load--loading" src="img/loading.gif" data-src="img/multicomm-mobile-page.png" alt="" /></a>
                </div>
                <div class="item">
                  <a href="img/multicomm-mobile-contact.png" data-lightbox="multicomm" data-title="Contact form">
                    <img class="lazy-load lazy-load--loading" src="img/loading.gif" data-src="img/multicomm-mobile-contact.png" alt="" /></a>
                </div>
                <div class="item">
                  <a href="img/multicomm-style-tile.png" data-lightbox="multicomm" data-title="brand elements">
                    <img class="img-center lazy-load lazy-load--loading" src="img/loading.gif" data-src="img/multicomm-style-tile.png" alt="" style="border: 1px solid #d1d1d0" /></a>
                </div>
              </div>
              <p class="margin-bottom-40">&nbsp;</p>

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
      lazyLoad: true,
      loop: false,
      margin: 10,
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