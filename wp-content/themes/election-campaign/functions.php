<?php
/**
 * Election Campaign functions and definitions
 * @package Election Campaign
 */
 /* Breadcrumb Begin */
 function election_campaign_the_breadcrumb() {
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
if ( ! function_exists( 'election_campaign_setup' ) ) :

function election_campaign_setup() {
	
	$GLOBALS['content_width'] = apply_filters( 'election_campaign_content_width', 640 );

	load_theme_textdomain( 'election-campaign', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('election-campaign-homepage-thumb',240,145,true);

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'election-campaign' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support('responsive-embeds');
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', election_campaign_font_url() ) );
}
endif; // election_campaign_setup
add_action( 'after_setup_theme', 'election_campaign_setup' );

/* Theme Widgets Setup */
function election_campaign_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'election-campaign' ),
		'description'   => __( 'Appears on posts and pages', 'election-campaign' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Posts and Pages Sidebar', 'election-campaign' ),
		'description'   => __( 'Appears on posts and pages', 'election-campaign' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'election-campaign' ),
		'description'   => __( 'Appears on posts and pages', 'election-campaign' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$election_campaign_widget_areas = get_theme_mod('election_campaign_footer_widget_areas', '4');
	for ($i=1; $i<=$election_campaign_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Widget ', 'election-campaign' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) ); 
	}
}
add_action( 'widgets_init', 'election_campaign_widgets_init' );

/* Footer Widget */
add_theme_support( 'starter-content', array(
	'widgets' => array(
		'footer-1' => array(
			'archives',
		),
		'footer-2' => array(
			'meta',
		),
		'footer-3' => array(
			'categories',
		),
		'footer-4' => array(
			'search',
		),
	),
));

// edit

if (!function_exists('election_campaign_edit_link')) :

    function election_campaign_edit_link($view = 'default')
    {
        global $post;
            edit_post_link(
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Edit <span class="screen-reader-text">%s</span>', 'election-campaign'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ),
                '<span class="edit-link"><i class="fa-solid fa-pen mx-2"></i>',
                '</span>'
            );

    }
endif;

/* Theme Font URL */
function election_campaign_font_url() {
	$font_family   = array(
		'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Bad Script',
		'Bebas Neue',
		'Fjalla One',
		'PT Sans:ital,wght@0,400;0,700;1,400;1,700',
		'PT Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
		'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Alex Brush',
		'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Playball',
		'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Julius Sans One',
		'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
		'Slabo 13px',
		'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
		'Overpass Mono:wght@300;400;500;600;700',
		'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
		'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
		'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Quicksand:wght@300..700',
		'Padauk:wght@400;700',
		'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
		'Inconsolata:wght@200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
		'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
		'Pacifico',
		'Indie Flower',
		'VT323',
		'Dosis:wght@200;300;400;500;600;700;800',
		'Frank Ruhl Libre:wght@300;400;500;700;900',
		'Fjalla One',
		'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Oxygen:wght@300;400;700',
		'Arvo:ital,wght@0,400;0,700;1,400;1,700',
		'Noto Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Lobster',
		'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
		'Yanone Kaffeesatz:wght@200;300;400;500;600;700',
		'Anton',
		'Libre Baskerville:ital,wght@0,400;0,700;1,400',
		'Bree Serif',
		'Gloria Hallelujah',
		'Abril Fatface',
		'Varela Round',
		'Vampiro One',
		'Shadows Into Light',
		'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
		'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Francois One',
		'Orbitron:wght@400;500;600;700;800;900',
		'Patua One',
		'Acme',
		'Satisfy',
		'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Architects Daughter',
		'Russo One',
		'Monda:wght@400;700',
		'Righteous',
		'Lobster Two:ital,wght@0,400;0,700;1,400;1,700',
		'Hammersmith One',
		'Courgette',
		'Permanent Marke',
		'Cherry Swash:wght@400;700',
		'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
		'Poiret One',
		'BenchNine:wght@300;400;700',
		'Economica:ital,wght@0,400;0,700;1,400;1,700',
		'Handlee',
		'Cardo:ital,wght@0,400;0,700;1,400',
		'Alfa Slab One',
		'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Cookie',
		'Chewy',
		'Great Vibes',
		'Coming Soon',
		'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
		'Days One',
		'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Shrikhand',
		'Tangerine:wght@400;700',
		'IM Fell English SC',
		'Boogaloo',
		'Bangers',
		'Fredoka One',
		'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
		'Shadows Into Light Two',
		'Marck Script',
		'Sacramento',
		'Unica One',
		'Dancing Script:wght@400;500;600;700',
		'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'DM Serif Display:ital@0;1',
		'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800'
	);

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/* Theme enqueue scripts */
function election_campaign_scripts() {
	wp_enqueue_style( 'election-campaign-font', election_campaign_font_url(), array() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'owl.carousel-style', get_template_directory_uri().'/css/owl.carousel.css' );
	// blocks-css
	wp_enqueue_style( 'election-campaign-block-style', get_theme_file_uri('/css/blocks.css') );
	wp_style_add_data( 'election-campaign-style', 'rtl', 'replace' );	
	wp_enqueue_style( 'election-campaign-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
	// body
	$election_campaign_body_color       = get_theme_mod(
		'election_campaign_body_color', '');
	$election_campaign_body_font_family = get_theme_mod('election_campaign_body_font_family', '');
	$election_campaign_body_font_size   = get_theme_mod(
		'election_campaign_body_font_size', '');

	// Paragraph
	$election_campaign_paragraph_color       = get_theme_mod('election_campaign_paragraph_color', '');
	$election_campaign_paragraph_font_family = get_theme_mod('election_campaign_paragraph_font_family', '');
	$election_campaign_paragraph_font_size   = get_theme_mod('election_campaign_paragraph_font_size', '');
	// "a" tag
	$election_campaign_atag_color       = get_theme_mod('election_campaign_atag_color', '');
	$election_campaign_atag_font_family = get_theme_mod('election_campaign_atag_font_family', '');
	// "li" tag
	$election_campaign_li_color       = get_theme_mod('election_campaign_li_color', '');
	$election_campaign_li_font_family = get_theme_mod('election_campaign_li_font_family', '');

	// H1
	$election_campaign_h1_color       = get_theme_mod('election_campaign_h1_color', '');
	$election_campaign_h1_font_family = get_theme_mod('election_campaign_h1_font_family', '');
	$election_campaign_h1_font_size   = get_theme_mod('election_campaign_h1_font_size', '');

	// H2
	$election_campaign_h2_color       = get_theme_mod('election_campaign_h2_color', '');
	$election_campaign_h2_font_family = get_theme_mod('election_campaign_h2_font_family', '');
	$election_campaign_h2_font_size   = get_theme_mod('election_campaign_h2_font_size', '');
	// H3
	$election_campaign_h3_color       = get_theme_mod('election_campaign_h3_color', '');
	$election_campaign_h3_font_family = get_theme_mod('election_campaign_h3_font_family', '');
	$election_campaign_h3_font_size   = get_theme_mod('election_campaign_h3_font_size', '');
	// H4
	$election_campaign_h4_color       = get_theme_mod('election_campaign_h4_color', '');
	$election_campaign_h4_font_family = get_theme_mod('election_campaign_h4_font_family', '');
	$election_campaign_h4_font_size   = get_theme_mod('election_campaign_h4_font_size', '');
	// H5
	$election_campaign_h5_color       = get_theme_mod('election_campaign_h5_color', '');
	$election_campaign_h5_font_family = get_theme_mod('election_campaign_h5_font_family', '');
	$election_campaign_h5_font_size   = get_theme_mod('election_campaign_h5_font_size', '');
	// H6
	$election_campaign_h6_color       = get_theme_mod('election_campaign_h6_color', '');
	$election_campaign_h6_font_family = get_theme_mod('election_campaign_h6_font_family', '');
	$election_campaign_h6_font_size   = get_theme_mod('election_campaign_h6_font_size', '');

	$election_campaign_custom_css = '
		body{
		    color:'.esc_html($election_campaign_body_color).'!important;
		    font-family: '.esc_html($election_campaign_body_font_family).';
		    font-size: '.esc_html($election_campaign_body_font_size).'px;
		}
		p,span{
		    color:'.esc_html($election_campaign_paragraph_color).'!important;
		    font-family: '.esc_html($election_campaign_paragraph_font_family).';
		    font-size: '.esc_html($election_campaign_paragraph_font_size).'px !important;
		}
		a{
		    color:'.esc_html($election_campaign_atag_color).'!important;
		    font-family: '.esc_html($election_campaign_atag_font_family).';
		}
		li{
		    color:'.esc_html($election_campaign_li_color).'!important;
		    font-family: '.esc_html($election_campaign_li_font_family).';
		}
		h1{
		    color:'.esc_html($election_campaign_h1_color).'!important;
		    font-family: '.esc_html($election_campaign_h1_font_family).'!important;
		    font-size: '.esc_html($election_campaign_h1_font_size).'px!important;
		}
		h2{
		    color:'.esc_html($election_campaign_h2_color).'!important;
		    font-family: '.esc_html($election_campaign_h2_font_family).'!important;
		    font-size: '.esc_html($election_campaign_h2_font_size).'px!important;
		}
		h3{
		    color:'.esc_html($election_campaign_h3_color).'!important;
		    font-family: '.esc_html($election_campaign_h3_font_family).'!important;
		    font-size: '.esc_html($election_campaign_h3_font_size).'px!important;
		}
		h4{
		    color:'.esc_html($election_campaign_h4_color).'!important;
		    font-family: '.esc_html($election_campaign_h4_font_family).'!important;
		    font-size: '.esc_html($election_campaign_h4_font_size).'px!important;
		}
		h5{
		    color:'.esc_html($election_campaign_h5_color).'!important;
		    font-family: '.esc_html($election_campaign_h5_font_family).'!important;
		    font-size: '.esc_html($election_campaign_h5_font_size).'px!important;
		}
		h6{
		    color:'.esc_html($election_campaign_h6_color).'!important;
		    font-family: '.esc_html($election_campaign_h6_font_family).'!important;
		    font-size: '.esc_html($election_campaign_h6_font_size).'px!important;
		}
	';
	wp_add_inline_style('election-campaign-basic-style', $election_campaign_custom_css);

	/* Theme Color sheet */
	require get_parent_theme_file_path( '/theme-color-option.php' );
	wp_add_inline_style( 'election-campaign-basic-style',$election_campaign_custom_css );
	wp_enqueue_script( 'tether-js', get_template_directory_uri() . '/js/tether.js', array('jquery') ,'',true);
	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri(). '/js/owl.carousel.js', array('jquery') ,'',true);
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery') ,'',true);
	wp_enqueue_script( 'election-campaign-custom-scripts-jquery', (get_template_directory_uri()) . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'election_campaign_scripts' );

define('ELECTION_CAMPAIGN_LIVE_DEMO',__('https://demos.buywptemplates.com/political-candidate-pro/', 'election-campaign'));
define('ELECTION_CAMPAIGN_BUY_PRO',__('https://www.buywptemplates.com/products/political-candidate-wordpress-theme/', 'election-campaign'));
define('ELECTION_CAMPAIGN_PRO_DOC',__('https://demos.buywptemplates.com/demo/docs/political-candidate-pro/', 'election-campaign'));
define('ELECTION_CAMPAIGN_FREE_DOC',__('https://demos.buywptemplates.com/demo/docs/election-campaign/', 'election-campaign'));
define('ELECTION_CAMPAIGN_PRO_SUPPORT',__('https://buywptemplates.com/pages/community', 'election-campaign'));
define('ELECTION_CAMPAIGN_FREE_SUPPORT',__('https://wordpress.org/support/theme/election-campaign/', 'election-campaign'));
define('ELECTION_CAMPAIGN_CREDIT',__('https://www.buywptemplates.com/products/free-political-wordpress-theme/', 'election-campaign'));

if ( ! function_exists( 'election_campaign_credit' ) ) {
	function election_campaign_credit(){
		echo "<a href=".esc_url(ELECTION_CAMPAIGN_CREDIT).">".esc_html__('Election Campaign WordPress Theme','election-campaign')."</a>";
	}
}

/* Excerpt Limit Begin */
function election_campaign_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

/*radio button sanitization*/
function election_campaign_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function election_campaign_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

/* Integer sanitization */
if ( ! function_exists( 'election_campaign_sanitize_integer' ) ) {
	function election_campaign_sanitize_integer( $input ) {
		return (int) $input;
	}
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'election_campaign_loop_columns');
if (!function_exists('election_campaign_loop_columns')) {
	function election_campaign_loop_columns() {
		$election_campaign_columns = get_theme_mod( 'election_campaign_per_columns', 3 );
		return $election_campaign_columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'election_campaign_shop_per_page', 20 );
function election_campaign_shop_per_page( $election_campaign_cols ) {
  	$cols = get_theme_mod( 'election_campaign_product_per_page', 9 );
	return $cols;
}

function election_campaign_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

//Display the related posts
if ( ! function_exists( 'election_campaign_related_posts' ) ) {
	function election_campaign_related_posts() {
		wp_reset_postdata();
		global $post;
		$args = array(
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'ignore_sticky_posts'    => 1,
			'orderby'                => 'rand',
			'post__not_in'           => array( $post->ID ),
			'posts_per_page'         => absint( get_theme_mod( 'election_campaign_related_posts_count_number', '3' ) ),
		);
		// Categories
		if ( get_theme_mod( 'election_campaign_related_posts_taxanomies', 'categories' ) == 'categories' ) {

			$cats = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $cats ) {
				$cats                 = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );
				$args['category__in'] = $cats;
			} else {
				$args['cat'] = $cats;
			}
		}
		// Tags
		if ( get_theme_mod( 'election_campaign_related_posts_taxanomies', 'categories' ) == 'tags' ) {

			$tags = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $tags ) {
				$tags            = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
				$args['tag__in'] = $tags;
			} else {
				$args['tag_slug__in'] = explode( ',', $tags );
			}
			if ( ! $tags ) {
				$break = true;
			}
		}
		$query = ! isset( $break ) ? new WP_Query( $args ) : new WP_Query();
		return $query;
	}
}

function election_campaign_enable_post_featured_image(){
	if(get_theme_mod('election_campaign_post_featured_image') == 'Image' ) {
		return true;
	}
	return false;
}

function election_campaign_post_color_enabled(){
	if(get_theme_mod('election_campaign_post_featured_image') == 'Color' ) {
		return true;
	}
	return false;
}

function election_campaign_enable_post_image_custom_dimention(){
	if(get_theme_mod('election_campaign_post_featured_image_dimention') == 'Custom' ) {
		return true;
	}
	return false;
}

function election_campaign_show_post_color(){
	if(get_theme_mod('election_campaign_post_featured_image') == 'Color' ) {
		return true;
	}
	return false;
}

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Load Customizer file. */
require get_template_directory() . '/inc/customizer.php';

/* Load Customizer file. */
require get_template_directory() . '/wptt-webfont-loader.php';

/* Load welcome message.*/
require get_template_directory() . '/inc/dashboard/get_started_info.php';
