<?php 
/**
 * Callback Function
 *
 * @package Political_Era
 */

/**
 * Active callback Top Header 
 */
if ( ! function_exists( 'political_callback_top_header' ) ) :

	function political_callback_top_header( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_top_header]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;


/**
 * Active callback Header Address
 */
if ( ! function_exists( 'political_header_address' ) ) :

	function political_header_address( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_header_address]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;

/**
 * Active callback Header Button
 */
if ( ! function_exists( 'political_header_button' ) ) :

	function political_header_button( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_header_button]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;

/**
 * Active callback Header Button Icon
 */
if ( ! function_exists( 'political_header_button_icon' ) ) :

	function political_header_button_icon( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_header_button]' )->value() && true == $control->manager->get_setting( 'theme_options[enable_button_icon]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;



/**
 * Active callback Header Button Url
 */
if ( ! function_exists( 'political_header_button_url' ) ) :

	function political_header_button_url( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_header_button]' )->value() && 'url' == $control->manager->get_setting( 'theme_options[button_content]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;

/**
 * Active callback Banner
 */
if ( ! function_exists( 'political_callback_banner' ) ) :

	function political_callback_banner( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_banner]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;

/***************Slider Banner Image ******************/
if ( ! function_exists( 'political_active_slider' ) ) :
	function political_active_slider( $control ) { 
		if( 'banner-slider' == $control->manager->get_setting('theme_options[banner_type]')->value() && true == $control->manager->get_setting( 'theme_options[enable_banner]' )->value() ){	

			return true;	

		} else {	

			return false;	

		}

	}
endif;
/***************Slider Banner Image ******************/
if ( ! function_exists( 'political_active_banner' ) ) :
	function political_active_banner( $control ) { 
		if( 'banner' == $control->manager->get_setting('theme_options[banner_type]')->value() && true == $control->manager->get_setting( 'theme_options[enable_banner]' )->value() ){	

			return true;	

		} else {	

			return false;	

		}

	}
endif;

/**
 * Active callback Information Section
 */
if ( ! function_exists( 'political_callback_info' ) ) :

	function political_callback_info( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_info]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;

/**
 * Active callback Mission Section
 */
if ( ! function_exists( 'political_callback_mission' ) ) :

	function political_callback_mission( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_mission]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;
/**
 * Active callback Profile Section
 */
if ( ! function_exists( 'political_callback_profile' ) ) :

	function political_callback_profile( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_profile]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;

/**
 * Active callback Video Section
 */
if ( ! function_exists( 'political_callback_event' ) ) :

	function political_callback_event( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_event]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;


/**
 * Active callback Event Section
 */
if ( ! function_exists( 'political_callback_video' ) ) :

	function political_callback_video( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_video]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;
/**
 * Active callback CTA Section
 */
if ( ! function_exists( 'political_callback_cta' ) ) :

	function political_callback_cta( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_cta]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;

/**
 * Active callback Blog Section
 */
if ( ! function_exists( 'political_callback_blog' ) ) :

	function political_callback_blog( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_blog]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;

/**
 * Active callback Promo Section
 */
if ( ! function_exists( 'political_callback_promo' ) ) :

	function political_callback_promo( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_promo]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;

/**
 * Active callback Footer Section
 */
if ( ! function_exists( 'political_callback_footer' ) ) :

	function political_callback_footer( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_top_footer]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;

/**
 * Active callback Navigation Section
 */
if ( ! function_exists( 'political_callback_navigation' ) ) :

	function political_callback_navigation( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_navigation]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;

/**
 * Active callback Scroll To Top Section
 */
if ( ! function_exists( 'political_callback_scrolltotop' ) ) :

	function political_callback_scrolltotop( $control ) { 

		if ( true == $control->manager->get_setting( 'theme_options[enable_scrollto_top]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}

endif;