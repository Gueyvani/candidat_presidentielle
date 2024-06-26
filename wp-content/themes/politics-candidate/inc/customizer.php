<?php
/**
 * Politics Candidate Theme Customizer
 *
 * @package Politics Candidate
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function politics_candidate_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial(
		'blogname',
		array(
			'selector'        => '.site-title a',
			'render_callback' => 'politics_candidate_customize_partial_blogname',
		)
	);
	$wp_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'        => '.site-description',
			'render_callback' => 'politics_candidate_customize_partial_blogdescription',
		)
	);

	//About Section
		$wp_customize->add_section( 'politics_candidate_about_theme' , array(
	    	'title' => esc_html__( 'About Theme', 'politics-candidate' ),
	    	'priority' => 10,
		) );

		$wp_customize->add_setting('politics_candidate_demo_link',array(
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('politics_candidate_demo_link',array(
			'type'=> 'hidden',
			'description' => "<h3>". esc_html('Theme Demo','politics-candidate') ."</h3><p>". esc_html('Our premium version of Politics Candidate has unlimited sections with advanced control fields. Dedicated support and no limititation in any field.','politics-candidate') ."</p> <a target='_blank' href='". esc_url('https://themescaliber.com/demo/political-candidate-pro/') ." '>". esc_html('View Demo','politics-candidate') ."</a>",
			'section'=> 'politics_candidate_about_theme'
		));
		
		$wp_customize->add_setting('politics_candidate_doc_link',array(
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('politics_candidate_doc_link',array(
			'type'=> 'hidden',
			'description' => "<h3>". esc_html('Theme Documentation','politics-candidate') ."</h3><p>". esc_html('We have well prepared documentation that provides the general guidelines and suggestions needed for this theme.','politics-candidate') ."</p> <a target='_blank' href='". esc_url('https://themescaliber.com/demo/doc/politics-candidate/') ." '>". esc_html('View Documentation','politics-candidate') ."</a>",
			'section'=> 'politics_candidate_about_theme'
		));

		$wp_customize->add_setting('politics_candidate_forum_link',array(
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('politics_candidate_forum_link',array(
			'type'=> 'hidden',
			'description' => "<h3>". esc_html('Theme Support','politics-candidate') ."</h3><p>". esc_html('Regarding any theme issue, we offer 24/7 support. You can get assistance from our support staff in resolving any problem. Please get in touch with us.','politics-candidate') ."</p><a target='_blank' href='". esc_url('https://wordpress.org/support/theme/politics-candidate/') ." '>". esc_html('Support Forum','politics-candidate') ."</a>",
			'section'=> 'politics_candidate_about_theme'
		));

	//add home page setting pannel
	$wp_customize->add_panel( 'politics_candidate_panel_id', array(
	    'priority' => 20,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'politics-candidate' ),
	) );

    $politics_candidate_font_array= array(
        '' =>'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' =>'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' =>'Architects Daughter',
        'Arimo' => 'Arimo', 
        'Arsenal' =>'Arsenal',
        'Arvo' =>'Arvo',
        'Alegreya' =>'Alegreya',
        'Alfa Slab One' =>'Alfa Slab One',
        'Averia Serif Libre' =>'Averia Serif Libre', 
        'Bangers' =>'Bangers', 
        'Boogaloo' =>'Boogaloo', 
        'Bad Script' =>'Bad Script',
        'Bitter' =>'Bitter', 
        'Bree Serif' =>'Bree Serif', 
        'BenchNine' =>'BenchNine',
        'Cabin' =>'Cabin',
        'Cardo' =>'Cardo', 
        'Courgette' =>'Courgette', 
        'Cherry Swash' =>'Cherry Swash',
        'Cormorant Garamond' =>'Cormorant Garamond', 
        'Crimson Text' =>'Crimson Text',
        'Cuprum' =>'Cuprum', 
        'Cookie' =>'Cookie',
        'Chewy' =>'Chewy',
        'Days One' =>'Days One',
        'Dosis' =>'Dosis',
        'Droid Sans' =>'Droid Sans', 
        'Economica' =>'Economica', 
        'Fredoka One' =>'Fredoka One',
        'Fjalla One' =>'Fjalla One',
        'Francois One' =>'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' =>'Gloria Hallelujah',
        'Great Vibes' =>'Great Vibes', 
        'Handlee' =>'Handlee', 
        'Hammersmith One' =>'Hammersmith One',
        'Inconsolata' =>'Inconsolata',
        'Indie Flower' =>'Indie Flower', 
        'IM Fell English SC' =>'IM Fell English SC',
        'Julius Sans One' =>'Julius Sans One',
        'Josefin Slab' =>'Josefin Slab',
        'Josefin Sans' =>'Josefin Sans',
        'Kanit' =>'Kanit',
        'Lobster' =>'Lobster',
        'Lato' => 'Lato',
        'Lora' =>'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather',
        'Monda' =>'Monda',
        'Montserrat' =>'Montserrat',
        'Muli' =>'Muli',
        'Marck Script' =>'Marck Script',
        'Noto Serif' =>'Noto Serif',
        'Open Sans' =>'Open Sans',
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>'Overpass Mono',
        'Oxygen' =>'Oxygen',
        'Orbitron' =>'Orbitron',
        'Patua One' =>'Patua One',
        'Pacifico' =>'Pacifico',
        'Padauk' =>'Padauk',
        'Playball' =>'Playball',
        'Playfair Display' =>'Playfair Display',
        'PT Sans' =>'PT Sans',
        'Philosopher' =>'Philosopher',
        'Permanent Marker' =>'Permanent Marker',
        'Poiret One' =>'Poiret One',
        'Quicksand' =>'Quicksand',
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' =>'Raleway',
        'Rubik' =>'Rubik',
        'Rokkitt' =>'Rokkitt',
        'Russo One' => 'Russo One', 
        'Righteous' =>'Righteous', 
        'Slabo' =>'Slabo', 
        'Source Sans Pro' =>'Source Sans Pro',
        'Shadows Into Light Two' =>'Shadows Into Light Two',
        'Shadows Into Light' =>  'Shadows Into Light',
        'Sacramento' =>'Sacramento',
        'Shrikhand' =>'Shrikhand',
        'Tangerine' => 'Tangerine',
        'Ubuntu' =>'Ubuntu',
        'VT323' =>'VT323',
        'Varela Round' =>'Varela Round',
        'Vampiro One' =>'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' =>'Volkhov',
        'Kavoon' =>'Kavoon',
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );

	//Color / Font Pallete
	$wp_customize->add_section( 'politics_candidate_typography', array(
    	'title'      => __( 'Color / Font Pallete', 'politics-candidate' ),
		'priority'   => 30,
		'panel' => 'politics_candidate_panel_id'
	) );

	// This is Body Color setting
	$wp_customize->add_setting( 'politics_candidate_body_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'politics_candidate_body_color', array(
		'label' => __('Body Color', 'politics-candidate'),
		'section' => 'politics_candidate_typography',
		'settings' => 'politics_candidate_body_color',
	)));

	//This is Body FontFamily  setting
	$wp_customize->add_setting('politics_candidate_body_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control(
		'politics_candidate_body_font_family', array(
		'section'  => 'politics_candidate_typography',
		'label'    => __( 'Body Fonts','politics-candidate'),
		'type'     => 'select',
		'choices'  => $politics_candidate_font_array,
	));

    //This is Body Fontsize setting
	$wp_customize->add_setting('politics_candidate_body_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('politics_candidate_body_font_size',array(
		'label'	=> __('Body Font Size','politics-candidate'),
		'section'	=> 'politics_candidate_typography',
		'setting'	=> 'politics_candidate_body_font_size',
		'type'	=> 'text'
	));

	// Add the Theme Color Option section.
	$wp_customize->add_setting( 'politics_candidate_theme_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'politics_candidate_theme_color', array(
  		'label' => __('Theme Color Option','politics-candidate'),
	    'section' => 'politics_candidate_typography',
	    'settings' => 'politics_candidate_theme_color',
  	)));
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'politics_candidate_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'politics_candidate_paragraph_color', array(
		'label' => __('Paragraph Color', 'politics-candidate'),
		'section' => 'politics_candidate_typography',
		'settings' => 'politics_candidate_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('politics_candidate_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'politics_candidate_paragraph_font_family', array(
	    'section'  => 'politics_candidate_typography',
	    'label'    => __( 'Paragraph Fonts','politics-candidate'),
	    'type'     => 'select',
	    'choices'  => $politics_candidate_font_array,
	));

	$wp_customize->add_setting('politics_candidate_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('politics_candidate_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','politics-candidate'),
		'section'	=> 'politics_candidate_typography',
		'setting'	=> 'politics_candidate_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'politics_candidate_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'politics_candidate_atag_color', array(
		'label' => __('"a" Tag Color', 'politics-candidate'),
		'section' => 'politics_candidate_typography',
		'settings' => 'politics_candidate_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('politics_candidate_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'politics_candidate_atag_font_family', array(
	    'section'  => 'politics_candidate_typography',
	    'label'    => __( '"a" Tag Fonts','politics-candidate'),
	    'type'     => 'select',
	    'choices'  => $politics_candidate_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'politics_candidate_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'politics_candidate_li_color', array(
		'label' => __('"li" Tag Color', 'politics-candidate'),
		'section' => 'politics_candidate_typography',
		'settings' => 'politics_candidate_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('politics_candidate_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'politics_candidate_li_font_family', array(
	    'section'  => 'politics_candidate_typography',
	    'label'    => __( '"li" Tag Fonts','politics-candidate'),
	    'type'     => 'select',
	    'choices'  => $politics_candidate_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'politics_candidate_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'politics_candidate_h1_color', array(
		'label' => __('h1 Color', 'politics-candidate'),
		'section' => 'politics_candidate_typography',
		'settings' => 'politics_candidate_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('politics_candidate_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'politics_candidate_h1_font_family', array(
	    'section'  => 'politics_candidate_typography',
	    'label'    => __( 'h1 Fonts','politics-candidate'),
	    'type'     => 'select',
	    'choices'  => $politics_candidate_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('politics_candidate_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('politics_candidate_h1_font_size',array(
		'label'	=> __('h1 Font Size','politics-candidate'),
		'section'	=> 'politics_candidate_typography',
		'setting'	=> 'politics_candidate_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'politics_candidate_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'politics_candidate_h2_color', array(
		'label' => __('h2 Color', 'politics-candidate'),
		'section' => 'politics_candidate_typography',
		'settings' => 'politics_candidate_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('politics_candidate_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'politics_candidate_h2_font_family', array(
	    'section'  => 'politics_candidate_typography',
	    'label'    => __( 'h2 Fonts','politics-candidate'),
	    'type'     => 'select',
	    'choices'  => $politics_candidate_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('politics_candidate_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('politics_candidate_h2_font_size',array(
		'label'	=> __('h2 Font Size','politics-candidate'),
		'section'	=> 'politics_candidate_typography',
		'setting'	=> 'politics_candidate_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'politics_candidate_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'politics_candidate_h3_color', array(
		'label' => __('h3 Color', 'politics-candidate'),
		'section' => 'politics_candidate_typography',
		'settings' => 'politics_candidate_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('politics_candidate_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'politics_candidate_h3_font_family', array(
	    'section'  => 'politics_candidate_typography',
	    'label'    => __( 'h3 Fonts','politics-candidate'),
	    'type'     => 'select',
	    'choices'  => $politics_candidate_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('politics_candidate_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('politics_candidate_h3_font_size',array(
		'label'	=> __('h3 Font Size','politics-candidate'),
		'section'	=> 'politics_candidate_typography',
		'setting'	=> 'politics_candidate_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'politics_candidate_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'politics_candidate_h4_color', array(
		'label' => __('h4 Color', 'politics-candidate'),
		'section' => 'politics_candidate_typography',
		'settings' => 'politics_candidate_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('politics_candidate_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'politics_candidate_h4_font_family', array(
	    'section'  => 'politics_candidate_typography',
	    'label'    => __( 'h4 Fonts','politics-candidate'),
	    'type'     => 'select',
	    'choices'  => $politics_candidate_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('politics_candidate_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('politics_candidate_h4_font_size',array(
		'label'	=> __('h4 Font Size','politics-candidate'),
		'section'	=> 'politics_candidate_typography',
		'setting'	=> 'politics_candidate_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'politics_candidate_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'politics_candidate_h5_color', array(
		'label' => __('h5 Color', 'politics-candidate'),
		'section' => 'politics_candidate_typography',
		'settings' => 'politics_candidate_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('politics_candidate_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'politics_candidate_h5_font_family', array(
	    'section'  => 'politics_candidate_typography',
	    'label'    => __( 'h5 Fonts','politics-candidate'),
	    'type'     => 'select',
	    'choices'  => $politics_candidate_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('politics_candidate_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('politics_candidate_h5_font_size',array(
		'label'	=> __('h5 Font Size','politics-candidate'),
		'section'	=> 'politics_candidate_typography',
		'setting'	=> 'politics_candidate_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'politics_candidate_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'politics_candidate_h6_color', array(
		'label' => __('h6 Color', 'politics-candidate'),
		'section' => 'politics_candidate_typography',
		'settings' => 'politics_candidate_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('politics_candidate_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control(
	    'politics_candidate_h6_font_family', array(
	    'section'  => 'politics_candidate_typography',
	    'label'    => __( 'h6 Fonts','politics-candidate'),
	    'type'     => 'select',
	    'choices'  => $politics_candidate_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('politics_candidate_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('politics_candidate_h6_font_size',array(
		'label'	=> __('h6 Font Size','politics-candidate'),
		'section'	=> 'politics_candidate_typography',
		'setting'	=> 'politics_candidate_h6_font_size',
		'type'	=> 'text'
	));

	//Layouts
	$wp_customize->add_section( 'politics_candidate_left_right', array(
    	'title'      => __( 'Theme Layout Settings', 'politics-candidate' ),
		'priority'   => 30,
		'panel' => 'politics_candidate_panel_id'
	) );

	$wp_customize->add_setting('politics_candidate_width_options',array(
        'default' => 'Full Layout',
        'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control('politics_candidate_width_options',array(
        'type' => 'select',
        'label' => __('Select Site Layout','politics-candidate'),
        'section' => 'politics_candidate_left_right',
        'choices' => array(
            'Full Layout' => __('Full Layout','politics-candidate'),
            'Contained Layout' => __('Contained Layout','politics-candidate'),
            'Boxed Layout' => __('Boxed Layout','politics-candidate'),
        ),
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('politics_candidate_theme_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'politics_candidate_sanitize_choices'
	) );
	$wp_customize->add_control('politics_candidate_theme_options', array(
        'type' => 'radio',
        'label' => __('Sidebar Layout','politics-candidate'),
        'section' => 'politics_candidate_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','politics-candidate'),
            'Right Sidebar' => __('Right Sidebar','politics-candidate'),
            'One Column' => __('One Column','politics-candidate'),
            'Three Columns' => __('Three Columns','politics-candidate'),
            'Four Columns' => __('Four Columns','politics-candidate'),
            'Grid Layout' => __('Grid Layout','politics-candidate')
        ),
    ));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('politics_candidate_single_post_sidebar',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'politics_candidate_sanitize_choices'
	) );
	$wp_customize->add_control('politics_candidate_single_post_sidebar', array(
        'type' => 'radio',
        'label' => __('Single Post Sidebar Layout','politics-candidate'),
        'section' => 'politics_candidate_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','politics-candidate'),
            'Right Sidebar' => __('Right Sidebar','politics-candidate'),
            'One Column' => __('One Column','politics-candidate'),
        ),
    ));

    $wp_customize->add_setting('politics_candidate_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'politics_candidate_sanitize_choices',
	));
	$wp_customize->add_control('politics_candidate_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'politics-candidate'),
		'section'        => 'politics_candidate_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'politics-candidate'),
			'Right Sidebar' => __('Right Sidebar', 'politics-candidate'),
			'One Column'    => __('One Column', 'politics-candidate'),
		),
	));

	$wp_customize->add_setting( 'politics_candidate_single_page_breadcrumb',array(
		'default' => false,
      	'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ) );
    $wp_customize->add_control('politics_candidate_single_page_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Page Breadcrumb','politics-candidate' ),
        'section' => 'politics_candidate_left_right'
    ));

    $wp_customize->add_setting('politics_candidate_breadcrumb_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'politics_candidate_breadcrumb_color', array(
		'label'    => __('Breadcrumb Color', 'politics-candidate'),
		'section'  => 'politics_candidate_left_right',
	)));

	$wp_customize->add_setting('politics_candidate_breadcrumb_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'politics_candidate_breadcrumb_background_color', array(
		'label'    => __('Breadcrumb Background Color', 'politics-candidate'),
		'section'  => 'politics_candidate_left_right',
	)));

	$wp_customize->add_setting('politics_candidate_breadcrumb_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'politics_candidate_breadcrumb_hover_color', array(
		'label'    => __('Breadcrumb Hover Color', 'politics-candidate'),
		'section'  => 'politics_candidate_left_right',
	)));

	$wp_customize->add_setting('politics_candidate_breadcrumb_hover_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'politics_candidate_breadcrumb_hover_bg_color', array(
		'label'    => __('Breadcrumb Hover Background Color', 'politics-candidate'),
		'section'  => 'politics_candidate_left_right',
	)));

	// Preloader
	$wp_customize->add_setting( 'politics_candidate_preloader_hide',array(
		'default' => false,
      	'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ) );
    $wp_customize->add_control('politics_candidate_preloader_hide',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Preloader','politics-candidate' ),
        'section' => 'politics_candidate_left_right'
    ));

    $wp_customize->add_setting('politics_candidate_preloader_type',array(
        'default'   => 'center-square',
        'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control( 'politics_candidate_preloader_type', array(
		'label' => __( 'Preloader Type','politics-candidate' ),
		'section' => 'politics_candidate_left_right',
		'type'  => 'select',
		'settings' => 'politics_candidate_preloader_type',
		'choices' => array(
		    'center-square' => __('Center Square','politics-candidate'),
		    'chasing-square' => __('Chasing Square','politics-candidate'),
	    ),
	));

	$wp_customize->add_setting( 'politics_candidate_preloader_color', array(
	    'default' => '#333333',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'politics_candidate_preloader_color', array(
  		'label' => 'Preloader Color',
	    'section' => 'politics_candidate_left_right',
	    'settings' => 'politics_candidate_preloader_color',
  	)));

  	$wp_customize->add_setting( 'politics_candidate_preloader_bg_color', array(
	    'default' => '#fff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'politics_candidate_preloader_bg_color', array(
  		'label' => 'Preloader Background Color',
	    'section' => 'politics_candidate_left_right',
	    'settings' => 'politics_candidate_preloader_bg_color',
  	)));

  	// Header Section
	$wp_customize->add_section('politics_candidate_header',array(
		'title'	=> __('Header','politics-candidate'),
		'priority'	=> null,
		'panel' => 'politics_candidate_panel_id',
	));

	$wp_customize->add_setting('politics_candidate_topbar_hide_show',array(
       'default' => false,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
	));
	$wp_customize->add_control('politics_candidate_topbar_hide_show',array(
	   'type' => 'checkbox',
	   'label' => __('Show / Hide Topbar','politics-candidate'),
	   'section' => 'politics_candidate_header',
	));

    $wp_customize->add_setting('politics_candidate_topbar_phoneno',array(
		'default'	=> '',
		'sanitize_callback'	=> 'politics_candidate_sanitize_phone_number'
	));	
	$wp_customize->add_control('politics_candidate_topbar_phoneno',array(
		'label'	=> __('Add Phone Number','politics-candidate'),
		'section' => 'politics_candidate_header',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('politics_candidate_topbar_location',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('politics_candidate_topbar_location',array(
		'label'	=> __('Add Location','politics-candidate'),
		'section' => 'politics_candidate_header',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('politics_candidate_topbar_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('politics_candidate_topbar_email',array(
		'label'	=> __('Add Email Address','politics-candidate'),
		'section' => 'politics_candidate_header',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('politics_candidate_topbar_button_text',array(
        'default'=> 'Donate Now',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_topbar_button_text',array(
        'label' => __('Add Topbar Button Text','politics-candidate'),
        'section'=> 'politics_candidate_header',
        'type'=> 'text'
    ));

	$wp_customize->add_setting('politics_candidate_topbar_button_link',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('politics_candidate_topbar_button_link',array(
        'label' => esc_html__('Add Button Link','politics-candidate'),
        'section'=> 'politics_candidate_header',
        'type'=> 'url'
    ));

	$wp_customize->add_setting('politics_candidate_navigation_case',array(
        'default' => 'capitalize',
        'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control('politics_candidate_navigation_case',array(
        'type' => 'select',
        'label' => __('Navigation Case','politics-candidate'),
        'section' => 'politics_candidate_header',
        'choices' => array(
            'uppercase' => __('Uppercase','politics-candidate'),
            'capitalize' => __('Capitalize','politics-candidate'),
        ),
	) );

	$wp_customize->add_setting( 'politics_candidate_nav_font_size', array(
		'default'           => 14,
		'sanitize_callback' => 'politics_candidate_sanitize_float',
	) );
	$wp_customize->add_control( 'politics_candidate_nav_font_size', array(
		'label' => __( 'Navigation Font Size','politics-candidate' ),
		'section'     => 'politics_candidate_header',
		'type'        => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 50,
		),
	) );

	$wp_customize->add_setting('politics_candidate_font_weight_menu_option',array(
        'default' => '600',
        'sanitize_callback' => 'politics_candidate_sanitize_choices'
    ));
    $wp_customize->add_control('politics_candidate_font_weight_menu_option',array(
        'type' => 'select',
        'label' => __('Navigation Font Weight','politics-candidate'),
        'section' => 'politics_candidate_header',
        'choices' => array(
            '100' => __('100','politics-candidate'),
            '200' => __('200','politics-candidate'),
            '300' => __('300','politics-candidate'),
            '400' => __('400','politics-candidate'),
            '500' => __('500','politics-candidate'),
            '600' => __('600','politics-candidate'),
            '700' => __('700','politics-candidate'),
            '800' => __('800','politics-candidate'),
            '900' => __('900','politics-candidate'),
        ),
	) );

	$wp_customize->add_setting('politics_candidate_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'politics_candidate_menu_color', array(
		'label'    => __('Menu Color', 'politics-candidate'),
		'section'  => 'politics_candidate_header',
		'settings' => 'politics_candidate_menu_color',
	)));

	$wp_customize->add_setting('politics_candidate_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'politics_candidate_menu_hover_color', array(
		'label'    => __('Menu Hover Color', 'politics-candidate'),
		'section'  => 'politics_candidate_header',
		'settings' => 'politics_candidate_menu_hover_color',
	)));

	$wp_customize->add_setting('politics_candidate_submenu_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'politics_candidate_submenu_menu_color', array(
		'label'    => __('Submenu Color', 'politics-candidate'),
		'section'  => 'politics_candidate_header',
		'settings' => 'politics_candidate_submenu_menu_color',
	)));

	$wp_customize->add_setting( 'politics_candidate_submenu_hover_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'politics_candidate_submenu_hover_color', array(
  		'label' => __('Submenu Hover Color', 'politics-candidate'),
	    'section' => 'politics_candidate_header',
	    'settings' => 'politics_candidate_submenu_hover_color',
  	)));

  	$wp_customize->add_setting( 'politics_candidate_menu_settings_premium_features',array(
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_menu_settings_premium_features', array(
    	'type'=> 'hidden',
        'description' => "<h3>". esc_html('More Features in the Premium Version!','politics-candidate') ."</h3>
        	<ul>
        		<li>". esc_html('Menu Background Colors','politics-candidate') ."</li>
        		<li>". esc_html('Menu Item Fonts','politics-candidate') ."</li>
        		<li>". esc_html('Responsive Menu Colors','politics-candidate') ."</li>
        		<li>". esc_html('... and Other Premium Features','politics-candidate') ."</li>
        	</ul>
        	<a target='_blank' href='". esc_url('https://www.themescaliber.com/themes/political-candidate-wordpress-theme/') ." '>". esc_html('Upgrade Now','politics-candidate') ."</a>",
        'section' => 'politics_candidate_header'
        )
    ); 

    //Social Icons
	$wp_customize->add_section('politics_candidate_topbar',array(
		'title'	=> __('Social Icons','politics-candidate'),
		'priority'	=> null,
		'panel' => 'politics_candidate_panel_id',
	));

	$wp_customize->selective_refresh->add_partial(
		'politics_candidate_facebook_url',
		array(
			'selector'        => '.social-media',
			'render_callback' => 'politics_candidate_customize_partial_politics_candidate_facebook_url',
		)
	);

	$wp_customize->add_setting('politics_candidate_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('politics_candidate_facebook_url',array(
		'label'	=> __('Add Facebook link','politics-candidate'),
		'section'	=> 'politics_candidate_topbar',
		'setting'	=> 'politics_candidate_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('politics_candidate_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_facebook_icon',array(
		'label'	=> __('Add Facebook Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_topbar',
		'setting'	=> 'politics_candidate_facebook_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('politics_candidate_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('politics_candidate_twitter_url',array(
		'label'	=> __('Add Twitter link','politics-candidate'),
		'section'	=> 'politics_candidate_topbar',
		'setting'	=> 'politics_candidate_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('politics_candidate_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_twitter_icon',array(
		'label'	=> __('Add Twitter Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_topbar',
		'setting'	=> 'politics_candidate_twitter_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('politics_candidate_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('politics_candidate_instagram_url',array(
		'label'	=> __('Add Instagram link','politics-candidate'),
		'section'	=> 'politics_candidate_topbar',
		'setting'	=> 'politics_candidate_instagram_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('politics_candidate_instagram_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_instagram_icon',array(
		'label'	=> __('Add Instagram Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_topbar',
		'setting'	=> 'politics_candidate_instagram_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('politics_candidate_pintrest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('politics_candidate_pintrest_url',array(
		'label'	=> __('Add pintrest link','politics-candidate'),
		'section'	=> 'politics_candidate_topbar',
		'setting'	=> 'politics_candidate_pintrest_url',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('politics_candidate_pintrest_icon',array(
		'default'	=> 'fab fa-pinterest-p',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_pintrest_icon',array(
		'label'	=> __('Add pintrest Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_topbar',
		'setting'	=> 'politics_candidate_pintrest_icon',
		'type'		=> 'icon'
	)));


	//home page slider
	$wp_customize->add_section( 'politics_candidate_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'politics-candidate' ),
		'priority'   => null,
		'panel' => 'politics_candidate_panel_id'
	) );

	$wp_customize->selective_refresh->add_partial(
		'politics_candidate_slider_hide_show',
		array(
			'selector'        => '#slider .inner_carousel h1',
			'render_callback' => 'politics_candidate_customize_partial_politics_candidate_slider_hide_show',
		)
	);

	$wp_customize->add_setting('politics_candidate_slider_small_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('politics_candidate_slider_small_text',array(
		'label'	=> esc_html__('Slider Small Text','politics-candidate'),
		'section'=> 'politics_candidate_slidersettings',
		'type'=> 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'WE ARE WAITING FOR YOU', 'politics-candidate' ),
	    ),
	));	

	$wp_customize->add_setting('politics_candidate_slider_hide_show',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
	));
	$wp_customize->add_control('politics_candidate_slider_hide_show',array(
	   'type' => 'checkbox',
	   'label' => __('Show / Hide slider','politics-candidate'),
	   'section' => 'politics_candidate_slidersettings',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'politics_candidate_slider_page' . $count, array(
			'default'  => '',
			'sanitize_callback' => 'politics_candidate_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'politics_candidate_slider_page' . $count, array(
			'label' => __( 'Select Slide Image Page', 'politics-candidate' ),
			'section' => 'politics_candidate_slidersettings',
			'type'    => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('politics_candidate_slider_prev_icon',array(
		'default'	=> 'fas fa-angle-left',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_slider_prev_icon',array(
		'label'	=>__('Add Slider Prev Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_slidersettings',
		'setting'	=> 'politics_candidate_slider_prev_icon',
		'type'		=> 'icon',
	)));

	$wp_customize->add_setting('politics_candidate_slider_next_icon',array(
		'default'	=> 'fas fa-angle-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_slider_next_icon',array(
		'label'	=> __('Add Slider Next Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_slidersettings',
		'setting'	=> 'politics_candidate_slider_next_icon',
		'type'		=> 'icon',
	)));

	$wp_customize->add_setting('politics_candidate_slider_button_text',array(
        'default'=> 'Become A Volunteer',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_slider_button_text',array(
        'label' => __('Add Slider Button Text','politics-candidate'),
        'section'=> 'politics_candidate_slidersettings',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('politics_candidate_slider_button_link',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('politics_candidate_slider_button_link',array(
        'label' => esc_html__('Add Button Link','politics-candidate'),
        'section'=> 'politics_candidate_slidersettings',
        'type'=> 'url'
    ));

	//Show / Hide slider Title
	$wp_customize->add_setting('politics_candidate_slider_title',array(
       'default' => 'true',
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
	));
	
	$wp_customize->add_control('politics_candidate_slider_title',array(
	   'type' => 'checkbox',
	   'label' => __('Show / Hide slider Title','politics-candidate'),
	   'section' => 'politics_candidate_slidersettings',
	));

	//Show / Hide slider Content
	$wp_customize->add_setting('politics_candidate_slider_content',array(
       'default' => 'true',
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
	));
	$wp_customize->add_control('politics_candidate_slider_content',array(
	   'type' => 'checkbox',
	   'label' => __('Show / Hide slider Content','politics-candidate'),
	   'section' => 'politics_candidate_slidersettings',
	));

	$wp_customize->add_setting('politics_candidate_slider_button',array(
		'default' => true,
		'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
	));
	$wp_customize->add_control('politics_candidate_slider_button',array(
     	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider Button','politics-candidate'),
	   	'section' => 'politics_candidate_slidersettings'
	));

	$wp_customize->add_setting('politics_candidate_slider_width_options',array(
    	'default' => 'Full Width',
     	'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control('politics_candidate_slider_width_options',array(
		'type' => 'select',
		'label' => __('Slider Width Layout','politics-candidate'),
		'description' => __('Here you can change the Slider Width. ','politics-candidate'),
		'section' => 'politics_candidate_slidersettings',
		'choices' => array(
		   'Full Width' => __('Full Width','politics-candidate'),
		   'Container Width' => __('Container Width','politics-candidate'),
		),
	) );

	//Slider excerpt
	$wp_customize->add_setting( 'politics_candidate_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'    => 'absint',
	) );
	$wp_customize->add_control( 'politics_candidate_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','politics-candidate' ),
		'section'     => 'politics_candidate_slidersettings',
		'type'        => 'number',
		'settings'    => 'politics_candidate_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'politics_candidate_slider_height', array(
		'default'          => '',
		'sanitize_callback'	=> 'politics_candidate_sanitize_float'
	) );
	$wp_customize->add_control( 'politics_candidate_slider_height', array(
		'label' => esc_html__( 'Slider Height','politics-candidate' ),
		'section' => 'politics_candidate_slidersettings',
		'type'    => 'number',
		'description' => __('Measurement is in pixel.','politics-candidate'),
		'input_attrs' => array(
			'step' => 1,
			'min'  => 500,
			'max'  => 1000,
		),
	) );


	//Event Section
	$wp_customize->add_section('politics_candidate_event_section',array(
		'title'	=> __('Event Section','politics-candidate'),
		'panel' => 'politics_candidate_panel_id',
	));

	$wp_customize->add_setting('politics_candidate_event_hide_show',array(
       'default' => false,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
	));
	$wp_customize->add_control('politics_candidate_event_hide_show',array(
	   'type' => 'checkbox',
	   'label' => __('Show / Hide Event Section','politics-candidate'),
	   'section' => 'politics_candidate_event_section',
	));

	$wp_customize->add_setting('politics_candidate_upcoming_event_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('politics_candidate_upcoming_event_title',array(
		'label'	=> esc_html__( 'Upcoming Event Title', 'politics-candidate' ), 
		'section'	=> 'politics_candidate_event_section',
		'type'		=> 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'Upcoming Event', 'politics-candidate' ),
	    ),
	));

	$wp_customize->add_setting('politics_candidate_upcoming_event_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('politics_candidate_upcoming_event_text',array(
		'label'	=> esc_html__( 'Upcoming Event Text', 'politics-candidate' ), 
		'section'	=> 'politics_candidate_event_section',
		'type'		=> 'text',
	));

	$wp_customize->add_setting('politics_candidate_best_event_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('politics_candidate_best_event_title',array(
		'label'	=> esc_html__( 'Best Event Title', 'politics-candidate' ), 
		'section'	=> 'politics_candidate_event_section',
		'type'		=> 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'Visit Over Recent Best Events', 'politics-candidate' ),
	    ),
	));

	$wp_customize->add_setting('politics_candidate_best_event_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('politics_candidate_best_event_text',array(
		'label'	=> esc_html__( 'Best Event Text', 'politics-candidate' ), 
		'section'	=> 'politics_candidate_event_section',
		'type'		=> 'text',
	));
		    
    $wp_customize->add_setting('politics_candidate_human_right_icon',array(
		'default'	=> 'fas fa-check',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_human_right_icon', array(
		'label'	=> __('Add List Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_event_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'politics_candidate_human_right_title', array(
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'politics_candidate_human_right_title', array(
      'label'    => __( 'Add List title', 'politics-candidate' ),
      'section'  => 'politics_candidate_event_section',
      'type'     => 'text'
    ));

    $wp_customize->add_setting( 'politics_candidate_human_right_text', array(
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'politics_candidate_human_right_text', array(
      'label'    => __( 'Add List Text', 'politics-candidate' ),
      'section'  => 'politics_candidate_event_section',
      'type'     => 'text'
    ));

    $wp_customize->add_setting('politics_candidate_women_leadership_icon',array(
		'default'	=> 'fas fa-check',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_women_leadership_icon', array(
		'label'	=> __('Add List Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_event_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'politics_candidate_women_leadership_title', array(
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'politics_candidate_women_leadership_title', array(
      'label'    => __( 'Add List title', 'politics-candidate' ),
      'section'  => 'politics_candidate_event_section',
      'type'     => 'text'
    ));

    $wp_customize->add_setting( 'politics_candidate_women_leadership_text', array(
      'default'           => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'politics_candidate_women_leadership_text', array(
      'label'    => __( 'Add List Text', 'politics-candidate' ),
      'section'  => 'politics_candidate_event_section',
      'type'     => 'text'
    ));

    $wp_customize->add_setting('politics_candidate_product_clock_timer_end',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('politics_candidate_product_clock_timer_end',array(
		'label' => __('Enter End Date of Timer','politics-candidate'),
		'section' => 'politics_candidate_event_section',
		'description' => __('Timer get the current date and time. So you just need to add the end date. Please Use the following format to add the date "Month date year hours:minutes:seconds" example "April 11 2024 11:00:00".','politics-candidate'),
		'type'=> 'text'
	));

	$categories = get_categories( );
 	$cats = array();
 	$i = 0;
 	foreach($categories as $category){
     	if($i==0){
         $default = $category->slug;
         $i++;
     	}
     $cats[$category->slug] = $category->name;
 	}
 	$wp_customize->add_setting('politics_candidate_event_category',array(
     	'sanitize_callback' => 'politics_candidate_sanitize_choices',
 	));
	$wp_customize->add_control('politics_candidate_event_category',array(
		'type'    => 'select',
		'choices' => $cats,
		'label' => __('Select Event Category','politics-candidate'),
		'section' => 'politics_candidate_event_section',
 	));

 	$wp_customize->add_setting('politics_candidate_event_background_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'politics_candidate_event_background_img',array(
        'label' => __('Add Section Background Image','politics-candidate'),
        'section' => 'politics_candidate_event_section'
	)));

	$wp_customize->add_setting( 'politics_candidate_event_settings_premium_features',array(
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_event_settings_premium_features', array(
    	'type'=> 'hidden',
        'description' => "<h3>". esc_html('More Features in the Premium Version!','politics-candidate') ."</h3>
        	<ul>
        		<li>". esc_html('Section Background Color Option','politics-candidate') ."</li>
        		<li>". esc_html('Upcoming Event Heading Typography Options','politics-candidate') ."</li>
        		<li>". esc_html('... and Other Premium Features','politics-candidate') ."</li>
        	</ul>
        	<a target='_blank' href='". esc_url('https://www.themescaliber.com/themes/political-candidate-wordpress-theme/') ." '>". esc_html('Upgrade Now','politics-candidate') ."</a>",
        'section' => 'politics_candidate_event_section'
        )
    );

	//Blog Post
	$wp_customize->add_section('politics_candidate_blog_post',array(
		'title'	=> __('Post Settings','politics-candidate'),
		'panel' => 'politics_candidate_panel_id',
	));	

	$wp_customize->add_setting('politics_candidate_blog_post_alignment',array(
        'default' => 'left',
        'sanitize_callback' => 'politics_candidate_sanitize_choices'
    ));
	$wp_customize->add_control('politics_candidate_blog_post_alignment', array(
        'type' => 'select',
        'label' => __( 'Blog Post Alignment', 'politics-candidate' ),
        'section' => 'politics_candidate_blog_post',
        'choices' => array(
            'left' => __('Left Align','politics-candidate'),
            'right' => __('Right Align','politics-candidate'),
            'center' => __('Center Align','politics-candidate')
        ),
    ));

	$wp_customize->add_setting('politics_candidate_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Date','politics-candidate'),
       'section' => 'politics_candidate_blog_post'
    ));

    $wp_customize->add_setting('politics_candidate_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_blog_post',
		'setting'	=> 'politics_candidate_postdate_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('politics_candidate_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Author','politics-candidate'),
       'section' => 'politics_candidate_blog_post'
    ));

    $wp_customize->add_setting('politics_candidate_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_author_icon',array(
		'label'	=> __('Add Post Author Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_blog_post',
		'setting'	=> 'politics_candidate_author_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('politics_candidate_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Comments','politics-candidate'),
       'section' => 'politics_candidate_blog_post'
    ));

    $wp_customize->add_setting('politics_candidate_comment_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_comment_icon',array(
		'label'	=> __('Add Post Comment Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_blog_post',
		'setting'	=> 'politics_candidate_comment_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('politics_candidate_time_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Time','politics-candidate'),
       'section' => 'politics_candidate_blog_post'
    ));

    $wp_customize->add_setting('politics_candidate_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_time_icon',array(
		'label'	=> __('Add Post Time Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_blog_post',
		'setting'	=> 'politics_candidate_time_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('politics_candidate_show_hide_post_categories',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_show_hide_post_categories',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable post category','politics-candidate'),
       'section' => 'politics_candidate_blog_post'
    ));

    $wp_customize->add_setting('politics_candidate_feature_image_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_feature_image_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Featured Image','politics-candidate'),
       'section' => 'politics_candidate_blog_post'
    ));

    $wp_customize->add_setting( 'politics_candidate_featured_image_border_radius', array(
		'default' => 0,
		'sanitize_callback'	=> 'politics_candidate_sanitize_float'
	) );
	$wp_customize->add_control( 'politics_candidate_featured_image_border_radius', array(
		'label' => __( 'Featured image border radius','politics-candidate' ),
		'section' => 'politics_candidate_blog_post',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min'  => 0,
			'max'  => 50,
		),
	) );

    $wp_customize->add_setting( 'politics_candidate_featured_image_box_shadow', array(
		'default' => 0,
		'sanitize_callback'	=> 'politics_candidate_sanitize_float'
	) );
	$wp_customize->add_control( 'politics_candidate_featured_image_box_shadow', array(
		'label' => __( 'Featured image box shadow','politics-candidate' ),
		'section' => 'politics_candidate_blog_post',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min'  => 0,
			'max'  => 50,
		),
	) );

	$wp_customize->add_setting('politics_candidate_metabox_seperator',array(
       'default' => '|',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_metabox_seperator',array(
       'type' => 'text',
       'label' => __('Metabox Seperator','politics-candidate'),
       'description' => __('Ex: "/", "|", "-", ...','politics-candidate'),
       'section' => 'politics_candidate_blog_post'
    ));

    $wp_customize->add_setting('politics_candidate_post_content',array(
    	'default' => 'Excerpt Content',
        'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control('politics_candidate_post_content',array(
        'type' => 'radio',
        'label' => __('Post Content Type','politics-candidate'),
        'section' => 'politics_candidate_blog_post',
        'choices' => array(
            'No Content' => __('No Content','politics-candidate'),
            'Full Content' => __('Full Content','politics-candidate'),
            'Excerpt Content' => __('Excerpt Content','politics-candidate'),
        ),
	) );

    $wp_customize->add_setting( 'politics_candidate_post_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'	=> 'politics_candidate_sanitize_float'
	) );
	$wp_customize->add_control( 'politics_candidate_post_excerpt_length', array(
		'label' => esc_html__( 'Post Excerpt Length','politics-candidate' ),
		'section'  => 'politics_candidate_blog_post',
		'type'  => 'number',
		'settings' => 'politics_candidate_post_excerpt_length',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'politics_candidate_button_excerpt_suffix', array(
		'default'   => __('[...]','politics-candidate' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'politics_candidate_button_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Suffix','politics-candidate' ),
		'section'     => 'politics_candidate_blog_post',
		'type'        => 'text',
		'settings' => 'politics_candidate_button_excerpt_suffix'
	) );

	$wp_customize->add_setting( 'politics_candidate_post_button_text', array(
		'default'   => esc_html__('Read More','politics-candidate' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'politics_candidate_post_button_text', array(
		'label' => esc_html__('Post Button Text','politics-candidate' ),
		'section'     => 'politics_candidate_blog_post',
		'type'        => 'text',
		'settings'    => 'politics_candidate_post_button_text'
	) );

	$wp_customize->add_setting( 'politics_candidate_button_font_size', array(
		'default'           => 14,
		'sanitize_callback' => 'politics_candidate_sanitize_float',
	) );
	$wp_customize->add_control( 'politics_candidate_button_font_size', array(
		'label' => __( 'Button Font Size','politics-candidate' ),
		'section'     => 'politics_candidate_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 50,
		),
	) );

	// text trasform
	$wp_customize->add_setting('politics_candidate_button_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control('politics_candidate_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','politics-candidate'),
		'choices' => array(
            'Uppercase' => __('Uppercase','politics-candidate'),
            'Capitalize' => __('Capitalize','politics-candidate'),
            'Lowercase' => __('Lowercase','politics-candidate'),
        ),
		'section'=> 'politics_candidate_blog_post',
	));

	$wp_customize->add_setting('politics_candidate_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'politics_candidate_sanitize_float'
	));
	$wp_customize->add_control('politics_candidate_top_button_padding',array(
		'label'	=> __('Top Bottom Button Padding','politics-candidate'),
		'input_attrs' => array(
            'step' => 1,
			'min'  => 0,
			'max'  => 50,
        ),
		'section'=> 'politics_candidate_blog_post',
		'type'=> 'number',
	));

	$wp_customize->add_setting('politics_candidate_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'politics_candidate_sanitize_float'
	));
	$wp_customize->add_control('politics_candidate_left_button_padding',array(
		'label'	=> __('Left Right Button Padding','politics-candidate'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'politics_candidate_blog_post',
		'type'=> 'number',
	));

	$wp_customize->add_setting( 'politics_candidate_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'politics_candidate_sanitize_float'
	) );
	$wp_customize->add_control('politics_candidate_button_border_radius', array(
        'label'  => __('Button Border Radius','politics-candidate'),
        'type'=> 'number',
        'section'  => 'politics_candidate_blog_post',
        'input_attrs' => array(
        	'step' => 1,
            'min' => 0,
            'max' => 50,
        ),
    ));

    $wp_customize->add_setting( 'politics_candidate_post_blocks', array(
        'default'			=> 'Without box',
        'sanitize_callback'	=> 'politics_candidate_sanitize_choices'
    ));
    $wp_customize->add_control( 'politics_candidate_post_blocks', array(
        'section' => 'politics_candidate_blog_post',
        'type' => 'select',
        'label' => __( 'Post blocks', 'politics-candidate' ),
        'choices' => array(
            'Within box'  => __( 'Within box', 'politics-candidate' ),
            'Without box' => __( 'Without box', 'politics-candidate' ),
    )));

    $wp_customize->add_setting('politics_candidate_navigation_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_navigation_hide',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Post Navigation','politics-candidate'),
       'section' => 'politics_candidate_blog_post'
    ));

    $wp_customize->add_setting( 'politics_candidate_post_navigation_type', array(
        'default'			=> 'numbers',
        'sanitize_callback'	=> 'politics_candidate_sanitize_choices'
    ));
    $wp_customize->add_control( 'politics_candidate_post_navigation_type', array(
        'section' => 'politics_candidate_blog_post',
        'type' => 'select',
        'label' => __( 'Post Navigation Type', 'politics-candidate' ),
        'choices' => array(
            'numbers'  => __( 'Number', 'politics-candidate' ),
            'next-prev' => __( 'Next/Prev Button', 'politics-candidate' ),
    )));

    $wp_customize->add_setting( 'politics_candidate_post_navigation_position', array(
        'default'			=> 'bottom',
        'sanitize_callback'	=> 'politics_candidate_sanitize_choices'
    ));
    $wp_customize->add_control( 'politics_candidate_post_navigation_position', array(
        'section' => 'politics_candidate_blog_post',
        'type' => 'select',
        'label' => __( 'Post Navigation Position', 'politics-candidate' ),
        'choices' => array(
            'top'  => __( 'Top', 'politics-candidate' ),
            'bottom' => __( 'Bottom', 'politics-candidate' ),
            'both' => __( 'Both', 'politics-candidate' ),
    )));

    $wp_customize->add_setting( 'politics_candidate_post_settings_premium_features',array(
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_post_settings_premium_features', array(
    	'type'=> 'hidden',
        'description' => "<h3>". esc_html('More Features in the Premium Version!','politics-candidate') ."</h3>
        	<ul>
        		<li>". esc_html('Section Heading Option','politics-candidate') ."</li>
        		<li>". esc_html('Animated Elements Colors','politics-candidate') ."</li>
        		<li>". esc_html('... and Other Premium Features','politics-candidate') ."</li>
        	</ul>
        	<a target='_blank' href='". esc_url('https://www.themescaliber.com/themes/political-candidate-wordpress-theme/') ." '>". esc_html('Upgrade Now','politics-candidate') ."</a>",
        'section' => 'politics_candidate_blog_post'
        )
    );

    //Single Post Settings
	$wp_customize->add_section('politics_candidate_single_post',array(
		'title'	=> __('Single Post Settings','politics-candidate'),
		'panel' => 'politics_candidate_panel_id',
	));	

	$wp_customize->add_setting( 'politics_candidate_single_post_breadcrumb',array(
		'default' => true,
		'transport' => 'refresh',
      	'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ) );
    $wp_customize->add_control('politics_candidate_single_post_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Post Breadcrumb','politics-candidate' ),
        'section' => 'politics_candidate_single_post'
    ));

    $wp_customize->add_setting('politics_candidate_single_post_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Date','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

    $wp_customize->add_setting('politics_candidate_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_single_postdate_icon',array(
		'label'	=> __('Add Sigle Post Date Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_single_post',
		'setting'	=> 'politics_candidate_single_postdate_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('politics_candidate_single_post_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Author','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

   	$wp_customize->add_setting('politics_candidate_single_postauthor_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_single_postauthor_icon',array(
		'label'	=> __('Add Sigle Post Author Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_single_post',
		'setting'	=> 'politics_candidate_single_postauthor_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('politics_candidate_single_post_comment_no',array(
       'default' => 'true',
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_single_post_comment_no',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Comment Number','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

    $wp_customize->add_setting('politics_candidate_single_postcomment_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_single_postcomment_icon',array(
		'label'	=> __('Add Sigle Post Comment Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_single_post',
		'setting'	=> 'politics_candidate_single_postcomment_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('politics_candidate_single_post_time',array(
       'default' => 'true',
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_single_post_time',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Time','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

    $wp_customize->add_setting('politics_candidate_single_posttime_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize,'politics_candidate_single_posttime_icon',array(
		'label'	=> __('Add Sigle Post Time Icon','politics-candidate'),
		'transport' => 'refresh',
		'section'	=> 'politics_candidate_single_post',
		'setting'	=> 'politics_candidate_single_posttime_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('politics_candidate_feature_image',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_feature_image',array(
       'type' => 'checkbox',
       'label' => __(' Show / Hide Single Post Image','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

    $wp_customize->add_setting( 'politics_candidate_single_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'politics_candidate_sanitize_float',
	) );
	$wp_customize->add_control( 'politics_candidate_single_post_img_border_radius', array(
		'label'       => esc_html__( 'Single Post Image Border Radius','politics-candidate' ),
		'section'     => 'politics_candidate_single_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'politics_candidate_single_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'politics_candidate_sanitize_float',
	));
	$wp_customize->add_control('politics_candidate_single_post_img_box_shadow',array(
		'label' => esc_html__( 'Single Post Image Shadow','politics-candidate' ),
		'section' => 'politics_candidate_single_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

	$wp_customize->add_setting('politics_candidate_single_post_metabox_seperator',array(
       'default' => '|',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_single_post_metabox_seperator',array(
       'type' => 'text',
       'label' => __('Metabox Seperator','politics-candidate'),
       'description' => __('Ex: "/", "|", "-", ...','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

     $wp_customize->add_setting('politics_candidate_show_hide_single_post_categories',array(
		'default' => true,
		'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
 	));
 	$wp_customize->add_control('politics_candidate_show_hide_single_post_categories',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Categories','politics-candidate'),
		'section' => 'politics_candidate_single_post'
	));

	$wp_customize->add_setting('politics_candidate_category_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'politics_candidate_category_color', array(
		'label'    => __('Category Color', 'politics-candidate'),
		'section'  => 'politics_candidate_single_post',
	)));

	$wp_customize->add_setting('politics_candidate_category_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'politics_candidate_category_background_color', array(
		'label'    => __('Category Background Color', 'politics-candidate'),
		'section'  => 'politics_candidate_single_post',
	)));

    $wp_customize->add_setting('politics_candidate_tags',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_tags',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Tags','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

    $wp_customize->add_setting('politics_candidate_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Comment','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

    
    $wp_customize->add_setting( 'politics_candidate_comment_width', array(
		'default' => 100,
		'sanitize_callback'	=> 'politics_candidate_sanitize_float'
	) );
	$wp_customize->add_control( 'politics_candidate_comment_width', array(
		'label' => __( 'Comment Textarea Width', 'politics-candidate'),
		'section' => 'politics_candidate_single_post',
		'type' => 'number',
		'settings' => 'politics_candidate_comment_width',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

    $wp_customize->add_setting('politics_candidate_comment_title',array(
       'default' => __('Leave a Reply','politics-candidate'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_comment_title',array(
       'type' => 'text',
       'label' => __('Comment form Title','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

    $wp_customize->add_setting('politics_candidate_comment_submit_text',array(
       'default' => __('Post Comment','politics-candidate'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_comment_submit_text',array(
       'type' => 'text',
       'label' => __('Comment Button Text','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

    $wp_customize->add_setting('politics_candidate_nav_links',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_nav_links',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Nav Links','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

    $wp_customize->add_setting('politics_candidate_prev_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_prev_text',array(
       'type' => 'text',
       'label' => __('Previous Navigation Text','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

    $wp_customize->add_setting('politics_candidate_next_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_next_text',array(
       'type' => 'text',
       'label' => __('Next Navigation Text','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

    $wp_customize->add_setting('politics_candidate_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Related Posts','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

    $wp_customize->add_setting('politics_candidate_related_posts_title',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_related_posts_title',array(
       'type' => 'text',
       'label' => __('Related Posts Title','politics-candidate'),
       'section' => 'politics_candidate_single_post'
    ));

    $wp_customize->add_setting( 'politics_candidate_related_post_count', array(
		'default' => 3,
		'sanitize_callback'	=> 'politics_candidate_sanitize_float'
	) );
	$wp_customize->add_control( 'politics_candidate_related_post_count', array(
		'label' => esc_html__( 'Related Posts Count','politics-candidate' ),
		'section' => 'politics_candidate_single_post',
		'type' => 'number',
		'settings' => 'politics_candidate_related_post_count',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
	) );

    $wp_customize->add_setting( 'politics_candidate_post_order', array(
        'default' => 'categories',
        'sanitize_callback'	=> 'politics_candidate_sanitize_choices'
    ));
    $wp_customize->add_control( 'politics_candidate_post_order', array(
        'section' => 'politics_candidate_single_post',
        'type' => 'radio',
        'label' => __( 'Related Posts Order By', 'politics-candidate' ),
        'choices' => array(
            'categories' => __('Categories', 'politics-candidate'),
            'tags' => __( 'Tags', 'politics-candidate' ),
    )));

    $wp_customize->add_setting( 'politics_candidate_related_post_excerpt_number',array(
		'default' => 20,
		'sanitize_callback' => 'politics_candidate_sanitize_float'
	));

	$wp_customize->add_control('politics_candidate_related_post_excerpt_number',	array(
		'label' => esc_html__( 'Related Posts Content Limit','politics-candidate' ),
		'section' => 'politics_candidate_single_post',
		'type'    => 'number',
	 	'settings' => 'politics_candidate_related_post_excerpt_number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

    //404 page settings
	$wp_customize->add_section('politics_candidate_404_page',array(
		'title'	=> __('404 & No Result Page Settings','politics-candidate'),
		'priority'	=> null,
		'panel' => 'politics_candidate_panel_id',
	));

	$wp_customize->add_setting('politics_candidate_404_title',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_404_title',array(
       'type' => 'text',
       'label' => __('404 Page Title','politics-candidate'),
       'section' => 'politics_candidate_404_page'
    ));

    $wp_customize->add_setting('politics_candidate_404_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_404_text',array(
       'type' => 'text',
       'label' => __('404 Page Text','politics-candidate'),
       'section' => 'politics_candidate_404_page'
    ));

    $wp_customize->add_setting('politics_candidate_404_button_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_404_button_text',array(
       'type' => 'text',
       'label' => __('404 Page Button Text','politics-candidate'),
       'section' => 'politics_candidate_404_page'
    ));

    $wp_customize->add_setting('politics_candidate_no_result_title',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_no_result_title',array(
       'type' => 'text',
       'label' => __('No Result Page Title','politics-candidate'),
       'section' => 'politics_candidate_404_page'
    ));

    $wp_customize->add_setting('politics_candidate_no_result_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_no_result_text',array(
       'type' => 'text',
       'label' => __('No Result Page Text','politics-candidate'),
       'section' => 'politics_candidate_404_page'
    ));

    $wp_customize->add_setting('politics_candidate_show_search_form',array(
        'default' => true,
        'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
	));
	$wp_customize->add_control('politics_candidate_show_search_form',array(
     	'type' => 'checkbox',
      	'label' => __('Show/Hide Search Form','politics-candidate'),
      	'section' => 'politics_candidate_404_page',
	));

	//Footer
	$wp_customize->add_section('politics_candidate_footer_section',array(
		'title'	=> __('Footer Section','politics-candidate'),
		'priority'	=> null,
		'panel' => 'politics_candidate_panel_id',
	));

	$wp_customize->selective_refresh->add_partial(
		'politics_candidate_show_back_to_top',
		array(
			'selector'        => '.scrollup',
			'render_callback' => 'politics_candidate_customize_partial_politics_candidate_show_back_to_top',
		)
	);

	$wp_customize->add_setting('politics_candidate_show_back_to_top',array(
        'default' => 'true',
        'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
	));
	$wp_customize->add_control('politics_candidate_show_back_to_top',array(
     	'type' => 'checkbox',
      	'label' => __('Show/Hide Back to Top Button','politics-candidate'),
      	'section' => 'politics_candidate_footer_section',
	));

	$wp_customize->add_setting('politics_candidate_back_to_top_icon',array(
		'default'	=> 'fas fa-arrow-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize, 'politics_candidate_back_to_top_icon',array(
		'label'	=> __('Back to Top Icon','politics-candidate'),
		'section'	=> 'politics_candidate_footer_section',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('politics_candidate_scroll_icon_font_size',array(
		'default'=> 18,
		'sanitize_callback' => 'politics_candidate_sanitize_float'
	));
	$wp_customize->add_control('politics_candidate_scroll_icon_font_size',array(
		'label'	=> __('Back To Top Icon Font Size','politics-candidate'),
		'section'=> 'politics_candidate_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	$wp_customize->add_setting('politics_candidate_scroll_icon_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'politics_candidate_scroll_icon_color', array(
		'label'    => __('Back To Top Icon Color', 'politics-candidate'),
		'section'  => 'politics_candidate_footer_section',
	)));

	$wp_customize->add_setting('politics_candidate_back_to_top_text',array(
		'default'	=> __('Back to Top','politics-candidate'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('politics_candidate_back_to_top_text',array(
		'label'	=> __('Back to Top Button Text','politics-candidate'),
		'section'	=> 'politics_candidate_footer_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('politics_candidate_back_to_top_alignment',array(
        'default' => 'Right',
        'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control('politics_candidate_back_to_top_alignment',array(
        'type' => 'select',
        'label' => __('Back to Top Button Alignment','politics-candidate'),
        'section' => 'politics_candidate_footer_section',
        'choices' => array(
            'Left' => __('Left','politics-candidate'),
            'Right' => __('Right','politics-candidate'),
            'Center' => __('Center','politics-candidate'),
        ),
	) );

	$wp_customize->add_setting( 'politics_candidate_footer_hide_show',array(
      'default' => 'true',
      'sanitize_callback' => 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_footer_hide_show',array(
    	'type' => 'checkbox',
      'label' => esc_html__( 'Show / Hide Footer','politics-candidate' ),
      'section' => 'politics_candidate_footer_section'
    ));

	$wp_customize->add_setting('politics_candidate_footer_background_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'politics_candidate_footer_background_color', array(
		'label'    => __('Footer Background Color', 'politics-candidate'),
		'section'  => 'politics_candidate_footer_section',
	)));

	$wp_customize->add_setting('politics_candidate_footer_background_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'politics_candidate_footer_background_img',array(
        'label' => __('Footer Background Image','politics-candidate'),
        'section' => 'politics_candidate_footer_section'
	)));

	$wp_customize->add_setting('politics_candidate_footer_widget_layout',array(
        'default'           => '4',
        'sanitize_callback' => 'politics_candidate_sanitize_choices',
    ));
    $wp_customize->add_control('politics_candidate_footer_widget_layout',array(
        'type' => 'radio',
        'label'  => __('Footer widget layout', 'politics-candidate'),
        'section'     => 'politics_candidate_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'politics-candidate'),
        'choices' => array(
            '1'     => __('One', 'politics-candidate'),
            '2'     => __('Two', 'politics-candidate'),
            '3'     => __('Three', 'politics-candidate'),
            '4'     => __('Four', 'politics-candidate')
        ),
    ));

    $wp_customize->add_setting('politics_candidate_widgets_heading_fontsize',array(
		'default'	=> 25,
		'sanitize_callback'	=> 'politics_candidate_sanitize_float',
	));	
	$wp_customize->add_control('politics_candidate_widgets_heading_fontsize',array(
		'label'	=> __('Footer Widgets Heading Font Size','politics-candidate'),
		'section'	=> 'politics_candidate_footer_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('politics_candidate_widgets_heading_font_weight',array(
        'default' => '',
        'sanitize_callback' => 'politics_candidate_sanitize_choices'
    ));
    $wp_customize->add_control('politics_candidate_widgets_heading_font_weight',array(
        'type' => 'select',
        'label' => __('Footer Widgets Heading Font Weight','politics-candidate'),
        'section' => 'politics_candidate_footer_section',
        'choices' => array(
            '100' => __('100','politics-candidate'),
            '200' => __('200','politics-candidate'),
            '300' => __('300','politics-candidate'),
            '400' => __('400','politics-candidate'),
            '500' => __('500','politics-candidate'),
            '600' => __('600','politics-candidate'),
            '700' => __('700','politics-candidate'),
            '800' => __('800','politics-candidate'),
            '900' => __('900','politics-candidate'),
        ),
	) );

    $wp_customize->add_setting('politics_candidate_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control('politics_candidate_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading Alignment','politics-candidate'),
    'section' => 'politics_candidate_footer_section',
    'choices' => array(
    	'Left' => __('Left','politics-candidate'),
        'Center' => __('Center','politics-candidate'),
        'Right' => __('Right','politics-candidate')
      ),
	) );

	$wp_customize->add_setting('politics_candidate_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control('politics_candidate_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content Alignment','politics-candidate'),
    'section' => 'politics_candidate_footer_section',
    'choices' => array(
    	'Left' => __('Left','politics-candidate'),
        'Center' => __('Center','politics-candidate'),
        'Right' => __('Right','politics-candidate')
        ),
	) );

    $wp_customize->add_setting( 'politics_candidate_copyright_hide_show',array(
      'default' => 'true',
      'sanitize_callback' => 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_copyright_hide_show',array(
    	'type' => 'checkbox',
      'label' => esc_html__( 'Show / Hide Copyright','politics-candidate' ),
      'section' => 'politics_candidate_footer_section'
    ));

    $wp_customize->add_setting('politics_candidate_copyright_alignment',array(
        'default' => 'Center',
        'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control('politics_candidate_copyright_alignment',array(
        'type' => 'select',
        'label' => __('Copyright Alignment','politics-candidate'),
        'section' => 'politics_candidate_footer_section',
        'choices' => array(
            'Left' => __('Left','politics-candidate'),
            'Right' => __('Right','politics-candidate'),
            'Center' => __('Center','politics-candidate'),
        ),
	) );

	$wp_customize->add_setting('politics_candidate_copyright_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'politics_candidate_copyright_color', array(
		'label'    => __('Copyright Color', 'politics-candidate'),
		'section'  => 'politics_candidate_footer_section',
	)));

	$wp_customize->add_setting('politics_candidate_copyright__hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'politics_candidate_copyright__hover_color', array(
		'label'    => __('Copyright Hover Color', 'politics-candidate'),
		'section'  => 'politics_candidate_footer_section',
	)));

	$wp_customize->add_setting('politics_candidate_copyright_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'politics_candidate_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'politics-candidate'),
		'section'  => 'politics_candidate_footer_section',
	)));

	$wp_customize->add_setting('politics_candidate_copyright_fontsize',array(
		'default'	=> 16,
		'sanitize_callback'	=> 'politics_candidate_sanitize_float',
	));	
	$wp_customize->add_control('politics_candidate_copyright_fontsize',array(
		'label'	=> __('Copyright Font Size','politics-candidate'),
		'section'	=> 'politics_candidate_footer_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('politics_candidate_copyright_top_bottom_padding',array(
		'default'	=> 15,
		'sanitize_callback'	=> 'politics_candidate_sanitize_float',
	));	
	$wp_customize->add_control('politics_candidate_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top Bottom Padding','politics-candidate'),
		'section'	=> 'politics_candidate_footer_section',
		'type'		=> 'number'
	));

    $wp_customize->selective_refresh->add_partial(
		'politics_candidate_footer_copy',
		array(
			'selector'        => '#footer p',
			'render_callback' => 'politics_candidate_customize_partial_politics_candidate_footer_copy',
		)
	);
	
	$wp_customize->add_setting('politics_candidate_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('politics_candidate_footer_copy',array(
		'label'	=> __('Copyright Text','politics-candidate'),
		'section'	=> 'politics_candidate_footer_section',
		'type'		=> 'text'
	));

	//Mobile Media Section
	$wp_customize->add_section( 'politics_candidate_mobile_media_options' , array(
    	'title'      => __( 'Mobile Media Options', 'politics-candidate' ),
		'priority'   => null,
		'panel' => 'politics_candidate_panel_id'
	) );

	$wp_customize->add_setting('politics_candidate_responsive_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize, 'politics_candidate_responsive_open_menu_icon',array(
		'label'	=> __('Open Menu Icon','politics-candidate'),
		'section'	=> 'politics_candidate_mobile_media_options',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('politics_candidate_open_menu_label',array(
       'default' => __('Open Menu','politics-candidate'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_open_menu_label',array(
       'type' => 'text',
       'label' => __('Open Menu Label','politics-candidate'),
       'section' => 'politics_candidate_mobile_media_options'
    ));

	$wp_customize->add_setting('politics_candidate_responsive_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Politics_Candidate_Icon_Changer(
        $wp_customize, 'politics_candidate_responsive_close_menu_icon',array(
		'label'	=> __('Close Menu Icon','politics-candidate'),
		'section'	=> 'politics_candidate_mobile_media_options',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('politics_candidate_close_menu_label',array(
       'default' => __('Close Menu','politics-candidate'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('politics_candidate_close_menu_label',array(
       'type' => 'text',
       'label' => __('Close Menu Label','politics-candidate'),
       'section' => 'politics_candidate_mobile_media_options'
    ));

	$wp_customize->add_setting('politics_candidate_hide_topbar_responsive',array(
		'default' => true,
		'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
	));
	$wp_customize->add_control('politics_candidate_hide_topbar_responsive',array(
     	'type' => 'checkbox',
		'label' => __('Show / Hide Topbar','politics-candidate'),
		'section' => 'politics_candidate_mobile_media_options',
	));

	$wp_customize->add_setting('politics_candidate_slider_responsive',array(
        'default' => true,
        'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
	));
	$wp_customize->add_control('politics_candidate_slider_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider','politics-candidate'),
      	'section' => 'politics_candidate_mobile_media_options',
	));

	$wp_customize->add_setting('politics_candidate_slider_button_responsive',array(
        'default' => true,
        'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
	));
	$wp_customize->add_control('politics_candidate_slider_button_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Button','politics-candidate'),
      	'section' => 'politics_candidate_mobile_media_options',
	));

    $wp_customize->add_setting('politics_candidate_responsive_show_back_to_top',array(
        'default' => true,
        'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
	));
	$wp_customize->add_control('politics_candidate_responsive_show_back_to_top',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Back to Top Button','politics-candidate'),
      	'section' => 'politics_candidate_mobile_media_options',
	));

	$wp_customize->add_setting( 'politics_candidate_responsive_preloader_hide',array(
		'default' => false,
      	'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ) );
    $wp_customize->add_control('politics_candidate_responsive_preloader_hide',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Preloader','politics-candidate' ),
        'section' => 'politics_candidate_mobile_media_options'
    ));

    $wp_customize->add_setting( 'politics_candidate_sidebar_hide_show',array(
      'default' => true,
      'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_sidebar_hide_show',array(
      'type' => 'checkbox',
      'label' => esc_html__( 'Show / Hide Sidebar','politics-candidate' ),
      'section' => 'politics_candidate_mobile_media_options'
    ));

	//Woocommerce Section
	$wp_customize->add_section( 'politics_candidate_woocommerce_options' , array(
    	'title'      => __( 'Additional WooCommerce Options', 'politics-candidate' ),
		'priority'   => null,
		'panel' => 'politics_candidate_panel_id'
	) );

	// Product Columns
	$wp_customize->add_setting( 'politics_candidate_products_per_row' , array(
		'default'           => '3',
		'sanitize_callback' => 'politics_candidate_sanitize_choices',
	) );

	$wp_customize->add_control('politics_candidate_products_per_row', array(
		'label' => __( 'Product per row', 'politics-candidate' ),
		'section'  => 'politics_candidate_woocommerce_options',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
		),
	) );

	$wp_customize->add_setting('politics_candidate_product_per_page',array(
		'default'	=> '9',
		'sanitize_callback'	=> 'politics_candidate_sanitize_float'
	));	
	$wp_customize->add_control('politics_candidate_product_per_page',array(
		'label'	=> __('Product per page','politics-candidate'),
		'section'	=> 'politics_candidate_woocommerce_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('politics_candidate_shop_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_shop_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Shop page sidebar','politics-candidate'),
       'section' => 'politics_candidate_woocommerce_options',
    ));

    // shop page sidebar alignment
    $wp_customize->add_setting('politics_candidate_shop_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'politics_candidate_sanitize_choices',
	));
	$wp_customize->add_control('politics_candidate_shop_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Shop Page layout', 'politics-candidate'),
		'section'        => 'politics_candidate_woocommerce_options',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'politics-candidate'),
			'Right Sidebar' => __('Right Sidebar', 'politics-candidate'),
		),
	));

	// single product page sidebar
	$wp_customize->add_setting( 'politics_candidate_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ) );
    $wp_customize->add_control('politics_candidate_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Enable / Disable Single Product Page Sidebar','politics-candidate'),
		'section' => 'politics_candidate_woocommerce_options'
    ));

    // single product page sidebar alignment
    $wp_customize->add_setting('politics_candidate_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'politics_candidate_sanitize_choices',
	));
	$wp_customize->add_control('politics_candidate_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single product Page layout', 'politics-candidate'),
		'section'        => 'politics_candidate_woocommerce_options',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'politics-candidate'),
			'Right Sidebar' => __('Right Sidebar', 'politics-candidate'),
		),
	));

	$wp_customize->add_setting('politics_candidate_shop_page_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_shop_page_pagination',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Shop page pagination','politics-candidate'),
       'section' => 'politics_candidate_woocommerce_options',
    ));

    $wp_customize->add_setting('politics_candidate_product_page_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_product_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Product page sidebar','politics-candidate'),
       'section' => 'politics_candidate_woocommerce_options',
    ));

    $wp_customize->add_setting('politics_candidate_related_product',array(
       'default' => true,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_related_product',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Related product','politics-candidate'),
       'section' => 'politics_candidate_woocommerce_options',
    ));

	$wp_customize->add_setting( 'politics_candidate_woocommerce_button_padding_top',array(
		'default' => 10,
		'sanitize_callback' => 'politics_candidate_sanitize_float'
	));
	$wp_customize->add_control( 'politics_candidate_woocommerce_button_padding_top',	array(
		'label' => esc_html__( 'Button Top Bottom Padding','politics-candidate' ),
		'type' => 'number',
		'section' => 'politics_candidate_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'politics_candidate_woocommerce_button_padding_right',array(
	 	'default' => 20,
	 	'sanitize_callback' => 'politics_candidate_sanitize_float'
	));
	$wp_customize->add_control('politics_candidate_woocommerce_button_padding_right',	array(
	 	'label' => esc_html__( 'Button Right Left Padding','politics-candidate' ),
		'type' => 'number',
		'section' => 'politics_candidate_woocommerce_options',
	 	'input_attrs' => array(
			'min' => 0,
			'max' => 50,
	 		'step' => 1,
		),
	));

	$wp_customize->add_setting( 'politics_candidate_woocommerce_button_border_radius',array(
		'default' => 0,
		'sanitize_callback' => 'politics_candidate_sanitize_float'
	));
	$wp_customize->add_control('politics_candidate_woocommerce_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius','politics-candidate' ),
		'type' => 'number',
		'section' => 'politics_candidate_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

    $wp_customize->add_setting('politics_candidate_woocommerce_product_border',array(
       'default' => false,
       'sanitize_callback'	=> 'politics_candidate_sanitize_checkbox'
    ));
    $wp_customize->add_control('politics_candidate_woocommerce_product_border',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable product border','politics-candidate'),
       'section' => 'politics_candidate_woocommerce_options',
    ));

	$wp_customize->add_setting( 'politics_candidate_woocommerce_product_padding_top',array(
		'default' => 0,
		'sanitize_callback' => 'politics_candidate_sanitize_float'
	));
	$wp_customize->add_control('politics_candidate_woocommerce_product_padding_top', array(
		'label' => esc_html__( 'Product Top Bottom Padding','politics-candidate' ),
		'type' => 'number',
		'section' => 'politics_candidate_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'politics_candidate_woocommerce_product_padding_right',array(
		'default' => 0,
		'sanitize_callback' => 'politics_candidate_sanitize_float'
	));
	$wp_customize->add_control('politics_candidate_woocommerce_product_padding_right', array(
		'label' => esc_html__( 'Product Right Left Padding','politics-candidate' ),
		'type' => 'number',
		'section' => 'politics_candidate_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'politics_candidate_woocommerce_product_border_radius',array(
		'default' => 0,
		'sanitize_callback' => 'politics_candidate_sanitize_float'
	));
	$wp_customize->add_control('politics_candidate_woocommerce_product_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','politics-candidate' ),
		'type' => 'number',
		'section' => 'politics_candidate_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'politics_candidate_woocommerce_product_box_shadow',array(
		'default' => 0,
		'sanitize_callback' => 'politics_candidate_sanitize_float'
	));
	$wp_customize->add_control( 'politics_candidate_woocommerce_product_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','politics-candidate' ),
		'type' => 'number',
		'section' => 'politics_candidate_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('politics_candidate_sale_position',array(
        'default' => 'left',
        'sanitize_callback' => 'politics_candidate_sanitize_choices'
	));
	$wp_customize->add_control('politics_candidate_sale_position',array(
        'type' => 'select',
        'label' => __('Sale badge Position','politics-candidate'),
        'section' => 'politics_candidate_woocommerce_options',
        'choices' => array(
            'left' => __('Left','politics-candidate'),
            'right' => __('Right','politics-candidate'),
        ),
	) );

	$wp_customize->add_setting( 'politics_candidate_woocommerce_sale_top_padding',array(
		'default' => 5,
		'sanitize_callback' => 'politics_candidate_sanitize_float'
	));
	$wp_customize->add_control( 'politics_candidate_woocommerce_sale_top_padding',	array(
		'label' => esc_html__( 'Sale Top Bottom Padding','politics-candidate' ),
		'type' => 'number',
		'section' => 'politics_candidate_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'politics_candidate_woocommerce_sale_left_padding',array(
	 	'default' => 0,
	 	'sanitize_callback' => 'politics_candidate_sanitize_float'
	));
	$wp_customize->add_control('politics_candidate_woocommerce_sale_left_padding',	array(
	 	'label' => esc_html__( 'Sale Right Left Padding','politics-candidate' ),
		'type' => 'number',
		'section' => 'politics_candidate_woocommerce_options',
	 	'input_attrs' => array(
			'min' => 0,
			'max' => 50,
	 		'step' => 1,
		),
	));

	$wp_customize->add_setting( 'politics_candidate_woocommerce_sale_border_radius',array(
		'default' => 0,
		'sanitize_callback' => 'politics_candidate_sanitize_float'
	));
	$wp_customize->add_control('politics_candidate_woocommerce_sale_border_radius',array(
		'label' => esc_html__( 'Sale Border Radius','politics-candidate' ),
		'type' => 'number',
		'section' => 'politics_candidate_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'politics_candidate_product_sale_font_size',array(
		'default' => '',
		'sanitize_callback' => 'politics_candidate_sanitize_float'
	));
	$wp_customize->add_control('politics_candidate_product_sale_font_size',array(
		'label' => esc_html__( 'Sale Font Size','politics-candidate' ),
		'type' => 'number',
		'section' => 'politics_candidate_woocommerce_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));
}
add_action( 'customize_register', 'politics_candidate_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-width.php' );


/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class politics_candidate_Customize {

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
		$manager->register_section_type( 'politics_candidate_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Politics_Candidate_Customize_Section_Pro(
				$manager,
				'politics_candidate_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Politics Candidate Pro', 'politics-candidate' ),
					'pro_text' => esc_html__( 'Get Pro','politics-candidate' ),
					'pro_url'  => esc_url( 'https://www.themescaliber.com/themes/political-candidate-wordpress-theme/' ),
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

		wp_enqueue_script( 'politics-candidate-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'politics-candidate-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
politics_candidate_Customize::get_instance();