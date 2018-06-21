		<footer class="footer-section-outer-wrapper">
			<div class="footer-section-inner container">
				 <section class="footer-top">
				 		Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
				 </section>
				 <section class="copyright-nav-footer">
					 	 <p class="copyright-text">
							  &copy; <?php echo date('Y'); ?>

								<?php
									if (get_theme_mod('eniva_copyright_text')) {
										echo get_theme_mod('eniva_copyright_text');
									}else {
										echo "test";
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
