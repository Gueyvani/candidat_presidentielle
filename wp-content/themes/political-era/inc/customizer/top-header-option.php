<?php
/**
 * Header Customizer
 *
 * @package Political_Era
 */
$default = political_era_get_default_theme_options();

/****************  Header Setting Section starts ************/
$wp_customize->add_section('section_top_header', 
	array(    
	'title'       => esc_html__('Top Header Setting', 'political-era'),
	'panel'       => 'theme_option_panel'    
	)
);

/********************* Enable Top Header Section ****************************/
$wp_customize->add_setting( 'theme_options[enable_top_header]',
    array(
        'default'           => $default['enable_top_header'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_top_header]',
    array(
        'label'    => esc_html__( 'Enable Top Header', 'political-era' ),
        'section'  => 'section_top_header',
        'type'     => 'checkbox',
        'priority' => 10,       
    )
);
//Top Header Background Color 
$wp_customize->add_setting('theme_options[top_header_bg_color]', 
    array(
        'default'           => $default['top_header_bg_color'],        
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[top_header_bg_color]',
    array(
        'label'       => esc_html__( 'Top Header Background Color', 'political-era' ),        
        'settings'    => 'theme_options[top_header_bg_color]',
        'section'     => 'section_top_header', 
        'active_callback'    => 'political_callback_top_header',                                 
        )
    )
);

//Top Header Color 
$wp_customize->add_setting('theme_options[top_header_color]', 
    array(
        'default'           => $default['top_header_color'],        
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[top_header_color]',
    array(
        'label'       => esc_html__( 'Top Header Text Color', 'political-era' ),        
        'settings'    => 'theme_options[top_header_color]',
        'section'     => 'section_top_header', 
        'active_callback'    => 'political_callback_top_header',                                 
        )
    )
);

/************************  Top Header Right Part  ******************/
$wp_customize->add_setting('theme_options[top_header_right]', 
	array(
	'default' 			=> $default['top_header_right'],
	'sanitize_callback' => 'political_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[top_header_right]', 
	array(		
	'label' 	=> esc_html__('Top Right Header Option', 'political-era'),
	'section' 	=> 'section_top_header',
	'settings'  => 'theme_options[top_header_right]',
	'type' 		=> 'select',
    'active_callback'    => 'political_callback_top_header',  	
	'choices' 	=>  array(
			'none' 		    => esc_html__('&mdash; Select &mdash;', 'political-era'),
			'menu' 			=> esc_html__('Menu', 'political-era'),
			'address' 		=> esc_html__('Address', 'political-era'),
			'social_media' 	=> esc_html__('Social Icon', 'political-era'),
		)
	)
);

/************************  Top Header Left Part  ******************/
$wp_customize->add_setting('theme_options[top_header_left]', 
	array(
	'default' 			=> $default['top_header_left'],
	'sanitize_callback' => 'political_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[top_header_left]', 
	array(		
	'label' 	=> esc_html__('Top Left Header Option', 'political-era'),
	'section' 	=> 'section_top_header',
	'settings'  => 'theme_options[top_header_left]',
	'type' 		=> 'select',
	'active_callback'    => 'political_callback_top_header', 
	'choices' 	=>  array(
			'none' 		=> esc_html__('&mdash; Select &mdash;', 'political-era'),
			'menu' 			=> esc_html__('Menu', 'political-era'),
			'address' 		=> esc_html__('Address', 'political-era'),
			'social_media' 	=> esc_html__('Social Icon', 'political-era'),
		)
	)
);

/************************  Header Address  ******************/
$wp_customize->add_setting( 'theme_options[header_address]',
	array(
	'default'           => $default['header_address'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_textarea_field',	
	)
);
$wp_customize->add_control( 'theme_options[header_address]',
	array(
	'label'    => esc_html__( 'Header Address', 'political-era' ),
	'section'  => 'section_top_header',
	'type'     => 'text',
	'active_callback'    => 'political_callback_top_header', 
	
	)
);

/************************  Top Header Phone Number  ******************/
$wp_customize->add_setting( 'theme_options[header_number]',
	array(
	'default'           => $default['header_number'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[header_number]',
	array(
	'label'    => esc_html__( 'Phone Number', 'political-era' ),
	'section'  => 'section_top_header',
	'type'     => 'text',
	'active_callback'    => 'political_callback_top_header', 
	
	)
);

/************************  Top Header Email  ******************/
$wp_customize->add_setting('theme_options[header_email]',  
	array(
	'default'           => $default['header_email'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_email',
	
	)
);

$wp_customize->add_control('theme_options[header_email]', 
	array(
	'label'       => esc_html__('Contact Email', 'political-era'),
	'section'     => 'section_top_header',   
	'settings'    => 'theme_options[header_email]',		
	'type'        => 'text',
	'active_callback'    => 'political_callback_top_header', 
	)
);
