<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Political_Era
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses political_era_header_style()
 */
function political_era_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'political_era_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'political_era_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'political_era_custom_header_setup' );

if ( ! function_exists( 'political_era_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see political_era_custom_header_setup().
	 */
	function political_era_header_style() {
		
		wp_enqueue_style( 'political-era-style', get_stylesheet_uri() );

		$header_text_color 		= get_header_textcolor();
		$top_header_bg_color  	= political_era_get_option( 'top_header_bg_color' );
		$top_header_color  		= political_era_get_option( 'top_header_color' );

		$header_bg_color  		= political_era_get_option( 'header_bg_color' );
		$nav_color  			= political_era_get_option( 'nav_color' );
		$nav_hover_color  		= political_era_get_option( 'nav_hover_color' );

		$button_bg_color  		= political_era_get_option( 'button_bg_color' );
		$button_bg_hover_color  = political_era_get_option( 'button_bg_hover_color' );
		$button_text_color  	= political_era_get_option( 'button_text_color' );
		$button_text_hover_color= political_era_get_option( 'button_text_hover_color' );

		$footer_bg_color  		= political_era_get_option( 'footer_bg_color' );
		$footer_text_color		= political_era_get_option( 'footer_text_color' );


		$position = "absolute";
		$custom_css = '';
		$clip ="rect(1px, 1px, 1px, 1px)";
		if ( ! display_header_text() ) {
			$custom_css .= '.site-title, .site-description{
				position: '.$position.';
				clip: '.$clip.'; 
			}';
		} else{

			$custom_css .= '.site-title a, .site-description {
				color: #' . esc_attr($header_text_color) . ';			
			}';
		}
		if ( $top_header_bg_color != '#eef2f7' ) {
			$custom_css .= '.top-header {
				background-color: ' . esc_attr($top_header_bg_color) . ';			
			}';
		}
		if ( $top_header_color != '#0d4c91' ) {
			$custom_css .= '.top-header a, .top-header-wrap {
				color: ' . esc_attr($top_header_color) . ';			
			}';
		}
		if ( $top_header_color != '#0d4c91' ) {
			$custom_css .= '.top-header .contact-info div .icon {
				background-color: ' . esc_attr($top_header_color) . ';			
			}';
		}
		if ( $top_header_color == '#ffffff' ) {
			$custom_css .= '.top-header .contact-info div .icon {
				color: #000;			
			}';
		}

		if ( $header_bg_color != '#ffffff' ) {
			$custom_css .= '.hgroup-wrap, .main-navigation ul ul {
				background-color: ' . esc_attr($header_bg_color) . ';	
			}';
		}
		if ( $nav_color != '#0d4c91' ) {
			$custom_css .= '.main-navigation a, .menu-item-has-children::before {
				color: ' . esc_attr($nav_color) . ';		
			}';
		}
		if ( $nav_hover_color != '#0085c0' ) {
			$custom_css .= '.main-navigation a:hover, .menu-item-has-children:hover:before {
				color: ' . esc_attr($nav_hover_color) . ';		
			}';
		}

		if ( $button_bg_color != '#0d4c91' ) {
			$custom_css .= '.button-donate{
				background-color: ' . esc_attr($button_bg_color) . ';		
			}';
		}
		if ( $button_bg_hover_color != '#0085c0' ) {
			$custom_css .= '.button-donate:hover {
				background-color: ' . esc_attr($button_bg_hover_color) . ';		
			}';
		}
		if ( $button_text_color != '#ffffff' ) {
			$custom_css .= '.button-donate {
				color: ' . esc_attr($button_text_color) . ';		
			}';
		}
		if ( $button_text_hover_color != '#ffffff' ) {
			$custom_css .= '.button-donate:hover {
				color: ' . esc_attr($button_text_hover_color) . ';		
			}';
		}	

		if ( $footer_bg_color != '#0d4c91' ) {
			$custom_css .= '.footer-bottom {
				background-color: ' . esc_attr($footer_bg_color) . ';		
			}';
		}
		if ( $footer_text_color != '#ffffff' ) {
			$custom_css .= '.copyright-part {
				color: ' . esc_attr($footer_text_color) . ';		
			}';
		}																				


		wp_add_inline_style( 'political-era-style', $custom_css );
	}
add_action( 'wp_enqueue_scripts', 'political_era_header_style' );	
endif;
