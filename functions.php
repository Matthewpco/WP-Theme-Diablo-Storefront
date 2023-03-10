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

//Enqueue fonts and icons for the whole site
add_action( 'wp_enqueue_scripts', 'd4s_enqueue_fonts' );

function d4s_enqueue_fonts() {
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Poppins:wght@300;400;700&display=swap', false);
    wp_enqueue_style('fa',  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
}


// Enqueue scripts , add actions are in header to seperate for landing page and shop, functions are here.

function d4s_enqueue_scripts()
{
	wp_enqueue_script('mobile-menu-modal', get_stylesheet_directory_uri() . '/assets/js/mobile-menu-modal.js', array(), true);
    wp_enqueue_script('purchase-modal', get_stylesheet_directory_uri() . '/assets/js/purchase-modal.js', array(), true);
    wp_enqueue_script('wc-classes', get_stylesheet_directory_uri() . '/assets/js/wc-classes.js', array(), true);
    wp_enqueue_script('world-section', get_stylesheet_directory_uri() . '/assets/js/world-section.js', array(), true);
    wp_enqueue_script('story-section', get_stylesheet_directory_uri() . '/assets/js/story-section.js', array(), true);
}

// Meant for scripts that need to be deferred to work properly
function d4s_defer_scripts($tag, $handle, $src)
{
    $defer = array(
        'mobile-menu-modal',
        'purchase-modal',
        'world-section',
        'story-section',
    );
	
    if (in_array($handle, $defer)) {
        return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
    }
	
    return $tag;
}

// Setup web component to module for Lit to run properly
function d4s_export_scripts($tag, $handle, $src)
{
    $export = array(
        'wc-classes',
    );
    if (in_array($handle, $export)) {
        return '<script src="' . $src . '" defer="defer" type="module"></script>' . "\n";
    }
    return $tag;
}

// Dequeue parent scripts that are not needed for landing page
function dequeue_parent_scripts()
{
    wp_dequeue_style('storefront-woocommerce-style');
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wc-blocks-vendors-style');
    wp_dequeue_style('wc-blocks-style');
    wp_dequeue_style('storefront-gutenberg-blocks');
    wp_dequeue_style('storefront-style');
    wp_dequeue_style('storefront-fonts');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('storefront-icons');
    wp_dequeue_style('woocommerce-inline');

    wp_dequeue_script('wc-add-to-cart');
    wp_dequeue_script('wc-cart-fragments');
    wp_dequeue_script('storefront-header-cart');
    wp_dequeue_script('storefront-handheld-footer-bar');
    wp_dequeue_script('jquery-blockui');
    wp_dequeue_script('js-cookie');
    wp_dequeue_script('woocommerce');
}

// Console log function in PHP to improve debugging experience
function console_log(...$data)
{
    $json = json_encode($data);
    add_action('shutdown', function () use ($json) {
        echo "<script>console.log({$json})</script>";
    });
}

// Declare woocommerce support and setup and basic settings recommend as best practices
add_action('after_setup_theme', 'd4s_theme_config', 0);

function d4s_theme_config()
{

    add_theme_support('woocommerce', array(
        'thumbnail_image_width'     => 255,
        'single_image_width'        => 255,
        'product_grid'              => array(
            'default_rows'      => 10,
            'min_rows'          => 3,
            'max_rows'          => 10,
            'default_columns'   => 3,
            'min_columns'       => 1,
            'max_columns'       => 4,
        )
    ));
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    if (!isset($content_width)) {
        $content_width = 600;
    }
}

// Setup custom D4S woocommerce configuration by using standard hooks and actions to ensure compatibility with Woocommerce
require_once( 'woocommerce/config/shop-header.php' );
require_once( 'woocommerce/config/shop-archive.php' );
require_once( 'woocommerce/config/shop-single.php' );
require_once( 'woocommerce/config/shop-footer.php' );