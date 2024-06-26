<?php
/**
 * Template for Blog Section
 *
 * @package Political_Era
 */
?>
<?php 
$enable_blog = political_era_get_option( 'enable_blog' );
if ( false == $enable_blog ){
    return;
}
$section_blog_title = political_era_get_option( 'blog_title' );
$blog_sub_title = political_era_get_option( 'blog_sub_title' );
$blog_category = political_era_get_option( 'blog_category' );
$blog_number = political_era_get_option( 'blog_number' );
?>
    <section class="blog-section  default-padding">
        <div class="container">
            <div class="section-wrap">
                <div class="section-intro animated wow fadeInDown" data-wow-duration="1s">
                    <header class="entry-header">
                    	<?php if ( !empty( $blog_sub_title ) ): ?>
	                        <span class="entry-subtitle">
	                        	<?php echo esc_html( $blog_sub_title ); ?>   
	                        </span>
                        <?php endif; ?>
						<?php if ( !empty( $section_blog_title ) ): ?>                        
	                        <h2 class="entry-title">
	                            <?php echo esc_html( $section_blog_title ); ?>
	                        </h2>
                        <?php endif; ?>
                    </header>
                </div>

                <?php 
                $args = array(
                    'post_type'   => 'post',
                    'posts_per_page' => absint( $blog_number ),
                    'post_status' => 'publish',
                    'paged' => 1,
                );
                if ( absint( $blog_category ) > 0 ) {
                    $args['cat'] = absint( $blog_category );
                } 
                $loop = new WP_Query($args);  
                if ( $loop->have_posts() ) : ?>                  
	                <div class="blog-wrap animated wow fadeInUp" data-wow-duration="1s">
	                	<?php while ($loop->have_posts()) : $loop->the_post(); ?> 
		                    <div class="blog-item">
		                        <figure>
		                            <?php the_post_thumbnail(); ?>
		                        </figure>
		                        <div class="blog-contain">
                                    <span class="posted-on"><?php echo esc_html( get_the_date() ); ?></span>
		                            <h4 class="entry-title">
		                                <a href="<?php the_permalink();?>"><?php the_title();?></a>
		                            </h4>		                            
		                        </div>
		                    </div>
	                    <?php endwhile;
	                    wp_reset_postdata(); ?>
	                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>