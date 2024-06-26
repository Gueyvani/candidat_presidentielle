<?php 
	$politics_candidate_custom_css ='';

	/*----------------Width Layout -------------------*/
	$politics_candidate_theme_lay = get_theme_mod( 'politics_candidate_width_options','Full Layout');
    if($politics_candidate_theme_lay == 'Full Layout'){
		$politics_candidate_custom_css .='body{';
			$politics_candidate_custom_css .='max-width: 100%;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_theme_lay == 'Contained Layout'){
		$politics_candidate_custom_css .='body{';
			$politics_candidate_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_theme_lay == 'Boxed Layout'){
		$politics_candidate_custom_css .='body{';
			$politics_candidate_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$politics_candidate_custom_css .='}';
		$politics_candidate_custom_css .='div.header-menu-box, .header-menu-box:after{';
			$politics_candidate_custom_css .='box-shadow:none !important;';
		$politics_candidate_custom_css .='}';
	}

	/*------ Button Style -------*/
	$politics_candidate_top_buttom_padding = get_theme_mod('politics_candidate_top_button_padding');
	$politics_candidate_left_right_padding = get_theme_mod('politics_candidate_left_button_padding');
	if($politics_candidate_top_buttom_padding != false || $politics_candidate_left_right_padding != false ){
		$politics_candidate_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
			$politics_candidate_custom_css .='padding-top: '.esc_attr($politics_candidate_top_buttom_padding).'px; padding-bottom: '.esc_attr($politics_candidate_top_buttom_padding).'px; padding-left: '.esc_attr($politics_candidate_left_right_padding).'px; padding-right: '.esc_attr($politics_candidate_left_right_padding).'px;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_button_border_radius = get_theme_mod('politics_candidate_button_border_radius');
	$politics_candidate_custom_css .='.read-btn a.blogbutton-small, #comments input[type="submit"].submit{';
		$politics_candidate_custom_css .='border-radius: '.esc_attr($politics_candidate_button_border_radius).'px;';
	$politics_candidate_custom_css .='}';

	/*-------------- Woocommerce Button  -------------------*/

	$politics_candidate_woocommerce_button_padding_top = get_theme_mod('politics_candidate_woocommerce_button_padding_top');
	if($politics_candidate_woocommerce_button_padding_top != false){
		$politics_candidate_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$politics_candidate_custom_css .='padding-top: '.esc_attr($politics_candidate_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($politics_candidate_woocommerce_button_padding_top).'px;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_woocommerce_button_padding_right = get_theme_mod('politics_candidate_woocommerce_button_padding_right');
	if($politics_candidate_woocommerce_button_padding_right != false){
		$politics_candidate_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$politics_candidate_custom_css .='padding-left: '.esc_attr($politics_candidate_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($politics_candidate_woocommerce_button_padding_right).'px;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_woocommerce_button_border_radius = get_theme_mod('politics_candidate_woocommerce_button_border_radius');
	if($politics_candidate_woocommerce_button_border_radius != false){
		$politics_candidate_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$politics_candidate_custom_css .='border-radius: '.esc_attr($politics_candidate_woocommerce_button_border_radius).'px;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_related_product = get_theme_mod('politics_candidate_related_product',true);

	if($politics_candidate_related_product == false){
		$politics_candidate_custom_css .='.related.products{';
			$politics_candidate_custom_css .='display: none;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_woocommerce_product_border = get_theme_mod('politics_candidate_woocommerce_product_border',false);

	if($politics_candidate_woocommerce_product_border == true){
		$politics_candidate_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$politics_candidate_custom_css .='border: 1px solid #ddd;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_woocommerce_product_padding_top = get_theme_mod('politics_candidate_woocommerce_product_padding_top',0);
		$politics_candidate_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$politics_candidate_custom_css .='padding-top: '.esc_attr($politics_candidate_woocommerce_product_padding_top).'px; padding-bottom: '.esc_attr($politics_candidate_woocommerce_product_padding_top).'px;';
		$politics_candidate_custom_css .='}';

	$politics_candidate_woocommerce_product_padding_right = get_theme_mod('politics_candidate_woocommerce_product_padding_right',0);
		$politics_candidate_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$politics_candidate_custom_css .='padding-left: '.esc_attr($politics_candidate_woocommerce_product_padding_right).'px; padding-right: '.esc_attr($politics_candidate_woocommerce_product_padding_right).'px;';
		$politics_candidate_custom_css .='}';

	$politics_candidate_woocommerce_product_border_radius = get_theme_mod('politics_candidate_woocommerce_product_border_radius');
	if($politics_candidate_woocommerce_product_border_radius != false){
		$politics_candidate_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$politics_candidate_custom_css .='border-radius: '.esc_attr($politics_candidate_woocommerce_product_border_radius).'px;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_woocommerce_product_box_shadow = get_theme_mod('politics_candidate_woocommerce_product_box_shadow');
	if($politics_candidate_woocommerce_product_box_shadow != false){
		$politics_candidate_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$politics_candidate_custom_css .='box-shadow: '.esc_attr($politics_candidate_woocommerce_product_box_shadow).'px '.esc_attr($politics_candidate_woocommerce_product_box_shadow).'px '.esc_attr($politics_candidate_woocommerce_product_box_shadow).'px #aaa;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_product_sale_font_size = get_theme_mod('politics_candidate_product_sale_font_size');
	$politics_candidate_custom_css .='.woocommerce span.onsale {';
		$politics_candidate_custom_css .='font-size: '.esc_attr($politics_candidate_product_sale_font_size).'px;';
	$politics_candidate_custom_css .='}';

	// Breadcrumb color option
	$politics_candidate_breadcrumb_color = get_theme_mod('politics_candidate_breadcrumb_color');
	$politics_candidate_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$politics_candidate_custom_css .='color: '.esc_attr($politics_candidate_breadcrumb_color).'!important;';
	$politics_candidate_custom_css .='}';

	// Breadcrumb bg color option
	$politics_candidate_breadcrumb_background_color = get_theme_mod('politics_candidate_breadcrumb_background_color');
	$politics_candidate_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$politics_candidate_custom_css .='background-color: '.esc_attr($politics_candidate_breadcrumb_background_color).'!important;';
	$politics_candidate_custom_css .='}';

	// Breadcrumb hover color option
	$politics_candidate_breadcrumb_hover_color = get_theme_mod('politics_candidate_breadcrumb_hover_color');
	$politics_candidate_custom_css .='.bradcrumbs a:hover{';
		$politics_candidate_custom_css .='color: '.esc_attr($politics_candidate_breadcrumb_hover_color).'!important;';
	$politics_candidate_custom_css .='}';

	// Breadcrumb hover bg color option
	$politics_candidate_breadcrumb_hover_bg_color = get_theme_mod('politics_candidate_breadcrumb_hover_bg_color');
	$politics_candidate_custom_css .='.bradcrumbs a:hover{';
		$politics_candidate_custom_css .='background-color: '.esc_attr($politics_candidate_breadcrumb_hover_bg_color).'!important;';
	$politics_candidate_custom_css .='}';

	// Category color option
	$politics_candidate_category_color = get_theme_mod('politics_candidate_category_color');
	$politics_candidate_custom_css .='.tc-single-category a{';
		$politics_candidate_custom_css .='color: '.esc_attr($politics_candidate_category_color).'!important;';
	$politics_candidate_custom_css .='}';

	// Category bg color option
	$politics_candidate_category_background_color = get_theme_mod('politics_candidate_category_background_color');
	$politics_candidate_custom_css .='.tc-single-category a{';
		$politics_candidate_custom_css .='background-color: '.esc_attr($politics_candidate_category_background_color).'!important;';
	$politics_candidate_custom_css .='}';

	/*---- Preloader Color ----*/
	$politics_candidate_preloader_color = get_theme_mod('politics_candidate_preloader_color');
	$politics_candidate_preloader_bg_color = get_theme_mod('politics_candidate_preloader_bg_color');

	if($politics_candidate_preloader_color != false){
		$politics_candidate_custom_css .='.preloader-squares .square, .preloader-chasing-squares .square{';
			$politics_candidate_custom_css .='background-color: '.esc_attr($politics_candidate_preloader_color).';';
		$politics_candidate_custom_css .='}';
	}
	if($politics_candidate_preloader_bg_color != false){
		$politics_candidate_custom_css .='.preloader{';
			$politics_candidate_custom_css .='background-color: '.esc_attr($politics_candidate_preloader_bg_color).';';
		$politics_candidate_custom_css .='}';
	}

	// menu color
	$politics_candidate_menu_color = get_theme_mod('politics_candidate_menu_color');

	$politics_candidate_custom_css .='.primary-navigation a,.primary-navigation .current_page_item > a, .primary-navigation .current-menu-item > a, .primary-navigation .current_page_ancestor > a{';
			$politics_candidate_custom_css .='color: '.esc_attr($politics_candidate_menu_color).'!important;';
	$politics_candidate_custom_css .='}';

	// menu hover color
	$politics_candidate_menu_hover_color = get_theme_mod('politics_candidate_menu_hover_color');
	$politics_candidate_custom_css .='.primary-navigation a:hover, .primary-navigation ul li a:hover, .primary-navigation ul.sub-menu a:hover, .primary-navigation ul.sub-menu li a:hover{';
			$politics_candidate_custom_css .='color: '.esc_attr($politics_candidate_menu_hover_color).' !important;';
	$politics_candidate_custom_css .='}';

	// Submenu color
	$politics_candidate_submenu_menu_color = get_theme_mod('politics_candidate_submenu_menu_color');
	$politics_candidate_custom_css .='.primary-navigation ul.sub-menu a, .primary-navigation ul.sub-menu li a{';
			$politics_candidate_custom_css .='color: '.esc_attr($politics_candidate_submenu_menu_color).' !important;';
	$politics_candidate_custom_css .='}';

	// Submenu Hover Color Option
	$politics_candidate_submenu_hover_color = get_theme_mod('politics_candidate_submenu_hover_color');
	$politics_candidate_custom_css .='.primary-navigation ul.sub-menu li a:hover  {';
	$politics_candidate_custom_css .='color: '.esc_attr($politics_candidate_submenu_hover_color).'!important;';
	$politics_candidate_custom_css .='} ';

	/*-------- Scrollup icon css -------*/
	$politics_candidate_scroll_icon_font_size = get_theme_mod('politics_candidate_scroll_icon_font_size', 18);
	$politics_candidate_custom_css .='.scrollup{';
		$politics_candidate_custom_css .='font-size: '.esc_attr($politics_candidate_scroll_icon_font_size).'px;';
	$politics_candidate_custom_css .='}';

	$politics_candidate_scroll_icon_color = get_theme_mod('politics_candidate_scroll_icon_color');
	$politics_candidate_custom_css .='.scrollup{';
		$politics_candidate_custom_css .='color: '.esc_attr($politics_candidate_scroll_icon_color).'!important;';
	$politics_candidate_custom_css .='}';

	/*---- Copyright css ----*/
	$politics_candidate_copyright_fontsize = get_theme_mod('politics_candidate_copyright_fontsize',16);
	if($politics_candidate_copyright_fontsize != false){
		$politics_candidate_custom_css .='#footer p{';
			$politics_candidate_custom_css .='font-size: '.esc_attr($politics_candidate_copyright_fontsize).'px; ';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_copyright_top_bottom_padding = get_theme_mod('politics_candidate_copyright_top_bottom_padding',15);
	if($politics_candidate_copyright_top_bottom_padding != false){
		$politics_candidate_custom_css .='#footer {';
			$politics_candidate_custom_css .='padding-top:'.esc_attr($politics_candidate_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($politics_candidate_copyright_top_bottom_padding).'px; ';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_copyright_alignment = get_theme_mod( 'politics_candidate_copyright_alignment','Center');
    if($politics_candidate_copyright_alignment == 'Left'){
		$politics_candidate_custom_css .='#footer p{';
			$politics_candidate_custom_css .='text-align:start;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_copyright_alignment == 'Center'){
		$politics_candidate_custom_css .='#footer p{';
			$politics_candidate_custom_css .='text-align:center;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_copyright_alignment == 'Right'){
		$politics_candidate_custom_css .='#footer p{';
			$politics_candidate_custom_css .='text-align:end;';
		$politics_candidate_custom_css .='}';
	}

	/*------- Wocommerce sale css -----*/
	$politics_candidate_woocommerce_sale_top_padding = get_theme_mod('politics_candidate_woocommerce_sale_top_padding',0);
	$politics_candidate_woocommerce_sale_left_padding = get_theme_mod('politics_candidate_woocommerce_sale_left_padding',0);
	$politics_candidate_custom_css .=' .woocommerce span.onsale{';
		$politics_candidate_custom_css .='padding-top: '.esc_attr($politics_candidate_woocommerce_sale_top_padding).'px; padding-bottom: '.esc_attr($politics_candidate_woocommerce_sale_top_padding).'px; padding-left: '.esc_attr($politics_candidate_woocommerce_sale_left_padding).'px; padding-right: '.esc_attr($politics_candidate_woocommerce_sale_left_padding).'px;';
	$politics_candidate_custom_css .='}';

	$politics_candidate_woocommerce_sale_border_radius = get_theme_mod('politics_candidate_woocommerce_sale_border_radius', 5);
	$politics_candidate_custom_css .='.woocommerce span.onsale{';
		$politics_candidate_custom_css .='border-radius: '.esc_attr($politics_candidate_woocommerce_sale_border_radius).'px;';
	$politics_candidate_custom_css .='}';

	$politics_candidate_sale_position = get_theme_mod( 'politics_candidate_sale_position','left');
    if($politics_candidate_sale_position == 'left'){
		$politics_candidate_custom_css .='.woocommerce ul.products li.product span.onsale{';
			$politics_candidate_custom_css .='left: 0; right: auto;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_sale_position == 'right'){
		$politics_candidate_custom_css .='.woocommerce ul.products li.product span.onsale{';
			$politics_candidate_custom_css .='left: auto; right: 0;';
		$politics_candidate_custom_css .='}';
	}

	/*-------- Event background css -------*/
	$politics_candidate_event_background_img = get_theme_mod('politics_candidate_event_background_img');
	if($politics_candidate_event_background_img != false){
		$politics_candidate_custom_css .='#event-section{';
			$politics_candidate_custom_css .='background: url('.esc_attr($politics_candidate_event_background_img).') no-repeat; background-size: cover;';
		$politics_candidate_custom_css .='}';
	}

	/*-------- footer background css -------*/
	$politics_candidate_footer_background_color = get_theme_mod('politics_candidate_footer_background_color');
	$politics_candidate_custom_css .='.footertown{';
		$politics_candidate_custom_css .='background-color: '.esc_attr($politics_candidate_footer_background_color).';';
	$politics_candidate_custom_css .='}';

	$politics_candidate_footer_background_img = get_theme_mod('politics_candidate_footer_background_img');
	if($politics_candidate_footer_background_img != false){
		$politics_candidate_custom_css .='.footertown{';
			$politics_candidate_custom_css .='background: url('.esc_attr($politics_candidate_footer_background_img).') no-repeat; background-size: cover; background-attachment: fixed;';
		$politics_candidate_custom_css .='}';
	}

	/*---- Comment form ----*/
	$politics_candidate_comment_width = get_theme_mod('politics_candidate_comment_width', '100');
	$politics_candidate_custom_css .='#comments textarea{';
		$politics_candidate_custom_css .=' width:'.esc_attr($politics_candidate_comment_width).'%;';
	$politics_candidate_custom_css .='}';

	$politics_candidate_comment_submit_text = get_theme_mod('politics_candidate_comment_submit_text', 'Post Comment');
	if($politics_candidate_comment_submit_text == ''){
		$politics_candidate_custom_css .='#comments p.form-submit {';
			$politics_candidate_custom_css .='display: none;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_comment_title = get_theme_mod('politics_candidate_comment_title', 'Leave a Reply');
	if($politics_candidate_comment_title == ''){
		$politics_candidate_custom_css .='#comments h2#reply-title {';
			$politics_candidate_custom_css .='display: none;';
		$politics_candidate_custom_css .='}';
	}

	// Navigation Font Size 
	$politics_candidate_nav_font_size = get_theme_mod('politics_candidate_nav_font_size');
	if($politics_candidate_nav_font_size != false){
		$politics_candidate_custom_css .='.primary-navigation ul li a{';
			$politics_candidate_custom_css .='font-size: '.esc_attr($politics_candidate_nav_font_size).'px;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_navigation_case = get_theme_mod('politics_candidate_navigation_case', 'capitalize');
	if($politics_candidate_navigation_case == 'uppercase' ){
		$politics_candidate_custom_css .='.primary-navigation ul li a{';
			$politics_candidate_custom_css .=' text-transform: uppercase;';
		$politics_candidate_custom_css .='}';
	}elseif($politics_candidate_navigation_case == 'capitalize' ){
		$politics_candidate_custom_css .='.primary-navigation ul li a{';
			$politics_candidate_custom_css .=' text-transform: capitalize;';
		$politics_candidate_custom_css .='}';
	}

    // site title color option
	$politics_candidate_site_title_color_setting = get_theme_mod('politics_candidate_site_title_color_setting');
	$politics_candidate_custom_css .=' .logo h1 a, .logo p a{';
		$politics_candidate_custom_css .='color: '.esc_attr($politics_candidate_site_title_color_setting).';';
	$politics_candidate_custom_css .='} ';

	$politics_candidate_tagline_color_setting = get_theme_mod('politics_candidate_tagline_color_setting');
	$politics_candidate_custom_css .=' .logo p.site-description{';
		$politics_candidate_custom_css .='color: '.esc_attr($politics_candidate_tagline_color_setting).';';
	$politics_candidate_custom_css .='} ';   

	//Site title Font size
	$politics_candidate_site_title_fontsize = get_theme_mod('politics_candidate_site_title_fontsize');
	$politics_candidate_custom_css .='.logo h1, .logo p.site-title{';
		$politics_candidate_custom_css .='font-size: '.esc_attr($politics_candidate_site_title_fontsize).'px;';
	$politics_candidate_custom_css .='}';

	$politics_candidate_site_description_fontsize = get_theme_mod('politics_candidate_site_description_fontsize');
	$politics_candidate_custom_css .='.logo p.site-description{';
		$politics_candidate_custom_css .='font-size: '.esc_attr($politics_candidate_site_description_fontsize).'px;';
	$politics_candidate_custom_css .='}';

	/*----- Featured image css -----*/
	$politics_candidate_featured_image_border_radius = get_theme_mod('politics_candidate_featured_image_border_radius');
	if($politics_candidate_featured_image_border_radius != false){
		$politics_candidate_custom_css .='.inner-service .service-image img{';
			$politics_candidate_custom_css .='border-radius: '.esc_attr($politics_candidate_featured_image_border_radius).'px;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_featured_image_box_shadow = get_theme_mod('politics_candidate_featured_image_box_shadow');
	if($politics_candidate_featured_image_box_shadow != false){
		$politics_candidate_custom_css .='.inner-service .service-image img{';
			$politics_candidate_custom_css .='box-shadow: 8px 8px '.esc_attr($politics_candidate_featured_image_box_shadow).'px #aaa;';
		$politics_candidate_custom_css .='}';
	} 

	/*------Shop page pagination ---------*/
	$politics_candidate_shop_page_pagination = get_theme_mod('politics_candidate_shop_page_pagination', true);
	if($politics_candidate_shop_page_pagination == false){
		$politics_candidate_custom_css .= '.woocommerce nav.woocommerce-pagination {';
			$politics_candidate_custom_css .='display: none;';
		$politics_candidate_custom_css .='}';
	}

	/*------- Post into blocks ------*/
	$politics_candidate_post_blocks = get_theme_mod('politics_candidate_post_blocks', 'Without box');
	if($politics_candidate_post_blocks == 'Within box' ){
		$politics_candidate_custom_css .='.services-box{';
			$politics_candidate_custom_css .=' border: 1px solid #222;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_responsive_show_back_to_top = get_theme_mod('politics_candidate_responsive_show_back_to_top',true);
	if($politics_candidate_responsive_show_back_to_top == true && get_theme_mod('politics_candidate_show_back_to_top',true) == false){
		$politics_candidate_custom_css .='@media screen and (min-width:575px){
			.scrollup{';
			$politics_candidate_custom_css .='visibility:hidden;';
		$politics_candidate_custom_css .='} }';
	}

	if($politics_candidate_responsive_show_back_to_top == false){
		$politics_candidate_custom_css .='@media screen and (max-width:575px){
			.scrollup{';
			$politics_candidate_custom_css .='visibility:hidden;';
		$politics_candidate_custom_css .='} }';
	}

	$politics_candidate_responsive_preloader_hide = get_theme_mod('politics_candidate_responsive_preloader_hide',false);
	if($politics_candidate_responsive_preloader_hide == true && get_theme_mod('politics_candidate_preloader_hide',false) == false){
		$politics_candidate_custom_css .='@media screen and (min-width:575px){
			.preloader{';
			$politics_candidate_custom_css .='display:none !important;';
		$politics_candidate_custom_css .='} }';
	}

	if($politics_candidate_responsive_preloader_hide == false){
		$politics_candidate_custom_css .='@media screen and (max-width:575px){
			.preloader{';
			$politics_candidate_custom_css .='display:none !important;';
		$politics_candidate_custom_css .='} }';
	}

	// slider button
	if (get_theme_mod('politics_candidate_slider_button_responsive',true) == true && get_theme_mod('politics_candidate_slider_button',true) == false) {
		$politics_candidate_custom_css .='@media screen and (min-width: 575px){
			.read-btn{';
			$politics_candidate_custom_css .=' display: none;';
		$politics_candidate_custom_css .='} }';
	}
	if (get_theme_mod('politics_candidate_slider_button_responsive',true) == false) {
		$politics_candidate_custom_css .='@media screen and (max-width: 575px){
			.read-btn{';
			$politics_candidate_custom_css .=' display: none;';
		$politics_candidate_custom_css .='} }';
		$politics_candidate_custom_css .='@media screen and (max-width: 575px){
			#slider .carousel-caption{';
			$politics_candidate_custom_css .=' padding: 0px;';
		$politics_candidate_custom_css .='} }';
	}
	

	/*---- Slider Height ------*/
	$politics_candidate_slider_height = get_theme_mod('politics_candidate_slider_height');
	$politics_candidate_custom_css .='#slider img{';
		$politics_candidate_custom_css .='height: '.esc_attr($politics_candidate_slider_height).'px;';
	$politics_candidate_custom_css .='}';
	$politics_candidate_custom_css .='@media screen and (max-width: 768px){
		#slider img{';
		$politics_candidate_custom_css .='height: auto;';
	$politics_candidate_custom_css .='} }';


	// menu font weight
	$politics_candidate_theme_lay = get_theme_mod( 'politics_candidate_font_weight_menu_option','600');
    if($politics_candidate_theme_lay == '100'){
		$politics_candidate_custom_css .='.primary-navigation ul li a{';
			$politics_candidate_custom_css .='font-weight:100;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_theme_lay == '200'){
		$politics_candidate_custom_css .='.primary-navigation ul li a{';
			$politics_candidate_custom_css .='font-weight: 200;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_theme_lay == '300'){
		$politics_candidate_custom_css .='.primary-navigation ul li a{';
			$politics_candidate_custom_css .='font-weight: 300;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_theme_lay == '400'){
		$politics_candidate_custom_css .='.primary-navigation ul li a{';
			$politics_candidate_custom_css .='font-weight: 400;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_theme_lay == '500'){
		$politics_candidate_custom_css .='.primary-navigation ul li a{';
			$politics_candidate_custom_css .='font-weight: 500;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_theme_lay == '600'){
		$politics_candidate_custom_css .='.primary-navigation ul li a{';
			$politics_candidate_custom_css .='font-weight: 600;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_theme_lay == '700'){
		$politics_candidate_custom_css .='.primary-navigation ul li a{';
			$politics_candidate_custom_css .='font-weight: 700;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_theme_lay == '800'){
		$politics_candidate_custom_css .='.primary-navigation ul li a{';
			$politics_candidate_custom_css .='font-weight: 800;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_theme_lay == '900'){
		$politics_candidate_custom_css .='.primary-navigation ul li a{';
			$politics_candidate_custom_css .='font-weight: 900;';
		$politics_candidate_custom_css .='}';
	}

	// slider hide css
	$politics_candidate_slider_hide_show = get_theme_mod('politics_candidate_slider_hide_show',true);
	if($politics_candidate_slider_hide_show == true) {
		$politics_candidate_custom_css .='.page-template-custom-frontpage #header{';
			$politics_candidate_custom_css .='position:static;';
		$politics_candidate_custom_css .='}';
	}

	// event hide css
	$politics_candidate_event_hide_show = get_theme_mod('politics_candidate_event_hide_show',false);
	if($politics_candidate_event_hide_show == false) {
		$politics_candidate_custom_css .='#event-section{';
			$politics_candidate_custom_css .='position:static; border-bottom: 1px solid #e2e2e2;';
		$politics_candidate_custom_css .='}';
	}

	if (get_theme_mod('politics_candidate_slider_responsive',true) == true && get_theme_mod('politics_candidate_slider_hide_show',false) == false) {
		$politics_candidate_custom_css .='@media screen and (min-width: 575px){
			#slider{';
			$politics_candidate_custom_css .=' display: none;';
		$politics_candidate_custom_css .='} }';
	}
	if (get_theme_mod('politics_candidate_slider_responsive',true) == false) {
		$politics_candidate_custom_css .='@media screen and (max-width: 575px){
			#slider{';
			$politics_candidate_custom_css .=' display: none;';
		$politics_candidate_custom_css .='} }';
	}

	//  ------------ Mobile Media Options ----------
	$politics_candidate_hide_topbar_responsive = get_theme_mod('politics_candidate_hide_topbar_responsive',false);
	if($politics_candidate_hide_topbar_responsive == true && get_theme_mod('politics_candidate_topbar_hide_show',false) == false){
		$politics_candidate_custom_css .='@media screen and (min-width:575px){
			.top-header-section{';
			$politics_candidate_custom_css .='display:none;';
		$politics_candidate_custom_css .='} }';
	}

	if($politics_candidate_hide_topbar_responsive == false){
		$politics_candidate_custom_css .='@media screen and (max-width:575px){
			.top-header-section{';
			$politics_candidate_custom_css .='display:none;';
		$politics_candidate_custom_css .='} }';
	}

	$politics_candidate_resp_sidebar = get_theme_mod( 'politics_candidate_sidebar_hide_show',true);
    if($politics_candidate_resp_sidebar == true){
    	$politics_candidate_custom_css .='@media screen and (max-width:575px) {';
		$politics_candidate_custom_css .='#sidebar{';
			$politics_candidate_custom_css .='display:block;';
		$politics_candidate_custom_css .='} }';
	}else if($politics_candidate_resp_sidebar == false){
		$politics_candidate_custom_css .='@media screen and (max-width:575px) {';
		$politics_candidate_custom_css .='#sidebar{';
			$politics_candidate_custom_css .='display:none;';
		$politics_candidate_custom_css .='} }';
	}

	// Metabox Seperator
	$politics_candidate_metabox_seperator = get_theme_mod('politics_candidate_metabox_seperator','|');
	if($politics_candidate_metabox_seperator != '' ){
		$politics_candidate_custom_css .='.metabox .me-2:after{';
			$politics_candidate_custom_css .=' content: "'.esc_attr($politics_candidate_metabox_seperator).'"; padding-left:10px;';
		$politics_candidate_custom_css .='}';		
	}

	// Metabox Seperator
	$politics_candidate_single_post_metabox_seperator = get_theme_mod('politics_candidate_single_post_metabox_seperator','|');
	if($politics_candidate_single_post_metabox_seperator != '' ){
		$politics_candidate_custom_css .='.metabox .px-2:after{';
			$politics_candidate_custom_css .=' content: "'.esc_attr($politics_candidate_single_post_metabox_seperator).'"; padding-left:10px;';
		$politics_candidate_custom_css .='}';		
	}

	// Single post image border radious
	$politics_candidate_single_post_img_border_radius = get_theme_mod('politics_candidate_single_post_img_border_radius', 0);
	$politics_candidate_custom_css .='.feature-box img{';
		$politics_candidate_custom_css .='border-radius: '.esc_attr($politics_candidate_single_post_img_border_radius).'px;';
	$politics_candidate_custom_css .='}';

	// Single post image box shadow
	$politics_candidate_single_post_img_box_shadow = get_theme_mod('politics_candidate_single_post_img_box_shadow',0);
	$politics_candidate_custom_css .='.feature-box img{';
		$politics_candidate_custom_css .='box-shadow: '.esc_attr($politics_candidate_single_post_img_box_shadow).'px '.esc_attr($politics_candidate_single_post_img_box_shadow).'px '.esc_attr($politics_candidate_single_post_img_box_shadow).'px #ccc;';
	$politics_candidate_custom_css .='}';


	// topbar line

	$politics_candidate_topbar_hide_show = get_theme_mod('politics_candidate_topbar_hide_show', false);
	if($politics_candidate_topbar_hide_show == false){
		$politics_candidate_custom_css .= '.header-menu-box:after{';
			$politics_candidate_custom_css .='display: none !important;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_copyright_color = get_theme_mod('politics_candidate_copyright_color');
	$politics_candidate_custom_css .='#footer p,#footer p a{';
		$politics_candidate_custom_css .='color: '.esc_attr($politics_candidate_copyright_color).'!important;';
	$politics_candidate_custom_css .='}';

	$politics_candidate_copyright__hover_color = get_theme_mod('politics_candidate_copyright__hover_color');
	$politics_candidate_custom_css .='#footer p:hover,#footer p a:hover{';
		$politics_candidate_custom_css .='color: '.esc_attr($politics_candidate_copyright__hover_color).'!important;';
	$politics_candidate_custom_css .='}';

	/*-------- Copyright background css -------*/
	$politics_candidate_copyright_background_color = get_theme_mod('politics_candidate_copyright_background_color');
	$politics_candidate_custom_css .='#footer{';
		$politics_candidate_custom_css .='background-color: '.esc_attr($politics_candidate_copyright_background_color).';';
	$politics_candidate_custom_css .='}';

	// widgets heading font size
	$politics_candidate_widgets_heading_fontsize = get_theme_mod('politics_candidate_widgets_heading_fontsize',25);
	if($politics_candidate_widgets_heading_fontsize != false){
		$politics_candidate_custom_css .='.footertown .widget h3{';
			$politics_candidate_custom_css .='font-size: '.esc_attr($politics_candidate_widgets_heading_fontsize).'px; ';
		$politics_candidate_custom_css .='}';
	}

	// widgets heading font weight
	$politics_candidate_widgets_heading_font_weight = get_theme_mod('politics_candidate_widgets_heading_font_weight', '');
  	$politics_candidate_custom_css .='.footertown .widget h3{';
    $politics_candidate_custom_css .='font-weight: '.esc_attr($politics_candidate_widgets_heading_font_weight).';';
  	$politics_candidate_custom_css .='}';

	/*----------- Footer widgets heading alignment -----*/
	$politics_candidate_footer_widgets_heading = get_theme_mod( 'politics_candidate_footer_widgets_heading','Left');
    if($politics_candidate_footer_widgets_heading == 'Left'){
		$politics_candidate_custom_css .='footer h3{';
		$politics_candidate_custom_css .='text-align: left;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_footer_widgets_heading == 'Center'){
		$politics_candidate_custom_css .='footer h3{';
			$politics_candidate_custom_css .='text-align: center;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_footer_widgets_heading == 'Right'){
		$politics_candidate_custom_css .='footer h3{';
			$politics_candidate_custom_css .='text-align: right;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_footer_widgets_content = get_theme_mod( 'politics_candidate_footer_widgets_content','Left');
    if($politics_candidate_footer_widgets_content == 'Left'){
		$politics_candidate_custom_css .='footer ul,.widget_shopping_cart_content p,footer form,div#calendar_wrap,.footertown table,footer.gallery,aside#media_image-2,.tagcloud,footer figure.gallery-item,aside#block-7,.textwidget p,#calendar_wrap caption{';
		$politics_candidate_custom_css .='text-align: left;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_footer_widgets_content == 'Center'){
		$politics_candidate_custom_css .='footer ul,.widget_shopping_cart_content p,footer form,div#calendar_wrap,.footertown table,footer .gallery, aside#media_image-2,.tagcloud,footer figure.gallery-item,aside#block-7,.textwidget p,#calendar_wrap caption{';
			$politics_candidate_custom_css .='text-align: center;';
		$politics_candidate_custom_css .='}';
	}else if($politics_candidate_footer_widgets_content == 'Right'){
		$politics_candidate_custom_css .='footer ul,.widget_shopping_cart_content p,footer form,div#calendar_wrap,.footertown table,footer .gallery, aside#media_image-2,.tagcloud,footer figure.gallery-item,aside#block-7,.textwidget p,#calendar_wrap caption{';
			$politics_candidate_custom_css .='text-align: right !important;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_show_hide_post_categories = get_theme_mod('politics_candidate_show_hide_post_categories',true);
	if($politics_candidate_show_hide_post_categories == false){
		$politics_candidate_custom_css .='.tc-category{';
			$politics_candidate_custom_css .='display: none;';
		$politics_candidate_custom_css .='}';
	}

	/*-------- Blog Post Alignment ------*/
	$politics_candidate_post_alignment = get_theme_mod('politics_candidate_blog_post_alignment', 'left');
	if($politics_candidate_post_alignment == 'center' ){
		$politics_candidate_custom_css .='.services-box{';
			$politics_candidate_custom_css .=' text-align: '. $politics_candidate_post_alignment .'!important;';
		$politics_candidate_custom_css .='}';
	}elseif($politics_candidate_post_alignment == 'right' ){
		$politics_candidate_custom_css .='.services-box{';
			$politics_candidate_custom_css .='text-align: '. $politics_candidate_post_alignment .'!important;';
		$politics_candidate_custom_css .='}';
	}

	// Blog Post Button Font Size 
	$politics_candidate_button_font_size = get_theme_mod('politics_candidate_button_font_size');
	if($politics_candidate_button_font_size != false){
		$politics_candidate_custom_css .='.read-btn a.blogbutton-small{';
			$politics_candidate_custom_css .='font-size: '.esc_attr($politics_candidate_button_font_size).'px;';
		$politics_candidate_custom_css .='}';
	}

	$politics_candidate_button_text_transform = get_theme_mod( 'politics_candidate_button_text_transform','Capitalize');
	if($politics_candidate_button_text_transform == 'Capitalize'){
		$politics_candidate_custom_css .='.read-btn a.blogbutton-small{';
			$politics_candidate_custom_css .='text-transform:Capitalize;';
		$politics_candidate_custom_css .='}';
	}
	if($politics_candidate_button_text_transform == 'Lowercase'){
		$politics_candidate_custom_css .='.read-btn a.blogbutton-small{';
			$politics_candidate_custom_css .='text-transform:Lowercase;';
		$politics_candidate_custom_css .='}';
	}
	if($politics_candidate_button_text_transform == 'Uppercase'){
		$politics_candidate_custom_css .='.read-btn a.blogbutton-small{';
			$politics_candidate_custom_css .='text-transform:Uppercase;';
		$politics_candidate_custom_css .='}';
	}