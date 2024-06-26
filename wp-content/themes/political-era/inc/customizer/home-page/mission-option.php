<?php
/**
 * Home Page Mission Section Customizer
 *
 * @package Political_Era
 */
/**************** Mission Section ************/
$wp_customize->add_section('section_mission', 
	array(    
	'title'       => esc_html__('Mission Setting', 'political-era'),
	'panel'       => 'front_page_panel'    
	)
);

/********************* Enable Mission Section ****************************/
$wp_customize->add_setting( 'theme_options[enable_mission]',
    array(
        'default'           => $default['enable_mission'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_mission]',
    array(
        'label'    => esc_html__( 'Enable Mission Section', 'political-era' ),
        'section'  => 'section_mission',
        'type'     => 'checkbox',    
    )
);
/************************  Mission Quote  ******************/
$wp_customize->add_setting( 'theme_options[mission_quote]',
	array(
	'default'           => $default['mission_quote'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_textarea_field',	
	)
);
$wp_customize->add_control( 'theme_options[mission_quote]',
	array(
	'label'    => esc_html__( 'Quote', 'political-era' ),
	'section'  => 'section_mission',
	'type'     => 'textarea',
	'active_callback' => 'political_callback_mission',
	
	)
);

/************************  Sub Title  ******************/
$wp_customize->add_setting( 'theme_options[mission_sub_title]',
	array(
	'default'           => $default['mission_sub_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[mission_sub_title]',
	array(
	'label'    => esc_html__( 'Sub Title', 'political-era' ),
	'section'  => 'section_mission',
	'type'     => 'text',
	'active_callback' => 'political_callback_mission',
	
	)
);

/****************************  Mission Page ********************************/
$wp_customize->add_setting('theme_options[mission_page]', 
	array(
	'default'           => $default['mission_page'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'political_sanitize_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[mission_page]', 
	array(
	'label'       => esc_html__('Select Page', 'political-era'),    
	'section'     => 'section_mission',   
	'settings'    => 'theme_options[mission_page]',		
	'type'        => 'dropdown-pages',
	'active_callback' => 'political_callback_mission',
	)
);
/********************* Mission Category. *****************************************/
$wp_customize->add_setting( 'theme_options[mission_category]',
	array(
	'default'           => $default['mission_category'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Political_Era_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[mission_category]',
		array(
		'label'    => esc_html__( 'Select Category', 'political-era' ),
		'section'  => 'section_mission',
		'settings' => 'theme_options[mission_category]',
		'active_callback'   => 'political_callback_mission',
		)
	)
);
/************************** Mission Section Number **************************************/
$wp_customize->add_setting( 'theme_options[mission_number]',
	array(
		'default'           => $default['mission_number'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'political_sanitize_number_range',
		)
);
$wp_customize->add_control( 'theme_options[mission_number]',
	array(
		'label'       => esc_html__( 'Select Number', 'political-era' ),
		'section'     => 'section_mission',
		'type'        => 'number',
		'input_attrs' => array( 'min' => 1, 'max' => 20, 'step' => 1, 'style' => 'width: 115px;' ),
		'active_callback'   => 'political_callback_mission',
	)
);

/************************  Mission Button  ******************/
$wp_customize->add_setting( 'theme_options[mission_button]',
	array(
	'default'           => $default['mission_button'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[mission_button]',
	array(
	'label'    => esc_html__( 'Button Title', 'political-era' ),
	'section'  => 'section_mission',
	'type'     => 'text',
	'active_callback' => 'political_callback_mission',
	
	)
);
/************************  Mission Button Url ******************/
$wp_customize->add_setting( 'theme_options[mission_button_url]',
	array(
	'default'           => $default['mission_button_url'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',	
	)
);
$wp_customize->add_control( 'theme_options[mission_button_url]',
	array(
	'label'    => esc_html__( 'Button Title Link', 'political-era' ),
	'section'  => 'section_mission',
	'type'     => 'text',
	'active_callback' => 'political_callback_mission',
	
	)
);