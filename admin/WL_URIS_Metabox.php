<?php
defined( 'ABSPATH' ) or die();

class WL_URIS_Metabox {
	public static function add_all_ris_meta_boxes() {
		add_meta_box( __( 'Add Images', WL_URIS_DOMAIN ), __( 'Add Images', WL_URIS_DOMAIN ), array(
			'WL_URIS_Metabox',
			'ris_generate_add_image_meta_box_function'
		), 'ris_gallery', 'normal', 'low' );
		add_meta_box( __( 'All Slider Settings', WL_URIS_DOMAIN ), __( 'All Slider Settings', WL_URIS_DOMAIN ), array(
			'WL_URIS_Metabox',
			'ris_settings_meta_box_function'
		), 'ris_gallery', 'normal', 'low' );
		add_meta_box( __( 'Copy Image Slider Shortcode', WL_URIS_DOMAIN ), __( 'Copy Image Slider Shortcode', WL_URIS_DOMAIN ), array(
			'WL_URIS_Metabox',
			'ris_shotcode_meta_box_function'
		), 'ris_gallery', 'side', 'low' );
		add_meta_box( __( 'Ultrespimgslider', WL_URIS_DOMAIN ), __( 'Ultimate Responsive Image Slider Pro', WL_URIS_DOMAIN ), array(
			'WL_URIS_Metabox',
			'upgrade_to_pro_function'
		), 'ris_gallery', 'side', 'low' );
	}

	public static function add_image_meta_box_save( $PostID ) {
		if ( isset( $PostID ) && isset( $_POST['risp_wl_action'] ) ) {
			$TotalImages = count( $_POST['rpgp_image_url'] );
			$ImagesArray = array();
			if ( $TotalImages ) {
				for ( $i = 0; $i < $TotalImages; $i ++ ) {
					$image_label   = stripslashes( sanitize_text_field( $_POST['rpgp_image_label'][ $i ] ) );
					$image_desc    = stripslashes( $_POST['rpgp_image_desc'][ $i ] );
					$url           = sanitize_text_field( $_POST['rpgp_image_url'][ $i ] );
					$url1          = sanitize_text_field( $_POST['rpggallery_admin_thumb'][ $i ] );
					$url3          = sanitize_text_field( $_POST['rpggallery_admin_large'][ $i ] );
					$ImagesArray[] = array(
						'rpgp_image_label'       => $image_label,
						'rpgp_image_desc'        => $image_desc,
						'rpgp_image_url'         => $url,
						'rpggallery_admin_thumb' => $url1,
						'rpggallery_admin_large' => $url3,
					);
				}
				update_post_meta( $PostID, 'ris_all_photos_details', base64_encode( serialize( $ImagesArray ) ) );
				update_post_meta( $PostID, 'ris_total_images_count', $TotalImages );
			} else {
				$TotalImages = 0;
				update_post_meta( $PostID, 'ris_total_images_count', $TotalImages );
				$ImagesArray = array();
				update_post_meta( $PostID, 'ris_all_photos_details', base64_encode( serialize( $ImagesArray ) ) );
			}
		}
	}

