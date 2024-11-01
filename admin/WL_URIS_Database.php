<?php
defined( 'ABSPATH' ) or die();

class WL_URIS_Database {
	/* On plugin activation */
	public static function activation() {
		$default_settings = serialize( array(
			"WLURIS_L3_Slide_Title"              => 1,
			"WLURIS_L3_Set_slide_Title"          => 0,
			"WLURIS_L3_Auto_Slideshow"           => 1,
			"WLURIS_L3_Transition"               => 1,
			"WLURIS_L3_Transition_Speed"         => 5000,
			"WLURIS_L3_Sliding_Arrow"            => 1,
			"WLURIS_L3_Slider_Navigation"        => 1,
			"WLURIS_L3_Navigation_Button"        => 1,
			"WLURIS_L3_Slider_Width"             => "1000",
			"WLURIS_L3_Slider_Height"            => "500",
			"WLURIS_L3_Font_Style"               => "Arial",
			"WLURIS_L3_Title_Color"              => "#FFFFFF",
			"WLURIS_L3_Slider_Scale_Mode"        => "cover",
			"WLURIS_L3_Slider_Auto_Scale"        => 1,
			"WLURIS_L3_Title_BgColor"            => "#000000",
			"WLURIS_L3_Desc_Color"               => "#FFFFFF",
			"WLURIS_L3_Desc_BgColor"             => "#000000",
			"WLURIS_L3_Navigation_Color"         => "#000000",
			"WLURIS_L3_Fullscreeen"              => 1,
			"WLURIS_L3_Custom_CSS"               => "",
			'WLURIS_L3_Slide_Order'              => "ASC",
			'WLURIS_L3_Navigation_Position'      => "bottom",
			'WLURIS_L3_Slide_Distance'           => 5,
			'WLURIS_L3_Thumbnail_Style'          => "border",
			'WLURIS_L3_Thumbnail_Width'          => 120,
			'WLURIS_L3_Thumbnail_Height'         => 120,
			'WLURIS_L3_Width'                    => "custom",
			'WLURIS_L3_Height'                   => "custom",
			'WLURIS_L3_Navigation_Bullets_Color' => "#000000",
			'WLURIS_L3_Navigation_Pointer_Color' => "#000000",
		) );
		add_option( "WLURIS_Settings", $default_settings );
	}
}
?>