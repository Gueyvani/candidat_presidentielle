<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Political_Era
 */

?>
<?php 
	/*
	 * Hook- political_era_action_doctype
	 *
	 * @hooked - political_era_doctype -10
	*/
	do_action( 'political_era_action_doctype' );

	?>
	<head>
		<?php 
			/*
			 * Hook - political_era_action_head
			 *
			 * @hooked - political_era_head -10
			*/
			do_action( 'political_era_action_head' );		
		?>

		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
	<?php 
		/*
		 * Hook - political_era_action_before
		 *
		 * @hooked - political_era_page_start -10
		*/ 
		do_action( 'political_era_action_before' );

		/*
		 * Hook - political_era_action_before_header
		 *
		 * @hooked political_era_header_start - 10
		 *
		*/
		do_action( 'political_era_action_before_header' );

		/*
		 * Hook - political_era_action_header
		 *
		 * @hooked political_era_header - 10
		 *
		*/
		do_action( 'political_era_action_header' );	

		/*
		 * Hook - political_era_action_after_header
		 *
		 * @hooked political_era_header_end - 10
		 *
		*/
		do_action( 'political_era_action_after_header' );

		/*
		 * Hook - political_era_action_before_content
		 *
		 * @hooked - political_era_content_start -10
		 *
		*/
		do_action( 'political_era_action_before_content' );
	?>
