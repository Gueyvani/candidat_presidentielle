<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ma">
 *
 * @package Politics Candidate
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="main-bodybox">
	<?php if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}?>
	<?php if(get_theme_mod('politics_candidate_preloader_hide',false)!= '' || get_theme_mod('politics_candidate_responsive_preloader_hide',false) != ''){ ?>
    <?php if(get_theme_mod( 'politics_candidate_preloader_type','center-square') == 'center-square'){ ?>
	    <div class='preloader'>
		    <div class='preloader-squares'>
				<div class='square'></div>
				<div class='square'></div>
				<div class='square'></div>
				<div class='square'></div>
		    </div>
			</div>
    <?php }else if(get_theme_mod( 'politics_candidate_preloader_type') == 'chasing-square') {?>    
      <div class='preloader'>
				<div class='preloader-chasing-squares'>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
				</div>
			</div>
    <?php }?>
	<?php }?>
<header role="banner">
	<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'politics-candidate' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'politics-candidate' );?></span></a>

	<div id="header">
		<div class="container">
			<div class="row">
				<div class="logo-section col-lg-2 col-md-3 col-12 text-lg-start text-center mb-lg-0 mb-md-0 mb-3 position-relative">
					<div class="logo">
	     	 		<?php if ( has_custom_logo() ) : ?>
     	    		<div class="site-logo"><?php the_custom_logo(); ?></div>
          	<?php endif; ?>
	          <?php if( get_theme_mod( 'politics_candidate_site_title',true) != '') { ?>
	            <?php $politics_candidate_blog_info = get_bloginfo( 'name' ); ?>
	            <?php if ( ! empty( $politics_candidate_blog_info ) ) : ?>
		            <?php if ( is_front_page() && is_home() ) : ?>
		              <h1 class="site-title mt-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		            <?php else : ?>
		              <p class="site-title mt-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		            <?php endif; ?>
	            <?php endif; ?>
		        <?php }?>
		        <?php if( get_theme_mod( 'politics_candidate_site_tagline',false) != '') { ?>
	            <?php
	            $politics_candidate_description = get_bloginfo( 'description', 'display' );
	            if ( $politics_candidate_description || is_customize_preview() ) :
	            ?>
		            <p class="site-description text-center">
		              <?php echo esc_html($politics_candidate_description); ?>
		            </p>
	            <?php endif; ?>
		        <?php }?>
		    	</div>
		    </div>
	    	<div class="col-lg-10 col-md-9 align-self-center">
	    		<div class="header-menu-box">
		    		<div class="row">
		    			<div class="col-lg-12 col-md-12 align-self-center top-header-section">
		    				<?php if(get_theme_mod('politics_candidate_topbar_hide_show',false) == true || get_theme_mod('politics_candidate_hide_topbar_responsive',true) == true) {?>
			    				<div class="row">
			    					<div class="col-lg-3 col-md-3 mail-header text-center text-lg-start text-md-start align-self-center">
				              <?php if(get_theme_mod('politics_candidate_topbar_phoneno') != ''){?>
					  						<i class="fas fa-phone me-2"></i> <a href="tel:<?php echo esc_url(get_theme_mod('politics_candidate_topbar_phoneno')); ?>"><?php echo esc_html(get_theme_mod('politics_candidate_topbar_phoneno')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('politics_candidate_topbar_phoneno')); ?></span></a>
					  					<?php }?>	      
				            </div>
			    					<div class="col-lg-6 col-md-6 location-header d-flex text-lg-start text-md-start text-center align-self-center">
				              <?php if(get_theme_mod('politics_candidate_topbar_location') != ''){?>
					  						<i class="fas fa-map-marker-alt me-2"></i> <span class="text-center"><?php echo esc_html(get_theme_mod('politics_candidate_topbar_location')); ?></span>
					  					<?php }?>	
				            </div>
			    					<div class="col-lg-3 col-md-3 call-header text-center text-lg-end text-md-start align-self-center">
				              <?php if(get_theme_mod('politics_candidate_topbar_email') != ''){?>
					  						<i class="fas fa-envelope me-2"></i><a href="mailto:<?php echo esc_attr(get_theme_mod('politics_candidate_topbar_email')); ?>"><?php echo esc_html(get_theme_mod('politics_candidate_topbar_email')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('politics_candidate_topbar_email')); ?></span></a>
					  					<?php }?>	
				            </div>
						      <?php } ?>
			    			</div>
		    			</div>
		    			<div class="col-lg-12 align-self-center menu-header">
		    				<div class="row">
		    					<div class="col-lg-7 col-md-4 col-6 menu align-self-center">
		    						<?php  ?>
									   	<div class="toggle-menu responsive-menu text-lg-start text-md-end text-center">
						           	<button role="tab" onclick="politics_candidate_menu_open()">
						           		<i class="<?php echo esc_attr(get_theme_mod('politics_candidate_responsive_open_menu_icon','fas fa-bars'));?>"></i>
						           		<?php echo esc_html( get_theme_mod('politics_candidate_open_menu_label', __('Open Menu','politics-candidate'))); ?><span class="screen-reader-text"><?php esc_html_e('Open Menu','politics-candidate'); ?></span></button>
						         	</div>
						         	<div id="menu-sidebar" class="nav side-menu">
						            <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'politics-candidate' ); ?>">
						              <?php 
						                wp_nav_menu( array( 
						                  'theme_location' => 'primary',
						                  'container_class' => 'main-menu-navigation clearfix' ,
						                  'menu_class' => 'clearfix',
						                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 p-0">%3$s</ul>',
						                  'fallback_cb' => 'wp_page_menu',
						                ) ); 
						              ?>
						              <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="politics_candidate_menu_close()">
						              	<?php echo esc_html( get_theme_mod('politics_candidate_close_menu_label', __('Close Menu','politics-candidate'))); ?><i class="<?php echo esc_attr(get_theme_mod('politics_candidate_responsive_close_menu_icon','fas fa-times'));?>"></i>
						              	<span class="screen-reader-text"><?php esc_html_e('Close Menu','politics-candidate'); ?></span></a>
						            </nav>
						        	</div>
				      			<?php ?>
		    					</div>
		    					<div class="socialicons col-lg-3 col-md-4 col-12 align-self-center text-lg-start text-md-center text-start">
							    	<div class="social-media text-lg-start text-center">
											<?php if( get_theme_mod( 'politics_candidate_facebook_url' ) != '' && get_theme_mod('politics_candidate_facebook_icon') != 'None') { ?>
												<a target="_blank" href="<?php echo esc_url( get_theme_mod( 'politics_candidate_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('politics_candidate_facebook_icon', 'fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','politics-candidate' );?></span></a>
											<?php } ?>
											<?php if( get_theme_mod( 'politics_candidate_twitter_url' ) != '' && get_theme_mod('politics_candidate_twitter_icon') != 'None') { ?>
												<a target="_blank" href="<?php echo esc_url( get_theme_mod( 'politics_candidate_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('politics_candidate_twitter_icon', 'fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','politics-candidate' );?></span></a>
											<?php } ?>
											<?php if( get_theme_mod( 'politics_candidate_instagram_url' ) != '' && get_theme_mod('politics_candidate_instagram_icon') != 'None') { ?>
												<a target="_blank" href="<?php echo esc_url( get_theme_mod( 'politics_candidate_instagram_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('politics_candidate_instagram_icon','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','politics-candidate' );?></span></a>
											<?php } ?>
											<?php if( get_theme_mod( 'politics_candidate_pintrest_url' ) != '' && get_theme_mod('politics_candidate_pintrest_icon') != 'None') { ?>
												<a target="_blank" href="<?php echo esc_url( get_theme_mod( 'politics_candidate_pintrest_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('politics_candidate_pintrest_icon','fab fa-pinterest-p')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Pintrest','politics-candidate' );?></span></a>
											<?php } ?>
										</div>	
							    </div>
							    <div class="btn col-lg-2 col-md-4 col-6 align-self-center text-lg-end text-md-end text-center">
							    	<div class="read-btn">
                      <a href="<?php echo esc_url(get_theme_mod('politics_candidate_topbar_button_link')!= '') ? esc_url(get_theme_mod('politics_candidate_topbar_button_link')) : esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('politics_candidate_topbar_button_text',__('Donate Now', 'politics-candidate'))); ?><i class="fa-solid fa-circle-dollar-to-slot ms-2"></i><span class="screen-reader-text"><?php echo esc_html('Donate Now', 'politics-candidate') ?></span></a>
                    </div> 
							    </div>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
	    	</div>
			</div>
		</div>
	</div>	
</header>