	//save settings meta box values
	public static function ris_settings_meta_save( $PostID ) {
		if ( isset( $PostID ) && isset( $_POST['wl_action'] ) == "wl-save-settings" ) {
			$WLURIS_L3_Slide_Title              = sanitize_option( 'title', isset( $_POST['wl-l3-slide-title'] ) ? $_POST['wl-l3-slide-title'] : '' );
			$WLURIS_L3_Set_slide_Title          = sanitize_option( 'set_slide_title', $_POST['wl-l3-set-slide-title'] );
			$WLURIS_L3_Auto_Slideshow           = sanitize_option( 'autoplay', $_POST['wl-l3-auto-slide'] );
			$WLURIS_L3_Transition               = sanitize_option( 'transition', $_POST['wl-l3-transition'] );
			$WLURIS_L3_Transition_Speed         = sanitize_text_field( $_POST['wl-l3-transition-speed'] );
			$WLURIS_L3_Sliding_Arrow            = sanitize_option( 'arrow', isset( $_POST['wl-l3-sliding-arrow'] ) ? $_POST['wl-l3-sliding-arrow'] : '' );
			$WLURIS_L3_Slider_Navigation        = sanitize_option( 'navigation', isset( $_POST['wl-l3-navigation'] ) ? $_POST['wl-l3-navigation'] : '' );
			$WLURIS_L3_Navigation_Button        = sanitize_option( 'navigation_button', isset( $_POST['wl-l3-navigation-button'] ) ? $_POST['wl-l3-navigation-button'] : '' );
			$WLURIS_L3_Slider_Width             = sanitize_option( 'slider_width', $_POST['wl-l3-slider-width'] );
			$WLURIS_L3_Slider_Height            = sanitize_option( 'slider_height', $_POST['wl-l3-slider-height'] );
			$WLURIS_L3_Font_Style               = sanitize_option( 'font_style', $_POST['wl-l3-font-style'] );
			$WLURIS_L3_Title_Color              = sanitize_option( 'title_color', $_POST['wl-l3-title-color'] );
			$WLURIS_L3_Slider_Scale_Mode        = sanitize_option( 'slider_scale_mode', $_POST['wl-l3-slider_scale_mode'] );
			$WLURIS_L3_Slider_Auto_Scale        = sanitize_option( 'slider_auto_scale', isset( $_POST['wl-l3-slider-auto-scale'] ) ? $_POST['wl-l3-slider-auto-scale'] : '' );
			$WLURIS_L3_Title_BgColor            = sanitize_option( 'title_bgcolor', $_POST['wl-l3-title-bgcolor'] );
			$WLURIS_L3_Desc_Color               = sanitize_option( 'desc_color', $_POST['wl-l3-desc-color'] );
			$WLURIS_L3_Desc_BgColor             = sanitize_option( 'desc_bgcolor', $_POST['wl-l3-desc-bgcolor'] );
			$WLURIS_L3_Navigation_Color         = sanitize_option( 'navigation_color', $_POST['wl-l3-navigation-color'] );
			$WLURIS_L3_Fullscreeen              = sanitize_option( 'fullscreen', isset( $_POST['wl-l3-fullscreen'] ) ? $_POST['wl-l3-fullscreen'] : '' );
			$WLURIS_L3_Custom_CSS               = sanitize_text_field( $_POST['wl-l3-custom-css'] );
			$WLURIS_L3_Slide_Order              = sanitize_option( 'slide_order', $_POST['wl-l3-slide-order'] );
			$WLURIS_L3_Navigation_Position      = sanitize_option( 'navigation_position', $_POST['wl-l3-navigation-position'] );
			$WLURIS_L3_Slide_Distance           = sanitize_option( 'slide_distance', $_POST['wl-l3-slide-distance'] );
			$WLURIS_L3_Thumbnail_Style          = sanitize_option( 'thumbnail_style', $_POST['wl-l3-thumbnail-style'] );
			$WLURIS_L3_Thumbnail_Width          = sanitize_text_field( $_POST['wl-l3-navigation-width'] );
			$WLURIS_L3_Thumbnail_Height         = sanitize_text_field( $_POST['wl-l3-navigation-height'] );
			$WLURIS_L3_Width                    = sanitize_text_field( $_POST['wl-l3-width'] );
			$WLURIS_L3_Height                   = sanitize_text_field( $_POST['wl-l3-height'] );
			$WLURIS_L3_Navigation_Bullets_Color = sanitize_option( 'navigation_bullet_color', $_POST['wl-l3-navigation-bullets-color'] );
			$WLURIS_L3_Navigation_Pointer_Color = sanitize_option( 'navigation_pointer_color', $_POST['wl-l3-navigation-pointer-color'] );

			$WLURIS_Settings_Array = serialize( array(
				'WLURIS_L3_Slide_Title'              => $WLURIS_L3_Slide_Title,
				'WLURIS_L3_Set_slide_Title'          => $WLURIS_L3_Set_slide_Title,
				'WLURIS_L3_Auto_Slideshow'           => $WLURIS_L3_Auto_Slideshow,
				'WLURIS_L3_Transition'               => $WLURIS_L3_Transition,
				'WLURIS_L3_Transition_Speed'         => $WLURIS_L3_Transition_Speed,
				'WLURIS_L3_Sliding_Arrow'            => $WLURIS_L3_Sliding_Arrow,
				'WLURIS_L3_Slider_Navigation'        => $WLURIS_L3_Slider_Navigation,
				'WLURIS_L3_Navigation_Button'        => $WLURIS_L3_Navigation_Button,
				'WLURIS_L3_Slider_Width'             => $WLURIS_L3_Slider_Width,
				'WLURIS_L3_Slider_Height'            => $WLURIS_L3_Slider_Height,
				'WLURIS_L3_Font_Style'               => $WLURIS_L3_Font_Style,
				'WLURIS_L3_Title_Color'              => $WLURIS_L3_Title_Color,
				'WLURIS_L3_Slider_Scale_Mode'        => $WLURIS_L3_Slider_Scale_Mode,
				'WLURIS_L3_Slider_Auto_Scale'        => $WLURIS_L3_Slider_Auto_Scale,
				'WLURIS_L3_Title_BgColor'            => $WLURIS_L3_Title_BgColor,
				'WLURIS_L3_Desc_Color'               => $WLURIS_L3_Desc_Color,
				'WLURIS_L3_Desc_BgColor'             => $WLURIS_L3_Desc_BgColor,
				'WLURIS_L3_Navigation_Color'         => $WLURIS_L3_Navigation_Color,
				'WLURIS_L3_Fullscreeen'              => $WLURIS_L3_Fullscreeen,
				'WLURIS_L3_Custom_CSS'               => $WLURIS_L3_Custom_CSS,
				'WLURIS_L3_Slide_Order'              => $WLURIS_L3_Slide_Order,
				'WLURIS_L3_Navigation_Position'      => $WLURIS_L3_Navigation_Position,
				'WLURIS_L3_Slide_Distance'           => $WLURIS_L3_Slide_Distance,
				'WLURIS_L3_Thumbnail_Style'          => $WLURIS_L3_Thumbnail_Style,
				'WLURIS_L3_Thumbnail_Width'          => $WLURIS_L3_Thumbnail_Width,
				'WLURIS_L3_Thumbnail_Height'         => $WLURIS_L3_Thumbnail_Height,
				'WLURIS_L3_Width'                    => $WLURIS_L3_Width,
				'WLURIS_L3_Height'                   => $WLURIS_L3_Height,
				'WLURIS_L3_Navigation_Bullets_Color' => $WLURIS_L3_Navigation_Bullets_Color,
				'WLURIS_L3_Navigation_Pointer_Color' => $WLURIS_L3_Navigation_Pointer_Color,
			) );

			$WLURIS_Gallery_Settings = "WRIS_Gallery_Settings_" . $PostID;
			update_post_meta( $PostID, $WLURIS_Gallery_Settings, $WLURIS_Settings_Array );
		}
	}

