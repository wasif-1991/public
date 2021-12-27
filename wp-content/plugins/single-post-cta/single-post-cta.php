<?php

/**
 * Plugin Name:       Single Post CTA
 * Plugin URI:        http://upshotfirm.com/
 * Description:       Adds sidebar (widget area) to single posts
 * Version:           1.0.0
 * Author:            Wasif Ahmed
 * Author URI:        https:/upshotfirm.com/portfolio/
 * Text Domain:       spc
 */


// If this file is called directly, abort
if ( !defined( 'ABSPATH' ) ) {
  die;
}

// Load stylesheet
function spc_load_stylesheet() {
  if ( is_single() ) {
    wp_enqueue_style( 'spc_stylesheet', plugin_dir_url(__FILE__) . 'spc-styles.css' );
  }
}

// Hook action
add_action ( 'wp_enqueue_scripts', 'spc_load_stylesheet' );


// Register a custom sidebar
function spc_register_sidebar() {
  register_sidebar( array(
      'name'           => __( 'Single Post CTA', 'spc' ),
      'id'             => 'spc-sidebar',
      'description'    => __( 'Display widget area on single posts', 'spc' ),
      'before_widget'  => '<div class="widget spc">',
      'after_widget'   => "</div>",
      'before_title'   => '<h2 class="widgettitle spc-title">',
      'after_title'    => "</h2>",
  ) );
}

// Hook sidebar
add_action( 'widget_init', 'spc_register_sidebar' );
