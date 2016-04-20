<?php
/*

	Template Name: Events

*/
?>

<?php get_header(); ?>

<section class="content container clearfix">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>

	<?php endwhile; endif; ?>

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

			<?php

				$dateformatstring = "F j, Y";
				$unixtimestamp = strtotime(get_field('date'));
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

			?>

			<div class="member event clearfix">
			
				<a href="<?php the_permalink(); ?>" class="image" style="background-image: url(<?php echo $feat_image; ?>);"></a>

				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

				<p><?php echo date_i18n($dateformatstring, $unixtimestamp); ?></p>

			</div>

		<?php } ?>
			
	<?php endwhile; endif; wp_reset_postdata(); ?>

	<div class="clear"></div>

	<h2>Past Events</h2>

	<?php

		$args = array(
			'post_type'			=> 'event',
			'posts_per_page'	=> 	-1,
			'meta_key'			=> 'date',
			'orderby'			=> 'meta_value_num',
			'order'				=> 'DESC'
		);
		$the_query = new WP_Query($args);

	?>

	<?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

		<?php 

			$today = date('Ymd');
			$date = get_field('date');
		

		if ( $date <= $today ) { ?>

			<?php

				$dateformatstring = "F j, Y";
				$unixtimestamp = strtotime(get_field('date'));
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

			?>

			<div class="member past-event clearfix">
			
				<a href="<?php the_permalink(); ?>" class="image" style="background-image: url(<?php echo $feat_image; ?>);"></a>

				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

				<p><?php echo date_i18n($dateformatstring, $unixtimestamp); ?></p>

				<div class="excerpt"><?php the_excerpt(); ?></div>

			</div>

		<?php } ?>
			
	<?php endwhile; endif; wp_reset_postdata(); ?>

</section><!-- end content -->

<?php get_footer(); ?>