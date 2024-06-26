<?php
/**
 * The template part for displaying grid layout
 * @package Election Campaign
 * @subpackage election_campaign
 * @since 1.0
 */
?>

<?php
  $election_campaign_archive_year  = get_the_time('Y');
  $election_campaign_archive_month = get_the_time('m');
  $election_campaign_archive_day   = get_the_time('d');
?>
<div class="col-lg-4 col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="box-image">
      <?php if( get_theme_mod( 'election_campaign_post_featured_image',true) != '') { ?>
        <div class="box-image">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php }?>
    </div>
    <div class="mainbox p-4">
      <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'election_campaign_grid_post_date',true) != '' || get_theme_mod( 'election_campaign_grid_post_author',true) != '' || get_theme_mod( 'election_campaign_grid_post_comment',true) != '' || get_theme_mod( 'election_campaign_grid_post_time',true) != '') { ?>
        <div class="metabox py-2">
          <?php if( get_theme_mod( 'election_campaign_grid_post_date',true) != '') { ?>
            <span class="entry-date me-1 py-1"><i class="far fa-calendar-alt me-2"></i><a href="<?php echo esc_url( get_day_link( $election_campaign_archive_year, $election_campaign_archive_month, $election_campaign_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span class="ms-1"></span>
          <?php }?>
          <?php if( get_theme_mod( 'election_campaign_grid_post_author',true) != '') { ?>
            <span class="entry-author mx-1 py-1"><i class="fas fa-user me-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></span><span class="ms-1"></span>
          <?php }?>
          <?php if( get_theme_mod( 'election_campaign_grid_post_comment',true) != '') { ?>
            <span class="entry-comments mx-1 py-1"><i class="fas fa-comments me-2"></i> <?php comments_number( __('0 Comment', 'election-campaign'), __('0 Comments', 'election-campaign'), __('% Comments', 'election-campaign') ); ?></span><span class="ms-1"></span>
          <?php }?>
          <?php if( get_theme_mod( 'election_campaign_grid_post_time',true) != '' ) { ?>
              <span class="entry-time mx-1 py-1"><i class="fas fa-clock me-2"></i> <?php echo esc_html( get_the_time() ); ?></span>
          <?php }?>
        </div>
      <?php }?>
      <div class="new-text">
      <?php $election_campaign_excerpt = get_the_excerpt(); echo esc_html( election_campaign_string_limit_words( $election_campaign_excerpt, esc_attr(get_theme_mod('election_campaign_post_excerpt_number','30')))); ?>  <?php echo esc_html( get_theme_mod('election_campaign_post_discription_suffix','[...]') ); ?>
      </div> 
      <?php if( get_theme_mod('election_campaign_button_text','Read More') != ''){ ?>
        <div class="postbtn mt-4 text-start">
          <a href="<?php the_permalink(); ?>"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_post_btn_icon','fas fa-university')); ?>"></i><?php echo esc_html(get_theme_mod('election_campaign_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('election_campaign_button_text','Read More'));?></span></a>
        </div>
      <?php }?>
    </div>
  </article>
</div>