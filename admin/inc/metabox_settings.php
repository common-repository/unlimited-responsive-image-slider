<?php
defined( 'ABSPATH' ) or die();

/**
 * Load Saved Unlimited Responsive Image Sliders Settings
 */
$PostId                      = $post->ID;
$WLURIS_Gallery_Settings_Key = "WRIS_Gallery_Settings_" . $PostId;
$WLURIS_Gallery_Settings     = unserialize( get_post_meta( $PostId, $WLURIS_Gallery_Settings_Key, true ) );


if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Scale_Mode'] ) ) {
	$WLURIS_L3_Slider_Scale_Mode = $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Scale_Mode'];
} else {
	$WLURIS_L3_Slider_Scale_Mode = "cover";
}

if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Auto_Scale'] ) ) {
	$WLURIS_L3_Slider_Auto_Scale = $WLURIS_Gallery_Settings['WLURIS_L3_Slider_Auto_Scale'];
} else {
	$WLURIS_L3_Slider_Auto_Scale = "";
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

if ( isset( $WLURIS_Gallery_Settings['WLURIS_L3_Custom_CSS'] ) ) {
	$WLURIS_L3_Custom_CSS = $WLURIS_Gallery_Settings['WLURIS_L3_Custom_CSS'];
} else {
	$WLURIS_L3_Custom_CSS = "";
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

?>
<script type="text/javascript">
    jQuery(document).ready(function () {
        var editor = CodeMirror.fromTextArea(document.getElementById("wl-l3-custom-css"), {
            lineWrapping: true,
            lineNumbers: true,
            styleActiveLine: true,
            matchBrackets: true,
            hint: true,
            theme: 'blackboard',
            extraKeys: {"Ctrl-Space": "autocomplete"},
        });
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() < 200) {
                jQuery('#smoothup').fadeOut();
            } else {
                jQuery('#smoothup').fadeIn();
            }
        });
        jQuery('#smoothup').on('click', function () {
            jQuery('html, body').animate({scrollTop: 0}, 'fast');
            return false;
        });
    });
</script>

<style>
    .custnote {
        background-color: rgba(23, 31, 22, 0.64);
        color: #fff;
        width: 348px;
        border-radius: 5px;
        padding-right: 5px;
        padding-left: 5px;
        padding-top: 2px;
        padding-bottom: 2px;
    }

    .thumb-pro th, .thumb-pro label, .thumb-pro h3, .thumb-pro {
        color: #31a3dd !important;
        font-weight: bold;
    }

    .caro-pro th, .caro-pro label, .caro-pro h3, .caro-pro {
        color: #DA5766 !important;
        font-weight: bold;
    }

    #smoothup {
        height: 50px;
        width: 50px;
        position: fixed;
        bottom: 50px;
        right: 250px;
        text-indent: -9999px;
        display: none;
        background: url("<?php echo WL_URIS_PLUGIN_URL.'assets/img/up.png'; ?>");
        -webkit-transition-duration: 0.4s;
        -moz-transition-duration: 0.4s;
        transition-duration: 0.4s;
    }

    #smoothup:hover {
        -webkit-transform: rotate(360deg)
    }

    background:
    url

    (
    ''
    )
    no-repeat

    ;
    }
