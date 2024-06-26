<?php
/**
 * Home Page Video Section Customizer
 *
 * @package Political_Era
 */
/**************** Video Section ************/
$wp_customize->add_section('section_video', 
	array(    
	'title'       => esc_html__('Video Setting', 'political-era'),
	'panel'       => 'front_page_panel'    
	)
);
/********************* Enable Video Section ****************************/
$wp_customize->add_setting( 'theme_options[enable_video]',
    array(
        'default'           => $default['enable_video'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_video]',
    array(
        'label'    => esc_html__( 'Enable Video Section', 'political-era' ),
        'section'  => 'section_video',
        'type'     => 'checkbox',    
    )
);
/************************  Video Title  ******************/
$wp_customize->add_setting( 'theme_options[video_title]',
	array(
	'default'           => $default['video_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[video_title]',
	array(
	'label'    => esc_html__( 'Video Title', 'political-era' ),
	'section'  => 'section_video',
	'type'     => 'text',
	'active_callback' => 'political_callback_video',
	
	)
);

/************************  Sub Title  ******************/
$wp_customize->add_setting( 'theme_options[video_sub_title]',
	array(
	'default'           => $default['video_sub_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[video_sub_title]',
	array(
	'label'    => esc_html__( 'Sub Title', 'political-era' ),
	'section'  => 'section_video',
	'type'     => 'text',
	'active_callback' => 'political_callback_video',
	
	)
);
$wp_customize->add_setting('theme_options[video_image]',
    array(
    	'default'           => $default['video_image'],
        'type' => 'theme_mod',
		'sanitize_callback'     => 'esc_url_raw',
		'sanitize_js_callback'  =>  'esc_url_raw',
        )
    );
$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'theme_options[video_image]',
    array(
        'label'           => esc_html__( 'Video Image', 'political-era' ),	              
        'section'         => 'section_video',
        'settings'        => 'theme_options[video_image]',
        'active_callback' => 'political_callback_video',
    ) )
);
/************************  Video Url ******************/
$wp_customize->add_setting( 'theme_options[video_url]',
	array(
	'default'           => $default['video_url'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',	
	)
);
$wp_customize->add_control( 'theme_options[video_url]',
	array(
	'label'    => esc_html__( 'Video Url Link', 'political-era' ),
	'section'  => 'section_video',
	'type'     => 'text',
	'active_callback' => 'political_callback_video',
	
	)
);

/************************  Video Button  ******************/
$wp_customize->add_setting( 'theme_options[video_button]',
	array(
	'default'           => $default['video_button'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[video_button]',
	array(
	'label'    => esc_html__( 'Button Title', 'political-era' ),
	'section'  => 'section_video',
	'type'     => 'text',
	'active_callback' => 'political_callback_video',
	
	)
);
/************************  Video Button Url ******************/
$wp_customize->add_setting( 'theme_options[video_button_url]',
	array(
	'default'           => $default['video_button_url'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',	
	)
);
$wp_customize->add_control( 'theme_options[video_button_url]',
	array(
	'label'    => esc_html__( 'Button Title Link', 'political-era' ),
	'section'  => 'section_video',
	'type'     => 'text',
	'active_callback' => 'political_callback_video',
	
	)
);