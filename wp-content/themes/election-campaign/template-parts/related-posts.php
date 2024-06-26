<?php
$election_campaign_archive_year  = get_the_time('Y'); 
$election_campaign_archive_month = get_the_time('m'); 
$election_campaign_archive_day   = get_the_time('d');
?>
<?php $election_campaign_related_posts = election_campaign_related_posts();
if(get_theme_mod('election_campaign_related_enable_disable',true)==1){ ?>
<?php if ( $election_campaign_related_posts->have_posts() ): ?>
    <div class="related-posts">
        <h3 class="mb-3"><?php echo esc_html(get_theme_mod('election_campaign_related_title',__('Related Post','election-campaign')));?></h3>
        <div class="row">
            <?php while ( $election_campaign_related_posts->have_posts() ) : $election_campaign_related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="related-inner-box mb-3 p-3">
                        <?php if(has_post_thumbnail()) { ?>
                            <div class="box-image mb-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php }?>
                        <h4 class="mb-2"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h4>
                        <div class="metabox mb-3">
                            <span class="entry-date me-1"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_post_date_icon','far fa-calendar-alt')); ?> me-1 my-2"></i> <a href="<?php echo esc_url( get_day_link( $election_campaign_archive_year, $election_campaign_archive_month, $election_campaign_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
                            <span class="entry-author mx-1"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_post_author_icon','fas fa-user')); ?> me-1 my-2"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
                        </div>
                        <?php $election_campaign_excerpt = get_the_excerpt(); echo esc_html( election_campaign_string_limit_words( $election_campaign_excerpt, esc_attr(get_theme_mod('election_campaign_related_post_excerpt_number','15')))); ?> <?php echo esc_html( get_theme_mod('election_campaign_post_discription_suffix','[...]') ); ?>
                        <?php if( get_theme_mod('election_campaign_button_text','Read More') != ''){ ?>
                            <div class="postbtn mt-2 text-start">
                                <a href="<?php the_permalink(); ?>"><i class="<?php echo esc_attr(get_theme_mod('election_campaign_post_btn_icon','fas fa-university')); ?>"></i><?php echo esc_html(get_theme_mod('election_campaign_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('election_campaign_button_text','Read More'));?></span></a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); }?>