	public static function ajax_get_thumbnail_uris() {
		echo self::admin_thumb_uris( $_POST['imageid'] );
		die;
	}

	/**
	 * This function display Add New Image interface
	 * Also loads all saved gallery photos into photo gallery
	 */
	public static function ris_generate_add_image_meta_box_function( $post ) { ?>
        <div id="rpggallery_container">
            <input type="hidden" id="risp_wl_action" name="risp_wl_action" value="wl-save-settings">
            <ul id="rpg_gallery_thumbs" class="clearfix">
				<?php
				/* load saved photos into ris */
				$WLURIS_AllPhotosDetails = unserialize( base64_decode( get_post_meta( $post->ID, 'ris_all_photos_details', true ) ) );
				$i                       = 0;
				$TotalImages             = get_post_meta( $post->ID, 'ris_total_images_count', true );
				if ( $TotalImages ) {
					if ( is_array( $WLURIS_AllPhotosDetails ) ) {
						foreach ( $WLURIS_AllPhotosDetails as $WLURIS_SinglePhotoDetails ) {
							$name         = $WLURIS_SinglePhotoDetails['rpgp_image_label'];
							$desc         = $WLURIS_SinglePhotoDetails['rpgp_image_desc'];
							$UniqueString = substr( str_shuffle( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ), 0, 5 );
							$url          = $WLURIS_SinglePhotoDetails['rpgp_image_url'];
							$url1         = $WLURIS_SinglePhotoDetails['rpggallery_admin_thumb'];
							$url3         = $WLURIS_SinglePhotoDetails['rpggallery_admin_large']; ?>
                            <li class="rpg-image-entry" id="rpg_img">
                                <a class="gallery_remove rpggallery_remove" href="#gallery_remove"
                                   id="rpg_remove_bt"><img
                                            src="<?php echo WL_URIS_PLUGIN_URL . 'assets/img/Close-icon.jpg'; ?>"/></a>
                                <div class="rpp-admin-inner-div1">
                                    <img src="<?php echo esc_url( $url1 ); ?>" class="rpg-meta-image" alt="" style="">
                                    <input type="hidden" id="unique_string[]" name="unique_string[]"
                                           value="<?php echo esc_attr( $UniqueString ); ?>"/>
                                </div>
                                <div class="rpp-admin-inner-div2">
                                    <input type="text" id="rpgp_image_url[]" name="rpgp_image_url[]"
                                           class="rpg_label_text" value="<?php echo esc_url( $url ); ?>"
                                           readonly="readonly" style="display:none;"/>
                                    <input type="text" id="rpggallery_admin_thumb[]" name="rpggallery_admin_thumb[]"
                                           class="rpg_label_text" value="<?php echo esc_url( $url1 ); ?>"
                                           readonly="readonly" style="display:none;"/>
                                    <input type="text" id="rpggallery_admin_large[]" name="rpggallery_admin_large[]"
                                           class="rpg_label_text" value="<?php echo esc_url( $url3 ); ?>"
                                           readonly="readonly" style="display:none;"/>
                                    <p>
                                        <label class="label_imgdash"><?php _e( 'Slide Title', WL_URIS_DOMAIN ); ?></label>
                                        <input type="text" id="rpgp_image_label[]" name="rpgp_image_label[]"
                                               value="<?php echo esc_attr( $name ); ?>"
                                               placeholder="<?php _e( 'Enter Slide Title', WL_URIS_DOMAIN ); ?>"
                                               class="rpg_label_text">
                                    </p>
                                    <p>
                                        <label class="label_imgdash"><?php _e( 'Slide Descriptions', WL_URIS_DOMAIN ); ?></label>
                                        <textarea rows="4" cols="50" id="rpgp_image_desc[]" name="rpgp_image_desc[]"
                                                  placeholder="<?php _e( 'Enter Slide Description', WL_URIS_DOMAIN ); ?>"
                                                  class=" urisp_richeditbox_<?php echo $i; ?> rpg_label_text"><?php echo htmlentities( $desc ); ?></textarea>
                                        <button type="button" class="btn btn-md btn-editor btn-block"
                                                data-toggle="modal"
                                                data-target="#myModal"
                                                onclick="urisp_richeditor(<?php echo $i; ?>)"><?php _e( 'Advance Editor', WL_URIS_DOMAIN ); ?>
                                            <i class="fa fa-edit"></i></button>
                                    </p>
                                </div>
                            </li>
							<?php
							$i ++;
						} // end of foreach
					}
				} else {
					$TotalImages = 0;
				}
				?>
            </ul>

            <!--rich editor modal-->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><i class="fa fa-edit" style="font-size:23px"></i> <?php _e( 'Advance Editor', WL_URIS_DOMAIN ); ?>
                            </h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>
								<?php
								$urisp_box       = '';
								$urisp_editor_id = 'fetch_wpeditor_data';
								$settings        = array(
									'media_buttons' => false,
									'quicktags'     => array( 'buttons' => 'strong,em,del,link,close' )
								);
								wp_editor( $urisp_box, $urisp_editor_id, $settings );
								?>
                                <input type="hidden" value="" id="fetch_wpelement" name="fetch_wpelement"/>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" onclick="urisp_richeditor_putdata()"
                                    data-dismiss="modal"><?php _e( 'Continue', WL_URIS_DOMAIN ); ?>
                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php _e( 'Exit', WL_URIS_DOMAIN ); ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--rich editor modal-->
        </div>

        <!--Add New Image Button-->
        <div class="rpg-image-entry add_rpg_new_image" id="uris_gallery_upload_button"
             data-uploader_title="Upload Image" data-uploader_button_text="Select">
            <div class="dashicons dashicons-plus"></div>
            <p class="slid_cntrl_btn"><?php _e( 'Add New Images', WL_URIS_DOMAIN ); ?></p>
        </div>
        <div class="rpg-image-entry del_rpg_image" id="uris_delete_all_button">
            <div class="dashicons dashicons-trash"></div>
            <p class="slid_cntrl_btn"><?php _e( 'Delete All Images', WL_URIS_DOMAIN ); ?></p>
        </div>
        <div style="clear:left;"></div>
        <style>
            .review-notice {
                background-color: #27A4DD !important;
                color: #FFFFFF !important;
            }
        </style>
        <script>
            function urisp_richeditor(id) {
                var richeditdata = jQuery(".urisp_richeditbox_" + id).val();
                jQuery("#fetch_wpeditor_data").val(richeditdata);
                jQuery("#fetch_wpeditor_data-html").click();
                jQuery("#fetch_wpelement").val(id);
            }

            function urisp_richeditor_putdata() {
                jQuery("#fetch_wpeditor_data").click();
                jQuery("#fetch_wpeditor_data-html").click();
                var fetch_wpelement_id = jQuery("#fetch_wpelement").val();
                var fetched_data = jQuery("#fetch_wpeditor_data").val();
                jQuery(".urisp_richeditbox_" + fetch_wpelement_id).val(fetched_data);
            }
        </script>
		<?php
	}

