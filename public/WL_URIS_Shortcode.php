<?php
defined( 'ABSPATH' ) or die();

class WL_URIS_Shortcode {
	public static function shortcode( $atts ) {
		ob_start();
		// slider js css scripts		 
		
		wp_enqueue_script( 'ris-jquery-sliderPro-js', WL_URIS_PLUGIN_URL . 'assets/js/jquery.sliderPro.js', array( 'jquery' ), '1.4.0', true );
		wp_enqueue_style( 'ris-slider-css', WL_URIS_PLUGIN_URL . 'assets/css/slider-pro.css' );
		wp_enqueue_style( 'uris-font-awesome-5.0.8', WL_URIS_PLUGIN_URL . 'assets/css/font-awesome/css/font-awesome.min-old.css', true );

		/**
		 * Load Saved Responsive Image Slider Settings
		 */
		if ( ! isset( $atts['id'] ) ) {
			$atts['id'] = "";
		} else {
			$WLURIS_Id                   = $atts['id'];
			$WLURIS_Gallery_Settings_Key = "WRIS_Gallery_Settings_" . $WLURIS_Id;
			$WLURIS_Gallery_Settings     = unserialize( get_post_meta( $WLURIS_Id, $WLURIS_Gallery_Settings_Key, true ) );
			if ( $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Width'] && $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Height'] ) {

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Scale_Mode'] ) ) {
					$WLURIS_L3_Slider_Scale_Mode = $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Scale_Mode'];
				} else {
					$WLURIS_L3_Slider_Scale_Mode = "cover";
				}


				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Auto_Scale'] ) ) {
					$WLURIS_L3_Slider_Auto_Scale = $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Auto_Scale'];
				} else {
					$WLURIS_L3_Slider_Auto_Scale = "1";
				}


				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Slide_Title'] ) ) {
					$WLURIS_L3_Slide_Title = $WLURIS_Gallery_Settings['WLURIS_L3_Slide_Title'];
				} else {
					$WLURIS_L3_Slide_Title = "";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Set_slide_Title'] ) ) {
					$WLURIS_L3_Set_slide_Title = $WLURIS_Gallery_Settings['WLURIS_L3_Set_slide_Title'];
				} else {
					$WLURIS_L3_Set_slide_Title = 0;
				}


				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Auto_Slideshow'] ) ) {
					$WLURIS_L3_Auto_Slideshow = $WLURIS_Gallery_Settings['WLURIS_L3_Auto_Slideshow'];
				} else {
					$WLURIS_L3_Auto_Slideshow = 1;
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Transition'] ) ) {
					$WLURIS_L3_Transition = $WLURIS_Gallery_Settings['WLURIS_L3_Transition'];
				} else {
					$WLURIS_L3_Transition = 1;
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Transition_Speed'] ) ) {
					$WLURIS_L3_Transition_Speed = $WLURIS_Gallery_Settings['WLURIS_L3_Transition_Speed'];
				} else {
					$WLURIS_L3_Transition_Speed = 5000;
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Slide_Order'] ) ) {
					$WLURIS_L3_Slide_Order = $WLURIS_Gallery_Settings['WLURIS_L3_Slide_Order'];
				} else {
					$WLURIS_L3_Slide_Order = "ASC";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Slide_Distance'] ) ) {
					$WLURIS_L3_Slide_Distance = $WLURIS_Gallery_Settings['WLURIS_L3_Slide_Distance'];
				} else {
					$WLURIS_L3_Slide_Distance = 5;
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Sliding_Arrow'] ) ) {
					$WLURIS_L3_Sliding_Arrow = $WLURIS_Gallery_Settings['WLURIS_L3_Sliding_Arrow'];
				} else {
					$WLURIS_L3_Sliding_Arrow = "";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Navigation'] ) ) {
					$WLURIS_L3_Slider_Navigation = $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Navigation'];
				} else {
					$WLURIS_L3_Slider_Navigation = "";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Navigation_Position'] ) ) {
					$WLURIS_L3_Navigation_Position = $WLURIS_Gallery_Settings['WLURIS_L3_Navigation_Position'];
				} else {
					$WLURIS_L3_Navigation_Position = "bottom";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Thumbnail_Style'] ) ) {
					$WLURIS_L3_Thumbnail_Style = $WLURIS_Gallery_Settings['WLURIS_L3_Thumbnail_Style'];
				} else {
					$WLURIS_L3_Thumbnail_Style = "border";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Thumbnail_Width'] ) ) {
					$WLURIS_L3_Thumbnail_Width = $WLURIS_Gallery_Settings['WLURIS_L3_Thumbnail_Width'];
				} else {
					$WLURIS_L3_Thumbnail_Width = 120;
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Thumbnail_Height'] ) ) {
					$WLURIS_L3_Thumbnail_Height = $WLURIS_Gallery_Settings['WLURIS_L3_Thumbnail_Height'];
				} else {
					$WLURIS_L3_Thumbnail_Height = 120;
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Navigation_Button'] ) ) {
					$WLURIS_L3_Navigation_Button = $WLURIS_Gallery_Settings['WLURIS_L3_Navigation_Button'];
				} else {
					$WLURIS_L3_Navigation_Button = "";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Width'] ) ) {
					$WLURIS_L3_Width = $WLURIS_Gallery_Settings['WLURIS_L3_Width'];
				} else {
					$WLURIS_L3_Width = "custom";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Width'] ) ) {
					$WLURIS_L3_Slider_Width = $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Width'];
				} else {
					$WLURIS_L3_Slider_Width = 1000;
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Height'] ) ) {
					$WLURIS_L3_Height = $WLURIS_Gallery_Settings['WLURIS_L3_Height'];
				} else {
					$WLURIS_L3_Height = "custom";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Height'] ) ) {
					$WLURIS_L3_Slider_Height = $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Height'];
				} else {
					$WLURIS_L3_Slider_Height = 500;
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Font_Style'] ) ) {
					$WLURIS_L3_Font_Style = $WLURIS_Gallery_Settings['WLURIS_L3_Font_Style'];
				} else {
					$WLURIS_L3_Font_Style = "Arial";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Title_Color'] ) ) {
					$WLURIS_L3_Title_Color = $WLURIS_Gallery_Settings['WLURIS_L3_Title_Color'];
				} else {
					$WLURIS_L3_Title_Color = "#00000";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Title_BgColor'] ) ) {
					$WLURIS_L3_Title_BgColor = $WLURIS_Gallery_Settings['WLURIS_L3_Title_BgColor'];
				} else {
					$WLURIS_L3_Title_BgColor = "#FFFFFF";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Desc_Color'] ) ) {
					$WLURIS_L3_Desc_Color = $WLURIS_Gallery_Settings['WLURIS_L3_Desc_Color'];
				} else {
					$WLURIS_L3_Desc_Color = "#FFFFFF";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Desc_BgColor'] ) ) {
					$WLURIS_L3_Desc_BgColor = $WLURIS_Gallery_Settings['WLURIS_L3_Desc_BgColor'];
				} else {
					$WLURIS_L3_Desc_BgColor = "#00000";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Navigation_Color'] ) ) {
					$WLURIS_L3_Navigation_Color = $WLURIS_Gallery_Settings['WLURIS_L3_Navigation_Color'];
				} else {
					$WLURIS_L3_Navigation_Color = "#FFFFFF";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Fullscreeen'] ) ) {
					$WLURIS_L3_Fullscreeen = $WLURIS_Gallery_Settings['WLURIS_L3_Fullscreeen'];
				} else {
					$WLURIS_L3_Fullscreeen = "";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Navigation_Bullets_Color'] ) ) {
					$WLURIS_L3_Navigation_Bullets_Color = $WLURIS_Gallery_Settings['WLURIS_L3_Navigation_Bullets_Color'];
				} else {
					$WLURIS_L3_Navigation_Bullets_Color = "#000000";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Navigation_Pointer_Color'] ) ) {
					$WLURIS_L3_Navigation_Pointer_Color = $WLURIS_Gallery_Settings['WLURIS_L3_Navigation_Pointer_Color'];
				} else {
					$WLURIS_L3_Navigation_Pointer_Color = "#000000";
				}

				if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Custom_CSS'] ) ) {
					$WLURIS_L3_Custom_CSS = $WLURIS_Gallery_Settings['WLURIS_L3_Custom_CSS'];
				} else {
					$WLURIS_L3_Custom_CSS = "";
				}
			}
		}

		/**
		 * Load Slider Layout Output
		 */
		require( WL_URIS_PLUGIN_DIR_PATH . 'public/inc/wl_uris_layout.php' );
		wp_reset_query();

		return ob_get_clean();
	}
}
?>