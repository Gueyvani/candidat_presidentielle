<?php
/**
 * Template for Mission Section
 *
 * @package Political_Era
 */
?>
<?php 
$enable_mission = political_era_get_option( 'enable_mission' );
if ( false == $enable_mission ){
    return;
}
$mission_quote = political_era_get_option( 'mission_quote' );
$mission_sub_title = political_era_get_option( 'mission_sub_title' );
$mission_page = political_era_get_option( 'mission_page' );
$mission_category = political_era_get_option( 'mission_category' );
$mission_number = political_era_get_option( 'mission_number' );
$mission_button = political_era_get_option( 'mission_button' );
$mission_button_url = political_era_get_option( 'mission_button_url' );
?>
    <section class="mission-vision-section default-padding">
        <div class="container">
            <div class="section-wrap">
                <?php if ( !empty( $mission_quote ) ): ?>
                    <div class="section-quote animated wow fadeInLeft" data-wow-duration="1s">
                        <q>
                            <?php echo esc_html( $mission_quote ); ?>
                        </q>
                    </div>
                <?php endif; ?>
                <div class="mission-vision-contain">
                    <?php  if ( absint( $mission_page ) > 0 ){                   
                        $args = array (                                   
                            'p'                 => absint($mission_page ),
                            'post_status'       => 'publish',
                            'post_type'         => 'page',
                        );
                        $loop = new WP_Query($args);   
                        if ( $loop->have_posts() ) : ?>
                            <div class="section-intro animated wow fadeInDown" data-wow-duration="1s">
                                <?php while ($loop->have_posts()) : $loop->the_post(); ?> 
                                    <header class="entry-header">
                                        <?php if ( !empty( $mission_sub_title ) ): ?>
                                            <span class="entry-subtitle">
                                                <?php echo esc_html( $mission_sub_title );?>
                                            </span>
                                        <?php endif; ?>
                                        <h2 class="entry-title">
                                            <?php the_title(); ?>
                                        </h2>
                                    </header>
                                    <div class="section-description">
                                        <?php the_excerpt();?>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata();?>
                            </div>
                        <?php endif; 
                    } ?>

                    <?php 
                    $args = array(
                        'post_type'   => 'post',
                        'posts_per_page' => absint( $mission_number ),
                        'post_status' => 'publish',
                        'paged' => 1,
                    );
                    if ( absint( $mission_category ) > 0 ) {
                        $args['cat'] = absint( $mission_category );
                    } 
                    $loop = new WP_Query($args);  
                    if ( $loop->have_posts() ) : ?>   
                    
                        <div class="mission-vision-slider  animated wow fadeInRight" data-wow-duration="1s">
                            <?php while ($loop->have_posts()) : $loop->the_post(); ?> 
                            <div class="mission-vision-item">
                                <h4 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                                <div class="entry-content">
                                    <?php the_excerpt();?>
                                </div>
                            </div>
                            <?php endwhile;
                            wp_reset_postdata();?>
                        </div>
                    <?php endif; ?>
                    <?php if ( !empty( $mission_button ) ): ?>
                        <a class="button  animated wow fadeInUp" data-wow-duration="2s" href="<?php echo esc_url($mission_button_url );?>"><?php echo esc_html( $mission_button )?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>