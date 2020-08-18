<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_pet_shop_first_color = get_theme_mod('vw_pet_shop_first_color');

	$vw_pet_shop_custom_css = '';

	if($vw_pet_shop_first_color != false){
		$vw_pet_shop_custom_css .='.sidebar .tagcloud a:hover,.pagination span, .pagination a,.search-box button, .logo_outer, input[type="submit"], .slider .carousel-control-prev-icon i:hover, .slider .carousel-control-next-icon i:hover, .slider .more-btn a:hover, .woocommerce span.onsale:hover, .scrollup i, .sidebar .custom-social-icons a i:hover, .footer .custom-social-icons a i:hover, .sidebar input[type="submit"], .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button, .woocommerce-page .woocommerce-error .button, .woocommerce-page .woocommerce-info .button, .woocommerce-page .woocommerce-message .button, .hvr-sweep-to-right:before, .yearwrap, .woocommerce a.remove:hover, .footer .widget_price_filter .ui-slider .ui-slider-range, .footer .widget_price_filter .ui-slider .ui-slider-handle, .footer .woocommerce-product-search button, .sidebar .woocommerce-product-search button, .sidebar .widget_price_filter .ui-slider .ui-slider-range, .sidebar .widget_price_filter .ui-slider .ui-slider-handle, .footer a.custom_read_more:hover, .sidebar a.custom_read_more:hover, .toggle-nav i{';
			$vw_pet_shop_custom_css .='background-color: '.esc_html($vw_pet_shop_first_color).';';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_first_color != false){
		$vw_pet_shop_custom_css .='#comments input[type="submit"].submit{';
			$vw_pet_shop_custom_css .='background-color: '.esc_html($vw_pet_shop_first_color).'!important;';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_first_color != false){
		$vw_pet_shop_custom_css .='.sidebar td#prev a,.sidebar td,.sidebar caption,.sidebar th,a, .footer h3, .sidebar h3, .woocommerce-message::before, .blogbutton-small, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .footer li a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a , a.button, .logo-responsive p.site-title a, .logo-responsive h1.site-title a, .footer a.custom_read_more, .sidebar a.custom_read_more{';
			$vw_pet_shop_custom_css .='color: '.esc_html($vw_pet_shop_first_color).';';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_first_color != false){
		$vw_pet_shop_custom_css .='.woocommerce a.remove{';
			$vw_pet_shop_custom_css .='color: '.esc_html($vw_pet_shop_first_color).'!important;';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_first_color != false){
		$vw_pet_shop_custom_css .='.footer .tagcloud a:hover,.blogbutton-small, a.button, .footer a.custom_read_more, .sidebar a.custom_read_more{';
			$vw_pet_shop_custom_css .='border-color: '.esc_html($vw_pet_shop_first_color).'!important;';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_first_color != false){
		$vw_pet_shop_custom_css .='.logo_outer:after, .woocommerce-message{';
			$vw_pet_shop_custom_css .='border-top-color: '.esc_html($vw_pet_shop_first_color).';';
		$vw_pet_shop_custom_css .='}';
	}

	/*---------------------------Second highlight color-------------------*/

	$vw_pet_shop_second_color = get_theme_mod('vw_pet_shop_second_color');

	if($vw_pet_shop_second_color != false){
		$vw_pet_shop_custom_css .='.pagination a:hover,.pagination .current,.top_bar, .slider .carousel-control-prev-icon i, .slider .carousel-control-next-icon i, .slider .more-btn a, .woocommerce span.onsale, .woocommerce ul.products li.product .button, .sidebar .custom-social-icons a i, .footer .custom-social-icons a i, .footer-2, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, nav.woocommerce-MyAccount-navigation ul li, .date-monthwrap, #comments a.comment-reply-link{';
			$vw_pet_shop_custom_css .='background-color: '.esc_html($vw_pet_shop_second_color).';';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_second_color != false){
		$vw_pet_shop_custom_css .='.sidebar ul li::before, .sidebar ul.cart_list li::before, .sidebar ul.product_list_widget li::before{';
			$vw_pet_shop_custom_css .='background-color: '.esc_html($vw_pet_shop_second_color).'!important;';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_second_color != false){
		$vw_pet_shop_custom_css .='#header .main-navigation ul a:hover{';
			$vw_pet_shop_custom_css .='color: '.esc_html($vw_pet_shop_second_color).';';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_second_color != false){
		$vw_pet_shop_custom_css .='.woocommerce li.product{';
			$vw_pet_shop_custom_css .='border-color: '.esc_html($vw_pet_shop_second_color).';';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_second_color != false){
		$vw_pet_shop_custom_css .='.main-navigation ul ul{';
			$vw_pet_shop_custom_css .='border-top-color: '.esc_html($vw_pet_shop_second_color).';';
		$vw_pet_shop_custom_css .='}';
	}
	if($vw_pet_shop_second_color != false){
		$vw_pet_shop_custom_css .='.main-navigation ul ul{';
			$vw_pet_shop_custom_css .='border-bottom-color: '.esc_html($vw_pet_shop_second_color).';';
		$vw_pet_shop_custom_css .='}';
	}
	
	/*---------------------------Width Layout -------------------*/

	$vw_pet_shop_theme_lay = get_theme_mod( 'vw_pet_shop_width_option','Full Width');
    if($vw_pet_shop_theme_lay == 'Boxed'){
		$vw_pet_shop_custom_css .='body{';
			$vw_pet_shop_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_pet_shop_custom_css .='}';
	}else if($vw_pet_shop_theme_lay == 'Wide Width'){
		$vw_pet_shop_custom_css .='body{';
			$vw_pet_shop_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_pet_shop_custom_css .='}';
	}else if($vw_pet_shop_theme_lay == 'Full Width'){
		$vw_pet_shop_custom_css .='body{';
			$vw_pet_shop_custom_css .='max-width: 100%;';
		$vw_pet_shop_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_pet_shop_theme_lay = get_theme_mod( 'vw_pet_shop_slider_opacity_color','0.5');
	if($vw_pet_shop_theme_lay == '0'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.1'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.1';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.2'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.2';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.3'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.3';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.4'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.4';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.5'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.5';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.6'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.6';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.7'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.7';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.8'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.8';
		$vw_pet_shop_custom_css .='}';
		}else if($vw_pet_shop_theme_lay == '0.9'){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='opacity:0.9';
		$vw_pet_shop_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$vw_pet_shop_theme_lay = get_theme_mod( 'vw_pet_shop_slider_content_option','Left');
    if($vw_pet_shop_theme_lay == 'Left'){
		$vw_pet_shop_custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$vw_pet_shop_custom_css .='text-align:left; left:17%; right:45%;';
		$vw_pet_shop_custom_css .='}';
	}else if($vw_pet_shop_theme_lay == 'Center'){
		$vw_pet_shop_custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$vw_pet_shop_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_pet_shop_custom_css .='}';
	}else if($vw_pet_shop_theme_lay == 'Right'){
		$vw_pet_shop_custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$vw_pet_shop_custom_css .='text-align:right; left:45%; right:17%;';
		$vw_pet_shop_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_pet_shop_slider_height = get_theme_mod('vw_pet_shop_slider_height');
	if($vw_pet_shop_slider_height != false){
		$vw_pet_shop_custom_css .='.slider img{';
			$vw_pet_shop_custom_css .='height: '.esc_html($vw_pet_shop_slider_height).';';
		$vw_pet_shop_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_pet_shop_theme_lay = get_theme_mod( 'vw_pet_shop_blog_layout_option','Default');
    if($vw_pet_shop_theme_lay == 'Default'){
		$vw_pet_shop_custom_css .='.post-main-box{';
			$vw_pet_shop_custom_css .='';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.post-main-box h2{';
			$vw_pet_shop_custom_css .='padding:0;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.new-text p{';
			$vw_pet_shop_custom_css .='margin-top:10px;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.blogbutton-small{';
			$vw_pet_shop_custom_css .='margin: 0; display: inline-block;';
		$vw_pet_shop_custom_css .='}';
	}else if($vw_pet_shop_theme_lay == 'Center'){
		$vw_pet_shop_custom_css .='.post-main-box, .post-main-box h2, .new-text p, .metabox, .content-bttn{';
			$vw_pet_shop_custom_css .='text-align:center;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.new-text p{';
			$vw_pet_shop_custom_css .='margin-top:0;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.metabox{';
			$vw_pet_shop_custom_css .='background: #eeeeee; padding: 10px; margin-bottom: 15px;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.blogbutton-small{';
			$vw_pet_shop_custom_css .='margin: 0; display: inline-block;';
		$vw_pet_shop_custom_css .='}';
	}else if($vw_pet_shop_theme_lay == 'Left'){
		$vw_pet_shop_custom_css .='.post-main-box, .post-main-box h2, .new-text p, .content-bttn{';
			$vw_pet_shop_custom_css .='text-align:Left;';
		$vw_pet_shop_custom_css .='}';
		$vw_pet_shop_custom_css .='.metabox{';
			$vw_pet_shop_custom_css .='background: #eeeeee; padding: 10px; margin-bottom: 15px;';
		$vw_pet_shop_custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$vw_pet_shop_resp_topbar = get_theme_mod( 'vw_pet_shop_resp_topbar_hide_show',true);
    if($vw_pet_shop_resp_topbar == true){
    	$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.top_bar{';
			$vw_pet_shop_custom_css .='display:block;';
		$vw_pet_shop_custom_css .='} }';
	}else if($vw_pet_shop_resp_topbar == false){
		$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.top_bar{';
			$vw_pet_shop_custom_css .='display:none;';
		$vw_pet_shop_custom_css .='} }';
	}

	$vw_pet_shop_resp_stickyheader = get_theme_mod( 'vw_pet_shop_stickyheader_hide_show',false);
    if($vw_pet_shop_resp_stickyheader == true){
    	$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.header-fixed{';
			$vw_pet_shop_custom_css .='display:block;';
		$vw_pet_shop_custom_css .='} }';
	}else if($vw_pet_shop_resp_stickyheader == false){
		$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.header-fixed{';
			$vw_pet_shop_custom_css .='display:none;';
		$vw_pet_shop_custom_css .='} }';
	}

	$vw_pet_shop_resp_slider = get_theme_mod( 'vw_pet_shop_resp_slider_hide_show',false);
    if($vw_pet_shop_resp_slider == true){
    	$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.slider{';
			$vw_pet_shop_custom_css .='display:block;';
		$vw_pet_shop_custom_css .='} }';
	}else if($vw_pet_shop_resp_slider == false){
		$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.slider{';
			$vw_pet_shop_custom_css .='display:none;';
		$vw_pet_shop_custom_css .='} }';
	}

	$vw_pet_shop_resp_metabox = get_theme_mod( 'vw_pet_shop_metabox_hide_show',true);
    if($vw_pet_shop_resp_metabox == true){
    	$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.datebox, .metabox{';
			$vw_pet_shop_custom_css .='display:block;';
		$vw_pet_shop_custom_css .='} }';
	}else if($vw_pet_shop_resp_metabox == false){
		$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.datebox, .metabox{';
			$vw_pet_shop_custom_css .='display:none;';
		$vw_pet_shop_custom_css .='} }';
	}

	$vw_pet_shop_resp_sidebar = get_theme_mod( 'vw_pet_shop_sidebar_hide_show',true);
    if($vw_pet_shop_resp_sidebar == true){
    	$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.sidebar{';
			$vw_pet_shop_custom_css .='display:block;';
		$vw_pet_shop_custom_css .='} }';
	}else if($vw_pet_shop_resp_sidebar == false){
		$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.sidebar{';
			$vw_pet_shop_custom_css .='display:none;';
		$vw_pet_shop_custom_css .='} }';
	}

	$vw_pet_shop_resp_scroll_top = get_theme_mod( 'vw_pet_shop_resp_scroll_top_hide_show',true);
    if($vw_pet_shop_resp_scroll_top == true){
    	$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='display:block;';
		$vw_pet_shop_custom_css .='} }';
	}else if($vw_pet_shop_resp_scroll_top == false){
		$vw_pet_shop_custom_css .='@media screen and (max-width:575px) {';
		$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='display:none !important;';
		$vw_pet_shop_custom_css .='} }';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_pet_shop_topbar_padding_top_bottom = get_theme_mod('vw_pet_shop_topbar_padding_top_bottom');
	if($vw_pet_shop_topbar_padding_top_bottom != false){
		$vw_pet_shop_custom_css .='.top_bar{';
			$vw_pet_shop_custom_css .='padding-top: '.esc_html($vw_pet_shop_topbar_padding_top_bottom).'; padding-bottom: '.esc_html($vw_pet_shop_topbar_padding_top_bottom).';';
		$vw_pet_shop_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$vw_pet_shop_search_padding_top_bottom = get_theme_mod('vw_pet_shop_search_padding_top_bottom');
	$vw_pet_shop_search_padding_left_right = get_theme_mod('vw_pet_shop_search_padding_left_right');
	$vw_pet_shop_search_font_size = get_theme_mod('vw_pet_shop_search_font_size');
	$vw_pet_shop_search_border_radius = get_theme_mod('vw_pet_shop_search_border_radius');
	if($vw_pet_shop_search_padding_top_bottom != false || $vw_pet_shop_search_padding_left_right != false || $vw_pet_shop_search_font_size != false || $vw_pet_shop_search_border_radius != false){
		$vw_pet_shop_custom_css .='.contact_details ul li.search-box span, .search-box span i{';
			$vw_pet_shop_custom_css .='padding-top: '.esc_html($vw_pet_shop_search_padding_top_bottom).'; padding-bottom: '.esc_html($vw_pet_shop_search_padding_top_bottom).';padding-left: '.esc_html($vw_pet_shop_search_padding_left_right).';padding-right: '.esc_html($vw_pet_shop_search_padding_left_right).';font-size: '.esc_html($vw_pet_shop_search_font_size).';border-radius: '.esc_html($vw_pet_shop_search_border_radius).'px;';
		$vw_pet_shop_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_pet_shop_button_padding_top_bottom = get_theme_mod('vw_pet_shop_button_padding_top_bottom');
	$vw_pet_shop_button_padding_left_right = get_theme_mod('vw_pet_shop_button_padding_left_right');
	if($vw_pet_shop_button_padding_top_bottom != false || $vw_pet_shop_button_padding_left_right != false){
		$vw_pet_shop_custom_css .='.blogbutton-small{';
			$vw_pet_shop_custom_css .='padding-top: '.esc_html($vw_pet_shop_button_padding_top_bottom).'; padding-bottom: '.esc_html($vw_pet_shop_button_padding_top_bottom).';padding-left: '.esc_html($vw_pet_shop_button_padding_left_right).';padding-right: '.esc_html($vw_pet_shop_button_padding_left_right).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_button_border_radius = get_theme_mod('vw_pet_shop_button_border_radius');
	if($vw_pet_shop_button_border_radius != false){
		$vw_pet_shop_custom_css .='.blogbutton-small,.hvr-sweep-to-right:before{';
			$vw_pet_shop_custom_css .='border-radius: '.esc_html($vw_pet_shop_button_border_radius).'px;';
		$vw_pet_shop_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_pet_shop_copyright_alingment = get_theme_mod('vw_pet_shop_copyright_alingment');
	if($vw_pet_shop_copyright_alingment != false){
		$vw_pet_shop_custom_css .='.copyright p{';
			$vw_pet_shop_custom_css .='text-align: '.esc_html($vw_pet_shop_copyright_alingment).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_copyright_padding_top_bottom = get_theme_mod('vw_pet_shop_copyright_padding_top_bottom');
	if($vw_pet_shop_copyright_padding_top_bottom != false){
		$vw_pet_shop_custom_css .='.footer-2{';
			$vw_pet_shop_custom_css .='padding-top: '.esc_html($vw_pet_shop_copyright_padding_top_bottom).'; padding-bottom: '.esc_html($vw_pet_shop_copyright_padding_top_bottom).';';
		$vw_pet_shop_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_pet_shop_scroll_to_top_font_size = get_theme_mod('vw_pet_shop_scroll_to_top_font_size');
	if($vw_pet_shop_scroll_to_top_font_size != false){
		$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='font-size: '.esc_html($vw_pet_shop_scroll_to_top_font_size).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_scroll_to_top_padding = get_theme_mod('vw_pet_shop_scroll_to_top_padding');
	$vw_pet_shop_scroll_to_top_padding = get_theme_mod('vw_pet_shop_scroll_to_top_padding');
	if($vw_pet_shop_scroll_to_top_padding != false){
		$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='padding-top: '.esc_html($vw_pet_shop_scroll_to_top_padding).';padding-bottom: '.esc_html($vw_pet_shop_scroll_to_top_padding).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_scroll_to_top_width = get_theme_mod('vw_pet_shop_scroll_to_top_width');
	if($vw_pet_shop_scroll_to_top_width != false){
		$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='width: '.esc_html($vw_pet_shop_scroll_to_top_width).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_scroll_to_top_height = get_theme_mod('vw_pet_shop_scroll_to_top_height');
	if($vw_pet_shop_scroll_to_top_height != false){
		$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='height: '.esc_html($vw_pet_shop_scroll_to_top_height).';';
		$vw_pet_shop_custom_css .='}';
	}

	$vw_pet_shop_scroll_to_top_border_radius = get_theme_mod('vw_pet_shop_scroll_to_top_border_radius');
	if($vw_pet_shop_scroll_to_top_border_radius != false){
		$vw_pet_shop_custom_css .='.scrollup i{';
			$vw_pet_shop_custom_css .='border-radius: '.esc_html($vw_pet_shop_scroll_to_top_border_radius).'px;';
		$vw_pet_shop_custom_css .='}';
	}
