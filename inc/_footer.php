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

<!-- build:js --> 
<script src="js/data.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
<script src="js/plugins/classie.js"></script>  
<script src="js/plugins/jquery.ui.touch-punch.min.js"></script> 
<script src="js/plugins/svganimations.js"></script>	
<script src="js/plugins/owl.carousel.js"></script> 
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

	//only load if project var defined
	<?php if (isset($project)) { ?>	

		//Scroll page back to top on refresh, to ensure loading effect is maintained
		$(window).on('beforeunload', function() {
			//$(window).fadeOut(), 200;
			$(window).scrollTop(0), 1000;
		});
	
		//get current project from defined php variable
		var thisProject = projects.<?php echo $project ?>;

		//title & client
		$('#projectTitle').html(thisProject.title);
		$('#projectClient').html(thisProject.client);

		//brand colours
		if (!!thisProject.brand_colours) {
			for ( var i=0; i < thisProject.brand_colours.length; i++) {
				$('#projectBrandColours').append("<span class='brand-colour' style='background: " + thisProject.brand_colours[i] + "'></span>");
			}
		}
		else { $('#projectBrandColours').hide(); }

		//skills
		for ( var skill=0; skill < thisProject.skills.length; skill++) {
			$('#projectSkills').append("<h2 class='tag'>" + thisProject.skills[skill] + "</h2>");
		}

		//year
		if (!!thisProject.year) {
			$('#projectYear').html(thisProject.year);
		}
		else { $('#projectYear').parent().hide(); }

		//website
		if (!!thisProject.website) {
			$('#projectWebsite').append("<a href='" + thisProject.website_url + "' target='_blank'>" + thisProject.website + "</a>");
		}
		else { $('#projectWebsite').parent().hide(); }

		//next projects
		var nextObject = projectOrder.indexOf("<?php echo $project ?>")+1;
		if (nextObject > projectOrder.length-1) { nextObject = 0; } //loop back to start
		var nextProject = projectOrder[nextObject];
		var next = projects[nextProject];
		$('#projectNextLink').attr("href", next.url);
		$('#projectNextTitle').append(next.title);
		$('#projectNextImg').attr("src", "img/" + next.thumbnail);

		//previous projects
		var prevObject = projectOrder.indexOf("<?php echo $project ?>")-1;
		if (prevObject < 0) { prevObject = projectOrder.length-1; } //loop back to end
		var prevProject = projectOrder[prevObject];
		var prev = projects[prevProject];
		$('#projectPrevLink').attr("href", prev.url);
		$('#projectPrevTitle').append(prev.title);
		$('#projectPrevImg').attr("src", "img/" + prev.thumbnail);		
	<?php } ?>

</script> 