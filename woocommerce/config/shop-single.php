<?php

/**
 * The Initial configuration for the woocommerce single-shop template
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

add_action('init', 'd4s_customize_storefront_single' );

function d4s_customize_storefront_single(){
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
	add_action('woocommerce_before_single_product_summary', 'd4s_before_single' );
	add_action('woocommerce_after_single_product_summary', 'd4s_after_single' );
	add_action('woocommerce_before_main_content', 'd4s_storefront_single_content', 50);
}

// add our custom wrapper to be able to modify content and styles without altering woocommerce or storefront base content 
function d4s_before_single() {
	echo '
	<!-- Begin shop single section -->
	<div id="shop-single-content">
	';
}

function d4s_after_single() {
	echo '
	</div><!-- End shop single section -->
	';
}

// custom single content and styling
function d4s_storefront_single_content(){
    echo '
	<style>
		#shop-single-content {
			margin: 5%;
		}
		#shop-single-content .entry-summary h1 {
			font-family: Poppins;
			font-size: 1.5rem;
			font-weight: 500;
		}
		#shop-single-content .entry-summary {
			border-bottom: 1px solid lightgray;
		}
		#shop-single-content .price {
			font-family: Poppins;
			font-size: 1.5rem;
			font-weight: 500;
			color: #000;
		}
		#shop-single-content .entry-summary ul li {
			font-family: Poppins;
			font-size: 1.2rem;
			font-weight: normal;
			
		}
		#shop-single-content .cart .quantity input {
			display: none;
		}
		#shop-single-content .cart button {
			border-radius: 8px;
			font-size: 1.3rem;
			padding: .8rem 2.4rem;
			font-family: Poppins;
			font-weight: 400;
		}
		#shop-single-content ul {
			font-family: Poppins;
			list-style: disc;
			margin-left: 3%;
		}
		#shop-single-content #tab-title-reviews, .gear-single-product #tab-title-additional_information {
			display: none;
		}
		#shop-single-content .woocommerce-tabs {
			display: flex;
			flex-direction: column;
			padding-left: 43%;
			font-family: Poppins;
			font-weight: 400;
			font-size: 1.2rem;
			color: #000;
		}
		#shop-single-content #tab-title-description, .wc-tabs {
			display: none;
		}
		#shop-single-content .woocommerce-product-gallery {
			margin-bottom: 0!important;
		}
		#shop-single-content .woocommerce-Tabs-panel {
			width: 90%!important;
		}
		#shop-single-content .woocommerce-loop-product__title {
			text-align: center!important;
		}
		#page section > h2 {
			text-align: left;
			border-bottom: 2px solid black;
			text-transform: uppercase;
		}
		.related.products {
			margin: 5%;
		}
		@media only screen and (max-width: 767px) {
			#shop-single-content .woocommerce-tabs {
				padding-left: 5%;
			}
		}
	</style>
	';
}