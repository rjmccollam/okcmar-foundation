<footer class="footer">
	
	<div class="container clearfix">
		
		<?php

			$defaults = array(
				'theme_location'  => 'footer_menu',
				'menu'            => 'Footer Menu',
				'container'       => 'nav',
				'container_class' => 'footer-nav left',
				'menu_class'      => ''
			);

			wp_nav_menu( $defaults );

		?>

		<p class="copy right">Site by: <a href="http://www.forgemultimedia.com">Forge Multimedia llc</a></p>

	</div><!-- end container -->

</footer><!-- end footer -->

<?php wp_footer(); ?>
		
</body>
</html>