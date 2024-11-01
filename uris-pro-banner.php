<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
wp_enqueue_style( 'respport-banner', WL_URIS_PLUGIN_URL . 'assets/css/uris-banner.css' );
$gp_imgpath = WL_URIS_PLUGIN_URL . "assets/img/uris-banner.png";
?>
<div class="wb_plugin_feature notice  is-dismissible">
    <div class="wb_plugin_feature_banner default_pattern pattern_ ">
        <div class="wb-col-md-6 wb-col-sm-12 box">
            <div class="ribbon"><span>Go Pro</span></div>
            <img class="wp-img-responsive" src="<?php echo $gp_imgpath; ?>" alt="img">
        </div>
        <div class="wb-col-md-6 wb-col-sm-12 wb_banner_featurs-list">
            <span class="gp_banner_head"><h2><?php _e( 'Unlimited Responsive Image Slider Pro Features', WL_URIS_DOMAIN ); ?> </h2></span>
            <ul>
                <li><?php _e( 'Fully Responsive Slider Plugin', WL_URIS_DOMAIN ); ?></li>
                <li><?php _e( 'Multiple Image Uploader', WL_URIS_DOMAIN ); ?></li>
                <li><?php _e( 'Create Unlimited Image Slider', WL_URIS_DOMAIN ); ?></li>
                <li><?php _e( 'Display the Sliders on Page/Post', WL_URIS_DOMAIN ); ?></li>
                <li><?php _e( 'Image Slider Setting Dashboard', WL_URIS_DOMAIN ); ?></li>
                <li><?php _e( 'Enable/Disable Slider Title', WL_URIS_DOMAIN ); ?></li>
                <li><?php _e( '5 Slider Layout', WL_URIS_DOMAIN ); ?></li>
                <li><?php _e( 'Unlimited Color Scheme', WL_URIS_DOMAIN ); ?></li>
                <li><?php _e( 'Drag and Drop image Position', WL_URIS_DOMAIN ); ?></li>
                <li><?php _e( 'Shortcode Button on post or page', WL_URIS_DOMAIN ); ?></li>
                <li><?php _e( '500+ Google Font Style (New)', WL_URIS_DOMAIN ); ?></li>
				<li><?php _e( 'Customize Thumbnail Position', WL_URIS_DOMAIN ); ?></li>
                <li><?php _e( 'External Link Button', WL_URIS_DOMAIN ); ?></li>
                <li><?php _e( 'Unique settings for each gallery', WL_URIS_DOMAIN ); ?></li>
                <li><?php _e( 'Hide or Show Gallery Title and Label', WL_URIS_DOMAIN ); ?></li>
            </ul>
            <div class="wp_btn-grup">
                <a class="wb_button-primary" href="http://demo.weblizar.com/responsive-photo-gallery-pro/"
                   target="_blank"><?php _e( 'View Demo', WL_URIS_DOMAIN ); ?></a>
                <a class="wb_button-primary" href="https://weblizar.com/plugins/responsive-photo-gallery-pro/"
                   target="_blank"><?php _e( 'Buy Now', WL_URIS_DOMAIN ); ?> $21</a>
            </div>
        </div>
    </div>
</div>