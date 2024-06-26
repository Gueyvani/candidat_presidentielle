<?php
/**
 * banner Customizer
 *
 * @package Political_Era
 */
$default = political_era_get_default_theme_options();

/****************  Sldier Setting ************/
$wp_customize->add_section('section_banner', 
	array(    
	'title'       => esc_html__('Banner Setting', 'political-era'),
	'panel'       => 'theme_option_panel'    
	)
);
/********************* Enable Banner Section ****************************/
$wp_customize->add_setting( 'theme_options[enable_banner]',
    array(
        'default'           => $default['enable_banner'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_banner]',
    array(
        'label'    => esc_html__( 'Enable Banner', 'political-era' ),
        'section'  => 'section_banner',
        'type'     => 'checkbox',    
    )
);
/***************************** Featured Slider Type  ******************************/
$wp_customize->add_setting( 'theme_options[banner_type]',
	array(
	'default'           => $default['banner_type'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'political_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[banner_type]',
	array(
	'label'    => esc_html__( 'Select Banner Type', 'political-era' ),
	'section'  => 'section_banner',
	'type'     => 'select',	
	'active_callback' => 'political_callback_banner',
    'choices'   => array(
        'banner'  		=> esc_html__('Banner', 'political-era'),
        'banner-slider' => esc_html__('Banner Slider', 'political-era'),              
    	),
	)
);
/********************* Slider Category. *****************************************/
$wp_customize->add_setting( 'theme_options[banner_slider_category]',
	array(
	'default'           => $default['banner_slider_category'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Political_Era_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[banner_slider_category]',
		array(
		'label'    => esc_html__( 'Select Category', 'political-era' ),
		'section'  => 'section_banner',
		'settings' => 'theme_options[banner_slider_category]',
		'active_callback'   => 'political_active_slider',
		)
	)
);
/************************** Slider Section Number **************************************/
$wp_customize->add_setting( 'theme_options[slider_number]',
	array(
		'default'           => $default['slider_number'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'political_sanitize_number_range',
		)
);
$wp_customize->add_control( 'theme_options[slider_number]',
	array(
		'label'       => esc_html__( 'Select Number', 'political-era' ),
		'section'     => 'section_banner',
		'type'        => 'number',
		'input_attrs' => array( 'min' => 1, 'max' => 20, 'step' => 1, 'style' => 'width: 115px;' ),
		'active_callback'   => 'political_active_slider',
	)
);
/********************* Enable Title ****************************/
$wp_customize->add_setting( 'theme_options[enable_title]',
    array(
        'default'           => $default['enable_title'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_title]',
    array(
        'label'    => esc_html__( 'Show Title', 'political-era' ),
        'section'  => 'section_banner',
        'type'     => 'checkbox',   
        'active_callback'   => 'political_callback_banner', 
    )
);
/********************* Enable Content ****************************/
$wp_customize->add_setting( 'theme_options[enable_content]',
    array(
        'default'           => $default['enable_content'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_content]',
    array(
        'label'    => esc_html__( 'Show Content', 'political-era' ),
        'section'  => 'section_banner',
        'type'     => 'checkbox', 
        'active_callback'   => 'political_callback_banner',   
    )
);

/****************************  Banner Image ********************************/
$wp_customize->add_setting('theme_options[banner_page]', 
	array(
	'default'           => $default['banner_page'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'political_sanitize_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[banner_page]', 
	array(
	'label'       => esc_html__('Select Page', 'political-era'),    
	'section'     => 'section_banner',   
	'settings'    => 'theme_options[banner_page]',		
	'type'        => 'dropdown-pages',
	'active_callback' => 'political_active_banner',
	)
);
