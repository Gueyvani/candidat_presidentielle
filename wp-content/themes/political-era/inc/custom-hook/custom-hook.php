<?php
/**
 * Custom theme functions.
 *
 * This file contains hook functions attached to theme hooks.
 *
 * @package Political_Era
 */
if ( ! function_exists( 'political_era_top_header' ) ) :
    /**
     * Top Header Section
     *
     * @since 1.0.0
     */
    function political_era_top_header() { 
    $enable_top_header  = political_era_get_option( 'enable_top_header' );
    if ( false == $enable_top_header ){
        return;
    }
    ?>
        <div class="top-header">
            <div class="container">
                <div class="top-header-wrap">
                    <div class="top-header-right">
                        <?php $top_header_right  = political_era_get_option( 'top_header_right' );
                            switch ( $top_header_right ) {

                                case 'address':
                                    $header_address = political_era_get_option('header_address');
                                    $header_number = political_era_get_option('header_number');
                                    $header_email = political_era_get_option('header_email');?>
                                    <div class="contact-info">
                                        <?php if(!empty($header_address)):?>
                                            <div class="contact-address">              
                                                    <span class="icon">
                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    </span>
                                                <?php echo esc_html( $header_address );?>
                                            </div>
                                        <?php endif;?>
                                        <?php if(!empty($header_number)):?>
                                            <div class="contact-phone">
                                                <a href="tel:<?php echo preg_replace( '/\D+/', '', esc_attr( $header_number ) ); ?>">
                                                    <span class="icon">
                                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                                    </span>
                                                    <?php echo esc_attr($header_number);?></a>
                                            </div>
                                        <?php endif;?>

                                        <?php if(!empty($header_email)):?>
                                            <div class="contact-email">
                                                <a href="mailto:<?php echo esc_attr($header_email);?>">
                                                    <span class="icon">
                                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                    </span>
                                                    <?php echo esc_attr( antispambot( $header_email ) ); ?>
                                                </a>
                                            </div>
                                        <?php endif;?>                                  
                                    </div>
                                    <?php break;

                                case 'menu':
                                    wp_nav_menu( array(
                                        'theme_location'  => 'top-menu',
                                        'container'       => false,                         
                                        'depth'           => 1,
                                        'fallback_cb'     => false,
                                    ) ); 
                                    break;

                                case 'social_media':
                                    echo '<div class="social-links">';
                                        wp_nav_menu( array(
                                            'theme_location'  => 'social-media',
                                            'container'       => false,                         
                                            'depth'           => 1,
                                            'fallback_cb'     => false,

                                        ) ); 
                                    echo '</div>';

                                    break;

                                case 'none':    
                                    break;    

                                default:
                                    return;

                            }
                        ?>
                    </div>
                    <div class="top-header-left">
                        <?php $top_header_left  = political_era_get_option( 'top_header_left' );
                            switch ( $top_header_left ) {

                                case 'address':
                                    $header_address = political_era_get_option('header_address');
                                    $header_number = political_era_get_option('header_number');
                                    $header_email = political_era_get_option('header_email');?>
                                    <div class="contact-info">
                                        <?php if(!empty($header_address)):?>
                                            <div class="contact-address">              
                                                    <span class="icon">
                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    </span>
                                                <?php echo esc_html( $header_address );?>
                                            </div>
                                        <?php endif;?>
                                        <?php if(!empty($header_number)):?>
                                            <div class="contact-phone">
                                                <a href="tel:<?php echo preg_replace( '/\D+/', '', esc_attr( $header_number ) ); ?>">
                                                    <span class="icon">
                                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                                    </span>
                                                    <?php echo esc_attr($header_number);?></a>
                                            </div>
                                        <?php endif;?>

                                        <?php if(!empty($header_email)):?>
                                            <div class="contact-email">
                                                <a href="mailto:<?php echo esc_attr($header_email);?>">
                                                    <span class="icon">
                                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                    </span>
                                                    <?php echo esc_attr( antispambot( $header_email ) ); ?>
                                                </a>
                                            </div>
                                        <?php endif;?>                                  
                                    </div>
                                    <?php break;

                                case 'menu':
                                    wp_nav_menu( array(
                                        'theme_location'  => 'top-menu',
                                        'container'       => false,                         
                                        'depth'           => 1,
                                        'fallback_cb'     => false,
                                    ) ); 
                                    break;

                                case 'social_media':
                                    echo '<div class="social-links">';
                                        wp_nav_menu( array(
                                            'theme_location'  => 'social-media',
                                            'container'       => false,                         
                                            'depth'           => 1,
                                            'fallback_cb'     => false,

                                        ) ); 
                                    echo '</div>';

                                    break;

                                case 'none':    
                                    break;
                                default:
                                    return;

                            }
                        ?>
                    </div>  
                </div>
            </div>
        </div>           
    <?php }
