<?php
/**
 * Template for CTA Section
 *
 * @package Political_Era
 */

$enable_cta = political_era_get_option( 'enable_cta' );
if ( false == $enable_cta ){
    return;
}

$cta_sub_title = political_era_get_option( 'cta_sub_title' );
$cta_page = political_era_get_option( 'cta_page' );
$cta_image = political_era_get_option( 'cta_image' );
$cta_button = political_era_get_option( 'cta_button' );
$cta_button_url = political_era_get_option( 'cta_button_url' );
?>
	<?php  if ( absint( $cta_page ) > 0 ){    ?>
	    <section class="volunteer-section default-padding" style="background-image: url(<?php echo esc_url( $cta_image)?>);">
	        <div class="container">
	            <div class="section-wrap">
	            	<?php 
		        	$args = array (                                   
	                    'p'                 => absint($cta_page ),
	                    'post_status'       => 'publish',
	                    'post_type'         => 'page',
	                );
	                $loop = new WP_Query($args);   
	                if ( $loop->have_posts() ) : 
	                	while ($loop->have_posts()) : $loop->the_post(); ?>
			                <div class="section-intro animated wow fadeInDown" data-wow-duration="1s">
			                    <header class="entry-header">
			                        <span class="entry-subtitle">
			                        	<?php echo esc_html( $cta_sub_title ); ?>   
			                        </span>
			                        <h2 class="entry-title">
			                        	<?php the_title(); ?>
			                        </h2>
			                    </header>
		                    </div>
		                    <div class="become-volunteer">
			                    <div class="section-description">
			                        <?php the_content();?>
			                    </div>
		                    <?php if( !empty( $cta_button ) ): ?>
			                    <a class="button animated wow fadeInUp" data-wow-duration="0.5s" href="<?php echo esc_url( $cta_button_url ); ?>"><?php echo esc_html( $cta_button);?></a>
		                    <?php endif; ?>
			                </div>
		                <?php endwhile;
		                wp_reset_postdata();
	                endif; ?>
	            </div>
	        </div>
	    </section>
    <?php } ?>