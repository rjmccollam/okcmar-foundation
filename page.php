<?php get_header(); ?>

<section class="content container clearfix">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>

	<?php endwhile; endif; ?>

</section><!-- end content -->

<?php get_footer(); ?>