endif;
add_action( 'political_era_action_header', 'political_era_top_header', 10 );
if ( ! function_exists( 'political_era_header' ) ) :
	/**
	 * Header Section
 	 *
	 * @since 1.0.0
	 */
	function political_era_header() {
	?>
    <!-- header starting from here -->
    <div class="hgroup-wrap">
        <div class="container">
            <div class="brand-nav-wrap">
                <section class="site-branding">
                    <?php $site_identity  = political_era_get_option( 'site_identity' );
                    if ( in_array( $site_identity, array( 'logo-only', 'logo-text','logo-title' ) )  ) { ?>
                        <div class="site-logo">
                            <?php the_custom_logo(); ?> 
                        </div>
                    <?php } ?>

                    <?php if ( in_array( $site_identity, array( 'title-text', 'title-only', 'logo-text','logo-title' ) ) ) : ?>
                        <?php
                        if( in_array( $site_identity, array( 'title-text', 'title-only','logo-title' ) )  ) {
                            if ( is_front_page() && is_home() ) : ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php else : ?>
                                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            <?php
                            endif;
                        } 
                        if ( in_array( $site_identity, array( 'title-text', 'logo-text' ) ) ) {
                            $description = get_bloginfo( 'description', 'display' );
                            if ( $description || is_customize_preview() ) : ?>
                                <p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
                            <?php
                            endif; 
                        }?>
                    <?php endif; ?>
                </section><!-- .site-branding -->
                <?php
                $enable_header_button  = political_era_get_option( 'enable_header_button' );
                $button_text  = political_era_get_option( 'button_text' );
                $button_url  = political_era_get_option( 'button_url' );
                $button_icon  = political_era_get_option( 'button_icon' );
                $enable_button_icon  = political_era_get_option( 'enable_button_icon' );
                ?>
                <div id="navbar" class="navbar<?php if ( true == $enable_header_button && !empty( $button_text ) ) { echo ' button-donate-active';}?>">

                    <!-- navbar starting from here -->                    
                    <?php $enable_navigation  = political_era_get_option( 'enable_navigation' );
                    if ( true == $enable_navigation ): ?>
                        <nav id="site-navigation" class="navigation main-navigation">
                            <div class="menu-content-wrapper">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'menu-1',
                                    'container_class'   => 'menu-top-menu-container',
                                    'fallback_cb'       => 'political_era_primary_navigation_fallback' ,
                                ) );
                                ?>                              
                            </div>
                        </nav>
                    <?php endif; ?>
                    <!-- #site-navigation -->

                    <?php if ( true == $enable_header_button && !empty( $button_text ) ) : ?>
                        <div class="donate-now">
                            <a class="button-donate" href="<?php echo esc_url( $button_url );?>">
                                <?php if ( true == $enable_button_icon ): ?>
                                    <i class="fa <?php echo esc_attr( $button_icon );?>"></i>
                                <?php endif; ?>
                                <?php echo esc_html( $button_text ); ?></a>
                        </div>
                    <?php endif; ?>

                    <div class="meanmenu-container"></div>
                    
                </div>
            </div>
        </div>
    </div>		
    <?php }
endif;
add_action( 'political_era_action_header', 'political_era_header', 20 );

if ( ! function_exists( 'political_era_banner' ) ) :
    /**
     * Banner Image
     *
     * @since political_ 1.0.0
     *
     */
    function political_era_banner() {
        $enable_banner  = political_era_get_option( 'enable_banner' );
        $banner_type    = political_era_get_option( 'banner_type' );
        $banner_slider_category  = political_era_get_option( 'banner_slider_category' );
        $slider_number  = political_era_get_option( 'slider_number' );
        $enable_title   = political_era_get_option( 'enable_title' );
        $enable_content  = political_era_get_option( 'enable_content' );
        $banner_page    = political_era_get_option( 'banner_page' );

        if ( false == $enable_banner ){
            return;
        }        

        if ( political_era_is_frontpage() ) {       ?>     
            <section class="main-slider ">
                <?php if ( 'banner-slider' == $banner_type ){
                    $args = array(
                        'post_type'   => 'post',
                        'posts_per_page' => absint( $slider_number ),
                        'post_status' => 'publish',
                        'paged' => 1,
                    );
                    if ( absint( $banner_slider_category ) > 0 ) {
                        $args['cat'] = absint( $banner_slider_category );
                    }
                } else{
                    $args = array (                                   
                        'p'           => absint($banner_page ),
                        'post_status'       => 'publish',
                        'post_type'         => 'page',
                    );
                }
                $loop = new WP_Query($args);  
                if ( $loop->have_posts() ) : ?>                
                    <div class="main-slider-wrap">
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?> 
                            <div class="main-item">
                                <?php if ( has_post_thumbnail() ): ?>
                                    <figure>
                                        <?php the_post_thumbnail( 'political_era_slider' ); ?>
                                    </figure>
                                <?php endif; ?>
                                <div class="slider-contain">
                                    <div class="container">
                                        
                                        <div class="slider-contain-wrap">
                                            <?php if ( true == $enable_title ): ?>
                                                <h2 class="entry-title"><?php the_title();?></h2>
                                            <?php endif; ?>
                                            <?php if ( true == $enable_content ): ?>
                                                <div class="into-part">
                                                    <?php the_content();?>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                </div>
                            </div>                            
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>
            </section>
        <?php }
    }
