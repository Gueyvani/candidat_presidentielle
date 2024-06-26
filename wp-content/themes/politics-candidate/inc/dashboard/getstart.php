<?php
//about theme info
add_action( 'admin_menu', 'politics_candidate_gettingstarted' );
function politics_candidate_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'politics-candidate'), esc_html__('Get Started', 'politics-candidate'), 'edit_theme_options', 'politics_candidate_guide', 'politics_candidate_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function politics_candidate_admin_theme_style() {
   wp_enqueue_style('politics-candidate-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/getstart.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'politics_candidate_admin_theme_style');

//guidline for about theme
function politics_candidate_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'politics-candidate' );
?>

<div class="wrapper-info">  
    <div class="tab-sec">
		<div class="tab">
			<div class="logo">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/logo.png" alt="" />
			</div>
			<button role="tab" class="tablinks home" onclick="politics_candidate_openCity(event, 'tc_index')"><?php esc_html_e( 'Free Theme Information', 'politics-candidate' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="politics_candidate_openCity(event, 'tc_pro')"><?php esc_html_e( 'Premium Theme Information', 'politics-candidate' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="politics_candidate_openCity(event, 'tc_create')"><?php esc_html_e( 'Theme Support', 'politics-candidate' ); ?></button>				
		</div>

		<div  id="tc_index" class="tabcontent">
			<h2><?php esc_html_e( 'Welcome to Politics Candidate Theme', 'politics-candidate' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
			<hr>
			<div class="info-link">
				<a href="<?php echo esc_url( POLITICS_CANDIDATE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'politics-candidate' ); ?></a>
				<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'politics-candidate'); ?></a>
				<a class="get-pro" href="<?php echo esc_url( POLITICS_CANDIDATE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'politics-candidate'); ?></a>
			</div>
			<div class="col-tc-6">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/screenshot.png" alt="" />
			</div>
			<div class="col-tc-6">
				<P><?php esc_html_e( 'Politics Candidate is a sophisticated and versatile WordPress theme tailored specifically for political candidates and campaigns. With its sleek design and user-friendly interface, this theme offers a comprehensive suite of features to help politicians engage with constituents, showcase their platforms, and mobilize supporters effectively. From its crisp, responsive layout to its customizable color schemes and typography options, the Politics Candidate theme ensures a professional and visually striking online presence. Its integration with popular plugins like WooCommerce allows for seamless fundraising efforts, while built-in
					donation forms streamline the process of collecting contributions. One of the standout
					features of this theme is its robust event management system, which enables candidates to
					promote rallies, town halls, and fundraisers with ease. Interactive maps, RSVP functionality,
					and calendar integration ensure that supporters stay informed and engaged with campaign
					activities. Furthermore, the Politics Candidate theme prioritizes accessibility and inclusivity,
					with options for multilingual support and ADA-compliant design elements. This commitment
					to reaching diverse audiences enhances the candidate&#39;s ability to connect with voters from
					all backgrounds. Social media integration is another highlight, enabling candidates to amplify
					their message across various platforms and foster online community engagement.
					Additionally, the theme offers comprehensive blogging capabilities, empowering candidates
					to share their thoughts, policy proposals, and campaign updates in a compelling and
					informative manner.', 'politics-candidate' ); ?></P>
			</div>
    	</div>

		<div id="tc_pro" class="tabcontent">
			<h3><?php esc_html_e( 'Politics Candidate Theme Information', 'politics-candidate' ); ?></h3>
			<hr>
			<div class="pro-image">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/resize.png" alt="" />
			</div>
			<div class="info-link-pro">
				<p><a href="<?php echo esc_url( POLITICS_CANDIDATE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'politics-candidate' ); ?></a></p>
				<p><a href="<?php echo esc_url( POLITICS_CANDIDATE_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'politics-candidate' ); ?></a></p>
				<p><a href="<?php echo esc_url( POLITICS_CANDIDATE_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'politics-candidate' ); ?></a></p>
			</div>
			<div class="col-pro-5">
				<h4><?php esc_html_e( 'Politics Candidate Pro Theme', 'politics-candidate' ); ?></h4>
				<p><?php esc_html_e( 'Politics Candidate is a sophisticated and versatile WordPress theme tailored specifically for political candidates and campaigns. With its sleek design and user-friendly interface, this theme offers a comprehensive suite of features to help politicians engage with constituents, showcase their platforms, and mobilize supporters effectively. From its crisp, responsive layout to its customizable color schemes and typography options, the Politics Candidate theme ensures a professional and visually striking online presence. Its integration with popular plugins like WooCommerce allows for seamless fundraising efforts, while built-in	donation forms streamline the process of collecting contributions. One of the standout	features of this theme is its robust event management system, which enables candidates to	promote rallies, town halls, and fundraisers with ease. Interactive maps, RSVP functionality,and calendar integration ensure that supporters stay informed and engaged with campaign
					activities. Furthermore, the Politics Candidate theme prioritizes accessibility and inclusivity,
					with options for multilingual support and ADA-compliant design elements. This commitment
					to reaching diverse audiences enhances the candidate&#39;s ability to connect with voters from
					all backgrounds. Social media integration is another highlight, enabling candidates to amplify
					their message across various platforms and foster online community engagement.
					Additionally, the theme offers comprehensive blogging capabilities, empowering candidates
					to share their thoughts, policy proposals, and campaign updates in a compelling and
					informative manner.', 'politics-candidate' ); ?></P>		
			</div>
			<div class="col-pro-6">				
				<h4><?php esc_html_e( 'Theme Features', 'politics-candidate' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Theme Options using Customizer API', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Responsive design', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Favicon, Logo, title, and tagline customization', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Advanced Color options', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( '100+ Font Family Options', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Background Image Option', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Simple Menu Option', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Additional section for products', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Enable-Disable options on All sections', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Home Page setting for different sections', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Advance Slider with unlimited slides', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Partner Section', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Promotional Banner Section for Products', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Separate Newsletter Section', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Text and call to action button for each slide', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Pagination option', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Custom CSS option', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Translations Ready', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Customizable Home Page', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Full-Width Template', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Footer Widgets & Editor Style', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Banner & Post Type Plugin Functionality', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Post type', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Woo Commerce Compatible', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Multiple Inner Page Templates', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Product Sliders', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Slider', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Contact page template', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Contact Widget', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Advance Social Media Feature', 'politics-candidate' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Listing With Shortcode', 'politics-candidate' ); ?></li>
				</ul>				
			</div>
		</div>	

		<div id="tc_create" class="tabcontent">
			<h3><?php esc_html_e( 'Support', 'politics-candidate' ); ?></h3>
			<hr>
			<div class="tab-cont">
		  		<h4><?php esc_html_e( 'Need Support?', 'politics-candidate' ); ?></h4>				
				<div class="info-link-support">
					<P><?php esc_html_e( 'Our team is obliged to help you in every way possible whenever you face any type of difficulties and doubts.', 'politics-candidate' ); ?></P>
					<a href="<?php echo esc_url( POLITICS_CANDIDATE_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support Forum', 'politics-candidate' ); ?></a>
				</div>
			</div>
			<div class="tab-cont">	
				<h4><?php esc_html_e('Reviews', 'politics-candidate'); ?></h4>				
				<div class="info-link-support">
					<P><?php esc_html_e( 'It is commendable to have such a theme inculcated with amazing features and robust functionalities. I feel grateful to recommend this theme to one and all.', 'politics-candidate' ); ?></P>
					<a href="<?php echo esc_url( POLITICS_CANDIDATE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'politics-candidate'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>