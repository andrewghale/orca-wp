<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="header">
    <nav class="header-menu">
      <div class="hamburger-icon">
        <?php
          $defaults = array(
            'container' => true,
            'theme_location' => 'primary-menu',
            'menu_class' => 'no-bullet desktop',
            'menu_class' => 'header-nav'
          );
          wp_nav_menu( $defaults );
        ?>
      </div>
    </nav>
    <div class="hamburger">
      <img class="hamburger-shut" src="<?php bloginfo('template_directory'); ?>/img/hamburger-shut.svg" alt="Hamburger menu">
      <img class="hamburger-open" src="<?php bloginfo('template_directory'); ?>/img/hamburger-open.svg" alt="Hamburger menu">
    </div>
    <div class="logo-container">
      <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Glad Vaxt Logo">
    </div>

</header>

<div class="site-container container" id="site-wrapper">
