<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Political_Era
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php political_era_action_image(); ?>
    <div class="post-content">        
        <?php political_era_action_title();?>        
        <div class="entry-content">
            <?php the_content(); ?>
        </div>  
    </div>
</article><!-- #post-<?php the_ID(); ?> -->