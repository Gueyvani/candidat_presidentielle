<?php
/**
 * @package Election Campaign
 * @subpackage election-campaign
 * @since election-campaign 1.0
 * Setup the WordPress core custom header feature.
 * @uses election_campaign_header_style()
*/

function election_campaign_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'election_campaign_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1400,
		'height'                 => 70,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'election_campaign_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'election_campaign_custom_header_setup' );

if ( ! function_exists( 'election_campaign_header_style' ) ) :

add_action( 'wp_enqueue_scripts', 'election_campaign_header_style' );
function election_campaign_header_style() {
	if ( get_header_image() ) :
	$election_campaign_custom_css = "
        .top-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: cover;
		}";
	   	wp_add_inline_style( 'election-campaign-basic-style', $election_campaign_custom_css );
	endif;
}
endif;