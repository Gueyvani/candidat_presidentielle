<?php
/**
 * Blog Theme Customizer
 *
 * @package Political_Era
 */
$default = political_era_get_default_theme_options();


/****************  Blog Setting Section starts ************/
$wp_customize->add_section('section_archive', 
	array(    
	'title'       => esc_html__('Blog Setting', 'political-era'),
	'panel'       => 'theme_option_panel'    
	)
);

/********************* Enable Post Section ****************************/
$wp_customize->add_setting( 'theme_options[enable_post_meta]',
    array(
        'default'           => $default['enable_post_meta'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',
    )
);
$wp_customize->add_control( 'theme_options[enable_post_meta]',
    array(
        'label'    => esc_html__( 'Enable Post Meta', 'political-era' ),
        'section'  => 'section_archive',
        'type'     => 'checkbox',       
    )
);

/********************* Pagination Layout  ****************************/
$wp_customize->add_setting('theme_options[pagination_layout]', 
    array(
    'default'           => $default['pagination_layout'],
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'political_sanitize_select'
    )
);

$wp_customize->add_control('theme_options[pagination_layout]', 
    array(      
    'label'     => esc_html__('Pagination Options', 'political-era'),
    'section'   => 'section_archive',
    'settings'  => 'theme_options[pagination_layout]',
    'type'      => 'radio',
    'choices'   => array(       
        'default'     => esc_html__('Default', 'political-era'),                            
        'numeric'      => esc_html__('Numeric', 'political-era'),      
        ),  
    )
);