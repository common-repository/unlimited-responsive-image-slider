<?php
defined( 'ABSPATH' ) or die();

class WL_URIS_Menu {
	public static function create_menu() {
		$plugin_details = add_submenu_page('edit.php?post_type=ris_gallery', __('Plugin Details', WL_URIS_DOMAIN), __('Plugin Details', WL_URIS_DOMAIN), 'administrator', 'wl_uris_plugin_detail', array('WL_URIS_Menu','plugin_details'));

		add_action( 'admin_print_styles-' . $plugin_details, array( 'WL_URIS_Menu', 'plugin_details_assets' ) );
	}

	 public static function plugin_details(){
		?>
			<div class="row">
				<div class="col-md-12">
					<h1 class="well"><?php _e( 'Unlimited Responsive Image Slider', WL_URIS_DOMAIN ); ?></h1>
					<h3 class="well"><?php _e( 'Create a New Image Slider', WL_URIS_DOMAIN ); ?></h3>
					<ol>
					  <li><?php _e( 'Click on Add New Slider into Unlimited Responsive Image Slider plugin menu.', WL_URIS_DOMAIN ); ?></li>
					  <li><?php _e( 'Add New Images - Using this button you can upload the images for slider. This is a multiple image uploader to add unlimited images into slider.', WL_URIS_DOMAIN ); ?></li>
					 					  
					<h3 class="well"><?php _e( 'Publish Unlimited Responsive Image Slider In Page', WL_URIS_DOMAIN ); ?></h3>
					<ol>
					  <li><?php _e( 'Click on ADD New link into Pages menu.', WL_URIS_DOMAIN ); ?></li>
					  <li><?php _e( 'Page the copied shortcode [URIS id=xxxx] into page content editor.', WL_URIS_DOMAIN ); ?></li>
					  <li><?php _e( 'This step is optional and depend on your theme. If your theme allows you to select available template like Default, Full Width etc then you can use desired template for your gallery.', WL_URIS_DOMAIN ); ?></li>
					  <li><?php _e( 'Click on Publish button to display your Unlimited Responsive Image Slider on created page.', WL_URIS_DOMAIN ); ?></li>
					  <li><?php _e( 'Now check created Unlimited Responsive Image Slider Preview through View Page button below title.', WL_URIS_DOMAIN ); ?></li>
					</ol>
					<h3 class="well"><?php _e( 'Unlimited Responsive Image Slider Settings', WL_URIS_DOMAIN ); ?></h3>
					<ol>
					  <li><?php _e( 'Slide Title –  You can set a slide title.', WL_URIS_DOMAIN ); ?></li>
					  <li><?php _e( ' Slide Description – You can set a slide description.', WL_URIS_DOMAIN ); ?></li>
					  <li><?php _e( ' Slide Title Color – You can set a slide title color.', WL_URIS_DOMAIN ); ?></li>
					  <li><?php _e( ' Slide Description Color – You can set a slide description color.', WL_URIS_DOMAIN ); ?></li>
					  <li><?php _e( ' Auto Play Slide Show – You can set slide mouse hover autoplay .', WL_URIS_DOMAIN ); ?></li>
					  <li><?php _e( ' Font Style – You can set font style on slide title .', WL_URIS_DOMAIN ); ?></li>
					  <li><?php _e( ' Show Thumbnail – You can show/hide thumbnail .', WL_URIS_DOMAIN ); ?></li>
					  <li><?php _e( ' Show Navigation Bullets – You can show/hide navigation bullets .', WL_URIS_DOMAIN ); ?></li>
					</ol>
				</div>	
			</div>
		<?php
	}

	public static function plugin_details_assets() {
		wp_enqueue_style( 'wl-uris-bootstrap', WL_URIS_PLUGIN_URL . '/admin/css/bootstrap.min.css' );
	}
}
?>