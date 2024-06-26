<?php
/**
 * Home Page Blog Section Customizer
 *
 * @package Political_Era
 */
/**************** Blog Section ************/
$wp_customize->add_section('section_blog', 
	array(    
	'title'       => esc_html__('Blog Setting', 'political-era'),
	'panel'       => 'front_page_panel'    
	)
);

/********************* Enable Blog Section ****************************/
$wp_customize->add_setting( 'theme_options[enable_blog]',
    array(
        'default'           => $default['enable_blog'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',        
    )
);
$wp_customize->add_control( 'theme_options[enable_blog]',
    array(
        'label'    => esc_html__( 'Enable Blog Section', 'political-era' ),
        'section'  => 'section_blog',
        'type'     => 'checkbox',    
    )
);
/************************  Blog Title  ******************/
$wp_customize->add_setting( 'theme_options[blog_title]',
	array(
	'default'           => $default['blog_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[blog_title]',
	array(
	'label'    => esc_html__( 'Title', 'political-era' ),
	'section'  => 'section_blog',
	'type'     => 'text',
	'active_callback' => 'political_callback_blog',
	
	)
);

/************************  Sub Title  ******************/
$wp_customize->add_setting( 'theme_options[blog_sub_title]',
	array(
	'default'           => $default['blog_sub_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',	
	)
);
$wp_customize->add_control( 'theme_options[blog_sub_title]',
	array(
	'label'    => esc_html__( 'Sub Title', 'political-era' ),
	'section'  => 'section_blog',
	'type'     => 'text',
	'active_callback' => 'political_callback_blog',
	
	)
);

/********************* Blog Category. *****************************************/
$wp_customize->add_setting( 'theme_options[blog_category]',
	array(
	'default'           => $default['blog_category'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Political_Era_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[blog_category]',
		array(
		'label'    => esc_html__( 'Select Category', 'political-era' ),
		'section'  => 'section_blog',
		'settings' => 'theme_options[blog_category]',
		'active_callback'   => 'political_callback_blog',
		)
	)
);
/************************** Blog Section Number **************************************/
$wp_customize->add_setting( 'theme_options[blog_number]',
	array(
		'default'           => $default['blog_number'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'political_sanitize_number_range',
		)
);
$wp_customize->add_control( 'theme_options[blog_number]',
	array(
		'label'       => esc_html__( 'Select Number', 'political-era' ),
		'section'     => 'section_blog',
		'type'        => 'number',
		'input_attrs' => array( 'min' => 1, 'max' => 20, 'step' => 1, 'style' => 'width: 115px;' ),
		'active_callback'   => 'political_callback_blog',
	)
);