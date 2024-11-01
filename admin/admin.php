<?php
defined( 'ABSPATH' ) or die();

require_once( WL_URIS_PLUGIN_DIR_PATH . 'admin/WL_URIS_CPT.php' );
require_once( WL_URIS_PLUGIN_DIR_PATH . 'admin/WL_URIS_Menu.php' );
require_once( WL_URIS_PLUGIN_DIR_PATH . 'admin/WL_URIS_Metabox.php' );

/* Register custom post type */
add_action( 'init', array( 'WL_URIS_CPT', 'register' ) );

/* Add metaboxes */
add_action( 'add_meta_boxes', array( 'WL_URIS_Metabox', 'add_all_ris_meta_boxes' ) );
add_action( 'admin_init', array( 'WL_URIS_Metabox', 'add_all_ris_meta_boxes' ), 1 );

add_action('admin_menu', array( 'WL_URIS_Menu', 'create_menu' ) );

/* Metaboxes save */
add_action( 'save_post', array( 'WL_URIS_Metabox', 'add_image_meta_box_save' ), 9, 1 );
add_action( 'save_post', array( 'WL_URIS_Metabox', 'ris_settings_meta_save' ), 9, 1 );

/* Add new slide */
add_action( 'wp_ajax_uris_get_thumbnail', array( 'WL_URIS_Metabox', 'ajax_get_thumbnail_uris' ) );
?>