add_action( 'political_era_action_header', 'political_era_banner', 25 );
endif;

if ( ! function_exists( 'political_era_header_image' ) ) :
    /**
     * Header Image codes
     *
     * @since political_ 1.0.0
     *
     */
    function political_era_header_image() {
        // Bail if Home Page.
        if ( political_era_is_frontpage() || is_404() ) {            
            return;
        }

        $header_image = political_era_get_option( 'header_image' );
        if ( 'none' == $header_image ){
            return;
        }        

        $image = get_header_image();
        if ( 'post-thumbnail' == $header_image  ){
            if ( is_singular() ) :               
                $image = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : $image;
            endif;
        } else{
            
            $image = ! empty( $image ) ? get_header_image() : '';
        }
        
        if ( 'none' == $header_image ){
            return;
        }        
        ?>
        <section class="page-title-wrap" style="background-image: url(<?php echo esc_url( $image ) ?>);">
            <div class="container">
                <div class="section-intro">
                    <div class="entry-header">
                        <?php political_era_banner_title(); ?>
                    </div>
                </div>
                <?php $enable_breadcrumb = political_era_get_option('enable_breadcrumb');
                if ( true == $enable_breadcrumb ): 
                    political_era_breadcrumb(); 
                endif; ?>
            </div> 
            </div>
        </section> <!-- .page-title-wrap ends here -->  
        <?php
    }
add_action( 'political_era_action_header', 'political_era_header_image', 30 );
endif;

if ( ! function_exists( 'political_era_information' ) ) :
    /**
     * Information Section
     *
     * @since political_ 1.0.0
     *
     */
    function political_era_information() {
        $info_secton    = political_era_get_option( 'info_secton' );
        $information_bg_image    = political_era_get_option( 'information_bg_image' );        
        $info_secton = json_decode( $info_secton ); 
        $enable_info = political_era_get_option( 'enable_info' );
        $enable_info_home = political_era_get_option( 'enable_info_home' );
        if ( false == $enable_info ){
            return;
        }
        $information_bg_image = !empty( $information_bg_image ) ? 'style = "background-image:url('.esc_url( $information_bg_image).')" ': '';

        ?>     
        <?php if ( true == $enable_info_home ){
            if ( political_era_is_frontpage() ): ?>
                <?php if (is_array($info_secton) || is_object( $info_secton ) ): ?>  
                    <section class="feature-section default-padding" <?php echo wp_kses_post($information_bg_image);?> >
                        <div class="container">
                            <div class="section-wrap">
                                <?php foreach ($info_secton as $value ) {
                                        $enable_info_icon   = $value->enable_info_icon;
                                        $info_icon          = $value->info_icon;
                                        $info               = $value->info;
                                        $info_url           = $value->info_url;
                                    if ( 'yes' == $enable_info_icon ||  !empty( $info )):  ?>
                                        <div class="featured-item animated wow fadeInDown" data-wow-duration="0s">
                                            <?php if ( 'yes' == $enable_info_icon ): ?>
                                                <span class="icon">
                                                    <i class="<?php echo esc_attr( $info_icon );?>"></i>
                                                </span>
                                            <?php endif; ?>
                                            <a href="<?php echo esc_url( $info_url);?>"><?php echo esc_html( $info );?></a>
                                        </div>
                                    <?php endif; 
                                } ?>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            <?php endif;
        } else{ ?>
            <?php if (is_array($info_secton) || is_object( $info_secton ) ): ?>
                <section class="feature-section default-padding" <?php echo wp_kses_post($information_bg_image);?> >
                    <div class="container">
                        <div class="section-wrap">
                            <?php foreach ($info_secton as $value ) {
                                    $enable_info_icon   = $value->enable_info_icon;
                                    $info_icon          = $value->info_icon;
                                    $info               = $value->info;
                                    $info_url           = $value->info_url;
                                if ( 'yes' == $enable_info_icon ||  !empty( $info )):  ?>
                                    <div class="featured-item animated wow fadeInDown" data-wow-duration="0s">
                                        <?php if ( 'yes' == $enable_info_icon ): ?>
                                            <span class="icon">
                                                <i class="<?php echo esc_attr( $info_icon );?>"></i>
                                            </span>
                                        <?php endif; ?>
                                        <a href="<?php echo esc_url( $info_url);?>"><?php echo esc_html( $info );?></a>
                                    </div>
                                <?php endif; 
                            } ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        <?php };
    }
