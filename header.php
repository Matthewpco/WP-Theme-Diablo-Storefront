<?php

/**
 * Displays the header section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Storefront
 * @subpackage Diablo_4_Storefront_Child
 * @since Diablo 4 Storefront Child 1.0
 */

?>
<?php
//Custom hooks for content associated with this header
add_action('wp_enqueue_scripts', 'd4s_enqueue_scripts');
add_filter('script_loader_tag', 'd4s_defer_scripts', 10, 3);
add_filter('script_loader_tag', 'd4s_export_scripts', 10, 3);
?>
<!doctype html>
<!-- Begin header section -->
<html <?php language_attributes(); ?> <head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>

</head>

<body>

  <?php wp_body_open(); ?>

  <header id="diablo-4-header"><!-- Begin navigation -->
    <nav id="diablo-4-nav" class="main-nav" role="navigation" aria-label="<?php esc_attr_e('Primary Navigation', 'storefront'); ?>">

      <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'primary',
          'container_class' => 'primary-nav',
        )
      ); ?>

      <a class="mobile-icon" href="https://account.battle.net/"><i class="fa-regular fa-user"></i></a>
    </nav><!-- End navigation -->
  </header><!-- End header section -->

  <?php
  // Output the menu modal.
  get_template_part('template-parts/modal-menu');
  // Output the pre-purchase modal
  get_template_part('template-parts/pre-purchase-modal');
