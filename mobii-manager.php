<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Doug Hanson">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Mobile App Design | Doug Hanson | Web and Mobile Design, Perth</title>
  <meta name="description" content="Mobile Application design case study by Doug Hanson, a web designer and front end developer from Perth, Western Australia.">
  <meta name="keywords" content="mobii manager, web design, designer, web development, front end developer, ux design, perth, doug hanson">

  <!-- build:css -->
  <link rel="stylesheet" href="css/styles.css" media="all">
  <!-- endbuild -->

</head>

<?php
	// DECLARE PROJECT VARIABLE - refer to data.js
	$project = 'mobii_manager';
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
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAAlCAMAAAAp+3oTAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAMAUExURQAAADArKy4rKjEuLjItLTUxMS8qKjw7Oz4+Pjk2NjAsLTEuLjIvLjIvMDArKzAtLS4rKzEuLjIuLjEuLjEtLTIvLy8sLDItLjEtLjAuLisrLCknKDMyMjEtLS8rKzItLTEtLS4sLCQnKDMwL66vsCcoKDEtLjIvLygnKDAuL/7+/vb19vv7+yUnKDAtLi4rKysqKS8sLDEtLTUxMScnJy8sLZ6enispKTMvL2xsbFZWVisrKzQ2NxENDQsHBxgUFCEeHQYCAv79/v39/ff39/b29iQmJy4rK/7+/oSEhJ+cnc7Ozm5ubu/v7729vfT09FBOTm1rawYCAvb29re3twkFBf////n5+RUREQsHByQnJ5eVlebm5np4eP38/VxaWuPi40RBQSAdHZaVlczLyxobHSYhIf///+Dq8r29vf7+/vj3+Ds7OykuMSsoKDEuLiAiJP////v6+iAmKScsMPX19R8kJyUpLSktMf7+/fT19SYrLvz8/Pb29vHx8ikvMv///yMoK+bm5iEnKvn5+SswMyQpKyYrLeTl5ezs7CInKOrr6/Pz8z9DRkdLTRwhIvf39+jp6TxAQuHh4SwxNFBTVTA1OEJHSe7u7tzc3VldX2lQL9/f3+Lj40tOUFVYWhYbHTM3OgUMEUhAMx4pMi4zNiM4OVMpNPDw8NfY2EtPUk8uN8XGxh0yMik0OUQwOBspNy40OCo5OVYvOWFLLAwSFS82OSg+PSIxPzc6Pc/P0P///tTU1MvLy15hYiEwMUooMhMtLCUuN01RUqSlphokLGsrOXoqPGJlZzU9RExDMz85LTw8Pj4yOFsyPRo1NognPHlZLV4vOldHMoIoPHVWMQ8WGXV6e6eoqoSHiRkuLjklLRYxMAQXGJGUlWErOG8kNgweJDcyKkA8Mz9JVBEiNDQyNhQ8OXB3eBQqQba3uDNHR//4376CnPT+/tKrt8zd2ru8vPf++Pynr//dp7bCweZ0T5eZmp6io250dR5GQi4uKUxFODpbWGk1QllFTWW45+kAAABxdFJOUwATGywIBQwCAQMmXg9IChdyOYY/Z5UhfFEy2cBCsB+kjpz9Wf3yVU/bvdQaj/o10+LJb7rqt23PZS4W6XWHjH93nnbhLkTuzOlRiLtR4J7xnHsv55px9Z25rfTw2+dO2wrPtWT68aepwlnGZTHza6H9iakUbwAABMZJREFUSMedlXdUE1kUxgkJPSDSpagoKoi67uqqq66rbu+99973nDeZTMkkMyeZNBKSTEhIoYOU0Fk6NkBRVEAUFfva2/be2wscz9EAAt7/f+9997vfe9fLa4xK/Xj+R6leN1Op6+cDkpaB9ZMm71kwH8ByJG0G4NE7JkPeu+BuMFwkB0gEgMd8Jga+8drzD4BrChHLOCl4/MHxSeGH75MIeZUjAenQSxDEbEkH4OGVNyRXvv0BJLRJG4dJhOPMFrNEqS0vz+U4eOKysdFlT28CX//03S9dP2zhwCaoVizmXIqNOco0rQQhxQozAK+MadxD8Laff/3m+3QpAqS0OVfCycSIsnyzGACZXmvRuhApAM8IRkMDfL2eBGDTj99CeWKzQu9wQFZC0xzC6bW5Cj10LU1BA/DcIyNZ/wAe/6knoC2Q1OoddK5eyslkEpeLTpdoFWKE5HIsLhIgXx42xE0ZCQv5c59dkgMQWpGjoBFnDsJJEYk4HXaOAGeVFroAyo/aB5tQK7rak/YL8Z66Yk3cFiAF2o05YikgJWanixTLZDKxMi1NCfRdWWeKClCUIlTFsZ+MaNp7atCdLyQBIHEopUp9rsVCO9KBRAYPAqDqcklRQeM5FicoDXaWKY4M8KBDpkybfdeLL8NMKdOcuTIlCbqOKtwTd35hLxhE2/Yf+Hx3RkkzUfN3I0p9Guyh3IfHj1m77lUAOAftctLA+VsVAugjWeomtrCt9VD2lZLCrcZCY2ZrY3YdgafwrnfNhxcYHLrudQQgiOVIlfvSLX+0nCzo621raWnNPnSl2ZaXZTdYL+zZf0Elx6jVHp77Tg+PWPOmGSgRxC3XeLKpY+/egYG9ZQ31pYeye8/v3lZcXHduf88Oyt4rF8XyPRp32xYH37AyKR8rOlPb3dBnbW6++N+/3c39B7IP9GzYs6Ex+6+6jO15NhwXiRL9rx+Z27a33vmdLWpC62sPXuysycjMzLr8T9nB+jrbBsj2nG09n2coxOSEGscxLP46WsDjz1v73ruDJSXW/u6GS5n5u3btyrK3XTo4UGqr2bajeHfFdgPDUiihwTUizBTvYZsQ2pa4ilJZ+3ee/vPw1vwKQyFV3byvr4YR2Yx2owFnGQYlUDWL3TfT18tz4r5R4REzk9WMiuneqWoprT5WXVq7r6FTDhvIs4lMJitDECiLzYoNC4/y9RotbWHL1Ux7+6mdZR2VlZWnTh8/kZGfZVRhFGrYKicoVrcwdklkaPD0kW/UTwBti47TEcwJVW1lWVnH8dKvMisy1BihYg35eSyrm3NLQmRozDTvEL9Rnqg7baEJs1Ar0159rLPenmm0yeUEA/Wq2AL1qltnhEUE86eEBPiP+rG4bftsxku4ikFVxooMFKMYAiUYFNctXJySGB0UHsgT+I35p8G0xa+IXMoSlKoQZ6G7KOpuFeqdeVvMounCG//kQ2kLS8YoSq6hNBqUkot0S4f1evuOuwTcts2NXm6Sa3AcV7Mi3eKUyGG9ARNYHv7utIXGmXQatQhbGAv1zl0UJRT4T2z1DKUtIsFkwubcf1Wv/8RXHkxbfFBi8u1DeuFoJrdq3bbNmx0UMzVqYq162saL4gd6Cyej99r/RSAQ3Bw6fv0PLwgXLLis4C4AAAAASUVORK5CYII="
              data-src="img/mobii-header.png" class="lazy-load" alt="Mobile App Design" />
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
              <p class="margin-bottom-40">iiNet had just released shiny new mobile broadband hardware, which was using the generic Huawei Android app to operate the hardware. I designed a tailored iiNet Android app which strengthened the brand, whilst providing a better user experience than the existing Huawei mobile&nbsp;app.</p>


              <div class="owl-carousel owl-theme">
                <div class="item">
                  <a href="img/mobii-02.png" data-lightbox="mobii" data-title="Mobii Manager">
                    <img class="lazy-load lazy-load--loading img-center" src="img/loading.gif" data-src="img/mobii-02.png" alt="mobile design" /></a>
                </div>
                <div class="item">
                  <a href="img/mobii-05.png" data-lightbox="mobii" data-title="Mobii Manager">
                    <img class="lazy-load lazy-load--loading img-center" src="img/loading.gif" data-src="img/mobii-05.png" alt="mobile design" /></a>
                </div>
                <div class="item">
                  <a href="img/mobii-11.png" data-lightbox="mobii" data-title="Mobii Manager">
                    <img class="lazy-load lazy-load--loading img-center" src="img/loading.gif" data-src="img/mobii-11.png" alt="mobile design" /></a>
                </div>
                <div class="item">
                  <a href="img/mobii-12.png" data-lightbox="mobii" data-title="Mobii Manager">
                    <img class="lazy-load lazy-load--loading img-center" src="img/loading.gif" data-src="img/mobii-12.png" alt="mobile design" /></a>
                </div>
                <div class="item">
                  <a href="img/mobii-13.png" data-lightbox="mobii" data-title="Mobii Manager">
                    <img class="lazy-load lazy-load--loading img-center" src="img/loading.gif" data-src="img/mobii-13.png" alt="mobile design" /></a>
                </div>
                <div class="item">
                  <a href="img/mobii-06.png" data-lightbox="mobii" data-title="Mobii Manager">
                    <img class="lazy-load lazy-load--loading img-center" src="img/loading.gif" data-src="img/mobii-06.png" alt="mobile design" /></a>
                </div>
                <div class="item">
                  <a href="img/mobii-07.png" data-lightbox="mobii" data-title="Mobii Manager">
                    <img class="lazy-load lazy-load--loading img-center" src="img/loading.gif" data-src="img/mobii-07.png" alt="mobile design" /></a>
                </div>
                <div class="item">
                  <a href="img/mobii-08.png" data-lightbox="mobii" data-title="Mobii Manager">
                    <img class="lazy-load lazy-load--loading img-center" src="img/loading.gif" data-src="img/mobii-08.png" alt="mobile design" /></a>
                </div>
                <div class="item">
                  <a href="img/mobii-09.png" data-lightbox="mobii" data-title="Mobii Manager">
                    <img class="lazy-load lazy-load--loading img-center" src="img/loading.gif" data-src="img/mobii-09.png" alt="mobile design" /></a>
                </div>
                <div class="item">
                  <a href="img/mobii-10.png" data-lightbox="mobii" data-title="Mobii Manager">
                    <img class="lazy-load lazy-load--loading img-center" src="img/loading.gif" data-src="img/mobii-10.png" alt="mobile design" /></a>
                </div>
              </div>
              <p>&nbsp;</p>

              <p class="h3 subheading padding-0 margin-0">The process</p>
              <p>To kick the mobile design project off, I met with Product Managers to understand to conduct <strong>requirements gathering</strong> for the project. After toying with some <strong>paper sketches</strong>, I turned the best ones into <strong>high fidelity wireframes</strong> to seek intitial stakeholder feedback. Once all stakeholders were happy with the look and feel, I developed a <strong>rapid prototype using basic HTML, CSS &amp; JavaScript</strong>. This allowed me to demonstrate the desired <strong>UX and interactions</strong> to the external development agency, whom then turned my prototype into a <strong>native&nbsp;Android&nbsp;app</strong>.</p>


              <img src="img/loading.gif" data-src="img/mobii-manager-big-light.png" class="lazy-load lazy-load--loading img-center img-responsive img-center margin-top-40 margin-bottom-40" alt="Mobile design on Samsung Galaxy S3">

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
      margin: 20,
      nav: false,
      responsive: {
        0: {
          items: 2
        },
        600: {
          items: 3
        },
        1400: {
          items: 4
        }
      }
    });
  </script>

</body>