<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Political_Era
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function political_era_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (  political_era_is_woocommerce_active() && is_woocommerce() ):
		if ( ! is_active_sidebar( 'shop-sidebar' ) ) {
			if ( is_shop() ){
				$classes[] = 'no-sidebar';
			}
		}

	endif; 

	// Sidebar Layout
	global $post;
	$sidebar_layout = political_era_get_option( 'sidebar_layout' ); 
	if ( $post  && is_singular() ) {
		$sidebar_post_options = get_post_meta( $post->ID, 'sidebar_options', true );
		if ( isset( $sidebar_post_options ) && ! empty( $sidebar_post_options ) ) {
			if ( 'customizer_setting' == $sidebar_post_options ){
				$sidebar_layout = political_era_get_option( 'sidebar_layout' );
			} else{
				$sidebar_layout = $sidebar_post_options;
			}
			
		}
	}

	$classes[] = 'global-layout-' . esc_attr( $sidebar_layout );

	return $classes;
}
add_filter( 'body_class', 'political_era_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function political_era_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'political_era_pingback_header' );