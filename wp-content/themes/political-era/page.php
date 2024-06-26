<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Political_Era
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="post-detail-wrap">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					political_era_action_comment();
				endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php
	/**
	 *
	 * Hook - political_era_action_sidebar_layout
	 *
	 * @hooked -political_era_sidebar_layout -10
	*/
	do_action( 'political_era_action_sidebar_layout' );
	?>
<?php
get_footer();
