<?php /**
 *
 * Template Name: Home
 *
 * The template for displaying home page.
 *
 * @package Political_Era
 */
get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php 
			/***************** Mission Section **********************************/
			get_template_part( 'page-template/section/section', 'mission' );

			/***************** Profile Section **********************************/
			get_template_part( 'page-template/section/section', 'profile' );												
			/***************** Video Section **********************************/
			get_template_part( 'page-template/section/section', 'video' );	

			/***************** Event Section **********************************/
			get_template_part( 'page-template/section/section', 'event' );	

			/***************** CTA Section **********************************/
			get_template_part( 'page-template/section/section', 'cta' );

			/***************** Blog Section **********************************/
			get_template_part( 'page-template/section/section', 'blog' );	

			/***************** Promo Section **********************************/
			get_template_part( 'page-template/section/section', 'promo' );																	

			?>
		</main>
	</div>
<?php 
get_footer();