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

    <?php
    // Output the menu modal.
    get_template_part('template-parts/modal-menu');
    // Output the pre-purchase modal
    get_template_part('template-parts/pre-purchase-modal');
