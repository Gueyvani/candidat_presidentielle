<?php
/**
 * Home Page Customizer
 *
 * @package Political_Era
 */
$default = political_era_get_default_theme_options();

/****************  Add Pannel   ***********************/
$wp_customize->add_panel( 'front_page_panel',
	array(
	'title'      => esc_html__( 'Front Page Options', 'political-era' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);
// Load Misssion Option.
require  trailingslashit( get_template_directory() ). '/inc/customizer/home-page/mission-option.php';

// Profile Section
require  trailingslashit( get_template_directory() ). '/inc/customizer/home-page/profile-option.php';

// Video Section
require  trailingslashit( get_template_directory() ). '/inc/customizer/home-page/video-option.php';

// Event Section
require  trailingslashit( get_template_directory() ). '/inc/customizer/home-page/event-option.php';

// CTA Section
require  trailingslashit( get_template_directory() ). '/inc/customizer/home-page/cta-option.php';

// Blog Section
require  trailingslashit( get_template_directory() ). '/inc/customizer/home-page/blog-option.php';

// Promo Section
require  trailingslashit( get_template_directory() ). '/inc/customizer/home-page/promo-option.php';
