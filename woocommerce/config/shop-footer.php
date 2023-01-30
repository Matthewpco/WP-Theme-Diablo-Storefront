<?php

/**
 * The Initial configuration for the woocommerce footer-shop template
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

add_action('init', 'd4s_customize_storefront_footer' );

function d4s_customize_storefront_footer(){
    remove_action( 'storefront_footer', 'storefront_footer_widgets', 10 );
	remove_action( 'storefront_footer', 'storefront_credit', 20 );
	add_action('storefront_before_footer', 'd4s_before_footer' );
	add_action('storefront_after_footer', 'd4s_after_footer' );
    add_action('storefront_footer', 'd4s_storefront_footer_content', 50);
}

// functions to wrap our content so as not to affect woocommerce base content and styles
function d4s_before_footer() {
	echo '
	<!-- Begin shop footer section -->
	<div id="shop-footer-content">
	';
}

function d4s_after_footer() {
	echo '
	</div><!-- End shop footer section -->
	';
}
// custom content and style go here
function d4s_storefront_footer_content(){
    echo '
	<style>
		#shop-footer-content #colophon {
			background-color: #151a23;
		}
		#shop-footer-content .one-sixth-section {
			background-color: #151a23;
			width: 16.6%
		}
		#shop-footer-content .col-full {
			width: 100%;
			max-width: 100%;
			display: flex;
		}
		#shop-footer-content ul li {
			color: #fff;
			font-size: 1rem;
			font-family: Poppins;
			padding-bottom: 3%;
			opacity: .8;
		}
		#shop-footer-content ul li a {
			color: #fff;
			font-size: 1.4rem;
			margin-left: 4%;
		}
		#shop-footer-content #colophon {
			padding: 1% 2%;
		}
		#footer-logo {
			height: 60px;
		}
	</style>
	
		<div class="one-sixth-section row">
		  	<ul>
				<li style="font-weight: bold; font-size: 1.1rem;">Information</li>
				<a href="https://gear.blizzard.com/pages/accessibility"><li>Accessibility</li></a>
				<a href="https://gear.blizzard.com/pages/cookie-policy"><li>Cookie Policy</li></a>
				<a href="https://gear.blizzard.com/pages/privacy-policy"><li>Privacy Policy</li></a>
				<a href="https://gear.blizzard.com/pages/terms-and-conditions"><li>Terms & Conditions</li></a>
			</ul>
		</div>
		
		<div class="one-sixth-section row">
		  	<ul>
				<li style="font-weight: bold; font-size: 1.1rem;">Shopping</li>
				<a href="https://gear.blizzard.com/account"><li>My Account</li></a>
				<a href="https://gear.blizzard.com/pages/cancellation-returns-policy"><li>Cancellation & Returns Policy</li></a>
				<a href="https://eu.gear.blizzard.com/"><li>EU Blizzard Gear Store</li></a>
				<a href="https://uk.gear.blizzard.com/"><li>UK Blizzard Gear Store</li></a>
				<a href="https://www.blizzard.com/"><li>Blizzard Domain</li></a>
			</ul>
		</div>
		
		<div class="one-sixth-section row">
			<ul>
				<li style="font-weight: bold; font-size: 1.1rem;">Support</li>
				<a href="https://support.gear.blizzard.com/en/support/home"><li>FAQs</li></a>
				<a href="https://support.gear.blizzard.com/en/support/home"><li>Help</li></a>
				<a href="https://support.gear.blizzard.com/en/support/solutions/articles/101000363866-contact-us"><li>Contact Us</li></a>
			</ul>
		</div>
		
		<div class="one-sixth-section row">
			<ul>
				<li style="font-weight: bold; font-size: 1.1rem;">Follow Us</li>
				<li>
				<a href="http://facebook.com/Blizzard" ><i class="fa-brands fa-facebook"></i></a>
				<a href="http://twitter.com/blizzard_ent" ><i class="fa-brands fa-twitter"></i></a> 
				<a href="http://instagram.com/blizzard" ><i class="fa-brands fa-instagram"></i></a> 
				</li>
			</ul>
		</div>
		
		<div class="one-sixth-section row">
			<ul>
				<li>Do Not Sell My Personal Information</li>
			</ul>
		</div>
		
		<div class="one-sixth-section row">
			<img id="footer-logo" src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/61fae8ba95e6ca00047b4f2b-e1673655719865.png" width="auto" />
		</div>
	';
}