<!DOCTYPE html>
<html lang="en-AU">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Doug Hanson">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Web Page Redesign for iiNet | Doug Hanson | Web Development and UX Design, Perth</title>
  <meta name="description" content="Website rebuild case study by Doug Hanson, a web designer and front end developer from Perth, Western Australia.">
  <meta name="keywords" content="iinet plan pages, web design, designer, web development, front end developer, ux design, perth, doug hanson">

  <!-- build:css -->
  <link rel="stylesheet" href="css/styles.css" media="all">
  <!-- endbuild -->

</head>

<?php
	// DECLARE PROJECT VARIABLE - refer to data.js
	$project = 'product_page_redesign';
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
            <img
              src="data:image/png;base64,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"
              data-src="img/iinet-plan-pages-header.jpg" class="lazy-load" alt="iiNet Product Page Refresh" />
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
              <p>iiNet's core product pages presented a complex user experience. They were not responsive, and were no longer aligned with the brand. Each product page also had a unique interface and layout, confusing potential customers and customer service representatives. This presented an opportunity to improve the user experience, by simplifying these pages and unifying them with each other and the&nbsp;brand.</p>

              <p class="h3 subheading padding-0 margin-0">The process</p>
              <p>To begin gathering <strong>user requirements</strong>, I conducted a <strong>focus group</strong> with customer service reps, to identify pain points with the existing design. This gave insight not only into what users like and dislike, but also what users do, how they do it, and what frustrates them. I then conducted an <strong>expert review</strong> and a <strong>competitor analysis</strong>, to investigate the best way to solve the identified problems.</p>
              <p>Iterations of <strong>wireframes and designs</strong> followed, and reviewed by key stakeholders at each major step. Once a very basic <strong>prototype</strong> was ready using InVision App, <strong>user testing sessions</strong> were then conducted with a handful of users, which allowed us to identify any remaining issues and refine the design&nbsp;further.</p>

              <div class="item">
                <a href="img/iinet-plan-pages-naked-dsl.png" data-lightbox="DSL" data-title="DSL Web Design"><img src="img/loading.gif" data-src="img/iinet-plan-pages-naked-dsl.png" alt="iiNet Product Page Refresh" class="lazy-load lazy-load--loading img-shadow img-center margin-bottom-20"></a>
              </div>
              <p>&nbsp;</p>

              <p class="h3 subheading padding-0 margin-0">The build</p>
              <p>To begin the build, I started by coding the <strong>basic UI using HTML and SASS</strong>. The majority of UI components exist within a <strong>bespoke CSS framework which has evolved from Bootstrap</strong>, which allowed for <strong>rapid web development</strong>. I then added some additional <strong>media queries</strong> and styles to ensure the content was presentable at all breakpoints. At this stage the first round of <strong>display testing was conducted using supported browsers and devices</strong>.</p>
              <p>Once the UI was code complete, I was able to focus on building the <strong>single page AngularJS application</strong>. After adding the relevant product data to the model, the ng-repeat directive was used to cycle through each of the plans, and various <strong>Angular expressions and directives</strong> were used to bind this product's information to the view which is seen by end users. Additional <strong>JavaScript was written within the Angular Controller</strong> to control the different states of&nbsp;the&nbsp;UI.</p>


              <div class="item margin-bottom-20">
                <a href="img/iinet-plan-pages-code.png" data-lightbox="code" data-title="Sample of AngularJS code">
                  <img src="img/loading.gif" data-src="img/iinet-plan-pages-code.png" alt="Sample AngularJS code" class="lazy-load lazy-load--loading img-shadow img-center">
                </a>
              </div>
              <p>&nbsp;</p>


              <p class="h3 subheading padding-0 margin-0">The result</p>
              <p>The new design was created with a stepped approach, making it easy for users to understand. Each plan is broken out into its own box, with emphasis on the benefit (the quota) rather than the price. The address check field was previously overlooked, so this was given more prominence as the first step. Large checkboxes have a very distinct active state to make it clear to the user what they have chosen.</p>
              <p>The new responsive pages reduce cognitive load by breaking down the plan customisation into intuitive steps. Both <strong>conversion and bounce rates improved once the new pages were&nbsp;released</strong>.</p>

              <!-- additional screenshots -->
              <p class="h3 subheading padding-0 margin-top-40">Additional screenshots</p>
              <div class="owl-carousel owl-theme">
                <div class="item">
                  <a href="img/iinet-plan-pages-mobile-banner.png" data-lightbox="iinet-plan-pages" data-title="Campaign banner"><img src="img/loading.gif" data-src="img/iinet-plan-pages-mobile-banner.png" class="lazy-load lazy-load--loading img-center" alt="" /></a>
                </div>
                <div class="item">
                  <a href="img/iinet-plan-pages-mobile-plans.png" data-lightbox="iinet-plan-pages" data-title="Broadband plans"><img src="img/loading.gif" data-src="img/iinet-plan-pages-mobile-plans.png" class="lazy-load lazy-load--loading img-center" alt="" /></a>
                </div>
                <div class="item">
                  <a href="img/iinet-plan-pages-mobile-signup.png" data-lightbox="iinet-plan-pages" data-title="Signup summary"><img src="img/loading.gif" data-src="img/iinet-plan-pages-mobile-signup.png" class="lazy-load lazy-load--loading img-center" alt="" /></a>
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