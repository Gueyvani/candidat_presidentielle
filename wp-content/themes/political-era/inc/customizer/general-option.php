<?php
/**
 * General Theme Customizer
 *
 * @package Political_Era
 */
$default = political_era_get_default_theme_options();


/****************  Blog Setting Section starts ************/
$wp_customize->add_section('section_general', 
	array(    
	'title'       => esc_html__('General  Setting', 'political-era'),
	'panel'       => 'theme_option_panel'    
	)
);
/********************* Sidebar Layout  ****************************/
$wp_customize->add_setting('theme_options[sidebar_layout]', 
	array(
	'default' 			=> $default['sidebar_layout'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'political_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[sidebar_layout]', 
	array(		
	'label' 	=> esc_html__('Sidebar Layout Options', 'political-era'),
	'section' 	=> 'section_general',
	'settings'  => 'theme_options[sidebar_layout]',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'right_sidebar' 	=> esc_html__('Right Sidebar', 'political-era'),							
		'left_sidebar' 		=> esc_html__('Left Sidebar', 'political-era'),
		'no_sidebar' 		=> esc_html__('No Sidebar', 'political-era'),		
		),	
	)
);