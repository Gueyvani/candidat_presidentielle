<?php

	$election_campaign_custom_css ='';

		/*------------------ Global First Color -----------*/
	$election_campaign_first_color = get_theme_mod('election_campaign_first_color');
	
	$election_campaign_second_color = get_theme_mod('election_campaign_second_color');

	$election_campaign_custom_css .='input[type="submit"], input[type="submit"]:hover, .top-header .header, a.book-btn, .primary-navigation ul ul a, .primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, #slider .read-more a, .postbtn a, #slider .read-more:hover i, .postbtn:hover a i, #slider .container-slider button.active, #service-sec .box, .nav-previous a, .nav-next a, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], a.added_to_cart.wc-forward, a.added_to_cart.wc-forward:hover, .postbtn:hover i, #comments input[type="submit"].submit:hover, .woocommerce #respond input#submit:hover, .woocommerce .product a.button:hover, .woocommerce .product button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, nav.woocommerce-MyAccount-navigation ul li, .woocommerce .widget_price_filter .ui-slider .ui-slider-range,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .wp-block-woocommerce-cart .wc-block-components-totals-coupon a, .wp-block-woocommerce-cart .wc-block-cart__submit-container a, .wp-block-woocommerce-checkout .wc-block-components-totals-coupon a, .wp-block-woocommerce-checkout .wc-block-checkout__actions_row a, .wp-block-woocommerce-cart .wc-block-components-totals-coupon a:hover, .wp-block-woocommerce-cart .wc-block-cart__submit-container a:hover, .wp-block-woocommerce-checkout .wc-block-components-totals-coupon a:hover, .wp-block-woocommerce-checkout .wc-block-checkout__actions_row a:hover, .wp-block-woocommerce-empty-cart-block .wp-block-button a, .bradcrumbs a, .bradcrumbs span, .single-post-page .category a, .metabox i:before, #comments input[type="submit"].submit, #comments a.comment-reply-link, #sidebar .widget_block .wp-block-tag-cloud a:hover, .inner-service .wp-block-tag-cloud a:hover, .footer-wp .widget_block .wp-block-tag-cloud a:hover, #sidebar input[type="submit"], #sidebar ul li:before, #sidebar .tagcloud a:hover, .footer-wp .tagcloud a:hover, #sidebar button:hover, .widget_calendar tbody a, #sidebar .custom_read_more a, .page-content .read-moresec a.button, .frame, #scrollbutton, .copyright-wrapper, .footer-wp input[type="submit"], .footer-wp button, #sidebar button, #sidebar button:hover, .footer-wp button:hover, .pagination .current, .page-links .post-page-numbers.current span, .tags a:hover{';
		$election_campaign_custom_css .='background-color: '.esc_attr($election_campaign_first_color).';';
	$election_campaign_custom_css .='}';

	$election_campaign_custom_css .='.wp-block-woocommerce-empty-cart-block .wp-block-button a:hover, .wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale{';
		$election_campaign_custom_css .='background-color: '.esc_attr($election_campaign_first_color).'!important;';
	$election_campaign_custom_css .='}';

	$election_campaign_custom_css .='a.button.wc-forward:hover, .pagination a:hover, .page-links a:hover, #comments a time, .tags, .pagination .current, #sidebar .textwidget p a, #sidebar .textwidget a:hover,.footer-wp .woocommerce a.button:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover, #sidebar h3.widget-title a.rsswidget, .page-content .read-moresec a.button, a.button, #sidebar ul li a:hover, .widget_calendar caption, #comments a.comment-reply-link:hover, .new-text p a,.comment p a, .primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, a.r_button, input[type="submit"], td.product-name a, .header-sidebar .menu-drawer .location p, .header-sidebar .menu-drawer .time p, .logo .site-title a, .logo p.site-description, .main-search i, .primary-navigation ul li a, .primary-navigation ul li a:hover,.primary-navigation .current_page_ancestor > a, #slider .carousel-caption h1 a, #slider .carousel-caption p, #service-sec .heading-box h2, .nav-next a:hover, .nav-previous a:hover, .yith-wcwl-add-to-wishlist a i, .woocommerce .quantity .qty, .woocommerce-message::before, .category span, .metabox span i, p.logged-in-as a, .new-text a, #sidebar ul li a:hover{';
		$election_campaign_custom_css .='color: '.esc_attr($election_campaign_first_color).';';
	$election_campaign_custom_css .='}';

	$election_campaign_custom_css .='.wc-block-components-product-metadata__description p,.wc-block-cart-item__prices .wc-block-components-product-price__value,.wc-block-cart-item__quantity button.wc-block-cart-item__remove-link, .wp-block-button.is-style-outline .wp-block-button__link{';
		$election_campaign_custom_css .='color: '.esc_attr($election_campaign_first_color).'!important;';
	$election_campaign_custom_css .='}';

	$election_campaign_custom_css .='.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span, .yith-wcwl-add-to-wishlist a i, .woocommerce ul.products li.product:hover, .woocommerce ul.products li.product:hover img, .related-inner-box, input[type="search"], a.button{';
		$election_campaign_custom_css .='border-color: '.esc_attr($election_campaign_first_color).';';
	$election_campaign_custom_css .='}';

	$election_campaign_custom_css .='.wp-block-button.is-style-outline .wp-block-button__link, .footer-wp .custom-contact-us div.wpcf7-validation-errors, .footer-wp .custom-contact-us div.wpcf7-acceptance-missing, .page-content .read-moresec a.button, #scrollbutton{';
		$election_campaign_custom_css .='border: 2px solid '.esc_attr($election_campaign_first_color).';';
	$election_campaign_custom_css .='}';

	$election_campaign_custom_css .='.wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale{';
		$election_campaign_custom_css .='border-color: '.esc_attr($election_campaign_first_color).'!important;';
	$election_campaign_custom_css .='}';

	$election_campaign_custom_css .='.woocommerce-message{';
		$election_campaign_custom_css .='border-top-color: '.esc_attr($election_campaign_first_color).';';
	$election_campaign_custom_css .='}';

	$election_campaign_custom_css .='
	@media screen and (max-width:1000px) {
		.toggle-menu i{';
			$election_campaign_custom_css .='background-color: '.esc_attr($election_campaign_first_color).';';
		$election_campaign_custom_css .='} 
		.primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, .primary-navigation ul ul a, #site-navigation li a, .primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, .primary-navigation ul ul, .main-menu-navigation,.primary-navigation .current_page_item > a,.primary-navigation .current-menu-item > a,.primary-navigation .current_page_ancestor > a{';
			$election_campaign_custom_css .='color: '.esc_attr($election_campaign_first_color).'!important;';
		$election_campaign_custom_css .='} 
		.main-menu-navigation a:focus, a.closebtn:focus{';
			$election_campaign_custom_css .='outline: 1px solid '.esc_attr($election_campaign_first_color).'!important;';
		$election_campaign_custom_css .='} 
		.main-menu-navigation a:focus, a.closebtn:focus{';
			$election_campaign_custom_css .='border-bottom: 1px solid '.esc_attr($election_campaign_first_color).'!important;';
		$election_campaign_custom_css .='} 
	}';

	/*------------------ Global Second Color -----------*/

	$election_campaign_custom_css .='.top-header .header .location i, .top-header .header .time i, .top-header .header .location i:after, .top-header .header .time i:after, .top-header .header .top-btn a, .header-sidebar .menu-drawer .top-btn a, .top-header .header .top-btn i, .header-sidebar .menu-drawer .top-btn i, .menu-header .toggle-btn i, .header-sidebar .menu-drawer .location i, .header-sidebar .menu-drawer .time i, .header-sidebar .menu-drawer .location i:after, .header-sidebar .menu-drawer .time i:after, #slider .owl-dot.active, #slider .read-more i, .postbtn a i, #slider .read-more:hover a, .postbtn:hover a, #service-sec .box:hover, .bradcrumbs a:hover, .nav-next a:hover, .nav-previous a:hover{';
		$election_campaign_custom_css .='background-color: '.esc_attr($election_campaign_second_color).';';
	$election_campaign_custom_css .='}';

	$election_campaign_custom_css .='.header-sidebar .close-pop a, #slider .owl-nav .owl-prev:hover i, #slider .owl-nav .owl-next:hover i, #service-sec .heading-box p, #slider .carousel-caption h1 a span{';
		$election_campaign_custom_css .='color: '.esc_attr($election_campaign_second_color).';';
	$election_campaign_custom_css .='}';

	$election_campaign_custom_css .='#slider .carousel-caption h1 span{';
		$election_campaign_custom_css .='color: '.esc_attr($election_campaign_second_color).'!important;';
	$election_campaign_custom_css .='}';

	$election_campaign_custom_css .='#slider .owl-dot.active, .top-header .menu-header{';
		$election_campaign_custom_css .='border-color: '.esc_attr($election_campaign_second_color).';';
	$election_campaign_custom_css .='}';

	$election_campaign_custom_css .='.menu-header .main-menu-navigation .current_page_item a:after, .menu-header .main-menu-navigation .current_page_item a:after{';
		$election_campaign_custom_css .='border-bottom: 9px solid'.esc_attr($election_campaign_second_color).';';
	$election_campaign_custom_css .='}';

	$election_campaign_custom_css .='
	@media screen and (max-width:1000px) {
		.primary-navigation ul ul a, #site-navigation li a{';
			$election_campaign_custom_css .='border-bottom-color: '.esc_attr($election_campaign_first_color).';';
		$election_campaign_custom_css .='} 
	}';

	/*---------------------------Width Layout -------------------*/
	$election_campaign_theme_lay = get_theme_mod( 'election_campaign_width_layout_options','Default');
    if($election_campaign_theme_lay == 'Default'){
		$election_campaign_custom_css .='body{';
			$election_campaign_custom_css .='max-width: 100%;';
		$election_campaign_custom_css .='}';
	}else if($election_campaign_theme_lay == 'Container Layout'){
		$election_campaign_custom_css .='body{';
			$election_campaign_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$election_campaign_custom_css .='}';
		$election_campaign_custom_css .='.page-template-home-page #header{';
			$election_campaign_custom_css .='position: static; background-color: #000;';
		$election_campaign_custom_css .='}';
	}else if($election_campaign_theme_lay == 'Box Layout'){
		$election_campaign_custom_css .='body{';
			$election_campaign_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$election_campaign_custom_css .='}';
		$election_campaign_custom_css .='.page-template-home-page #header{';
			$election_campaign_custom_css .='position: static; background-color: #000;';
		$election_campaign_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$election_campaign_theme_lay = get_theme_mod( 'election_campaign_slider_opacity','');
	if($election_campaign_theme_lay == '0'){
		$election_campaign_custom_css .='#slider .image-overlay{';
			$election_campaign_custom_css .='opacity:0';
		$election_campaign_custom_css .='}';
		}else if($election_campaign_theme_lay == '0.1'){
		$election_campaign_custom_css .='#slider .image-overlay{';
			$election_campaign_custom_css .='opacity:0.1';
		$election_campaign_custom_css .='}';
		}else if($election_campaign_theme_lay == '0.2'){
		$election_campaign_custom_css .='#slider .image-overlay{';
			$election_campaign_custom_css .='opacity:0.2';
		$election_campaign_custom_css .='}';
		}else if($election_campaign_theme_lay == '0.3'){
		$election_campaign_custom_css .='#slider .image-overlay{';
			$election_campaign_custom_css .='opacity:0.3';
		$election_campaign_custom_css .='}';
		}else if($election_campaign_theme_lay == '0.4'){
		$election_campaign_custom_css .='#slider .image-overlay{';
			$election_campaign_custom_css .='opacity:0.4';
		$election_campaign_custom_css .='}';
		}else if($election_campaign_theme_lay == '0.5'){
		$election_campaign_custom_css .='#slider .image-overlay{';
			$election_campaign_custom_css .='opacity:0.5';
		$election_campaign_custom_css .='}';
		}else if($election_campaign_theme_lay == '0.6'){
		$election_campaign_custom_css .='#slider .image-overlay{';
			$election_campaign_custom_css .='opacity:0.6';
		$election_campaign_custom_css .='}';
		}else if($election_campaign_theme_lay == '0.7'){
		$election_campaign_custom_css .='#slider .image-overlay{';
			$election_campaign_custom_css .='opacity:0.7';
		$election_campaign_custom_css .='}';
		}else if($election_campaign_theme_lay == '0.8'){
		$election_campaign_custom_css .='#slider .image-overlay{';
			$election_campaign_custom_css .='opacity:0.8';
		$election_campaign_custom_css .='}';
		}else if($election_campaign_theme_lay == '0.9'){
		$election_campaign_custom_css .='#slider .image-overlay{';
			$election_campaign_custom_css .='opacity:0.9';
		$election_campaign_custom_css .='}';
	}

	// slider overlay
	$election_campaign_enable_slider_overlay = get_theme_mod('election_campaign_enable_slider_overlay', true);
	if($election_campaign_enable_slider_overlay == false){
		$election_campaign_custom_css .='#slider .image-overlay{';
			$election_campaign_custom_css .='opacity:1;';
		$election_campaign_custom_css .='}';
	} 
	$election_campaign_slider_overlay_color = get_theme_mod('election_campaign_slider_overlay_color', true);
	if($election_campaign_enable_slider_overlay != false){
		$election_campaign_custom_css .='#slider .image-overlay{';
			$election_campaign_custom_css .='background: linear-gradient(90deg,'.esc_attr($election_campaign_slider_overlay_color).' 50%,rgba(0,212,255,0) 70%);';
		$election_campaign_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$election_campaign_footer_text_align = get_theme_mod('election_campaign_footer_text_align');
	$election_campaign_custom_css .='.copyright-wrapper{';
		$election_campaign_custom_css .='text-align: '.esc_attr($election_campaign_footer_text_align).';';
	$election_campaign_custom_css .='}';
	$election_campaign_custom_css .='
	@media screen and (max-width:575px) {
		.copyright-wrapper{';
			$election_campaign_custom_css .='text-align: center;'.esc_attr($election_campaign_footer_text_align).'';
	$election_campaign_custom_css .='} }';

	$election_campaign_footer_text_padding = get_theme_mod('election_campaign_footer_text_padding');
	$election_campaign_custom_css .='.copyright-wrapper{';
		$election_campaign_custom_css .='padding-top: '.esc_attr($election_campaign_footer_text_padding).'px !important; padding-bottom: '.esc_attr($election_campaign_footer_text_padding).'px !important;';
	$election_campaign_custom_css .='}';

	$election_campaign_footer_bg_color = get_theme_mod('election_campaign_footer_bg_color');
	$election_campaign_custom_css .='.footer-wp{';
		$election_campaign_custom_css .='background-color: '.esc_attr($election_campaign_footer_bg_color).';';
	$election_campaign_custom_css .='}';

	$election_campaign_footer_bg_image = get_theme_mod('election_campaign_footer_bg_image');
	if($election_campaign_footer_bg_image != false){
		$election_campaign_custom_css .='.footer-wp{';
			$election_campaign_custom_css .='background: url('.esc_attr($election_campaign_footer_bg_image).'); background-size: cover;';
		$election_campaign_custom_css .='}';
	}

	// Footer Attatchment
	$election_campaign_theme_lay = get_theme_mod( 'election_campaign_footer_attatchment','scroll');
	if($election_campaign_theme_lay == 'fixed'){
		$election_campaign_custom_css .='.footer-wp{';
			$election_campaign_custom_css .='background-attachment: fixed;';
		$election_campaign_custom_css .='}';
	}elseif ($election_campaign_theme_lay == 'scroll'){
		$election_campaign_custom_css .='.footer-wp{';
			$election_campaign_custom_css .='background-attachment: scroll;';
		$election_campaign_custom_css .='}';
	}

	$election_campaign_copyright_text_font_size = get_theme_mod('election_campaign_copyright_text_font_size', 15);
	$election_campaign_custom_css .='.copyright-wrapper p, .copyright-wrapper a{';
		$election_campaign_custom_css .='font-size: '.esc_attr($election_campaign_copyright_text_font_size).'px;';
	$election_campaign_custom_css .='}';

	$election_campaign_footer_heading_font_size = get_theme_mod('election_campaign_footer_heading_font_size');
	$election_campaign_custom_css .='.footer-wp h3{';
		$election_campaign_custom_css .='font-size: '.esc_attr($election_campaign_footer_heading_font_size).'px;';
	$election_campaign_custom_css .='}';

	// footer padding
	$election_campaign_footer_padding = get_theme_mod('election_campaign_footer_padding');
	$election_campaign_custom_css .='.footer-wp{';
		$election_campaign_custom_css .='padding: '.esc_attr($election_campaign_footer_padding).'px;';
	$election_campaign_custom_css .='}';

	$election_campaign_footer_heading = get_theme_mod( 'election_campaign_footer_heading','Left');
    if($election_campaign_footer_heading == 'Left'){
		$election_campaign_custom_css .='.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
		$election_campaign_custom_css .='text-align: left;';
		$election_campaign_custom_css .='}';
	}else if($election_campaign_footer_heading == 'Center'){
		$election_campaign_custom_css .='.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
			$election_campaign_custom_css .='text-align: center;';
		$election_campaign_custom_css .='}';
		$election_campaign_custom_css .='.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
			$election_campaign_custom_css .='margin: 7px auto;';
		$election_campaign_custom_css .='}';
		$election_campaign_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
				$election_campaign_custom_css .='text-align: left;';
				$election_campaign_custom_css .='}
			.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
				$election_campaign_custom_css .='margin: 7px 0 0;';
				$election_campaign_custom_css .='}
		}';
	}else if($election_campaign_footer_heading == 'Right'){
		$election_campaign_custom_css .='.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
			$election_campaign_custom_css .='text-align: right; padding-bottom: 25px;';
		$election_campaign_custom_css .='}';
		$election_campaign_custom_css .='.footer-wp .widget, .footer-wp aside{';
			$election_campaign_custom_css .='position: relative;';
		$election_campaign_custom_css .='}';
		$election_campaign_custom_css .='.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
			$election_campaign_custom_css .='position: absolute; right: 0;';
		$election_campaign_custom_css .='}';
		$election_campaign_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp h3, .footer-wp .wp-block-search .wp-block-search__label{';
				$election_campaign_custom_css .='text-align: left;';
				$election_campaign_custom_css .='}
			.footer-wp h3:after, .footer-wp .wp-block-heading:after{';
				$election_campaign_custom_css .='left: 0;';
				$election_campaign_custom_css .='}
		}';
	}

	$election_campaign_footer_content = get_theme_mod( 'election_campaign_footer_content','Left');
    if($election_campaign_footer_content == 'Left'){
		$election_campaign_custom_css .='.footer-wp .widget{';
		$election_campaign_custom_css .='text-align: left;';
		$election_campaign_custom_css .='}';
	}else if($election_campaign_footer_content == 'Center'){
		$election_campaign_custom_css .='.footer-wp .widget{';
			$election_campaign_custom_css .='text-align: center;';
		$election_campaign_custom_css .='}';
		$election_campaign_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp .widget{';
				$election_campaign_custom_css .='text-align: left;';
				$election_campaign_custom_css .='} }';
	}else if($election_campaign_footer_content == 'Right'){
		$election_campaign_custom_css .='.footer-wp .widget{';
			$election_campaign_custom_css .='text-align: right;';
		$election_campaign_custom_css .='}';
		$election_campaign_custom_css .='
		@media screen and (max-width:767px) {
			.footer-wp .widget{';
				$election_campaign_custom_css .='text-align: left;';
				$election_campaign_custom_css .='} }';
	}

	/*------------- Back to Top  -------------------*/
	$election_campaign_back_to_top_border_radius = get_theme_mod('election_campaign_back_to_top_border_radius');
	$election_campaign_custom_css .='#scrollbutton {';
		$election_campaign_custom_css .='border-radius: '.esc_attr($election_campaign_back_to_top_border_radius).'px;';
	$election_campaign_custom_css .='}';

	$election_campaign_scroll_icon_font_size = get_theme_mod('election_campaign_scroll_icon_font_size', 22);
	$election_campaign_custom_css .='#scrollbutton {';
		$election_campaign_custom_css .='font-size: '.esc_attr($election_campaign_scroll_icon_font_size).'px;';
	$election_campaign_custom_css .='}';

	// back to top icon color
	$election_campaign_scroll_icon_color = get_theme_mod('election_campaign_scroll_icon_color');
	$election_campaign_custom_css .='#scrollbutton i{';
		$election_campaign_custom_css .='color: '.esc_attr($election_campaign_scroll_icon_color).';';
	$election_campaign_custom_css .='}';

	// back to top icon hover color
	$election_campaign_scroll_icon_hover_color = get_theme_mod('election_campaign_scroll_icon_hover_color');
	$election_campaign_custom_css .='#scrollbutton i:hover{';
		$election_campaign_custom_css .='color: '.esc_attr($election_campaign_scroll_icon_hover_color).';';
	$election_campaign_custom_css .='}';

	// back to top bg color
	$election_campaign_scroll_icon_background = get_theme_mod('election_campaign_scroll_icon_background');
	$election_campaign_custom_css .='#scrollbutton{';
		$election_campaign_custom_css .='background-color: '.esc_attr($election_campaign_scroll_icon_background).';';
		$election_campaign_custom_css .='border-color: '.esc_attr($election_campaign_scroll_icon_background).';';
	$election_campaign_custom_css .='}';

	// back to top bg hover color
	$election_campaign_scroll_icon_background_hover = get_theme_mod('election_campaign_scroll_icon_background_hover');
	$election_campaign_custom_css .='#scrollbutton:hover{';
		$election_campaign_custom_css .='background-color: '.esc_attr($election_campaign_scroll_icon_background_hover).';';
		$election_campaign_custom_css .='border-color: '.esc_attr($election_campaign_scroll_icon_background_hover).';';
	$election_campaign_custom_css .='}';

	$election_campaign_top_bottom_scroll_padding = get_theme_mod('election_campaign_top_bottom_scroll_padding', 7);
	$election_campaign_custom_css .='#scrollbutton {';
		$election_campaign_custom_css .='padding-top: '.esc_attr($election_campaign_top_bottom_scroll_padding).'px; padding-bottom: '.esc_attr($election_campaign_top_bottom_scroll_padding).'px;';
	$election_campaign_custom_css .='}';

	$election_campaign_left_right_scroll_padding = get_theme_mod('election_campaign_left_right_scroll_padding', 17);
	$election_campaign_custom_css .='#scrollbutton {';
		$election_campaign_custom_css .='padding-left: '.esc_attr($election_campaign_left_right_scroll_padding).'px; padding-right: '.esc_attr($election_campaign_left_right_scroll_padding).'px;';
	$election_campaign_custom_css .='}';

	//First Cap
	$election_campaign_show_first_caps = get_theme_mod('election_campaign_show_first_caps', 'false');
	if($election_campaign_show_first_caps == 'true' ){
	$election_campaign_custom_css .='.blog-section .mainbox .new-text p:nth-of-type(1)::first-letter{';
	$election_campaign_custom_css .=' font-size: 55px; font-weight: 600;';
	$election_campaign_custom_css .=' margin-right: 6px;';
	$election_campaign_custom_css .=' line-height: 1;';
	$election_campaign_custom_css .='}';
	}elseif($election_campaign_show_first_caps == 'false' ){
	$election_campaign_custom_css .='.blog-section .mainbox .new-text p:nth-of-type(1)::first-letter {';
	$election_campaign_custom_css .='display: none;';
	$election_campaign_custom_css .='}';
	}

	/*-------------- Post Button  -------------------*/

	$election_campaign_btn_font_size_option = get_theme_mod('election_campaign_btn_font_size_option');
	$election_campaign_custom_css .='.postbtn a{';
		$election_campaign_custom_css .='font-size: '.esc_attr($election_campaign_btn_font_size_option).'px !important;';
	$election_campaign_custom_css .='}';

	$election_campaign_theme_lay = get_theme_mod( 'election_campaign_button_text_tranform','Uppercase');
    if($election_campaign_theme_lay == 'Uppercase'){
		$election_campaign_custom_css .='.postbtn a{';
			$election_campaign_custom_css .='text-transform: uppercase;';
		$election_campaign_custom_css .='}';
	}else if($election_campaign_theme_lay == 'Lowercase'){
		$election_campaign_custom_css .='.postbtn a{';
			$election_campaign_custom_css .='text-transform: lowercase;';
		$election_campaign_custom_css .='}';
	}
	else if($election_campaign_theme_lay == 'Capitalize'){
		$election_campaign_custom_css .='.postbtn a{';
			$election_campaign_custom_css .='text-transform: capitalize;';
		$election_campaign_custom_css .='}';
	}

	// button font weight
	$election_campaign_button_font_weight = get_theme_mod( 'election_campaign_button_font_weight','700');
	if($election_campaign_button_font_weight != ''){
		$election_campaign_custom_css .='.postbtn a{';
			$election_campaign_custom_css .='font-weight: '.esc_attr($election_campaign_button_font_weight).';';
		$election_campaign_custom_css .='}';
	}

	$election_campaign_post_button_padding_top = get_theme_mod('election_campaign_post_button_padding_top');
	$election_campaign_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$election_campaign_custom_css .='padding-top: '.esc_attr($election_campaign_post_button_padding_top).'px !important; padding-bottom: '.esc_attr($election_campaign_post_button_padding_top).'px !important;';
	$election_campaign_custom_css .='}';

	$election_campaign_post_button_padding_right = get_theme_mod('election_campaign_post_button_padding_right');
	$election_campaign_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$election_campaign_custom_css .='padding-left: '.esc_attr($election_campaign_post_button_padding_right).'px !important; padding-right: '.esc_attr($election_campaign_post_button_padding_right).'px !important;';
	$election_campaign_custom_css .='}';

	$election_campaign_post_button_border_radius = get_theme_mod('election_campaign_post_button_border_radius');
	$election_campaign_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$election_campaign_custom_css .='border-radius: '.esc_attr($election_campaign_post_button_border_radius).'px !important;';
	$election_campaign_custom_css .='}';

	$election_campaign_post_comment_enable = get_theme_mod('election_campaign_post_comment_enable',true);
	if($election_campaign_post_comment_enable == false){
		$election_campaign_custom_css .='#comments{';
			$election_campaign_custom_css .='display: none;';
		$election_campaign_custom_css .='}';
	}

	/*----------- Preloader Color Option  ----------------*/
	$election_campaign_preloader_bg_color_option = get_theme_mod('election_campaign_preloader_bg_color_option');
	$election_campaign_preloader_icon_color_option = get_theme_mod('election_campaign_preloader_icon_color_option');
	$election_campaign_custom_css .='.frame{';
		$election_campaign_custom_css .='background-color: '.esc_attr($election_campaign_preloader_bg_color_option).';';
	$election_campaign_custom_css .='}';
	$election_campaign_custom_css .='.dot-1,.dot-2,.dot-3{';
		$election_campaign_custom_css .='background-color: '.esc_attr($election_campaign_preloader_icon_color_option).';';
	$election_campaign_custom_css .='}';

	// preloader type
	$election_campaign_theme_lay = get_theme_mod( 'election_campaign_preloader_type','First Preloader Type');
    if($election_campaign_theme_lay == 'First Preloader Type'){
		$election_campaign_custom_css .='.dot-1, .dot-2, .dot-3{';
			$election_campaign_custom_css .='';
		$election_campaign_custom_css .='}';
	}else if($election_campaign_theme_lay == 'Second Preloader Type'){
		$election_campaign_custom_css .='.dot-1, .dot-2, .dot-3{';
			$election_campaign_custom_css .='border-radius:0;';
		$election_campaign_custom_css .='}';
	}

	/*------------------ Skin Option  -------------------*/
	$election_campaign_theme_lay = get_theme_mod( 'election_campaign_background_skin','Without Background');
    if($election_campaign_theme_lay == 'With Background'){
		$election_campaign_custom_css .='.inner-service,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin{';
			$election_campaign_custom_css .='background-color: #fff; padding:20px;';
		$election_campaign_custom_css .='}';
		$election_campaign_custom_css .='.login-box a{';
			$election_campaign_custom_css .='background-color: #fff;';
		$election_campaign_custom_css .='}';
	}else if($election_campaign_theme_lay == 'Without Background'){
		$election_campaign_custom_css .='{';
			$election_campaign_custom_css .='background-color: transparent;';
		$election_campaign_custom_css .='}';
	}

	/*-------------- Woocommerce Button  -------------------*/
	$election_campaign_woocommerce_button_padding_top = get_theme_mod('election_campaign_woocommerce_button_padding_top',12);
	$election_campaign_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$election_campaign_custom_css .='padding-top: '.esc_attr($election_campaign_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($election_campaign_woocommerce_button_padding_top).'px;';
	$election_campaign_custom_css .='}';
	

	$election_campaign_woocommerce_button_padding_right = get_theme_mod('election_campaign_woocommerce_button_padding_right',15);
	$election_campaign_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$election_campaign_custom_css .='padding-left: '.esc_attr($election_campaign_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($election_campaign_woocommerce_button_padding_right).'px;';
	$election_campaign_custom_css .='}';

	$election_campaign_woocommerce_button_border_radius = get_theme_mod('election_campaign_woocommerce_button_border_radius',0);
	$election_campaign_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.added_to_cart{';
		$election_campaign_custom_css .='border-radius: '.esc_attr($election_campaign_woocommerce_button_border_radius).'px;';
	$election_campaign_custom_css .='}';

	$election_campaign_related_product_enable = get_theme_mod('election_campaign_related_product_enable',true);
	if($election_campaign_related_product_enable == false){
		$election_campaign_custom_css .='.related.products{';
			$election_campaign_custom_css .='display: none;';
		$election_campaign_custom_css .='}';
	}

	$election_campaign_woocommerce_product_border_enable = get_theme_mod('election_campaign_woocommerce_product_border_enable',false);
	if($election_campaign_woocommerce_product_border_enable == false){
		$election_campaign_custom_css .='.products li{';
			$election_campaign_custom_css .='border: none;';
		$election_campaign_custom_css .='}';
	}else if($election_campaign_woocommerce_product_border_enable == true){
		$election_campaign_custom_css .='.products li{';
			$election_campaign_custom_css .='border: 1px solid #ccc;';
		$election_campaign_custom_css .='}';
	}

	$election_campaign_woocommerce_product_padding_top = get_theme_mod('election_campaign_woocommerce_product_padding_top',0);
	$election_campaign_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$election_campaign_custom_css .='padding-top: '.esc_attr($election_campaign_woocommerce_product_padding_top).'px !important; padding-bottom: '.esc_attr($election_campaign_woocommerce_product_padding_top).'px !important;';
	$election_campaign_custom_css .='}';

	$election_campaign_woocommerce_product_padding_right = get_theme_mod('election_campaign_woocommerce_product_padding_right',0);
	$election_campaign_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$election_campaign_custom_css .='padding-left: '.esc_attr($election_campaign_woocommerce_product_padding_right).'px !important; padding-right: '.esc_attr($election_campaign_woocommerce_product_padding_right).'px !important;';
	$election_campaign_custom_css .='}';

	$election_campaign_woocommerce_product_border_radius = get_theme_mod('election_campaign_woocommerce_product_border_radius',3);
	$election_campaign_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$election_campaign_custom_css .='border-radius: '.esc_attr($election_campaign_woocommerce_product_border_radius).'px;';
	$election_campaign_custom_css .='}';

	$election_campaign_woocommerce_product_box_shadow = get_theme_mod('election_campaign_woocommerce_product_box_shadow', 0);
	$election_campaign_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$election_campaign_custom_css .='box-shadow: '.esc_attr($election_campaign_woocommerce_product_box_shadow).'px '.esc_attr($election_campaign_woocommerce_product_box_shadow).'px '.esc_attr($election_campaign_woocommerce_product_box_shadow).'px #ddd;';
	$election_campaign_custom_css .='}';

	$election_campaign_woo_product_sale_top_bottom_padding = get_theme_mod('election_campaign_woo_product_sale_top_bottom_padding', 0);
	$election_campaign_woo_product_sale_left_right_padding = get_theme_mod('election_campaign_woo_product_sale_left_right_padding', 0);
	$election_campaign_custom_css .='.woocommerce span.onsale{';
		$election_campaign_custom_css .='padding-top: '.esc_attr($election_campaign_woo_product_sale_top_bottom_padding).'px; padding-bottom: '.esc_attr($election_campaign_woo_product_sale_top_bottom_padding).'px; padding-left: '.esc_attr($election_campaign_woo_product_sale_left_right_padding).'px; padding-right: '.esc_attr($election_campaign_woo_product_sale_left_right_padding).'px; display:inline-block;';
	$election_campaign_custom_css .='}';

	$election_campaign_woo_product_sale_border_radius = get_theme_mod('election_campaign_woo_product_sale_border_radius',0);
	$election_campaign_custom_css .='.woocommerce span.onsale {';
		$election_campaign_custom_css .='border-radius: '.esc_attr($election_campaign_woo_product_sale_border_radius).'px;';
	$election_campaign_custom_css .='}';

	$election_campaign_woo_product_sale_position = get_theme_mod('election_campaign_woo_product_sale_position', 'Left');
	if($election_campaign_woo_product_sale_position == 'Right' ){
		$election_campaign_custom_css .='.woocommerce ul.products li.product .onsale{';
			$election_campaign_custom_css .=' left:auto; right:0;';
		$election_campaign_custom_css .='}';
	}elseif($election_campaign_woo_product_sale_position == 'Left' ){
		$election_campaign_custom_css .='.woocommerce ul.products li.product .onsale{';
			$election_campaign_custom_css .=' left:0; right:auto;';
		$election_campaign_custom_css .='}';
	}

	$election_campaign_wooproduct_sale_font_size = get_theme_mod('election_campaign_wooproduct_sale_font_size',14);
	$election_campaign_custom_css .='.woocommerce span.onsale{';
		$election_campaign_custom_css .='font-size: '.esc_attr($election_campaign_wooproduct_sale_font_size).'px;';
	$election_campaign_custom_css .='}';

	// Responsive Media
	$election_campaign_post_date = get_theme_mod( 'election_campaign_display_post_date',true);
	if($election_campaign_post_date == true && get_theme_mod( 'election_campaign_metafields_date',true) != true){
    	$election_campaign_custom_css .='.metabox .entry-date{';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} ';
	}
    if($election_campaign_post_date == true){
    	$election_campaign_custom_css .='@media screen and (max-width:575px) {';
		$election_campaign_custom_css .='.metabox .entry-date{';
			$election_campaign_custom_css .='display:inline-block;';
		$election_campaign_custom_css .='} }';
	}else if($election_campaign_post_date == false){
		$election_campaign_custom_css .='@media screen and (max-width:575px){';
		$election_campaign_custom_css .='.metabox .entry-date{';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} }';
	}

	$election_campaign_post_author = get_theme_mod( 'election_campaign_display_post_author',true);
	if($election_campaign_post_author == true && get_theme_mod( 'election_campaign_metafields_author',true) != true){
    	$election_campaign_custom_css .='.metabox .entry-author{';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} ';
	}
    if($election_campaign_post_author == true){
    	$election_campaign_custom_css .='@media screen and (max-width:575px) {';
		$election_campaign_custom_css .='.metabox .entry-author{';
			$election_campaign_custom_css .='display:inline-block;';
		$election_campaign_custom_css .='} }';
	}else if($election_campaign_post_author == false){
		$election_campaign_custom_css .='@media screen and (max-width:575px){';
		$election_campaign_custom_css .='.metabox .entry-author{';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} }';
	}

	$election_campaign_post_comment = get_theme_mod( 'election_campaign_display_post_comment',true);
	if($election_campaign_post_comment == true && get_theme_mod( 'election_campaign_metafields_comment',true) != true){
    	$election_campaign_custom_css .='.metabox .entry-comments{';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} ';
	}
    if($election_campaign_post_comment == true){
    	$election_campaign_custom_css .='@media screen and (max-width:575px) {';
		$election_campaign_custom_css .='.metabox .entry-comments{';
			$election_campaign_custom_css .='display:inline-block;';
		$election_campaign_custom_css .='} }';
	}else if($election_campaign_post_comment == false){
		$election_campaign_custom_css .='@media screen and (max-width:575px){';
		$election_campaign_custom_css .='.metabox .entry-comments{';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} }';
	}

	$election_campaign_post_time = get_theme_mod( 'election_campaign_display_post_time',true);
	if($election_campaign_post_time == true && get_theme_mod( 'election_campaign_metafields_time',true) != true){
    	$election_campaign_custom_css .='.metabox .entry-time{';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} ';
	}
    if($election_campaign_post_time == true){
    	$election_campaign_custom_css .='@media screen and (max-width:575px) {';
		$election_campaign_custom_css .='.metabox .entry-time{';
			$election_campaign_custom_css .='display:inline-block;';
		$election_campaign_custom_css .='} }';
	}else if($election_campaign_post_time == false){
		$election_campaign_custom_css .='@media screen and (max-width:575px){';
		$election_campaign_custom_css .='.metabox .entry-time{';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} }';
	}

	if($election_campaign_post_date == false && $election_campaign_post_author == false && $election_campaign_post_comment == false && $election_campaign_post_time == false){
		$election_campaign_custom_css .='@media screen and (max-width:575px) {';
    	$election_campaign_custom_css .='.metabox {';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} }';
	}

	$election_campaign_metafields_date = get_theme_mod( 'election_campaign_metafields_date',true);
	$election_campaign_metafields_author = get_theme_mod( 'election_campaign_metafields_author',true);
	$election_campaign_metafields_comment = get_theme_mod( 'election_campaign_metafields_comment',true);
	$election_campaign_metafields_time = get_theme_mod( 'election_campaign_metafields_time',true);
	if($election_campaign_metafields_date == false && $election_campaign_metafields_author == false && $election_campaign_metafields_comment == false && $election_campaign_metafields_time == false){
		$election_campaign_custom_css .='@media screen and (min-width:576px) {';
    	$election_campaign_custom_css .='.metabox {';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} }';
	}

	$election_campaign_slider = get_theme_mod( 'election_campaign_display_slider',true);
	 if($election_campaign_slider == true && get_theme_mod( 'election_campaign_slider_hide', false) == false){
     	$election_campaign_custom_css .='#slider{';
	 		$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} ';
	 }
    if($election_campaign_slider == true){
    	$election_campaign_custom_css .='@media screen and (max-width:575px) {';
		$election_campaign_custom_css .='#slider{';
			$election_campaign_custom_css .='display:block;';
		$election_campaign_custom_css .='} }';
	}else if($election_campaign_slider == false){
		$election_campaign_custom_css .='@media screen and (max-width:575px){';
		$election_campaign_custom_css .='#slider{';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} }';
	}

	$election_campaign_sidebar = get_theme_mod( 'election_campaign_display_sidebar',true);
    if($election_campaign_sidebar == true){
    	$election_campaign_custom_css .='@media screen and (max-width:575px) {';
		$election_campaign_custom_css .='#sidebar{';
			$election_campaign_custom_css .='display:block;';
		$election_campaign_custom_css .='} }';
	}else if($election_campaign_sidebar == false){
		$election_campaign_custom_css .='@media screen and (max-width:575px) {';
		$election_campaign_custom_css .='#sidebar{';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} }';
	}

	$election_campaign_scroll = get_theme_mod( 'election_campaign_display_scrolltop',true);
	if($election_campaign_scroll == true && get_theme_mod( 'election_campaign_hide_show_scroll',true) != true){
    	$election_campaign_custom_css .='#scrollbutton {';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} ';
	}
    if($election_campaign_scroll == true){
    	$election_campaign_custom_css .='@media screen and (max-width:575px) {';
		$election_campaign_custom_css .='#scrollbutton {';
			$election_campaign_custom_css .='display:block;';
		$election_campaign_custom_css .='} }';
	}else if($election_campaign_scroll == false){
		$election_campaign_custom_css .='@media screen and (max-width:575px){';
		$election_campaign_custom_css .='#scrollbutton {';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} }';
	}

	$election_campaign_preloader = get_theme_mod( 'election_campaign_display_preloader',false);
	if($election_campaign_preloader == true && get_theme_mod( 'election_campaign_preloader',false) == false){
		$election_campaign_custom_css .='@media screen and (min-width:575px) {';
    	$election_campaign_custom_css .='.frame{';
			$election_campaign_custom_css .=' visibility: hidden;';
		$election_campaign_custom_css .='} }';
	}
    if($election_campaign_preloader == true){
    	$election_campaign_custom_css .='@media screen and (max-width:575px) {';
		$election_campaign_custom_css .='.frame{';
			$election_campaign_custom_css .='visibility:visible;';
		$election_campaign_custom_css .='} }';
	}else if($election_campaign_preloader == false){
		$election_campaign_custom_css .='@media screen and (max-width:575px){';
		$election_campaign_custom_css .='.frame{';
			$election_campaign_custom_css .='visibility: hidden;';
		$election_campaign_custom_css .='} }';
	}

	$election_campaign_search = get_theme_mod( 'election_campaign_display_search_category',true);
	if($election_campaign_search == true && get_theme_mod( 'election_campaign_search_enable_disable',true) != true){
    	$election_campaign_custom_css .='.search-cat-box{';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} ';
	}
    if($election_campaign_search == true){
    	$election_campaign_custom_css .='@media screen and (max-width:575px) {';
		$election_campaign_custom_css .='.search-cat-box{';
			$election_campaign_custom_css .='display:block;';
		$election_campaign_custom_css .='} }';
	}else if($election_campaign_search == false){
		$election_campaign_custom_css .='@media screen and (max-width:575px){';
		$election_campaign_custom_css .='.search-cat-box{';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} }';
	}

	$election_campaign_myaccount = get_theme_mod( 'election_campaign_display_myaccount',true);
	if($election_campaign_myaccount == true && get_theme_mod( 'election_campaign_myaccount_enable_disable',true) != true){
    	$election_campaign_custom_css .='.login-box{';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} ';
	}
    if($election_campaign_myaccount == true){
    	$election_campaign_custom_css .='@media screen and (max-width:575px) {';
		$election_campaign_custom_css .='.login-box{';
			$election_campaign_custom_css .='display:block;';
		$election_campaign_custom_css .='} }';
	}else if($election_campaign_myaccount == false){
		$election_campaign_custom_css .='@media screen and (max-width:575px){';
		$election_campaign_custom_css .='.login-box{';
			$election_campaign_custom_css .='display:none;';
		$election_campaign_custom_css .='} }';
	}

	// menu settings
	$election_campaign_menu_font_size_option = get_theme_mod('election_campaign_menu_font_size_option');
	$election_campaign_custom_css .='.primary-navigation ul li a{';
		$election_campaign_custom_css .='font-size: '.esc_attr($election_campaign_menu_font_size_option).'px;';
	$election_campaign_custom_css .='}';

	$election_campaign_menu_padding = get_theme_mod('election_campaign_menu_padding');
	$election_campaign_custom_css .='.primary-navigation ul li a{';
		$election_campaign_custom_css .='padding: '.esc_attr($election_campaign_menu_padding).'px;';
	$election_campaign_custom_css .='}';

	$election_campaign_theme_lay = get_theme_mod( 'election_campaign_text_tranform_menu','Capitalize');
    if($election_campaign_theme_lay == 'Uppercase'){
		$election_campaign_custom_css .='.primary-navigation ul li a{';
			$election_campaign_custom_css .='text-transform: uppercase !important;';
		$election_campaign_custom_css .='}';
	}else if($election_campaign_theme_lay == 'Lowercase'){
		$election_campaign_custom_css .='.primary-navigation ul li a{';
			$election_campaign_custom_css .='text-transform: lowercase !important;';
		$election_campaign_custom_css .='}';
	}
	else if($election_campaign_theme_lay == 'Capitalize'){
		$election_campaign_custom_css .='.primary-navigation ul li a{';
			$election_campaign_custom_css .='text-transform: capitalize !important;';
		$election_campaign_custom_css .='}';
	}

	//  comment form width
	$election_campaign_comment_form_width = get_theme_mod( 'election_campaign_comment_form_width');
	$election_campaign_custom_css .='#comments textarea{';
		$election_campaign_custom_css .='width: '.esc_attr($election_campaign_comment_form_width).'%;';
	$election_campaign_custom_css .='}';

	$election_campaign_title_comment_form = get_theme_mod('election_campaign_title_comment_form', 'Leave a Reply');
	if($election_campaign_title_comment_form == ''){
		$election_campaign_custom_css .='#comments h2#reply-title {';
			$election_campaign_custom_css .='display: none;';
		$election_campaign_custom_css .='}';
	}

	$election_campaign_comment_form_button_content = get_theme_mod('election_campaign_comment_form_button_content', 'Post Comment');
	if($election_campaign_comment_form_button_content == ''){
		$election_campaign_custom_css .='#comments p.form-submit {';
			$election_campaign_custom_css .='display: none;';
		$election_campaign_custom_css .='}';
	}

	// featured image setting
	$election_campaign_image_border_radius = get_theme_mod('election_campaign_image_border_radius', 0);
	$election_campaign_custom_css .='.box-image img, .content_box img{';
		$election_campaign_custom_css .='border-radius: '.esc_attr($election_campaign_image_border_radius).'%;';
	$election_campaign_custom_css .='}';

	$election_campaign_image_box_shadow = get_theme_mod('election_campaign_image_box_shadow',0);
	$election_campaign_custom_css .='.box-image img, .content_box img{';
		$election_campaign_custom_css .='box-shadow: '.esc_attr($election_campaign_image_box_shadow).'px '.esc_attr($election_campaign_image_box_shadow).'px '.esc_attr($election_campaign_image_box_shadow).'px #b5b5b5;';
	$election_campaign_custom_css .='}';

	// Post Block
	$election_campaign_post_block_option = get_theme_mod( 'election_campaign_post_block_option','By Block');
    if($election_campaign_post_block_option == 'By Without Block'){
		$election_campaign_custom_css .='.gridbox .inner-service, .related-inner-box, .mainbox-post, .layout2, .layout1, .post_format-post-format-video,.post_format-post-format-image,.post_format-post-format-audio, .post_format-post-format-gallery, .mainbox{';
			$election_campaign_custom_css .='border:none; margin:30px 0;';
		$election_campaign_custom_css .='}';
	}

	// post image 
	$election_campaign_post_featured_color = get_theme_mod('election_campaign_post_featured_color', '#163D80');
	$election_campaign_post_featured_image = get_theme_mod('election_campaign_post_featured_image','Image');
	if($election_campaign_post_featured_image == 'Color'){
		$election_campaign_custom_css .='.post-color{';
			$election_campaign_custom_css .='background-color: '.esc_attr($election_campaign_post_featured_color).';';
		$election_campaign_custom_css .='}';
	}

	// featured image dimention
	$election_campaign_post_featured_image_dimention = get_theme_mod('election_campaign_post_featured_image_dimention', 'Default');
	$election_campaign_post_featured_image_custom_width = get_theme_mod('election_campaign_post_featured_image_custom_width');
	$election_campaign_post_featured_image_custom_height = get_theme_mod('election_campaign_post_featured_image_custom_height');
	if($election_campaign_post_featured_image_dimention == 'Custom'){
		$election_campaign_custom_css .='.box-image img{';
			$election_campaign_custom_css .='width: '.esc_attr($election_campaign_post_featured_image_custom_width).'px; height: '.esc_attr($election_campaign_post_featured_image_custom_height).'px;';
		$election_campaign_custom_css .='}';
	}

	// featured image dimention
	$election_campaign_custom_post_color_width = get_theme_mod('election_campaign_custom_post_color_width');
	$election_campaign_custom_post_color_height = get_theme_mod('election_campaign_custom_post_color_height');
	if($election_campaign_post_featured_image == 'Color'){
		$election_campaign_custom_css .='.post-color{';
			$election_campaign_custom_css .='width: '.esc_attr($election_campaign_custom_post_color_width).'px; height: '.esc_attr($election_campaign_custom_post_color_height).'px;';
		$election_campaign_custom_css .='}';
	}

	// site title font size
	$election_campaign_site_title_font_size = get_theme_mod('election_campaign_site_title_font_size', 25);
	$election_campaign_custom_css .='.logo .site-title{';
	$election_campaign_custom_css .='font-size: '.esc_attr($election_campaign_site_title_font_size).'px;';
	$election_campaign_custom_css .='}';

	// site tagline font size
	$election_campaign_site_tagline_font_size = get_theme_mod('election_campaign_site_tagline_font_size', 13);
	$election_campaign_custom_css .='p.site-description{';
	$election_campaign_custom_css .='font-size: '.esc_attr($election_campaign_site_tagline_font_size).'px;';
	$election_campaign_custom_css .='}';

	// woocommerce Product Navigation
	$election_campaign_wooproducts_nav = get_theme_mod('election_campaign_wooproducts_nav', 'Yes');
	if($election_campaign_wooproducts_nav == 'No'){
		$election_campaign_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$election_campaign_custom_css .='display: none;';
		$election_campaign_custom_css .='}';
	}

	// site title color
	$election_campaign_site_title_color = get_theme_mod('election_campaign_site_title_color');
	$election_campaign_custom_css .='.site-title a{';
		$election_campaign_custom_css .='color: '.esc_attr($election_campaign_site_title_color).' !important;';
	$election_campaign_custom_css .='}';

	// site tagline color
	$election_campaign_site_tagline_color = get_theme_mod('election_campaign_site_tagline_color');
	$election_campaign_custom_css .='.site-description{';
		$election_campaign_custom_css .='color: '.esc_attr($election_campaign_site_tagline_color).' !important;';
	$election_campaign_custom_css .='}';
	
	// site toggle button color
	$election_campaign_toggle_button_color = get_theme_mod('election_campaign_toggle_button_color');
	$election_campaign_custom_css .='.toggle-menu i{';
		$election_campaign_custom_css .='color: '.esc_attr($election_campaign_toggle_button_color).' !important;';
	$election_campaign_custom_css .='}';

	//Copyright text color
	$election_campaign_copyright_text_color = get_theme_mod('election_campaign_copyright_text_color');
	$election_campaign_custom_css .='.copyright-wrapper, .copyright-wrapper p a{';
		$election_campaign_custom_css .='color: '.esc_attr($election_campaign_copyright_text_color).';';
	$election_campaign_custom_css .='}';

	//Copyright background css
	$election_campaign_copyright_text_background = get_theme_mod('election_campaign_copyright_text_background');
	$election_campaign_custom_css .='.copyright-wrapper{';
		$election_campaign_custom_css .='background-color: '.esc_attr($election_campaign_copyright_text_background).';';
	$election_campaign_custom_css .='}';

	// menu font weight
	$election_campaign_font_weight_option_menu = get_theme_mod( 'election_campaign_font_weight_option_menu');
	if($election_campaign_font_weight_option_menu != ''){
		$election_campaign_custom_css .='.primary-navigation ul li a{';
			$election_campaign_custom_css .='font-weight: '.esc_attr($election_campaign_font_weight_option_menu).'!important;';
		$election_campaign_custom_css .='}';
	}

	// menu color
	$election_campaign_menu_color = get_theme_mod('election_campaign_menu_color');

	$election_campaign_custom_css .='.primary-navigation a, .primary-navigation ul li a, #site-navigation li a{';
			$election_campaign_custom_css .='color: '.esc_attr($election_campaign_menu_color).' !important;';
	$election_campaign_custom_css .='}';

