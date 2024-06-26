<?php
/**
 * Theme Customizer
 *
 * @package Political_Era
 */
$default = political_era_get_default_theme_options();

/****************  Add Pannel   ***********************/
$wp_customize->add_panel( 'theme_option_panel',
	array(
	'title'      => esc_html__( 'Theme Options', 'political-era' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

/************************  Site Identity  ******************/
$wp_customize->add_setting('theme_options[site_identity]', 
    array(
    'default'           => $default['site_identity'],
    'sanitize_callback' => 'political_sanitize_select'
    )
);
$wp_customize->add_control('theme_options[site_identity]', 
    array(      
    'label'     => esc_html__('Choose Option', 'political-era'),
    'section'   => 'title_tagline',
    'settings'  => 'theme_options[site_identity]',
    'type'      => 'radio',
    'choices'   =>  array(
            'logo-only'     => esc_html__('Logo Only', 'political-era'),
            'logo-title'    => esc_html__('Logo + Title', 'political-era'),
            'logo-text'     => esc_html__('Logo + Tagline', 'political-era'),
            'title-only'    => esc_html__('Title Only', 'political-era'),
            'title-text'    => esc_html__('Title + Tagline', 'political-era'),
        )
    )
);

/********************* Breadcrumbs ****************************/
$wp_customize->add_setting( 'theme_options[enable_breadcrumb]',
    array(
        'default'           => $default['enable_breadcrumb'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'political_sanitize_checkbox',
    )
);
$wp_customize->add_control( 'theme_options[enable_breadcrumb]',
    array(
        'label'    => esc_html__( 'Enable Breadcrumbs', 'political-era' ),
        'section'  => 'header_image',
        'type'     => 'checkbox',
    )
);

/************************  Header Image ******************/
$wp_customize->add_setting('theme_options[header_image]', 
    array(
    'default'           => $default['header_image'],
    'sanitize_callback' => 'political_sanitize_select'
    )
);
$wp_customize->add_control('theme_options[header_image]', 
    array(      
    'label'     => esc_html__('Choose Option for Header Image', 'political-era'),
    'description'   => esc_html__('Featured Image works only in single page and single post.Header image is display if featured image is not set.', 'political-era'),
    'section'   => 'header_image',
    'settings'  => 'theme_options[header_image]',
    'type'      => 'radio',
    'choices'   =>  array(
            'none'  => esc_html__('None', 'political-era'),
            'header-image'  => esc_html__('Header Image', 'political-era'),
            'post-thumbnail'    => esc_html__('Featured Image', 'political-era'),
        )
    )
);

