<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Political_Era
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php 
			/*
			 * Hook - political_era_action_404_page
			 *
			 * @hooked - political_era_404_page_content -10
			*/
			do_action( 'political_era_action_404_page' );
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
