<?php
/**
 * Home Page Promo Section Customizer
 *
 * @package Political_Era
 */
/**************** profile Section ************/
$wp_customize->add_section('section_promo', 
	array(    
	'title'       => esc_html__('Promo Setting', 'political-era'),
	'panel'       => 'front_page_panel'    
	)
);

/********************* Enable Profile Section ****************************/
$wp_customize->add_setting( 'theme_options[enable_promo]',
    array(
        'default'           => $default['enable_promo'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_promo]',
    array(
        'label'    => esc_html__( 'Enable Promo Section', 'political-era' ),
        'section'  => 'section_promo',
        'type'     => 'checkbox',    
    )
);

/************************  Sub Title  ******************/
$wp_customize->add_setting( 'theme_options[promo_sub_title]',
	array(
	'default'           => $default['promo_sub_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[promo_sub_title]',
	array(
	'label'    => esc_html__( 'Sub Title', 'political-era' ),
	'section'  => 'section_promo',
	'type'     => 'text',
	'active_callback' => 'political_callback_promo',
	
	)
);

/****************************  Promo Page ********************************/
$wp_customize->add_setting('theme_options[promo_page]', 
	array(
	'default'           => $default['promo_page'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'political_sanitize_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[promo_page]', 
	array(
	'label'       => esc_html__('Select Page', 'political-era'),    
	'section'     => 'section_promo',   
	'settings'    => 'theme_options[promo_page]',		
	'type'        => 'dropdown-pages',
	'active_callback' => 'political_callback_promo',
	)
);

/************************  Promo Button  ******************/
$wp_customize->add_setting( 'theme_options[promo_button]',
	array(
	'default'           => $default['promo_button'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[promo_button]',
	array(
	'label'    => esc_html__( 'Button Title', 'political-era' ),
	'section'  => 'section_promo',
	'type'     => 'text',
	'active_callback' => 'political_callback_promo',
	
	)
);
/************************  Promo Button Url ******************/
$wp_customize->add_setting( 'theme_options[promo_button_url]',
	array(
	'default'           => $default['promo_button_url'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',	
	)
);
$wp_customize->add_control( 'theme_options[promo_button_url]',
	array(
	'label'    => esc_html__( 'Button Title Link', 'political-era' ),
	'section'  => 'section_promo',
	'type'     => 'text',
	'active_callback' => 'political_callback_promo',
	
	)
);