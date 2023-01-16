<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>

</head><!-- #head -->

<body>

	<?php wp_body_open(); ?>

	<div id="page-container" class="">
		<header id="diablo-4-header">
			<nav id="diablo-4-nav" class="main-nav" role="navigation" aria-label="<?php esc_attr_e('Primary Navigation', 'storefront'); ?>">

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'primary-nav',
					)
				);
				?>

				<a class="mobile-icon" href="https://account.battle.net/"><i class="fa-regular fa-user"></i></a>
			</nav><!-- #site-navigation -->
		</header><!-- #header -->

		<!-- The Modal -->
		<div id="mobile-modal" class="modal">

			<!-- Modal content -->
			<div class="modal-content">
				<div class="modal-header">
					<span class="close">&times;</span>
					<a href="https://blizzard.com/"><img src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/61fae8ba95e6ca00047b4f2b-e1673655719865.png"></a>
				</div>
				<div class="modal-body">
					<nav>
						<ul id="menu-main-menu" class="menu">
							<a href="#"><img src="http://garyp38.sg-host.com/wp-content/uploads/2023/01/d4-logo-002.webp" width="100%"></a>
							<li id="menu-item-63" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-63"><a href="#overview">Overview</a></li>
							<li id="menu-item-76" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-76"><a href="#classes">Classes</a></li>
							<li id="menu-item-77" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-77"><a href="#world">World</a></li>
							<li id="menu-item-78" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-78"><a href="#story">Story</a></li>
							<li id="menu-item-79" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-79"><a href="#news">News</a></li>
							<li id="menu-item-80" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-80"><a href="/Gear">Gear</a></li>
							<div id="pre-purchase-mobile" class="pre-purchase-mobile"><a href="#">Pre-Purchase</a></div>
						</ul>
					</nav>
				</div>

				<div class="modal-footer">
					<h3 style="color: #848485; font-size: 1rem;">More from Blizzard</h3>
					<div><i class="fa-solid fa-arrow-up-right-from-square" style="margin-right: 2%;"></i><a href="https://www.blizzard.com/en-us/">Visit Blizzard.com</a></div>
					<div><i class="fa-solid fa-gamepad" style="margin-right: 2%;"></i><a href="https://www.blizzard.com/en-us/games">All Games</a></div>
				</div>
			</div>
		</div>

		<?php
