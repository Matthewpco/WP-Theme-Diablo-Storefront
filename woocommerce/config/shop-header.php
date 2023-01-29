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


add_action('init', 'replace_storefront_primary_navigation' );
function replace_storefront_primary_navigation(){
    remove_action( 'storefront_header', 'storefront_primary_navigation', 50 );
	remove_action( 'storefront_before_content', 'woocommerce_breadcrumb', 10 );
    add_action('storefront_header', 'jk_storefront_header_content', 50);
}

function jk_storefront_header_content(){
    // your custom navigation code goes here
    echo '
	<style>
		.site-search {
			margin-top: 2%;
		}
		#woocommerce-product-search-field-0 {
			background-color: #282b30;
		}
		.site-header-cart {
			padding-top: 2%;
		}
		.site-header-cart .cart-contents {
			padding: 0;
			color: white;
		}
		.shop-nav ul a {
			color: white;
			background-color: #232323;
		}
		.shop-nav ul {
			display: inline-flex;
			font-family: "Poppins";
			font-size: 1.2rem;
			
			
		}
		.shop-nav ul li {
			padding: 12px 16px;
			
		}
		.shop-nav ul li:hover {
			background-color: white;
			color: black;
		}
		.storefront-primary-navigation {
			background-color: #232323;
		}
		.storefront-primary-navigation .col-full {

		}
		.site-header {
			background-color: #000;
			padding-top: 1%;
			border-bottom: none;
		}
	</style>
		<nav class="shop-nav" style="background-color: #c3c3c3; display: inline-flex">
			<ul>
				<a href="/#overview"><li>Overview</li></a>
				<a href="/#classes"><li>Classes</li></a>
				<a href="/#world"><li>World</li></a>
				<a href="/#story"><li>Story</li></a>
				<a href="/#news"><li>News</li></a>
				<a href="/#shop"><li>Gear</li></a>
			</ul>
		</nav>
	';
}