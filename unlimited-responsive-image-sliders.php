<?php
/*
 * Plugin Name: Slider - Unlimited Responsive Image Slider
 * Plugin URI: https://wordpress.org/plugins/unlimited-responsive-image-slider/
 * Description: Unlimited Responsive Image Slider plugin is used to view your image slider in a slide-show and widgets on WordPress published pages and posts using short-codes. It's also have various type of features like slide title, slide thumbnail, slide navigation settings and many more option design slider.
 * Version: 1.4
 * Author: Weblizar
 * Author URI: https://weblizar.com
 * Text Domain: WL-URIS
 */

defined( 'ABSPATH' ) or die();

if ( ! defined( 'WL_URIS_DOMAIN' ) ) {
	define( 'WL_URIS_DOMAIN', 'WL-URIS' );
}

if ( ! defined( 'WL_URIS_PLUGIN_URL' ) ) {
	define( 'WL_URIS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'WL_URIS_PLUGIN_DIR_PATH' ) ) {
	define( 'WL_URIS_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'WL_URIS_PLUGIN_BASENAME' ) ) {
	define( 'WL_URIS_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
}

final class WL_URIS_UnlimitedImageSlider {
	private static $instance = null;

	private function __construct() {
		$this->initialize_hooks();
		$this->setup_database();
	}

	public static function get_instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	private function initialize_hooks() {
		if ( is_admin() ) {
			require_once( 'admin/admin.php' );
		}
		require_once( 'public/public.php' );
	}

	private function setup_database() {
		require_once( 'admin/WL_URIS_Database.php' );
		register_activation_hook( __FILE__, array( 'WL_URIS_Database', 'activation' ) );
	}
}
WL_URIS_UnlimitedImageSlider::get_instance();

function jfile() {
	wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'jfile' );


// Review Notice Box
add_action( "admin_notices", "review_admin_notice_uris_free" );
function review_admin_notice_uris_free() {
	global $pagenow;
	$uris_screen = get_current_screen();
	if ( $pagenow == 'edit.php' && $uris_screen->post_type == "ris_gallery" ) {
		include( 'uris-pro-banner.php' );
	}
}
?>