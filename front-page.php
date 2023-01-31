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

// Dequeue scripts and styles for storefront parent theme and woocommerce that are not needed for this page to improve Google core web vitals
if (is_front_page()) {
	add_action('wp_enqueue_scripts', 'dequeue_parent_scripts', 100);
}

// Get the header section
get_header();
// Get the overview section
get_template_part('template-parts/overview-section');
// Get the overview sub section
get_template_part('template-parts/overview-sub-section');
// Get the class section
get_template_part('template-parts/class-section');
// Get the world section
get_template_part('template-parts/world-section');
// Get the story section
get_template_part('template-parts/story-section');
// Get the news section
get_template_part('template-parts/news-section');
// Get the cta section
get_template_part('template-parts/cta-section');
// Get the footer section
get_footer();