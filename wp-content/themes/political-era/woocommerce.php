<?php
/**
 * The template for displaying woocommerce section.
 *
 * @package Political_Era
 */

get_header();
?>
<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php woocommerce_content(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar( 'shop' ); ?>
</div>
<?php
get_footer();