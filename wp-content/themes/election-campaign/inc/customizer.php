<?php
/**
 * Election Campaign Theme Customizer
 * @package Election Campaign
 */

load_template( trailingslashit( get_template_directory() ) . '/inc/logo-sizer.php' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function election_campaign_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/custom-control.php' );
	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_setting( 'election_campaign_logo_sizer',array(
		'default' => 50,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_logo_sizer',array(
		'label' => esc_html__( 'Logo Sizer','election-campaign' ),
		'section' => 'title_tagline',
		'priority'    => 9,
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	))); 

	$wp_customize->add_setting('election_campaign_site_title_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
	));
	$wp_customize->add_control('election_campaign_site_title_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Site Title','election-campaign'),
		'section' => 'title_tagline'
	));

 	$wp_customize->add_setting('election_campaign_site_title_font_size',array(
		'default'=> 25,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_site_title_font_size',array(
		'label' => esc_html__( 'Site Title Font Size (px)','election-campaign' ),
		'section'=> 'title_tagline',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
      ),
	))); 

	// site title color
   $wp_customize->add_setting('election_campaign_site_title_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_site_title_color', array(
		'label'    => __('Site Title Color', 'election-campaign'),
		'section'  => 'title_tagline',
		'settings' => 'election_campaign_site_title_color',
	)));

   $wp_customize->add_setting('election_campaign_site_tagline_enable',array(
      'default' => false,
      'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_site_tagline_enable',array(
      'type' => 'checkbox',
      'label' => __('Enable / Disable Site Tagline','election-campaign'),
      'section' => 'title_tagline'
   ));

   $wp_customize->add_setting('election_campaign_site_tagline_font_size',array(
		'default'=> 13,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_site_tagline_font_size',array(
		'label' => esc_html__( 'Site Tagline Font Size (px)','election-campaign' ),
		'section'=> 'title_tagline',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	// site tagline color
	$wp_customize->add_setting('election_campaign_site_tagline_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_site_tagline_color', array(
		'label'    => __('Site Tagline Color', 'election-campaign'),
		'section'  => 'title_tagline',
		'settings' => 'election_campaign_site_tagline_color',
	)));

    $wp_customize->add_setting('election_campaign_site_logo_inline',array(
       'default' => false,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
    ));
    $wp_customize->add_control('election_campaign_site_logo_inline',array(
       'type' => 'checkbox',
       'label' => __('Site logo inline with site title','election-campaign'),
       'section' => 'title_tagline',
    ));

    $wp_customize->add_setting('election_campaign_background_skin',array(
        'default' => 'Without Background',
        'sanitize_callback' => 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control('election_campaign_background_skin',array(
        'type' => 'radio',
        'label' => __('Background Skin','election-campaign'),
        'description' => __('Here you can add the background skin along with the background image.','election-campaign'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background Skin','election-campaign'),
            'Without Background' => __('Without Background Skin','election-campaign'),
        ),
	) );

	//Important Links
	$wp_customize->add_section( 'election_campaign_important_links' , array(
    	'title' => esc_html__( 'Important Links', 'election-campaign' ),
    	'priority' => 10,
	) );

	$wp_customize->add_setting('election_campaign_doc_link',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_doc_link',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_FREE_DOC) ." '>". esc_html('Documentation','election-campaign') ."</a>",
		'section'=> 'election_campaign_important_links'
	));

	$wp_customize->add_setting('election_campaign_demo_links',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_demo_links',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_LIVE_DEMO) ." '>". esc_html('Demo','election-campaign') ."</a>",
		'section'=> 'election_campaign_important_links'
	));

	$wp_customize->add_setting('election_campaign_forum_links',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_forum_links',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_FREE_SUPPORT) ." '>". esc_html('Support Forum','election-campaign') ."</a>",
		'section'=> 'election_campaign_important_links'
	));

	//add home page setting pannel
	$wp_customize->add_panel( 'election_campaign_panel_id', array(
	    'priority' => 11,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'election-campaign' ),
	    'description' => __( 'Description of what this panel does.', 'election-campaign' ),
	) );

	$election_campaign_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One',
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower',
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit',
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two',
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda',
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli',
		'Marck Script'           => 'Marck Script',
		'Noto Serif'             => 'Noto Serif',
		'Open Sans'              => 'Open Sans',
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen',
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display',
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik',
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo',
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn',
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	//Typography
	$wp_customize->add_section('election_campaign_typography', array(
		'title'    => __('Typography', 'election-campaign'),
		'panel'    => 'election_campaign_panel_id',
	));

	$wp_customize->add_setting('election_campaign_typography_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_typography_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','election-campaign') ."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign') ."</a>",
		'section'=> 'election_campaign_typography'
	));

	//This is body FontFamily picker setting
	$wp_customize->add_setting('election_campaign_body_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_body_color', array(
		'label'    => __('Body Color', 'election-campaign'),
		'section'  => 'election_campaign_typography',
		'settings' => 'election_campaign_body_color',
	)));

	$wp_customize->add_setting('election_campaign_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	));
	$wp_customize->add_control(	'election_campaign_body_font_family', array(
		'section' => 'election_campaign_typography',
		'label'   => __('Body Fonts', 'election-campaign'),
		'type'    => 'select',
		'choices' => $election_campaign_font_array,
	));

	$wp_customize->add_setting('election_campaign_body_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('election_campaign_body_font_size', array(
		'label'   => __('Body Font Size', 'election-campaign'),
		'section' => 'election_campaign_typography',
		'setting' => 'election_campaign_body_font_size',
		'type'    => 'text',
	));

	// This is Paragraph Color picker setting
	$wp_customize->add_setting('election_campaign_paragraph_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_paragraph_color', array(
		'label'    => __('Paragraph Color', 'election-campaign'),
		'section'  => 'election_campaign_typography',
		'settings' => 'election_campaign_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('election_campaign_paragraph_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	));
	$wp_customize->add_control(	'election_campaign_paragraph_font_family', array(
		'section' => 'election_campaign_typography',
		'label'   => __('Paragraph Fonts', 'election-campaign'),
		'type'    => 'select',
		'choices' => $election_campaign_font_array,
	));

	$wp_customize->add_setting('election_campaign_paragraph_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('election_campaign_paragraph_font_size', array(
		'label'   => __('Paragraph Font Size', 'election-campaign'),
		'section' => 'election_campaign_typography',
		'setting' => 'election_campaign_paragraph_font_size',
		'type'    => 'text',
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('election_campaign_atag_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_atag_color', array(
		'label'    => __('"a" Tag Color', 'election-campaign'),
		'section'  => 'election_campaign_typography',
		'settings' => 'election_campaign_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('election_campaign_atag_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	));
	$wp_customize->add_control(	'election_campaign_atag_font_family', array(
		'section' => 'election_campaign_typography',
		'label'   => __('"a" Tag Fonts', 'election-campaign'),
		'type'    => 'select',
		'choices' => $election_campaign_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('election_campaign_li_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_li_color', array(
		'label'    => __('"li" Tag Color', 'election-campaign'),
		'section'  => 'election_campaign_typography',
		'settings' => 'election_campaign_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('election_campaign_li_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	));
	$wp_customize->add_control(	'election_campaign_li_font_family', array(
		'section' => 'election_campaign_typography',
		'label'   => __('"li" Tag Fonts', 'election-campaign'),
		'type'    => 'select',
		'choices' => $election_campaign_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting('election_campaign_h1_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_h1_color', array(
		'label'    => __('H1 Color', 'election-campaign'),
		'section'  => 'election_campaign_typography',
		'settings' => 'election_campaign_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('election_campaign_h1_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	));
	$wp_customize->add_control('election_campaign_h1_font_family', array(
		'section' => 'election_campaign_typography',
		'label'   => __('H1 Fonts', 'election-campaign'),
		'type'    => 'select',
		'choices' => $election_campaign_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('election_campaign_h1_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('election_campaign_h1_font_size', array(
		'label'   => __('H1 Font Size', 'election-campaign'),
		'section' => 'election_campaign_typography',
		'setting' => 'election_campaign_h1_font_size',
		'type'    => 'text',
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting('election_campaign_h2_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_h2_color', array(
		'label'    => __('h2 Color', 'election-campaign'),
		'section'  => 'election_campaign_typography',
		'settings' => 'election_campaign_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('election_campaign_h2_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	));
	$wp_customize->add_control(
	'election_campaign_h2_font_family', array(
		'section' => 'election_campaign_typography',
		'label'   => __('h2 Fonts', 'election-campaign'),
		'type'    => 'select',
		'choices' => $election_campaign_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('election_campaign_h2_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('election_campaign_h2_font_size', array(
		'label'   => __('H2 Font Size', 'election-campaign'),
		'section' => 'election_campaign_typography',
		'setting' => 'election_campaign_h2_font_size',
		'type'    => 'text',
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting('election_campaign_h3_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_h3_color', array(
		'label'    => __('H3 Color', 'election-campaign'),
		'section'  => 'election_campaign_typography',
		'settings' => 'election_campaign_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('election_campaign_h3_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	));
	$wp_customize->add_control(
	'election_campaign_h3_font_family', array(
		'section' => 'election_campaign_typography',
		'label'   => __('H3 Fonts', 'election-campaign'),
		'type'    => 'select',
		'choices' => $election_campaign_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('election_campaign_h3_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('election_campaign_h3_font_size', array(
		'label'   => __('H3 Font Size', 'election-campaign'),
		'section' => 'election_campaign_typography',
		'setting' => 'election_campaign_h3_font_size',
		'type'    => 'text',
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting('election_campaign_h4_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_h4_color', array(
		'label'    => __('H4 Color', 'election-campaign'),
		'section'  => 'election_campaign_typography',
		'settings' => 'election_campaign_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('election_campaign_h4_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	));
	$wp_customize->add_control('election_campaign_h4_font_family', array(
		'section' => 'election_campaign_typography',
		'label'   => __('H4 Fonts', 'election-campaign'),
		'type'    => 'select',
		'choices' => $election_campaign_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('election_campaign_h4_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('election_campaign_h4_font_size', array(
		'label'   => __('H4 Font Size', 'election-campaign'),
		'section' => 'election_campaign_typography',
		'setting' => 'election_campaign_h4_font_size',
		'type'    => 'text',
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting('election_campaign_h5_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_h5_color', array(
		'label'    => __('H5 Color', 'election-campaign'),
		'section'  => 'election_campaign_typography',
		'settings' => 'election_campaign_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('election_campaign_h5_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	));
	$wp_customize->add_control('election_campaign_h5_font_family', array(
		'section' => 'election_campaign_typography',
		'label'   => __('H5 Fonts', 'election-campaign'),
		'type'    => 'select',
		'choices' => $election_campaign_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('election_campaign_h5_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('election_campaign_h5_font_size', array(
		'label'   => __('H5 Font Size', 'election-campaign'),
		'section' => 'election_campaign_typography',
		'setting' => 'election_campaign_h5_font_size',
		'type'    => 'text',
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting('election_campaign_h6_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_h6_color', array(
		'label'    => __('H6 Color', 'election-campaign'),
		'section'  => 'election_campaign_typography',
		'settings' => 'election_campaign_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('election_campaign_h6_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	));
	$wp_customize->add_control('election_campaign_h6_font_family', array(
		'section' => 'election_campaign_typography',
		'label'   => __('H6 Fonts', 'election-campaign'),
		'type'    => 'select',
		'choices' => $election_campaign_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('election_campaign_h6_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('election_campaign_h6_font_size', array(
		'label'   => __('H6 Font Size', 'election-campaign'),
		'section' => 'election_campaign_typography',
		'setting' => 'election_campaign_h6_font_size',
		'type'    => 'text',
	));

 	//Header Section
	$wp_customize->add_section('election_campaign_header_section',array(
		'title'	=> __('Header','election-campaign'),
		'description'	=> __('Add Header here','election-campaign'),
		'priority'	=> null,
		'panel' => 'election_campaign_panel_id',
	));

	$wp_customize->add_setting('election_campaign_header_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_header_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','election-campaign') ."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign') ."</a>",
		'section'=> 'election_campaign_header_section'
	));

	$wp_customize->add_setting('election_campaign_show_header',array(
       'default' => false,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));

   $wp_customize->add_control('election_campaign_show_header',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Header','election-campaign'),
       'section' => 'election_campaign_header_section'
   ));

	$wp_customize->add_setting('election_campaign_location_address_icon',array(
		'default'	=> 'fas fa-map-marker-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_location_address_icon',array(
		'label'	=> __('Location Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_header_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('election_campaign_location',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_location',array(
		'label'	=> __('Enter Location','election-campaign'),
		'section'	=> 'election_campaign_header_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('election_campaign_timing_icon',array(
		'default'	=> 'far fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_timing_icon',array(
		'label'	=> __('Time Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_header_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('election_campaign_enter_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_enter_time',array(
		'label'	=> __('Enter Time','election-campaign'),
		'section'	=> 'election_campaign_header_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('election_campaign_topbar_btn_icon',array(
		'default'	=> 'fas fa-university',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_topbar_btn_icon',array(
		'label'	=> __('Button Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_header_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('election_campaign_topbar_btn_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_topbar_btn_text',array(
		'label'	=> __('Add Button Text','election-campaign'),
		'input_attrs' => array(
         'placeholder' => __( 'FREE EVALUATION', 'election-campaign' ),
      ),
		'section'	=> 'election_campaign_header_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('election_campaign_topbar_btn_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('election_campaign_topbar_btn_url',array(
		'label'	=> esc_html__('Add Link','election-campaign'),
		'input_attrs' => array(
       	'placeholder' => __( 'eg. example.com', 'election-campaign' ),
      ),
		'section'=> 'election_campaign_header_section',
		'type'=> 'url'
	));

	$wp_customize->add_setting('election_campaign_display_search',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));

   $wp_customize->add_control('election_campaign_display_search',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Search','election-campaign'),
       'section' => 'election_campaign_header_section'
   ));

	$wp_customize->add_setting('election_campaign_sidebar_btn_icon',array(
		'default'	=> 'fas fa-address-card',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_sidebar_btn_icon',array(
		'label'	=> __('Header Sidebar Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_header_section',
		'type'		=> 'icon'
	)));

 	//Menu Section
	$wp_customize->add_section('election_campaign_menu_section',array(
		'title'	=> __('Menu Settings','election-campaign'),
		'priority'	=> null,
		'panel' => 'election_campaign_panel_id',
	));

	$wp_customize->add_setting('election_campaign_menus_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_menus_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','election-campaign') ."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign') ."</a>",
		'section'=> 'election_campaign_menu_section'
	));

	$wp_customize->add_setting('election_campaign_menu_font_size_option',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize,'election_campaign_menu_font_size_option',array(
		'label'	=> __('Menu Font Size','election-campaign'),
		'section'=> 'election_campaign_menu_section',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
     	),
	)));

	$wp_customize->add_setting('election_campaign_menu_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize,'election_campaign_menu_padding',array(
		'label'	=> __('Main Menu Padding','election-campaign'),
		'section'=> 'election_campaign_menu_section',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
      ),
	)));

	$wp_customize->add_setting('election_campaign_font_weight_option_menu',array(
		'default' => '600',
		'sanitize_callback' => 'election_campaign_sanitize_choices'
 	));
 	$wp_customize->add_control('election_campaign_font_weight_option_menu',array(
		'type' => 'select',
		'label' => __('Menu Font Weight','election-campaign'),
		'section' => 'election_campaign_menu_section',
		'choices' => array(
		   '100' => __('100','election-campaign'),
         '200' => __('200','election-campaign'),
         '300' => __('300','election-campaign'),
         '400' => __('400','election-campaign'),
         '500' => __('500','election-campaign'),
         '600' => __('600','election-campaign'),
         '700' => __('700','election-campaign'),
         '800' => __('800','election-campaign'),
         '900' => __('900','election-campaign'),
		),
	) );

	$wp_customize->add_setting('election_campaign_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_menu_color', array(
		'label'    => __('Menu Color', 'election-campaign'),
		'section'  => 'election_campaign_menu_section',
		'settings' => 'election_campaign_menu_color',
	)));

	$wp_customize->add_setting('election_campaign_sub_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_sub_menu_color', array(
		'label'    => __('Submenu Color', 'election-campaign'),
		'section'  => 'election_campaign_menu_section',
		'settings' => 'election_campaign_sub_menu_color',
	)));

	$wp_customize->add_setting('election_campaign_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_menu_hover_color', array(
		'label'    => __('Menu Hover Color', 'election-campaign'),
		'section'  => 'election_campaign_menu_section',
		'settings' => 'election_campaign_menu_hover_color',
	)));

	$wp_customize->add_setting('election_campaign_sub_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_sub_menu_hover_color', array(
		'label'    => __('Submenu Hover Color', 'election-campaign'),
		'section'  => 'election_campaign_menu_section',
		'settings' => 'election_campaign_sub_menu_hover_color',
	)));

	//Slider Section

	$wp_customize->add_section( 'election_campaign_slider_section' , array(
    	'title'      => __( 'Slider Section', 'election-campaign' ),
		'priority'   => null,
		'panel' => 'election_campaign_panel_id'
	) );

	$wp_customize->add_setting('election_campaign_slider_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_slider_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('You can change how many slides there are.','election-campaign') ."</li><li>". esc_html('You can change the font family and the colours of headings and subheadings.','election-campaign') ."</li><li>". esc_html('And so on...','election-campaign') ."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign') ."</a>",
		'section'=> 'election_campaign_slider_section'
	));

	$wp_customize->add_setting('election_campaign_slider_hide',array(
		'default' => false,
		'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
	));
	$wp_customize->add_control('election_campaign_slider_hide',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable slider','election-campaign'),
		'section' => 'election_campaign_slider_section',
	));

  for ( $election_campaign_count = 1; $election_campaign_count <= 3; $election_campaign_count++ ) {

   // Add color scheme setting and control.
 	  	$wp_customize->add_setting( 'election_campaign_slider_page' . $election_campaign_count, array(
 	      'default'           => '',
 	      'sanitize_callback' => 'election_campaign_sanitize_dropdown_pages'
 	  	) );
 	  	$wp_customize->add_control( 'election_campaign_slider_page' . $election_campaign_count, array(
 	      'label'    => __( 'Select Slide Image Page', 'election-campaign' ),
 	      'section'  => 'election_campaign_slider_section',
 	      'type'     => 'dropdown-pages'
 	  	) );
 	}

 	$wp_customize->add_setting('election_campaign_slider_heading',array(
		'default' => true,
		'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
	));
	$wp_customize->add_control('election_campaign_slider_heading',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Slider Heading','election-campaign'),
		'section' => 'election_campaign_slider_section'
	));

 	$wp_customize->add_setting('election_campaign_slider_text',array(
    'default' => true,
    'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_slider_text',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Slider Text','election-campaign'),
       'section' => 'election_campaign_slider_section'
   ));

 	$wp_customize->add_setting('election_campaign_show_slider_button',array(
	 'default' => true,
	 'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
	));
	$wp_customize->add_control('election_campaign_show_slider_button',array(
	 'type' => 'checkbox',
	 'label' => __('Enable / Disable Slider Button','election-campaign'),
	 'section' => 'election_campaign_slider_section'
	));

	$wp_customize->add_setting('election_campaign_slider_btn_icon',array(
		'default'	=> 'fas fa-university',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_slider_btn_icon',array(
		'label'	=> __('Slider Button Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_slider_section',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting('election_campaign_slider_button_text',array(
		'default'	=> __('Read More','election-campaign'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_slider_button_text',array(
		'label'	=> __('Slider Button Text','election-campaign'),
		'section'	=> 'election_campaign_slider_section',
		'type'		=> 'text'
	));

 	$wp_customize->add_setting('election_campaign_slider_button_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('election_campaign_slider_button_link',array(
		'label'	=> esc_html__('Add Button Link','election-campaign'),
		'section'=> 'election_campaign_slider_section',
		'type'=> 'url'
	));

 	$wp_customize->add_setting('election_campaign_slider_btn_bg_color', array(
		'default'           => '#163D80',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_slider_btn_bg_color', array(
		'label'    => __('Slider Button Background Color', 'election-campaign'),
		'section'  => 'election_campaign_slider_section',
	)));

 	$wp_customize->add_setting('election_campaign_slider_btn_iconbg_color', array(
		'default'           => '#CF2E2E',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_slider_btn_iconbg_color', array(
		'label'    => __('Button Icon Background Color', 'election-campaign'),
		'section'  => 'election_campaign_slider_section',
	)));

  	//Slider excerpt
	$wp_customize->add_setting( 'election_campaign_slider_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'election_campaign_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Content Limit','election-campaign' ),
		'section'     => 'election_campaign_slider_section',
		'type'        => 'number',
		'settings'    => 'election_campaign_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'election_campaign_slider_excerpt_suffix', array(
		'default'   => __('...','election-campaign'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'election_campaign_slider_excerpt_suffix', array(
		'label'       => esc_html__( 'Slider Content Suffix','election-campaign' ),
		'section'     => 'election_campaign_slider_section',
		'type'        => 'text',
		'settings'    => 'election_campaign_slider_excerpt_suffix',
	) );

   //Opacity
  	$wp_customize->add_setting('election_campaign_slider_opacity',array(
      'default'              => '',
      'sanitize_callback' => 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control( 'election_campaign_slider_opacity', array(
		'label'       => esc_html__( 'Slider Image Opacity','election-campaign' ),
		'section'     => 'election_campaign_slider_section',
		'type'        => 'select',
		'settings'    => 'election_campaign_slider_opacity',
		'choices' => array(
			'0' =>  esc_attr('0','election-campaign'),
			'0.1' =>  esc_attr('0.1','election-campaign'),
			'0.2' =>  esc_attr('0.2','election-campaign'),
			'0.3' =>  esc_attr('0.3','election-campaign'),
			'0.4' =>  esc_attr('0.4','election-campaign'),
			'0.5' =>  esc_attr('0.5','election-campaign'),
			'0.6' =>  esc_attr('0.6','election-campaign'),
			'0.7' =>  esc_attr('0.7','election-campaign'),
			'0.8' =>  esc_attr('0.8','election-campaign'),
			'0.9' =>  esc_attr('0.9','election-campaign')
		),
	));

	$wp_customize->add_setting('election_campaign_enable_slider_overlay',array(
   'default' => true,
   'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_enable_slider_overlay',array(
      'type' => 'checkbox',
      'label' => __('Enable / Disable Slider Image Overlay','election-campaign'),
      'section' => 'election_campaign_slider_section'
   ));

   $wp_customize->add_setting('election_campaign_slider_overlay_color', array(
	'default'           => '',
	'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_slider_overlay_color', array(
		'label'    => __('Slider Image Overlay Color', 'election-campaign'),
		'section'  => 'election_campaign_slider_section',
		'settings' => 'election_campaign_slider_overlay_color',
	)));

	//Service Section
  	$wp_customize->add_section('election_campaign_portfolio_section',array(
		'title' => __('Service Section','election-campaign'),
		'description' => '',
		'priority'  => null,
		'panel' => 'election_campaign_panel_id',
	));

	$wp_customize->add_setting('election_campaign_portfolio_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_portfolio_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('Includes settings to set section title.','election-campaign')."</li><li>". esc_html('Contains settings for the background colour.','election-campaign')."</li><li>". esc_html('Contains options for background images.','election-campaign')."</li><li>". esc_html('You can change the font family and colours of heading.','election-campaign')."</li><li>". esc_html('And so on...','election-campaign')."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign')."</a>",
		'section'=> 'election_campaign_portfolio_section'
	));

	$wp_customize->add_setting('election_campaign_section_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_section_text',array(
		'label'	=> __('Add Section Text','election-campaign'),
		'input_attrs' => array(
            'placeholder' => __( 'MISSION AND VISION', 'election-campaign' ),
        ),
		'section'=> 'election_campaign_portfolio_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('election_campaign_section_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_section_title',array(
		'label'	=> __('Add Section Title','election-campaign'),
		'input_attrs' => array(
            'placeholder' => __( 'How we can build a better country together!', 'election-campaign' ),
        ),
		'section'=> 'election_campaign_portfolio_section',
		'type'=> 'text'
	));

	$categories = get_categories();
	$cat_post = array();
	$cat_post[]= 'select';
	$i = 0;	
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('election_campaign_our_services',array(
		'default'	=> 'select',
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	));
	$wp_customize->add_control('election_campaign_our_services',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to Display Services','election-campaign'),
		'description' => __('Image Size (370 x 370)','election-campaign'),
		'section' => 'election_campaign_portfolio_section',
	));

	$wp_customize->add_setting( 'election_campaign_practice_excerpt_number', array(
		'default'              => 10,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'election_campaign_sanitize_number_range'
	) );
	$wp_customize->add_control( 'election_campaign_practice_excerpt_number', array(
		'label'       => esc_html__( 'Service Excerpt length','election-campaign' ),
		'section'     => 'election_campaign_portfolio_section',
		'type'        => 'range',
		'settings'    => 'election_campaign_practice_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('election_campaign_practice_button_text',array(
		'default'=> 'Read More',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_practice_button_text',array(
		'label'	=> __('Add Service Button Text','election-campaign'),
		'section'=> 'election_campaign_portfolio_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('election_campaign_our_practice_button_icon',array(
		'default'	=> 'fas fa-long-arrow-alt-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_our_practice_button_icon',array(
		'label'	=> __('Add Service Button Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_portfolio_section',
		'setting'	=> 'election_campaign_our_practice_button_icon',
		'type'		=> 'icon'
	)));

	//layout setting
	$wp_customize->add_section( 'election_campaign_option', array(
    	'title'      => __( 'Layout Settings', 'election-campaign' ),
    	'panel'    => 'election_campaign_panel_id',
	) );

	$wp_customize->add_setting('election_campaign_layout_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_layout_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','election-campaign') ."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign') ."</a>",
		'section'=> 'election_campaign_option'
	));

	$wp_customize->add_setting( 'election_campaign_single_page_breadcrumb',array(
	    'default' => false,
    	'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
  	) );
	$wp_customize->add_control('election_campaign_single_page_breadcrumb',array(
	    	'type' => 'checkbox',
	       'label' => __( 'Show / Hide Single Page Breadcrumb','election-campaign' ),
	       'section' => 'election_campaign_option'
	));

	$wp_customize->add_setting('election_campaign_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
    $wp_customize->add_control('election_campaign_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','election-campaign'),
       'section' => 'election_campaign_option'
   ));

   $wp_customize->add_setting('election_campaign_preloader_type',array(
     	'default' => 'First Preloader Type',
     	'sanitize_callback' => 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control('election_campaign_preloader_type',array(
      'type' => 'radio',
      'label' => __('Preloader Types','election-campaign'),
      'section' => 'election_campaign_option',
      'choices' => array(
         'First Preloader Type' => __('First Preloader Type','election-campaign'),
         'Second Preloader Type' => __('Second Preloader Type','election-campaign'),
      ),
	) );

	$wp_customize->add_setting('election_campaign_preloader_bg_color_option', array(
		'default'           => '#163D80',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_preloader_bg_color_option', array(
		'label'    => __('Preloader Background Color', 'election-campaign'),
		'section'  => 'election_campaign_option',
	)));

	$wp_customize->add_setting('election_campaign_preloader_icon_color_option', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_preloader_icon_color_option', array(
		'label'    => __('Preloader Icon Color', 'election-campaign'),
		'section'  => 'election_campaign_option',
	)));

	$wp_customize->add_setting('election_campaign_width_layout_options',array(
		'default' => 'Default',
		'sanitize_callback' => 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control('election_campaign_width_layout_options',array(
		'type' => 'radio',
		'label' => __('Container Box','election-campaign'),
		'description' => __('Here you can change the Width layout. ','election-campaign'),
		'section' => 'election_campaign_option',
		'choices' => array(
		   'Default' => __('Default','election-campaign'),
		   'Container Layout' => __('Container Layout','election-campaign'),
		   'Box Layout' => __('Box Layout','election-campaign'),
		),
	) );

	// Add page sidebar
	$wp_customize->add_setting('election_campaign_page_sidebar',array(
        'default' => 'One Column',
        'sanitize_callback' => 'election_campaign_sanitize_choices'
	) );
	$wp_customize->add_control('election_campaign_page_sidebar', array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','election-campaign'),
        'section' => 'election_campaign_option',
        'choices' => array(
            'One Column' => __('One Column','election-campaign'),
            'Left Sidebar' => __('Left Sidebar','election-campaign'),
            'Right Sidebar' => __('Right Sidebar','election-campaign')
        ),
	)   );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('election_campaign_layout_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'election_campaign_sanitize_choices'
	) );
	$wp_customize->add_control('election_campaign_layout_options', array(
        'type' => 'select',
        'label' => __('Post Sidebar Layout','election-campaign'),
        'section' => 'election_campaign_option',
        'choices' => array(
            'One Column' => __('One Column','election-campaign'),
            'Three Columns' => __('Three Columns','election-campaign'),
            'Four Columns' => __('Four Columns','election-campaign'),
            'Grid Layout' => __('Grid Layout','election-campaign'),
            'Left Sidebar' => __('Left Sidebar','election-campaign'),
            'Right Sidebar' => __('Right Sidebar','election-campaign')
        ),
	)   );

	$wp_customize->add_setting('election_campaign_sidebar_size',array(
        'default' => 'Sidebar 1/3',
        'sanitize_callback' => 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control('election_campaign_sidebar_size',array(
        'type' => 'radio',
        'label' => __('Sidebar Size Option','election-campaign'),
        'section' => 'election_campaign_option',
        'choices' => array(
            'Sidebar 1/3' => __('Sidebar 1/3','election-campaign'),
            'Sidebar 1/4' => __('Sidebar 1/4','election-campaign'),
        ),
	) );

   //Global Color
	$wp_customize->add_section('election_campaign_global_color', array(
		'title'    => __('Theme Color Option', 'election-campaign'),
		'panel'    => 'election_campaign_panel_id',
	));

	$wp_customize->add_setting('election_campaign_global_color_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_global_color_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','election-campaign') ."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign') ."</a>",
		'section'=> 'election_campaign_global_color'
	));

	$wp_customize->add_setting('election_campaign_first_color', array(
		'default'           => '#163D80',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_first_color', array(
		'label'    => __('Highlight Color', 'election-campaign'),
		'section'  => 'election_campaign_global_color',
		'settings' => 'election_campaign_first_color',
	)));

	$wp_customize->add_setting('election_campaign_second_color', array(
		'default'           => '#CF2E2E',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_second_color', array(
		'label'    => __('Highlight Color', 'election-campaign'),
		'section'  => 'election_campaign_global_color',
		'settings' => 'election_campaign_second_color',
	)));

	//Blog Post Settings
	$wp_customize->add_section('election_campaign_post_settings', array(
		'title'    => __('Post General Settings', 'election-campaign'),
		'panel'    => 'election_campaign_panel_id',
	));

	$wp_customize->add_setting('election_campaign_blog_post_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_blog_post_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','election-campaign') ."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign') ."</a>",
		'section'=> 'election_campaign_post_settings'
	));

	$wp_customize->add_setting('election_campaign_post_layouts',array(
     'default' => 'Layout 2',
     'sanitize_callback' => 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control('election_campaign_post_layouts', array(
		'type' => 'select',
		'label' => __('Post Layouts','election-campaign'),
		'description' => __('Here you can change the 3 different layouts of post','election-campaign'),
		'section' => 'election_campaign_post_settings',
		'choices' => array(
		   'Layout 1' => __('Layouts 1','election-campaign'),
		   'Layout 2' => __('Layouts 2','election-campaign'),
		   'Layout 3' => __('Layouts 3','election-campaign'),
	)));

   $wp_customize->add_setting('election_campaign_post_block_option',array(
        'default' => 'By Block',
        'sanitize_callback' => 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control('election_campaign_post_block_option',array(
        'type' => 'select',
        'label' => __('Blog Post Shown','election-campaign'),
        'section' => 'election_campaign_post_settings',
        'choices' => array(
            'By Block' => __('By Block','election-campaign'),
            'By Without Block' => __('By Without Block','election-campaign'),
        ),
	) );

	$wp_customize->add_setting('election_campaign_metafields_date',array(
		'default' => true,
		'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
	));
	$wp_customize->add_control('election_campaign_metafields_date',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Date','election-campaign'),
		'section' => 'election_campaign_post_settings'
	));

	$wp_customize->add_setting('election_campaign_post_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_post_date_icon',array(
		'label'	=> __('Post Date Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('election_campaign_metafields_author',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
    ));
    $wp_customize->add_control('election_campaign_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Author','election-campaign'),
       'section' => 'election_campaign_post_settings'
    ));

    $wp_customize->add_setting('election_campaign_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_post_author_icon',array(
		'label'	=> __('Post Author Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('election_campaign_metafields_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
    ));
    $wp_customize->add_control('election_campaign_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Comments','election-campaign'),
       'section' => 'election_campaign_post_settings'
    ));

    $wp_customize->add_setting('election_campaign_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_post_comment_icon',array(
		'label'	=> __('Post Comment Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_post_settings',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('election_campaign_metafields_time',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
    ));
    $wp_customize->add_control('election_campaign_metafields_time',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Time','election-campaign'),
       'section' => 'election_campaign_post_settings'
    ));

    $wp_customize->add_setting('election_campaign_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_post_time_icon',array(
		'label'	=> __('Post Time Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('election_campaign_post_featured_image',array(
       'default' => 'Image',
       'sanitize_callback'	=> 'election_campaign_sanitize_choices'
    ));
    $wp_customize->add_control('election_campaign_post_featured_image',array(
       'type' => 'select',
       'label'	=> __('Post Image Options','election-campaign'),
       'choices' => array(
            'Image' => __('Image','election-campaign'),
            'Color' => __('Color','election-campaign'),
            'None' => __('None','election-campaign'),
        ),
      	'section'	=> 'election_campaign_post_settings',
    ));

    $wp_customize->add_setting('election_campaign_post_featured_color', array(
		'default'           => '#163D80',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_post_featured_color', array(
		'label'    => __('Post Color', 'election-campaign'),
		'section'  => 'election_campaign_post_settings',
		'settings' => 'election_campaign_post_featured_color',
		'active_callback' => 'election_campaign_post_color_enabled'
	)));

	$wp_customize->add_setting( 'election_campaign_custom_post_color_width',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_custom_post_color_width',	array(
		'label' => esc_html__( 'Color Post Custom Width','election-campaign' ),
		'section' => 'election_campaign_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'active_callback' => 'election_campaign_show_post_color'
	)));

	$wp_customize->add_setting( 'election_campaign_custom_post_color_height',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_custom_post_color_height',array(
		'label' => esc_html__( 'Color Post Custom Height','election-campaign' ),
		'section' => 'election_campaign_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'active_callback' => 'election_campaign_show_post_color'
	)));

	$wp_customize->add_setting('election_campaign_post_featured_image_dimention',array(
       'default' => 'Default',
       'sanitize_callback'	=> 'election_campaign_sanitize_choices'
    ));
    $wp_customize->add_control('election_campaign_post_featured_image_dimention',array(
       'type' => 'select',
       'label'	=> __('Post Featured Image Dimention','election-campaign'),
       'choices' => array(
            'Default' => __('Default','election-campaign'),
            'Custom' => __('Custom','election-campaign'),
        ),
      	'section'	=> 'election_campaign_post_settings',
      	'active_callback' => 'election_campaign_enable_post_featured_image'
    ));

    $wp_customize->add_setting( 'election_campaign_post_featured_image_custom_width',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_post_featured_image_custom_width',	array(
		'label' => esc_html__( 'Post Featured Image Custom Width','election-campaign' ),
		'section' => 'election_campaign_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'active_callback' => 'election_campaign_enable_post_image_custom_dimention'
	)));

	$wp_customize->add_setting( 'election_campaign_post_featured_image_custom_height',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_post_featured_image_custom_height',	array(
		'label' => esc_html__( 'Post Featured Image Custom Height','election-campaign' ),
		'section' => 'election_campaign_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'active_callback' => 'election_campaign_enable_post_image_custom_dimention'
	)));

	$wp_customize->add_setting( 'election_campaign_image_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize,  'election_campaign_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','election-campaign' ),
		'section'     => 'election_campaign_post_settings',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	)) );

	$wp_customize->add_setting( 'election_campaign_image_box_shadow',array(
		'default' => 0,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize,  'election_campaign_image_box_shadow',array(
		'label' => esc_html__( 'Featured Image Shadow','election-campaign' ),
		'section' => 'election_campaign_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	)));

	$wp_customize->add_setting('election_campaign_show_first_caps',array(
      'default' => false,
      'sanitize_callback' => 'election_campaign_sanitize_checkbox',
    ));
	$wp_customize->add_control( 'election_campaign_show_first_caps',array(
		'label' => esc_html__('First Cap (First Capital Letter)', 'election-campaign'),
		'type' => 'checkbox',
		'section' => 'election_campaign_post_settings',
	));

    //Post excerpt
	$wp_customize->add_setting( 'election_campaign_post_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'election_campaign_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Content Limit','election-campaign' ),
		'section'     => 'election_campaign_post_settings',
		'type'        => 'number',
		'settings'    => 'election_campaign_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('election_campaign_content_settings',array(
        'default' =>'Excerpt',
        'sanitize_callback' => 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control('election_campaign_content_settings',array(
        'type' => 'radio',
        'label' => __('Content Settings','election-campaign'),
        'section' => 'election_campaign_post_settings',
        'choices' => array(
            'Excerpt' => __('Excerpt','election-campaign'),
            'Content' => __('Content','election-campaign'),
        ),
	) );

	$wp_customize->add_setting( 'election_campaign_post_discription_suffix', array(
		'default'   => __('[...]','election-campaign'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'election_campaign_post_discription_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','election-campaign' ),
		'section'     => 'election_campaign_post_settings',
		'type'        => 'text',
		'settings'    => 'election_campaign_post_discription_suffix',
	) );

	$wp_customize->add_setting( 'election_campaign_blog_post_meta_seperator', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'election_campaign_blog_post_meta_seperator', array(
		'label'       => esc_html__( 'Meta Box Separator','election-campaign' ),
		'section'     => 'election_campaign_post_settings',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','election-campaign'),
		'type'        => 'text',
		'settings'    => 'election_campaign_blog_post_meta_seperator',
	) );

	$wp_customize->add_setting('election_campaign_enable_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_enable_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Blog Page Pagination','election-campaign'),
       'section' => 'election_campaign_post_settings'
   ));

   $wp_customize->add_setting( 'election_campaign_post_pagination_position', array(
        'default'			=>  'Bottom',
        'sanitize_callback'	=> 'election_campaign_sanitize_choices'
   ));
   $wp_customize->add_control( 'election_campaign_post_pagination_position', array(
        'section' => 'election_campaign_post_settings',
        'type' => 'select',
        'label' => __( 'Post Pagination Position', 'election-campaign' ),
        'choices'		=> array(
            'Top'  => __( 'Top', 'election-campaign' ),
            'Bottom' => __( 'Bottom', 'election-campaign' ),
            'Both Top & Bottom' => __( 'Both Top & Bottom', 'election-campaign' ),
   )));

	$wp_customize->add_setting( 'election_campaign_pagination_settings', array(
        'default'			=> 'Numeric Pagination',
        'sanitize_callback'	=> 'election_campaign_sanitize_choices'
   ));
   $wp_customize->add_control( 'election_campaign_pagination_settings', array(
        'section' => 'election_campaign_post_settings',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'election-campaign' ),
        'choices'		=> array(
            'Numeric Pagination'  => __( 'Numeric Pagination', 'election-campaign' ),
            'next-prev' => __( 'Next / Previous', 'election-campaign' ),
   )));

	//Button Settings
	$wp_customize->add_section('election_campaign_button_settings', array(
		'title'    => __('Button Settings', 'election-campaign'),
		'panel'    => 'election_campaign_panel_id',
	));

	$wp_customize->add_setting('election_campaign_button_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_button_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','election-campaign') ."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign') ."</a>",
		'section'=> 'election_campaign_button_settings'
	));

	$wp_customize->add_setting('election_campaign_button_text',array(
		'default'=> __('Read More','election-campaign'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_button_text',array(
		'label'	=> __('Add Button Text','election-campaign'),
		'section'=> 'election_campaign_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('election_campaign_post_btn_icon',array(
		'default'	=> 'fas fa-university',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_post_btn_icon',array(
		'label'	=> __('Post Button Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_button_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('election_campaign_btn_font_size_option',array(
		'default'=> 14,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize,'election_campaign_btn_font_size_option',array(
		'label'	=> __('Button Font Size','election-campaign'),
		'section'=> 'election_campaign_button_settings',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 50,
     	),
	)));

	$wp_customize->add_setting('election_campaign_button_text_tranform',array(
		'default' => 'Uppercase',
		'sanitize_callback' => 'election_campaign_sanitize_choices'
 	));
 	$wp_customize->add_control('election_campaign_button_text_tranform',array(
		'type' => 'select',
		'label' => __('Button Text Transform','election-campaign'),
		'section' => 'election_campaign_button_settings',
		'choices' => array(
		   'Uppercase' => __('Uppercase','election-campaign'),
		   'Lowercase' => __('Lowercase','election-campaign'),
		   'Capitalize' => __('Capitalize','election-campaign'),
		),
	) );

	$wp_customize->add_setting('election_campaign_button_font_weight',array(
		'default' => '700',
		'sanitize_callback' => 'election_campaign_sanitize_choices'
 	));
 	$wp_customize->add_control('election_campaign_button_font_weight',array(
		'type' => 'select',
		'label' => __('Button Font Weight','election-campaign'),
		'section' => 'election_campaign_button_settings',
		'choices' => array(
			'100' => __('100','election-campaign'),
			'200' => __('200','election-campaign'),
			'300' => __('300','election-campaign'),
			'400' => __('400','election-campaign'),
			'500' => __('500','election-campaign'),
			'600' => __('600','election-campaign'),
			'700' => __('700','election-campaign'),
			'800' => __('800','election-campaign'),
			'900' => __('900','election-campaign'),
		),
	) );

	$wp_customize->add_setting( 'election_campaign_post_button_padding_top',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_post_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding (px)','election-campaign' ),
		'section' => 'election_campaign_button_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'election_campaign_post_button_padding_right',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_post_button_padding_right',	array(
		'label' => esc_html__( 'Button Right Left Padding (px)','election-campaign' ),
		'section' => 'election_campaign_button_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'election_campaign_post_button_border_radius',array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_post_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius (px)','election-campaign' ),
		'section' => 'election_campaign_button_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

   //Single Post Settings
	$wp_customize->add_section('election_campaign_single_post_settings', array(
		'title'    => __('Single Post Settings', 'election-campaign'),
		'panel'    => 'election_campaign_panel_id',
	));

	$wp_customize->add_setting('election_campaign_single_post_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_single_post_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','election-campaign') ."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign') ."</a>",
		'section'=> 'election_campaign_single_post_settings'
	));

	$wp_customize->add_setting('election_campaign_single_post_bradcrumb',array(
		'default' => false,
		'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
	));
	$wp_customize->add_control('election_campaign_single_post_bradcrumb',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Breadcrumb','election-campaign'),
		'section' => 'election_campaign_single_post_settings',
	));

	$wp_customize->add_setting('election_campaign_single_post_date',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Date','election-campaign'),
       'section' => 'election_campaign_single_post_settings'
   ));

   $wp_customize->add_setting('election_campaign_single_post_date_icon',array(
		'default'	=> 'far fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_single_post_date_icon',array(
		'label'	=> __('Single Post Date Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('election_campaign_single_post_author',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Author','election-campaign'),
       'section' => 'election_campaign_single_post_settings'
   ));

   $wp_customize->add_setting('election_campaign_single_post_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
      $wp_customize,'election_campaign_single_post_author_icon',array(
		'label'	=> __('Single Post Author Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('election_campaign_single_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
	));
	$wp_customize->add_control('election_campaign_single_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Comments','election-campaign'),
		'section' => 'election_campaign_single_post_settings'
	));

 	$wp_customize->add_setting('election_campaign_single_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer( $wp_customize, 'election_campaign_single_post_comment_icon', array(
		'label'	=> __('Single Post Comment Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_single_post_settings',
		'type'		=> 'icon'
	)));

   $wp_customize->add_setting('election_campaign_single_post_time',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_single_post_time',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Time','election-campaign'),
       'section' => 'election_campaign_single_post_settings',
   ));

   $wp_customize->add_setting('election_campaign_single_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_single_post_time_icon',array(
		'label'	=> __('Single Post Time Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('election_campaign_post_comment_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_post_comment_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable post comment','election-campaign'),
       'section' => 'election_campaign_single_post_settings',
   ));

	$wp_customize->add_setting('election_campaign_single_post_featured_image',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_single_post_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Featured image','election-campaign'),
       'section' => 'election_campaign_single_post_settings',
   ));

	$wp_customize->add_setting('election_campaign_show_hide_single_post_categories',array(
			'default' => true,
			'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_show_hide_single_post_categories',array(
			'type' => 'checkbox',
			'label' => __('Single Post Categories','election-campaign'),
			'section' => 'election_campaign_single_post_settings'
   ));

	$wp_customize->add_setting('election_campaign_single_post_tags',array(
      'default' => true,
      'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_single_post_tags',array(
      'type' => 'checkbox',
      'label' => __('Enable / Disable Tags','election-campaign'),
      'section' => 'election_campaign_single_post_settings'
   ));

	$wp_customize->add_setting('election_campaign_single_post_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'election_campaign_sanitize_choices'
	) );
	$wp_customize->add_control('election_campaign_single_post_layout', array(
        'type' => 'select',
        'label' => __('Select different Single post sidebar layout','election-campaign'),
        'section' => 'election_campaign_single_post_settings',
        'choices' => array(
            'One Column' => __('One Column','election-campaign'),
            'Left Sidebar' => __('Left Sidebar','election-campaign'),
            'Right Sidebar' => __('Right Sidebar','election-campaign')
        ),
	)   );

	$wp_customize->add_setting( 'election_campaign_single_post_meta_seperator', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'election_campaign_single_post_meta_seperator', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','election-campaign' ),
		'section'     => 'election_campaign_single_post_settings',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','election-campaign'),
		'type'        => 'text',
		'settings'    => 'election_campaign_single_post_meta_seperator',
	) );

	$wp_customize->add_setting( 'election_campaign_comment_form_width',array(
		'default' => 100,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_comment_form_width',	array(
		'label' => esc_html__( 'Comment Form Width','election-campaign' ),
		'section' => 'election_campaign_single_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('election_campaign_title_comment_form',array(
       'default' => __('Leave a Reply','election-campaign'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('election_campaign_title_comment_form',array(
       'type' => 'text',
       'label' => __('Comment Form Heading Text','election-campaign'),
       'section' => 'election_campaign_single_post_settings'
    ));

    $wp_customize->add_setting('election_campaign_comment_form_button_content',array(
       'default' => __('Post Comment','election-campaign'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('election_campaign_comment_form_button_content',array(
       'type' => 'text',
       'label' => __('Comment Form Button Text','election-campaign'),
       'section' => 'election_campaign_single_post_settings'
    ));

	$wp_customize->add_setting('election_campaign_enable_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_enable_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Single Post Pagination','election-campaign'),
       'section' => 'election_campaign_single_post_settings'
   ));

   $wp_customize->add_setting('election_campaign_prev_text',array(
       'default' => 'Previous page',
       'sanitize_callback'	=> 'sanitize_text_field'
   ));
   $wp_customize->add_control('election_campaign_prev_text',array(
       'type' => 'text',
       'label' => __('Previous Navigation Text','election-campaign'),
       'section' => 'election_campaign_single_post_settings'
   ));

   $wp_customize->add_setting('election_campaign_next_text',array(
       'default' => 'Next page',
       'sanitize_callback'	=> 'sanitize_text_field'
   ));
   $wp_customize->add_control('election_campaign_next_text',array(
       'type' => 'text',
       'label' => __('Next Navigation Text','election-campaign'),
       'section' => 'election_campaign_single_post_settings'
   ));

	//Grid Post Settings
	$wp_customize->add_section('election_campaign_grid_post_settings', array(
		'title'    => __('Grid Post Settings', 'election-campaign'),
		'panel'    => 'election_campaign_panel_id',
	));

	$wp_customize->add_setting('election_campaign_grid_post_date',array(
		'default' => true,
		'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_grid_post_date',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Date','election-campaign'),
		'section' => 'election_campaign_grid_post_settings'
   ));

	$wp_customize->add_setting('election_campaign_grid_post_author',array(
		'default' => true,
		'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_grid_post_author',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Author','election-campaign'),
		'section' => 'election_campaign_grid_post_settings'
   ));

	$wp_customize->add_setting('election_campaign_grid_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_grid_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Comment','election-campaign'),
		'section' => 'election_campaign_grid_post_settings'
   ));

	$wp_customize->add_setting('election_campaign_grid_post_time',array(
		'default' => true,
		'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_grid_post_time',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Time','election-campaign'),
		'section' => 'election_campaign_grid_post_settings'
   ));

	//Related Post Settings
	$wp_customize->add_section('election_campaign_related_settings', array(
		'title'    => __('Related Post Settings', 'election-campaign'),
		'panel'    => 'election_campaign_panel_id',
	));

	$wp_customize->add_setting('election_campaign_related_post_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_related_post_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','election-campaign') ."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign') ."</a>",
		'section'=> 'election_campaign_related_settings'
	));

	$wp_customize->add_setting( 'election_campaign_related_enable_disable',array(
		'default' => true,
      	'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
    ) );
    $wp_customize->add_control('election_campaign_related_enable_disable',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Related Post','election-campaign' ),
        'section' => 'election_campaign_related_settings'
    ));

    $wp_customize->add_setting('election_campaign_related_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_related_title',array(
		'label'	=> __('Add Section Title','election-campaign'),
		'section'	=> 'election_campaign_related_settings',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'election_campaign_related_posts_count_number', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'election_campaign_related_posts_count_number', array(
		'label'       => esc_html__( 'Related Post Count','election-campaign' ),
		'section'     => 'election_campaign_related_settings',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 10,
		),
	) );

	$wp_customize->add_setting('election_campaign_related_posts_taxanomies',array(
        'default' => 'categories',
        'sanitize_callback' => 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control('election_campaign_related_posts_taxanomies',array(
        'type' => 'radio',
        'label' => __('Post Taxonomies','election-campaign'),
        'section' => 'election_campaign_related_settings',
        'choices' => array(
            'categories' => __('Categories','election-campaign'),
            'tags' => __('Tags','election-campaign'),
        ),
	) );

	$wp_customize->add_setting( 'election_campaign_related_post_excerpt_number',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));

	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_related_post_excerpt_number',	array(
		'label' => esc_html__( 'Content Limit','election-campaign' ),
		'section' => 'election_campaign_related_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	//Responsive Media Settings
	$wp_customize->add_section('election_campaign_responsive_media',array(
		'title'	=> __('Responsive Media','election-campaign'),
		'panel' => 'election_campaign_panel_id',
	));

	$wp_customize->add_setting('election_campaign_responsive_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_responsive_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','election-campaign') ."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign') ."</a>",
		'section'=> 'election_campaign_responsive_media'
	));

	$wp_customize->add_setting('election_campaign_responsive_menu_open_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_responsive_menu_open_icon',array(
		'label'	=> __('Responsive Open Menu Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_responsive_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('election_campaign_responsive_menu_close_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_responsive_menu_close_icon',array(
		'label'	=> __('Responsive Close Menu Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_responsive_media',
		'type'		=> 'icon'
	)));

	// site toggle button color
	$wp_customize->add_setting('election_campaign_toggle_button_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_toggle_button_color', array(
		'label'    => __('Toggle Button Color', 'election-campaign'),
		'section'  => 'election_campaign_responsive_media',
		'settings' => 'election_campaign_toggle_button_color',
	)));

	$wp_customize->add_setting('election_campaign_display_post_date',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
    ));
    $wp_customize->add_control('election_campaign_display_post_date',array(
       'type' => 'checkbox',
       'label' => __('Display Post Date','election-campaign'),
       'section' => 'election_campaign_responsive_media'
    ));

    $wp_customize->add_setting('election_campaign_display_post_author',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
    ));
    $wp_customize->add_control('election_campaign_display_post_author',array(
       'type' => 'checkbox',
       'label' => __('Display Post Author','election-campaign'),
       'section' => 'election_campaign_responsive_media'
    ));

    $wp_customize->add_setting('election_campaign_display_post_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
    ));
    $wp_customize->add_control('election_campaign_display_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Display Post Comment','election-campaign'),
       'section' => 'election_campaign_responsive_media'
    ));

    $wp_customize->add_setting('election_campaign_display_slider',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
    ));
    $wp_customize->add_control('election_campaign_display_slider',array(
       'type' => 'checkbox',
       'label' => __('Display Slider','election-campaign'),
       'section' => 'election_campaign_responsive_media'
    ));

	$wp_customize->add_setting('election_campaign_display_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
    ));
    $wp_customize->add_control('election_campaign_display_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Display Sidebar','election-campaign'),
       'section' => 'election_campaign_responsive_media'
    ));

    $wp_customize->add_setting('election_campaign_display_scrolltop',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
    ));
    $wp_customize->add_control('election_campaign_display_scrolltop',array(
       'type' => 'checkbox',
       'label' => __('Display Scroll To Top','election-campaign'),
       'section' => 'election_campaign_responsive_media'
    ));

    $wp_customize->add_setting('election_campaign_display_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
    ));
    $wp_customize->add_control('election_campaign_display_preloader',array(
       'type' => 'checkbox',
       'label' => __('Display Preloader','election-campaign'),
       'section' => 'election_campaign_responsive_media'
    ));

    //404 Page Setting
	$wp_customize->add_section('election_campaign_page_not_found',array(
		'title'	=> __('404 Page Not Found / No Result','election-campaign'),
		'panel' => 'election_campaign_panel_id',
	));

	$wp_customize->add_setting('election_campaign_page_not_found_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_page_not_found_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','election-campaign') ."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign') ."</a>",
		'section'=> 'election_campaign_page_not_found'
	));

	$wp_customize->add_setting('election_campaign_page_not_found_heading',array(
		'default'=> __('404 Not Found','election-campaign'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_page_not_found_heading',array(
		'label'	=> __('404 Heading','election-campaign'),
		'section'=> 'election_campaign_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('election_campaign_page_not_found_text',array(
		'default'=> __('Looks like you have taken a wrong turn. Dont worry it happens to the best of us.','election-campaign'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_page_not_found_text',array(
		'label'	=> __('404 Content','election-campaign'),
		'section'=> 'election_campaign_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('election_campaign_page_not_found_button',array(
		'default'=>  __('Back to Home Page','election-campaign'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_page_not_found_button',array(
		'label'	=> __('404 Button','election-campaign'),
		'section'=> 'election_campaign_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('election_campaign_no_search_result_heading',array(
		'default'=> __('Nothing Found','election-campaign'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('election_campaign_no_search_result_heading',array(
		'label'	=> __('No Search Results Heading','election-campaign'),
		'description'=>__('The search page heading display when no results are found.','election-campaign'),
		'section'=> 'election_campaign_page_not_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('election_campaign_no_search_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','election-campaign'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_no_search_result_text',array(
		'label'	=> __('No Search Results Text','election-campaign'),
		'description'=>__('The search page text display when no results are found.','election-campaign'),
		'section'=> 'election_campaign_page_not_found',
		'type'=> 'text'
	));

	//Woocommerce Section
	$wp_customize->add_section( 'election_campaign_woocommerce_section' , array(
    	'title'      => __( 'Woocommerce Settings', 'election-campaign' ),
    	'description'=>__('The below settings are apply on woocommerce pages.','election-campaign'),
		'priority'   => null,
		'panel' => 'election_campaign_panel_id'
	) );

	$wp_customize->add_setting('election_campaign_woocommerce_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_woocommerce_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','election-campaign') ."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign') ."</a>",
		'section'=> 'election_campaign_woocommerce_section'
	));

	/**
	 * Product Columns
	 */
	$wp_customize->add_setting( 'election_campaign_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'election_campaign_per_columns', array(
		'label'    => __( 'Product per columns', 'election-campaign' ),
		'section'  => 'election_campaign_woocommerce_section',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('election_campaign_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_product_per_page',array(
		'label'	=> __('Product per page','election-campaign'),
		'section'	=> 'election_campaign_woocommerce_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('election_campaign_shop_sidebar_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
    ));
    $wp_customize->add_control('election_campaign_shop_sidebar_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable shop page sidebar','election-campaign'),
       'section' => 'election_campaign_woocommerce_section',
    ));

   // shop page sidebar alignment
   $wp_customize->add_setting('election_campaign_shop_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	));
	$wp_customize->add_control('election_campaign_shop_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Shop Page Layout', 'election-campaign'),
		'section'        => 'election_campaign_woocommerce_section',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'election-campaign'),
			'Right Sidebar' => __('Right Sidebar', 'election-campaign'),
		),
	));

	$wp_customize->add_setting('election_campaign_product_page_sidebar_enable',array(
		'default' => true,
		'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
	));
	$wp_customize->add_control('election_campaign_product_page_sidebar_enable',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable single product page sidebar','election-campaign'),
		'section' => 'election_campaign_woocommerce_section',
	));

   // single product page sidebar alignment
   $wp_customize->add_setting('election_campaign_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	));
	$wp_customize->add_control('election_campaign_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Product Page Layout', 'election-campaign'),
		'section'        => 'election_campaign_woocommerce_section',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'election-campaign'),
			'Right Sidebar' => __('Right Sidebar', 'election-campaign'),
		),
	));

    $wp_customize->add_setting('election_campaign_related_product_enable',array(
       'default' => true,
       'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
    ));
    $wp_customize->add_control('election_campaign_related_product_enable',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Related product','election-campaign'),
       'section' => 'election_campaign_woocommerce_section',
    ));

    $wp_customize->add_setting( 'election_campaign_woo_product_sale_border_radius',array(
		'default' => 0,
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_woo_product_sale_border_radius', array(
        'label'  => __('Woocommerce Product Sale Border Radius','election-campaign'),
        'section'  => 'election_campaign_woocommerce_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('election_campaign_wooproduct_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_wooproduct_sale_font_size',array(
		'label'	=> __('Woocommerce Product Sale Font Size','election-campaign'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'election_campaign_woocommerce_section',
	)));

    $wp_customize->add_setting('election_campaign_woo_product_sale_top_bottom_padding',array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_woo_product_sale_top_bottom_padding',array(
		'label'	=> __('Woocommerce Product Sale Top Bottom Padding ','election-campaign'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'election_campaign_woocommerce_section',
		'type'=> 'number'
	)));

	$wp_customize->add_setting('election_campaign_woo_product_sale_left_right_padding',array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_woo_product_sale_left_right_padding',array(
		'label'	=> __('Woocommerce Product Sale Left Right Padding','election-campaign'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'election_campaign_woocommerce_section',
		'type'=> 'number'
	)));

	$wp_customize->add_setting('election_campaign_woo_product_sale_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control('election_campaign_woo_product_sale_position',array(
        'type' => 'select',
        'label' => __('Woocommerce Product Sale Position','election-campaign'),
        'section' => 'election_campaign_woocommerce_section',
        'choices' => array(
            'Right' => __('Right','election-campaign'),
            'Left' => __('Left','election-campaign'),
        ),
	));

	$wp_customize->add_setting( 'election_campaign_woocommerce_button_padding_top',array(
		'default' => 12,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_woocommerce_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding (px)','election-campaign' ),
		'section' => 'election_campaign_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'election_campaign_woocommerce_button_padding_right',array(
		'default' => 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_woocommerce_button_padding_right',	array(
		'label' => esc_html__( 'Button Right Left Padding (px)','election-campaign' ),
		'section' => 'election_campaign_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'election_campaign_woocommerce_button_border_radius',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_woocommerce_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius (px)','election-campaign' ),
		'section' => 'election_campaign_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

   $wp_customize->add_setting('election_campaign_woocommerce_product_border_enable',array(
      'default' => false,
      'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
   ));
   $wp_customize->add_control('election_campaign_woocommerce_product_border_enable',array(
      'type' => 'checkbox',
      'label' => __('Enable / Disable product border','election-campaign'),
      'section' => 'election_campaign_woocommerce_section',
   ));

	$wp_customize->add_setting( 'election_campaign_woocommerce_product_padding_top',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_woocommerce_product_padding_top',	array(
		'label' => esc_html__( 'Product Top Bottom Padding (px)','election-campaign' ),
		'section' => 'election_campaign_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'election_campaign_woocommerce_product_padding_right',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_woocommerce_product_padding_right',	array(
		'label' => esc_html__( 'Product Right Left Padding (px)','election-campaign' ),
		'section' => 'election_campaign_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'election_campaign_woocommerce_product_border_radius',array(
		'default' => 3,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_woocommerce_product_border_radius',array(
		'label' => esc_html__( 'Product Border Radius (px)','election-campaign' ),
		'section' => 'election_campaign_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'election_campaign_woocommerce_product_box_shadow',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_woocommerce_product_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow (px)','election-campaign' ),
		'section' => 'election_campaign_woocommerce_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('election_campaign_wooproducts_nav',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'election_campaign_sanitize_choices'
    ));
    $wp_customize->add_control('election_campaign_wooproducts_nav',array(
       'type' => 'select',
       'label' => __('Shop Page Products Navigation','election-campaign'),
       'choices' => array(
            'Yes' => __('Yes','election-campaign'),
            'No' => __('No','election-campaign'),
        ),
       'section' => 'election_campaign_woocommerce_section',
    ));

	//footer text
	$wp_customize->add_section('election_campaign_footer_section',array(
		'title'	=> __('Footer Text','election-campaign'),
		'panel' => 'election_campaign_panel_id'
	));

	$wp_customize->add_setting('election_campaign_footer_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_footer_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','election-campaign'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','election-campaign') ."</li></ul><a target='_blank' href='". esc_url(ELECTION_CAMPAIGN_BUY_PRO) ." '>". esc_html('Upgrade to Pro','election-campaign') ."</a>",
		'section'=> 'election_campaign_footer_section'
	));

	$wp_customize->add_setting('election_campaign_footer_bg_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'election-campaign'),
		'section'  => 'election_campaign_footer_section',
	)));

	$wp_customize->add_setting('election_campaign_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'election_campaign_footer_bg_image',array(
		'label' => __('Footer Background Image','election-campaign'),
		'section' => 'election_campaign_footer_section'
	)));
	
	$wp_customize->add_setting('election_campaign_footer_attatchment',array(
		'default'=> 'scroll',
		'sanitize_callback'	=> 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control('election_campaign_footer_attatchment',array(
		'type' => 'select',
		'label'	=> __('Footer Background Attatchment','election-campaign'),
		'choices' => array(
            'fixed' => __('fixed','election-campaign'),
            'scroll' => __('scroll','election-campaign'),
        ),
		'section'=> 'election_campaign_footer_section',
	));

	$wp_customize->add_setting('election_campaign_footer_widget_areas',array(
		'default'           => 4,
		'sanitize_callback' => 'election_campaign_sanitize_choices',
	));
	$wp_customize->add_control('election_campaign_footer_widget_areas',array(
		'type'        => 'radio',
		'label'       => __('Footer widget area', 'election-campaign'),
		'section'     => 'election_campaign_footer_section',
		'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'election-campaign'),
		'choices' => array(
		   '1'     => __('One', 'election-campaign'),
		   '2'     => __('Two', 'election-campaign'),
		   '3'     => __('Three', 'election-campaign'),
		   '4'     => __('Four', 'election-campaign')
		),
	));

	$wp_customize->add_setting('election_campaign_footer_heading',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control('election_campaign_footer_heading',array(
	    'type' => 'select',
	    'label' => __('Footer Heading Alignment','election-campaign'),
	    'section' => 'election_campaign_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','election-campaign'),
	        'Center' => __('Center','election-campaign'),
	        'Right' => __('Right','election-campaign')
	    ),
	) );

	$wp_customize->add_setting('election_campaign_footer_content',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control('election_campaign_footer_content',array(
	    'type' => 'select',
	    'label' => __('Footer Content Alignment','election-campaign'),
	    'section' => 'election_campaign_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','election-campaign'),
	        'Center' => __('Center','election-campaign'),
	        'Right' => __('Right','election-campaign')
	    ),
	) );

	$wp_customize->add_setting('election_campaign_footer_heading_font_size',array(
		'default'=> 25,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_footer_heading_font_size',array(
		'label' => esc_html__( 'Footer Heading Font Size','election-campaign' ),
		'section'=> 'election_campaign_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting('election_campaign_footer_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize,'election_campaign_footer_padding',array(
		'label'	=> __('Footer Widget Padding','election-campaign'),
		'section'=> 'election_campaign_footer_section',
		'input_attrs' => array(
         'step' => 1,
			'min'  => 0,
			'max'  => 100,
      ),
	)));

	$wp_customize->add_setting('election_campaign_hide_show_scroll',array(
		'default' => true,
		'sanitize_callback'	=> 'election_campaign_sanitize_checkbox'
	));
	$wp_customize->add_control('election_campaign_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Enable / Disable Back To Top','election-campaign'),
      	'section' => 'election_campaign_footer_section',
	));

	$wp_customize->add_setting('election_campaign_back_to_top_icon',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Election_Campaign_Icon_Changer(
        $wp_customize,'election_campaign_back_to_top_icon',array(
		'label'	=> __('Back to Top Icon','election-campaign'),
		'transport' => 'refresh',
		'section'	=> 'election_campaign_footer_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('election_campaign_scroll_icon_font_size',array(
		'default'=> 22,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_scroll_icon_font_size',array(
		'label'	=> __('Back To Top Icon Font Size','election-campaign'),
		'section'=> 'election_campaign_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting('election_campaign_scroll_icon_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_scroll_icon_color', array(
		'label'    => __('Back to Top Icon Color', 'election-campaign'),
		'section'  => 'election_campaign_footer_section',
	)));

	$wp_customize->add_setting('election_campaign_scroll_icon_hover_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_scroll_icon_hover_color', array(
		'label'    => __('Back to Top Icon Hover Color', 'election-campaign'),
		'section'  => 'election_campaign_footer_section',
	)));

	$wp_customize->add_setting('election_campaign_scroll_icon_background', array(
		'default'           => '#163D80',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_scroll_icon_background', array(
		'label'    => __('Back to Top Background Color', 'election-campaign'),
		'section'  => 'election_campaign_footer_section',
	)));

	$wp_customize->add_setting('election_campaign_scroll_icon_background_hover', array(
		'default'           => '#163D80',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_scroll_icon_background_hover', array(
		'label'    => __('Back to Top Background Hover Color', 'election-campaign'),
		'section'  => 'election_campaign_footer_section',
	)));

	$wp_customize->add_setting('election_campaign_footer_options',array(
        'default' => 'Right align',
        'sanitize_callback' => 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control('election_campaign_footer_options',array(
        'type' => 'radio',
        'label' => __('Back To Top Alignment','election-campaign'),
        'section' => 'election_campaign_footer_section',
        'choices' => array(
            'Left align' => __('Left Align','election-campaign'),
            'Right align' => __('Right Align','election-campaign'),
            'Center align' => __('Center Align','election-campaign'),
        ),
	) );

	$wp_customize->add_setting( 'election_campaign_top_bottom_scroll_padding',array(
		'default' => 7,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_top_bottom_scroll_padding',	array(
		'label' => esc_html__( 'Top Bottom Scroll Padding (px)','election-campaign' ),
		'section' => 'election_campaign_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'election_campaign_left_right_scroll_padding',array(
		'default' => 17,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_left_right_scroll_padding',	array(
		'label' => esc_html__( 'Left Right Scroll Padding (px)','election-campaign' ),
		'section' => 'election_campaign_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting( 'election_campaign_back_to_top_border_radius',array(
		'default' => 5,
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_back_to_top_border_radius', array(
		'label' => esc_html__( 'Back to Top Border Radius (px)','election-campaign' ),
		'section' => 'election_campaign_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('election_campaign_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('election_campaign_footer_copy',array(
		'label'	=> __('Copyright Text','election-campaign'),
		'section'	=> 'election_campaign_footer_section',
		'description'	=> __('Add some text for footer like copyright etc.','election-campaign'),
		'type'		=> 'text'
	));

	$wp_customize->add_setting('election_campaign_footer_text_align',array(
        'default' => 'center',
        'sanitize_callback' => 'election_campaign_sanitize_choices'
	));
	$wp_customize->add_control('election_campaign_footer_text_align',array(
        'type' => 'radio',
        'label' => __('Copyright Text Alignment ','election-campaign'),
        'section' => 'election_campaign_footer_section',
        'choices' => array(
            'left' => __('Left Align','election-campaign'),
            'right' => __('Right Align','election-campaign'),
            'center' => __('Center Align','election-campaign'),
        ),
	) );

	$wp_customize->add_setting('election_campaign_copyright_text_font_size',array(
		'default'=> 15,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control(new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_copyright_text_font_size',array(
		'label' => esc_html__( 'Copyright Font Size (px)','election-campaign' ),
		'section'=> 'election_campaign_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	)));

	$wp_customize->add_setting( 'election_campaign_footer_text_padding',array(
		'default' => 20,
		'transport' => 'refresh',
		'sanitize_callback' => 'election_campaign_sanitize_integer'
	));
	$wp_customize->add_control( new Election_Campaign_Custom_Control( $wp_customize, 'election_campaign_footer_text_padding',	array(
		'label' => esc_html__( 'Copyright Text Padding (px)','election-campaign' ),
		'section' => 'election_campaign_footer_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	)));

	$wp_customize->add_setting('election_campaign_copyright_text_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_copyright_text_color', array(
		'label'    => __('Copyright Text Color', 'election-campaign'),
		'section'  => 'election_campaign_footer_section',
	)));

	$wp_customize->add_setting('election_campaign_copyright_text_background', array(
		'default'           => '#163D80',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'election_campaign_copyright_text_background', array(
		'label'    => __('Copyright background Color', 'election-campaign'),
		'section'  => 'election_campaign_footer_section',
	)));

}
add_action( 'customize_register', 'election_campaign_customize_register' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Election_Campaign_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Election_Campaign_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Election_Campaign_Customize_Section_Pro(
				$manager,
				'election_campaign_example_1',
				array(
					'title'   =>  esc_html__( 'Election Campaign Pro', 'election-campaign' ),
					'pro_text' => esc_html__( 'Get Pro', 'election-campaign' ),
					'pro_url'  => esc_url( 'https://www.buywptemplates.com/products/political-candidate-wordpress-theme/' ),
					'priority'   => 9
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'election-campaign-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'election-campaign-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}


	//Footer widget areas
	function election_campaign_sanitize_choices( $input ) {
		$valid = array(
			'1'     => __('One', 'election-campaign'),
			'2'     => __('Two', 'election-campaign'),
			'3'     => __('Three', 'election-campaign'),
			'4'     => __('Four', 'election-campaign')
		);
		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
	  		return '';
		}
	}

}

// Doing this customizer thang!
Election_Campaign_Customize::get_instance();