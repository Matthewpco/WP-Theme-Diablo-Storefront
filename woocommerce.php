<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

<div class="shop-content">


    <?php woocommerce_content(); ?>


</div><!-- #primary -->

<?php
do_action('storefront_sidebar');
get_footer();
