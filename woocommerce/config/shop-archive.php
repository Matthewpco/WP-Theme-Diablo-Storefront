<?php

/**
 * The Initial configuration for the woocommerce archive-shop template
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

add_action( 'wp', 'conditional_shop_content' );
function conditional_shop_content() {
  if( is_shop() ) {
    console_log(is_shop());
  }
}

add_action('init', 'd4s_customize_storefront_archive' );

function d4s_customize_storefront_archive(){
	remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
	add_filter( 'woocommerce_show_page_title', '__return_false' );
	add_action('woocommerce_before_main_content', 'd4s_before_archive' );
	add_action('woocommerce_after_main_content', 'd4s_after_archive' );
    add_action('woocommerce_before_main_content', 'd4s_storefront_archive_content', 50);
}

// add our custom wrapper to be able to modify content and styles without altering woocommerce or storefront base content 
function d4s_before_archive() {
	echo '
	<!-- Begin shop archive section -->
	<div id="shop-archive-content">
	';
}

function d4s_after_archive() {
	echo '
	</div><!-- End shop archive section -->
	';
}

// custom archive content and styling
function d4s_storefront_archive_content(){
    echo '
	<style>
		.site-content .col-full {
			width: 100%;
			max-width: 100%;
			padding: 0;
			margin: 0;
		}
		.site-content .columns-4 {
			margin: 3%;
		}
		#shop-archive-content .shop-archive-hero {
			min-height: 45vh;
		}
		#shop-archive-content .shop-archive-footer {
			background-color: #232323;
			color: #FFF;
			font-family: Poppins;
			padding: 1% 3%;
		}
		#shop-archive-content .storefront-sorting {
			display: none;
		}
		#shop-archive-content .products .product a {
			box-shadow: 0 3px 10px #0003;
   			border-radius: 3px;
			padding: 2% 3%;
		}
		#shop-archive-content .products .product h2 {
			border-top: 1px solid darkgray;
			padding-top: 2%;
		}
	</style>
	<div class="shop-archive-hero" style="min-height: 50vh; background-position: top;  background-repeat: no-repeat; background-image: url(http://garyp38.sg-host.com/wp-content/uploads/2023/01/Blizzard-Collection-Banners-Diablo-scaled.webp)">
	</div>
	<div class="shop-archive-footer"><span style="font-size: 1.4rem">DIABLO MERCHANDISE</span> Our selection of Diablo merchandise includes t-shirts, hoodies, and other apparel. Whether you’ve just set foot in the world of Diablo or you are a hardened warrior who has explored every nook and cranny of Sanctuary and beyond, our range of merchandise and apparel will have something for you.  Our Diablo memorabilia collection boasts a variety of collectibles as well as the latest apparel and accessories.
	</div>
	';
}