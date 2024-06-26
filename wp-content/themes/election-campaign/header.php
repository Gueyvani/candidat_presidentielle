<?php
/**
 * The Header for our theme.
 * @package Election Campaign
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <?php if(get_theme_mod('election_campaign_preloader',false) != '' || get_theme_mod( 'election_campaign_display_preloader',false) != ''){ ?>
    <div class="frame w-100 h-100">
      <div class="loader">
        <div class="dot-1"></div>
        <div class="dot-2"></div>
        <div class="dot-3"></div>
      </div>
    </div>
  <?php }?>
<header role="banner" class="header-box">
  <a class="screen-reader-text skip-link" href="#skip_content"><?php esc_html_e( 'Skip to content', 'election-campaign' ); ?></a>
<div class="top-header">
  <?php if( get_theme_mod( 'election_campaign_show_header', false) != '') { ?>
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-6 py-lg-0 py-md-0 py-2 text-lg-start text-md-start text-start align-self-center">
            <div class="location">
              <?php if( get_theme_mod( 'election_campaign_location') != '') { ?>
                <div class="row"> 
                  <div class="col-lg-2 col-md-2 col-12 text-lg-start text-md-start text-center align-self-center">
                    <i class="<?php echo esc_attr(get_theme_mod('election_campaign_location_address_icon','fas fa-map-marker-alt')); ?>"></i>
                  </div>
                  <div class="col-lg-10 col-md-10 col-12 text-lg-start text-md-start text-center align-self-center location-text">
                    <p><?php echo esc_html(get_theme_mod('election_campaign_location',''));?></p>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-6 py-lg-0 py-md-0 py-2 text-lg-start text-md-start text-start align-self-center">
            <div class="time">
              <?php if( get_theme_mod( 'election_campaign_enter_time') != '') { ?>
                <div class="row">
                  <div class="col-lg-2 col-md-2 col-12 text-lg-start text-md-start text-center align-self-center">
                    <i class="<?php echo esc_attr(get_theme_mod('election_campaign_timing_icon','far fa-clock')); ?>"></i>
                  </div>
                  <div class="col-lg-10 col-md-10 col-12 text-lg-start text-md-start text-center align-self-center time-text">
                    <p><?php echo esc_html(get_theme_mod('election_campaign_enter_time',''));?></p>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 py-lg-0 py-md-0 py-2 text-lg-end text-md-end text-center align-self-center">
            <div class="top-btn">
              <?php if( get_theme_mod( 'election_campaign_topbar_btn_url') != '' || get_theme_mod( 'election_campaign_topbar_btn_text') != '') { ?>
                <a href="<?php echo esc_url(get_theme_mod('election_campaign_topbar_btn_url',''));?>"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_topbar_btn_icon','fas fa-university')); ?>"></i><?php echo esc_html(get_theme_mod('election_campaign_topbar_btn_text',''));?></a>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php }?>

  <!-- menu header -->
  <div class="menu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-5 col-12 py-0 py-lg-0 py-md-2 text-lg-start text-md-start text-center p-2 p-lg-0 p-md-0 align-self-center">
          <div class="logo py-2">
            <div class="row">
              <div class="<?php if( get_theme_mod( 'election_campaign_site_logo_inline') != '') { ?>col-lg-5 col-md-5 col-5<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
              </div>
              <div class="<?php if( get_theme_mod( 'election_campaign_site_logo_inline') != '') { ?>col-lg-7 col-md-7 col-7 site-logo-inline"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if( get_theme_mod('election_campaign_site_title_enable',true) != ''){ ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                      <h1 class="site-title pb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif; ?>
                  <?php }?>
                <?php endif; ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                  <?php if( get_theme_mod('election_campaign_site_tagline_enable',false) != ''){ ?>
                    <p class="site-description"><?php echo esc_html($description); ?></p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-3 col-5 text-lg-start text-md-end text-start align-self-center">
          <div class="toggle-menu responsive-menu text-md-end text-center">
            <button role="tab" onclick="election_campaign_menu_open()" class="mobiletoggle"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_responsive_menu_open_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','election-campaign'); ?></span>
            </button>
          </div>
          <div id="navbar-header" class="menu-brand primary-nav">
            <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'election-campaign' ); ?>">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'container_class' => 'main-menu-navigation clearfix' ,
                  'menu_class' => 'main-menu-navigation clearfix',
                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 ps-0">%3$s</ul>',
                  'fallback_cb' => 'wp_page_menu',
                ) );
              ?>
            </nav>
            <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="election_campaign_menu_close()"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_responsive_menu_close_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','election-campaign'); ?></span></a>
          </div> 
        </div>        
        <div class="col-lg-1 col-md-2 col-2 text-lg-center text-md-end text-center p-2 p-lg-0 p-md-0 align-self-center">
          <div class="py-0 py-lg-0 py-md-2 ">
            <?php if( get_theme_mod( 'election_campaign_display_search', true) == true ) { ?>
              
                <div class="main-search d-inline-block">
                  <span><a href="#"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_slider_search_icon','fas fa-search')); ?>"></i></a></span>
                </div>
                <div class="searchform_page w-100 h-100">
                  <div class="close w-100 text-end me-lg-4 me-3"><a href="#maincontent"><i class="fa fa-times"></i></a></div>
                  <div class="search_input">
                    <?php get_search_form(); ?>
                  </div>
                </div>
              
            <?php }?>
          </div>
        </div>
        <!-- Header Sidebar -->
        <div class="col-lg-1 col-md-2 col-5 align-self-center text-lg-end text-md-end text-center toggle-btn">
          <a href="#" id="sidebar-pop"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_sidebar_btn_icon','fas fa-address-card')); ?>"></i></a>
        </div>
        <div class="header-sidebar">
          <div class="close-pop"><a href="#maincontent"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_barclose_icon','fas fa-window-close')); ?>"></i></a>
          </div>
          <div class="menu-drawer p-2">
            <div class="logo py-2">
              <div class="row">
                <div class="<?php if( get_theme_mod( 'election_campaign_site_logo_inline') != '') { ?>col-lg-5 col-md-5 col-5<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                  <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                  <?php endif; ?>
                </div>
                <div class="<?php if( get_theme_mod( 'election_campaign_site_logo_inline') != '') { ?>col-lg-7 col-md-7 col-7 site-logo-inline"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                  <?php $blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if( get_theme_mod('election_campaign_site_title_enable',true) != ''){ ?>
                      <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title pb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                      <?php endif; ?>
                    <?php }?>
                  <?php endif; ?>
                  <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) : ?>
                    <?php if( get_theme_mod('election_campaign_site_tagline_enable',false) != ''){ ?>
                      <p class="site-description"><?php echo esc_html($description); ?></p>
                    <?php }?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="location py-3">
              <?php if( get_theme_mod( 'election_campaign_location') != '') { ?>
                <p><i class="<?php echo esc_attr(get_theme_mod('election_campaign_location_address_icon','fas fa-map-marker-alt')); ?>"></i><?php echo esc_html(get_theme_mod('election_campaign_location',''));?></p>
              <?php } ?>
            </div>
            <div class="time py-3">
              <?php if( get_theme_mod( 'election_campaign_enter_time') != '') { ?>
                <p><i class="<?php echo esc_attr(get_theme_mod('election_campaign_timing_icon','far fa-clock')); ?>"></i><?php echo esc_html(get_theme_mod('election_campaign_enter_time',''));?></p>
              <?php }?>
            </div>
            <div class="top-btn py-3">
              <?php if( get_theme_mod( 'election_campaign_topbar_btn_url') != '' || get_theme_mod( 'election_campaign_topbar_btn_text') != '') { ?>
                <a href="<?php echo esc_url(get_theme_mod('election_campaign_topbar_btn_url',''));?>"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_topbar_btn_icon','fas fa-university')); ?>"></i><?php echo esc_html(get_theme_mod('election_campaign_topbar_btn_text',''));?></a>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</header>
