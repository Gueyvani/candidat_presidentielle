<?php
/**
 * Home Page Profile Section Customizer
 *
 * @package Political_Era
 */
/**************** profile Section ************/
$wp_customize->add_section('section_profile', 
	array(    
	'title'       => esc_html__('Profile Setting', 'political-era'),
	'panel'       => 'front_page_panel'    
	)
);

/********************* Enable Profile Section ****************************/
$wp_customize->add_setting( 'theme_options[enable_profile]',
    array(
        'default'           => $default['enable_profile'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_profile]',
    array(
        'label'    => esc_html__( 'Enable profile Section', 'political-era' ),
        'section'  => 'section_profile',
        'type'     => 'checkbox',    
    )
);

/************************  Sub Title  ******************/
$wp_customize->add_setting( 'theme_options[profile_sub_title]',
	array(
	'default'           => $default['profile_sub_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[profile_sub_title]',
	array(
	'label'    => esc_html__( 'Sub Title', 'political-era' ),
	'section'  => 'section_profile',
	'type'     => 'text',
	'active_callback' => 'political_callback_profile',
	
	)
);

/****************************  profile Page ********************************/
$wp_customize->add_setting('theme_options[profile_page]', 
	array(
	'default'           => $default['profile_page'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'political_sanitize_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[profile_page]', 
	array(
	'label'       => esc_html__('Select Page', 'political-era'),    
	'section'     => 'section_profile',   
	'settings'    => 'theme_options[profile_page]',		
	'type'        => 'dropdown-pages',
	'active_callback' => 'political_callback_profile',
	)
);
$wp_customize->add_setting('theme_options[profile_image]',
    array(
    	'default'           => $default['profile_image'],
        'type' => 'theme_mod',
		'sanitize_callback'     => 'esc_url_raw',
		'sanitize_js_callback'  =>  'esc_url_raw',
        )
    );
$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'theme_options[profile_image]',
    array(
        'label'           => esc_html__( 'Profile Background Image', 'political-era' ),	              
        'section'         => 'section_profile',
        'settings'        => 'theme_options[profile_image]',
        'active_callback' => 'political_callback_profile',
    ) )
);
/************************  profile Button  ******************/
$wp_customize->add_setting( 'theme_options[profile_button]',
	array(
	'default'           => $default['profile_button'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[profile_button]',
	array(
	'label'    => esc_html__( 'Button Title', 'political-era' ),
	'section'  => 'section_profile',
	'type'     => 'text',
	'active_callback' => 'political_callback_profile',
	
	)
);