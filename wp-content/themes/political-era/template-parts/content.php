<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Political_Era
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-item' ); ?>>
	<figure>
		<?php the_post_thumbnail(); ?>
	</figure>

    <div class="blog-contain">
    	<?php $enable_post_meta  = political_era_get_option( 'enable_post_meta' ); 
    	if ( true == $enable_post_meta ): ?>
    		<span class="posted-on"><?php echo esc_html( get_the_date() ); ?></span>
		<?php endif; ?>
        <h4 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
        </h4>        
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
