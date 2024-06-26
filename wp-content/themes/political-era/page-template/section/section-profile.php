<?php
/**
 * Template for Profile Section
 *
 * @package Political_Era
 */

$enable_profile = political_era_get_option( 'enable_profile' );
if ( false == $enable_profile ){
    return;
}

$profile_sub_title = political_era_get_option( 'profile_sub_title' );
$profile_page = political_era_get_option( 'profile_page' );
$profile_image = political_era_get_option( 'profile_image' );
$profile_button = political_era_get_option( 'profile_button' );
?>
	<?php  if ( absint( $profile_page ) > 0 ){    ?>
	    <section class="profile-section default-padding" style="background-image:url(<?php echo esc_url( $profile_image) ?>);">
	        <div class="container">
	        	<?php 
	        	$args = array (                                   
                    'p'                 => absint($profile_page ),
                    'post_status'       => 'publish',
                    'post_type'         => 'page',
                );
                $loop = new WP_Query($args);   
                if ( $loop->have_posts() ) : 
                	while ($loop->have_posts()) : $loop->the_post(); ?>
			            <div class="section-wrap">
			                <div class="section-intro">
			                    <header class="entry-header animated wow fadeInDown" data-wow-duration="1s">
			                    	<?php if ( !empty( $profile_sub_title ) ): ?>
				                        <span class="entry-subtitle">
				                           	<?php echo esc_html( $profile_sub_title ); ?>
				                        </span>
			                        <?php endif; ?>
			                        <h2 class="entry-title">
			                            <?php the_title(); ?>
			                        </h2>
			                    </header>
			                    <div class="section-description animated wow fadeInUp" data-wow-duration="1s">
			                        <?php the_content(); ?>
			                    </div>
			                    <a class="button animated wow fadeInUp" data-wow-duration="0.5s" href="<?php the_permalink(); ?>"><?php echo esc_html( $profile_button);?></a>
			                </div>
			            </div>
		            <?php endwhile;
		            wp_reset_postdata();
	            endif; ?>
	        </div>
	    </section>
    <?php } ?>