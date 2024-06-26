<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); 

?>

<main role="main" id="skip_content">
  <?php if( get_theme_mod('election_campaign_slider_hide', false) != '' || get_theme_mod( 'election_campaign_display_slider',true) != ''){ ?>
    <section id="slider" class=" wow slideInLeft delay-1000" data-wow-duration="2s">              
      <?php $election_campaign_slider_pages = array();
        for ( $election_campaign_count = 1; $election_campaign_count <= 3; $election_campaign_count++ ) {
          $mod = intval( get_theme_mod( 'election_campaign_slider_page' . $election_campaign_count ));
          if ( 'page-none-selected' != $mod ) {
            $election_campaign_slider_pages[] = $mod;
          }
        }
        if( !empty($election_campaign_slider_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $election_campaign_slider_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );?>
          <div class="owl-carousel">
            <?php
            if ( $query->have_posts() ) :
              $election_campaign_count = 1;
              while ( $query->have_posts() ) : $query->the_post(); ?>
              
                <div class="inner_carousel">
                    <div class="image-overlay"></div>
                    <?php if(has_post_thumbnail()){
                      the_post_thumbnail(); 
                    } else{?>

                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slider.png" alt="" />

                    <?php } ?>
                    <div class="carousel-caption">
                      <?php if( get_theme_mod('election_campaign_slider_heading',true) != ''){ ?>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                      <?php } ?>  
                      
                      <?php if( get_theme_mod('election_campaign_slider_text',true) != ''){ ?>
                        <p><?php $election_campaign_excerpt = get_the_excerpt(); echo esc_html( election_campaign_string_limit_words( $election_campaign_excerpt, esc_attr(get_theme_mod('election_campaign_slider_excerpt_number','30')))); ?><?php echo esc_html( get_theme_mod('election_campaign_slider_excerpt_suffix','...') ); ?></p>
                      <?php } ?>  
                      <?php if( get_theme_mod('election_campaign_show_slider_button',true) != ''){ ?>
                        <?php if( get_theme_mod('election_campaign_slider_button_text','Read More') != '' || get_theme_mod('election_campaign_slider_button_link') != ''){ ?>      
                          <div class="read-more font-weight-bold btn my-4">
                            <a href="<?php echo esc_url(get_theme_mod('election_campaign_slider_button_link')!= '') ? esc_url(get_theme_mod('election_campaign_slider_button_link')) : esc_url(get_permalink()); ?>" class="p-3"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_slider_btn_icon','fas fa-university')); ?>"></i><?php echo esc_html( get_theme_mod('election_campaign_slider_button_text',__('Read More','election-campaign'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('election_campaign_slider_button_text',__('Read More','election-campaign'))); ?></span></a>  
                          </div>                        
                        <?php } ?>
                      <?php }?>
                    </div>
                </div>
              <?php $election_campaign_count++; endwhile; 
            wp_reset_postdata();?>
          </div>  
          <?php else : ?>
            <div class="no-postfound"></div>
      <?php endif;
      endif;?>
      <div class="clearfix"></div>    
    </section>
  <?php }?>  

<!-- Service Section -->
  <?php if( get_theme_mod( 'election_campaign_our_services') != '' || get_theme_mod( 'election_campaign_section_text') != '' || get_theme_mod( 'election_campaign_section_title') != '') { ?>
    <section id="service-sec" class="py-5">
      <div class="container">
        <div class="heading-box text-center mb-4">
          <?php if( get_theme_mod( 'election_campaign_section_text') != '') { ?>
            <p><?php echo esc_html(get_theme_mod('election_campaign_section_text',''));?></p>
          <?php } ?>
          <?php if( get_theme_mod( 'election_campaign_section_title') != '') { ?>
            <h2 class="py-3"><?php echo esc_html(get_theme_mod('election_campaign_section_title',''));?></h2>  
          <?php } ?>
        </div>
        <div class="row">
          <?php
            $election_campaign_catData =  get_theme_mod('election_campaign_our_services','');
            if($election_campaign_catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html($election_campaign_catData,'election-campaign'))); ?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="box mb-5">
                <?php the_post_thumbnail(); ?>
                <div class="box-content">
                  <div class="service-icon pb-4">
                    <?php if( get_post_meta($post->ID, 'election_campaign_icon', true) ) {?>
                      <i class=" <?php echo esc_attr(get_post_meta($post->ID,'election_campaign_icon',true)); ?>"></i>
                    <?php }?>
                  </div>
                  <h4 class="title"><?php the_title(); ?></h4>
                  <p><?php $election_campaign_excerpt = get_the_excerpt(); echo esc_html( election_campaign_string_limit_words( $election_campaign_excerpt, esc_attr(get_theme_mod('election_campaign_practice_excerpt_number','10')))); ?></p>
                  <?php if( get_theme_mod('election_campaign_practice_button_text','Read More') != ''){ ?>
                    <div>
                      <a class="service-btn py-4" href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('election_campaign_practice_button_text',__('Read More','election-campaign')));?><i class="<?php echo esc_attr(get_theme_mod('election_campaign_our_practice_button_icon','fas fa-long-arrow-alt-right')); ?>"></i><span class="screen-reader-text"><?php the_title(); ?></span></a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php endwhile;
            wp_reset_postdata();
          } ?>
        </div>
      </div>
    </section>
  <?php }?>

  <div class="container front-page-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="new-text"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>