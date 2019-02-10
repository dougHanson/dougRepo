<!DOCTYPE html>
<html>

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
            <img src="img/jobs-header.min.png" data-src="img/jobs-header.png" class="lazy-load" alt="Interactive Jobs Portal" />
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
                <a href="img/jobs-design.png" data-lightbox="jobs-design" data-title="Jobs UI Design"><img src="img/loading.gif" data-src="img/jobs-design.png" class="lazy-load img-responsive img-center img-shadow" /></a>
              </div>
              <p>&nbsp;</p>

              <p class="h3 subheading padding-0 margin-0">The build</p>
              <p>I began the build by <strong>building the UI using HTML, SASS and JQuery</strong>. The jobs data was provided via a <strong>third party API in JSON format</strong>. As the <strong>Liferay CMS</strong> that the page is hosted in is based on a Java platform, I used <strong>freemarker</strong> to retrieve and cache the data, and <strong>populate the page contents server-side</strong>. I then integrated a <strong>JQuery plugin</strong> called JPList, which included the ability to sort and filter the job listings.</p>

              <div class="item margin-bottom-20">
                <a href="img/jobs-freemarker-code.png" data-lightbox="code" data-title="Freemarker code">
                  <img src="img/loading.gif" data-src="img/jobs-freemarker-code.png" alt="Freemarker code" class="lazy-load img-shadow img-center">
                </a>
              </div>
              <p>&nbsp;</p>

              <p>To implement the map feature, I took advantage of the <strong>Google Maps API</strong> v3. Using a workplace id field within the job listing data, I was able to search another API which housed all of the School latitude and longitude coordinates. Using the API and my own <strong>bespoke JQuery</strong>, I populated each job listing location onto the map as a separate marker, and styled appropriately by clustering pins that were close together, adding infoWindows and more.</p>

              <p>The most challenging part of this project was to then get Google Maps and the JPList plugin talking to each other. Using the getBounds feature within the Maps API, I was able to detect if a job listing marker was visible on the map. If it was, a <strong>javascript callback function</strong> I wrote would trigger a JPList event, to display only the job listings which were visible. Similarly, I added a <strong>js callback function</strong> to the JPList script to redraw the map markers each time a sorting or filter action was performed. </p>

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