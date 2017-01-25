<footer class="text-center" style="background: url('img/footer.png') fixed no-repeat; background-position: bottom; height: 180px;">
	
	
	<div class="wrapper">		
		<div class="wrapper__outer">	
			<div class="container text-center">
					
				
					<!-- social media icons -->
					<a class="social-icon" href="//www.linkedin.com/in/doug83/" target="_blank">
						<div class="social-icon__bg"></div>
						<div class="social-icon__svg">
							<?php echo file_get_contents("svg/linkedin.svg"); ?>
						</div>
					</a>

					<a class="social-icon" href="//facebook.com/doug83" target="_blank">
						<div class="social-icon__bg"></div>
						<div class="social-icon__svg">
							<?php echo file_get_contents("svg/facebook.svg"); ?>
						</div>
					</a>

					<a class="social-icon" href="//twitter.com/doug83" target="_blank">
						<div class="social-icon__bg"></div>
						<div class="social-icon__svg">
							<?php echo file_get_contents("svg/twitter.svg"); ?>
						</div>
					</a>

					<a class="social-icon" href="//au.pinterest.com/dhanson1087/" target="_blank">
						<div class="social-icon__bg"></div>
						<div class="social-icon__svg">
							<?php echo file_get_contents("svg/pinterest.svg"); ?>
						</div>
					</a>
				<!-- end social icons -->
				
				
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



<!-- jQuery CDN --> 
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> 
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> 

<!-- JS plugins --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>

<!-- build:js --> 
<script src="js/plugins/classie.js"></script>  
<script src="js/plugins/jquery.ui.touch-punch.min.js"></script> 
<script src="js/plugins/owl.carousel.js"></script> 
<script src="js/plugins/svganimations.js"></script>	
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