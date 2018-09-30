		<footer class="footer-section-outer-wrapper">
			<div class="footer-section-inner container">
				 <section class="copyright-nav-footer">
					 	 <p class="copyright-text">
								<?php
									if (get_theme_mod('eniva_copyright_text')) {
										echo get_theme_mod('eniva_copyright_text');
									}else {
										echo _e('All rights reserved. | Designed by: Benjamin Zekavica | Powered by WordPress', 'eniva'); ;
									}
								 ?>
						 </p>
						 <div class="footer-navi">
							 <?php
	               wp_nav_menu( array(
	                 'theme_location' => 'top_header',
	                 'container' => false
	               ));
	             ?>
						 </div>
				 </section>
			</div>
		</footer>
	 <?php wp_footer(); ?>
  </div>
 </body>
</html>