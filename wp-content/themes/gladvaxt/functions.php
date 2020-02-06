<?php

function load_stylesheets() {

  wp_register_style('stylesheet', get_template_directory_uri() . '/css/application.css', array(), false, 'all');

  wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('stylesheet');
}

function wpt_theme_js() {
  wp_enqueue_script( 'scripts_js', get_template_directory_uri() . '/js/scripts.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );

add_action( 'init', 'register_theme_menus' );

function register_theme_menus() {
  register_nav_menus(
      array(
          'primary-menu' => __( 'Primary Menu' )
      )
  );
}

/**
 * Theme Support for Thumbnails
 */
add_theme_support( 'post-thumbnails' );

add_action('wp_enqueue_scripts', 'load_stylesheets');