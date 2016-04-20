<?php get_header(); ?>

<section class="content container clearfix">

	<?php if (have_posts()) : ?>

		<h1>Search Results</h1>

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('partials/post'); ?>

		<?php endwhile; ?>

		<?php get_template_part('partials/nav'); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

</section>

<?php get_footer(); ?>