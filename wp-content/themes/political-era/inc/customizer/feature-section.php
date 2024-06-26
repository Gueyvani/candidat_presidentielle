<?php
/**
 * Feature Section Customizer
 *
 * @package Political_Era
 */
$default = political_era_get_default_theme_options();

/****************  Sldier Setting ************/
$wp_customize->add_section('section_feature', 
	array(    
	'title'       => esc_html__('Information Setting', 'political-era'),
	'panel'       => 'theme_option_panel'    
	)
);
/********************* Enable Info Section ****************************/
$wp_customize->add_setting( 'theme_options[enable_info]',
    array(
        'default'           => $default['enable_info'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_info]',
    array(
        'label'    => esc_html__( 'Enable Information', 'political-era' ),
        'section'  => 'section_feature',
        'type'     => 'checkbox',    
    )
);

/********************* show slideshow only on home page  ****************************/
$wp_customize->add_setting( 'theme_options[enable_info_home]',
    array(
        'default'           => $default['enable_info_home'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_info_home]',
    array(
        'label'    => esc_html__( 'Show Information only on home page?', 'political-era' ),
        'section'  => 'section_feature',
        'type'     => 'checkbox',    
    )
);
$wp_customize->add_setting('theme_options[information_bg_image]',
    array(
        'default'           => $default['information_bg_image'],
        'type' => 'theme_mod',
        'sanitize_callback'     => 'esc_url_raw',
        'sanitize_js_callback'  =>  'esc_url_raw',
        )
    );
$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'theme_options[information_bg_image]',
    array(
        'label'           => esc_html__( 'Information Background Image', 'political-era' ),                
        'section'         => 'section_feature',
        'settings'        => 'theme_options[information_bg_image]',
        'active_callback' => 'political_callback_info',
    ) )
);
/******************** Adress Section **************************************/
$wp_customize->add_setting( 'theme_options[info_secton]', array(
    'sanitize_callback' => 'political_sanitize_repeater',
    'default' => json_encode(
        array(
            array(
                'enable_info_icon' => true,
                'info_icon'     => '',
                'info'  => '',
                'info_url'      => '',
            )
        )
    )
));

$wp_customize->add_control(  new Political_Era_Repeater_Controler( $wp_customize, 'theme_options[info_secton]', 
    array(
        'label'             => esc_html__('Information Options','political-era'),
        'section'           => 'section_feature',
        'box_label'         => esc_html__('Information','political-era'),
        'box_add_control'   => esc_html__('Add Information','political-era'), 
        'active_callback'   => 'political_callback_info',
    ),
    array(
        'enable_info_icon' => array(
        'type'        => 'checkbox',
        'label'       => esc_html__( 'Enable Icon', 'political-era' ), 
        'default'     => true,               
        ),

        'info_icon' => array(
        'type'        => 'icon',
        'label'       => esc_html__( 'Icon', 'political-era' ), 
        'default'     => '',               
        ),          
           
        'info' => array(
        'type'        => 'text',
        'label'       => esc_html__( 'Information', 'political-era' ),
        'default'     => '',		       
    	),

        'info_url'  => array(
        'type'        => 'text',
        'label'       => esc_html__( 'Information Url', 'political-era' ),
        'default'     => '',               
        ),                
    )
));