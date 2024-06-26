<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Political_Era
 */

?>
	<?php 
	/*
	 * Hook - political_era_action_after_content
	 *
	 * @hooked - political_era_content_end -10
	 *
	*/
	do_action( 'political_era_action_after_content' );

	/*
	 * Hook - political_era_action_before_footer
	 *
	 * @hooked - political_era_footer_start -10
	*/
	do_action( 'political_era_action_before_footer' );

	/*
	 * Hook - political_era_action_footer
	 *
	 * @hooked - political_era_footer_end -10
	*/
	do_action( 'political_era_action_footer' );

	/*
	 * Hook - political_era_action_after_footer
	 *
	 * @hooked - political_era_footer_end -10
	*/
	do_action( 'political_era_action_after_footer' );

	/*
	 * Hook - political_era_action_scroll_footer
	 *
	 * @hooked - political_era_scroll_footer -10
	*/
	do_action( 'political_era_action_scroll_footer' );	

	/*
	 * Hook - political_era_action_after
	 *
	 * @hooked - political_era_page_end -10
	*/
	do_action( 'political_era_action_after' );
	?>
<?php wp_footer(); ?>

</body>
</html>
