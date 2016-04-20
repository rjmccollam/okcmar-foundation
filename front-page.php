<?php get_header(); ?>

<section class="hero" style="background-image: url(<?php the_field('hero_image'); ?>);">
	
	<div class="container clearfix">
		
		<h2><?php the_field('hero_sub_title'); ?></h2>

		<div class="clear"></div>

		<h1><?php the_field('hero_title'); ?></h1>

		<div class="clear"></div>

		<a href="<?php the_field('hero_button_link'); ?>" class="button white"><?php the_field('hero_button_text'); ?></a>

	</div><!-- end container -->

</section><!-- end hero -->

<section class="content container clearfix">
	
	<?php the_field('home_content'); ?>

</section><!-- end content -->

<section class="callout">
	
	<div class="image" style="background-image: url(<?php the_field('callout_image'); ?>);"></div>

	<div class="content container clearfix">

		<div class="sub-content right clearfix">
		
			<?php the_field('callout_content'); ?>

		</div>

	</div><!-- end container -->

</section><!-- end callout -->

<section class="upcoming-events content container clearfix">

	<div class="main right">
		
		<h1>Upcoming Events</h1>

		<?php

			$args = array(
				'post_type'			=> 'event',
				'posts_per_page'	=> 	-1,
				'meta_key'			=> 'date',
				'orderby'			=> 'meta_value_num',
				'order'				=> 'ASC'
			);
			$the_query = new WP_Query($args);

		?>

		<?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

			<?php 

				$today = date('Ymd');
				$date = get_field('date');
			

			if ( $date >= $today ) { ?>

				<div class="upcoming-event none">
					
					<h3><?php the_title(); ?></h3>

					<p class="details"><?php the_field('event_details'); ?></p>

					<?php the_excerpt(); ?>

				</div>

			<?php } ?>
				
		<?php endwhile; endif; wp_reset_postdata(); ?>

		<a class="view-more" href="<?php the_field('events_page', 'option'); ?>">View All Events</a>

		<a class="view-more" href="<?php the_field('events_page', 'option'); ?>">Past Events</a>

	</div>

	<aside class="left">

		<?php

			$args = array(
				'post_type'			=> 'event',
				'posts_per_page'	=> 	-1,
				'meta_key'			=> 'date',
				'orderby'			=> 'meta_value_num',
				'order'				=> 'ASC'
			);
			$the_query = new WP_Query($args);

		?>

		<?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

			<?php 

				$today = date('Ymd');
				$date = get_field('date');
			

			if ( $date >= $today ) { ?>

				<div class="upcoming-event none">
					
					<h3><?php the_title(); ?></h3>

					<p><?php the_field('event_details'); ?></p>

					<a href="<?php the_permalink(); ?>">More Info</a>

				</div>

			<?php } ?>
				
		<?php endwhile; endif; wp_reset_postdata(); ?>

	</aside>
	
</section><!-- end events -->

<?php get_footer(); ?>