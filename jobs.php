<!DOCTYPE html>
<html lang="en-AU">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Doug Hanson">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Interactive Jobs Portal | Doug Hanson | Web Development and Design, Perth</title>
  <meta name="description" content="Interactive jobs portal utilising Maps API. Created by Doug Hanson, a front end web developer in Perth, Western Australia.">
  <meta name="keywords" content="maps api, department of education, open maps, google maps, liferay, freemarker, web design, designer, web development, front end developer, ux design, perth, doug hanson">

  <!-- build:css -->
  <link rel="stylesheet" href="css/styles.css" media="all">
  <!-- endbuild -->

</head>

<?php
	// DECLARE PROJECT VARIABLE - refer to data.js
	$project = 'jobs';
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
              data-src="img/jobs-header.png" class="lazy-load" alt="Interactive Jobs Portal" />
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
              <p>The Department of Education wanted to improve the existing jobs listing page, which was a text heavy html table. The key features they wanted, asides from making it more visually appealing, was the ability for end users to sort and filter job roles by different categories, to search for jobs by location, and the ability for web content authors to promote featured job listings.</p>

              <p class="h3 subheading padding-0 margin-0">The process</p>
              <p>After meeting with the business and gathering their requirements, I conducted a <strong>competitor analysis</strong> of leaders in this space. Taking inspiration from several websites with a positive user experience and after conducting my own <strong>expert review</strong>, I presented <strong>web designs</strong> to the business which included a map feature, which would allow end users to drill down jobs by location. End users would also be able to search jobs by keyword via an input field, and filter by the multiple criteria of each job listing. I also included tags so users could consume important information upfront, such as jobs that were promoted or newly listed.</p>

              <div class="item">
                <a href="img/jobs-design.png" data-lightbox="jobs-design" data-title="Jobs UI Design"><img src="img/loading.gif" data-src="img/jobs-design.png" class="lazy-load lazy-load--loading img-responsive img-center img-shadow" alt="" /></a>
              </div>
              <p>&nbsp;</p>

              <p class="h3 subheading padding-0 margin-0">The build</p>
              <p>I began the build by <strong>building the UI using HTML, SASS and JQuery</strong>. The jobs data was provided via a <strong>third party API in JSON format</strong>. As the <strong>Liferay DXP</strong> that the page is hosted in is based on a Java platform, I used <strong>freemarker</strong> to retrieve and cache the data, and <strong>populate the page contents server-side</strong>. I then integrated a <strong>JQuery plugin</strong> called JPList, which included the ability to sort and filter the job listings.</p>

              <div class="item margin-bottom-20">
                <a href="img/jobs-freemarker-code.png" data-lightbox="code" data-title="Freemarker code">
                  <img src="img/loading.gif" data-src="img/jobs-freemarker-code.png" alt="Freemarker code" class="lazy-load lazy-load--loading img-shadow img-center">
                </a>
              </div>
              <p>&nbsp;</p>

              <p>To implement the map feature, I took advantage of the <strong>Google Maps API</strong> v3. Using a workplace id field within the job listing data, I was able to search another API which housed all of the School latitude and longitude coordinates. Using the API and my own <strong>bespoke JQuery</strong>, I populated each job listing location onto the map as a separate marker, and styled appropriately by clustering pins that were close together, adding infoWindows and more.</p>

              <p>The most challenging part of this project was to then get Google Maps and the JPList plugin talking to each other. Using the getBounds feature within the Maps API, I was able to detect if a job listing marker was visible on the map. If it was, a <strong>javascript callback function</strong> I wrote would trigger a JPList event, to display only the job listings which were visible. Similarly, I added a <strong>js callback function</strong> to the JPList script to redraw the map markers each time a sorting or filter action was performed. </p>

              <div class="owl-carousel owl-theme">
                <div class="item margin-bottom-40">
                  <a href="img/jobs-javascript-jplist.png" data-lightbox="code" data-title="Javascript code">
                    <img src="img/loading.gif" data-src="img/jobs-javascript-jplist.png" alt="Freemarker code" class="lazy-load lazy-load--loading img-frame img-center">
                  </a>
                </div>
                <div class="item margin-bottom-40">
                  <a href="img/jobs-javascript-map-api.png" data-lightbox="code" data-title="Google Map API code">
                    <img src="img/loading.gif" data-src="img/jobs-javascript-map-api.png" alt="Freemarker code" class="lazy-load lazy-load--loading img-frame img-center">
                  </a>
                </div>
              </div>
              <p class="margin-bottom-20">&nbsp;</p>

              <p>The final step was to ensure the portal met <strong>web accessibility guidleines</strong>. Alongside browser and device testing, I completed <strong>accessibility testing</strong> using NVDA screen reader, browser extensions such as AXE and WAVE, and ensured all actions were accessible via the keyboard.</p>

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