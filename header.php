<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head><!-- #head -->

<body>

<?php wp_body_open(); ?>

<div id="page-container" class="">

	<header id="diablo-4-header">
	
		<nav id="diablo-4-nav" class="main-nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'storefront' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'primary-nav',
				)
			);

			
			?>
		</nav><!-- #site-navigation -->
		TODO Matthew feature: D4S-1 <a href="https://www.notion.so/D4S-1-0e246a3d483e4e2fb9c89181ad5d7cb3">>Notion task link<</a>

	</header><!-- #header -->

		<?php	