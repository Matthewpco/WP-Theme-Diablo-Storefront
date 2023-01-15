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

	<style>
		.main-nav ul li:first-child {
			display: none;
		}

		/* The Modal (background) */
		.modal {
			display: none;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 1;
			/* Sit on top */
			margin-right: 50%;
			/* Location of the box */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgb(0, 0, 0);
			/* Fallback color */
			background-color: rgba(0, 0, 0, 0.4);
			/* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
			position: relative;
			background-color: #18191B;
			margin: auto;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-animation-name: animateleft;
			-webkit-animation-duration: 0.4s;
			animation-name: animateleft;
			animation-duration: 0.4s;
			width: 80%;
			margin-right: 20%;
		}

		/* Add Animation */
		@-webkit-keyframes animateleft {
			from {
				left: -50%;
				opacity: 0
			}

			to {
				left: 0;
				opacity: 1
			}
		}

		@keyframes animateleft {
			from {
				left: -50%;
				opacity: 0
			}

			to {
				left: 0;
				opacity: 1
			}
		}

		/* The Close Button */
		.modal-header .close {
			color: white;
			font-size: 2rem;
			font-weight: bold;
			background: #242527;
			padding: 0 2.5%;
			margin: 1%;
			border-radius: 6px;
		}

		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}

		.modal-header {
			background-color: #18191B;
			display: flex;
		}


		.modal-header a {
			flex-basis: 50%;
			display: flex;
			justify-content: flex-end;
		}

		.modal-header a img {
			height: 50px;
			margin: 1%;
		}

		.modal-body {
			font-family: "Poppins", Helvetica, Arial, sans-serif;
			font-size: 1.2rem;
			font-weight: 700;
			;
		}

		.modal-body nav ul {
			list-style: none;
			margin: 0;
		}

		.modal-body nav ul li {
			padding: 2% 5%;
		}

		.modal-body nav ul a {
			color: #fff;
		}

		.modal-footer {
			background-color: #111113;
			padding-left: 5%;
		}

		.modal-footer div a {
			color: #fff;
			font-size: 1.2rem;
		}

		.pre-purchase-mobile {
			text-align: center;
			background-color: #a50905;
			border-radius: 6px;
			padding: 1%;
			margin: 5%;
		}

		@media screen and (max-width: 1200px) {

			.main-nav ul li:first-child {
				display: flex;
				flex: 45%
			}

			.main-nav ul li {
				display: none;
			}

			.main-nav a.icon {
				display: block;
			}

			.main-nav ul li:nth-child(3) {
				display: flex;
				flex: 50%;
			}
		}

		@media screen and (max-width: 1200px) {
			.main-nav.responsive {
				position: relative;
			}

			.main-nav.responsive .icon {

				left: 0;
				top: 0;
			}

			.main-nav.responsive ul li {
				float: none;
				display: block;
				text-align: left;
			}
		}
	</style>
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

		<script>
			// Get the modal
			var modal = document.getElementById("mobile-modal");

			// Get the button that opens the modal
			var btn = document.getElementById("menu-toggle");

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks the button, open the modal 
			btn.onclick = function() {
				if (modal.style.display = "block") {
					modal.style.display = "none";
				}
				if (modal.style.display = "none") {
					modal.style.display = "block";
				}
			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
				modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
		</script>

		<?php
