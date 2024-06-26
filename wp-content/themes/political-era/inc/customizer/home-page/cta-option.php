<?php
/**
 * Home Page CTA Section Customizer
 *
 * @package Political_Era
 */
/**************** cta Section ************/
$wp_customize->add_section('section_cta', 
	array(    
	'title'       => esc_html__('CTA Setting', 'political-era'),
	'panel'       => 'front_page_panel'    
	)
);

/********************* Enable CTA Section ****************************/
$wp_customize->add_setting( 'theme_options[enable_cta]',
    array(
        'default'           => $default['enable_cta'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_cta]',
    array(
        'label'    => esc_html__( 'Enable CTA Section', 'political-era' ),
        'section'  => 'section_cta',
        'type'     => 'checkbox',    
    )
);

/************************  Sub Title  ******************/
$wp_customize->add_setting( 'theme_options[cta_sub_title]',
	array(
	'default'           => $default['cta_sub_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[cta_sub_title]',
	array(
	'label'    => esc_html__( 'Sub Title', 'political-era' ),
	'section'  => 'section_cta',
	'type'     => 'text',
	'active_callback' => 'political_callback_cta',
	
	)
);

/****************************  CTA Page ********************************/
$wp_customize->add_setting('theme_options[cta_page]', 
	array(
	'default'           => $default['cta_page'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'political_sanitize_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[cta_page]', 
	array(
	'label'       => esc_html__('Select Page', 'political-era'),    
	'section'     => 'section_cta',   
	'settings'    => 'theme_options[cta_page]',		
	'type'        => 'dropdown-pages',
	'active_callback' => 'political_callback_cta',
	)
);
$wp_customize->add_setting('theme_options[cta_image]',
    array(
    	'default'           => $default['cta_image'],
        'type' => 'theme_mod',
		'sanitize_callback'     => 'esc_url_raw',
		'sanitize_js_callback'  =>  'esc_url_raw',
        )
    );
$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'theme_options[cta_image]',
    array(
        'label'           => esc_html__( 'CTA Background Image', 'political-era' ),	              
        'section'         => 'section_cta',
        'settings'        => 'theme_options[cta_image]',
        'active_callback' => 'political_callback_cta',
    ) )
);
/************************  cta Button  ******************/
$wp_customize->add_setting( 'theme_options[cta_button]',
	array(
	'default'           => $default['cta_button'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[cta_button]',
	array(
	'label'    => esc_html__( 'Button Title', 'political-era' ),
	'section'  => 'section_cta',
	'type'     => 'text',
	'active_callback' => 'political_callback_cta',
	
	)
);
/************************  Cta Button Url ******************/
$wp_customize->add_setting( 'theme_options[cta_button_url]',
	array(
	'default'           => $default['cta_button_url'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',	
	)
);
$wp_customize->add_control( 'theme_options[cta_button_url]',
	array(
	'label'    => esc_html__( 'Button Title Link', 'political-era' ),
	'section'  => 'section_cta',
	'type'     => 'text',
	'active_callback' => 'political_callback_cta',
	
	)
);