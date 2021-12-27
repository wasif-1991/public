<?php

/**
 * Plugin Name:       Hooks Test
 * Plugin URI:        http://upshotfirm.com/
 * Description:       A simple plugin for testing different hooks in WordPress
 * Version:           1.0.0
 * Author:            Wasif Ahmed
 * Author URI:        https:/upshotfirm.com/
 * Text Domain:       swa-hooks
 * Domain Path:       /languages
 */

// Adds a welcome message
function hello_world () {
  if ( is_admin() ) {
    echo "Howdy Admin!";
  } else {
    echo "Hello world!";
  }
}

// Example of using add_action
add_action( 'login_header', 'hello_world' );

add_action ( 'admin_notices', 'hello_world' );

// Modify URL on login screen
function change_headerurl( $url ) {
  $url = "https://upshotfirm.com";
  return $url;
}

// Example of using add_filter
add_filter('login_headerurl','change_headerurl');
