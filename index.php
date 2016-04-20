<?php get_header(); ?>

<section class="content container clearfix">

	<h1>News</h1>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php get_template_part('partials/post'); ?>

	<?php endwhile; ?>

	<?php get_template_part('partials/nav' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

</section>

<?php get_footer(); ?>