	/**
	 * This function display Add New Image interface
	 * Also loads all saved gallery photos into photo gallery
	 */
	public static function ris_settings_meta_box_function( $post ) {
		
		wp_enqueue_script( 'uris-bootstrap-js', WL_URIS_PLUGIN_URL . 'assets/js/bootstrap.min.js' );
		wp_enqueue_style( 'uris-bootstrap-min', WL_URIS_PLUGIN_URL . 'assets/css/bootstrap/bootstrap.min.css' );
		wp_enqueue_style( 'uris-font-awesome-5.0.8', WL_URIS_PLUGIN_URL . 'assets/css/font-awesome/css/fontawesome-all.min.css' );
		wp_enqueue_style( 'uris-editor-modal', WL_URIS_PLUGIN_URL . 'assets/css/editor-modal.css' );
		wp_enqueue_script( 'media-upload' );
		wp_enqueue_script( 'uris-media-uploader-js', WL_URIS_PLUGIN_URL . 'assets/js/uris-multiple-media-uploader.js', array( 'jquery' ) );
		wp_enqueue_media();

		//custom add image box css
		wp_enqueue_style( 'ris-meta-css', WL_URIS_PLUGIN_URL . 'assets/css/ris-meta.css' );
		wp_enqueue_style( 'dashboard-css', WL_URIS_PLUGIN_URL . 'admin/css/dashboard.css' );

		//font awesome css
		wp_enqueue_style( 'ris-font-awesome-5.0.8', WL_URIS_PLUGIN_URL . 'assets/css/font-awesome/css/fontawesome-all.min.css' );

		//tool-tip js & css
		wp_enqueue_script( 'ris-tool-tip-js', WL_URIS_PLUGIN_URL . 'assets/libs/tooltip/jquery.darktooltip.min.js', array( 'jquery' ) );
		wp_enqueue_style( 'ris-tool-tip-css', WL_URIS_PLUGIN_URL . 'assets/libs/tooltip/darktooltip.min.css' );

		//color-picker css n js
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'ris-color-picker-script', WL_URIS_PLUGIN_URL . 'assets/js/wl-color-picker.js', array( 'wp-color-picker' ), false, true );

