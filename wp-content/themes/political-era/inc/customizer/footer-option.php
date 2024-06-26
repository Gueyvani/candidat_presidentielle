<?php
/**
 * Footer Section Customizer
 *
 * @package Political_Era
 */
$default = political_era_get_default_theme_options();

/****************  Sldier Setting ************/
$wp_customize->add_section('section_footer', 
	array(    
	'title'       => esc_html__('Footer Setting', 'political-era'),
	'panel'       => 'theme_option_panel'    
	)
);
/********************* Enable Top Footer ****************************/
$wp_customize->add_setting( 'theme_options[enable_top_footer]',
    array(
        'default'           => $default['enable_top_footer'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',
    )
);
$wp_customize->add_control( 'theme_options[enable_top_footer]',
    array(
        'label'    => esc_html__( 'Enable Top Footer', 'political-era' ),
        'section'  => 'section_footer',
        'type'     => 'checkbox',          
    )
);

$wp_customize->add_setting('theme_options[footer_bg_image]',
    array(
    	'default'           => $default['footer_bg_image'],
        'type' => 'theme_mod',
		'sanitize_callback'     => 'esc_url_raw',
		'sanitize_js_callback'  =>  'esc_url_raw',
        )
    );
$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'theme_options[footer_bg_image]',
    array(
        'label'           => esc_html__( 'Footer Background Image', 'political-era' ),	              
        'section'         => 'section_footer',
        'settings'        => 'theme_options[footer_bg_image]',
        'active_callback' => 'political_callback_footer',
    ) )
);
$wp_customize->add_setting('theme_options[footer_image]',
    array(
    	'default'           => $default['footer_image'],
        'type' => 'theme_mod',
		'sanitize_callback'     => 'esc_url_raw',
		'sanitize_js_callback'  =>  'esc_url_raw',
        )
    );
$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'theme_options[footer_image]',
    array(
        'label'           => esc_html__( 'Footer Aside Image', 'political-era' ),	              
        'section'         => 'section_footer',
        'settings'        => 'theme_options[footer_image]',
        'active_callback' => 'political_callback_footer',
    ) )
);

//Footer Color 
$wp_customize->add_setting('theme_options[footer_bg_color]', 
    array(
        'default'           => $default['footer_bg_color'],        
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[footer_bg_color]',
    array(
        'label'       => esc_html__( 'Footer Background Color', 'political-era' ),        
        'settings'    => 'theme_options[footer_bg_color]',
        'section'     => 'section_footer',                                          
        )
    )
);
//Footer Text Color 
$wp_customize->add_setting('theme_options[footer_text_color]', 
    array(
        'default'           => $default['footer_text_color'],        
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme_options[footer_text_color]',
    array(
        'label'       => esc_html__( 'Footer Text Color', 'political-era' ),        
        'settings'    => 'theme_options[footer_text_color]',
        'section'     => 'section_footer',                                          
        )
    )
);

/*************** Setting copyright text. *****************************/
$wp_customize->add_setting( 'theme_options[copyright_text]',
    array(
    'default'           => $default['copyright_text'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'theme_options[copyright_text]',
    array(
    'label'    => esc_html__( 'Copyright Text', 'political-era' ),
    'section'  => 'section_footer',
    'type'     => 'text',
    )
);

/********************* Enable Scroll to Top ****************************/
$wp_customize->add_setting( 'theme_options[enable_scrollto_top]',
    array(
        'default'           => $default['enable_scrollto_top'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',
    )
);
$wp_customize->add_control( 'theme_options[enable_scrollto_top]',
    array(
        'label'    => esc_html__( 'Enable Back to Top', 'political-era' ),
        'section'  => 'section_footer',
        'type'     => 'checkbox',          
    )
);

/************************  Scroll To Top Icon  ******************/
$wp_customize->add_setting( 'theme_options[scroll_to_top_icon]',
    array(
    'default'           => $default['scroll_to_top_icon'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',   
    )
);
$wp_customize->add_control( new Political_Era_Customize_Icons_Control( $wp_customize, 'theme_options[scroll_to_top_icon]',
    array(
    'label'    => esc_html__( 'Scroll To Top Icon', 'political-era' ),
    'section'  => 'section_footer',
    'type'     => 'political_icons',  
    'priority' => 30,  
    'active_callback'    => 'political_callback_scrolltotop',    
    )
) ) ;