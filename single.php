<?php

/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header();


?>
<style>
	.blog-content {
		width: 100%;
		padding: 5% 15% 5% 15%;
	}

	.blog-content p,
	.blog-content h2,
	.blog-content h3 {
		color: #878582;
	}
</style>
<div id="primary" class="content-area blog-content center">
	<main id="main" class="site-main" role="main">

		<?php
		while (have_posts()) :
			the_post();

			get_template_part('content', 'single');

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
