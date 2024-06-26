<?php
/**
 * @package Politics Candidate
 * @subpackage politics-candidate
 * @since politics-candidate 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses politics_candidate_header_style()
*/

function politics_candidate_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'politics_candidate_custom_header_args', array(
		'default-text-color' => 'fff',
		'header-text' 	     =>	false,
		'width'              => 1400,
		'height'             => 70,
		'flex-height'        => true,
	    'flex-width'         => true,
		'wp-head-callback'   => 'politics_candidate_header_style',
	) ) );

}

add_action( 'after_setup_theme', 'politics_candidate_custom_header_setup' );

if ( ! function_exists( 'politics_candidate_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see politics_candidate_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'politics_candidate_header_style' );
function politics_candidate_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$politics_candidate_custom_css = "
        .page-template-custom-frontpage #header,#header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: cover;
		}		
		";
	   	wp_add_inline_style( 'politics-candidate-basic-style', $politics_candidate_custom_css );
	endif;
}
endif; // politics_candidate_header_style
