<!DOCTYPE html>
<html>

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
            <img src="img/policies-header.min.png" data-src="img/policies-header.png" class="lazy-load" alt="Policies website" />
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
              <p>The existing Department of Education Policies website was extremely outdated and hard to use. My goal was to improve the user experience for both end users and authors, whilst designing a visually appealing website.</p>
              <!-- <div class="item margin-bottom-20">
                <img src="img/loading.gif" data-src="img/policies-old-site.png" alt="Icon design" class="lazy-load img-center img-frame">
              </div>
              <p class="margin-bottom-20">&nbsp;</p> -->

              <p class="h3 subheading padding-0 margin-0">Designs</p>
              <p>I aligned the branding with the Department of Education website and simplified the user journey by offering two main options on the homepage. Users can now choose to search for documents by category or by content type, which is important given the large volume of content.</p>
              <div class="owl-carousel owl-theme">
                <div class="item margin-bottom-40">
                  <a href="img/policies-design-1.png" data-lightbox="code" data-title="Policies UI design">
                    <img src="img/loading.gif" data-src="img/policies-design-1.png" alt="Policies homepage" class="lazy-load img-frame img-center">
                  </a>
                </div>
                <div class="item margin-bottom-40">
                  <a href="img/policies-design-2.png" data-lightbox="code" data-title="Policies UI design">
                    <img src="img/loading.gif" data-src="img/policies-design-2.png" alt="Policies homepage" class="lazy-load img-frame img-center">
                  </a>
                </div>
              </div>
              <p class="margin-bottom-20">&nbsp;</p>

              <p>For easy identification between different yet similar content types, I created a cohesive SVG icon set for easy visual recognition.</p>
              <div class="item margin-bottom-20">
                <img src="img/loading.gif" data-src="img/policies-icons.png" alt="Icon design" class="lazy-load img-center full-width">
              </div>
              <p class="margin-bottom-20">&nbsp;</p>


              <p class="h3 subheading padding-0 margin-0">CSS over JS</p>
              <p>By designing with progressive enhancement in mind the majority of the website can be used with JavaScript disabled. By focusing on developing semantic HTML without the use of JS has also made the site naturally accessible from the outset.</p>
              <p>The mobile menu was developed by styling checkboxes.</p>
              <p>Accordions were developed using checkboxes, adding CSS transitions to animate the expand and collapse.</p>
              <p>Tabs were developed by styling radio buttons, which show and hide adjacent content when checked.</p>


              <p class="h3 subheading padding-0 margin-0">Complex freemarker templates</p>
              <p>Create structures to enable authors easy content creation process</p>
              <p>Freemarker to populate and style content as it was created</p>
              <p>Browse page uses JPList plugin, degrades gracefully.</p>


              <p class="h3 subheading padding-0 margin-0">The result</p>
              <p>The result was a <strong>fully responsive, accessible, visually appealing</strong> job lisiting portal, with an <strong>improved user experience</strong> for end users and content authors alike.</p>

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
          items: 1
        }
      }
    });
  </script>


</body>