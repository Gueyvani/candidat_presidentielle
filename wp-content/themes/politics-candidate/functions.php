<?php
/**
 * Politics Candidate functions and definitions
 *
 * @package Politics Candidate
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Breadcrumb Begin */
function politics_candidate_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url( home_url() );
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(',');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			echo "<span> ";
				the_title();
		}
	}
}

/* Theme Setup */
if ( ! function_exists( 'politics_candidate_setup' ) ) :

function politics_candidate_setup() {

	$GLOBALS['content_width'] = apply_filters( 'politics_candidate_content_width', 640 );

	load_theme_textdomain( 'politics-candidate', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('politics-candidate-homepage-thumb',240,145,true);
	
   	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'politics-candidate' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	
	add_theme_support ('html5', array (
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

	add_theme_support('responsive-embeds');

	/* Selective refresh for widgets */
	add_theme_support( 'customize-selective-refresh-widgets' );

	/* Starter Content */
	add_theme_support( 'starter-content', array(
		'widgets' => array(
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			),
			'sidebar-2' => array(
				'text_business_info',
			),
			'sidebar-3' => array(
				'text_about',
				'search',
			),
			'footer-1' => array(
				'text_about',
			),
			'footer-2' => array(
				'archives',
			),
			'footer-3' => array(
				'text_business_info',
			),
			'footer-4' => array(
				'search',
			),
		),
    ));

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', politics_candidate_font_url() ) );

	// Dashboard Theme Notification
	global $pagenow;
	
	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'politics_candidate_activation_notice' );
	}	
}
endif;
add_action( 'after_setup_theme', 'politics_candidate_setup' );

