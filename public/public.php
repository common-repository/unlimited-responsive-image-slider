<?php
defined( 'ABSPATH' ) or die();

require_once( WL_URIS_PLUGIN_DIR_PATH . 'public/WL_URIS_Language.php' );
require_once( WL_URIS_PLUGIN_DIR_PATH . 'public/WL_URIS_Shortcode.php' );

/* Load translation */
add_action( 'plugins_loaded', array( 'WL_URIS_Language', 'load_translation' ) );

/* Register new image sizes */
add_image_size( 'rpggallery_admin_thumb', 300, 300, true );
add_image_size( 'rpggallery_admin_large', 500, 9999 );
add_image_size( 'rpg_gallery_admin_thumb', 150, 150, true );
add_image_size( 'rpg_gallery_thumb', 150, 150, true );

/* Slider text widget support */
add_filter( 'widget_text', 'do_shortcode' );

/* Add shortcode */
add_shortcode( 'URIS', array( 'WL_URIS_Shortcode', 'shortcode' ) );
add_shortcode( 'URISP', array( 'WL_URIS_Shortcode', 'shortcode' ) );
?>