<?php
defined( 'ABSPATH' ) or die();

class WL_URIS_CPT {
	/* Register custom post type */
	public static function register() {
		$labels = array(
			'name'               => _x( 'Unlimited Responsive Image Slider', WL_URIS_DOMAIN ),
			'singular_name'      => _x( 'Unlimited Responsive Image Slider', WL_URIS_DOMAIN ),
			'add_new'            => __( 'Add New Slider', WL_URIS_DOMAIN ),
			'add_new_item'       => __( 'Add New Slider', WL_URIS_DOMAIN ),
			'edit_item'          => __( 'Edit Image Slider', WL_URIS_DOMAIN ),
			'new_item'           => __( 'New Image Slider', WL_URIS_DOMAIN ),
			'view_item'          => __( 'View Image Slider', WL_URIS_DOMAIN ),
			'search_items'       => __( 'Search Image Slider', WL_URIS_DOMAIN ),
			'not_found'          => __( 'No Image Slider found', WL_URIS_DOMAIN ),
			'not_found_in_trash' => __( 'No Image Slider Found in Trash', WL_URIS_DOMAIN ),
			'parent_item_colon'  => __( 'Parent Image Slider:', WL_URIS_DOMAIN ),
			'all_items'          => __( 'All Image Sliders', WL_URIS_DOMAIN ),
			'menu_name'          => _x( 'UR Image Slider', WL_URIS_DOMAIN ),
		);

		$args = array(
			'labels'              => $labels,
			'hierarchical'        => false,
			'supports'            => array( 'title' ),
			'public'              => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 10,
			'menu_icon'           => 'dashicons-format-gallery',
			'show_in_nav_menus'   => false,
			'publicly_queryable'  => false,
			'exclude_from_search' => true,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => false,
			'capability_type'     => 'post'
		);

		register_post_type( 'ris_gallery', $args );
		add_filter( 'manage_edit-ris_gallery_columns', array( 'WL_URIS_CPT', 'gallery_columns' ) );
		add_action( 'manage_ris_gallery_posts_custom_column', array( 'WL_URIS_CPT', 'gallery_manage_columns' ), 10, 2 );
	}

	public static function gallery_columns( $columns ) {
		$columns = array(
			'cb'        => '<input type="checkbox">',
			'title'     => __( 'UR Image Slider Title', WL_URIS_DOMAIN ),
			'shortcode' => __( 'UR Image Slider Shortcode', WL_URIS_DOMAIN ),
			'author'    => __( 'Author', WL_URIS_DOMAIN ),
			'date'      => __( 'Date', WL_URIS_DOMAIN )
		);

		return $columns;
	}

	public static function gallery_manage_columns( $column, $post_id ) {
		global $post;
		switch ( $column ) {
			case 'shortcode' :
				echo '<input type="text" value="[URIS id=' . $post_id . ']" readonly="readonly">';
				break;
			default :
				break;
		}
	}
}
?>