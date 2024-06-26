<?php
/**
 * The template part for displaying slider
 *
 * @package Politics Candidate
 * @subpackage politics_candidate
 * @since Politics Candidate 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="services-box mb-5">    
    <?php if(has_post_thumbnail() && get_theme_mod( 'politics_candidate_feature_image_hide',true) != '') { ?>
      <div class="service-image">
        <a href="<?php echo esc_url( get_permalink() ); ?>">
          <?php  the_post_thumbnail(); ?>
          <span class="screen-reader-text"><?php the_title(); ?></span>
        </a>
      </div>
    <?php }?>
    <div class="lower-box">
      <div class="tc-category">
        <?php the_category(); ?>
      </div>
      <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'politics_candidate_date_hide',true) != '' || get_theme_mod( 'politics_candidate_comment_hide',true) != '' || get_theme_mod( 'politics_candidate_author_hide',true) != '' || get_theme_mod( 'politics_candidate_time_hide',true) != '') { ?>
        <div class="metabox py-1 px-2 mb-3">
          <?php if( get_theme_mod( 'politics_candidate_date_hide',true) != '') { ?>
            <span class="entry-date me-2"><i class="<?php echo esc_attr(get_theme_mod('politics_candidate_postdate_icon', 'far fa-calendar-alt me-1')); ?>"></i><?php echo esc_html( get_the_date() ); ?></span>
          <?php } ?>

          <?php if( get_theme_mod( 'politics_candidate_author_hide',true) != '') { ?>
            <span class="entry-author me-2"><i class="<?php echo esc_attr(get_theme_mod('politics_candidate_author_icon', 'fas fa-user me-1')); ?>"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
          <?php } ?>

          <?php if( get_theme_mod( 'politics_candidate_comment_hide',true) != '') { ?>
            <span class="entry-comments me-2"><i class="<?php echo esc_attr(get_theme_mod('politics_candidate_comment_icon', 'fas fa-comments me-1')); ?>"></i> <?php comments_number( __('0 Comments','politics-candidate'), __('0 Comments','politics-candidate'), __('% Comments','politics-candidate') ); ?></span>
          <?php } ?>

          <?php if( get_theme_mod( 'politics_candidate_time_hide',true) != '') { ?>
            <span class="entry-time"><i class="<?php echo esc_attr(get_theme_mod('politics_candidate_time_icon', 'fas fa-clock me-1')); ?>"></i> <?php echo esc_html( get_the_time() ); ?></span>
          <?php }?>
        </div>
      <?php } ?>
      <?php if(get_theme_mod('politics_candidate_post_content') == 'Full Content'){ ?>
        <?php the_content(); ?>
      <?php }
      if(get_theme_mod('politics_candidate_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
        <?php if(get_the_excerpt()) { ?>
          <p><?php $politics_candidate_excerpt = get_the_excerpt(); echo esc_html( politics_candidate_string_limit_words( $politics_candidate_excerpt, esc_attr(get_theme_mod('politics_candidate_post_excerpt_length','20')))); ?><?php echo esc_html( get_theme_mod('politics_candidate_button_excerpt_suffix','[...]') ); ?></p>
        <?php }?>
      <?php }?>
      <?php if ( get_theme_mod('politics_candidate_post_button_text','Read More') != '' ) {?>
        <div class="read-btn mt-4">
          <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" ><?php echo esc_html( get_theme_mod('politics_candidate_post_button_text',__( 'Read More','politics-candidate' )) ); ?><i class="fa-solid fa-angle-right ms-2"></i><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('politics_candidate_post_button_text',__( 'Read More','politics-candidate' )) ); ?></span>
          </a>
        </div>
      <?php }?>
    </div>
  </div>
</article>