</style>
<?php require_once( WL_URIS_PLUGIN_DIR_PATH . 'admin/inc/tooltip.php' ); ?>
<input type="hidden" id="wl_action" name="wl_action" value="wl-save-settings">
<div class="unlimited_maindiv">
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1"><?php _e( 'Title Setting', WL_URIS_DOMAIN ); ?></label>
    <input id="tab2" type="radio" name="tabs">
    <label for="tab2"><?php _e( 'Slide Setting', WL_URIS_DOMAIN ); ?></label>
    <input id="tab3" type="radio" name="tabs">
    <label for="tab3"><?php _e( 'Thumbnail Setting', WL_URIS_DOMAIN ); ?></label>
    <input id="tab4" type="radio" name="tabs">
    <label for="tab4"><?php _e( 'Naviagation Setting', WL_URIS_DOMAIN ); ?></label>
    <input id="tab5" type="radio" name="tabs">
    <label for="tab5"><?php _e( 'Fonts & CSS Setting', WL_URIS_DOMAIN ); ?></label>

    <section id="content1">

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Set Slide Title As', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Set_slide_Title ) ) {
					$WLURIS_L3_Set_slide_Title = 0;
				} ?>
                <label class="radio_cont"><?php _e( 'Custom Title', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-set-slide-title" id="wl-l3-set-slide-title"
                           value="0" <?php if ( $WLURIS_L3_Set_slide_Title == 0 ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>
                <label class="radio_cont"><?php _e( 'File Title (Slide Title as a image file name)', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-set-slide-title" id="wl-l3-set-slide-title"
                           value="1" <?php if ( $WLURIS_L3_Set_slide_Title == 1 ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>
                <p class="description">
					<?php _e( 'Select Custom/File option to set slide title as above slider', WL_URIS_DOMAIN ); ?>.
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Display Slider Title', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Slide_Title ) ) {
					$WLURIS_L3_Slide_Title = 1;
				} ?>
                <label class="switch">
                    <input type="checkbox" name="wl-l3-slide-title" id="wl-l3-slide-title"
                           value="1" <?php if ( $WLURIS_L3_Slide_Title == 1 ) {
						echo 'checked';
					} ?>>
                    <span class="slider round"></span>
                </label>
                <p class="description">
					<?php _e( 'Select Yes/No option to show/hide slide title above slider', WL_URIS_DOMAIN ); ?>.
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Slide Title Color', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Title_Color ) ) {
					$WLURIS_L3_Title_Color = "#000000";
				} ?>
                <input id="wl-l3-title-color" name="wl-l3-title-color" type="text"
                       value="<?php echo $WLURIS_L3_Title_Color; ?>" class="my-color-field"
                       data-default-color="#000000"/>
                <p class="description">
					<?php _e( 'Select a color to set slide title color', WL_URIS_DOMAIN ); ?>.
                    <a href="#" id="p7" data-tooltip="#s7"><?php _e( 'Preview', WL_URIS_DOMAIN ); ?></a>
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Slide Title Background Color', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Title_BgColor ) ) {
					$WLURIS_L3_Title_BgColor = "#FFFFFF";
				} ?>
                <input id="wl-l3-title-bgcolor" name="wl-l3-title-bgcolor" type="text"
                       value="<?php echo $WLURIS_L3_Title_BgColor; ?>" class="my-color-field"
                       data-default-color="#ffffff"/>
                <p class="description">
					<?php _e( 'Select a color to set slide title background color', WL_URIS_DOMAIN ); ?>.
                    <a href="#" id="p8" data-tooltip="#s8"><?php _e( 'Preview', WL_URIS_DOMAIN ); ?></a>
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Slide Description Color', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Desc_Color ) ) {
					$WLURIS_L3_Desc_Color = "#FFFFFF";
				} ?>
                <input id="wl-l3-desc-color" name="wl-l3-desc-color" type="text"
                       value="<?php echo $WLURIS_L3_Desc_Color; ?>"
                       class="my-color-field" data-default-color="#ffffff"/>
                <p class="description">
					<?php _e( 'Select a color to set slide description color', WL_URIS_DOMAIN ); ?>.
                    <a href="#" id="p9" data-tooltip="#s9"><?php _e( 'Preview', WL_URIS_DOMAIN ); ?></a>
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Slide Description Background Color', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Desc_BgColor ) ) {
					$WLURIS_L3_Desc_BgColor = "#000000";
				} ?>
                <input id="wl-l3-desc-bgcolor" name="wl-l3-desc-bgcolor" type="text"
                       value="<?php echo $WLURIS_L3_Desc_BgColor; ?>" class="my-color-field"
                       data-default-color="#000000"/>
                <p class="description">
					<?php _e( 'Select a color to set slide description background color', WL_URIS_DOMAIN ); ?>.
                    <a href="#" id="p10" data-tooltip="#s10"><?php _e( 'Preview', WL_URIS_DOMAIN ); ?></a>
                </p>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>

    <section id="content2">
        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Auto Play Slide Show', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Auto_Slideshow ) ) {
					$WLURIS_L3_Auto_Slideshow = 1;
				} ?>
                <label class="radio_cont"><?php _e( 'Yes', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-auto-slide" id="wl-l3-auto-slide"
                           value="1" <?php if ( $WLURIS_L3_Auto_Slideshow == 1 ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>
                <label class="radio_cont"><?php _e( 'Yes with Stop on Mouse Hover', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-auto-slide" id="wl-l3-auto-slide"
                           value="2" <?php if ( $WLURIS_L3_Auto_Slideshow == 2 ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>
                <label class="radio_cont"><?php _e( 'No', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-auto-slide" id="wl-l3-auto-slide"
                           value="3" <?php if ( $WLURIS_L3_Auto_Slideshow == 3 ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>
                <p class="description">
					<?php _e( 'Select Yes/No option to auto slide enable or disable into slider', WL_URIS_DOMAIN ); ?>.
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Slide Transition', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Transition ) ) {
					$WLURIS_L3_Transition = 1;
				} ?>
                <label class="radio_cont"><?php _e( 'Fade', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-transition" id="wl-l3-transition"
                           value="1" <?php if ( $WLURIS_L3_Transition == 1 ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>

                <label class="radio_cont"><?php _e( 'Slide', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-transition" id="wl-l3-transition"
                           value="0" <?php if ( $WLURIS_L3_Transition == 0 ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>
                <p class="description">
					<?php _e( 'Select a transition effect you want to apply on slides', WL_URIS_DOMAIN ); ?>.
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Autoplay Slider Speed', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Transition_Speed ) ) {
					$WLURIS_L3_Transition_Speed = 5000;
				} ?>
                <input class="uris-slider" name="wl-l3-transition-speed" id="wl-l3-transition-speed" type="range"
                       min="1000"
                       max="60000" step="1000" value="<?php echo $WLURIS_L3_Transition_Speed; ?>" data-rangeSlider>
                <span id="uris-range-val"></span>
                <script>
                    var slider = document.getElementById("wl-l3-transition-speed");
                    var output = document.getElementById("uris-range-val");

                    var x = slider.value;
                    var y = x / 1000;
                    output.innerHTML = y;

                    slider.oninput = function () {
                        var x = slider.value;
                        var y = x / 1000;
                        output.innerHTML = y;
                    }
                </script>
                <p class="description">
					<?php _e( 'Set your desired slider speed of slides. Default speed is 5 Second', WL_URIS_DOMAIN ); ?>
                    .
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Slide Order', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Slide_Order ) ) {
					$WLURIS_L3_Slide_Order = "ASC";
				} ?>

                <label class="radio_cont"><?php _e( 'Ascending', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-slide-order" id="wl-l3-slide-order"
                           value="ASC" <?php if ( $WLURIS_L3_Slide_Order == "ASC" ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>

                <label class="radio_cont"><?php _e( 'Descending', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-slide-order" id="wl-l3-slide-order"
                           value="DESC" <?php if ( $WLURIS_L3_Slide_Order == "DESC" ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>

                <label class="radio_cont"><?php _e( 'Random', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-slide-order" id="wl-l3-slide-order"
                           value="shuffle" <?php if ( $WLURIS_L3_Slide_Order == "shuffle" ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>
                <p class="description">
					<?php _e( 'Select a slide order you want to apply on slides', WL_URIS_DOMAIN ); ?>.
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Slide Distance', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Slide_Distance ) ) {
					$WLURIS_L3_Slide_Distance = 5;
				} ?>
                <select name="wl-l3-slide-distance" id="wl-l3-slide-distance">
                    <option value="0" <?php if ( $WLURIS_L3_Slide_Distance == 0 ) {
						echo "selected=selected";
					} ?>>0
                    </option>
                    <option value="5" <?php if ( $WLURIS_L3_Slide_Distance == 5 ) {
						echo "selected=selected";
					} ?>>5
                    </option>
                    <option value="10" <?php if ( $WLURIS_L3_Slide_Distance == 10 ) {
						echo "selected=selected";
					} ?>>10
                    </option>
                    <option value="15" <?php if ( $WLURIS_L3_Slide_Distance == 15 ) {
						echo "selected=selected";
					} ?>>15
                    </option>
                    <option value="20" <?php if ( $WLURIS_L3_Slide_Distance == 20 ) {
						echo "selected=selected";
					} ?>>20
                    </option>
                    <option value="25" <?php if ( $WLURIS_L3_Slide_Distance == 25 ) {
						echo "selected=selected";
					} ?>>25
                    </option>
                </select>
                <p class="description">
					<?php _e( 'Set a gap between all slides. Range 0 to 25', WL_URIS_DOMAIN ); ?>&nbsp;
                    <a href="#" id="p6" data-tooltip="#s6"><?php _e( 'Preview', WL_URIS_DOMAIN ); ?></a>
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Sliding Arrow', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Sliding_Arrow ) ) {
					$WLURIS_L3_Sliding_Arrow = 1;
				} ?>
                <label class="switch">
                    <input type="checkbox" name="wl-l3-sliding-arrow" id="wl-l3-sliding-arrow"
                           value="1" <?php if ( $WLURIS_L3_Sliding_Arrow == 1 ) {
						echo 'checked';
					} ?>>
                    <span class="slider round"></span>
                </label>
                <p class="description">
					<?php _e( 'Select Yes/No option to show or hide arrows on mouse hover on slide', WL_URIS_DOMAIN ); ?>
                    .
                    <a href="#" id="p1" data-tooltip="#s1"><?php _e( 'Preview', WL_URIS_DOMAIN ); ?></a>
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Slider Width', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Slider_Width ) ) {
					$WLURIS_L3_Slider_Width = 1000;
				} ?>
				<?php if ( ! isset( $WLURIS_L3_Width ) ) {
					$WLURIS_L3_Width = "custom";
				} ?>
                <label class="radio_cont"><?php _e( '100% Width', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-width" id="wl-l3-width"
                           value="100%" <?php if ( $WLURIS_L3_Width == "100%" ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>
                <label class="radio_cont"> <?php _e( 'Full Width', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-width" id="wl-l3-width"
                           value="fullWidth" <?php if ( $WLURIS_L3_Width == "fullWidth" ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>
                <label class="radio_cont"> <?php _e( 'Custom', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-width" id="wl-l3-width"
                           value="custom" <?php if ( $WLURIS_L3_Width == "custom" ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>
                <input type="text" name="wl-l3-slider-width" id="wl-l3-slider-width"
                       value="<?php echo $WLURIS_L3_Slider_Width; ?>">

                <p class="description">
					<?php _e( 'Enter your desired width for slider. Default width is 1000px', WL_URIS_DOMAIN ); ?>.
                    <a href="#" id="p4" data-tooltip="#s4"><?php _e( 'Preview', WL_URIS_DOMAIN ); ?></a>
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Slider Height', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Slider_Height ) ) {
					$WLURIS_L3_Slider_Height = 500;
				} ?>
				<?php if ( ! isset( $WLURIS_L3_Height ) ) {
					$WLURIS_L3_Height = "custom";
				} ?>
                <label class="radio_cont"><?php _e( 'Auto Height', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-height" id="wl-l3-height"
                           value="auto" <?php if ( $WLURIS_L3_Height == "auto" ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>

                <label class="radio_cont"><?php _e( 'Custom', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-height" id="wl-l3-height"
                           value="custom" <?php if ( $WLURIS_L3_Height == "custom" ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>
                <input type="text" name="wl-l3-slider-height" id="wl-l3-slider-height"
                       value="<?php echo $WLURIS_L3_Slider_Height; ?>">

                <p class="description">
					<?php _e( 'Enter your desired height for slider. Default height is 500px', WL_URIS_DOMAIN ); ?>.
                    <a href="#" id="p5" data-tooltip="#s5"><?php _e( 'Preview', WL_URIS_DOMAIN ); ?></a>
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Slide Scale Mode', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Slider_Scale_Mode ) ) {
					$WLURIS_L3_Slider_Scale_Mode = "cover";
				} ?>
                <select name="wl-l3-slider_scale_mode" id="wl-l3-slider_scale_mode" class="standard-dropdown">
                    <optgroup label="Select Slider Scale Mode">
                        <option value="none" <?php if ( $WLURIS_L3_Slider_Scale_Mode == "none" ) {
							echo "selected=selected";
						} ?>><?php _e( 'None', WL_URIS_DOMAIN ); ?></option>
                        <option value="exact" <?php if ( $WLURIS_L3_Slider_Scale_Mode == "exact" ) {
							echo "selected=selected";
						} ?>><?php _e( 'Exact', WL_URIS_DOMAIN ); ?></option>
                        <option value="contain" <?php if ( $WLURIS_L3_Slider_Scale_Mode == "contain" ) {
							echo "selected=selected";
						} ?>><?php _e( 'Contain', WL_URIS_DOMAIN ); ?></option>
                        <option value="cover" <?php if ( $WLURIS_L3_Slider_Scale_Mode == "cover" ) {
							echo "selected=selected";
						} ?>><?php _e( 'Cover', WL_URIS_DOMAIN ); ?></option>
                    </optgroup>
                </select>
                <p class="description">
					<?php _e( 'Select a slide scale mode for slide frame', WL_URIS_DOMAIN ); ?>.
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Slide Auto Scale', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Slider_Auto_Scale ) ) {
					$WLURIS_L3_Slider_Auto_Scale = 1;
				} ?>
                <label class="switch">
                    <input type="checkbox" name="wl-l3-slider-auto-scale" id="wl-l3-slider-auto-scale"
                           value="1" <?php if ( $WLURIS_L3_Slider_Auto_Scale == 1 ) {
						echo 'checked';
					} ?>>
                    <span class="slider round"></span>
                </label>
                <p class="description">
					<?php _e( 'Select Yes/No option for slide auto scale', WL_URIS_DOMAIN ); ?>.
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Full Screen Slide Show', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Fullscreeen ) ) {
					$WLURIS_L3_Fullscreeen = 1;
				} ?>
                <label class="switch">
                    <input type="checkbox" name="wl-l3-fullscreen" id="wl-l3-fullscreen"
                           value="1" <?php if ( $WLURIS_L3_Fullscreeen == 1 ) {
						echo 'checked';
					} ?>>
                    <span class="slider round"></span>
                </label>
                <p class="description">
					<?php _e( 'Select Yes/No option for full screen slide show', WL_URIS_DOMAIN ); ?>.
                </p>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>

    <section id="content3">
        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Show Thumbnail', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Slider_Navigation ) ) {
					$WLURIS_L3_Slider_Navigation = 1;
				} ?>
                <label class="switch">
                    <input type="checkbox" name="wl-l3-navigation" id="wl-l3-navigation"
                           value="1" <?php if ( $WLURIS_L3_Slider_Navigation == 1 ) {
						echo 'checked';
					} ?>>
                    <span class="slider round"></span>
                </label>
                <p class="description">
					<?php _e( 'Select Yes/No option to show or hide thumbnail based navigation under slides', WL_URIS_DOMAIN ); ?>
                    .
                    <a href="#" id="p2" data-tooltip="#s2"><?php _e( 'Preview', WL_URIS_DOMAIN ); ?></a>
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Thumbnail Position', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Navigation_Position ) ) {
					$WLURIS_L3_Navigation_Position = "bottom";
				} ?>
                <label class="radio_cont"><?php _e( 'Top', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-navigation-position" id="wl-l3-navigation-position"
                           value="top" <?php if ( $WLURIS_L3_Navigation_Position == "top" ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>

                <label class="radio_cont"><?php _e( 'Bottom', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-navigation-position" id="wl-l3-navigation-position"
                           value="bottom" <?php if ( $WLURIS_L3_Navigation_Position == "bottom" ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>

                <p class="description">
					<?php _e( 'Select a thumbnail position to show above or below the slider', WL_URIS_DOMAIN ); ?>.
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Thumbnail Style', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Thumbnail_Style ) ) {
					$WLURIS_L3_Thumbnail_Style = "border";
				} ?>
                <label class="radio_cont"><?php _e( 'Border', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-thumbnail-style" id="wl-l3-thumbnail-style"
                           value="border" <?php if ( $WLURIS_L3_Thumbnail_Style == "border" ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>
                <label class="radio_cont"><?php _e( 'Pointer', WL_URIS_DOMAIN ); ?>
                    <input type="radio" name="wl-l3-thumbnail-style" id="wl-l3-thumbnail-style"
                           value="pointer" <?php if ( $WLURIS_L3_Thumbnail_Style == "pointer" ) {
						echo "checked";
					} ?>>
                    <span class="checkmark"></span>
                </label>
                <p class="description">
					<?php _e( 'Select a thumbnail style to apply on thumbnails', WL_URIS_DOMAIN ); ?>.
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Thumbnail Resize', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Thumbnail_Width ) ) {
					$WLURIS_L3_Thumbnail_Width = "120";
				} ?>
				<?php if ( ! isset( $WLURIS_L3_Thumbnail_Height ) ) {
					$WLURIS_L3_Thumbnail_Height = "120";
				} ?>
				<?php _e( 'Width', WL_URIS_DOMAIN ); ?> <input type="text" name="wl-l3-navigation-width"
                                                               id="wl-l3-navigation-width"
                                                               value="<?php echo $WLURIS_L3_Thumbnail_Width; ?>"> &nbsp;&nbsp;
				<?php _e( 'Height', WL_URIS_DOMAIN ); ?> <input type="text" name="wl-l3-navigation-height"
                                                                id="wl-l3-navigation-height"
                                                                value="<?php echo $WLURIS_L3_Thumbnail_Height; ?>">
                <p class="description">
					<?php _e( 'Set custom thumbnail height & width according to you', WL_URIS_DOMAIN ); ?>.
                </p>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>

    <section id="content4">
        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Show Navigation Bullets', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Navigation_Button ) ) {
					$WLURIS_L3_Navigation_Button = 1;
				} ?>
                <label class="switch">
                    <input type="checkbox" name="wl-l3-navigation-button" id="wl-l3-navigation-button"
                           value="1" <?php if ( $WLURIS_L3_Navigation_Button == 1 ) {
						echo 'checked';
					} ?>>
                    <span class="slider round"></span>
                </label>
                <p class="description">
					<?php _e( 'Select Yes/No option to show or hide slider navigation buttons under image slider', WL_URIS_DOMAIN ); ?>
                    .
                    <a href="#" id="p3" data-tooltip="#s3"><?php _e( 'Preview', WL_URIS_DOMAIN ); ?></a>
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Navigation Color', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Navigation_Color ) ) {
					$WLURIS_L3_Navigation_Color = "#FFFFFF";
				} ?>
                <input id="wl-l3-navigation-color" name="wl-l3-navigation-color" type="text"
                       value="<?php echo $WLURIS_L3_Navigation_Color; ?>" class="my-color-field"
                       data-default-color="#ffffff"/>
                <p class="description">
					<?php _e( 'Select a color to set navigation arrow and fullscreen icon color', WL_URIS_DOMAIN ); ?>.
                    <a href="#" id="p11" data-tooltip="#s11"><?php _e( 'Preview', WL_URIS_DOMAIN ); ?></a>
                </p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Navigation Bullets Color', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Navigation_Bullets_Color ) ) {
					$WLURIS_L3_Navigation_Bullets_Color = "#000000";
				} ?>
                <input id="wl-l3-navigation-bullets-color" name="wl-l3-navigation-bullets-color" type="text"
                       value="<?php echo $WLURIS_L3_Navigation_Bullets_Color; ?>" class="my-color-field"
                       data-default-color="#000000"/>
                <p class="description">
					<?php _e( 'Select a color to set navigation bullets color', WL_URIS_DOMAIN ); ?>.
                </p>
            </div>
        </div>
        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Navigation Pointer Color', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Navigation_Pointer_Color ) ) {
					$WLURIS_L3_Navigation_Pointer_Color = "#000000";
				} ?>
                <input id="wl-l3-navigation-pointer-color" name="wl-l3-navigation-pointer-color" type="text"
                       value="<?php echo $WLURIS_L3_Navigation_Pointer_Color; ?>" class="my-color-field"
                       data-default-color="#000000"/>
                <p class="description">
					<?php _e( 'Select a color to set navigation pointer color', WL_URIS_DOMAIN ); ?>.
                </p>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <section id="content5">
        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( "Font Style", WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Font_Style ) ) {
					$WLURIS_L3_Font_Style = "Arial";
				} ?>
                <select name="wl-l3-font-style" id="wl-l3-font-style" class="standard-dropdown">
                    <optgroup label="Default Fonts">
                        <option value="Arial" <?php selected( $WLURIS_L3_Font_Style, 'Arial' ); ?>>Arial</option>
                        <option value="Arial Black" <?php selected( $WLURIS_L3_Font_Style, 'Arial Black' ); ?>>Arial
                            Black
                        </option>
                        <option value="Courier New" <?php selected( $WLURIS_L3_Font_Style, 'Courier New' ); ?>>Courier
                            New
                        </option>
                        <option value="cursive" <?php selected( $WLURIS_L3_Font_Style, 'cursive' ); ?>>Cursive</option>
                        <option value="fantasy" <?php selected( $WLURIS_L3_Font_Style, 'fantasy' ); ?>>Fantasy</option>
                        <option value="Georgia" <?php selected( $WLURIS_L3_Font_Style, 'Georgia' ); ?>>Georgia</option>
                        <option value="Grande"<?php selected( $WLURIS_L3_Font_Style, 'Grande' ); ?>>Grande</option>
                        <option value="Helvetica Neue" <?php selected( $WLURIS_L3_Font_Style, 'Helvetica Neue' ); ?>>
                            Helvetica
                            Neue
                        </option>
                        <option value="Impact" <?php selected( $WLURIS_L3_Font_Style, 'Impact' ); ?>>Impact</option>
                        <option value="Lucida" <?php selected( $WLURIS_L3_Font_Style, 'Lucida' ); ?>>Lucida</option>
                        <option value="Lucida Console"<?php selected( $WLURIS_L3_Font_Style, 'Lucida Console' ); ?>>
                            Lucida
                            Console
                        </option>
                        <option value="monospace" <?php selected( $WLURIS_L3_Font_Style, 'monospace' ); ?>>Monospace
                        </option>
                        <option value="Open Sans" <?php selected( $WLURIS_L3_Font_Style, 'Open Sans' ); ?>>Open Sans
                        </option>
                        <option value="Palatino" <?php selected( $WLURIS_L3_Font_Style, 'Palatino' ); ?>>Palatino
                        </option>
                        <option value="sans" <?php selected( $WLURIS_L3_Font_Style, 'sans' ); ?>>Sans</option>
                        <option value="sans-serif" <?php selected( $WLURIS_L3_Font_Style, 'sans-serif' ); ?>>Sans-Serif
                        </option>
                        <option value="Tahoma" <?php selected( $WLURIS_L3_Font_Style, 'Tahoma' ); ?>>Tahoma</option>
                        <option value="Times New Roman"<?php selected( $WLURIS_L3_Font_Style, 'Times New Roman' ); ?>>
                            Times
                            New Roman
                        </option>
                        <option value="Trebuchet MS" <?php selected( $WLURIS_L3_Font_Style, 'Trebuchet MS' ); ?>>
                            Trebuchet
                            MS
                        </option>
                        <option value="Verdana" <?php selected( $WLURIS_L3_Font_Style, 'Verdana' ); ?>>Verdana</option>
                    </optgroup>
                </select>
                <p class="description"><?php _e( "Choose a caption font style", WL_URIS_DOMAIN ); ?></p>
            </div>
        </div>

        <div id="L3" class="col-md-12">
            <div class="col-md-4">
                <label><?php _e( 'Custom CSS', WL_URIS_DOMAIN ); ?></label>
            </div>
            <div class="col-md-8">
				<?php if ( ! isset( $WLURIS_L3_Custom_CSS ) ) {
					$WLURIS_L3_Custom_CSS = "";
				} ?>
                <textarea name="wl-l3-custom-css" id="wl-l3-custom-css" rows="5"
                          cols="75"><?php echo $WLURIS_L3_Custom_CSS; ?></textarea>
                <p class="description">
					<?php _e( 'Enter any custom css you want to apply on this slider into textarea filed', WL_URIS_DOMAIN ); ?>
                    .<br>
                </p>
                <p class="custnote"><?php _e( "Note: Please Do Not Use Style Tag With Custom CSS", WL_URIS_DOMAIN ); ?></p>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
</div>
<a href="#top" id="smoothup" title="Back to top"></a>