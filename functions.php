<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style()
{
    wp_dequeue_style('storefront-style');
    wp_dequeue_style('storefront-woocommerce-style');
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

/**
 * Enqueue a script
 */
function d4s_enqueue_scripts()
{
    wp_enqueue_script('mobile-menu-modal', get_stylesheet_directory_uri() . '/js/mobile-menu-modal.js', array(), true);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'd4s_enqueue_scripts');

// Meant for scripts that need to be deferred to work properly
function d4s_defer_scripts($tag, $handle, $src)
{
    $defer = array(
        'mobile-menu-modal',
    );
    if (in_array($handle, $defer)) {
        return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
    }
    return $tag;
}
add_filter('script_loader_tag', 'd4s_defer_scripts', 10, 3);
