<?php

/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */
if (is_front_page()) {
	add_action('wp_enqueue_scripts', 'dequeue_parent_scripts', 100);
}
get_header(); ?>
<!-- Begin front page -->
<div id="d4s-front-page" class="">
	<main id="d4s-main" role="main">
		<!-- The video -->
		<video autoplay muted loop id="myVideo" width="100%">
			<source src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/fenris-introduction-bg-loop-ultra.webm" type="video/mp4">
		</video>
		<h2>
			TODO feature: D4S-3 <a href="https://www.notion.so/D4S-3-937806c6a817452b85926aa9e75277c4">Notion task link</a>
		</h2>

		<div class="row overview-sub-section" style="padding: 3%; background-color: #000;">
			<div style="width: 100%; height: 50vh;">
				<a href="https://flat-trick-de6.notion.site/D4S-4-7858d33457444359ad788f7adee986e2">TODO feature: D4S-4 Notion task link</a>
				<h2>ABANDON ALL HOPE</h2>
			</div>


		</div>
	</main>
</div><!-- End front page -->
<?php
// Output the class section
get_template_part('template-parts/class-section');
// Output the world section
get_template_part('template-parts/world-section');
// output the story section
get_template_part('template-parts/story-section');
// output the news section
get_template_part('template-parts/news-section');
// output the footer section
get_footer();
