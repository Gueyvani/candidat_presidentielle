<?php
/**
 * Load basic function.
 *
 * @package Political_Era
 */

if( ! function_exists( 'political_era_primary_navigation_fallback' ) ) :

    /**
     * Fallback for primary navigation.
     */
    function political_era_primary_navigation_fallback() {
        echo '<ul>';
        echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'political-era' ). '</a></li>';
        wp_list_pages( array(
            'title_li' => '',
            'depth'    => 1,
            'number'   => 5,
        ) );
        echo '</ul>';

    }

endif;


if ( ! function_exists( 'political_era_all_icons_array' ) ) :
    /**
     * Register Fontawsome icon.
     *
     * @return fontwasome icon for the theme.
    */    
    function political_era_all_icons_array() {
        $political_era_icon_list_raw = 'fa-glass, fa-music, fa-search, fa-envelope-o, fa-heart, fa-star, fa-star-o, fa-user, fa-film, fa-th-large, fa-th, fa-th-list, fa-check, fa-times, fa-search-plus, fa-search-minus, fa-power-off, fa-signal, fa-cog, fa-trash-o, fa-home, fa-file-o, fa-clock-o, fa-road, fa-download, fa-arrow-circle-o-down, fa-arrow-circle-o-up, fa-inbox, fa-play-circle-o, fa-repeat, fa-refresh, fa-list-alt, fa-lock, fa-flag, fa-headphones, fa-volume-off, fa-volume-down, fa-volume-up, fa-qrcode, fa-barcode, fa-tag, fa-tags, fa-book, fa-bookmark, fa-print, fa-camera, fa-font, fa-bold, fa-italic, fa-text-height, fa-text-width, fa-align-left, fa-align-center, fa-align-right, fa-align-justify, fa-list, fa-outdent, fa-indent, fa-video-camera, fa-picture-o, fa-pencil, fa-map-marker, fa-adjust, fa-tint, fa-pencil-square-o, fa-share-square-o, fa-check-square-o, fa-arrows, fa-step-backward, fa-fast-backward, fa-backward, fa-play, fa-pause, fa-stop, fa-forward, fa-fast-forward, fa-step-forward, fa-eject, fa-chevron-left, fa-chevron-right, fa-plus-circle, fa-minus-circle, fa-times-circle, fa-check-circle, fa-question-circle, fa-info-circle, fa-crosshairs, fa-times-circle-o, fa-check-circle-o, fa-ban, fa-arrow-left, fa-arrow-right, fa-arrow-up, fa-arrow-down, fa-share, fa-expand, fa-compress, fa-plus, fa-minus, fa-asterisk, fa-exclamation-circle, fa-gift, fa-leaf, fa-fire, fa-eye, fa-eye-slash, fa-exclamation-triangle, fa-plane, fa-calendar, fa-random, fa-comment, fa-magnet, fa-chevron-up, fa-chevron-down, fa-retweet, fa-shopping-cart, fa-folder, fa-folder-open, fa-arrows-v, fa-arrows-h, fa-bar-chart, fa-twitter-square, fa-facebook-square, fa-camera-retro, fa-key, fa-cogs, fa-comments, fa-thumbs-o-up, fa-thumbs-o-down, fa-star-half, fa-heart-o, fa-sign-out, fa-linkedin-square, fa-thumb-tack, fa-external-link, fa-sign-in, fa-trophy, fa-github-square, fa-upload, fa-lemon-o, fa-phone, fa-square-o, fa-bookmark-o, fa-phone-square, fa-twitter, fa-facebook, fa-github, fa-unlock, fa-credit-card, fa-rss, fa-hdd-o, fa-bullhorn, fa-bell, fa-certificate, fa-hand-o-right, fa-hand-o-left, fa-hand-o-up, fa-hand-o-down, fa-arrow-circle-left, fa-arrow-circle-right, fa-arrow-circle-up, fa-arrow-circle-down, fa-globe, fa-wrench, fa-tasks, fa-filter, fa-briefcase, fa-arrows-alt, fa-users, fa-link, fa-cloud, fa-flask, fa-scissors, fa-files-o, fa-paperclip, fa-floppy-o, fa-square, fa-bars, fa-list-ul, fa-list-ol, fa-strikethrough, fa-underline, fa-table, fa-magic, fa-truck, fa-pinterest, fa-pinterest-square, fa-google-plus-square, fa-google-plus, fa-money, fa-caret-down, fa-caret-up, fa-caret-left, fa-caret-right, fa-columns, fa-sort, fa-sort-desc, fa-sort-asc, fa-envelope, fa-linkedin, fa-undo, fa-gavel, fa-tachometer, fa-comment-o, fa-comments-o, fa-bolt, fa-sitemap, fa-umbrella, fa-clipboard, fa-lightbulb-o, fa-exchange, fa-cloud-download, fa-cloud-upload, fa-user-md, fa-stethoscope, fa-suitcase, fa-bell-o, fa-coffee, fa-cutlery, fa-file-text-o, fa-building-o, fa-hospital-o, fa-ambulance, fa-medkit, fa-fighter-jet, fa-beer, fa-h-square, fa-plus-square, fa-angle-double-left, fa-angle-double-right, fa-angle-double-up, fa-angle-double-down, fa-angle-left, fa-angle-right, fa-angle-up, fa-angle-down, fa-desktop, fa-laptop, fa-tablet, fa-mobile, fa-circle-o, fa-quote-left, fa-quote-right, fa-spinner, fa-circle, fa-reply, fa-github-alt, fa-folder-o, fa-folder-open-o, fa-smile-o, fa-frown-o, fa-meh-o, fa-gamepad, fa-keyboard-o, fa-flag-o, fa-flag-checkered, fa-terminal, fa-code, fa-reply-all, fa-star-half-o, fa-location-arrow, fa-crop, fa-code-fork, fa-chain-broken, fa-question, fa-info, fa-exclamation, fa-superscript, fa-subscript, fa-eraser, fa-puzzle-piece, fa-microphone, fa-microphone-slash, fa-shield, fa-calendar-o, fa-fire-extinguisher, fa-rocket, fa-maxcdn, fa-chevron-circle-left, fa-chevron-circle-right, fa-chevron-circle-up, fa-chevron-circle-down, fa-html5, fa-css3, fa-anchor, fa-unlock-alt, fa-bullseye, fa-ellipsis-h, fa-ellipsis-v, fa-rss-square, fa-play-circle, fa-ticket, fa-minus-square, fa-minus-square-o, fa-level-up, fa-level-down, fa-check-square, fa-pencil-square, fa-external-link-square, fa-share-square, fa-compass, fa-caret-square-o-down, fa-caret-square-o-up, fa-caret-square-o-right, fa-eur, fa-gbp, fa-usd, fa-inr, fa-jpy, fa-rub, fa-krw, fa-btc, fa-file, fa-file-text, fa-sort-alpha-asc, fa-sort-alpha-desc, fa-sort-amount-asc, fa-sort-amount-desc, fa-sort-numeric-asc, fa-sort-numeric-desc, fa-thumbs-up, fa-thumbs-down, fa-youtube-square, fa-youtube, fa-xing, fa-xing-square, fa-youtube-play, fa-dropbox, fa-stack-overflow, fa-instagram, fa-flickr, fa-adn, fa-bitbucket, fa-bitbucket-square, fa-tumblr, fa-tumblr-square, fa-long-arrow-down, fa-long-arrow-up, fa-long-arrow-left, fa-long-arrow-right, fa-apple, fa-windows, fa-android, fa-linux, fa-dribbble, fa-skype, fa-foursquare, fa-trello, fa-female, fa-male, fa-gratipay, fa-sun-o, fa-moon-o, fa-archive, fa-bug, fa-vk, fa-weibo, fa-renren, fa-pagelines, fa-stack-exchange, fa-arrow-circle-o-right, fa-arrow-circle-o-left, fa-caret-square-o-left, fa-dot-circle-o, fa-wheelchair, fa-vimeo-square, fa-try, fa-plus-square-o, fa-space-shuttle, fa-slack, fa-envelope-square, fa-wordpress, fa-openid, fa-university, fa-graduation-cap, fa-yahoo, fa-google, fa-reddit, fa-reddit-square, fa-stumbleupon-circle, fa-stumbleupon, fa-delicious, fa-digg, fa-pied-piper-pp, fa-pied-piper-alt, fa-drupal, fa-joomla, fa-language, fa-fax, fa-building, fa-child, fa-paw, fa-spoon, fa-cube, fa-cubes, fa-behance, fa-behance-square, fa-steam, fa-steam-square, fa-recycle, fa-car, fa-taxi, fa-tree, fa-spotify, fa-deviantart, fa-soundcloud, fa-database, fa-file-pdf-o, fa-file-word-o, fa-file-excel-o, fa-file-powerpoint-o, fa-file-image-o, fa-file-archive-o, fa-file-audio-o, fa-file-video-o, fa-file-code-o, fa-vine, fa-codepen, fa-jsfiddle, fa-life-ring, fa-circle-o-notch, fa-rebel, fa-empire, fa-git-square, fa-git, fa-hacker-news, fa-tencent-weibo, fa-qq, fa-weixin, fa-paper-plane, fa-paper-plane-o, fa-history, fa-circle-thin, fa-header, fa-paragraph, fa-sliders, fa-share-alt, fa-share-alt-square, fa-bomb, fa-futbol-o, fa-tty, fa-binoculars, fa-plug, fa-slideshare, fa-twitch, fa-yelp, fa-newspaper-o, fa-wifi, fa-calculator, fa-paypal, fa-google-wallet, fa-cc-visa, fa-cc-mastercard, fa-cc-discover, fa-cc-amex, fa-cc-paypal, fa-cc-stripe, fa-bell-slash, fa-bell-slash-o, fa-trash, fa-copyright, fa-at, fa-eyedropper, fa-paint-brush, fa-birthday-cake, fa-area-chart, fa-pie-chart, fa-line-chart, fa-lastfm, fa-lastfm-square, fa-toggle-off, fa-toggle-on, fa-bicycle, fa-bus, fa-ioxhost, fa-angellist, fa-cc, fa-ils, fa-meanpath, fa-buysellads, fa-connectdevelop, fa-dashcube, fa-forumbee, fa-leanpub, fa-sellsy, fa-shirtsinbulk, fa-simplybuilt, fa-skyatlas, fa-cart-plus, fa-cart-arrow-down, fa-diamond, fa-ship, fa-user-secret, fa-motorcycle, fa-street-view, fa-heartbeat, fa-venus, fa-mars, fa-mercury, fa-transgender, fa-transgender-alt, fa-venus-double, fa-mars-double, fa-venus-mars, fa-mars-stroke, fa-mars-stroke-v, fa-mars-stroke-h, fa-neuter, fa-genderless, fa-facebook-official, fa-pinterest-p, fa-whatsapp, fa-server, fa-user-plus, fa-user-times, fa-bed, fa-viacoin, fa-train, fa-subway, fa-medium, fa-y-combinator, fa-optin-monster, fa-opencart, fa-expeditedssl, fa-battery-full, fa-battery-three-quarters, fa-battery-half, fa-battery-quarter, fa-battery-empty, fa-mouse-pointer, fa-i-cursor, fa-object-group, fa-object-ungroup, fa-sticky-note, fa-sticky-note-o, fa-cc-jcb, fa-cc-diners-club, fa-clone, fa-balance-scale, fa-hourglass-o, fa-hourglass-start, fa-hourglass-half, fa-hourglass-end, fa-hourglass, fa-hand-rock-o, fa-hand-paper-o, fa-hand-scissors-o, fa-hand-lizard-o, fa-hand-spock-o, fa-hand-pointer-o, fa-hand-peace-o, fa-trademark, fa-registered, fa-creative-commons, fa-gg, fa-gg-circle, fa-tripadvisor, fa-odnoklassniki, fa-odnoklassniki-square, fa-get-pocket, fa-wikipedia-w, fa-safari, fa-chrome, fa-firefox, fa-opera, fa-internet-explorer, fa-television, fa-contao, fa-500px, fa-amazon, fa-calendar-plus-o, fa-calendar-minus-o, fa-calendar-times-o, fa-calendar-check-o, fa-industry, fa-map-pin, fa-map-signs, fa-map-o, fa-map, fa-commenting, fa-commenting-o, fa-houzz, fa-vimeo, fa-black-tie, fa-fonticons, fa-reddit-alien, fa-edge, fa-credit-card-alt, fa-codiepie, fa-modx, fa-fort-awesome, fa-usb, fa-product-hunt, fa-mixcloud, fa-scribd, fa-pause-circle, fa-pause-circle-o, fa-stop-circle, fa-stop-circle-o, fa-shopping-bag, fa-shopping-basket, fa-hashtag, fa-bluetooth, fa-bluetooth-b, fa-percent, fa-gitlab, fa-wpbeginner, fa-wpforms, fa-envira, fa-universal-access, fa-wheelchair-alt, fa-question-circle-o, fa-blind, fa-audio-description, fa-volume-control-phone, fa-braille, fa-assistive-listening-systems, fa-american-sign-language-interpreting, fa-deaf, fa-glide, fa-glide-g, fa-sign-language, fa-low-vision, fa-viadeo, fa-viadeo-square, fa-snapchat, fa-snapchat-ghost, fa-snapchat-square, fa-pied-piper, fa-first-order, fa-yoast, fa-themeisle, fa-google-plus-official, fa-font-awesome,  fa-shopping-cart, fa-facebook, fa-twitter, fa-google-plus, fa-linkedin' ;
        $political_era_icon_list = explode( ", " , $political_era_icon_list_raw);
        return $political_era_icon_list;
    }
