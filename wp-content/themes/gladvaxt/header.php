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
    <nav>
        <div class="hamburger-icon">
          <!-- To-do: add nav links -->
        </div>
    </nav>
    <div class="logo-container">
      <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Glad Vaxt Logo">
    </div>

</header>

<div class="site-container container" id="site-wrapper">
