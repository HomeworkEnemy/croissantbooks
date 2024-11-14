<?php
/**
 * @package Pest Control Treatment 
 * Setup the WordPress core custom header feature.
 *
 * @uses pest_control_treatment_header_style()
*/
function pest_control_treatment_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'pest_control_treatment_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 70,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'pest_control_treatment_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'pest_control_treatment_custom_header_setup' );

if ( ! function_exists( 'pest_control_treatment_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see pest_control_treatment_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'pest_control_treatment_header_style' );

function pest_control_treatment_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .home-page-header,.page-template-custom-home-page .home-page-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		    background-size: cover;
		}";
	   	wp_add_inline_style( 'pest-control-treatment-basic-style', $custom_css );
	endif;
}
endif;