add_action( 'political_era_action_header', 'political_era_information', 35 );
endif;


if ( !function_exists( 'political_era_footer') ):
    /**
     * Footer Section
     *
     * @@since 1.0.0
    */
    function political_era_footer(){
        $footer_bg_image = political_era_get_option( 'footer_bg_image' );
    ?>  
        <div class="footer-top" style="background-image:url(<?php echo esc_url( $footer_bg_image );?>)";>
            <?php 
            /*
             *  political_era_aside_action_footer
             * 
             * @hooked political_era_aside_footer -10
             */
            do_action( 'political_era_aside_action_footer' );

            /*
             *  political_era_action_footer_widget
             * 
             * @hooked political_era_footer_widget -10
             */
            do_action( 'political_era_action_footer_widget' );            
            ?>
        </div>

        <?php 
        /*
         *  political_era_action_bottom_footer
         * 
         * @hooked political_era_bottom_footer -10
         */
        do_action( 'political_era_action_bottom_footer' );     
        ?>

    <?php 
    }
endif;
add_action( 'political_era_action_footer', 'political_era_footer', 10 );

if ( !function_exists( 'political_era_aside_footer') ):
    /**
     * Footer Side Section
     *
     * @@since 1.0.0
    */
    function political_era_aside_footer(){
        $enable_top_footer = political_era_get_option( 'enable_top_footer' );
        if ( false == $enable_top_footer ){
            return;
        }
    ?>
        <?php $footer_image = political_era_get_option( 'footer_image' );
        $image_id = attachment_url_to_postid( $footer_image );
        $image_alt  = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
        if ( '' == $image_alt ){
            $image_alt = get_the_title();
        }

        if ( !empty( $footer_image ) ): ?>
            <div class="footer-img animated wow fadeInLeft" data-wow-duration="1s">
                <figure>
                    <img src="<?php echo esc_url( $footer_image );?>" alt="<?php echo esc_attr( $image_alt );?>">
                </figure>
            </div>
        <?php endif; ?>

    <?php }    

endif;
add_action( 'political_era_aside_action_footer', 'political_era_aside_footer');   

if ( !function_exists( 'political_era_footer_widget') ):
    /**
     * Footer Widget Section
     *
     * @@since 1.0.0
    */
    function political_era_footer_widget(){
        $enable_top_footer = political_era_get_option( 'enable_top_footer' );
        if ( false == $enable_top_footer ){
            return;
        }
    ?>  
        <?php if ( is_active_sidebar( 'footer-widget' ) ): ?>
            <div class="container">
                <div class="footer-widget-holder default-padding animated wow fadeInDown" data-wow-duration="1s">
                    <?php dynamic_sidebar( 'footer-widget' );?>
                </div>
            </div>
        <?php endif; ?>

    <?php }    

endif;
add_action( 'political_era_action_footer_widget', 'political_era_footer_widget');   



if ( !function_exists( 'political_era_bottom_footer') ):
    /**
     * Bottom Footer Section
     *
     * @since 1.0.0
    */
    function political_era_bottom_footer(){
    ?>  
    <div class="footer-bottom">
        <div class="container">
                <?php $copyright_footer = political_era_get_option( 'copyright_text' );
                // Powered by content.
                $powered_by_text = sprintf( __( 'Theme of %s', 'political-era' ), '<a target="_blank" rel="designer" href="https://rigorousthemes.com/">Rigorous Themes.</a>' ); 
            if ( !empty( $copyright_footer ) || !empty( $powered_by_text ) ) : ?>             
                <div class="copyright-part">
                    <span><?php echo wp_kses_post($powered_by_text);?></span>&nbsp;<span><?php echo wp_kses_data( $copyright_footer ); ?></span>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php }
endif;
add_action( 'political_era_action_bottom_footer', 'political_era_bottom_footer');

