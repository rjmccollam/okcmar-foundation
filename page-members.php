<?php
/*

	Template Name: Members

*/
?>

<?php get_header(); ?>

<section class="content container clearfix">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>

	<?php endwhile; endif; ?>

	<div class="clear"></div>

	<?php if( have_rows('members') ): while ( have_rows('members') ) : the_row(); ?>

		<div class="member clearfix">
			
			<div class="image" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>

			<h3><?php the_sub_field('name'); ?></h3>

			<p><?php the_sub_field('details'); ?></p>

		</div>

	<?php endwhile; endif; ?>

</section><!-- end content -->

<?php get_footer(); ?>