// Sub menu color
	$election_campaign_sub_menu_color = get_theme_mod('election_campaign_sub_menu_color');

	$election_campaign_custom_css .='.primary-navigation ul.sub-menu a, .primary-navigation ul.sub-menu li a, #site-navigation ul.sub-menu li a, .primary-navigation ul.children a, .primary-navigation ul.children li a, #site-navigation ul.children li a{';
			$election_campaign_custom_css .='color: '.esc_attr($election_campaign_sub_menu_color).' !important;';
	$election_campaign_custom_css .='}';

// menu hover color
	$election_campaign_menu_hover_color = get_theme_mod('election_campaign_menu_hover_color');

	$election_campaign_custom_css .='.primary-navigation a:hover, .primary-navigation ul li a:hover, .primary-navigation .current_page_item > a:hover, .primary-navigation .current-menu-item > a:hover, .primary-navigation .current_page_ancestor > a:hover, #site-navigation li a:hover{';
			$election_campaign_custom_css .='color: '.esc_attr($election_campaign_menu_hover_color).' !important;';
	$election_campaign_custom_css .='}';

// Sub menu hover color
	$election_campaign_sub_menu_hover_color = get_theme_mod('election_campaign_sub_menu_hover_color');

	$election_campaign_custom_css .='.primary-navigation ul.sub-menu a:hover, .primary-navigation ul.sub-menu li a:hover, .primary-navigation .current_page_item > a:hover, .primary-navigation .current-menu-item > a:hover, .primary-navigation .current_page_ancestor > a:hover, #site-navigation ul.sub-menu li a:hover, .primary-navigation ul.children a:hover, .primary-navigation ul.children li a:hover, #site-navigation ul.children li a:hover{';
			$election_campaign_custom_css .='color: '.esc_attr($election_campaign_sub_menu_hover_color).' !important;';
	$election_campaign_custom_css .='}';	

	/*----------------- Slider -----------------*/

	$election_campaign_slider_hide = get_theme_mod('election_campaign_slider_hide');
	if($election_campaign_slider_hide == false){
		$election_campaign_custom_css .='.page-template-home-page #header{';
			$election_campaign_custom_css .='position: static; background-color: #000;';
		$election_campaign_custom_css .='}';
	}

	//slider button bg color
	$election_campaign_slider_btn_bg_color = get_theme_mod('election_campaign_slider_btn_bg_color');
	$election_campaign_custom_css .='#slider .read-more a{';
		$election_campaign_custom_css .='background-color: '.esc_attr($election_campaign_slider_btn_bg_color).';';
	$election_campaign_custom_css .='}';

	//slider button icon bg color
	$election_campaign_slider_btn_iconbg_color = get_theme_mod('election_campaign_slider_btn_iconbg_color');
	$election_campaign_custom_css .='#slider .read-more i{';
		$election_campaign_custom_css .='background-color: '.esc_attr($election_campaign_slider_btn_iconbg_color).';';
	$election_campaign_custom_css .='}';