if ( !function_exists( 'political_era_scroll_footer') ):
    /**
     * Bottom Scroll Section
     *
     * @since 1.0.0
    */
    function political_era_scroll_footer(){
        $enable_scrollto_top = political_era_get_option( 'enable_scrollto_top' );
        $scroll_to_top_icon = political_era_get_option( 'scroll_to_top_icon' );
        if ( false == $enable_scrollto_top ){
            return;
        }
    ?>  
    <div class="back-to-top">
        <a href="#masthead" title="<?php esc_attr_e( 'Go to Top', 'political-era' ); ?>"><i class="fa <?php echo esc_attr( $scroll_to_top_icon);?>"></i></a>
    </div>
    <?php }
endif;
add_action( 'political_era_action_scroll_footer', 'political_era_scroll_footer');



if ( ! function_exists( 'political_era_404_page_content' ) ) :
    /**
     * 404 page content
     *
     * @since 1.4.5
     */
    function political_era_404_page_content() {
        ?>
        <section class="error-404 not-found">
            <div class="container">
                <div class="error-heading">
                    <figure>
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/error.png" alt="<?php esc_attr_e( 'Error Image', 'political-era' ); ?>">
                    </figure>
                </div>
                <header class="entry-header">
                    <h2 class="entry-title"><?php esc_html_e( 'Page not found.', 'political-era' ); ?></h2>
                </header>
                <a class="load-button" href="<?php echo esc_url( home_url() ); ?>"><span></span><?php esc_html_e( 'Back to Home.', 'political-era' ); ?></a>
            </div>
        </section>             
        <?php
    }
endif;
add_action( 'political_era_action_404_page', 'political_era_404_page_content' );

if ( ! function_exists( 'political_era_sidebar_layout' ) ) :

    /**
     * Add sidebar.
     *
     * @since 1.0.0
     */
    function political_era_sidebar_layout() {

        // Sidebar Layout
        global $post;
        $sidebar_layout = political_era_get_option( 'sidebar_layout' ); 
        $sidebar_layout = apply_filters( 'political_sidebar_global_layout', $sidebar_layout );  
        
        // Check if single.
        if ( $post  && is_single() || is_page() ) {
            $sidebar_post_options = get_post_meta( $post->ID, 'sidebar_options', true );
            if ( isset( $sidebar_post_options ) && ! empty( $sidebar_post_options ) ) {
                if ( 'customizer_setting' == $sidebar_post_options ){
                    $sidebar_layout = political_era_get_option( 'sidebar_layout' );
                } else{
                    $sidebar_layout = $sidebar_post_options;
                }
                
            }
        }

        // Include primary sidebar.
        if ( 'no_sidebar' !== $sidebar_layout ) {
            if ( political_era_is_woocommerce_active() ){
                if ( is_shop() ){
                    get_sidebar( 'shop' );
                } else{
                    get_sidebar();
                }
            } else{
                get_sidebar();
            }
        }

    }

endif;

add_action( 'political_era_action_sidebar_layout', 'political_era_sidebar_layout' );

if ( ! function_exists( 'political_era_title' ) ) :

    /**
     * Add Title.
     *
     * @since 1.0.0
     */
    function political_era_title() {
        global $post;
        $title_options = political_era_get_meta( $post->ID, 'enable_title', 1 );
        
        if ( isset( $title_options ) && ! empty( $title_options ) ) {
            if( 1 == $title_options ){
               the_title( '<h2 class="entry-title">', '</h2>' );
            }
        }

    }

endif;

add_action( 'political_era_action_title', 'political_era_title' );

if ( ! function_exists( 'political_era_post_thumbnail' ) ) :

    /**
     * Add Feature Image.
     *
     * @since 1.0.0
     */
    function political_era_post_thumbnail() {
        global $post;
        $image_options = political_era_get_meta( $post->ID, 'enable_feature_image', 1 );
        if ( isset( $image_options ) && ! empty( $image_options ) ) {
            if( 1 == $image_options ){ ?>
                <figure>
                <?php the_post_thumbnail();   ?>  
                </figure>    
            <?php } 
        }

    }

endif;

add_action( 'political_era_action_image', 'political_era_post_thumbnail' );

if ( ! function_exists( 'political_era_post_comment' ) ) :

    /**
     * Enable/Disable Comment Section
     *
     * @since 1.0.0
     */
    function political_era_post_comment() {
        global $post;
        $enable_comment = political_era_get_meta( $post->ID, 'enable_comment', true );
        if ( isset( $enable_comment ) && ! empty( $enable_comment ) ) {
            if( true == $enable_comment ){
                
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            }
        }

    }

endif;

add_action( 'political_era_action_comment', 'political_era_post_comment' );