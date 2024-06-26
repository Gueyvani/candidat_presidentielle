<?php
/**
 * The template for displaying home page.
 *
 * Template Name: Custom Home Page
 *
 * @package Politics Candidate
 */
get_header(); ?>

<main id="main" role="main">
  
  <?php if( get_theme_mod( 'politics_candidate_slider_hide_show', true) != ''|| get_theme_mod('politics_candidate_slider_responsive') != ''){ ?>
    <div class="<?php if( get_theme_mod('politics_candidate_slider_width_options', 'Full Width') == 'Container Width'){ ?>container <?php }?>">
      <div class="slider-section">
        <section id="slider">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"> 
            <?php $politics_candidate_slider_pages = array();
              for ( $politics_candidate_count = 1; $politics_candidate_count <= 4; $politics_candidate_count++ ) {
                $politics_candidate_mod = intval( get_theme_mod( 'politics_candidate_slider_page' . $politics_candidate_count ));
                if ( 'page-none-selected' != $politics_candidate_mod ) {
                  $politics_candidate_slider_pages[] = $politics_candidate_mod;
                }
              }
              if( !empty($politics_candidate_slider_pages) ) :
                $politics_candidate_args = array(
                  'post_type' => 'page',
                  'post__in' => $politics_candidate_slider_pages,
                  'orderby' => 'post__in'
                );
                $politics_candidate_query = new WP_Query( $politics_candidate_args );
              if ( $politics_candidate_query->have_posts() ) :
                $i = 1;
            ?>     
            <div class="carousel-inner" role="listbox">
              <?php  while ( $politics_candidate_query->have_posts() ) : $politics_candidate_query->the_post(); ?>
              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <div class="slider-bgimage">
                  <?php if(has_post_thumbnail()){ ?>
                    <?php the_post_thumbnail(); ?>
                  <?php } else {?>
                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/slider.png" alt="<?php echo esc_attr('Slider Image', 'politics-candidate'); ?>">
                  <?php }?>
                </div>
                <div class="carousel-caption">
                  <div class="inner_carousel">
                    <div class="slider-small-text mb-2">
                      <?php if( get_theme_mod('politics_candidate_slider_small_text',true) != ''){ ?>  
                        <span><?php echo esc_html(get_theme_mod('politics_candidate_slider_small_text')); ?></span>
                      <?php }?>
                    </div>
                    <?php if( get_theme_mod('politics_candidate_slider_title',true) != ''){ ?>
                      <h1 class="mb-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php }?>
                    <?php if( get_theme_mod('politics_candidate_slider_content',true) != ''){ ?>  
                      <p class="my-3"><?php $politics_candidate_excerpt = get_the_excerpt(); echo esc_html( politics_candidate_string_limit_words( $politics_candidate_excerpt,esc_attr(get_theme_mod('politics_candidate_slider_excerpt_length',20)))); ?></p>
                    <?php }?>  
                    <?php if(get_theme_mod('politics_candidate_slider_button',true) != '' || get_theme_mod('politics_candidate_slider_button_responsive',true) != '' || get_theme_mod('politics_candidate_slider_button_text','Become A Volunteer') != ''|| get_theme_mod('politics_candidate_slider_button_link') != '') {?>
                      <div class="read-btn">
                        <a href="<?php echo esc_url(get_theme_mod('politics_candidate_slider_button_link')!= '') ? esc_url(get_theme_mod('politics_candidate_slider_button_link')) : esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('politics_candidate_slider_button_text',__('Become A Volunteer', 'politics-candidate'))); ?><i class="fa-solid fa-angle-right ms-2"></i><span class="screen-reader-text"><?php echo esc_html('Become A Volunteer', 'politics-candidate') ?></span></a>
                      </div>
                    <?php }?>  

                  </div>
                </div>
              </div>
              <?php $i++; endwhile; 
              wp_reset_postdata();?>
            </div>
            <?php else : ?>
              <div class="no-postfound"></div>
            <?php endif;
            endif;?>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('politics_candidate_slider_prev_icon','fas fa-angle-left')); ?>"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Previous','politics-candidate');?></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('politics_candidate_slider_next_icon','fas fa-angle-right')); ?>"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Next','politics-candidate');?></span>
            </a>
          </div> 
        </section> 
      </div>
    </div>  
  <?php }?>

  <?php do_action( 'politics_candidate_before_event_section' ); ?>

  <?php if( get_theme_mod( 'politics_candidate_event_hide_show', false) != ''){ ?>
    <section id="event-section" class="pb-5">
      <div class="container">
        <div class="row">
          <div class="main-event-section col-lg-8 col-md-12 col-12">
            <div class="py-4">
              <?php if(get_theme_mod('politics_candidate_upcoming_event_title') != '') {?>
                <h3 class="post-title-main-heading1"><?php echo esc_html(get_theme_mod('politics_candidate_upcoming_event_title')) ?></h3>
              <?php }?>
              <?php if(get_theme_mod('politics_candidate_upcoming_event_text') != '') {?>
                <p class="post-para1"><?php echo esc_html(get_theme_mod('politics_candidate_upcoming_event_text')) ?></p>
              <?php }?>
              <?php if(get_theme_mod('politics_candidate_best_event_title') != '') {?>
                <h3 class="post-title-main-heading2"><?php echo esc_html(get_theme_mod('politics_candidate_best_event_title')) ?></h3>
              <?php }?>
              <?php if(get_theme_mod('politics_candidate_best_event_text') != '') {?>
                <p class="post-para2"><?php echo esc_html(get_theme_mod('politics_candidate_best_event_text')) ?></p>
              <?php }?>
              <div class="row">
                <div class="col-lg-6 col-md-6 d-flex gap-2 align-items-start mb-2">
                  <?php if(get_theme_mod('politics_candidate_human_right_title') != '') {?>
                    <div class="list-main-sec">
                     <i class="<?php echo esc_attr(get_theme_mod('politics_candidate_human_right_icon', 'fas fa-check')); ?>"></i> 
                    </div>
                    <div class="list-text-sec">
                        <span class="list-sec mb-0"><?php echo esc_html(get_theme_mod('politics_candidate_human_right_title'));?></span>
                        <p class="post-para"><?php echo esc_html(get_theme_mod('politics_candidate_human_right_text')) ?></p>
                    </div>  
                  <?php }?>
                </div>
                <div class="col-lg-6 col-md-6 d-flex gap-2 align-items-start mb-2">
                  <?php if(get_theme_mod('politics_candidate_women_leadership_title') != '') {?>
                    <div class="list-main-sec">
                     <i class="<?php echo esc_attr(get_theme_mod('politics_candidate_women_leadership_icon', 'fas fa-check')); ?>"></i> 
                    </div>
                    <div class="list-text-sec">
                        <span class="list-sec mb-0"><?php echo esc_html(get_theme_mod('politics_candidate_women_leadership_title'));?></span>
                        <p class="post-para"><?php echo esc_html(get_theme_mod('politics_candidate_women_leadership_text')) ?></p>
                    </div>  
                  <?php }?>
                </div>                              
              </div>
              <?php if(get_theme_mod('politics_candidate_product_clock_timer_end') != '') {?>
                <div class="countdowntimer mt-2 col-lg-12">
                  <p id="timer" class="countdown">
                    <?php $dateday = get_theme_mod('politics_candidate_product_clock_timer_end'); ?>
                    <input type="hidden" class="date" value="<?php echo esc_html($dateday); ?>">
                  </p>
                </div>
              <?php }?>
            </div>
          </div>  
          <?php if(get_theme_mod('politics_candidate_event_category') != '') {?>
            <div class="event-post-section col-lg-4 col-md-8 col-10 align-self-center">
              <div class="post-cat">
                <?php if ( get_theme_mod('politics_candidate_event_category') != '' ) {
                  $page_query = new WP_Query(array( 'category_name' => esc_html(get_theme_mod('politics_candidate_event_category')))); ?>
                  <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                    <div class="post-content mb-3">
                      <div class="box d-flex ">
                          <div class="post-img col-lg-3 col-3 col-md-3">
                            <?php the_post_thumbnail(); ?>
                          </div>                      
                          <div class="col-lg-9 col-9 col-md-9">
                            <div class="postbox px-2 py-2">                         
                              <span class="post-date me-2 px-2"><i class='far fa-calendar-alt me-1'></i><?php echo esc_html( get_the_date() ); ?></span>
                              <span class="post-time me-2 px-2"><i class='fas fa-clock me-1'></i> <?php echo esc_html( get_the_time() ); ?></span>
                            </div>                        
                            <h3 class="px-3 post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                          </div>                      
                      </div>
                    </div>  
                  <?php endwhile; wp_reset_query(); ?>
                <?php } ?>
              </div>  
            </div>  
          <?php }?>
        </div>  
      </div>
    </section>
  <?php }?>  

  <?php do_action( 'politics_candidate_after_event_section' ); ?>

  <div id="content-ma" class="py-0">
  	<div class="container">
    	<?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
  	</div>
  </div>
</main>

<?php get_footer(); ?>