		// code-mirror css & js for custom css section
		wp_enqueue_style( 'ris_codemirror-css', WL_URIS_PLUGIN_URL . 'assets/libs/codemirror/codemirror.css' );
		wp_enqueue_style( 'ris_blackboard', WL_URIS_PLUGIN_URL . 'assets/libs/codemirror/blackboard.css' );
		wp_enqueue_style( 'ris_show-hint-css', WL_URIS_PLUGIN_URL . 'assets/libs/codemirror/show-hint.css' );

		wp_enqueue_script( 'ris_codemirror-js', WL_URIS_PLUGIN_URL . 'assets/libs/codemirror/codemirror.js', array( 'jquery' ) );
		wp_enqueue_script( 'ris_css-js', WL_URIS_PLUGIN_URL . 'assets/libs/codemirror/ris-css.js', array( 'jquery' ) );
		wp_enqueue_script( 'ris_css-hint-js', WL_URIS_PLUGIN_URL . 'assets/libs/codemirror/css-hint.js', array( 'jquery' ) );

		require_once( WL_URIS_PLUGIN_DIR_PATH . 'admin/inc/metabox_settings.php' );
	}

	public static function ris_shotcode_meta_box_function() { ?>
        <p><?php _e( "Use below shortcode in any Page/Post to publish your slider", WL_URIS_DOMAIN ); ?></p>
        <input readonly="readonly" type="text" value="<?php echo "[URIS id=" . get_the_ID() . "]"; ?>">
		<?php
	}

	public static function admin_thumb_uris( $id ) {
		$image        = wp_get_attachment_image_src( $id, 'rpggallery_admin_original', true );
		$image1       = wp_get_attachment_image_src( $id, 'rpggallery_admin_thumb', true );
		$image3       = wp_get_attachment_image_src( $id, 'rpggallery_admin_large', true );
		$UniqueString = substr( str_shuffle( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ), 0, 5 );
		?>
        <li class="rpg-image-entry" id="rpg_img">
            <a class="gallery_remove rpggallery_remove" href="#gallery_remove" id="rpg_remove_bt"><img
                        src="<?php echo WL_URIS_PLUGIN_URL . 'assets/img/Close-icon.jpg'; ?>"/></a>
            <div class="rpp-admin-inner-div1">
                <img src="<?php echo esc_url( $image1[0] ); ?>" class="rpg-meta-image" alt="" style="">
            </div>
            <div class="rpp-admin-inner-div1">
                <input type="text" id="rpgp_image_url[]" name="rpgp_image_url[]" class="rpg_label_text"
                       value="<?php echo esc_url( $image[0] ); ?>" readonly="readonly" style="display:none;"/>
                <input type="text" id="rpggallery_admin_thumb[]" name="rpggallery_admin_thumb[]" class="rpg_label_text"
                       value="<?php echo esc_url( $image1[0] ); ?>" readonly="readonly" style="display:none;"/>
                <input type="text" id="rpggallery_admin_large[]" name="rpggallery_admin_large[]" class="rpg_label_text"
                       value="<?php echo esc_url( $image3[0] ); ?>" readonly="readonly" style="display:none;"/>
                <p>
                    <label class="label_imgdash"><?php _e( 'Slide Title', WL_URIS_DOMAIN ); ?></label>
                    <input type="text" id="rpgp_image_label[]" name="rpgp_image_label[]"
                           placeholder="<?php _e( 'Enter Slide Title Here', WL_URIS_DOMAIN ); ?>"
                           class="rpg_label_text">
                </p>
                <p>
                    <label class="label_imgdash"><?php _e( 'Slide Description', WL_URIS_DOMAIN ); ?></label>
                    <textarea rows="4" cols="50" id="rpgp_image_desc[]" name="rpgp_image_desc[]"
                              placeholder="<?php _e( 'Enter Slide Description Here', WL_URIS_DOMAIN ); ?>"
                              class="urisp_richeditbox_<?php echo $id; ?> rpg_label_text"></textarea>
                    <button type="button" class="btn btn-md btn-editor btn-block" data-toggle="modal"
                            data-target="#myModal"
                            onclick="urisp_richeditor(<?php echo $id; ?>)"><?php _e( 'Advance Editor', WL_URIS_DOMAIN ); ?>
                        <i class="fa fa-edit"></i></button>
                </p>
            </div>
        </li>
		<?php
	}

	 public static function upgrade_to_pro_function(){
        $imgpath = WL_URIS_PLUGIN_URL."admin/img/wl_unlimited.jpg";
        ?>
        <div class="">          
            <div class="update_pro_button"><a target="_blank" href="https://weblizar.com/plugins/ultimate-responsive-image-slider-pro/">Buy Now $21</a></div> 
                <div class="update_pro_image">
                    <img class="csm_getpro img-responsive" src="<?php echo $imgpath; ?>">
                </div>
            <div class="update_pro_button">
                <a class="upg_anch" target="_blank" href="https://weblizar.com/plugins/ultimate-responsive-image-slider-pro/">Buy Now $21</a>
            </div>
        </div>
        <?php
    }
}
?>