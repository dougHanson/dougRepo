
				<div class="svg-wrap">
					<svg width="64" height="64" viewBox="0 0 64 64">
						<path id="arrow-left-1" d="M46.077 55.738c0.858 0.867 0.858 2.266 0 3.133s-2.243 0.867-3.101 0l-25.056-25.302c-0.858-0.867-0.858-2.269 0-3.133l25.056-25.306c0.858-0.867 2.243-0.867 3.101 0s0.858 2.266 0 3.133l-22.848 23.738 22.848 23.738z" />
					</svg>
					<svg width="64" height="64" viewBox="0 0 64 64">
						<path id="arrow-right-1" d="M17.919 55.738c-0.858 0.867-0.858 2.266 0 3.133s2.243 0.867 3.101 0l25.056-25.302c0.858-0.867 0.858-2.269 0-3.133l-25.056-25.306c-0.858-0.867-2.243-0.867-3.101 0s-0.858 2.266 0 3.133l22.848 23.738-22.848 23.738z" />
					</svg>
				</div>			
				<section>
					<div class="nav-slide">
						<a class="prev" href="<?php print $previous_project[0] ?>.php">
							<span class="icon-wrap"><svg class="icon" width="32" height="32" viewBox="0 0 64 64"><use xlink:href="#arrow-left-1"></svg></span>
							<div>
								<h3><span>previous project</span><?php print $previous_project[1] ?></h3>
								<img src="img/<?php print $previous_project[0] ?>-thumb.png" alt="Prev project"/>
							</div>
						</a>
						<a class="next" href="<?php print $next_project[0] ?>.php">
							<span class="icon-wrap"><svg class="icon" width="32" height="32" viewBox="0 0 64 64"><use xlink:href="#arrow-right-1"></svg></span>
							<div>
								<h3><span>next project</span><?php print $next_project[1] ?></h3>
								<img src="img/<?php print $next_project[0] ?>-thumb.png" alt="Next project"/>
							</div>
						</a>
					</div>
				</section>