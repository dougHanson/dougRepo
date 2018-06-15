<!-- frame borders -->
<div class="frame frame__top"></div>
<div class="frame frame__bottom"></div>
<div class="frame frame__left"></div>
<div class="frame frame__right"></div>
<!-- end frame borders -->

<!-- left hand nav include -->
<aside class="vertical-menu">
	<div class="vertical-menu__logo">
		<a href="index.php"><img src="img/logo-retina.png" /></a>
	</div>
	<br class="hidden-sm hidden-xs hidden-xxs">
	<nav>
		<ul>
			<li class="nav-home">
				<a href="index.php#home" class="nav-link">
					<i class="icon">
						<?php echo file_get_contents("svg/home.svg"); ?>
					</i><span>Home</span>
				</a>
			</li>

			<li class="nav-works">
				<a href="index.php#selected-works" class="nav-link">
					<i class="icon">
						<?php echo file_get_contents("svg/briefcase.svg"); ?>
					</i><span><span class="hidden-xs hidden-xxs">Selected</span> works</span>
				</a>
			</li>

			<li class="nav-about">
				<a href="index.php#about" class="nav-link">
					<i class="icon">
						<?php echo file_get_contents("svg/about.svg"); ?>	
					</i><span>About <span class="hidden-xs hidden-xxs">me</span></span>
				</a>
			</li>

			<li class="nav-contact">
				<a href="index.php#contact" class="nav-link">
					<i class="icon">
						<?php echo file_get_contents("svg/contact.svg"); ?>
					</i><span>Contact</span>
				</a>
			</li>
		</ul>

		<br>
		<br>
		<!--<p class="social-icon__copy">My social links</p>-->

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

	</nav>
</aside>
<!-- end left hand nav include -->