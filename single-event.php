<?php get_header(); ?>

<section class="content container clearfix">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<h1><?php the_title(); ?></h1>

		<?php

			$dateformatstring = "F j, Y";
			$unixtimestamp = strtotime(get_field('date'));

		?>

		<h2><?php echo date_i18n($dateformatstring, $unixtimestamp); ?></h2>

		<p class="feat-img"><?php the_post_thumbnail(); ?></p>

		<?php the_content(); ?>

	<?php endwhile; endif; ?>
	
</section>

<?php get_footer(); ?>