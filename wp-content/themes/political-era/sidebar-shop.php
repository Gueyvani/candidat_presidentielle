<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Political_Era
 */

$sidebar = apply_filters( 'political_era_get_shop_sidebar', 'shop-sidebar' );
?>
<?php if ( is_active_sidebar( $sidebar ) ) : ?>
	<aside id="secondary" class="widget-area">		

		<?php dynamic_sidebar( $sidebar ); ?>
			
	</aside><!-- #secondary -->
<?php endif; ?>