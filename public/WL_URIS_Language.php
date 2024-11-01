<?php
defined( 'ABSPATH' ) or die();
class WL_URIS_Language {
	public static function load_translation() {
		load_plugin_textdomain( WL_URIS_DOMAIN, false, basename( WL_URIS_PLUGIN_DIR_PATH ) . '/languages' );
	}
}