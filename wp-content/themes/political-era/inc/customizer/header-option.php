<?php
/**
 * Header Customizer
 *
 * @package Political_Era
 */
$default = political_era_get_default_theme_options();

/****************  Header Setting Section starts ************/
$wp_customize->add_section('section_header', 
	array(    
	'title'       => esc_html__('Header Setting', 'political-era'),
	'panel'       => 'theme_option_panel'    
	)
);

/********************* Enable Navigation ****************************/
$wp_customize->add_setting( 'theme_options[enable_navigation]',
    array(
        'default'           => $default['enable_navigation'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_navigation]',
    array(
        'label'    => esc_html__( 'Enable Navigation', 'political-era' ),
        'section'  => 'section_header',
        'type'     => 'checkbox',
        'priority' => 10,       
    )
);
//Header Color 
$wp_customize->add_setting('theme_options[header_bg_color]', 
    array(
        'default'           => $default['header_bg_color'],        
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[header_bg_color]',
    array(
        'label'       => esc_html__( 'Header Background Color', 'political-era' ),        
        'settings'    => 'theme_options[header_bg_color]',
        'section'     => 'section_header', 
        'active_callback' => 'political_callback_navigation',                                          
        )
    )
);

//Menu Color 
$wp_customize->add_setting('theme_options[nav_color]', 
    array(
        'default'           => $default['nav_color'],        
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[nav_color]',
    array(
        'label'       => esc_html__( 'Header Navigation Color', 'political-era' ),        
        'settings'    => 'theme_options[nav_color]',
        'section'     => 'section_header',     
        'active_callback' => 'political_callback_navigation',                                     
        )
    )
);

//Menu Color 
$wp_customize->add_setting('theme_options[nav_hover_color]', 
    array(
        'default'           => $default['nav_hover_color'],        
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[nav_hover_color]',
    array(
        'label'       => esc_html__( 'Navigation Hover Color', 'political-era' ),        
        'settings'    => 'theme_options[nav_hover_color]',
        'section'     => 'section_header',
        'active_callback' => 'political_callback_navigation',                                           
        )
    )
);


/********************* Enable Last Item ****************************/
$wp_customize->add_setting( 'theme_options[enable_header_button]',
    array(
        'default'           => $default['enable_header_button'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',
    )
);
$wp_customize->add_control( 'theme_options[enable_header_button]',
    array(
        'label'    => esc_html__( 'Enable Button', 'political-era' ),
        'section'  => 'section_header',
        'type'     => 'checkbox',            
    )
);

//Button Color 
$wp_customize->add_setting('theme_options[button_bg_color]', 
    array(
        'default'           => $default['button_bg_color'],        
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[button_bg_color]',
    array(
        'label'       => esc_html__( 'Button Color', 'political-era' ),        
        'settings'    => 'theme_options[button_bg_color]',
        'section'     => 'section_header',
        'active_callback' => 'political_header_button',                                           
        )
    )
);

//Button Hover Color 
$wp_customize->add_setting('theme_options[button_bg_hover_color]', 
    array(
        'default'           => $default['button_bg_hover_color'],        
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[button_bg_hover_color]',
    array(
        'label'       => esc_html__( 'Button Hover Color', 'political-era' ),        
        'settings'    => 'theme_options[button_bg_hover_color]',
        'section'     => 'section_header',
        'active_callback' => 'political_header_button',                                           
        )
    )
);

//Button Text Color 
$wp_customize->add_setting('theme_options[button_text_color]', 
    array(
        'default'           => $default['button_text_color'],        
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[button_text_color]',
    array(
        'label'       => esc_html__( 'Button Text Color', 'political-era' ),        
        'settings'    => 'theme_options[button_text_color]',
        'section'     => 'section_header',
        'active_callback' => 'political_header_button',                                           
        )
    )
);

//Button Text Hover Color 
$wp_customize->add_setting('theme_options[button_text_hover_color]', 
    array(
        'default'           => $default['button_text_hover_color'],        
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[button_text_hover_color]',
    array(
        'label'       => esc_html__( 'Button Text Hover Color', 'political-era' ),        
        'settings'    => 'theme_options[button_text_hover_color]',
        'section'     => 'section_header',
        'active_callback' => 'political_header_button',                                           
        )
    )
);

/************************  Button Text  ******************/
$wp_customize->add_setting( 'theme_options[button_text]',
    array(
    'default'           => $default['button_text'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',   
    )
);
$wp_customize->add_control( 'theme_options[button_text]',
    array(
    'label'    => esc_html__( 'Button Text', 'political-era' ),
    'section'  => 'section_header',
    'type'     => 'text',  
    'priority' => 30,  
    'active_callback'    => 'political_header_button',    
    )
);
// Button Url
$wp_customize->add_setting( 'theme_options[button_url]', 
    array(
    'sanitize_callback'     => 'esc_url_raw',
    )
);

$wp_customize->add_control( 'theme_options[button_url]', 
    array(
    'label'     => esc_html__('Button Url','political-era'),
    'type'      => 'url',
    'section'   => 'section_header',
    'settings'  => 'theme_options[button_url]',
    'priority' => 50, 
    'active_callback'    => 'political_header_button', 
    )
);
/********************* Enable Button Icon ****************************/
$wp_customize->add_setting( 'theme_options[enable_button_icon]',
    array(
        'default'           => $default['enable_button_icon'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_button_icon]',
    array(
        'label'    => esc_html__( 'Enable Button Icon', 'political-era' ),
        'section'  => 'section_header',
        'type'     => 'checkbox',
        'priority' => 30,  
        'active_callback'    => 'political_header_button',       
    )
);

/************************  Button Text Icon  ******************/
$wp_customize->add_setting( 'theme_options[button_icon]',
    array(
    'default'           => $default['button_icon'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',   
    )
);
$wp_customize->add_control( new Political_Era_Customize_Icons_Control( $wp_customize, 'theme_options[button_icon]',
    array(
    'label'    => esc_html__( 'Button Icon', 'political-era' ),
    'section'  => 'section_header',
    'type'     => 'political_icons',  
    'priority' => 30,  
    'active_callback'    => 'political_header_button_icon',    
    )
) ) ;


