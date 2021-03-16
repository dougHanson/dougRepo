
<!-- frame borders -->
<div class="frame frame__top"></div>
<div class="frame frame__bottom"></div>
<div class="frame frame__left"></div>
<div class="frame frame__right"></div>
<!-- end frame borders -->

<!-- left hand nav include -->
<aside class="vertical-menu">
  <div class="vertical-menu__logo">
    <a href="home.php">
      <img src="img/logo-retina.png" alt="" height="136" width="136" />
      <span class="sr-only">Return to homepage</span>
      <!-- <svg xmlns="http://www.w3.org/2000/svg" width="115.3" height="116.7" viewBox="0 0 115.3 116.7">
        <path
            d="M58.1,1.4c3.8,4,7.2,7.7,10.9,11.4,14.3,14.4,28.6,28.8,43.1,43,2.7,2.7,3,4.4.1,7.3Q87,88,62,113.2c-3.4,3.5-5.6,3.3-8.9-.1C37,96.7,20.6,80.5,4.4,64.2c-4.5-4.5-4.5-4.9.1-9.5L54,5.2C55.1,4,56.4,3,58.1,1.4Zm1.1,40.1c-11.6-5.2-16-3.1-17.7,8.9-1.1,7.5-.6,15.3-.5,22.9a22.7,22.7,0,0,0,2.1,7.6c2.4,5.5,6.9,7,12.3,4.5a6.5,6.5,0,0,1,3-.9c4.6.6,9.2,1.4,13.1,2-.7-5.9-1.6-10.6-1.7-15.3-.3-11.8-.1-23.7-.1-35.5,0-1.8-.2-3.5-.3-5.4H56.9Z"
            style="fill:#fff;stroke:#231f20;stroke-miterlimit:10;stroke-width:2px" />
        <path
            d="M59.2,41.5,56.9,30.3H69.4c.1,1.9.3,3.6.3,5.4,0,11.8-.2,23.7.1,35.5.1,4.7,1,9.4,1.7,15.3-3.9-.6-8.5-1.4-13.1-2a6.5,6.5,0,0,0-3,.9c-5.4,2.5-9.9,1-12.3-4.5A22.7,22.7,0,0,1,41,73.3c-.1-7.6-.6-15.4.5-22.9C43.2,38.4,47.6,36.3,59.2,41.5ZM58.8,63c0-4.6.2-9.3-.2-13.9-.1-1.6-1.6-3-2.5-4.5-1.1,1.4-3.2,2.7-3.2,4.2-.3,9.2-.3,18.5-.1,27.8.1,1.4,1.8,2.7,2.8,4.1,1-1.4,2.9-2.8,3-4.3C59,72,58.7,67.5,58.8,63Z"
            style="stroke:#231f20;stroke-miterlimit:10;stroke-width:2px" />
        <path
            d="M58.7,63c0,4.5.3,9-.1,13.4-.1,1.5-2,2.9-3,4.3-1-1.4-2.7-2.7-2.8-4.1-.2-9.3-.2-18.6.1-27.8,0-1.5,2.1-2.8,3.2-4.2.9,1.5,2.4,2.9,2.5,4.5A128.9,128.9,0,0,1,58.7,63Z"
            style="fill:#fff;stroke:#231f20;stroke-miterlimit:10;stroke-width:2px" />
      </svg> -->
 </a>
  </div>
  <!--<br class="hidden-sm hidden-xs hidden-xxs">-->
  <nav>
    <ul>
      <li class="nav-home">
        <a href="home.php#home" class="nav-link">
          <i class="icon">
            <?php echo file_get_contents("svg/homepage.svg"); ?>
          </i><span>Home</span>
        </a>
      </li>

      <li class="nav-works">
        <a href="home.php#selected-works" class="nav-link">
          <i class="icon">
            <?php echo file_get_contents("svg/briefcase.svg"); ?>
          </i><span><span class="hidden-xs hidden-xxs">Selected works</span> <span class="hidden-sm hidden-md hidden-lg hidden-xl">My work</span></span>
        </a>
      </li>

      <li class="nav-about">
        <a href="home.php#about" class="nav-link">
          <i class="icon">
            <?php echo file_get_contents("svg/about.svg"); ?>
          </i><span>About <span class="hidden-xs hidden-xxs">me</span></span>
        </a>
      </li>

      <li class="nav-contact">
        <a href="home.php#contact" class="nav-link">
          <i class="icon">
            <?php echo file_get_contents("svg/contact.svg"); ?>
          </i><span>Contact</span>
        </a>
      </li>
    </ul>

    <!-- social icons -->
    <a class="social-icon" href="https://www.linkedin.com/in/doug83/" rel="noreferrer" target="_blank" title="LinkedIn">
      <div class="social-icon__bg"></div>
      <div class="social-icon__svg">
        <?php echo file_get_contents("svg/linkedin.svg"); ?>
      </div>
    </a>

    <a class="social-icon" href="https://github.com/dougHanson" rel="noreferrer" target="_blank" title="Github">
      <div class="social-icon__bg"></div>
      <div class="social-icon__svg">
        <?php echo file_get_contents("svg/github.svg"); ?>
      </div>
    </a>

    <!--<a class="social-icon" href="//facebook.com/doug83" target="_blank" title="Facebook">
			<div class="social-icon__bg"></div>
			<div class="social-icon__svg">
				<?php //echo file_get_contents("svg/facebook.svg"); ?>
			</div>
		</a>-->

    <a class="social-icon" href="https://twitter.com/doug83" rel="noreferrer" target="_blank" title="Twitter">
      <div class="social-icon__bg"></div>
      <div class="social-icon__svg">
        <?php echo file_get_contents("svg/twitter.svg"); ?>
      </div>
    </a>

    <a class="social-icon" href="https://au.pinterest.com/doughanson1983/" rel="noreferrer" target="_blank" title="Pinterest">
      <div class="social-icon__bg"></div>
      <div class="social-icon__svg">
        <?php echo file_get_contents("svg/pinterest.svg"); ?>
      </div>
    </a>

  </nav>
</aside>
<!-- end left hand nav include -->