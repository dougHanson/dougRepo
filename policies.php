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
              <p>The Department of Education.....</p>

              <p>Created icon suite</p>
              <div class="item margin-bottom-20">
                <img src="img/loading.gif" data-src="img/policies-icons.png" alt="Icon design" class="lazy-load img-center full-width">
              </div> 
                          

              <p class="h3 subheading padding-0 margin-0">CSS over JS</p>
              <p>Mobile menu</p>
              <p>Accordions</p>
              <p>Tabs</p>
              <p>Semantic html and accessibility</p>

              <div class="item">
                <a href="img/policies-design-1.png" data-lightbox="policies-design" data-title="Policies UI Design">
                  <img src="img/loading.gif" data-src="img/policies-design-1.png" class="lazy-load img-responsive img-center img-shadow" />
                </a>
              </div>
              <p>&nbsp;</p>

              <p class="h3 subheading padding-0 margin-0">The build</p>
              <p>Create structures to enable authors easy content creation process</p>
              <p>Freemarker to populate and style content as it was created</p>
              <p>Minimal JS except to progressively enhance features. Browse page uses JPList plugin.</p>

              <div class="item margin-bottom-20">
                <a href="img/jobs-freemarker-code.png" data-lightbox="code" data-title="Freemarker code">
                  <img src="img/loading.gif" data-src="img/jobs-freemarker-code.png" alt="Freemarker code" class="lazy-load img-shadow img-center">
                </a>
              </div>
              <p>&nbsp;</p>

              <p>The Department of Education.....</p>

              <div class="owl-carousel owl-theme">
                <div class="item margin-bottom-40">
                  <a href="img/jobs-javascript-jplist.png" data-lightbox="code" data-title="Javascript code">
                    <img src="img/loading.gif" data-src="img/jobs-javascript-jplist.png" alt="Freemarker code" class="lazy-load img-shadow img-center">
                  </a>
                </div>
                <div class="item margin-bottom-40">
                  <a href="img/jobs-javascript-map-api.png" data-lightbox="code" data-title="Google Map API code">
                    <img src="img/loading.gif" data-src="img/jobs-javascript-map-api.png" alt="Freemarker code" class="lazy-load img-shadow img-center">
                  </a>
                </div>
              </div>
              <p class="margin-bottom-20">&nbsp;</p>


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