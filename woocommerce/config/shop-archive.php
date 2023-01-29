<?php

/**
 * The Initial configuration for the woocommerce header-shop template
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
add_filter( 'woocommerce_show_page_title', '__return_false' );
add_action('init', 'replace_storefront_breadcrumbs' );
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
function replace_storefront_breadcrumbs(){

    add_action('woocommerce_before_main_content', 'd4s_storefront_archive_content', 50);
}
function d4s_storefront_archive_content(){
    echo '
	<style>
		.site-content .col-full {
			width: 100%;
			max-width: 100%;
			padding: 0;
			margin: 0;
		}
		.shop-archive-hero {
			min-height: 45vh;
		}
		.shop-archive-footer {
			background-color: #232323;
			color: #FFF;
			font-family: Poppins;
			padding: 1% 3%;
		}
		.storefront-sorting {
			display: none;
		}
		.products .product a {
			box-shadow: 0 3px 10px #0003;
   			border-radius: 3px;
			padding: 2% 3%;
		}
		
		.products .product h2 {
			border-top: 1px solid darkgray;
			padding-top: 2%;
		}
		
		.site-content .columns-4 {
			margin: 3%;
		}
	</style>
	<div class="shop-archive-hero" style="min-height: 50vh; background-position: top;  background-repeat: no-repeat; background-image: url(http://garyp38.sg-host.com/wp-content/uploads/2023/01/Blizzard-Collection-Banners-Diablo-scaled.webp)">
		
	</div>
	<div class="shop-archive-footer"><span style="font-size: 1.4rem">DIABLO MERCHANDISE</span> Our selection of Diablo merchandise includes t-shirts, hoodies, and other apparel. Whether you’ve just set foot in the world of Diablo or you are a hardened warrior who has explored every nook and cranny of Sanctuary and beyond, our range of merchandise and apparel will have something for you.  Our Diablo memorabilia collection boasts a variety of collectibles as well as the latest apparel and accessories.
	</div>
	';
}