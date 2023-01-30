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
get_header();

// Output the overview section
get_template_part('template-parts/overview-section');
// Output the overview sub section
get_template_part('template-parts/overview-sub-section');
// Output the class section
get_template_part('template-parts/class-section');
// Output the world section
get_template_part('template-parts/world-section');
// output the story section
get_template_part('template-parts/story-section');
// output the news section
get_template_part('template-parts/news-section');
// output the cta section
get_template_part('template-parts/cta-section');
// output the footer section
get_footer();
