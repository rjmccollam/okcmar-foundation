<!DOCTYPE html>

<html lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<meta name="viewport" content="width=device-width">

	<script src="https://use.typekit.net/rlq2ujp.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<header class="header">

	<div class="wrapper clearfix">

		<a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>"></a>

		<div class="nav-container right">

			<div class="contact-details right">
				
				<a href="mailto:<?php the_field('email_address', 'option'); ?>" class="email"><span>Email Us</span><?php the_field('email_address', 'option'); ?></a>

				<a href="tel:<?php the_field('phone_number', 'option'); ?>" class="phone"><span>Call Us</span><?php the_field('phone_number', 'option'); ?></a>

			</div>

			<div class="clear"></div>
	
			<a class="menu-link right" href="#nav">&#9776; Menu</a>

			<?php

				$defaults = array(
					'theme_location'  => 'main_menu',
					'menu'            => 'Main Menu',
					'container'       => 'nav',
					'container_class' => 'nav right',
					'container_id'    => 'nav',
					'menu_class'      => ''
				);

				wp_nav_menu( $defaults );

			?>

		</div>

	</div><!-- end wrapper -->

</header><!-- end header -->