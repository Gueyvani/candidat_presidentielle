<?php

add_action( 'admin_menu', 'election_campaign_gettingstarted' );
function election_campaign_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'election-campaign'), esc_html__('About Theme', 'election-campaign'), 'edit_theme_options', 'election-campaign-guide-page', 'election_campaign_guide');
}

function election_campaign_admin_theme_style() {
   wp_enqueue_style('election-campaign-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
}
add_action('admin_enqueue_scripts', 'election_campaign_admin_theme_style');

function election_campaign_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Election Campaign, you rock!', 'election-campaign' ) ?> </h2>
			<p><?php esc_html_e( 'Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional election website. Please Click on the link below to know the theme setup information.', 'election-campaign' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=election-campaign-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Getting Started', 'election-campaign' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'election_campaign_notice');

/**
 * Theme Info Page
 */
function election_campaign_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'election-campaign' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
			<div class="row">
				<div class="col-md-5 intro">
					<div class="pad-box">
						<h2><?php esc_html_e( 'Welcome to Election Campaign', 'election-campaign' ); ?></h2>
						<p>Version: <?php echo esc_html($theme['Version']);?></p>
						<span class="intro__version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'election-campaign' ); ?>
						</span>
						<div class="powered-by">
							<p><strong><?php esc_html_e( 'Theme created by Buy WP Templates', 'election-campaign' ); ?></strong></p>
							<p>
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/theme-logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="pro-links">
				    	<a href="<?php echo esc_url( ELECTION_CAMPAIGN_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'election-campaign'); ?></a>
						<a href="<?php echo esc_url( ELECTION_CAMPAIGN_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'election-campaign'); ?></a>
						<a href="<?php echo esc_url( ELECTION_CAMPAIGN_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'election-campaign'); ?></a>
					</div>
					<div class="install-plugins">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive1.png'); ?>" alt="" />
					</div>
				</div>
			</div>
			<h2 class="tg-docs-section intruction-title" id="section-4"><?php esc_html_e( '1). Setup Election Campaign Theme', 'election-campaign' ); ?></h2>
			<div class="row">
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		           	<p><?php esc_html_e( 'Election Campaign is a versatile and user-friendly WordPress theme designed for effective campaign management and engagement. With features tailored for campaign strategy, voter targeting, and political messaging, it empowers candidates to craft winning electoral strategies. This theme facilitates seamless communication and marketing through political advertising, social media campaigning, and public relations. It ensures that campaign messaging reaches the right audience through targeted voter outreach and strategic political branding. From Campaign management to Political fundraising, this theme offers comprehensive tools for organizing and financing election campaigns. It enables efficient management of political events, rallies, and speeches, enhancing candidate visibility and engagement with voters. The theme&#39;s clean and responsive design ensures a professional and visually appealing online presence, complemented by personalization options and a customizable testimonial section. With built-in SEO-friendly features and optimized codes, it ensures a fast page load time and enhanced visibility on search engines. Mobile-friendly and multipurpose, this theme provides an interactive and stunning user experience across devices. It comes with bootstrap integration and shortcodes for easy customization, allowing candidates to create a unique and impactful campaign website. With secure and clean code, this theme prioritizes data privacy and protection, ensuring a safe and trustworthy online environment for both candidates and voters. It includes social media integration and call-to-action buttons to encourage user engagement and support.', 'election-campaign' ); ?><p><br>
				        	<ol>
							   <li><?php esc_html_e( 'Start','election-campaign'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','election-campaign'); ?></a> <?php esc_html_e( 'your website.','election-campaign'); ?> </l>
							   <li><?php esc_html_e( 'Election Campaign','election-campaign'); ?> <a target="_blank" href="<?php echo esc_url( ELECTION_CAMPAIGN_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','election-campaign'); ?></a> </li>
						   </ol>
	         </div>
	      </div>
				 <div class="col-md-5">
						<div class="pad-box">
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
						</div>
						
	      </div>
      </div>
			  <div class="col-md-12 text-block">
					<h2 class="dashboard-install-title"><?php esc_html_e( '2.) Premium Theme Information.','election-campaign'); ?></h2>
				   	<div class="row">
						<div class="col-md-7">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Description','election-campaign'); ?></h3>
                    			<p class="pad-box-p"><?php esc_html_e( 'Election Campaign is a versatile and user-friendly WordPress theme designed for effective campaign management and engagement. With features tailored for campaign strategy, voter targeting, and political messaging, it empowers candidates to craft winning electoral strategies. This theme facilitates seamless communication and marketing through political advertising, social media campaigning, and public relations. It ensures that campaign messaging reaches the right audience through targeted voter outreach and strategic political branding. From Campaign management to Political fundraising, this theme offers comprehensive tools for organizing and financing election campaigns. It enables efficient management of political events, rallies, and speeches, enhancing candidate visibility and engagement with voters. The theme&#39;s clean and responsive design ensures a professional and visually appealing online presence, complemented by personalization options and a customizable testimonial section. With built-in SEO-friendly features and optimized codes, it ensures a fast page load time and enhanced visibility on search engines. Mobile-friendly and multipurpose, this theme provides an interactive and stunning user experience across devices. It comes with bootstrap integration and shortcodes for easy customization, allowing candidates to create a unique and impactful campaign website. With secure and clean code, this theme prioritizes data privacy and protection, ensuring a safe and trustworthy online environment for both candidates and voters. It includes social media integration and call-to-action buttons to encourage user engagement and support.', 'election-campaign' ); ?><p>
	                    	</div>
						</div>
						<div class="col-md-5 install-plugin-right">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Features','election-campaign'); ?></h3>
								<div class="dashboard-install-benefit">
									<ul>
										<li><?php esc_html_e( 'Theme options using Customizer API','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Responsive design','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Site Icon and Logo option','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Header Images option','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Favicon, Logo, title, and tagline customization','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Advanced Color options and color pallets','election-campaign'); ?></li>
										<li><?php esc_html_e( '100+ Font Family Options','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Pagination option','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Demo Importer','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Enable-Disable options on All sections','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Main Slider','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Woocommerce Compatible','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Unlimited Slides','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Section to show categories','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Product Listing based on category','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Top Categories Section','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Best Seller Tab','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Testimonial with custom post type','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Promotional Banners','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Partner Listing','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Shortcodes for Testimonials','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Newsletter with the help of contact form 7.','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Well-sanitized as per WordPress standards.','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Responsive layout for all devices','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Typography for the complete website','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Global Color pallete','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Section specific Color pallete','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Fully integrated with Font Awesome Icon','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Instagram Section','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Partner Listing','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Background Image Option','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Custom page templates','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Allow setting site title, tagline, logo','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Left and Right Sidebar','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Sticky post & Comment threads','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Customizable Home Page','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Multiple inner page templates','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Contact Page Template','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Blog Full width and right and left sidebar','election-campaign'); ?></li>
										<li><?php esc_html_e( 'Recent post widget with images, Related post','election-campaign'); ?></li>
									</ul>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="dashboard__blocks">
			<div class="row">
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Get Support','election-campaign'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( ELECTION_CAMPAIGN_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','election-campaign'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( ELECTION_CAMPAIGN_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','election-campaign'); ?></a></li>
					</ol>
				</div>

				<div class="col-md-3">
					<h3><?php esc_html_e( 'Getting Started','election-campaign'); ?></h3>
					<ol>
						<li><?php esc_html_e( 'Start','election-campaign'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','election-campaign'); ?></a> <?php esc_html_e( 'your website.','election-campaign'); ?> </li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Help Docs','election-campaign'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( ELECTION_CAMPAIGN_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','election-campaign'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( ELECTION_CAMPAIGN_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','election-campaign'); ?></a></li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Buy Premium','election-campaign'); ?></h3>
					<ol>
						<a href="<?php echo esc_url( ELECTION_CAMPAIGN_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'election-campaign'); ?></a>
					</ol>
				</div>
			</div>
		</div>
	</div>

<?php }?>
