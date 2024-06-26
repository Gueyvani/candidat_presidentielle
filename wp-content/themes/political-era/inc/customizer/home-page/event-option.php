<?php
/**
 * Home Page Event Section Customizer
 *
 * @package Political_Era
 */
/**************** Event Section ************/
$wp_customize->add_section('section_event', 
	array(    
	'title'       => esc_html__('Event Setting', 'political-era'),
	'panel'       => 'front_page_panel'    
	)
);

/********************* Enable Event Section ****************************/
$wp_customize->add_setting( 'theme_options[enable_event]',
    array(
        'default'           => $default['enable_event'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_event]',
    array(
        'label'    => esc_html__( 'Enable Event Section', 'political-era' ),
        'section'  => 'section_event',
        'type'     => 'checkbox',    
    )
);


/************************  Sub Title  ******************/
$wp_customize->add_setting( 'theme_options[event_sub_title]',
	array(
	'default'           => $default['event_sub_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[event_sub_title]',
	array(
	'label'    => esc_html__( 'Sub Title', 'political-era' ),
	'section'  => 'section_event',
	'type'     => 'text',
	'active_callback' => 'political_callback_event',
	
	)
);

/****************************  Event Page ********************************/
$wp_customize->add_setting('theme_options[event_page]', 
	array(
	'default'           => $default['event_page'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'political_sanitize_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[event_page]', 
	array(
	'label'       => esc_html__('Select Page', 'political-era'),    
	'section'     => 'section_event',   
	'settings'    => 'theme_options[event_page]',		
	'type'        => 'dropdown-pages',
	'active_callback' => 'political_callback_event',
	)
);

/************************  Event Button  ******************/
$wp_customize->add_setting( 'theme_options[event_button]',
	array(
	'default'           => $default['event_button'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[event_button]',
	array(
	'label'    => esc_html__( 'Button Title', 'political-era' ),
	'section'  => 'section_event',
	'type'     => 'text',
	'active_callback' => 'political_callback_event',
	
	)
);
/************************  Event Button Url ******************/
$wp_customize->add_setting( 'theme_options[event_button_url]',
	array(
	'default'           => $default['event_button_url'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',	
	)
);
$wp_customize->add_control( 'theme_options[event_button_url]',
	array(
	'label'    => esc_html__( 'Button Title Link', 'political-era' ),
	'section'  => 'section_event',
	'type'     => 'text',
	'active_callback' => 'political_callback_event',
	
	)
);

/********************* Event Category. *****************************************/
$wp_customize->add_setting( 'theme_options[event_category]',
	array(
	'default'           => $default['event_category'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Political_Era_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[event_category]',
		array(
		'label'    => esc_html__( 'Select Category', 'political-era' ),
		'section'  => 'section_event',
		'settings' => 'theme_options[event_category]',
		'active_callback'   => 'political_callback_event',
		)
	)
);
/************************** Event Section Number **************************************/
$wp_customize->add_setting( 'theme_options[event_number]',
	array(
		'default'           => $default['event_number'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'political_sanitize_number_range',
		)
);
$wp_customize->add_control( 'theme_options[event_number]',
	array(
		'label'       => esc_html__( 'Select Number', 'political-era' ),
		'section'     => 'section_event',
		'type'        => 'number',
		'input_attrs' => array( 'min' => 1, 'max' => 20, 'step' => 1, 'style' => 'width: 115px;' ),
		'active_callback'   => 'political_callback_event',
	)
);