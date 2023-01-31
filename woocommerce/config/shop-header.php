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

add_action('init', 'd4s_customize_storefront_header' );

function d4s_customize_storefront_header(){
    remove_action( 'storefront_header', 'storefront_primary_navigation', 50 );
	remove_action( 'storefront_before_content', 'woocommerce_breadcrumb', 10 );
	add_action('storefront_before_header', 'd4s_before_header' );
	add_action('storefront_before_content', 'd4s_after_header' );
    add_action('storefront_header', 'd4s_storefront_header_content', 50);
}

// add our custom wrapper to be able to modify content and styles without altering woocommerce or storefront base content 
function d4s_before_header() {
	echo '
	<div id="shop-header-content">
	';
}

function d4s_after_header() {
	echo '
	</div>
	';
}

// custom header content and styling
function d4s_storefront_header_content(){
    echo '
		<style>
			#shop-header-content .site-search {
				margin-top: 2%;
			}
			#shop-header-content #woocommerce-product-search-field-0 {
				background-color: #282b30;
			}
			#shop-header-content .site-header-cart {
				padding-top: 2%;
			}
			#shop-header-content .site-header-cart .cart-contents {
				padding: 0;
				color: white;
			}
			#shop-header-content .shop-nav ul a {
				color: white;
				background-color: #232323;
			}
			#shop-header-content .shop-nav ul {
				display: inline-flex;
				font-family: "Poppins";
				font-size: 1.2rem;	
			}
			#shop-header-content .shop-nav ul li {
				padding: 12px 16px;

			}
			#shop-header-content .shop-nav ul li:hover {
				background-color: white;
				color: black;
			}
			#shop-header-content .storefront-primary-navigation {
				background-color: #232323;
			}
			#shop-header-content .storefront-primary-navigation .col-full {
			}
			#shop-header-content .site-header {
				background-color: #000;
				padding-top: 1%;
				border-bottom: none;
			}
			@media only screen and (max-width: 767px) {
				#shop-header-content .site-header {
					display: flex;
					flex-direction: column;
				}
				#shop-header-content .site-branding {
					margin-left: 25%;
					padding: 2% 0;
				}
				#shop-header-content .shop-nav {
					width: 100%;
					justify-content: center;
					text-align: center;
				}
				#shop-header-content .shop-nav ul {
					flex-direction: column;
				}
			}
		</style>
		<nav class="shop-nav" style="background-color: #232323; display: inline-flex">
			<ul>
				<a href="/#overview"><li>Overview</li></a>
				<a href="/#classes"><li>Classes</li></a>
				<a href="/#world"><li>World</li></a>
				<a href="/#story"><li>Story</li></a>
				<a href="/#news"><li>News</li></a>
				<a href="/shop"><li>Gear</li></a>
			</ul>
		</nav>
	';
}