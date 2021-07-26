<?php
	
	$nikah_wedding_theme_color = get_theme_mod('nikah_wedding_theme_color');

	$nikah_wedding_custom_css = '';

	if($nikah_wedding_theme_color != false){
		$nikah_wedding_custom_css .='#masthead, .search-box span i, .read-more a, #slider .carousel-control-next-icon i:hover, #slider .carousel-control-prev-icon i:hover, .meta-info, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .post-link a, .post-info, button.search-submit:hover, .search-form button.search-submit, .copyright, .widget .tagcloud a:hover,.widget .tagcloud a:focus,.widget.widget_tag_cloud a:hover,.widget.widget_tag_cloud a:focus,.wp_widget_tag_cloud a:hover,.wp_widget_tag_cloud a:focus, .logo, button,input[type="button"],input[type="submit"], .scrollup i,.comment-reply-link, .post-navigation .nav-next a, .post-navigation .nav-previous a,.page-numbers, #sidebox .widget_price_filter .ui-slider-horizontal .ui-slider-range, #sidebox .widget_price_filter .ui-slider .ui-slider-handle, .site-footer .widget_price_filter .ui-slider-horizontal .ui-slider-range, .site-footer .widget_price_filter .ui-slider .ui-slider-handle, .nav-links .nav-previous a, .nav-links .nav-next a, .tags p a, .wp-block-button a, .site-footer .woocommerce .widget_shopping_cart .buttons a:hover, .site-footer .woocommerce.widget_shopping_cart .buttons a:hover, .site-footer .widget_price_filter .price_slider_amount .button:hover, .woocommerce form.woocommerce-product-search button:hover{';
			$nikah_wedding_custom_css .='background-color: '.esc_attr($nikah_wedding_theme_color).';';
		$nikah_wedding_custom_css .='}';
	}
	if($nikah_wedding_theme_color != false){
		$nikah_wedding_custom_css .='.site-footer ul li a:hover,a, .carousel-control-next-icon, .carousel-control-prev-icon, #love-story h2, #love-story h2, .blogger h3 a, #sidebox h2, .navigation-top a,  code, .main-navigation ul.sub-menu li a:hover,#sidebox ul li a:hover,.blogger h2 a, #sidebox h3, .main-navigation ul.sub-menu li a:hover,.main-navigation ul ul li a, .main-navigation li li:focus > a, .main-navigation li li:hover > a{';
			$nikah_wedding_custom_css .='color: '.esc_attr($nikah_wedding_theme_color).';';
		$nikah_wedding_custom_css .='}';
	}
	if($nikah_wedding_theme_color != false){
		$nikah_wedding_custom_css .='.main-navigation ul ul,.scrollup i{';
			$nikah_wedding_custom_css .='border-color: '.esc_attr($nikah_wedding_theme_color).';';
		$nikah_wedding_custom_css .='}';
	}
	if($nikah_wedding_theme_color != false){
		$nikah_wedding_custom_css .='.main-navigation ul ul li:hover{';
			$nikah_wedding_custom_css .='border-left-color: '.esc_attr($nikah_wedding_theme_color).';';
		$nikah_wedding_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/
	$nikah_wedding_theme_lay = get_theme_mod( 'nikah_wedding_theme_options','Default');
    if($nikah_wedding_theme_lay == 'Default'){
		$nikah_wedding_custom_css .='body{';
			$nikah_wedding_custom_css .='max-width: 100%;';
		$nikah_wedding_custom_css .='}';
		$nikah_wedding_custom_css .='.page-template-custom-home-page .middle-header{';
			$nikah_wedding_custom_css .='width: 97.3%';
		$nikah_wedding_custom_css .='}';
	}else if($nikah_wedding_theme_lay == 'Wide Layout'){
		$nikah_wedding_custom_css .='body{';
			$nikah_wedding_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$nikah_wedding_custom_css .='}';
		$nikah_wedding_custom_css .='.page-template-custom-home-page .middle-header{';
			$nikah_wedding_custom_css .='width: 97.7%';
		$nikah_wedding_custom_css .='}';
	}else if($nikah_wedding_theme_lay == 'Box Layout'){
		$nikah_wedding_custom_css .='body{';
			$nikah_wedding_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$nikah_wedding_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$nikah_wedding_slider_layout = get_theme_mod( 'nikah_wedding_slider_opacity_color','0.7');
	if($nikah_wedding_slider_layout == '0'){
		$nikah_wedding_custom_css .='#slider img{';
			$nikah_wedding_custom_css .='opacity:0';
		$nikah_wedding_custom_css .='}';
		}else if($nikah_wedding_slider_layout == '0.1'){
		$nikah_wedding_custom_css .='#slider img{';
			$nikah_wedding_custom_css .='opacity:0.1';
		$nikah_wedding_custom_css .='}';
		}else if($nikah_wedding_slider_layout == '0.2'){
		$nikah_wedding_custom_css .='#slider img{';
			$nikah_wedding_custom_css .='opacity:0.2';
		$nikah_wedding_custom_css .='}';
		}else if($nikah_wedding_slider_layout == '0.3'){
		$nikah_wedding_custom_css .='#slider img{';
			$nikah_wedding_custom_css .='opacity:0.3';
		$nikah_wedding_custom_css .='}';
		}else if($nikah_wedding_slider_layout == '0.4'){
		$nikah_wedding_custom_css .='#slider img{';
			$nikah_wedding_custom_css .='opacity:0.4';
		$nikah_wedding_custom_css .='}';
		}else if($nikah_wedding_slider_layout == '0.5'){
		$nikah_wedding_custom_css .='#slider img{';
			$nikah_wedding_custom_css .='opacity:0.5';
		$nikah_wedding_custom_css .='}';
		}else if($nikah_wedding_slider_layout == '0.6'){
		$nikah_wedding_custom_css .='#slider img{';
			$nikah_wedding_custom_css .='opacity:0.6';
		$nikah_wedding_custom_css .='}';
		}else if($nikah_wedding_slider_layout == '0.7'){
		$nikah_wedding_custom_css .='#slider img{';
			$nikah_wedding_custom_css .='opacity:0.7';
		$nikah_wedding_custom_css .='}';
		}else if($nikah_wedding_slider_layout == '0.8'){
		$nikah_wedding_custom_css .='#slider img{';
			$nikah_wedding_custom_css .='opacity:0.8';
		$nikah_wedding_custom_css .='}';
		}else if($nikah_wedding_slider_layout == '0.9'){
		$nikah_wedding_custom_css .='#slider img{';
			$nikah_wedding_custom_css .='opacity:0.9';
		$nikah_wedding_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/
	$nikah_wedding_slider_layout = get_theme_mod( 'nikah_wedding_slider_content_option','Center');
    if($nikah_wedding_slider_layout == 'Left'){
		$nikah_wedding_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$nikah_wedding_custom_css .='text-align:left; left:15%; right:45%;';
		$nikah_wedding_custom_css .='}';
		$nikah_wedding_custom_css .='
		@media screen and (max-width: 767px){
		#slider .read-more a{';
		$nikah_wedding_custom_css .='font-size:12px;';
		$nikah_wedding_custom_css .='} }';
	}else if($nikah_wedding_slider_layout == 'Center'){
		$nikah_wedding_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$nikah_wedding_custom_css .='text-align:center; left:20%; right:20%;';
		$nikah_wedding_custom_css .='}';
	}else if($nikah_wedding_slider_layout == 'Right'){
		$nikah_wedding_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$nikah_wedding_custom_css .='text-align:right; left:45%; right:15%;';
		$nikah_wedding_custom_css .='}';
		$nikah_wedding_custom_css .='
		@media screen and (max-width: 767px){
		#slider .read-more a{';
		$nikah_wedding_custom_css .='font-size:12px;';
		$nikah_wedding_custom_css .='} }';
	}

	/*------------------------ Button Settings option--------------------*/
	$nikah_wedding_top_bottom_padding = get_theme_mod('nikah_wedding_top_bottom_padding');
	$nikah_wedding_left_right_padding = get_theme_mod('nikah_wedding_left_right_padding');
	if($nikah_wedding_top_bottom_padding != false || $nikah_wedding_left_right_padding != false){
		$nikah_wedding_custom_css .='.post-link a, #slider .read-more a, .form-submit input[type="submit"],#love-story .read-more a{';
			$nikah_wedding_custom_css .='padding-top: '.esc_attr($nikah_wedding_top_bottom_padding).'px; padding-bottom: '.esc_attr($nikah_wedding_top_bottom_padding).'px; padding-left: '.esc_attr($nikah_wedding_left_right_padding).'px; padding-right: '.esc_attr($nikah_wedding_left_right_padding).'px; display:inline-block;';
		$nikah_wedding_custom_css .='}';
	}

	$nikah_wedding_border_radius = get_theme_mod('nikah_wedding_border_radius');
	if($nikah_wedding_border_radius != false){
		$nikah_wedding_custom_css .='.post-link a,#slider .read-more a, .form-submit input[type="submit"],#love-story .read-more a{';
			$nikah_wedding_custom_css .='border-radius: '.esc_attr($nikah_wedding_border_radius).'px;';
		$nikah_wedding_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$nikah_wedding_loader_color_setting = get_theme_mod('nikah_wedding_loader_color_setting');

	if($nikah_wedding_loader_color_setting != false){
		$nikah_wedding_custom_css .=' .circle .inner{';
			$nikah_wedding_custom_css .='border-color: '.esc_attr($nikah_wedding_loader_color_setting).';';
		$nikah_wedding_custom_css .='} ';
	}

	$nikah_wedding_loader_background_color = get_theme_mod('nikah_wedding_loader_background_color');

	if($nikah_wedding_loader_background_color != false){
		$nikah_wedding_custom_css .=' #pre-loader{';
			$nikah_wedding_custom_css .='background-color: '.esc_attr($nikah_wedding_loader_background_color).';';
		$nikah_wedding_custom_css .='} ';
	}

	$nikah_wedding_theme_lay = get_theme_mod( 'nikah_wedding_preloader_types','Default');
    if($nikah_wedding_theme_lay == 'Default'){
		$nikah_wedding_custom_css .='{';
			$nikah_wedding_custom_css .='';
		$nikah_wedding_custom_css .='}';
	}elseif($nikah_wedding_theme_lay == 'Circle'){
		$nikah_wedding_custom_css .='.circle .inner{';
			$nikah_wedding_custom_css .='width:unset;';
		$nikah_wedding_custom_css .='}';
	}elseif($nikah_wedding_theme_lay == 'Two Circle'){
		$nikah_wedding_custom_css .='.circle .inner{';
			$nikah_wedding_custom_css .='width:80%;
    border-right: 5px;';
		$nikah_wedding_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/
	$nikah_wedding_theme_lay = get_theme_mod( 'nikah_wedding_blog_post_layout','Default');
    if($nikah_wedding_theme_lay == 'Default'){
		$nikah_wedding_custom_css .='.blogger{';
			$nikah_wedding_custom_css .='';
		$nikah_wedding_custom_css .='}';
	}else if($nikah_wedding_theme_lay == 'Center'){
		$nikah_wedding_custom_css .='.blogger, .blogger h2, .post-info, .text p, .blogger .post-link{';
			$nikah_wedding_custom_css .='text-align:center;';
		$nikah_wedding_custom_css .='}';
		$nikah_wedding_custom_css .='.post-info{';
			$nikah_wedding_custom_css .='margin-top:10px;';
		$nikah_wedding_custom_css .='}';
		$nikah_wedding_custom_css .='.blogger .post-link{';
			$nikah_wedding_custom_css .='margin-top:25px;';
		$nikah_wedding_custom_css .='}';
		$nikah_wedding_custom_css .='.post-info hr{';
			$nikah_wedding_custom_css .='margin:10px auto;';
		$nikah_wedding_custom_css .='}';
	}else if($nikah_wedding_theme_lay == 'left'){
		$nikah_wedding_custom_css .='.blogger, .blogger h2, .post-info, .text p, .blogger .post-link, #our-services p{';
			$nikah_wedding_custom_css .='text-align:Left;';
		$nikah_wedding_custom_css .='}';
		$nikah_wedding_custom_css .='.blogger .post-link{';
			$nikah_wedding_custom_css .='margin:20px 0;';
		$nikah_wedding_custom_css .='}';
		$nikah_wedding_custom_css .='.post-info hr{';
			$nikah_wedding_custom_css .='margin-bottom:10px;';
		$nikah_wedding_custom_css .='}';
		$nikah_wedding_custom_css .='.blogger h2{';
			$nikah_wedding_custom_css .='margin-top:10px;';
		$nikah_wedding_custom_css .='}';
	}

	// Responsive Media
	$nikah_wedding_sidebar = get_theme_mod( 'nikah_wedding_enable_disable_sidebar',true);
    if($nikah_wedding_sidebar == true){
    	$nikah_wedding_custom_css .='@media screen and (max-width:575px) {';
		$nikah_wedding_custom_css .='#sidebox{';
			$nikah_wedding_custom_css .='display:block;';
		$nikah_wedding_custom_css .='} }';
	}else if($nikah_wedding_sidebar == false){
		$nikah_wedding_custom_css .='@media screen and (max-width:575px) {';
		$nikah_wedding_custom_css .='#sidebox{';
			$nikah_wedding_custom_css .='display:none;';
		$nikah_wedding_custom_css .='} }';
	}

	$nikah_wedding_slider = get_theme_mod( 'nikah_wedding_enable_disable_slider', false);
	if($nikah_wedding_slider == true && get_theme_mod( 'nikah_wedding_slider_arrows', false) == false){
    	$nikah_wedding_custom_css .='#slider{';
			$nikah_wedding_custom_css .='display:none;';
		$nikah_wedding_custom_css .='} ';
	}
    if($nikah_wedding_slider == true){
    	$nikah_wedding_custom_css .='@media screen and (max-width:575px) {';
		$nikah_wedding_custom_css .='#slider{';
			$nikah_wedding_custom_css .='display:block;';
		$nikah_wedding_custom_css .='} }';
	}else if($nikah_wedding_slider == false){
		$nikah_wedding_custom_css .='@media screen and (max-width:575px){';
		$nikah_wedding_custom_css .='#slider{';
			$nikah_wedding_custom_css .='display:none;';
		$nikah_wedding_custom_css .='} }';
	}

	$nikah_wedding_sliderbutton = get_theme_mod( 'nikah_wedding_show_hide_slider_button',true);
	if($nikah_wedding_sliderbutton == true && get_theme_mod( 'nikah_wedding_slider_button',true) != true){
    	$nikah_wedding_custom_css .='#slider .read-more a{';
			$nikah_wedding_custom_css .='display:none;';
		$nikah_wedding_custom_css .='} ';
	}
    if($nikah_wedding_sliderbutton == true){
    	$nikah_wedding_custom_css .='@media screen and (max-width:575px) {';
		$nikah_wedding_custom_css .='#slider .read-more a{';
			$nikah_wedding_custom_css .='display:inline-block;';
		$nikah_wedding_custom_css .='} }';
	}else if($nikah_wedding_sliderbutton == false){
		$nikah_wedding_custom_css .='@media screen and (max-width:575px){';
		$nikah_wedding_custom_css .='#slider .read-more a{';
			$nikah_wedding_custom_css .='display:none;';
		$nikah_wedding_custom_css .='} }';
	}

	$nikah_wedding_scroll = get_theme_mod( 'nikah_wedding_enable_disable_scrolltop',false);
	if($nikah_wedding_scroll == true && get_theme_mod( 'nikah_wedding_hide_show_scroll',false) != true){
    	$nikah_wedding_custom_css .='.scrollup i{';
			$nikah_wedding_custom_css .='display:none;';
		$nikah_wedding_custom_css .='} ';
	}
    if($nikah_wedding_scroll == true){
    	$nikah_wedding_custom_css .='@media screen and (max-width:575px) {';
		$nikah_wedding_custom_css .='.scrollup i{';
			$nikah_wedding_custom_css .='display:block;';
		$nikah_wedding_custom_css .='} }';
	}else if($nikah_wedding_scroll == false){
		$nikah_wedding_custom_css .='@media screen and (max-width:575px){';
		$nikah_wedding_custom_css .='.scrollup i{';
			$nikah_wedding_custom_css .='display:none;';
		$nikah_wedding_custom_css .='} }';
	}

	// Copyright top-bottom padding setting 
	$nikah_wedding_copyright_top_bottom_padding = get_theme_mod('nikah_wedding_copyright_top_bottom_padding');
	if($nikah_wedding_copyright_top_bottom_padding != false){
		$nikah_wedding_custom_css .='.copyright{';
			$nikah_wedding_custom_css .='padding-top: '.esc_attr($nikah_wedding_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($nikah_wedding_copyright_top_bottom_padding).'px;';
		$nikah_wedding_custom_css .='}';
	}

	$nikah_wedding_footer_text_font_size = get_theme_mod('nikah_wedding_footer_text_font_size', 16);
	$nikah_wedding_custom_css .='.site-info{';
		$nikah_wedding_custom_css .='font-size: '.esc_attr($nikah_wedding_footer_text_font_size).'px;';
	$nikah_wedding_custom_css .='}';

	// Slider Height 
	$nikah_wedding_slider_height_option = get_theme_mod('nikah_wedding_slider_height_option');
	if($nikah_wedding_slider_height_option != false){
		$nikah_wedding_custom_css .='#slider img{';
			$nikah_wedding_custom_css .='height: '.esc_attr($nikah_wedding_slider_height_option).'px;';
		$nikah_wedding_custom_css .='}';
	}

	// scroll to top setting
	$nikah_wedding_scroll_border_radius = get_theme_mod('nikah_wedding_scroll_border_radius');
	if($nikah_wedding_scroll_border_radius != false){
		$nikah_wedding_custom_css .='.scrollup i{';
			$nikah_wedding_custom_css .='border-radius: '.esc_attr($nikah_wedding_scroll_border_radius).'px;';
		$nikah_wedding_custom_css .='}';
	}

	$nikah_wedding_scroll_top_fontsize = get_theme_mod('nikah_wedding_scroll_top_fontsize');
	if($nikah_wedding_scroll_top_fontsize != false){
		$nikah_wedding_custom_css .='.scrollup i{';
			$nikah_wedding_custom_css .='font-size: '.esc_attr($nikah_wedding_scroll_top_fontsize).'px;';
		$nikah_wedding_custom_css .='}';
	}

	$nikah_wedding_scroll_top_bottom_padding = get_theme_mod('nikah_wedding_scroll_top_bottom_padding');
	$nikah_wedding_scroll_left_right_padding = get_theme_mod('nikah_wedding_scroll_left_right_padding');
	if($nikah_wedding_scroll_top_bottom_padding != false || $nikah_wedding_scroll_left_right_padding != false){
		$nikah_wedding_custom_css .='.scrollup i{';
			$nikah_wedding_custom_css .='padding-top: '.esc_attr($nikah_wedding_scroll_top_bottom_padding).'px; padding-bottom: '.esc_attr($nikah_wedding_scroll_top_bottom_padding).'px; padding-left: '.esc_attr($nikah_wedding_scroll_left_right_padding).'px; padding-right: '.esc_attr($nikah_wedding_scroll_left_right_padding).'px;';
		$nikah_wedding_custom_css .='}';
	}

	// comment settings
	$nikah_wedding_comment_button_text = get_theme_mod('nikah_wedding_comment_button_text', 'Post Comment');
	if($nikah_wedding_comment_button_text == ''){
		$nikah_wedding_custom_css .='#comments p.form-submit {';
			$nikah_wedding_custom_css .='display: none;';
		$nikah_wedding_custom_css .='}';
	}

	$nikah_wedding_comment_form_heading = get_theme_mod('nikah_wedding_comment_form_heading', 'Leave a Reply');
	if($nikah_wedding_comment_form_heading == ''){
		$nikah_wedding_custom_css .='#comments h2#reply-title {';
			$nikah_wedding_custom_css .='display: none;';
		$nikah_wedding_custom_css .='}';
	}

	$nikah_wedding_comment_form_size = get_theme_mod( 'nikah_wedding_comment_form_size',100);
	$nikah_wedding_custom_css .='#comments textarea{';
		$nikah_wedding_custom_css .='width: '.esc_attr($nikah_wedding_comment_form_size).'%;';
	$nikah_wedding_custom_css .='}';

	/*------------ Woocommerce Settings  --------------*/
	$nikah_wedding_shop_button_padding_top = get_theme_mod('nikah_wedding_shop_button_padding_top', 9);
	$nikah_wedding_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$nikah_wedding_custom_css .='padding-top: '.esc_attr($nikah_wedding_shop_button_padding_top).'px; padding-bottom: '.esc_attr($nikah_wedding_shop_button_padding_top).'px;';
	$nikah_wedding_custom_css .='}';

	$nikah_wedding_shop_button_padding_left = get_theme_mod('nikah_wedding_shop_button_padding_left', 16);
	$nikah_wedding_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$nikah_wedding_custom_css .='padding-left: '.esc_attr($nikah_wedding_shop_button_padding_left).'px; padding-right: '.esc_attr($nikah_wedding_shop_button_padding_left).'px;';
	$nikah_wedding_custom_css .='}';

	$nikah_wedding_shop_button_border_radius = get_theme_mod('nikah_wedding_shop_button_border_radius',0);
	$nikah_wedding_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$nikah_wedding_custom_css .='border-radius: '.esc_attr($nikah_wedding_shop_button_border_radius).'px;';
	$nikah_wedding_custom_css .='}';

	$nikah_wedding_display_related_products = get_theme_mod('nikah_wedding_display_related_products',true);
	if($nikah_wedding_display_related_products == false){
		$nikah_wedding_custom_css .='.related.products{';
			$nikah_wedding_custom_css .='display: none;';
		$nikah_wedding_custom_css .='}';
	}

	$nikah_wedding_shop_products_border = get_theme_mod('nikah_wedding_shop_products_border', true);
	if($nikah_wedding_shop_products_border == false){
		$nikah_wedding_custom_css .='.woocommerce .products li{';
			$nikah_wedding_custom_css .='border: none;';
		$nikah_wedding_custom_css .='}';
	}

	$nikah_wedding_shop_page_top_padding = get_theme_mod('nikah_wedding_shop_page_top_padding',10);
	$nikah_wedding_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$nikah_wedding_custom_css .='padding-top: '.esc_attr($nikah_wedding_shop_page_top_padding).'px !important; padding-bottom: '.esc_attr($nikah_wedding_shop_page_top_padding).'px !important;';
	$nikah_wedding_custom_css .='}';

	$nikah_wedding_shop_page_left_padding = get_theme_mod('nikah_wedding_shop_page_left_padding',10);
	$nikah_wedding_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$nikah_wedding_custom_css .='padding-left: '.esc_attr($nikah_wedding_shop_page_left_padding).'px !important; padding-right: '.esc_attr($nikah_wedding_shop_page_left_padding).'px !important;';
	$nikah_wedding_custom_css .='}';

	$nikah_wedding_shop_page_border_radius = get_theme_mod('nikah_wedding_shop_page_border_radius',0);
	$nikah_wedding_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$nikah_wedding_custom_css .='border-radius: '.esc_attr($nikah_wedding_shop_page_border_radius).'px;';
	$nikah_wedding_custom_css .='}';

	$nikah_wedding_shop_page_box_shadow = get_theme_mod('nikah_wedding_shop_page_box_shadow',0);
	$nikah_wedding_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$nikah_wedding_custom_css .='box-shadow: '.esc_attr($nikah_wedding_shop_page_box_shadow).'px '.esc_attr($nikah_wedding_shop_page_box_shadow).'px '.esc_attr($nikah_wedding_shop_page_box_shadow).'px #e4e4e4;';
	$nikah_wedding_custom_css .='}';

	// footer widget background
	$nikah_wedding_footer_widget_background = get_theme_mod('nikah_wedding_footer_widget_background', '#3c3c3b');
	$nikah_wedding_custom_css .='.site-footer{';
		$nikah_wedding_custom_css .='background-color: '.esc_attr($nikah_wedding_footer_widget_background).';';
	$nikah_wedding_custom_css .='}';

	$nikah_wedding_footer_widget_image = get_theme_mod('nikah_wedding_footer_widget_image');
	if($nikah_wedding_footer_widget_image != false){
		$nikah_wedding_custom_css .='.site-footer{';
			$nikah_wedding_custom_css .='background: url('.esc_attr($nikah_wedding_footer_widget_image).');';
		$nikah_wedding_custom_css .='}';
	}

	/*------------- Navigation Menu Font Size ------------------*/
	$nikah_wedding_navigation_menu_font_size = get_theme_mod('nikah_wedding_navigation_menu_font_size');{
		$nikah_wedding_custom_css .='.main-navigation a, .navigation-top a{';
			$nikah_wedding_custom_css .='font-size: '.esc_attr($nikah_wedding_navigation_menu_font_size).'px;';
		$nikah_wedding_custom_css .='}';
	}

	$nikah_wedding_theme_lay = get_theme_mod( 'nikah_wedding_menu_text_tranform','Default');
	if($nikah_wedding_theme_lay == 'Capitalize'){
		$nikah_wedding_custom_css .='.main-navigation a, .navigation-top a,.main-navigation ul ul a{';
			$nikah_wedding_custom_css .='text-transform:Capitalize;';
		$nikah_wedding_custom_css .='}';
	}

	$nikah_wedding_theme_lay = get_theme_mod( 'nikah_wedding_menu_font_weight','Default');
	if($nikah_wedding_theme_lay == 'Normal'){
		$nikah_wedding_custom_css .='.main-navigation a, .navigation-top a{';
			$nikah_wedding_custom_css .='font-weight: normal !important;';
		$nikah_wedding_custom_css .='}';
	}

	// site title font size option
	$nikah_wedding_site_title_font_size = get_theme_mod('nikah_wedding_site_title_font_size', 30);{
	$nikah_wedding_custom_css .='.logo h1, .site-title a{';
	$nikah_wedding_custom_css .='font-size: '.esc_attr($nikah_wedding_site_title_font_size).'px;';
		$nikah_wedding_custom_css .='}';
	}

	/*------------------ Background Skin Option  -------------------*/
	$nikah_wedding_theme_lay = get_theme_mod( 'nikah_wedding_background_image_type','Transparent');
    if($nikah_wedding_theme_lay == 'Background'){
		$nikah_wedding_custom_css .='.blogger, #sidebox .widget, .about-text, .related-posts .page-box, .woocommerce ul.products li.product, .woocommerce-page ul.products li.product, .background-img-skin, .pages-te, .woocommerce .woocommerce-ordering, .love-story-box{';
			$nikah_wedding_custom_css .='background-color: #fff;';
		$nikah_wedding_custom_css .='}';
	}else if($nikah_wedding_theme_lay == 'Transparent'){
		$nikah_wedding_custom_css .='{';
			$nikah_wedding_custom_css .='background-color: transparent;';
		$nikah_wedding_custom_css .='}';
	}

	// slider overlay
	$nikah_wedding_show_slider_image_overlay = get_theme_mod('nikah_wedding_show_slider_image_overlay', true);
	if($nikah_wedding_show_slider_image_overlay == false){
		$nikah_wedding_custom_css .='#slider img{';
			$nikah_wedding_custom_css .='opacity:1;';
		$nikah_wedding_custom_css .='}';
	} 
	$nikah_wedding_color_slider_image_overlay = get_theme_mod('nikah_wedding_color_slider_image_overlay', true);
	if($nikah_wedding_show_slider_image_overlay != false){
		$nikah_wedding_custom_css .='#slider{';
			$nikah_wedding_custom_css .='background-color: '.esc_attr($nikah_wedding_color_slider_image_overlay).';';
		$nikah_wedding_custom_css .='}';
	}











