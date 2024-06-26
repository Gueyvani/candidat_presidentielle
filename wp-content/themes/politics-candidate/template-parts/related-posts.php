<?php 
if ( ! function_exists( 'politics_candidate_related_posts_function' ) ) {
	function politics_candidate_related_posts_function() {
		wp_reset_postdata();
		global $post;

		// Define shared post arguments
		$args = array(
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'ignore_sticky_posts'    => 1,
			'orderby'                => 'rand',
			'post__not_in'           => array( $post->ID ),
			'posts_per_page'    => absint( get_theme_mod( 'politics_candidate_related_post_count', '3' ) ),
		);
		// Related by categories
		if ( get_theme_mod( 'politics_candidate_post_order', 'categories' ) == 'categories' ) {

			$cats = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $cats ) {
				$cats                 = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );
				$args['category__in'] = $cats;
			} else {
				$args['cat'] = $cats;
			}
		}
		// Related by tags
		if ( get_theme_mod( 'politics_candidate_post_order', 'categories' ) == 'tags' ) {

			$tags = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $tags ) {
				$tags            = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
				$args['tag__in'] = $tags;
			} else {
				$args['tag_slug__in'] = explode( ',', $tags );
			}
			if ( ! $tags ) {
				$break = true;
			}
		}

		$query = ! isset( $break ) ? new WP_Query( $args ) : new WP_Query();

		return $query;
	}
}

$politics_candidate_related_posts = politics_candidate_related_posts_function(); ?>

<?php if ( $politics_candidate_related_posts->have_posts() ): ?>

	<div class="related-posts clearfix py-3">
		<?php if ( get_theme_mod('politics_candidate_related_posts_title','Related Posts') != '' ) {?>
			<h2 class="related-posts-main-title"><?php echo esc_html( get_theme_mod('politics_candidate_related_posts_title',__('Related Posts','politics-candidate')) ); ?></h2>
		<?php }?>
		<div class="row">
			<?php while ( $politics_candidate_related_posts->have_posts() ) : $politics_candidate_related_posts->the_post(); ?>
				<div class="col-lg-4 col-md-6 mb-3">
					<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
					    <div class="services-box">    
					      	<?php if(has_post_thumbnail() && get_theme_mod( 'politics_candidate_feature_image_hide',true) != '') { ?>
						        <div class="service-image">
						          <a href="<?php echo esc_url( get_permalink() ); ?>">
						            <?php  the_post_thumbnail(); ?>
						            <span class="screen-reader-text"><?php esc_html(the_title()); ?></span>
						          </a>
						        </div>
					      	<?php }?>
					      	<div class="lower-box">
						      	<h3 class="pt-0"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
						        <?php if(get_the_excerpt()) { ?>
						            <p><?php $politics_candidate_excerpt = get_the_excerpt(); echo esc_html( politics_candidate_string_limit_words( $politics_candidate_excerpt, esc_attr(get_theme_mod('politics_candidate_related_post_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('politics_candidate_button_excerpt_suffix','[...]') ); ?></p>
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
				</div> 
			<?php endwhile; ?>
		</div>

	</div><!--/.post-related-->
<?php endif; ?>

<?php wp_reset_postdata(); ?>