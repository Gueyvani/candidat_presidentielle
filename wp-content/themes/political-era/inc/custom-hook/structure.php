<?php
/**
 * Theme functions related to structure.
 *
 * This file contains structural hook functions.
 *
 * @package Political_Era
 */

if ( ! function_exists( 'political_era_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since 1.0.0
	 */
	function political_era_doctype() {
	?><!DOCTYPE html> <html <?php language_attributes(); ?>><?php
	}	
endif;
add_action( 'political_era_action_doctype', 'political_era_doctype', 10 );

if ( !function_exists( 'political_era_head' ) ) :
	/**
	 * Header Codes.
	 *
	 * @since 1.0.0
	 */
	function political_era_head() {
	?>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
	<?php
	}
	
endif;
add_action( 'political_era_action_head', 'political_era_head', 10 );


if ( ! function_exists( 'political_era_page_start' ) ) :
	/**
	 * Page Start.
	 *
	 * @since 1.0.0
	 */
	function political_era_page_start() {
	?>	
    	<div id="page" class="hfeed site">
    		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'political-era' ); ?></a>
    <?php
	}
	
endif;
add_action( 'political_era_action_before', 'political_era_page_start' );

if ( ! function_exists( 'political_era_page_end' ) ) :
	/**
	 * Page End.
	 *
	 * @since 1.0.0
	 */
	function political_era_page_end() {
	?></div><!-- #page --><?php
	}

endif;
add_action( 'political_era_action_after', 'political_era_page_end' );

if ( ! function_exists( 'political_era_header_start' ) ) :
	/**
	 * Header Start
	 *
	 * @since 1.0.0
	 */
	function political_era_header_start() {
	?>
	<header id="masthead" class="site-header"> <!-- header starting from here --><?php	
	}
endif;
add_action( 'political_era_action_before_header', 'political_era_header_start', 10 );


if ( ! function_exists( 'political_era_header_end' ) ) :
	/**
	 * Header End
	 *
	 * @since 1.0.0
	 */
	function political_era_header_end() {
	?></header><!-- header ends here --><?php	
	}
endif;
add_action( 'political_era_action_after_header', 'political_era_header_end', 10 );

if ( ! function_exists( 'political_era_content_start' ) ) :
	/**
	 * Content Start.
	 *
	 * @since 1.0.0
	 */
	function political_era_content_start() {
	?><div id="content" class="site-content"><?php
	if ( ! is_page_template( 'page-template/tp-home.php' ) ){
		echo '<div class="container">';
	}
	}
endif;
add_action( 'political_era_action_before_content', 'political_era_content_start' );


if ( ! function_exists( 'political_era_content_end' ) ) :
	/**
	 * Content End.
	 *
	 * @since 1.0.0
	 */
	function political_era_content_end() {
	?></div><!-- #content --><?php
	if ( ! is_page_template( 'page-template/tp-home.php' ) ){
		echo '</div>';
	}
	}
endif;
add_action( 'political_era_action_after_content', 'political_era_content_end' );

if ( ! function_exists( 'political_era_footer_start' ) ) :
	/**
	 * Footer Start.
	 *
	 * @since 1.0.0
	 */
	function political_era_footer_start() {
	?>
	<footer id="colophon" class="site-footer"><div class="site-info"> <!-- footer starting from here --> 
	<?php
	}
endif;
add_action( 'political_era_action_before_footer', 'political_era_footer_start' );


if ( ! function_exists( 'political_era_footer_end' ) ) :
	/**
	 * Footer End.
	 *
	 * @since 1.0.0
	 */
	function political_era_footer_end() {
	?></div></footer><!-- #colophon --><?php
	}
endif;
add_action( 'political_era_action_after_footer', 'political_era_footer_end' );

