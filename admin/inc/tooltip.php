<?php defined( 'ABSPATH' ) or die(); ?>

<style>
    .sprev {
        margin: 8px;
    }
</style>
<script>
    jQuery(document).ready(function () {
        //Basic
        jQuery('#p1').darkTooltip();
        jQuery('#p2').darkTooltip();
        jQuery('#p3').darkTooltip();
        jQuery('#p4').darkTooltip();
        jQuery('#p5').darkTooltip();
        jQuery('#p6').darkTooltip();
        jQuery('#p7').darkTooltip();
        jQuery('#p8').darkTooltip();
        jQuery('#p9').darkTooltip();
        jQuery('#p10').darkTooltip();
        jQuery('#p11').darkTooltip();

        //With some options
        jQuery('#light').darkTooltip({
            animation: 'flipIn',
            gravity: 'west',
            confirm: true,
            theme: 'light'
        });
    });
</script>
<?php $PreviewImg = WL_URIS_PLUGIN_URL . 'assets/img/'; ?>

<div style="display:none;" id="s1">
    <h4><?php _e( 'Sliding Arrow', WL_URIS_DOMAIN ); ?></h4>
    <img src="<?php echo $PreviewImg . "sliding-arrow.jpg"; ?>" class="sprev">
</div>

<div style="display:none;" id="s2">
    <h4><?php _e( 'Show Thumbnail', WL_URIS_DOMAIN ); ?></h4>
    <img src="<?php echo $PreviewImg . "show-thumbnail.jpg"; ?>" class="sprev">
</div>

<div style="display:none;" id="s3">
    <h4><?php _e( 'Show Navigation Bullets', WL_URIS_DOMAIN ); ?></h4>
    <img src="<?php echo $PreviewImg . "show-navigation-bullets.jpg"; ?>" class="sprev">
</div>

<div style="display:none;" id="s4">
    <h4><?php _e( 'Slider Width', WL_URIS_DOMAIN ); ?></h4>
    <img src="<?php echo $PreviewImg . "slider-width.jpg"; ?>" class="sprev">
</div>

<div style="display:none;" id="s5">
    <h4><?php _e( 'Slider Height', WL_URIS_DOMAIN ); ?></h4>
    <img src="<?php echo $PreviewImg . "slider-height.jpg"; ?>" class="sprev">
</div>

<div style="display:none;" id="s6">
    <h4><?php _e( 'Slide Distance', WL_URIS_DOMAIN ); ?></h4>
    <img src="<?php echo $PreviewImg . "slide-distance.jpg"; ?>" class="sprev">
</div>

<div style="display:none;" id="s7">
    <h4><?php _e( 'Slide Title Color', WL_URIS_DOMAIN ); ?></h4>
    <img src="<?php echo $PreviewImg . "title-color.jpg"; ?>" class="sprev">
</div>

<div style="display:none;" id="s8">
    <h4><?php _e( 'Slide Title Background Color', WL_URIS_DOMAIN ); ?></h4>
    <img src="<?php echo $PreviewImg . "title-bg-color.jpg"; ?>" class="sprev">
</div>

<div style="display:none;" id="s9">
    <h4><?php _e( 'Slide Description Color', WL_URIS_DOMAIN ); ?></h4>
    <img src="<?php echo $PreviewImg . "desc-color.jpg"; ?>" class="sprev">
</div>

<div style="display:none;" id="s10">
    <h4><?php _e( 'Slide Description Background Color', WL_URIS_DOMAIN ); ?></h4>
    <img src="<?php echo $PreviewImg . "desc-bg-color.jpg"; ?>" class="sprev">
</div>

<div style="display:none;" id="s11">
    <h4><?php _e( 'Navigation Color', WL_URIS_DOMAIN ); ?></h4>
    <img src="<?php echo $PreviewImg . "navigation-color.jpg"; ?>" class="sprev">
</div>