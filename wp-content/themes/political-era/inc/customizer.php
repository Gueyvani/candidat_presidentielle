<?php
/**
 * Political Era Theme Customizer
 *
 * @package Political_Era
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function political_era_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Load Callback option.
	require  trailingslashit( get_template_directory() ) . '/inc/customizer/callback.php';	

	// Load Control option.
	require  trailingslashit( get_template_directory() ) . '/inc/customizer/control.php';			

	// Load Customize Sanitize.
	require trailingslashit( get_template_directory() ) . '/inc/customizer/sanitize.php';

	// Load Theme Option.
	require  trailingslashit( get_template_directory() ). '/inc/customizer/theme-option.php';

	// Load Top Header Option.
	require  trailingslashit( get_template_directory() ). '/inc/customizer/top-header-option.php';	

	// Load Header Option.
	require  trailingslashit( get_template_directory() ). '/inc/customizer/header-option.php';

	// Load Banner Sections Option.
	require get_template_directory() . '/inc/customizer/banner-section.php';	

	// Load Feature Sections Option.
	require get_template_directory() . '/inc/customizer/feature-section.php';		

	// Load Blog Theme Option.
	require  trailingslashit( get_template_directory() ). '/inc/customizer/blog-option.php';		

	// Load General Theme Option.
	require  trailingslashit( get_template_directory() ). '/inc/customizer/general-option.php';		

	// Load Footer Theme Option.
	require  trailingslashit( get_template_directory() ). '/inc/customizer/footer-option.php';

	// Load Home Option.
	require  trailingslashit( get_template_directory() ). '/inc/customizer/home-option.php';	
		

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'political_era_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'political_era_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'political_era_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function political_era_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function political_era_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function political_era_customize_preview_js() {
	wp_enqueue_script( 'political-era-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'political_era_customize_preview_js' );

/**
* Load scripts for repeater 
*/
function political_era_enqueue_customizer_scripts() {

    wp_enqueue_style('political-era-customizer-style',get_template_directory_uri() . '/inc/customizer/css/customizer-style.css');
    wp_enqueue_script('political-era-customizer-script',get_template_directory_uri() . '/inc/customizer/js/customizer-script.js', array( 'jquery' ) );

} add_action( 'admin_enqueue_scripts', 'political_era_enqueue_customizer_scripts');
