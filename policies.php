<!DOCTYPE html>
<html lang="en-AU">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Doug Hanson">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Policies website | Doug Hanson | Web Development and Design, Perth</title>
  <meta name="description" content="Policies website designed and built for the Department of Education by Doug Hanson, a front end web developer in Perth, Western Australia.">
  <meta name="keywords" content="web design, designer, web development, front end developer, ux design, perth, doug hanson">

  <!-- build:css -->
  <link rel="stylesheet" href="css/styles.css" media="all">
  <!-- endbuild -->

</head>

<?php
	// DECLARE PROJECT VARIABLE - refer to data.js
	$project = 'policies';
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
            <img src="data:image/png;base64,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" data-src="img/policies-header.png" class="lazy-load" alt="Policies website" />
          </div>
        </header>

        <!-- heading -->
        <div class="container">
          <div class="title">
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
              <p>The existing Department of Education Policies website was extremely outdated and hard to use. My goal was to improve the <strong>user experience</strong> for both end users and <strong>web content authors</strong>, while designing a more visually appealing website.</p>
              <!-- <div class="item margin-bottom-20">
                <img src="img/loading.gif" data-src="img/policies-old-site.png" alt="Icon design" class="lazy-load lazy-load--loading img-center img-frame">
              </div>
              <p class="margin-bottom-20">&nbsp;</p> -->

              <p class="h3 subheading padding-0 margin-0">Web designs</p>
              <p>I designed simple yet corporate templates which aligned with the Department of Education's <strong>website branding</strong>. I also <strong>improved the UX by simplifying the user journey</strong> through offering two main options on the homepage. Users can now choose to search for documents by category or by content type, which is important given the large volume of content.</p>
              <p>I also created a new cohesive <strong>SVG icon set using Adobe Illustrator</strong>, for easy identification between different yet similar content types.</p>

              <div class="owl-carousel owl-theme">
                <div class="item margin-bottom-40">
                  <a href="img/policies-design-2.png" data-lightbox="ui designs" data-title="Policies UI design">
                    <img src="img/policies-design-2.png" data-src="img/policies-design-2.png" alt="Policies homepage" class="img-frame img-center">
                  </a>
                </div>
                <div class="item margin-bottom-40">
                  <a href="img/policies-design-3.png" data-lightbox="ui designs" data-title="Policies UI design">
                    <img src="img/policies-design-3.png" data-src="img/policies-design-3.png" alt="Policies browse page" class="img-frame img-center">
                  </a>
                </div>
                <div class="item margin-bottom-40">
                  <a href="img/policies-design-4.png" data-lightbox="ui designs" data-title="Policies UI design">
                    <img src="img/policies-design-4.png" data-src="img/policies-design-4.png" alt="Policies category page" class="img-frame img-center">
                  </a>
                </div>
                <div class="item margin-bottom-40">
                  <a href="img/policies-design-5.png" data-lightbox="ui designs" data-title="Policies UI design">
                    <img src="img/policies-design-5.png" data-src="img/policies-design-5.png" alt="Policies policy page" class="img-frame img-center">
                  </a>
                </div>                                                
              </div>
              <p class="margin-bottom-20">&nbsp;</p>


              <p class="h3 subheading padding-0 margin-0">CSS before JavaScript</p>
              <p>By designing with <strong>progressive enhancement</strong> in mind, the majority of the website has full functionality with JavaScript disabled. By focusing on developing <strong>semantic HTML with minimal inclusion of JavaScript</strong> has made the site naturally <strong>keyboard navigable and screen reader accessible</strong> from the outset.</p>

              <p>The <strong>responsive, off-canvas mobile menu</strong> was developed by styling checkboxes.</p>
              <div class="owl-carousel owl-theme">
                <div class="item margin-bottom-40">
                  <a href="img/policies-mobile-menu.png" data-lightbox="CSS only mobile menu" data-title="Policies responsive mobile menu">
                    <img src="img/loading.gif" data-src="img/policies-mobile-menu.png" alt="responsive mobile menu" class="lazy-load lazy-load--loading img-frame img-center">
                  </a>
                </div>
                <div class="item margin-bottom-40">
                  <a href="img/policies-mobile-menu-code.png" data-lightbox="CSS only mobile menu" data-title="Policies responsive mobile menu">
                    <img src="img/loading.gif" data-src="img/policies-mobile-menu-code.png" alt="responsive mobile menu" class="lazy-load lazy-load--loading img-frame img-center">
                  </a>
                </div>
              </div>
              <p class="margin-bottom-20">&nbsp;</p>

              <p>Accordions were developed using checkboxes and adding <strong>CSS transitions</strong> to animate the expand and collapse.</p>
              <div class="owl-carousel owl-theme">
              <div class="item margin-bottom-40">
                  <a href="img/policies-accordions.png" data-lightbox="CSS only accordions" data-title="Policies CSS accordions">
                    <img src="img/loading.gif" data-src="img/policies-accordions.png" alt="CSS accordions" class="lazy-load lazy-load--loading img-frame img-center">
                  </a>
                </div>
                <div class="item margin-bottom-40">
                  <a href="img/policies-accordions-code.png" data-lightbox="CSS only accordions" data-title="Policies CSS accordions">
                    <img src="img/loading.gif" data-src="img/policies-accordions-code.png" alt="CSS accordions" class="lazy-load lazy-load--loading img-frame img-center">
                  </a>
                </div>
              </div>
              <p class="margin-bottom-20">&nbsp;</p>

              <p>Tabs were developed by styling radio buttons, which show and hide adjacent content when checked.</p>
              <div class="owl-carousel owl-theme">
              <div class="item margin-bottom-40">
                  <a href="img/policies-tabs.png" data-lightbox="CSS only tabs" data-title="Policies CSS tabs">
                    <img src="img/loading.gif" data-src="img/policies-tabs.png" alt="CSS tabs" class="lazy-load lazy-load--loading img-frame img-center">
                  </a>
                </div>
                <div class="item margin-bottom-40">
                  <a href="img/policies-tabs-code.png" data-lightbox="CSS only tabs" data-title="Policies CSS tabs">
                    <img src="img/loading.gif" data-src="img/policies-tabs-code.png" alt="CSS tabs" class="lazy-load lazy-load--loading img-frame img-center">
                  </a>
                </div>
              </div>
              <p class="margin-bottom-20">&nbsp;</p>


              <p class="h3 subheading padding-0 margin-0">Complex freemarker templates</p>
              <p>Freemarker templates were developed to save the client time categorising content, making the content authoring experience as simple as possible by grouping content of the same content type server side before being displayed client side.</p>
              <p>Because many of the pages shared similar functionality, <strong>Freemarker macros</strong> were created to reuse and reduce repetition of code.</p>
              <p>To allow end users to filter all content across the site I implemented JPList, <strong>a jQuery plugin</strong>, which <strong>degrades gracefully</strong> on older browsers or for users with JS disabled.</p>
              <div class="owl-carousel owl-theme">
              <div class="item margin-bottom-40">
                  <a href="img/policies-freemarker-template.png" data-lightbox="Freemarker template" data-title="Policies Freemarker template">
                    <img src="img/loading.gif" data-src="img/policies-freemarker-template.png" alt="Freemarker template" class="lazy-load lazy-load--loading img-frame img-center">
                  </a>
                </div>
                <div class="item margin-bottom-40">
                  <a href="img/policies-freemarker-browse.png" data-lightbox="Freemarker template" data-title="Policies Freemarker template">
                    <img src="img/loading.gif" data-src="img/policies-freemarker-browse.png" alt="Freemarker template" class="lazy-load lazy-load--loading img-frame img-center">
                  </a>
                </div>
              </div>
              <p class="margin-bottom-20">&nbsp;</p>              


              <!-- <p class="h3 subheading padding-0 margin-0">Additional screenshots</p> -->


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
      dots: true,
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