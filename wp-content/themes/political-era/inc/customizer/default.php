<?php
/**
 * Default theme options.
 *
 * @package Political_Era
 */

if ( ! function_exists( 'political_era_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function political_era_get_default_theme_options() {

	$defaults = array();

	$defaults['site_identity']					= 'title-text';
	$defaults['enable_header_address']			= false;

	$defaults['enable_breadcrumb']				= true;
	$defaults['header_image']					= 'none';	

	$defaults['enable_header_button']			= true;	
	$defaults['enable_top_header']			    = false;
	$defaults['top_header_left']				= 'none';
	$defaults['top_header_right']				= 'none';
	$defaults['header_address']					= '';
	$defaults['header_email']					= '';
	$defaults['header_number']					= '';

    $defaults['top_header_bg_color']            = '#eef2f7';
    $defaults['top_header_color']               = '#0d4c91';

	$defaults['enable_navigation']			    = true;	
	$defaults['button_text']					= esc_html__( 'Donate Now', 'political-era' );
	$defaults['button_url']						= '';
    $defaults['button_icon']                    = 'fa-database';
    $defaults['enable_button_icon']             = true; 

    $defaults['header_bg_color']               = '#ffffff';
    $defaults['nav_color']                     = '#0d4c91';
    $defaults['nav_hover_color']               = '#0085c0';

    $defaults['button_bg_color']               = '#0d4c91';
    $defaults['button_bg_hover_color']         = '#0085c0';
    $defaults['button_text_color']             = '#ffffff';
    $defaults['button_text_hover_color']       = '#ffffff';


	// Blog Setting
	$defaults['enable_post_meta']				= true;
    $defaults['pagination_layout']              = 'default';

	// General Setting
	$defaults['sidebar_layout']					= 'right_sidebar';
	$defaults['pagination_layout']				= 'default';


	// Footer Section 
	$defaults['copyright_text']					= '';
	$defaults['enable_scrollto_top']			= true;
	$defaults['footer_bg_image']				= '';
	$defaults['footer_image']				    = '';
    $defaults['enable_top_footer']              = true;
    $defaults['scroll_to_top_icon']             = 'fa-angle-up';

    $defaults['footer_bg_color']                = '#0d4c91';
    $defaults['footer_text_color']              = '#ffffff';    

    // Banner Setting	
    $defaults['enable_banner']					= false;
    $defaults['banner_type']					= 'banner-slider';
    $defaults['banner_slider_category']			= 0;
    $defaults['slider_number']					= 3;
    $defaults['enable_title']					= true;
    $defaults['enable_content']					= true; 
    $defaults['banner_page']					= 0;   

    //Information Section
    $defaults['banner_page']					= 0;
    $defaults['enable_info']					= false;
    $defaults['enable_info_home']               = false; 
    $defaults['information_bg_image']           = ''; 	

    // Mission Section 
    $defaults['enable_mission']					= false; 
    $defaults['mission_quote']					= ''; 
    $defaults['mission_sub_title']				= esc_html__('MISSION & VISION', 'political-era');
    $defaults['mission_page']					= 0;        
    $defaults['mission_category']				= 0;
    $defaults['mission_number']					= 3;
    $defaults['mission_button']					= esc_html__('Discover More', 'political-era');
    $defaults['mission_button_url']				= '';

    // Profile Section
    $defaults['enable_profile']					= false;
    $defaults['profile_sub_title']				= esc_html__('Meet', 'political-era');
    $defaults['profile_page']					= 0; 
    $defaults['profile_image']       			= '';	
    $defaults['profile_button']					= esc_html__('View Bio', 'political-era');

    // Video Section 
    $defaults['enable_video']					= false; 
    $defaults['video_title']					= ''; 
    $defaults['video_sub_title']				= esc_html__('OUR VOICE', 'political-era');
    $defaults['video_image']					= '';        
    $defaults['video_url']						= '';
    $defaults['video_button']					= esc_html__('Discover More', 'political-era');
    $defaults['video_button_url']				= ''; 

    // Event Section 
    $defaults['enable_event']					= false; 
    $defaults['event_sub_title']				= esc_html__('OUR EVENTS', 'political-era');
    $defaults['event_page']						= 0;        
    $defaults['event_category']					= 0;
    $defaults['event_number']					= 2;
    $defaults['event_button']					= esc_html__('View All Event', 'political-era');
    $defaults['event_button_url']				= '';   

    // CTA Section
    $defaults['enable_cta']						= false;
    $defaults['cta_sub_title']					= esc_html__('Help Us', 'political-era');
    $defaults['cta_page']						= 0; 
    $defaults['cta_image']       				= '';	
    $defaults['cta_button']						= esc_html__('Became A Member', 'political-era');   
    $defaults['cta_button_url']                 = ''; 

    // Blog Section 
    $defaults['enable_blog']					= false;
    $defaults['blog_sub_title']					= esc_html__('News and Blog', 'political-era');
    $defaults['blog_title']						= esc_html__( 'step into the news to light', 'political-era');
    $defaults['blog_category']					= 0;
    $defaults['blog_number']					= 3;

    // Promo Section
    $defaults['enable_promo']					= false;
    $defaults['promo_sub_title']				= esc_html__('DONATE TODAY', 'political-era');
    $defaults['promo_page']						= 0; 	
    $defaults['promo_button']					= esc_html__('DONATE Now', 'political-era');
    $defaults['promo_button_url']               = '';     
      


	// Pass through filter.
	$defaults = apply_filters( 'political_era_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'political_era_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function political_era_get_option( $key ) {

		$default_options = political_era_get_default_theme_options();

		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;