<?php

define('CNKT_INSTALLER_PATH', get_template_directory_uri() .'/vendor/connekt-plugin-installer/');

include_once('vendor/connekt-plugin-installer/class-connekt-plugin-installer.php');

$plugins = [
  [
    'slug' => 'ajax-load-more',
  ],
  [
    'slug' => 'block-manager',
  ],
  [
    'slug' => 'instant-images'
  ],
  [
    'slug' => 'easy-query'
  ]
]; 

if( class_exists( 'Connekt_Plugin_Installer' ) ) {
  Connekt_Plugin_Installer::init( $plugins );
}

// https://github.com/dcooney/wordpress-plugin-installer/tree/main
