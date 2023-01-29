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

add_action('init', 'd4s_storefront_single_hook' );
function d4s_storefront_single_hook(){

    add_action('woocommerce_before_main_content', 'd4s_storefront_single_content', 50);
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
}
function d4s_storefront_single_content(){
    echo '
	<style>
		.gear-single-product {
			margin: 5%;
		}
		.gear-single-product .entry-summary h1 {
			font-family: Poppins;
			font-size: 1.5rem;
			font-weight: 500;
		}
		.gear-single-product .entry-summary {
			border-bottom: 1px solid lightgray;
		}
		.gear-single-product .price {
			font-family: Poppins;
			font-size: 1.5rem;
			font-weight: 500;
			color: #000;
		}
		.gear-single-product .entry-summary ul li {
			font-family: Poppins;
			font-size: 1.2rem;
			font-weight: normal;
			
		}
		.gear-single-product .cart .quantity input {
			display: none;
		}
		.gear-single-product .cart button {
			border-radius: 8px;
			font-size: 1.3rem;
			padding: .8rem 2.4rem;
			font-family: Poppins;
			font-weight: 400;
		}
		.gear-single-product ul {
			font-family: Poppins;
			list-style: disc;
			margin-left: 3%;
		}
		.gear-single-product #tab-title-reviews, .gear-single-product #tab-title-additional_information {
			display: none;
		}
		.gear-single-product .woocommerce-tabs {
			display: flex;
			flex-direction: column;
			padding-left: 43%;
			font-family: Poppins;
			font-weight: 400;
			font-size: 1.2rem;
			color: #000;
		}
		#tab-title-description, .wc-tabs {
			display: none;
		}
		.gear-single-product .woocommerce-product-gallery {
			margin-bottom: 0!important;
		}
		.gear-single-product .woocommerce-Tabs-panel {
			width: 90%!important;
		}
		@media only screen and (max-width: 767px) {
			.gear-single-product .woocommerce-tabs {
				padding-left: 5%;
			}
		}
	</style>
	';
}