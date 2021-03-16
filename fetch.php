<!DOCTYPE html>
<html lang="en-AU">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Doug Hanson">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>AngularJS Web Application for iiNet Fetch TV | Doug Hanson | Web Development and Design, Perth</title>
  <meta name="description" content="AngularJS web application case study by Doug Hanson, a front end web developer in Perth, Western Australia.">
  <meta name="keywords" content="fetch, web design, designer, web development, front end developer, ux design, iinet, perth, doug hanson">

  <!-- build:css -->
  <link rel="stylesheet" href="css/styles.css" media="all">
  <!-- endbuild -->

</head>

<?php
	// DECLARE PROJECT VARIABLE - refer to data.js
	$project = 'fetch';
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
              data-src="img/fetch-header.png" class="lazy-load" alt="Fetch TV" />
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
              <p>iiNet was promoting a Fetch TV offer which enabled users to purchase discounted Fetch hardware and one channel pack for $10, and individual channel packs for $6 each, when purchasing internet on a 24 month contract. Users could also upgrade the Fetch set top box to a Fetch Mighty for an additional $250, and could purchase up to three set top boxes. The challenges came from showcasing a detailed offer without confusing our end users, and programming the complexities in <strong>AngularJS</strong>. </p>

              <p class="h3 subheading padding-0 margin-0">The process</p>
              <p>After meeting with the Marketing &amp; Products teams to determine the most important features to promote, multiple <strong>mobile first wireframes</strong> and eventually <strong>web designs</strong> were worked up in Photoshop, to play with how the information could be laid out while providing a seamless <strong>user experience</strong>. To make things easier to use, additional options such as upgrading hardware and purchasing Ultimate Channel Pack were only revealed to the user once they had opted to purchase a basic Fetch subscription.</p>

              <div class="item">
                <a href="img/fetch.gif" data-lightbox="fetch" data-title="Fetch TV UI Design"><img src="img/loading.gif" data-src="img/fetch.gif" class="lazy-load lazy-load--loading img-responsive img-center img-shadow" alt="" /></a>
              </div>
              <p>&nbsp;</p>

              <p class="h3 subheading padding-0 margin-0">The build</p>
              <p>Following suit from the web designs, I began the build using a <strong>mobile first approach using HTML and SASS</strong>. This allowed me to add additional <strong>CSS media queries</strong> to style the content as the window size increased. <strong>Browser and display testing</strong> was then carried out to ensure the display was <strong>platform&nbsp;agnostic</strong>.</p>
              <p>The single page <strong>AngularJS web application</strong> proved quite challenging, as there was a large number of moving parts. To keep the authoring experience clean, I ensured that <strong>best coding pracitces</strong> were used, such as avoiding global variables, and using directives only for DOM manipulation. Robust testing was carried out throughout the <strong>web development</strong>&nbsp;phase.</p>

              <div class="item margin-bottom-20">
                <a href="img/fetch-angular-js.png" data-lightbox="code" data-title="AngularJS code">
                  <img src="img/loading.gif" data-src="img/fetch-angular-js.png" alt="AngularJS code" class="lazy-load lazy-load--loading img-shadow img-center" alt="">
                </a>
              </div>
              <p>&nbsp;</p>


              <p class="h3 subheading padding-0 margin-0">The result</p>
              <p>Fetch can now be purchased with any eligible Internet service on the iiNet website. Since this implementation the UI has changed somewhat, to keep up with changing business priorities.</p>

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