<?php

	$pest_control_treatment_custom_css= "";

	/*---------------------------Width Layout -------------------*/

	$pest_control_treatment_theme_lay = get_theme_mod( 'pest_control_treatment_width_option','Full Width');
    if($pest_control_treatment_theme_lay == 'Boxed'){
		$pest_control_treatment_custom_css .='body{';
			$pest_control_treatment_custom_css .='max-width: 1140px; width: 100%; margin-right: auto; margin-left: auto;';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='.scrollup i{';
			$pest_control_treatment_custom_css .='right: 100px;';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='.row.outer-logo{';
			$pest_control_treatment_custom_css .='margin-left: 0px;';
		$pest_control_treatment_custom_css .='}';
	}else if($pest_control_treatment_theme_lay == 'Wide Width'){
		$pest_control_treatment_custom_css .='body{';
			$pest_control_treatment_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='.scrollup i{';
			$pest_control_treatment_custom_css .='right: 30px;';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='.row.outer-logo{';
			$pest_control_treatment_custom_css .='margin-left: 0px;';
		$pest_control_treatment_custom_css .='}';
	}else if($pest_control_treatment_theme_lay == 'Full Width'){
		$pest_control_treatment_custom_css .='body{';
			$pest_control_treatment_custom_css .='max-width: 100%;';
		$pest_control_treatment_custom_css .='}';
	}

	/*-------------------- Global Color -------------------*/

	$pest_control_treatment_first_color = get_theme_mod('pest_control_treatment_first_color');

	if($pest_control_treatment_first_color != false){
		$pest_control_treatment_custom_css .='.top-bar, .tickets-btn a, #banner .more-btn a, #banner .carousel-control-next i, #banner .carousel-control-prev i,#comments a.comment-reply-link,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.pro-button a, .woocommerce a.added_to_cart.wc-forward, #preloader, #footer .tagcloud a:hover, #footer input[type="submit"], #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .scrollup i, .breadcrumbs span, #sidebar .custom-social-icons a,  #sidebar .widget_block h3, #sidebar .tagcloud a:hover, .pagination a:hover, .pagination .current, .woocommerce span.onsale, nav.woocommerce-MyAccount-navigation ul li,.breadcrumbs a,.breadcrumbs span,.post-categories li a, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a,.topbar-social-icon i:hover,.read-more a,.year-text,.author-section .read-more a:hover, #main-product-section .add_to_cart_button:hover, .main-product-section .wishlist_view:hover,#sidebar .custom-social-icons a:hover, #footer input[type="submit"]:hover,#sidebar .wp-block-search .wp-block-search__button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .widget_product_search button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce a.added_to_cart.wc-forward:hover,.copyright .custom-social-icons i:hover,.top-header,.large-masquito-icon i,.feature-box1:hover .icon i,#footer-2{';
			$pest_control_treatment_custom_css .='background-color: '.esc_attr($pest_control_treatment_first_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	if($pest_control_treatment_first_color != false){
		$pest_control_treatment_custom_css .='.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button,.wc-block-components-order-summary-item__quantity,.wp-block-woocommerce-cart .wc-block-cart__submit-button:hover, .wc-block-components-checkout-place-order-button:hover,#sidebar h3:before, #sidebar .widget_block h3:before, #sidebar h2:before, #sidebar label.wp-block-search__label:before,#sidebar ul li::before,.wc-block-grid__product-onsale,.wp-block-button__link,#footer ul li::before,.single-product .yith-wcwl-wishlistexistsbrowse:hover, .shop-page .yith-wcwl-wishlistexistsbrowse:hover, a.button.wc-forward:hover, .woocommerce a.add_to_wishlist.single_add_to_wishlist:hover, .woocommerce .yith-wcwl-wishlistexistsbrowse a:hover,.feature-box1:hover .icon i,.wp-block-woocommerce-cart .wc-block-components-product-badge{';
			$pest_control_treatment_custom_css .='background-color: '.esc_attr($pest_control_treatment_first_color).'!important;';
		$pest_control_treatment_custom_css .='}';
	}
	if($pest_control_treatment_first_color != false){
		$pest_control_treatment_custom_css .='p.site-title a:hover, .logo h1 a:hover, .tickets-btn a:hover, #banner .more-btn a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.widget_product_search button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce a.added_to_cart.wc-forward:hover,.main-navigation ul ul a:focus, .main-navigation ul ul a:hover, #banner .carousel-control-next i:hover, #banner .carousel-control-prev i:hover, #banner .inner_carousel h1 a, #events-section h2, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .post-main-box:hover h3 a,#sidebar ul li a:hover, #footer li a:hover,.post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.post-navigation a:hover,.post-navigation a:focus, .post-navigation span.meta-nav:hover, .woocommerce-message::before,.woocommerce-info::before,.banner-topbar h2 span,.post-para,#main-product-section .product-para,.product-name a,.wp-block-latest-comments__comment-link,.wp-block-latest-comments__comment-author,.custom_details i,.entry-content a,.logged-in-as a,#footer p:hover{';
			$pest_control_treatment_custom_css .='color: '.esc_attr($pest_control_treatment_first_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	if($pest_control_treatment_first_color != false){
		$pest_control_treatment_custom_css .='.tags-bg a:hover,.wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote{';
			$pest_control_treatment_custom_css .='color: '.esc_attr($pest_control_treatment_first_color).'!important;';
		$pest_control_treatment_custom_css .='}';
	}

	if($pest_control_treatment_first_color != false){
		$pest_control_treatment_custom_css .='#footer .tagcloud a:hover,.wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote,.main-product-section:hover,#sidebar h3:before, #sidebar .widget_block h3:before, #sidebar h2:before, #sidebar label.wp-block-search__label:before,.post-main-box, .grid-post-main-box,#sidebar .widget,.header-fixed,.wp-block-woocommerce-cart.alignwide .wc-block-grid__products li:hover,.woocommerce ul.products li.product:hover,.main-navigation ul ul{';
			$pest_control_treatment_custom_css .='border-color: '.esc_attr($pest_control_treatment_first_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	if($pest_control_treatment_first_color != false){
		$pest_control_treatment_custom_css .='.woocommerce-message,.woocommerce-info{';
			$pest_control_treatment_custom_css .='border-top-color: '.esc_attr($pest_control_treatment_first_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_custom_css .='@media screen and (max-width:1000px) {';
		if($pest_control_treatment_first_color != false){
			$pest_control_treatment_custom_css .='.main-navigation a:hover{
				color:'.esc_attr($pest_control_treatment_first_color).' !important;
			}';
		}
	$pest_control_treatment_custom_css .='}';

	/*-------------------- second Highlight Color -------------------*/

	$pest_control_treatment_second_color = get_theme_mod('pest_control_treatment_second_color');

	if($pest_control_treatment_second_color != false){
		$pest_control_treatment_custom_css .='.read-more a, .banner-image:after,.banner-social-icon i:hover,.icon-tab .tablinks,#about-sec .owl-dots button.owl-dot.active,.slider-btn a,.sponser-img-icon i,#sponsor-section .owl-dots button.owl-dot.active,#footer .custom-social-icons a:hover,#comments input[type="submit"], #comments a.comment-reply-link,.more-btn a,a.added_to_cart.wc-forward:hover, header.woocommerce-Address-title.title a:hover, #tag-cloud-sec .tag-cloud-link:hover, .wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover:hover{';
			$pest_control_treatment_custom_css .='background: '.esc_attr($pest_control_treatment_second_color).'!important;';
		$pest_control_treatment_custom_css .='}';
	}

	if($pest_control_treatment_second_color != false){
		$pest_control_treatment_custom_css .='.feature-box1:hover h4 a{';
			$pest_control_treatment_custom_css .='color: '.esc_attr($pest_control_treatment_second_color).' !important;';
		$pest_control_treatment_custom_css .='}';
	}

	if($pest_control_treatment_second_color != false){
		$pest_control_treatment_custom_css .='.main-navigation ul li.current_page_item a{';
			$pest_control_treatment_custom_css .='border-top-color: '.esc_attr($pest_control_treatment_second_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	if($pest_control_treatment_second_color != false){
		$pest_control_treatment_custom_css .='.icon-tab .tablinks{';
			$pest_control_treatment_custom_css .='border-color: '.esc_attr($pest_control_treatment_second_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	if($pest_control_treatment_first_color != false){
		$pest_control_treatment_custom_css .='{';
			$pest_control_treatment_custom_css .='box-shadow: inset 0 0 0 2em '.esc_attr($pest_control_treatment_first_color).'!important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_custom_css .='}';

	/*--------------------------- Slider Opacity -------------------*/

	$pest_control_treatment_theme_lay = get_theme_mod( 'pest_control_treatment_banner_opacity_color','0.6');
	if($pest_control_treatment_theme_lay == '0'){
		$pest_control_treatment_custom_css .='.banner-img:before{';
			$pest_control_treatment_custom_css .='opacity:0';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.1'){
		$pest_control_treatment_custom_css .='.banner-img:before{';
			$pest_control_treatment_custom_css .='opacity:0.1';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.2'){
		$pest_control_treatment_custom_css .='.banner-img:before{';
			$pest_control_treatment_custom_css .='opacity:0.2';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.3'){
		$pest_control_treatment_custom_css .='.banner-img:before{';
			$pest_control_treatment_custom_css .='opacity:0.3';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.4'){
		$pest_control_treatment_custom_css .='.banner-img:before{';
			$pest_control_treatment_custom_css .='opacity:0.4';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.5'){
		$pest_control_treatment_custom_css .='.banner-img:before{';
			$pest_control_treatment_custom_css .='opacity:0.5';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.6'){
		$pest_control_treatment_custom_css .='.banner-img:before{';
			$pest_control_treatment_custom_css .='opacity:0.6';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.7'){
		$pest_control_treatment_custom_css .='.banner-img:before{';
			$pest_control_treatment_custom_css .='opacity:0.7';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.8'){
		$pest_control_treatment_custom_css .='.banner-img:before{';
			$pest_control_treatment_custom_css .='opacity:0.8';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.9'){
		$pest_control_treatment_custom_css .='.banner-img:before{';
			$pest_control_treatment_custom_css .='opacity:0.9';
		$pest_control_treatment_custom_css .='}';
	}

	/*---------------------- Slider Image Overlay ------------------------*/

	$pest_control_treatment_banner_background_color = get_theme_mod('pest_control_treatment_banner_background_color', true);
	if($pest_control_treatment_banner_background_color != false){
		$pest_control_treatment_custom_css .='.mask-img-section{';
			$pest_control_treatment_custom_css .='background-color: '.esc_attr($pest_control_treatment_banner_background_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$pest_control_treatment_sticky_header_padding = get_theme_mod('pest_control_treatment_sticky_header_padding');
	if($pest_control_treatment_sticky_header_padding != false){
		$pest_control_treatment_custom_css .='.header-fixed{';
			$pest_control_treatment_custom_css .='padding: '.esc_attr($pest_control_treatment_sticky_header_padding).';';
		$pest_control_treatment_custom_css .='}';
	}

	/*------------- Slider ------------*/

	$pest_control_treatment_slider = get_theme_mod('pest_control_treatment_banner_hide_show', true);
	if($pest_control_treatment_slider == false){
		$pest_control_treatment_custom_css .='.page-template-custom-home-page .home-page-header{';
			$pest_control_treatment_custom_css .='position: static;';
		$pest_control_treatment_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$pest_control_treatment_resp_slider = get_theme_mod( 'pest_control_treatment_resp_banner_hide_show',true);
	if($pest_control_treatment_resp_slider == true && get_theme_mod( 'pest_control_treatment_banner_hide_show', true) == false){
    	$pest_control_treatment_custom_css .='#banner{';
			$pest_control_treatment_custom_css .='display:none;';
		$pest_control_treatment_custom_css .='} ';
	}
    if($pest_control_treatment_resp_slider == true){
    	$pest_control_treatment_custom_css .='@media screen and (max-width:575px) {';
		$pest_control_treatment_custom_css .='#banner{';
			$pest_control_treatment_custom_css .='display:block;';
		$pest_control_treatment_custom_css .='} }';
	}else if($pest_control_treatment_resp_slider == false){
		$pest_control_treatment_custom_css .='@media screen and (max-width:575px) {';
		$pest_control_treatment_custom_css .='#banner{';
			$pest_control_treatment_custom_css .='display:none;';
		$pest_control_treatment_custom_css .='} }';
		$pest_control_treatment_custom_css .='@media screen and (max-width:575px){';
		$pest_control_treatment_custom_css .='.page-template-custom-home-page .home-page-header{';
			$pest_control_treatment_custom_css .='position: static;';
		$pest_control_treatment_custom_css .='} }';
	}

	$pest_control_treatment_resp_sidebar = get_theme_mod( 'pest_control_treatment_sidebar_hide_show',true);
    if($pest_control_treatment_resp_sidebar == true){
    	$pest_control_treatment_custom_css .='@media screen and (max-width:575px) {';
		$pest_control_treatment_custom_css .='#sidebar{';
			$pest_control_treatment_custom_css .='display:block;';
		$pest_control_treatment_custom_css .='} }';
	}else if($pest_control_treatment_resp_sidebar == false){
		$pest_control_treatment_custom_css .='@media screen and (max-width:575px) {';
		$pest_control_treatment_custom_css .='#sidebar{';
			$pest_control_treatment_custom_css .='display:none;';
		$pest_control_treatment_custom_css .='} }';
	}

	$pest_control_treatment_resp_scroll_top = get_theme_mod( 'pest_control_treatment_resp_scroll_top_hide_show',true);
	if($pest_control_treatment_resp_scroll_top == true && get_theme_mod( 'pest_control_treatment_hide_show_scroll',true) == false){
    	$pest_control_treatment_custom_css .='.scrollup i{';
			$pest_control_treatment_custom_css .='visibility:hidden !important;';
		$pest_control_treatment_custom_css .='} ';
	}
    if($pest_control_treatment_resp_scroll_top == true){
    	$pest_control_treatment_custom_css .='@media screen and (max-width:575px) {';
		$pest_control_treatment_custom_css .='.scrollup i{';
			$pest_control_treatment_custom_css .='visibility:visible !important;';
		$pest_control_treatment_custom_css .='} }';
	}else if($pest_control_treatment_resp_scroll_top == false){
		$pest_control_treatment_custom_css .='@media screen and (max-width:575px){';
		$pest_control_treatment_custom_css .='.scrollup i{';
			$pest_control_treatment_custom_css .='visibility:hidden !important;';
		$pest_control_treatment_custom_css .='} }';
	}

	$pest_control_treatment_resp_stickyheader = get_theme_mod( 'pest_control_treatment_stickyheader_hide_show',false);
	if($pest_control_treatment_resp_stickyheader == true && get_theme_mod( 'pest_control_treatment_sticky_header',false) != true){
    	$pest_control_treatment_custom_css .='.header-fixed{';
			$pest_control_treatment_custom_css .='position:static;';
		$pest_control_treatment_custom_css .='} ';
	}
    if($pest_control_treatment_resp_stickyheader == true){
    	$pest_control_treatment_custom_css .='@media screen and (max-width:575px) {';
		$pest_control_treatment_custom_css .='.header-fixed{';
			$pest_control_treatment_custom_css .='position:fixed;';
		$pest_control_treatment_custom_css .='} }';
	}else if($pest_control_treatment_resp_stickyheader == false){
		$pest_control_treatment_custom_css .='@media screen and (max-width:575px){';
		$pest_control_treatment_custom_css .='.header-fixed{';
			$pest_control_treatment_custom_css .='position:static;';
		$pest_control_treatment_custom_css .='} }';
	}

	$pest_control_treatment_responsive_preloader_hide = get_theme_mod('pest_control_treatment_responsive_preloader_hide',false);
	if($pest_control_treatment_responsive_preloader_hide == true && get_theme_mod('pest_control_treatment_loader_enable',false) == false){
		$pest_control_treatment_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$pest_control_treatment_custom_css .='display:none !important;';
		$pest_control_treatment_custom_css .='} }';
	}

	if($pest_control_treatment_responsive_preloader_hide == false){
		$pest_control_treatment_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$pest_control_treatment_custom_css .='display:none !important;';
		$pest_control_treatment_custom_css .='} }';
	}

	// top bar show /hide responsive media

	$pest_control_treatment_responsive_topbar_hide = get_theme_mod('pest_control_treatment_responsive_topbar_hide',true);
	if($pest_control_treatment_responsive_topbar_hide == true && get_theme_mod('pest_control_treatment_topbar_hide_show',true) == false){
		$pest_control_treatment_custom_css .='@media screen and (min-width:575px){
			.topbar-text1,.phone-call,.read-more1{';
			$pest_control_treatment_custom_css .='display:none !important;';
		$pest_control_treatment_custom_css .='} }';
	}

	if($pest_control_treatment_responsive_topbar_hide == true){
		$pest_control_treatment_custom_css .='@media screen and (max-width:575px){
			.topbar-text,.phone-call,.read-more{';
			$pest_control_treatment_custom_css .='display:none !important;';
		$pest_control_treatment_custom_css .='} }';
	}


	/*---------------------------Slider Height ------------*/

	$pest_control_treatment_slider_height = get_theme_mod('pest_control_treatment_slider_height');
	if($pest_control_treatment_slider_height != false){
		$pest_control_treatment_custom_css .='#banner img{';
			$pest_control_treatment_custom_css .='height: '.esc_attr($pest_control_treatment_slider_height).';';
		$pest_control_treatment_custom_css .='}';
	}
	
	/*------------- Slider Content Padding Settings ------------------*/

	$pest_control_treatment_slider_content_padding_top_bottom = get_theme_mod('pest_control_treatment_slider_content_padding_top_bottom');
	$pest_control_treatment_slider_content_padding_left_right = get_theme_mod('pest_control_treatment_slider_content_padding_left_right');
	if($pest_control_treatment_slider_content_padding_top_bottom != false || $pest_control_treatment_slider_content_padding_left_right != false){
		$pest_control_treatment_custom_css .='#banner .carousel-caption{';
			$pest_control_treatment_custom_css .='top: '.esc_attr($pest_control_treatment_slider_content_padding_top_bottom).'; bottom: '.esc_attr($pest_control_treatment_slider_content_padding_top_bottom).';left: '.esc_attr($pest_control_treatment_slider_content_padding_left_right).';right: '.esc_attr($pest_control_treatment_slider_content_padding_left_right).';';
		$pest_control_treatment_custom_css .='}';
	}

	// banner background img

	$pest_control_treatment_banner_image = get_theme_mod('pest_control_treatment_banner_image');
	if($pest_control_treatment_banner_image != false){
		$pest_control_treatment_custom_css .='.banner-img{';
			$pest_control_treatment_custom_css .='background: url('.esc_attr($pest_control_treatment_banner_image).')no-repeat; background-size: cover;';
		$pest_control_treatment_custom_css .='}';
	}
	
	/*-------------- Copyright Alignment ----------------*/

	$pest_control_treatment_copyright_alingment = get_theme_mod('pest_control_treatment_copyright_alingment');
	if($pest_control_treatment_copyright_alingment != false){
		$pest_control_treatment_custom_css .='.copyright p{';
			$pest_control_treatment_custom_css .='text-align: '.esc_attr($pest_control_treatment_copyright_alingment).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_footer_background_color = get_theme_mod('pest_control_treatment_footer_background_color');
	if($pest_control_treatment_footer_background_color != false){
		$pest_control_treatment_custom_css .='#footer{';
			$pest_control_treatment_custom_css .='background-color: '.esc_attr($pest_control_treatment_footer_background_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$pest_control_treatment_preloader_bg_color = get_theme_mod('pest_control_treatment_preloader_bg_color');
	if($pest_control_treatment_preloader_bg_color != false){
		$pest_control_treatment_custom_css .='#preloader{';
			$pest_control_treatment_custom_css .='background-color: '.esc_attr($pest_control_treatment_preloader_bg_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_preloader_border_color = get_theme_mod('pest_control_treatment_preloader_border_color');
	if($pest_control_treatment_preloader_border_color != false){
		$pest_control_treatment_custom_css .='.loader-line{';
			$pest_control_treatment_custom_css .='border-color: '.esc_attr($pest_control_treatment_preloader_border_color).'!important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_preloader_bg_img = get_theme_mod('pest_control_treatment_preloader_bg_img');
	if($pest_control_treatment_preloader_bg_img != false){
		$pest_control_treatment_custom_css .='#preloader{';
			$pest_control_treatment_custom_css .='background: url('.esc_attr($pest_control_treatment_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$pest_control_treatment_custom_css .='}';
	}

	/*------------- Slider ------------*/

	$pest_control_treatment_slider = get_theme_mod('pest_control_treatment_slider_hide_show', false);
	if($pest_control_treatment_slider == false){
		$pest_control_treatment_custom_css .='.page-template-custom-home-page .main-header, .page-template-ibtana-page-template .main-header{';
			$pest_control_treatment_custom_css .='position: static;';
		$pest_control_treatment_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$pest_control_treatment_theme_lay = get_theme_mod( 'pest_control_treatment_slider_opacity_color','0.7');
	if($pest_control_treatment_theme_lay == '0'){
		$pest_control_treatment_custom_css .='#banner img{';
			$pest_control_treatment_custom_css .='opacity:0';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.1'){
		$pest_control_treatment_custom_css .='#banner img{';
			$pest_control_treatment_custom_css .='opacity:0.1';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.2'){
		$pest_control_treatment_custom_css .='#banner img{';
			$pest_control_treatment_custom_css .='opacity:0.2';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.3'){
		$pest_control_treatment_custom_css .='#banner img{';
			$pest_control_treatment_custom_css .='opacity:0.3';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.4'){
		$pest_control_treatment_custom_css .='#banner img{';
			$pest_control_treatment_custom_css .='opacity:0.4';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.5'){
		$pest_control_treatment_custom_css .='#banner img{';
			$pest_control_treatment_custom_css .='opacity:0.5';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.6'){
		$pest_control_treatment_custom_css .='#banner img{';
			$pest_control_treatment_custom_css .='opacity:0.6';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.7'){
		$pest_control_treatment_custom_css .='#banner img{';
			$pest_control_treatment_custom_css .='opacity:0.7';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.8'){
		$pest_control_treatment_custom_css .='#banner img{';
			$pest_control_treatment_custom_css .='opacity:0.8';
		$pest_control_treatment_custom_css .='}';
		}else if($pest_control_treatment_theme_lay == '0.9'){
		$pest_control_treatment_custom_css .='#banner img{';
			$pest_control_treatment_custom_css .='opacity:0.9';
		$pest_control_treatment_custom_css .='}';
	}

	/*---------------------- Slider Image Overlay ------------------------*/

	$pest_control_treatment_slider_image_overlay = get_theme_mod('pest_control_treatment_slider_image_overlay', true);
	if($pest_control_treatment_slider_image_overlay == false){
		$pest_control_treatment_custom_css .='#banner img{';
			$pest_control_treatment_custom_css .='opacity:1;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_slider_image_overlay_color = get_theme_mod('pest_control_treatment_slider_image_overlay_color', true);
	if($pest_control_treatment_slider_image_overlay_color != false){
		$pest_control_treatment_custom_css .='#banner{';
			$pest_control_treatment_custom_css .='background-color: '.esc_attr($pest_control_treatment_slider_image_overlay_color).';';
		$pest_control_treatment_custom_css .='}';
	}


	/*-------------- Copyright Alignment ----------------*/

	$pest_control_treatment_copyright_alingment = get_theme_mod('pest_control_treatment_copyright_alingment');
	if($pest_control_treatment_copyright_alingment != false){
		$pest_control_treatment_custom_css .='.copyright p{';
			$pest_control_treatment_custom_css .='text-align: '.esc_attr($pest_control_treatment_copyright_alingment).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_copyright_background_color = get_theme_mod('pest_control_treatment_copyright_background_color');
	if($pest_control_treatment_copyright_background_color != false){
		$pest_control_treatment_custom_css .='#footer-2{';
			$pest_control_treatment_custom_css .='background-color: '.esc_attr($pest_control_treatment_copyright_background_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_footer_background_image = get_theme_mod('pest_control_treatment_footer_background_image');
	if($pest_control_treatment_footer_background_image != false){
		$pest_control_treatment_custom_css .='#footer{';
			$pest_control_treatment_custom_css .='background: url('.esc_attr($pest_control_treatment_footer_background_image).')no-repeat;background-size:cover';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_theme_lay = get_theme_mod( 'pest_control_treatment_img_footer','scroll');
	if($pest_control_treatment_theme_lay == 'fixed'){
		$pest_control_treatment_custom_css .='#footer{';
			$pest_control_treatment_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$pest_control_treatment_custom_css .='}';
	}elseif ($pest_control_treatment_theme_lay == 'scroll'){
		$pest_control_treatment_custom_css .='#footer{';
			$pest_control_treatment_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_footer_img_position = get_theme_mod('pest_control_treatment_footer_img_position','center center');
	if($pest_control_treatment_footer_img_position != false){
		$pest_control_treatment_custom_css .='#footer{';
			$pest_control_treatment_custom_css .='background-position: '.esc_attr($pest_control_treatment_footer_img_position).'!important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_footer_widgets_heading = get_theme_mod( 'pest_control_treatment_footer_widgets_heading','Left');
    if($pest_control_treatment_footer_widgets_heading == 'Left'){
		$pest_control_treatment_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$pest_control_treatment_custom_css .='text-align: left;';
		$pest_control_treatment_custom_css .='}';
	}else if($pest_control_treatment_footer_widgets_heading == 'Center'){
		$pest_control_treatment_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$pest_control_treatment_custom_css .='text-align: center;';
		$pest_control_treatment_custom_css .='}';
	}else if($pest_control_treatment_footer_widgets_heading == 'Right'){
		$pest_control_treatment_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$pest_control_treatment_custom_css .='text-align: right;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_footer_widgets_content = get_theme_mod( 'pest_control_treatment_footer_widgets_content','Left');
    if($pest_control_treatment_footer_widgets_content == 'Left'){
		$pest_control_treatment_custom_css .='#footer .widget{';
		$pest_control_treatment_custom_css .='text-align: left;';
		$pest_control_treatment_custom_css .='}';
	}else if($pest_control_treatment_footer_widgets_content == 'Center'){
		$pest_control_treatment_custom_css .='#footer .widget{';
			$pest_control_treatment_custom_css .='text-align: center;';
		$pest_control_treatment_custom_css .='}';
	}else if($pest_control_treatment_footer_widgets_content == 'Right'){
		$pest_control_treatment_custom_css .='#footer .widget{';
			$pest_control_treatment_custom_css .='text-align: right;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_copyright_font_size = get_theme_mod('pest_control_treatment_copyright_font_size');
	if($pest_control_treatment_copyright_font_size != false){
		$pest_control_treatment_custom_css .='#footer-2 a, #footer-2 p{';
			$pest_control_treatment_custom_css .='font-size: '.esc_attr($pest_control_treatment_copyright_font_size).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_copyright_alingment = get_theme_mod('pest_control_treatment_copyright_alingment');
	if($pest_control_treatment_copyright_alingment != false){
		$pest_control_treatment_custom_css .='#footer-2 p{';
			$pest_control_treatment_custom_css .='text-align: '.esc_attr($pest_control_treatment_copyright_alingment).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_copyright_padding_top_bottom = get_theme_mod('pest_control_treatment_copyright_padding_top_bottom');
	if($pest_control_treatment_copyright_padding_top_bottom != false){
		$pest_control_treatment_custom_css .='#footer-2{';
			$pest_control_treatment_custom_css .='padding-top: '.esc_attr($pest_control_treatment_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($pest_control_treatment_copyright_padding_top_bottom).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_footer_padding = get_theme_mod('pest_control_treatment_footer_padding');
	if($pest_control_treatment_footer_padding != false){
		$pest_control_treatment_custom_css .='#footer{';
			$pest_control_treatment_custom_css .='padding: '.esc_attr($pest_control_treatment_footer_padding).' 0;';
		$pest_control_treatment_custom_css .='}';
	}
	/*-------------- Copyright Alignment ----------------*/

	$pest_control_treatment_copyright_alingment = get_theme_mod('pest_control_treatment_copyright_alingment');
	if($pest_control_treatment_copyright_alingment != false){
		$pest_control_treatment_custom_css .='.copyright p,.copyright .widget{';
			$pest_control_treatment_custom_css .='text-align: '.esc_attr($pest_control_treatment_copyright_alingment).';';
		$pest_control_treatment_custom_css .='}';
	}

	/*----------------Scroll to top Settings ------------------*/

	$pest_control_treatment_scroll_to_top_font_size = get_theme_mod('pest_control_treatment_scroll_to_top_font_size');
	if($pest_control_treatment_scroll_to_top_font_size != false){
		$pest_control_treatment_custom_css .='.scrollup i{';
			$pest_control_treatment_custom_css .='font-size: '.esc_attr($pest_control_treatment_scroll_to_top_font_size).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_scroll_to_top_padding = get_theme_mod('pest_control_treatment_scroll_to_top_padding');
	$pest_control_treatment_scroll_to_top_padding = get_theme_mod('pest_control_treatment_scroll_to_top_padding');
	if($pest_control_treatment_scroll_to_top_padding != false){
		$pest_control_treatment_custom_css .='.scrollup i{';
			$pest_control_treatment_custom_css .='padding-top: '.esc_attr($pest_control_treatment_scroll_to_top_padding).';padding-bottom: '.esc_attr($pest_control_treatment_scroll_to_top_padding).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_scroll_to_top_width = get_theme_mod('pest_control_treatment_scroll_to_top_width');
	if($pest_control_treatment_scroll_to_top_width != false){
		$pest_control_treatment_custom_css .='.scrollup i{';
			$pest_control_treatment_custom_css .='width: '.esc_attr($pest_control_treatment_scroll_to_top_width).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_scroll_to_top_height = get_theme_mod('pest_control_treatment_scroll_to_top_height');
	if($pest_control_treatment_scroll_to_top_height != false){
		$pest_control_treatment_custom_css .='.scrollup i{';
			$pest_control_treatment_custom_css .='height: '.esc_attr($pest_control_treatment_scroll_to_top_height).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_scroll_to_top_border_radius = get_theme_mod('pest_control_treatment_scroll_to_top_border_radius');
	if($pest_control_treatment_scroll_to_top_border_radius != false){
		$pest_control_treatment_custom_css .='.scrollup i{';
			$pest_control_treatment_custom_css .='border-radius: '.esc_attr($pest_control_treatment_scroll_to_top_border_radius).'px;';
		$pest_control_treatment_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$pest_control_treatment_logo_padding = get_theme_mod('pest_control_treatment_logo_padding');
	if($pest_control_treatment_logo_padding != false){
		$pest_control_treatment_custom_css .='.logo{';
			$pest_control_treatment_custom_css .='padding: '.esc_attr($pest_control_treatment_logo_padding).' !important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_logo_margin = get_theme_mod('pest_control_treatment_logo_margin');
	if($pest_control_treatment_logo_margin != false){
		$pest_control_treatment_custom_css .='.logo{';
			$pest_control_treatment_custom_css .='margin: '.esc_attr($pest_control_treatment_logo_margin).';';
		$pest_control_treatment_custom_css .='}';
	}

	// Site title Font Size
	$pest_control_treatment_site_title_font_size = get_theme_mod('pest_control_treatment_site_title_font_size');
	if($pest_control_treatment_site_title_font_size != false){
		$pest_control_treatment_custom_css .='.logo p.site-title, .logo h1{';
			$pest_control_treatment_custom_css .='font-size: '.esc_attr($pest_control_treatment_site_title_font_size).';';
		$pest_control_treatment_custom_css .='}';
	}

	// Site tagline Font Size
	$pest_control_treatment_site_tagline_font_size = get_theme_mod('pest_control_treatment_site_tagline_font_size');
	if($pest_control_treatment_site_tagline_font_size != false){
		$pest_control_treatment_custom_css .='.logo p.site-description{';
			$pest_control_treatment_custom_css .='font-size: '.esc_attr($pest_control_treatment_site_tagline_font_size).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_site_title_color = get_theme_mod('pest_control_treatment_site_title_color');
	if($pest_control_treatment_site_title_color != false){
		$pest_control_treatment_custom_css .='p.site-title a, .logo h1 a{';
			$pest_control_treatment_custom_css .='color: '.esc_attr($pest_control_treatment_site_title_color).'!important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_site_tagline_color = get_theme_mod('pest_control_treatment_site_tagline_color');
	if($pest_control_treatment_site_tagline_color != false){
		$pest_control_treatment_custom_css .='.logo p.site-description{';
			$pest_control_treatment_custom_css .='color: '.esc_attr($pest_control_treatment_site_tagline_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_logo_width = get_theme_mod('pest_control_treatment_logo_width');
	if($pest_control_treatment_logo_width != false){
		$pest_control_treatment_custom_css .='.logo img{';
			$pest_control_treatment_custom_css .='width: '.esc_attr($pest_control_treatment_logo_width).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_logo_height = get_theme_mod('pest_control_treatment_logo_height');
	if($pest_control_treatment_logo_height != false){
		$pest_control_treatment_custom_css .='.logo img{';
			$pest_control_treatment_custom_css .='height: '.esc_attr($pest_control_treatment_logo_height).';object-fit:cover;';
		$pest_control_treatment_custom_css .='}';
	}

	// Header Background Color
	$pest_control_treatment_header_background_color = get_theme_mod('pest_control_treatment_header_background_color');
	if($pest_control_treatment_header_background_color != false){
		$pest_control_treatment_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$pest_control_treatment_custom_css .='background-color: '.esc_attr($pest_control_treatment_header_background_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_header_img_position = get_theme_mod('pest_control_treatment_header_img_position','center top');
	if($pest_control_treatment_header_img_position != false){
		$pest_control_treatment_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$pest_control_treatment_custom_css .='background-position: '.esc_attr($pest_control_treatment_header_img_position).'!important;';
		$pest_control_treatment_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$pest_control_treatment_theme_lay = get_theme_mod( 'pest_control_treatment_blog_layout_option','Default');
    if($pest_control_treatment_theme_lay == 'Default'){
		$pest_control_treatment_custom_css .='.post-main-box{';
			$pest_control_treatment_custom_css .='';
		$pest_control_treatment_custom_css .='}';
	}else if($pest_control_treatment_theme_lay == 'Center'){
		$pest_control_treatment_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$pest_control_treatment_custom_css .='text-align:center;';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='.post-info{';
			$pest_control_treatment_custom_css .='margin-top:10px;';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='.post-info hr{';
			$pest_control_treatment_custom_css .='margin:15px auto;';
		$pest_control_treatment_custom_css .='}';
	}else if($pest_control_treatment_theme_lay == 'Left'){
		$pest_control_treatment_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$pest_control_treatment_custom_css .='text-align:Left;';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='.post-info hr{';
			$pest_control_treatment_custom_css .='margin-bottom:10px;';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='.post-main-box h2{';
			$pest_control_treatment_custom_css .='margin-top:10px;';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='.service-text .more-btn{';
			$pest_control_treatment_custom_css .='display:inline-block;';
		$pest_control_treatment_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$pest_control_treatment_blog_page_posts_settings = get_theme_mod( 'pest_control_treatment_blog_page_posts_settings','Into Blocks');
    if($pest_control_treatment_blog_page_posts_settings == 'Without Blocks'){
		$pest_control_treatment_custom_css .='.post-main-box{';
			$pest_control_treatment_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$pest_control_treatment_custom_css .='}';
	}

	// featured image dimention
	$pest_control_treatment_blog_post_featured_image_dimension = get_theme_mod('pest_control_treatment_blog_post_featured_image_dimension', 'default');
	$pest_control_treatment_blog_post_featured_image_custom_width = get_theme_mod('pest_control_treatment_blog_post_featured_image_custom_width',250);
	$pest_control_treatment_blog_post_featured_image_custom_height = get_theme_mod('pest_control_treatment_blog_post_featured_image_custom_height',250);
	if($pest_control_treatment_blog_post_featured_image_dimension == 'custom'){
		$pest_control_treatment_custom_css .='.post-main-box img{';
			$pest_control_treatment_custom_css .='width: '.esc_attr($pest_control_treatment_blog_post_featured_image_custom_width).'!important; height: '.esc_attr($pest_control_treatment_blog_post_featured_image_custom_height).';';
		$pest_control_treatment_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$pest_control_treatment_featured_image_border_radius = get_theme_mod('pest_control_treatment_featured_image_border_radius', 0);
	if($pest_control_treatment_featured_image_border_radius != false){
		$pest_control_treatment_custom_css .='.box-image img, .feature-box img{';
			$pest_control_treatment_custom_css .='border-radius: '.esc_attr($pest_control_treatment_featured_image_border_radius).'px;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_featured_image_box_shadow = get_theme_mod('pest_control_treatment_featured_image_box_shadow',0);
	if($pest_control_treatment_featured_image_box_shadow != false){
		$pest_control_treatment_custom_css .='.box-image img, #content-vw img{';
			$pest_control_treatment_custom_css .='box-shadow: '.esc_attr($pest_control_treatment_featured_image_box_shadow).'px '.esc_attr($pest_control_treatment_featured_image_box_shadow).'px '.esc_attr($pest_control_treatment_featured_image_box_shadow).'px #cccccc;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_singlepost_image_box_shadow = get_theme_mod('pest_control_treatment_singlepost_image_box_shadow',0);
	if($pest_control_treatment_singlepost_image_box_shadow != false){
		$pest_control_treatment_custom_css .='.feature-box img{';
			$pest_control_treatment_custom_css .='box-shadow: '.esc_attr($pest_control_treatment_singlepost_image_box_shadow).'px '.esc_attr($pest_control_treatment_singlepost_image_box_shadow).'px '.esc_attr($pest_control_treatment_singlepost_image_box_shadow).'px #cccccc;';
		$pest_control_treatment_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$pest_control_treatment_button_letter_spacing = get_theme_mod('pest_control_treatment_button_letter_spacing',14);
	$pest_control_treatment_custom_css .='.post-main-box .more-btn{';
		$pest_control_treatment_custom_css .='letter-spacing: '.esc_attr($pest_control_treatment_button_letter_spacing).';';
	$pest_control_treatment_custom_css .='}';

	$pest_control_treatment_button_border_radius = get_theme_mod('pest_control_treatment_button_border_radius');
	if($pest_control_treatment_button_border_radius != false){
		$pest_control_treatment_custom_css .='.post-main-box .more-btn a{';
			$pest_control_treatment_custom_css .='border-radius: '.esc_attr($pest_control_treatment_button_border_radius).'px !important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_button_top_bottom_padding = get_theme_mod('pest_control_treatment_button_top_bottom_padding');
	$pest_control_treatment_button_left_right_padding = get_theme_mod('pest_control_treatment_button_left_right_padding');
	if($pest_control_treatment_button_top_bottom_padding != false || $pest_control_treatment_button_left_right_padding != false){
		$pest_control_treatment_custom_css .='.post-main-box .more-btn{';
			$pest_control_treatment_custom_css .='padding-top: '.esc_attr($pest_control_treatment_button_top_bottom_padding).'!important; padding-bottom: '.esc_attr($pest_control_treatment_button_top_bottom_padding).'!important;padding-left: '.esc_attr($pest_control_treatment_button_left_right_padding).'!important;padding-right: '.esc_attr($pest_control_treatment_button_left_right_padding).'!important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_button_font_size = get_theme_mod('pest_control_treatment_button_font_size',14);
	$pest_control_treatment_custom_css .='.post-main-box .more-btn a{';
		$pest_control_treatment_custom_css .='font-size: '.esc_attr($pest_control_treatment_button_font_size).';';
	$pest_control_treatment_custom_css .='}';

	$pest_control_treatment_theme_lay = get_theme_mod( 'pest_control_treatment_button_text_transform','Capitalize');
	if($pest_control_treatment_theme_lay == 'Capitalize'){
		$pest_control_treatment_custom_css .='.post-main-box .more-btn a{';
			$pest_control_treatment_custom_css .='text-transform:Capitalize;';
		$pest_control_treatment_custom_css .='}';
	}
	if($pest_control_treatment_theme_lay == 'Lowercase'){
		$pest_control_treatment_custom_css .='.post-main-box .more-btn a{';
			$pest_control_treatment_custom_css .='text-transform:Lowercase;';
		$pest_control_treatment_custom_css .='}';
	}
	if($pest_control_treatment_theme_lay == 'Uppercase'){
		$pest_control_treatment_custom_css .='.post-main-box .more-btn a{';
			$pest_control_treatment_custom_css .='text-transform:Uppercase;';
		$pest_control_treatment_custom_css .='}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$pest_control_treatment_single_blog_comment_button_text = get_theme_mod('pest_control_treatment_single_blog_comment_button_text', 'Post Comment');
	if($pest_control_treatment_single_blog_comment_button_text == ''){
		$pest_control_treatment_custom_css .='#comments p.form-submit {';
			$pest_control_treatment_custom_css .='display: none;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_comment_width = get_theme_mod('pest_control_treatment_single_blog_comment_width');
	if($pest_control_treatment_comment_width != false){
		$pest_control_treatment_custom_css .='#comments textarea{';
			$pest_control_treatment_custom_css .='width: '.esc_attr($pest_control_treatment_comment_width).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_single_blog_post_navigation_show_hide = get_theme_mod('pest_control_treatment_single_blog_post_navigation_show_hide',true);
	if($pest_control_treatment_single_blog_post_navigation_show_hide != true){
		$pest_control_treatment_custom_css .='.post-navigation{';
			$pest_control_treatment_custom_css .='display: none;';
		$pest_control_treatment_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$pest_control_treatment_display_grid_posts_settings = get_theme_mod( 'pest_control_treatment_display_grid_posts_settings','Into Blocks');
    if($pest_control_treatment_display_grid_posts_settings == 'Without Blocks'){
		$pest_control_treatment_custom_css .='.grid-post-main-box{';
			$pest_control_treatment_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$pest_control_treatment_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$pest_control_treatment_related_product_show_hide = get_theme_mod('pest_control_treatment_related_product_show_hide',true);
	if($pest_control_treatment_related_product_show_hide != true){
		$pest_control_treatment_custom_css .='.related.products{';
			$pest_control_treatment_custom_css .='display: none;';
		$pest_control_treatment_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$pest_control_treatment_products_padding_top_bottom = get_theme_mod('pest_control_treatment_products_padding_top_bottom');
	if($pest_control_treatment_products_padding_top_bottom != false){
		$pest_control_treatment_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$pest_control_treatment_custom_css .='padding-top: '.esc_attr($pest_control_treatment_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($pest_control_treatment_products_padding_top_bottom).'!important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_products_padding_left_right = get_theme_mod('pest_control_treatment_products_padding_left_right');
	if($pest_control_treatment_products_padding_left_right != false){
		$pest_control_treatment_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$pest_control_treatment_custom_css .='padding-left: '.esc_attr($pest_control_treatment_products_padding_left_right).'!important; padding-right: '.esc_attr($pest_control_treatment_products_padding_left_right).'!important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_products_box_shadow = get_theme_mod('pest_control_treatment_products_box_shadow');
	if($pest_control_treatment_products_box_shadow != false){
		$pest_control_treatment_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$pest_control_treatment_custom_css .='box-shadow: '.esc_attr($pest_control_treatment_products_box_shadow).'px '.esc_attr($pest_control_treatment_products_box_shadow).'px '.esc_attr($pest_control_treatment_products_box_shadow).'px #ddd;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_products_border_radius = get_theme_mod('pest_control_treatment_products_border_radius');
	if($pest_control_treatment_products_border_radius != false){
		$pest_control_treatment_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$pest_control_treatment_custom_css .='border-radius: '.esc_attr($pest_control_treatment_products_border_radius).'px;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_products_btn_padding_top_bottom = get_theme_mod('pest_control_treatment_products_btn_padding_top_bottom');
	if($pest_control_treatment_products_btn_padding_top_bottom != false){
		$pest_control_treatment_custom_css .='.woocommerce a.button{';
			$pest_control_treatment_custom_css .='padding-top: '.esc_attr($pest_control_treatment_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($pest_control_treatment_products_btn_padding_top_bottom).' !important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_products_btn_padding_left_right = get_theme_mod('pest_control_treatment_products_btn_padding_left_right');
	if($pest_control_treatment_products_btn_padding_left_right != false){
		$pest_control_treatment_custom_css .='.woocommerce a.button{';
			$pest_control_treatment_custom_css .='padding-left: '.esc_attr($pest_control_treatment_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($pest_control_treatment_products_btn_padding_left_right).' !important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_products_button_border_radius = get_theme_mod('pest_control_treatment_products_button_border_radius', 0);
	if($pest_control_treatment_products_button_border_radius != false){
		$pest_control_treatment_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce a.button{';
			$pest_control_treatment_custom_css .='border-radius: '.esc_attr($pest_control_treatment_products_button_border_radius).'px !important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_woocommerce_sale_position = get_theme_mod( 'pest_control_treatment_woocommerce_sale_position','right');
    if($pest_control_treatment_woocommerce_sale_position == 'left'){
		$pest_control_treatment_custom_css .='.woocommerce ul.products li.product .onsale{';
			$pest_control_treatment_custom_css .='left: 22px !important; right: auto !important;';
		$pest_control_treatment_custom_css .='}';
	}else if($pest_control_treatment_woocommerce_sale_position == 'right'){
		$pest_control_treatment_custom_css .='.woocommerce ul.products li.product .onsale{';
			$pest_control_treatment_custom_css .='left: auto!important; right: 22px !important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_woocommerce_sale_font_size = get_theme_mod('pest_control_treatment_woocommerce_sale_font_size');
	if($pest_control_treatment_woocommerce_sale_font_size != false){
		$pest_control_treatment_custom_css .='.woocommerce span.onsale{';
			$pest_control_treatment_custom_css .='font-size: '.esc_attr($pest_control_treatment_woocommerce_sale_font_size).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_woocommerce_sale_padding_top_bottom = get_theme_mod('pest_control_treatment_woocommerce_sale_padding_top_bottom');
	if($pest_control_treatment_woocommerce_sale_padding_top_bottom != false){
		$pest_control_treatment_custom_css .='.woocommerce span.onsale{';
			$pest_control_treatment_custom_css .='padding-top: '.esc_attr($pest_control_treatment_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($pest_control_treatment_woocommerce_sale_padding_top_bottom).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_woocommerce_sale_padding_left_right = get_theme_mod('pest_control_treatment_woocommerce_sale_padding_left_right');
	if($pest_control_treatment_woocommerce_sale_padding_left_right != false){
		$pest_control_treatment_custom_css .='.woocommerce span.onsale{';
			$pest_control_treatment_custom_css .='padding-left: '.esc_attr($pest_control_treatment_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($pest_control_treatment_woocommerce_sale_padding_left_right).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_woocommerce_sale_border_radius = get_theme_mod('pest_control_treatment_woocommerce_sale_border_radius', 0);
	if($pest_control_treatment_woocommerce_sale_border_radius != false){
		$pest_control_treatment_custom_css .='.woocommerce span.onsale{';
			$pest_control_treatment_custom_css .='border-radius: '.esc_attr($pest_control_treatment_woocommerce_sale_border_radius).'px;';
		$pest_control_treatment_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$pest_control_treatment_social_icon_font_size = get_theme_mod('pest_control_treatment_social_icon_font_size');
	if($pest_control_treatment_social_icon_font_size != false){
		$pest_control_treatment_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$pest_control_treatment_custom_css .='font-size: '.esc_attr($pest_control_treatment_social_icon_font_size).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_social_icon_padding = get_theme_mod('pest_control_treatment_social_icon_padding');
	if($pest_control_treatment_social_icon_padding != false){
		$pest_control_treatment_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$pest_control_treatment_custom_css .='padding: '.esc_attr($pest_control_treatment_social_icon_padding).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_social_icon_width = get_theme_mod('pest_control_treatment_social_icon_width');
	if($pest_control_treatment_social_icon_width != false){
		$pest_control_treatment_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$pest_control_treatment_custom_css .='width: '.esc_attr($pest_control_treatment_social_icon_width).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_social_icon_height = get_theme_mod('pest_control_treatment_social_icon_height');
	if($pest_control_treatment_social_icon_height != false){
		$pest_control_treatment_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$pest_control_treatment_custom_css .='height: '.esc_attr($pest_control_treatment_social_icon_height).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_social_icon_border_radius = get_theme_mod('pest_control_treatment_social_icon_border_radius');
	if($pest_control_treatment_social_icon_border_radius != false){
		$pest_control_treatment_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$pest_control_treatment_custom_css .='border-radius: '.esc_attr($pest_control_treatment_social_icon_border_radius).'px;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_resp_menu_toggle_btn_bg_color = get_theme_mod('pest_control_treatment_resp_menu_toggle_btn_bg_color');
	if($pest_control_treatment_resp_menu_toggle_btn_bg_color != false){
		$pest_control_treatment_custom_css .='.toggle-nav i{';
			$pest_control_treatment_custom_css .='background: '.esc_attr($pest_control_treatment_resp_menu_toggle_btn_bg_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_grid_featured_image_box_shadow = get_theme_mod('pest_control_treatment_grid_featured_image_box_shadow',0);
	if($pest_control_treatment_grid_featured_image_box_shadow != false){
		$pest_control_treatment_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$pest_control_treatment_custom_css .='box-shadow: '.esc_attr($pest_control_treatment_grid_featured_image_box_shadow).'px '.esc_attr($pest_control_treatment_grid_featured_image_box_shadow).'px '.esc_attr($pest_control_treatment_grid_featured_image_box_shadow).'px #cccccc;';
		$pest_control_treatment_custom_css .='}';
	}

	/*-------------- Menus Setings ----------------*/

	$pest_control_treatment_navigation_menu_font_size = get_theme_mod('pest_control_treatment_navigation_menu_font_size');
	if($pest_control_treatment_navigation_menu_font_size != false){
		$pest_control_treatment_custom_css .='.main-navigation ul a{';
			$pest_control_treatment_custom_css .='font-size: '.esc_attr($pest_control_treatment_navigation_menu_font_size).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_navigation_menu_font_weight = get_theme_mod('pest_control_treatment_navigation_menu_font_weight','500');
	if($pest_control_treatment_navigation_menu_font_weight != false){
		$pest_control_treatment_custom_css .='.main-navigation ul a{';
			$pest_control_treatment_custom_css .='font-weight: '.esc_attr($pest_control_treatment_navigation_menu_font_weight).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_theme_lay = get_theme_mod( 'pest_control_treatment_menu_text_transform','Capitalize');
	if($pest_control_treatment_theme_lay == 'Capitalize'){
		$pest_control_treatment_custom_css .='.main-navigation ul a{';
			$pest_control_treatment_custom_css .='text-transform:Capitalize;';
		$pest_control_treatment_custom_css .='}';
	}
	if($pest_control_treatment_theme_lay == 'Lowercase'){
		$pest_control_treatment_custom_css .='.main-navigation ul a{';
			$pest_control_treatment_custom_css .='text-transform:Lowercase;';
		$pest_control_treatment_custom_css .='}';
	}
	if($pest_control_treatment_theme_lay == 'Uppercase'){
		$pest_control_treatment_custom_css .='.main-navigation ul a{';
			$pest_control_treatment_custom_css .='text-transform:Uppercase;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_header_menus_color = get_theme_mod('pest_control_treatment_header_menus_color');
	if($pest_control_treatment_header_menus_color != false){
		$pest_control_treatment_custom_css .='.main-navigation ul a{';
			$pest_control_treatment_custom_css .='color: '.esc_attr($pest_control_treatment_header_menus_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_header_menus_hover_color = get_theme_mod('pest_control_treatment_header_menus_hover_color');
	if($pest_control_treatment_header_menus_hover_color != false){
		$pest_control_treatment_custom_css .='.main-navigation ul a:hover{';
			$pest_control_treatment_custom_css .='color: '.esc_attr($pest_control_treatment_header_menus_hover_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_header_submenus_color = get_theme_mod('pest_control_treatment_header_submenus_color');
	if($pest_control_treatment_header_submenus_color != false){
		$pest_control_treatment_custom_css .='.main-navigation ul ul a{';
			$pest_control_treatment_custom_css .='color: '.esc_attr($pest_control_treatment_header_submenus_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_header_submenus_hover_color = get_theme_mod('pest_control_treatment_header_submenus_hover_color');
	if($pest_control_treatment_header_submenus_hover_color != false){
		$pest_control_treatment_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$pest_control_treatment_custom_css .='color: '.esc_attr($pest_control_treatment_header_submenus_hover_color).'!important;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_menus_item = get_theme_mod( 'pest_control_treatment_menus_item_style','None');
    if($pest_control_treatment_menus_item == 'None'){
		$pest_control_treatment_custom_css .='.main-navigation ul a{';
			$pest_control_treatment_custom_css .='';
		$pest_control_treatment_custom_css .='}';
	}else if($pest_control_treatment_menus_item == 'Zoom In'){
		$pest_control_treatment_custom_css .='.main-navigation ul a:hover{';
			$pest_control_treatment_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$pest_control_treatment_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$pest_control_treatment_theme_lay = get_theme_mod( 'pest_control_treatment_footer_template','pest_control_treatment-footer-one');
    if($pest_control_treatment_theme_lay == 'pest_control_treatment-footer-one'){
		$pest_control_treatment_custom_css .='#footer{';
			$pest_control_treatment_custom_css .='';
		$pest_control_treatment_custom_css .='}';

	}else if($pest_control_treatment_theme_lay == 'pest_control_treatment-footer-two'){
		$pest_control_treatment_custom_css .='#footer{';
			$pest_control_treatment_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$pest_control_treatment_custom_css .='color:#000;';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='#footer ul li::before{';
			$pest_control_treatment_custom_css .='background:#000;';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$pest_control_treatment_custom_css .='border: 1px solid #000;';
		$pest_control_treatment_custom_css .='}';

	}else if($pest_control_treatment_theme_lay == 'pest_control_treatment-footer-three'){
		$pest_control_treatment_custom_css .='#footer{';
			$pest_control_treatment_custom_css .='background: #232524;';
		$pest_control_treatment_custom_css .='}';
	}
	else if($pest_control_treatment_theme_lay == 'pest_control_treatment-footer-four'){
		$pest_control_treatment_custom_css .='#footer{';
			$pest_control_treatment_custom_css .='background: #FCB900;';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$pest_control_treatment_custom_css .='color:#fff;';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='#footer ul li::before{';
			$pest_control_treatment_custom_css .='background:#fff;';
		$pest_control_treatment_custom_css .='}';
		$pest_control_treatment_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$pest_control_treatment_custom_css .='border: 1px solid #fff;';
		$pest_control_treatment_custom_css .='}';
	}
	else if($pest_control_treatment_theme_lay == 'pest_control_treatment-footer-five'){
		$pest_control_treatment_custom_css .='#footer{';
			$pest_control_treatment_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$pest_control_treatment_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$pest_control_treatment_button_footer_heading_letter_spacing = get_theme_mod('pest_control_treatment_button_footer_heading_letter_spacing',1);
	$pest_control_treatment_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$pest_control_treatment_custom_css .='letter-spacing: '.esc_attr($pest_control_treatment_button_footer_heading_letter_spacing).'px;';
	$pest_control_treatment_custom_css .='}';

	$pest_control_treatment_button_footer_font_size = get_theme_mod('pest_control_treatment_button_footer_font_size','30');
	$pest_control_treatment_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$pest_control_treatment_custom_css .='font-size: '.esc_attr($pest_control_treatment_button_footer_font_size).'px;';
	$pest_control_treatment_custom_css .='}';

	$pest_control_treatment_theme_lay = get_theme_mod( 'pest_control_treatment_button_footer_text_transform','Capitalize');
	if($pest_control_treatment_theme_lay == 'Capitalize'){
		$pest_control_treatment_custom_css .='#footer h3{';
			$pest_control_treatment_custom_css .='text-transform:Capitalize;';
		$pest_control_treatment_custom_css .='}';
	}
	if($pest_control_treatment_theme_lay == 'Lowercase'){
		$pest_control_treatment_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$pest_control_treatment_custom_css .='text-transform:Lowercase;';
		$pest_control_treatment_custom_css .='}';
	}
	if($pest_control_treatment_theme_lay == 'Uppercase'){
		$pest_control_treatment_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$pest_control_treatment_custom_css .='text-transform:Uppercase;';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_footer_heading_weight = get_theme_mod('pest_control_treatment_footer_heading_weight','600');
	if($pest_control_treatment_footer_heading_weight != false){
		$pest_control_treatment_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$pest_control_treatment_custom_css .='font-weight: '.esc_attr($pest_control_treatment_footer_heading_weight).';';
		$pest_control_treatment_custom_css .='}';
	}

	// services

	$pest_control_treatment_slider = get_theme_mod('pest_control_treatment_slider_hide_show', false);
	if($pest_control_treatment_slider == false){
		$pest_control_treatment_custom_css .='.page-template-custom-home-page .main-header{';
			$pest_control_treatment_custom_css .='position: static;';
		$pest_control_treatment_custom_css .='}';
	}

	
	$pest_control_treatment_slider_first_color = get_theme_mod('pest_control_treatment_slider_first_color');

	$pest_control_treatment_slider_second_color = get_theme_mod('pest_control_treatment_slider_second_color');

	if($pest_control_treatment_slider_first_color != false || $pest_control_treatment_slider_second_color != false){
		$pest_control_treatment_custom_css .='.box{
		background: linear-gradient(to top, '.esc_attr($pest_control_treatment_slider_first_color).', '.esc_attr($pest_control_treatment_slider_second_color).');
		}';
	}

	$pest_control_treatment_services_icon_color = get_theme_mod('pest_control_treatment_services_icon_color');
	if($pest_control_treatment_services_icon_color != false){
		$pest_control_treatment_custom_css .='#about-sec i{';
			$pest_control_treatment_custom_css .='color: '.esc_attr($pest_control_treatment_services_icon_color).';';
		$pest_control_treatment_custom_css .='}';
	}

	$pest_control_treatment_breadcrumbs_alignment = get_theme_mod( 'pest_control_treatment_breadcrumbs_alignment','Left');
    if($pest_control_treatment_breadcrumbs_alignment == 'Left'){
		$pest_control_treatment_custom_css .='.breadcrumbs{';
			$pest_control_treatment_custom_css .='text-align:start;';
		$pest_control_treatment_custom_css .='}';
	}else if($pest_control_treatment_breadcrumbs_alignment == 'Center'){
		$pest_control_treatment_custom_css .='.breadcrumbs{';
			$pest_control_treatment_custom_css .='text-align:center;';
		$pest_control_treatment_custom_css .='}';
	}else if($pest_control_treatment_breadcrumbs_alignment == 'Right'){
		$pest_control_treatment_custom_css .='.breadcrumbs{';
			$pest_control_treatment_custom_css .='text-align:end;';
		$pest_control_treatment_custom_css .='}';
	}