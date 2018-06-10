<footer class="text-center" >
	
	
	<div class="wrapper wrapper--footer">		
		<div class="wrapper__outer">	
			<div class="container text-center">
					
				<div class="row">
					<div class="col-sm-12">
						<p class="text-center">Copyright Doug Hanson 2017</p>
					</div>
					
					<div class="social-wrapper">
						<!-- social media icons -->
						<a class="social-icon-footer" href="//www.linkedin.com/in/doug83/" target="_blank">
							<div class="social-icon__bg social-icon__bg--transparent"></div>
							<div class="social-icon__svg">
								<?php echo file_get_contents("svg/linkedin.svg"); ?>
							</div>
						</a>

						<a class="social-icon-footer" href="//facebook.com/doug83" target="_blank">
							<div class="social-icon__bg social-icon__bg--transparent"></div>
							<div class="social-icon__svg">
								<?php echo file_get_contents("svg/facebook.svg"); ?>
							</div>
						</a>

						<a class="social-icon-footer" href="//twitter.com/doug83" target="_blank">
							<div class="social-icon__bg social-icon__bg--transparent"></div>
							<div class="social-icon__svg">
								<?php echo file_get_contents("svg/twitter.svg"); ?>
							</div>
						</a>

						<a class="social-icon-footer" href="//au.pinterest.com/dhanson1087/" target="_blank">
							<div class="social-icon__bg social-icon__bg--transparent"></div>
							<div class="social-icon__svg">
								<?php echo file_get_contents("svg/pinterest.svg"); ?>
							</div>
						</a>
					<!-- end social icons -->
					</div>	
				</div>
				
				
				<?php /*
				<script>
					window.twttr = (function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0],
							t = window.twttr || {};
						if (d.getElementById(id)) return t;
						js = d.createElement(s);
						js.id = id;
						js.src = "https://platform.twitter.com/widgets.js";
						fjs.parentNode.insertBefore(js, fjs);

						t._e = [];
						t.ready = function(f) {
							t._e.push(f);
						};

						return t;
					}(document, "script", "twitter-wjs"));
				</script>
				<a class="twitter-timeline" href="https://twitter.com/Doug83" data-dnt="true" data-text-color="#fff" data-width="100%" data-height="210" data-tweet-limit="1" data-link-color="#E81C4F" data-chrome="noheader nofooter noborders noscrollbar transparent">
				</a>
				*/ ?>

				
			</div>
		</div>
	</div>
	
</footer>


<style>
	
</style>

<!-- jQuery CDN --> 
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> 
<!--<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>  -->

<!-- JS plugins --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>

<!-- build:js --> 
<script src="js/plugins/classie.js"></script>  
<script src="js/plugins/jquery.ui.touch-punch.min.js"></script> 
<script src="js/plugins/owl.carousel.js"></script> 
<script src="js/plugins/svganimations.js"></script>	
<script src="js/plugins/lightbox.js"></script>
<script src="js/main.js"></script> 
<!-- endbuild --> 

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81920963-1', 'auto');
  ga('send', 'pageview');	
</script>
<!-- end Google Analytics -->


<script>
	
	// Fade wrapper in page load
	$(".wrapper").animate({"opacity": "1"}, 300);	
	
	//Initialise Owl Carousel
	$('.owl-carousel').owlCarousel({
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
	})
	
	//keep project sidebar floating on left
	$(function() {

		var sidebar = $('.sidebar');
		var top = sidebar.offset().top;

		$(window).scroll(function(event) {
			var viewportWidth = $(window).width();
			var y = $(this).scrollTop() + 400;
			var base = $('footer').offset().top - window.scrollY;
			if (y >= top && base > 720) {
				if (viewportWidth > 1200) {
					sidebar.css('top', y - 700);
				} else {
					sidebar.css('top', 0);
				}
			}
		});

	});

</script>