// Dashboard Theme Notification
function politics_candidate_activation_notice() {
	echo '<div class="welcome-notice notice notice-success is-dimdissible">';
		echo '<h2>'. esc_html__( 'Thank You!!!!!', 'politics-candidate' ) .'</h2>';
		echo '<p>'. esc_html__( 'Much grateful to you for choosing our Politics Candidate theme from themescaliber. we praise you for opting our services over others. we are obliged to invite you on our welcome page to render you with our outstanding services.', 'politics-candidate' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=politics_candidate_guide' ) ) .'" class="button button-primary">'. esc_html__( 'Click Here...', 'politics-candidate' ) .'</a></p>';
	echo '</div>';
}

/* Theme Widgets Setup */
function politics_candidate_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'politics-candidate' ),
		'description'   => __( 'Appears on blog page sidebar', 'politics-candidate' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'politics-candidate' ),
		'description'   => __( 'Appears on page sidebar', 'politics-candidate' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'         => __( 'Third Column Sidebar', 'politics-candidate' ),
		'description' => __( 'Appears on page sidebar', 'politics-candidate' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$politics_candidate_widget_areas = get_theme_mod('politics_candidate_footer_widget_layout', '4');
	for ($i=1; $i<=$politics_candidate_widget_areas; $i++) {
		register_sidebar( array(
			'name'        => __( 'Footer Nav ', 'politics-candidate' ) . $i,
			'id'          => 'footer-' . $i,
			'description' => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s py-2">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'politics-candidate' ),
		'description'   => __( 'Appears on shop page', 'politics-candidate' ),	
		'id'            => 'woocommerce_sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Single Product Page Sidebar', 'politics-candidate' ),
		'description'   => __( 'Appears on shop page', 'politics-candidate' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'politics_candidate_widgets_init' );

/* Theme Font URL */
function politics_candidate_font_url() {
	$font_family = array(
	    'ABeeZee:ital@0;1',
		'Abril Fatfac',
		'Acme',
		'Allura',
		'Amatic SC:wght@400;700',
		'Anton',
		'Architects Daughter',
		'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
		'Arvo:ital,wght@0,400;0,700;1,400;1,700',
		'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Assistant:wght@200;300;400;500;600;700;800',
		'Alfa Slab One',
		'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Bangers',
		'Boogaloo',
		'Bad Script',
		'Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Barlow Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Berkshire Swash',
		'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Bree Serif',
		'BenchNine:wght@300;400;700',
		'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cardo:ital,wght@0,400;0,700;1,400',
		'Courgette',
		'Caveat:wght@400;500;600;700',
		'Caveat Brush',
		'Cherry Swash:wght@400;700',
		'Comfortaa:wght@300;400;500;600;700',
		'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
		'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
		'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cookie',
		'Coming Soon',
		'Charm:wght@400;700',
		'Chewy',
		'Days One',
		'DM Serif Display:ital@0;1',
		'Dosis:wght@200;300;400;500;600;700;800',
		'EB Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800',
		'Economica:ital,wght@0,400;0,700;1,400;1,700',
		'Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Familjen Grotesk:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Fira Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Fredoka One',
		'Fjalla One',
		'Francois One',
		'Frank Ruhl Libre:wght@300;400;500;700;900',
		'Gabriela',
		'Gloria Hallelujah',
		'Great Vibes',
		'Handlee',
		'Hammersmith One',
		'Heebo:wght@100;200;300;400;500;600;700;800;900',
		'Hind:wght@300;400;500;600;700',
		'Inconsolata:wght@200;300;400;500;600;700;800;900',
		'Indie Flower',
		'IM Fell English SC',
		'Julius Sans One',
		'Jomhuria',
		'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Josefin Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Kaisei HarunoUmi:wght@400;500;700',
		'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Kaushan Script',
		'Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700',
		'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
		'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Libre Baskerville:ital,wght@0,400;0,700;1,400',
		'Lobster',
		'Lobster Two:ital,wght@0,400;0,700;1,400;1,700',
		'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		'Monda:wght@400;700',
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Marck Script',
		'Marcellus',
		'Merienda One',
		'Monda:wght@400;700',
		'Noto Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Nunito Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900',
		'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
		'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Overpass Mono:wght@300;400;500;600;700',
		'Oxygen:wght@300;400;700',
		'Oswald:wght@200;300;400;500;600;700',
		'Orbitron:wght@400;500;600;700;800;900',
		'Patua One',
		'Pacifico',
		'Padauk:wght@400;700',
		'Playball',
		'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'PT Sans:ital,wght@0,400;0,700;1,400;1,700',
		'PT Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
		'Permanent Marker',
		'Poiret One',
		'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Prata',
		'Quicksand:wght@300;400;500;600;700',
		'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
		'Ropa Sans:ital@0;1',
		'Russo One',
		'Righteous',
		'Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Satisfy',
		'Sen:wght@400;700;800',
		'Slabo 13px',
		'Slabo 27px',
		'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
		'Shadows Into Light Two',
		'Shadows Into Light',
		'Sacramento',
		'Sail',
		'Shrikhand',
		'League Spartan:wght@100;200;300;400;500;600;700;800;900',
		'Staatliches',
		'Stylish',
		'Tangerine:wght@400;700',
		'Titillium Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700',
		'Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
		'Unica One',
		'VT323',
		'Varela Round',
		'Vampiro One',
		'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
		'Work Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Yanone Kaffeesatz:wght@200;300;400;500;600;700',
		'Yeseva One',
		'ZCOOL XiaoWei'
	);
	
	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/* Theme enqueue scripts */
function politics_candidate_scripts() {
	wp_enqueue_style( 'politics-candidate-font', politics_candidate_font_url(), array() );
	wp_enqueue_style( 'politics-candidate-block-patterns-style-frontend', get_theme_file_uri('/css/block-frontend.css') );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'politics-candidate-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'politics-candidate-style', 'rtl', 'replace' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
	wp_enqueue_style( 'politics-candidate-block-style', get_template_directory_uri().'/css/block-style.css' );

    // Body
    $politics_candidate_body_color = get_theme_mod('politics_candidate_body_color', '');
    $politics_candidate_body_font_family = get_theme_mod('politics_candidate_body_font_family', '');
    $politics_candidate_body_font_size = get_theme_mod('politics_candidate_body_font_size', '');
	// Paragraph
    $politics_candidate_paragraph_color = get_theme_mod('politics_candidate_paragraph_color', '');
    $politics_candidate_paragraph_font_family = get_theme_mod('politics_candidate_paragraph_font_family', '');
    $politics_candidate_paragraph_font_size = get_theme_mod('politics_candidate_paragraph_font_size', '');
	// "a" tag
	$politics_candidate_atag_color = get_theme_mod('politics_candidate_atag_color', '');
    $politics_candidate_atag_font_family = get_theme_mod('politics_candidate_atag_font_family', '');
	// "li" tag
	$politics_candidate_li_color = get_theme_mod('politics_candidate_li_color', '');
    $politics_candidate_li_font_family = get_theme_mod('politics_candidate_li_font_family', '');
	// H1
	$politics_candidate_h1_color = get_theme_mod('politics_candidate_h1_color', '');
    $politics_candidate_h1_font_family = get_theme_mod('politics_candidate_h1_font_family', '');
    $politics_candidate_h1_font_size = get_theme_mod('politics_candidate_h1_font_size', '');
	// H2
	$politics_candidate_h2_color = get_theme_mod('politics_candidate_h2_color', '');
    $politics_candidate_h2_font_family = get_theme_mod('politics_candidate_h2_font_family', '');
    $politics_candidate_h2_font_size = get_theme_mod('politics_candidate_h2_font_size', '');
	// H3
	$politics_candidate_h3_color = get_theme_mod('politics_candidate_h3_color', '');
    $politics_candidate_h3_font_family = get_theme_mod('politics_candidate_h3_font_family', '');
    $politics_candidate_h3_font_size = get_theme_mod('politics_candidate_h3_font_size', '');
	// H4
	$politics_candidate_h4_color = get_theme_mod('politics_candidate_h4_color', '');
    $politics_candidate_h4_font_family = get_theme_mod('politics_candidate_h4_font_family', '');
    $politics_candidate_h4_font_size = get_theme_mod('politics_candidate_h4_font_size', '');
	// H5
	$politics_candidate_h5_color = get_theme_mod('politics_candidate_h5_color', '');
    $politics_candidate_h5_font_family = get_theme_mod('politics_candidate_h5_font_family', '');
    $politics_candidate_h5_font_size = get_theme_mod('politics_candidate_h5_font_size', '');
	// H6
	$politics_candidate_h6_color = get_theme_mod('politics_candidate_h6_color', '');
    $politics_candidate_h6_font_family = get_theme_mod('politics_candidate_h6_font_family', '');
    $politics_candidate_h6_font_size = get_theme_mod('politics_candidate_h6_font_size', '');
    $politics_candidate_theme_color = get_theme_mod('politics_candidate_theme_color', '');

	$politics_candidate_custom_css ='
	    body{
		    color:'.esc_attr($politics_candidate_body_color).'!important;
		    font-family: '.esc_attr($politics_candidate_body_font_family).'!important;
		    font-size: '.esc_attr($politics_candidate_body_font_size).'px !important;
		}
		p,span{
		    color:'.esc_attr($politics_candidate_paragraph_color).'!important;
		    font-family: '.esc_attr($politics_candidate_paragraph_font_family).'!important;
		    font-size: '.esc_attr($politics_candidate_paragraph_font_size).'!important;
		}
		a{
		    color:'.esc_attr($politics_candidate_atag_color).'!important;
		    font-family: '.esc_attr($politics_candidate_atag_font_family).';
		}
		li{
		    color:'.esc_attr($politics_candidate_li_color).'!important;
		    font-family: '.esc_attr($politics_candidate_li_font_family).';
		}
		h1{
		    color:'.esc_attr($politics_candidate_h1_color).'!important;
		    font-family: '.esc_attr($politics_candidate_h1_font_family).'!important;
		    font-size: '.esc_attr($politics_candidate_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_attr($politics_candidate_h2_color).'!important;
		    font-family: '.esc_attr($politics_candidate_h2_font_family).'!important;
		    font-size: '.esc_attr($politics_candidate_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_attr($politics_candidate_h3_color).'!important;
		    font-family: '.esc_attr($politics_candidate_h3_font_family).'!important;
		    font-size: '.esc_attr($politics_candidate_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_attr($politics_candidate_h4_color).'!important;
		    font-family: '.esc_attr($politics_candidate_h4_font_family).'!important;
		    font-size: '.esc_attr($politics_candidate_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_attr($politics_candidate_h5_color).'!important;
		    font-family: '.esc_attr($politics_candidate_h5_font_family).'!important;
		    font-size: '.esc_attr($politics_candidate_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_attr($politics_candidate_h6_color).'!important;
		    font-family: '.esc_attr($politics_candidate_h6_font_family).'!important;
		    font-size: '.esc_attr($politics_candidate_h6_font_size).'!important;
		}

		#header .social-media i:hover,.logo,.search-box i:hover,.primary-navigation ul ul a,#slider .carousel-control-prev-icon i:hover, #slider .carousel-control-next-icon i:hover,#slider .read-btn a:hover, .option a:hover,.header-menu-box .read-btn a:hover,#event-section ::-webkit-scrollbar-thumb,.tc-single-category a ,.tc-single-category a:hover, .footertown th,#footer,.footertown .tagcloud a:hover,.footertown .tagcloud a:hover,.services-box .tc-category a,.services-box .tc-category a:hover,#comments input[type="submit"].submit,#comments a.comment-reply-link,#comments a.comment-reply-link:hover, #comments input[type="submit"].submit:hover,.woocommerce span.onsale, .woocommerce a.button.alt,.woocommerce button.button,.woocommerce a.button, a.added_to_cart.wc-forward, .woocommerce #respond input#submit, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled],nav.woocommerce-MyAccount-navigation ul li,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-product-search button[type="submit"],.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,a.wc-block-components-totals-coupon-link,a.components-button.wc-block-components-button.wp-element-button.wc-block-cart__submit-button.contained,
		a.wc-block-components-checkout-return-to-cart-button,.wc-block-components-totals-coupon__button.contained,button.wc-block-components-checkout-place-order-button,.wc-block-grid__product-onsale,.tags a:hover,#sidebar th,#sidebar h3,#sidebar h2,#sidebar .wp-block-search__label,#sidebar input[type="submit"],#sidebar .tagcloud a:hover,.wp-block-tag-cloud a:hover,.wp-block-search__button,.blog .navigation .nav-previous a, .blog .navigation .nav-next a, .archive .navigation .nav-previous a, .archive .navigation .nav-next a, .search .navigation .nav-previous a, .search .navigation .nav-next a,.pagination a:hover, .page-links a:hover,.pagination .current, .page-links .current,.bradcrumbs a ,.bradcrumbs span,#event-section .list-main-sec i{
		    background-color:'.esc_attr($politics_candidate_theme_color).';
		}

		.wc-block-grid__product-onsale,.primary-navigation ul ul,#event-section .list-main-sec i,.footertown .tagcloud a:hover, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.wc-block-grid__product-onsale,.tags a ,#sidebar .tagcloud a:hover,.wp-block-tag-cloud a:hover
		{
		   border-color:'.esc_attr($politics_candidate_theme_color).'!important;
		}

		.mail-header i, .location-header i, .call-header i,.primary-navigation ul li a:hover,.textwidget a,.comment-list li.comment p a, #content-ma a,.entry-content a,.slider-small-text,#slider .read-btn:hover #slider .read-btn i,#slider .read-btn:hover i, .option i:hover,.header-menu-box .read-btn:hover i, .event-post-section .postbox i,.scrollup, .scrollup:focus,.scrollup:hover, .footertown input[type="submit"],.footertown .widget ul li a:hover,.metabox a:hover, .metabox a:hover i, .woocommerce ul.products li.product .star-rating,.tags a,#sidebar ul li a:hover,.services-box a.blogbutton-small,.services-box  i.far.fa-arrow-right.ms-2,.related-posts h3 a,.last-word,.last-word:after{
		    color:'.esc_attr($politics_candidate_theme_color).';
		}

		.primary-navigation ul li:hover,.woocommerce-message{
		   border-top-color:'.esc_attr($politics_candidate_theme_color).';
		}

		.footertown .widget h3,.footertown .wp-block-search__label,.last-word{
		   border-bottom-color:'.esc_attr($politics_candidate_theme_color).';
		}

		@media screen and (max-width: 1000px){
			.toggle-menu i,.side-menu{
			    background-color:'.esc_attr($politics_candidate_theme_color).';
			}
		}

		';
	wp_add_inline_style( 'politics-candidate-basic-style',$politics_candidate_custom_css );

	require get_parent_theme_file_path( '/tc-style.php' );
	wp_add_inline_style( 'politics-candidate-basic-style',$politics_candidate_custom_css );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js' );
	wp_enqueue_script( 'politics-candidate-custom-jquery', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery') ,'',true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'politics_candidate_scripts' );

/*radio button sanitization*/
function politics_candidate_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function politics_candidate_string_limit_words($string, $word_limit) {
    if ($word_limit == 0) {
        return ''; // Return an empty string if word limit is 0
    }
    $words = explode(' ', $string, ($word_limit + 1));
    if (count($words) > $word_limit) {
        array_pop($words);
    }
    return implode(' ', $words);
}


/*** Enqueue block editor style ****/
function politics_candidate_block_editor_styles() {
	wp_enqueue_style( 'politics-candidate-font', politics_candidate_font_url(), array() );
	wp_enqueue_style( 'politics-candidate-block-patterns-style-editor', get_theme_file_uri( '/css/block-editor.css' ), false, '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.css' );
    wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
}
add_action( 'enqueue_block_editor_assets', 'politics_candidate_block_editor_styles' );

function politics_candidate_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function politics_candidate_sanitize_dropdown_pages( $page_id, $setting ) {
  	// Ensure $input is an absolute integer.
  	$page_id = absint( $page_id );

  	// If $page_id is an ID of a published page, return it; otherwise, return the default.
  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'politics_candidate_loop_columns');
if (!function_exists('politics_candidate_loop_columns')) {
	function politics_candidate_loop_columns() {
		$columns = get_theme_mod( 'politics_candidate_products_per_row', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'politics_candidate_shop_per_page', 9 );
function politics_candidate_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'politics_candidate_product_per_page', 9 );
	return $cols;
}

// URL DEFINES
define('POLITICS_CANDIDATE_SITE_URL',__('https://www.themescaliber.com/themes/free-political-wordpress-theme/','politics-candidate'));
define('POLITICS_CANDIDATE_FREE_THEME_DOC',__('https://themescaliber.com/demo/doc/politics-candidate/','politics-candidate'));
define('POLITICS_CANDIDATE_SUPPORT',__('https://wordpress.org/support/theme/politics-candidate/','politics-candidate'));
define('POLITICS_CANDIDATE_REVIEW',__('https://wordpress.org/support/theme/politics-candidate/reviews/','politics-candidate'));
define('POLITICS_CANDIDATE_BUY_NOW',__('https://www.themescaliber.com/themes/political-candidate-wordpress-theme/','politics-candidate'));
define('POLITICS_CANDIDATE_LIVE_DEMO',__('https://themescaliber.com/demo/political-candidate-pro/','politics-candidate'));
define('POLITICS_CANDIDATE_PRO_DOC',__('https://themescaliber.com/demo/doc/political-candidate-pro/','politics-candidate'));

function politics_candidate_credit_link() {
    echo "<a href=".esc_url(POLITICS_CANDIDATE_SITE_URL)." target='_blank'>".esc_html__('Politics Candidate WordPress Theme','politics-candidate')."</a>";
}

function politics_candidate_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function politics_candidate_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/** Posts navigation. */
if ( ! function_exists( 'politics_candidate_post_navigation' ) ) {
	function politics_candidate_post_navigation() {
		$politics_candidate_pagination_type = get_theme_mod( 'politics_candidate_post_navigation_type', 'numbers' );
		if ( $politics_candidate_pagination_type == 'numbers' ) {
			the_posts_pagination();
		} else {
			the_posts_navigation( array(
	            'prev_text'          => __( 'Previous page', 'politics-candidate' ),
	            'next_text'          => __( 'Next page', 'politics-candidate' ),
	            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'politics-candidate' ) . ' </span>',
	        ) );
		}
	}
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Webfonts */
require get_template_directory() . '/wptt-webfont-loader.php';

/* Implement the get started page */
require get_template_directory() . '/inc/dashboard/getstart.php';

/* Block Pattern */
require get_template_directory() . '/block-patterns.php';

/* TGM Plugin Activation */
require get_template_directory() . '/inc/tgm/tgm.php';


