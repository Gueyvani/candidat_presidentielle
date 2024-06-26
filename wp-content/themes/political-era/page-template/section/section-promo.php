<?php
/**
 * Template for Promo Section
 *
 * @package Political_Era
 */

$enable_promo = political_era_get_option( 'enable_promo' );
if ( false == $enable_promo ){
    return;
}
$promo_sub_title = political_era_get_option( 'promo_sub_title' );
$promo_page = political_era_get_option( 'promo_page' );
$promo_button = political_era_get_option( 'promo_button' );
$promo_button_url = political_era_get_option( 'promo_button_url' );
?>

	<?php  if ( absint( $promo_page ) > 0 ){    ?>
	    <section class="donation-section  default-padding">
	        <div class="container">
	        	<?php 
	        	$args = array (                                   
                    'p'                 => absint($promo_page ),
                    'post_status'       => 'publish',
                    'post_type'         => 'page',
                );
                $loop = new WP_Query($args);   
                if ( $loop->have_posts() ) : 
                	while ($loop->have_posts()) : $loop->the_post(); ?>	        	
	            		<div class="section-wrap">
			                <figure class="animated wow fadeInDown" data-wow-duration="1s">
			                	<?php the_post_thumbnail(); ?>
			                </figure>
			                <div class="section-wrap-left">
			                    <div class="section-intro animated wow fadeInDown" data-wow-duration="1s">
			                        <header class="entry-header">
			                        	<?php if (!empty( $promo_sub_title ) ): ?>
				                            <span class="entry-subtitle">
				                                <?php echo esc_html( $promo_sub_title ); ?>
				                            </span>
			                            <?php endif; ?>

			                            <h2 class="entry-title">
			                               <?php the_title(); ?>
			                            </h2>
			                        </header>
			                    </div>
			                    <div class="donation-form animated wow fadeInLeft" data-wow-duration="1s">
			                        <?php the_content(); ?>
			                    </div>
			                    <?php if( !empty( $promo_button ) ): ?>
			                    	<a class="button animated wow fadeInUp" data-wow-duration="0.5s" href="<?php echo esc_url( $promo_button_url ); ?>"><?php echo esc_html( $promo_button);?></a>
		                    	<?php endif; ?>
			                </div>
			            </div>
		            <?php endwhile;
		            wp_reset_postdata();
	            endif; ?>
	        </div>
	    </section>
    <?php } ?>