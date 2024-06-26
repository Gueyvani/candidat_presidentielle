<?php
/**
 * Template for Video Section
 *
 * @package Political_Era
 */
$enable_event = political_era_get_option( 'enable_event' );
if ( false == $enable_event ){
    return;
}

$event_sub_title = political_era_get_option( 'event_sub_title' );
$event_page = political_era_get_option( 'event_page' );
$event_category = political_era_get_option( 'event_category' );
$event_number = political_era_get_option( 'event_number' );
$event_button = political_era_get_option( 'event_button' );
$event_button_url = political_era_get_option( 'event_button_url' );
?>
    <section class="event-section default-padding">
        <div class="container">
            <div class="section-wrap">
	            <?php  if ( absint( $event_page ) > 0 ){                   
	                $args = array (                                   
	                    'p'                 => absint($event_page ),
	                    'post_status'       => 'publish',
	                    'post_type'         => 'page',
	                );
	                $loop = new WP_Query($args);   
	                if ( $loop->have_posts() ) : ?>            	
		                <div class="section-intro animated wow fadeInLeft" data-wow-duration="1s">
		                	<?php while ($loop->have_posts()) : $loop->the_post(); ?> 
			                    <header class="entry-header">
                                    <?php if ( !empty( $event_sub_title ) ): ?>
                                        <span class="entry-subtitle">
                                            <?php echo esc_html( $event_sub_title );?>
                                        </span>
                                    <?php endif; ?>
			                        <h2 class="entry-title">
			                            <?php the_title();?>
			                        </h2>
			                    </header>
			                    <div class="section-description">
			                    	<?php the_content(); ?>
			                    </div>
	                    	<?php endwhile;
		                    wp_reset_postdata();?>
			                    <a class="button" href="<?php echo esc_url( $event_button_url);?>"><?php echo esc_html( $event_button ); ?></a>		                   
		                </div>
	                <?php endif; 
                } ?>
                <div class="event-section-contain">
                    <?php 
                    $args = array(
                        'post_type'   => 'post',
                        'posts_per_page' => absint( $event_number ),
                        'post_status' => 'publish',
                        'paged' => 1,
                    );
                    if ( absint( $event_category ) > 0 ) {
                        $args['cat'] = absint( $event_category );
                    } 
                    $loop = new WP_Query($args);  
                    if ( $loop->have_posts() ) : $count = 0;
                    	while ($loop->have_posts()) : $loop->the_post(); $count++;?>  
		                    <div class="event-item animated wow fadeInDown" data-wow-duration="<?php absint( $count )?>s">
		                        <figure>
		                            <?php the_post_thumbnail( 'political_era_event' ); ?>		                            
		                        </figure>
		                        <div class="event-item-contain">
		                            <h4 class="entry-title">
		                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		                            </h4>
		                            <div class="entry-meta">
		                            	<?php political_era_entry_categories();
		                            	political_era_posted_on(); ?>
		                            </div>
		                        </div>
		                    </div>
	                    <?php endwhile;
	                    wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </div>
    </section>