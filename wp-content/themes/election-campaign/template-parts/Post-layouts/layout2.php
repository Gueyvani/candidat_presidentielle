<?php
/**
 * The template part for displaying content
 * @package Election Campaign
 * @subpackage election_campaign
 * @since 1.0
 */

$election_campaign_archive_year  = get_the_time('Y'); 
$election_campaign_archive_month = get_the_time('m'); 
$election_campaign_archive_day   = get_the_time('d'); 

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="layout2">
    <?php $election_campaign_postimg_lay = get_theme_mod( 'election_campaign_post_featured_image','Image');
    if($election_campaign_postimg_lay == 'Image'){ ?>
      <div class="box-image">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php }
    if($election_campaign_postimg_lay == 'Color'){ ?>
      <div class="post-color text-center">
      </div>
    <?php }?>
    <div class="mainbox p-4">
      <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod('election_campaign_metafields_date', true) != '' || get_theme_mod('election_campaign_metafields_author', true) != '' || get_theme_mod('election_campaign_metafields_comment', true) != '' || get_theme_mod('election_campaign_metafields_time', true) != '' ||  get_theme_mod('election_campaign_display_post_date', true) != '' || get_theme_mod('election_campaign_display_post_author', true) != '' || get_theme_mod('election_campaign_display_post_comment', true) != '' || get_theme_mod('election_campaign_display_post_time', true) != ''){ ?>
        <div class="metabox mb-3">
          <?php if( get_theme_mod( 'election_campaign_metafields_date',true) != '' || get_theme_mod( 'election_campaign_display_post_date',true) != '') { ?>
            <span class="entry-date me-1"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_post_date_icon','far fa-calendar-alt')); ?> me-1"></i> <a href="<?php echo esc_url( get_day_link( $election_campaign_archive_year, $election_campaign_archive_month, $election_campaign_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a><span class="ms-2"><?php echo esc_html( get_theme_mod('election_campaign_blog_post_meta_seperator','|') ); ?></span></span>
          <?php }?>
          <?php if( get_theme_mod( 'election_campaign_metafields_author',true) != '' || get_theme_mod( 'election_campaign_display_post_author',true) != '') { ?>
            <span class="entry-author mx-1"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_post_author_icon','fas fa-user')); ?> me-1"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a><span class="ms-2"><?php echo esc_html( get_theme_mod('election_campaign_blog_post_meta_seperator','|') ); ?></span></span>
          <?php }?>
          <?php if( get_theme_mod( 'election_campaign_metafields_comment',true) != '' || get_theme_mod( 'election_campaign_display_post_comment',true) != '') { ?>
            <span class="entry-comments mx-1"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_post_comment_icon','fas fa-comments')); ?> me-1"></i> <?php comments_number( __('0 Comment', 'election-campaign'), __('0 Comments', 'election-campaign'), __('% Comments', 'election-campaign') ); ?><span class="ms-2"><?php echo esc_html( get_theme_mod('election_campaign_blog_post_meta_seperator','|') ); ?></span></span>
          <?php }?>
          <?php if( get_theme_mod( 'election_campaign_metafields_time',true) != '' || get_theme_mod( 'election_campaign_display_post_time',true) != '') { ?>
            <span class="entry-time mx-1"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_post_time_icon','fas fa-clock')); ?> me-1"></i> <?php echo esc_html( get_the_time() ); ?></span>
          <?php }?>
          <?php echo esc_html (election_campaign_edit_link()); ?>
        </div>
      <?php }?>
      <div class="new-text">
        <p>
          <?php $election_campaign_theme_lay = get_theme_mod( 'election_campaign_content_settings','Excerpt');
          if($election_campaign_theme_lay == 'Content'){ ?>
            <?php the_content(); ?>
          <?php }
          if($election_campaign_theme_lay == 'Excerpt'){ ?>
            <?php if(get_the_excerpt()) { ?>
              <?php $election_campaign_excerpt = get_the_excerpt(); echo esc_html( election_campaign_string_limit_words( $election_campaign_excerpt, esc_attr(get_theme_mod('election_campaign_post_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('election_campaign_post_discription_suffix','[...]') ); ?>
            <?php }?>
          <?php }?>
        </p>
      </div>
      <?php if( get_theme_mod('election_campaign_button_text','Read More') != ''){ ?>
        <div class="postbtn mt-4 text-start">
          <a href="<?php the_permalink(); ?>"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_post_btn_icon','fas fa-university')); ?>"></i><?php echo esc_html(get_theme_mod('election_campaign_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('election_campaign_button_text','Read More'));?></span></a>
        </div>
      <?php }?>
    </div>
  </div>
</article>