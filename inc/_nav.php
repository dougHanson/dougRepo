
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
      <svg xmlns="http://www.w3.org/2000/svg" width="200.3" height="200.2" viewBox="0 0 200.3 200.2">
        <polygon id="outer_stroke" data-name="outer stroke" points="100.7 0.7 199.6 99.5 100.7 199.5 0.7 99.5 100.7 0.7"/>
        <polygon id="outer" points="100.7 0.7 199.6 99.5 100.7 199.5 0.7 99.5 100.7 0.7" />
        <g id="inner">
          <polygon points="15.8 100.1 100.1 15.9 184.5 99.9 100.1 184.3 15.8 100.1" />
          <path d="M100.1,16.6l83.6,83.3-83.6,83.7L16.5,100.1l83.6-83.5m0-1.4-85,84.9,85,84.9,85.1-85.1L100.1,15.2Z" />
        </g>
        <path id="d" d="M100.5,74.1c0-3.8,1.5-7.2-2.6-10-1.6-1.1-1.8-4.6,2-4.7,5.6-.2,11.2-.1,17.4-.1.1,2.3.2,4.3.2,6.2q.1,29.9,0,59.7c0,3.2-.2,6.2,2.9,8.5,1,.6.8,2.8,1.1,4.3-10.1,1.9-19.7,1-21.8-1.9L96.3,138c-7.2,3.7-14.6,1.6-18.1-5.7-2-4.1-3.7-8.8-3.7-13.2-.1-11.9-.2-23.9,1.5-35.6S87,67.3,98.4,73.3Zm.3,30.9c0-7.3.1-14.6-.2-21.9,0-1.3-1.7-3.5-2.9-3.7s-3.2,1.1-4.1,2.3-.9,3.2-.9,4.8c-.1,12.6,0,25.2,0,37.8,0,3,0,6.3,3.8,6.3s4.3-3,4.3-6.2C100.7,117.9,100.8,111.5,100.8,105Z" />
      </svg>
      <span class="sr-only">Return to homepage</span>
    </a>
  </div>

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

    <a class="social-icon" href="https://au.pinterest.com/doughanson1983/" rel="noreferrer" target="_blank" title="Pinterest">
      <div class="social-icon__bg"></div>
      <div class="social-icon__svg">
        <?php echo file_get_contents("svg/pinterest.svg"); ?>
      </div>
    </a>

    <a class="social-icon" href="https://twitter.com/doug83" rel="noreferrer" target="_blank" title="Twitter">
      <div class="social-icon__bg"></div>
      <div class="social-icon__svg">
        <?php echo file_get_contents("svg/twitter.svg"); ?>
      </div>
    </a>

    <a class="social-icon" href="//facebook.com/doug83" rel="noreferrer" target="_blank" title="Facebook">
			<div class="social-icon__bg"></div>
			<div class="social-icon__svg">
				<?php echo file_get_contents("svg/facebook.svg"); ?>
			</div>
		</a>

  </nav>
</aside>
<!-- end left hand nav include -->