endif; 

if ( ! function_exists( 'political_era_fonts_url' ) ) {
  /**
   * Register Google fonts.
   *
   * @return string Google fonts URL for the theme.
   */
  function political_era_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = 'latin,latin-ext';

    /* translators: If there are characters in your language that are not supported by Barlow, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== _x( 'on', 'Playfair Display: on or off', 'political-era' ) ) {
      $fonts[] = 'Playfair Display:400,400i,700,700i,900,900i';
    }
    /* translators: If there are characters in your language that are not supported by Playfair Display, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== _x( 'on', 'Muli: on or off', 'political-era' ) ) {
      $fonts[] = 'Muli:300,300i,400,600,700,800,900';
    }
    
    /* translators: If there are characters in your language that are not supported by Playfair Display, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== _x( 'on', 'Overpass: on or off', 'political-era' ) ) {
      $fonts[] = 'Overpass:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i';
    }    

    if ( $fonts ) {
      $fonts_url = add_query_arg( array(
        'family' => urlencode( implode( '|', $fonts ) ),
        'subset' => urlencode( $subsets ),
      ), '//fonts.googleapis.com/css' );
    }

    return $fonts_url;
  }
}

if ( ! function_exists( 'political_era_the_excerpt' ) ) :

    /**
     * Generate excerpt.
     *
     * @since 1.0.0
     *
     * @param int     $length Excerpt length in words.
     * @param WP_Post $post_obj WP_Post instance (Optional).
     * @return string Excerpt.
     */
    function political_era_the_excerpt( $length = 0, $post_obj = null ) {

        global $post;

        if ( is_null( $post_obj ) ) {
            $post_obj = $post;
        }

        $length = absint( $length );

        if ( 0 === $length ) {
            return;
        }

        $source_content = $post_obj->post_content;

        if ( ! empty( $post_obj->post_excerpt ) ) {
            $source_content = $post_obj->post_excerpt;
        }

        $source_content = preg_replace( '`\[[^\]]*\]`', '', $source_content );
        $trimmed_content = wp_trim_words( $source_content, $length, '&hellip;' );
        return $trimmed_content;

    }

endif;

/**
 *  Political Breadcrumb
 *
 *
 */
if ( ! function_exists( 'political_era_breadcrumb' ) ) :

    /**
     * Simple breadcrumb.
     *
     * @since 1.0.0
     *
     * @link: https://gist.github.com/melissacabral/4032941
     *
     * @param  array $args Arguments
     */
    function political_era_breadcrumb( $args = array() ) {

        if ( ! function_exists( 'breadcrumb_trail' ) ) {
            require_once get_template_directory() . '/inc/breadcrumbs.php';
        }

        $enable_breadcrumb = political_era_get_option('enable_breadcrumb');

        if( false == $enable_breadcrumb ){
            return;
        }

        $breadcrumb_args = array(
            'container'   => 'div',
            'before'          => '<div class="container">',
            'show_browse' => false,
        );
        breadcrumb_trail( $breadcrumb_args );
       
    }

endif;

if ( ! function_exists( 'political_era_is_frontpage' ) ) :
/* 
 * Front Page 
 */
 function political_era_is_frontpage() {
    return ( is_front_page() && ! is_home() );
 }
endif; 

if ( ! function_exists( 'political_era_is_latest_posts' ) ) :
/* 
 * latest Posts 
 */
 function political_era_is_latest_posts() {
    return ( is_front_page() && is_home() );
 }
endif; 

if ( ! function_exists( 'political_era_is_blog_page' ) ) :
/* 
 * Blog Posts 
 */
 function political_era_is_blog_page() {
    return ( ! is_front_page() && is_home() );
 }
endif; 



if ( ! function_exists( 'political_era_banner_title' ) ) :

    /**
     * Display custom header title in frontpage and blog
     */
    function political_era_banner_title() {
        if ( political_era_is_blog_page() || is_singular() ): ?>
            <h2 class="entry-title"><?php single_post_title(); ?></h2>
        <?php elseif ( is_archive() ) : 
            the_archive_title( '<h2 class="entry-title">', '</h2>' );
        elseif ( is_search() ) : ?>

            <h2 class="entry-title"><?php /* translators: Search Results. */ printf( esc_html__( 'Search Results for: %s', 'political-era' ), get_search_query() ); ?></h2>
        <?php elseif ( is_404() ) :
            echo '<h2 class="entry-title">' . esc_html__( 'Oops! That page can&#39;t be found.', 'political-era' ) . '</h2>';
        endif;
    }
endif;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  



if ( ! function_exists( 'political_era_navigation' ) ) :

    /**
     * Posts navigation.
     *
     * @since 1.0.0
     */
    function political_era_navigation() {

        $pagination_option = political_era_get_option( 'pagination_layout' );

        if ( 'default' == $pagination_option) {

            the_posts_navigation(); 

        } else{

            the_posts_pagination( array(
                'mid_size' => 5,
                'prev_text' => esc_html__( 'Prev', 'political-era' ),
                'next_text' => esc_html__( 'Next', 'political-era' ),
            ) );
        }

    }
endif;

add_action( 'political_era_action_navigation', 'political_era_navigation' );

if ( ! function_exists( 'political_era_register_required_plugins' ) ) :
    /**
     * Register the required plugins for this theme.
     * 
     * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
     */
    function political_era_register_required_plugins() {
        /*
         * Array of plugin arrays. Required keys are name and slug.
         * If the source is NOT from the .org repo, then source is also required.
         */
        $plugins = array(
            array(
                'name'      => esc_html__( 'Contact Form 7', 'political-era' ), //The plugin name
                'slug'      => 'contact-form-7',  // The plugin slug (typically the folder name)
                'required'  => false,  // If false, the plugin is only 'recommended' instead of required.
                'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
                'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            ),
            array(
                'name'      => esc_html__( 'One Click Demo Import', 'political-era' ), //The plugin name
                'slug'      => 'one-click-demo-import',  // The plugin slug (typically the folder name)
                'required'  => false,  // If false, the plugin is only 'recommended' instead of required.
                'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
                'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            ),        
            
            array(
                'name'      => esc_html__( 'Give Donation Plugin and Fundraising Platform', 'political-era' ), //The plugin name
                'slug'      => 'give',  // The plugin slug (typically the folder name)
                'required'  => false,  // If false, the plugin is only 'recommended' instead of required.
                'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
                'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            ),        
        );

        $config = array(
            'id'           => 'political-era',        // Unique ID for hashing notices for multiple instances of TGMPA.
            'default_path' => '',                      // Default absolute path to bundled plugins.     
            'has_notices'  => true,                    // Show admin notices or not.
            'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
            'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
            'is_automatic' => false,                   // Automatically activate plugins after installation or not.
            'message'      => '',                      // Message to output right before the plugins table.
            );

        tgmpa( $plugins, $config );
    }
endif; 
add_action( 'tgmpa_register', 'political_era_register_required_plugins' );

if ( ! function_exists( 'political_era_is_woocommerce_active' ) ) :

  /**
   * Check if WooCommerce is active.
   *
   * @since 1.0.0
   *
   * @return bool Active status.
   */
  function political_era_is_woocommerce_active() {
    $output = false;

    if ( class_exists( 'WooCommerce' ) ) {
      $output = true;
    }

    return $output;
  }

endif;

/**
 * Entry Title
 */
function political_era_action_title() {
    do_action( 'political_era_action_title' );
}

/**
 * Feature Image
 */
function political_era_action_image() {
    do_action( 'political_era_action_image' );
}


/**
 *  Comment Section
 */
function political_era_action_comment() {
    do_action( 'political_era_action_comment' );
}
if ( ! function_exists( 'political_era_get_meta' ) ):
    // Custom function to get the meta
    function political_era_get_meta( $post_id, $key, $default = null ) {
        $value = get_post_meta( $post_id, $key, true );

        if ( ! $value ) {
            $value = $default;
        }

        return $value;
    }
    
endif; 


/**
* Remove branding
*/
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

if ( ! function_exists( 'political_era_one_click_notice' ) ) :
    /*
     * Import demo data
     */

    function political_era_one_click_notice( $default_text ) { 
        /* translators: Footer Id */
        $info_notice = sprintf( esc_html__( ' Please click %1$s to download the zip files.', 'political-era' ), '<a href="'.esc_url( 'https://preview.rigorousthemes.com/demo-content/political.zip' ).'" rel="designer">'.esc_html__('Here', 'political-era').'</a>' );
        $default_text .= '<div class="info-text-wrapper">';
        $default_text .= '<h3>'.esc_html__( 'To import the demo data follow the following steps:','political-era' ).'</h3>';
        $default_text .= '<ol>';
         $default_text .= '<li>'.wp_kses_post( $info_notice).'</li>';
        $default_text .= '<li>'.esc_html__( 'Extract the zip file.','political-era').'</li>';
        $default_text .= '<li>'.esc_html__( 'Upload the .xml, .wie and .date files on the following options.','political-era').'</li>';
        $default_text .= '<li>'.esc_html__( 'Click on Import Demo  Data button.','political-era').'</li>';
        $default_text .= '</ol>';
        $default_text .= '</div>';
        
        return $default_text;
    }
add_filter( 'pt-ocdi/plugin_intro_text', 'political_era_one_click_notice' );
endif;

if ( ! function_exists( 'political_era_after_demo_import' ) ) :

    /**
     * Action that happen after import
     */ 
    function political_era_after_demo_import( $selected_import ) {            
        $primary_menu = get_term_by('name', 'Main Menu', 'nav_menu'); 
        $social_menu = get_term_by('name', 'Social Menu', 'nav_menu');        
        set_theme_mod( 'nav_menu_locations' , array( 
            'menu-1' => $primary_menu->term_id,
            'social-media' => $social_menu->term_id, 
            ) 

        );
        //Set Front page
        $page = get_page_by_title( 'Home');
        if ( isset( $page->ID ) ) {
            update_option( 'page_on_front', $page->ID );
            update_option( 'show_on_front', 'page' );
        }       
    }
add_action( 'pt-ocdi/after_import', 'political_era_after_demo_import' );
endif;