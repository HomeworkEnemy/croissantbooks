<?php
/**
 * Pest Control Treatment   Theme Customizer
 *
 * @package Pest Control Treatment  
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function pest_control_treatment_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'pest_control_treatment_custom_controls' );

function pest_control_treatment_customize_register( $wp_customize ) {


	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo .site-title a',
	 	'render_callback' => 'pest_control_treatment_Customize_partial_blogname',
	));

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => 'p.site-description',
		'render_callback' => 'pest_control_treatment_Customize_partial_blogdescription',
	));

	// add home page setting pannel
	$wp_customize->add_panel( 'pest_control_treatment_panel_id', array(
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'Homepage Settings', 'pest-control-treatment' ),
		'priority' => 10,
	));

	//Menus Settings
	$wp_customize->add_section( 'pest_control_treatment_menu_section' , array(
    	'title' => __( 'Menus Settings', 'pest-control-treatment' ),
		'panel' => 'pest_control_treatment_panel_id'
	) );

	$wp_customize->add_setting('pest_control_treatment_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_navigation_menu_font_weight',array(
        'default' => 500,
        'transport' => 'refresh',
        'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','pest-control-treatment'),
        'section' => 'pest_control_treatment_menu_section',
        'choices' => array(
        	'100' => __('100','pest-control-treatment'),
            '200' => __('200','pest-control-treatment'),
            '300' => __('300','pest-control-treatment'),
            '400' => __('400','pest-control-treatment'),
            '500' => __('500','pest-control-treatment'),
            '600' => __('600','pest-control-treatment'),
            '700' => __('700','pest-control-treatment'),
            '800' => __('800','pest-control-treatment'),
            '900' => __('900','pest-control-treatment'),
        ),
	) );

	// text trasform
	$wp_customize->add_setting('pest_control_treatment_menu_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_menu_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Menus Text Transform','pest-control-treatment'),
		'choices' => array(
            'Uppercase' => __('Uppercase','pest-control-treatment'),
            'Capitalize' => __('Capitalize','pest-control-treatment'),
            'Lowercase' => __('Lowercase','pest-control-treatment'),
        ),
		'section'=> 'pest_control_treatment_menu_section',
	));

	$wp_customize->add_setting('pest_control_treatment_menus_item_style',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_menus_item_style',array(
        'type' => 'select',
        'section' => 'pest_control_treatment_menu_section',
		'label' => __('Menu Item Hover Style','pest-control-treatment'),
		'choices' => array(
            'None' => __('None','pest-control-treatment'),
            'Zoom In' => __('Zoom In','pest-control-treatment'),
        ),
	) );

	$wp_customize->add_setting('pest_control_treatment_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pest_control_treatment_header_menus_color', array(
		'label'    => __('Menus Color', 'pest-control-treatment'),
		'section'  => 'pest_control_treatment_menu_section',
	)));

	$wp_customize->add_setting('pest_control_treatment_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pest_control_treatment_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'pest-control-treatment'),
		'section'  => 'pest_control_treatment_menu_section',
	)));

	$wp_customize->add_setting('pest_control_treatment_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pest_control_treatment_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'pest-control-treatment'),
		'section'  => 'pest_control_treatment_menu_section',
	)));

	$wp_customize->add_setting('pest_control_treatment_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pest_control_treatment_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'pest-control-treatment'),
		'section'  => 'pest_control_treatment_menu_section',
	)));

	// Top Bar
	$wp_customize->add_section( 'pest_control_treatment_top_bar' , array(
    	'title' => esc_html__( 'Top Bar', 'pest-control-treatment' ),
		'panel' => 'pest_control_treatment_panel_id'
	) );

	$wp_customize->add_setting( 'pest_control_treatment_topbar_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
    ));
    $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_topbar_hide_show',array(
      'label' => esc_html__( 'Show / Hide Topbar','pest-control-treatment' ),
      'section' => 'pest_control_treatment_top_bar'
    )));

	$wp_customize->add_setting('pest_control_treatment_topbar_location_text_icon',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
        $wp_customize,'pest_control_treatment_topbar_location_text_icon',array(
		'label'	=> __('Add Topbar Text Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_top_bar',
		'setting'	=> 'pest_control_treatment_topbar_location_text_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('pest_control_treatment_topbar_add_text_location',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_topbar_add_text_location',array(
		'label'	=> esc_html__('Add Topbar Text','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Find Location', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_find_us_btn_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('pest_control_treatment_find_us_btn_link',array(
		'label'	=> esc_html__('Add Link','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'www.example-info.com', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_top_bar',
		'type'=> 'url'
	));

	$wp_customize->add_setting('pest_control_treatment_phone_icon',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
        $wp_customize,'pest_control_treatment_phone_icon',array(
		'label'	=> __('Add Phone Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_top_bar',
		'setting'	=> 'pest_control_treatment_phone_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('pest_control_treatment_phone_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'pest_control_treatment_sanitize_phone_number'
	));
	$wp_customize->add_control('pest_control_treatment_phone_number',array(
		'label'	=> __('Add Phone number','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( '+101 987-456-3210', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_appointment_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_appointment_button_text',array(
		'label'	=> __('Add Button Text','pest-control-treatment'),
		'input_attrs' => array(
        'placeholder' => __( 'Appointment', 'pest-control-treatment' ),
      ),
		'section'=> 'pest_control_treatment_top_bar',
		'type'=> 'text',
	));

	$wp_customize->add_setting('pest_control_treatment_appointment_btn_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('pest_control_treatment_appointment_btn_link',array(
		'label'	=> esc_html__('Add Button Link','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'www.example-info.com', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_top_bar',
		'type'=> 'url'
	));

	$wp_customize->add_setting( 'pest_control_treatment_wishlist_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
    ));
    $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_wishlist_hide_show',
       array(
		'label' => esc_html__( 'Show / Hide Wishlist','pest-control-treatment' ),
		'section' => 'pest_control_treatment_top_bar'
    )));

	$wp_customize->add_setting('pest_control_treatment_heart_icon',array(
		'default'	=> 'fa-solid fa-heart',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
        $wp_customize,'pest_control_treatment_heart_icon',array(
		'label'	=> __('Add Wishlist Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_top_bar',
		'setting'	=> 'pest_control_treatment_heart_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'pest_control_treatment_cart_hide_show',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
    ));
    $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_cart_hide_show',array(
      	'label' => esc_html__( 'Show / Hide Cart','pest-control-treatment' ),
      	'section' => 'pest_control_treatment_top_bar'
    )));

	$wp_customize->add_setting('pest_control_treatment_cart_icon',array(
		'default'	=> 'fa-solid fa-cart-shopping',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
        $wp_customize,'pest_control_treatment_cart_icon',array(
		'label'	=> __('Add Cart Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_top_bar',
		'setting'	=> 'pest_control_treatment_cart_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'pest_control_treatment_header_search',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
    ));
    $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_header_search',array(
      	'label' => esc_html__( 'Show / Hide Search','pest-control-treatment' ),
      	'section' => 'pest_control_treatment_top_bar'
    )));

    //Sticky Header
		$wp_customize->add_setting( 'pest_control_treatment_sticky_header',array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
    ));
    $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_sticky_header',array(
        'label' => esc_html__( 'Sticky Header','pest-control-treatment' ),
        'section' => 'pest_control_treatment_top_bar'
    )));

    $wp_customize->add_setting('pest_control_treatment_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_sticky_header_padding',array(
		'label'	=> __('Sticky Header Padding','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_top_bar',
		'type'=> 'text'
	));

	//Banner
	$wp_customize->add_section( 'pest_control_treatment_bannersettings' , array(
  		'title'      => __( 'Banner Settings', 'pest-control-treatment' ),
		'panel' => 'pest_control_treatment_panel_id',
		'description' => __('For more options of Banner section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/pest-control-wordpress-theme">GET PRO</a>','pest-control-treatment'),
	) );

	$wp_customize->add_setting( 'pest_control_treatment_banner_hide_show',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
	));
	$wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_banner_hide_show',array(
		'label' => esc_html__( 'Show / Hide Banner','pest-control-treatment' ),
		'section' => 'pest_control_treatment_bannersettings'
	)));

	$wp_customize->add_setting('pest_control_treatment_banner_background_color', array(
		'default'           => '#FEF4D8',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pest_control_treatment_banner_background_color', array(
		'label'    => __('Banner Background Color', 'pest-control-treatment'),
		'section'  => 'pest_control_treatment_bannersettings',
	)));

	$wp_customize->add_setting('pest_control_treatment_service_banner_player_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'pest_control_treatment_service_banner_player_image',array(
      'label' => __('Image','pest-control-treatment'),
      'description' => __('Transparent Background Side Image size (660px x 660px)','pest-control-treatment'),
      'section' => 'pest_control_treatment_bannersettings',
	)));

	$wp_customize->add_setting('pest_control_treatment_slider_tagline_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_slider_tagline_title',array(
		'label'	=> esc_html__( 'Banner Heading', 'pest-control-treatment' ),
		'section'	=> 'pest_control_treatment_bannersettings',
		'type'		=> 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'Guarding Your Home : Tailored Pest Control Treatment Solutions for Every Need', 'pest-control-treatment' ),
	    ),
	));

	$wp_customize->add_setting('pest_control_treatment_slider_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_slider_text',array(
		'label'	=> esc_html__( 'Banner Text', 'pest-control-treatment' ),
		'section'	=> 'pest_control_treatment_bannersettings',
		'type'		=> 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'pest-control-treatment' ),
	    ),
	));

	$wp_customize->add_setting('pest_control_treatment_banner_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_banner_button_text',array(
		'label'	=> esc_html__( 'Button Text', 'pest-control-treatment' ),
		'section'	=> 'pest_control_treatment_bannersettings',
		'type'		=> 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'Read More', 'pest-control-treatment' ),
	    ),
	));

	$wp_customize->add_setting('pest_control_treatment_banner_btn_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('pest_control_treatment_banner_btn_link',array(
		'label'	=> esc_html__('Add Button Link','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'www.example-info.com', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_bannersettings',
		'type'=> 'url'
	));

 	$wp_customize->add_setting('pest_control_treatment_banner_small_masquito_icon',array(
		'default'	=> 'fa-solid fa-mosquito',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
        $wp_customize,'pest_control_treatment_banner_small_masquito_icon', array(
		'label'	=> __('Add Large Masquito Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_bannersettings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('pest_control_treatment_review_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_review_number',array(
		'label'	=> __('Review Count','pest-control-treatment'),
		'section'	=> 'pest_control_treatment_bannersettings',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('pest_control_treatment_review_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_review_text',array(
		'label'	=> __('Review Text','pest-control-treatment'),
		'section'	=> 'pest_control_treatment_bannersettings',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_social_icons',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_social_icons',array(
		'label' =>  __('Steps to setup social icons','pest-control-treatment'),
		'description' => __('<p>1. Go to Dashboard >> Appearance >> Widgets</p>
			<p>2. Add Vw Social Icon Widget in Social Widget area.</p>
			<p>3. Add social icons url and save.</p>','pest-control-treatment'),
		'section'=> 'pest_control_treatment_bannersettings',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('pest_control_treatment_social_icon_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_social_icon_btn',array(
		'description' => "<a target='_blank' href='". admin_url('widgets.php') ." '>Setup Banner Social Icons</a>",
		'section'=> 'pest_control_treatment_bannersettings',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('pest_control_treatment_social_icon_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_social_icon_text',array(
		'label'	=> esc_html__( 'Social Media Text', 'pest-control-treatment' ),
		'section'	=> 'pest_control_treatment_bannersettings',
		'type'		=> 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'Follow On Social Media', 'pest-control-treatment' ),
	    ),
	));

	//Pests Problem Section
	$wp_customize->add_section('pest_control_treatment_pests_problem', array(
		'title'       => __('Pests Problem Section', 'pest-control-treatment'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','pest-control-treatment'),
		'priority'    => null,
		'panel'       => 'pest_control_treatment_panel_id',
	));

	$wp_customize->add_setting('pest_control_treatment_pests_problem_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_pests_problem_text',array(
		'description' => __('<p>1. More options for Pests Problem section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Pests Problem section.</p>','pest-control-treatment'),
		'section'=> 'pest_control_treatment_pests_problem',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('pest_control_treatment_pests_problem_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_pests_problem_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=pest_control_treatment_guide') ." '>More Info</a>",
		'section'=> 'pest_control_treatment_pests_problem',
		'type'=> 'hidden'
	));

	//About Us Section
	$wp_customize->add_section('pest_control_treatment_about_us', array(
		'title'       => __('About Us Section', 'pest-control-treatment'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','pest-control-treatment'),
		'priority'    => null,
		'panel'       => 'pest_control_treatment_panel_id',
	));

	$wp_customize->add_setting('pest_control_treatment_about_us_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_about_us_text',array(
		'description' => __('<p>1. More options for About Us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for About Us section.</p>','pest-control-treatment'),
		'section'=> 'pest_control_treatment_about_us',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('pest_control_treatment_about_us_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_about_us_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=pest_control_treatment_guide') ." '>More Info</a>",
		'section'=> 'pest_control_treatment_about_us',
		'type'=> 'hidden'
	));

	// Professional Services Section
	$wp_customize->add_section('pest_control_treatment_about_section',array(
		'title'	=> __('Professional Services Section','pest-control-treatment'),
		'panel' => 'pest_control_treatment_panel_id',
		'description' => __('For more options of Professional Services section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/pest-control-wordpress-theme">GET PRO</a>','pest-control-treatment'),
	));

	$wp_customize->add_setting('pest_control_treatment_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_section_title',array(
		'label'	=> esc_html__( 'Professional Services Title', 'pest-control-treatment' ),
		'section'	=> 'pest_control_treatment_about_section',
		'type'		=> 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'Professional Services', 'pest-control-treatment' ),
	    ),
	));

	$wp_customize->add_setting('pest_control_treatment_feature_courses_tagline_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_feature_courses_tagline_title',array(
		'label'	=> esc_html__( 'Professional Services Heading', 'pest-control-treatment' ),
		'section'	=> 'pest_control_treatment_about_section',
		'type'		=> 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'pest-control-treatment' ),
	    ),
	));

	$wp_customize->add_setting('pest_control_treatment_services_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_services_number',array(
		'label'	=> esc_html__('No of Tabs to show','pest-control-treatment'),
		'description' => __('Add Count and Refresh Page','pest-control-treatment'),
		'section'=> 'pest_control_treatment_about_section',
		'type'=> 'number'
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst[]='Select';
	foreach($post_list as $post){
		$pst[$post->ID] = $post->post_title;
	}
	
	$pest_control_treatment_featured_post = get_theme_mod('pest_control_treatment_services_number','');	
    for ($pest_control_treatment_j = 1;$pest_control_treatment_j <= $pest_control_treatment_featured_post;$pest_control_treatment_j++ ) {
		$wp_customize->add_setting('pest_control_treatment_services_text'.$pest_control_treatment_j,array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('pest_control_treatment_services_text'.$pest_control_treatment_j,array(
			'label'	=> esc_html__('Tab ','pest-control-treatment').$pest_control_treatment_j,
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'All', 'pest-control-treatment' ),
	        ),
			'section'=> 'pest_control_treatment_about_section',
			'type'=> 'text'
		));

	$wp_customize->add_setting('pest_control_treatment_services_post_count'.$pest_control_treatment_j,array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_services_post_count'.$pest_control_treatment_j,array(
		'label'	=> esc_html__('No of Posts to show Tab ','pest-control-treatment'),
		'description' => __('Add Count and Refresh Page','pest-control-treatment'),
		'section'=> 'pest_control_treatment_about_section',
		'type'=> 'number'
	));

	$pest_control_treatment_services_post_count = get_theme_mod('pest_control_treatment_services_post_count'.$pest_control_treatment_j,'');	

	for ( $pest_control_treatment_i = 1; $pest_control_treatment_i <= $pest_control_treatment_services_post_count; $pest_control_treatment_i++ ) {
		$wp_customize->add_setting('pest_control_treatment_services_category'.$pest_control_treatment_i.$pest_control_treatment_j,array(
			'sanitize_callback' => 'pest_control_treatment_sanitize_choices',
		));
		$wp_customize->add_control('pest_control_treatment_services_category'.$pest_control_treatment_i.$pest_control_treatment_j,array(
			'type'    => 'select',
			'choices' => $pst,
			'label' => __('Select post','pest-control-treatment'),
			'section' => 'pest_control_treatment_about_section',
		));

 	$wp_customize->add_setting('pest_control_treatment_single_icon'.$pest_control_treatment_i.$pest_control_treatment_j,array(
	    'default' => 'fas fa-building',
	    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser($wp_customize,'pest_control_treatment_single_icon'.$pest_control_treatment_i.$pest_control_treatment_j,array(
		'label' => __('Add Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section' => 'pest_control_treatment_about_section',
		'setting' => 'pest_control_treatment_single_icon',
		'type'    => 'icon'
	)));
	}}

    //Blog post  excerpt
	$wp_customize->add_setting( 'pest_control_treatment_feature_courses_number_post', array(
		'default'              => 100,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'pest_control_treatment_sanitize_number_range'
	) );
	$wp_customize->add_control( 'pest_control_treatment_feature_courses_number_post', array(
		'label'       => esc_html__( 'Post Excerpt length','pest-control-treatment' ),
		'description' => __('Post Description Excerpt length adjust manually','pest-control-treatment'),
		'section'     => 'pest_control_treatment_about_section',
		'type'        => 'range',
		'settings'    => 'pest_control_treatment_feature_courses_number_post',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting('pest_control_treatment_blog_excerpt_suffix1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_blog_excerpt_suffix1',array(
		'label'	=> __('Add Post Excerpt Suffix','pest-control-treatment'),
		'input_attrs' => array(
      'placeholder' => __( '[...]', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_about_section',
		'type'=> 'text'
	));

	//Counter Offer Section
	$wp_customize->add_section('pest_control_treatment_counter_offer', array(
		'title'       => __('Counter Offer Section', 'pest-control-treatment'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','pest-control-treatment'),
		'priority'    => null,
		'panel'       => 'pest_control_treatment_panel_id',
	));

	$wp_customize->add_setting('pest_control_treatment_counter_offer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_counter_offer_text',array(
		'description' => __('<p>1. More options for Counter Offer section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Counter Offer section.</p>','pest-control-treatment'),
		'section'=> 'pest_control_treatment_counter_offer',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('pest_control_treatment_counter_offer_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_counter_offer_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=pest_control_treatment_guide') ." '>More Info</a>",
		'section'=> 'pest_control_treatment_counter_offer',
		'type'=> 'hidden'
	));

	//Choose Section
	$wp_customize->add_section('pest_control_treatment_choose_sec', array(
		'title'       => __('Choose Section', 'pest-control-treatment'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','pest-control-treatment'),
		'priority'    => null,
		'panel'       => 'pest_control_treatment_panel_id',
	));

	$wp_customize->add_setting('pest_control_treatment_choose_sec_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_choose_sec_text',array(
		'description' => __('<p>1. More options for Choose section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Choose section.</p>','pest-control-treatment'),
		'section'=> 'pest_control_treatment_choose_sec',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('pest_control_treatment_choose_sec_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_choose_sec_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=pest_control_treatment_guide') ." '>More Info</a>",
		'section'=> 'pest_control_treatment_choose_sec',
		'type'=> 'hidden'
	));

	//Counter Section
	$wp_customize->add_section('pest_control_treatment_counter_sec', array(
		'title'       => __('Counter Section', 'pest-control-treatment'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','pest-control-treatment'),
		'priority'    => null,
		'panel'       => 'pest_control_treatment_panel_id',
	));

	$wp_customize->add_setting('pest_control_treatment_counter_sec_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_counter_sec_text',array(
		'description' => __('<p>1. More options for Counter section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Counter section.</p>','pest-control-treatment'),
		'section'=> 'pest_control_treatment_counter_sec',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('pest_control_treatment_counter_sec_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_counter_sec_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=pest_control_treatment_guide') ." '>More Info</a>",
		'section'=> 'pest_control_treatment_counter_sec',
		'type'=> 'hidden'
	));

	//Popular Products Section
	$wp_customize->add_section('pest_control_treatment_popular_products', array(
		'title'       => __('Popular Products Section', 'pest-control-treatment'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','pest-control-treatment'),
		'priority'    => null,
		'panel'       => 'pest_control_treatment_panel_id',
	));

	$wp_customize->add_setting('pest_control_treatment_popular_products_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_popular_products_text',array(
		'description' => __('<p>1. More options for Popular Products section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Popular Products section.</p>','pest-control-treatment'),
		'section'=> 'pest_control_treatment_popular_products',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('pest_control_treatment_popular_products_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_popular_products_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=pest_control_treatment_guide') ." '>More Info</a>",
		'section'=> 'pest_control_treatment_popular_products',
		'type'=> 'hidden'
	));

	//FAQ Section
	$wp_customize->add_section('pest_control_treatment_faq_sec', array(
		'title'       => __('FAQ Section', 'pest-control-treatment'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','pest-control-treatment'),
		'priority'    => null,
		'panel'       => 'pest_control_treatment_panel_id',
	));

	$wp_customize->add_setting('pest_control_treatment_faq_sec_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_faq_sec_text',array(
		'description' => __('<p>1. More options for FAQ section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for FAQ section.</p>','pest-control-treatment'),
		'section'=> 'pest_control_treatment_faq_sec',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('pest_control_treatment_faq_sec_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_faq_sec_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=pest_control_treatment_guide') ." '>More Info</a>",
		'section'=> 'pest_control_treatment_faq_sec',
		'type'=> 'hidden'
	));

	//Our Newsletter Section
	$wp_customize->add_section('pest_control_treatment_our_newsletter', array(
		'title'       => __('Our Newsletter Section', 'pest-control-treatment'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','pest-control-treatment'),
		'priority'    => null,
		'panel'       => 'pest_control_treatment_panel_id',
	));

	$wp_customize->add_setting('pest_control_treatment_our_newsletter_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_our_newsletter_text',array(
		'description' => __('<p>1. More options for Our Newsletter section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Our Newsletter section.</p>','pest-control-treatment'),
		'section'=> 'pest_control_treatment_our_newsletter',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('pest_control_treatment_our_newsletter_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_our_newsletter_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=pest_control_treatment_guide') ." '>More Info</a>",
		'section'=> 'pest_control_treatment_our_newsletter',
		'type'=> 'hidden'
	));

	//Testimonial
	$wp_customize->add_section( 'pest_control_treatment_sponsorsettings' , array(
  	'title'      => __( 'Testimonial Settings', 'pest-control-treatment' ),
		'panel' => 'pest_control_treatment_panel_id',
		'description' => __('For more options of Testimonial section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/pest-control-wordpress-theme">GET PRO</a>','pest-control-treatment'),
	) );

	$wp_customize->add_setting('pest_control_treatment_slide_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('pest_control_treatment_slide_number',array(
		'label'	=> __('Number of slides to show','pest-control-treatment'),
		'description' => __('Add counts and refresh page','pest-control-treatment'),
		'section'	=> 'pest_control_treatment_sponsorsettings',
		'type'		=> 'number',
		'input_attrs' => array(
        'min' => 0,
        'max' => 5,
    )
	));

	$pest_control_treatment_count =  get_theme_mod('pest_control_treatment_slide_number');

	for($pest_control_treatment_i=1; $pest_control_treatment_i<=$pest_control_treatment_count; $pest_control_treatment_i++) {

		$wp_customize->add_setting('pest_control_treatment_client_tagline_title'.$pest_control_treatment_i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('pest_control_treatment_client_tagline_title'.$pest_control_treatment_i,array(
			'label'	=> esc_html__( 'Professional Services Title', 'pest-control-treatment' ),
			'section'	=> 'pest_control_treatment_sponsorsettings',
			'type'		=> 'text',
			'input_attrs' => array(
		      'placeholder' => __( 'What Our Clients Says?', 'pest-control-treatment' ),
		    ),
		));

		$wp_customize->add_setting('pest_control_treatment_client_text'.$pest_control_treatment_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('pest_control_treatment_client_text'.$pest_control_treatment_i,array(
			'label'	=> esc_html__( 'Short Text', 'pest-control-treatment' ),
			'section'	=> 'pest_control_treatment_sponsorsettings',
			'type'		=> 'text',
			'input_attrs' => array(
		      'placeholder' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'pest-control-treatment' ),
		    ),
		));

		$wp_customize->add_setting('pest_control_treatment_client_text1'.$pest_control_treatment_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('pest_control_treatment_client_text1'.$pest_control_treatment_i,array(
			'label'	=> esc_html__( 'Long Text', 'pest-control-treatment' ),
			'section'	=> 'pest_control_treatment_sponsorsettings',
			'type'		=> 'text',
			'input_attrs' => array(
		      'placeholder' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'pest-control-treatment' ),
		    ),
		));

		$wp_customize->add_setting('pest_control_treatment_service_sponsor_image'.$pest_control_treatment_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'pest_control_treatment_service_sponsor_image'.$pest_control_treatment_i,array(
	      'label' => __('Author Image','pest-control-treatment'),
	      'description' => __('Image size (150px x 200px)','pest-control-treatment'),
	      'section' => 'pest_control_treatment_sponsorsettings',
		)));

		$wp_customize->add_setting('pest_control_treatment_author_tagline_title'.$pest_control_treatment_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('pest_control_treatment_author_tagline_title'.$pest_control_treatment_i,array(
			'label'	=> esc_html__( 'Author Title', 'pest-control-treatment' ),
			'section'	=> 'pest_control_treatment_sponsorsettings',
			'type'		=> 'text',
			'input_attrs' => array(
		      'placeholder' => __( 'Cries Morning', 'pest-control-treatment' ),
		    ),
		));

		$wp_customize->add_setting('pest_control_treatment_author_text'.$pest_control_treatment_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('pest_control_treatment_author_text'.$pest_control_treatment_i,array(
			'label'	=> esc_html__( 'Designation', 'pest-control-treatment' ),
			'section'	=> 'pest_control_treatment_sponsorsettings',
			'type'		=> 'text',
			'input_attrs' => array(
		      'placeholder' => __( 'Manager', 'pest-control-treatment' ),
		    ),
		));

		$wp_customize->add_setting('pest_control_treatment_service_client_image'.$pest_control_treatment_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'pest_control_treatment_service_client_image'.$pest_control_treatment_i,array(
	      'label' => __('Image','pest-control-treatment'),
	      'description' => __('Image size (150px x 200px)','pest-control-treatment'),
	      'section' => 'pest_control_treatment_sponsorsettings',
		)));
	}

	//Professionals Team Section
	$wp_customize->add_section('pest_control_treatment_professionals_team', array(
		'title'       => __('Professionals Team Section', 'pest-control-treatment'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','pest-control-treatment'),
		'priority'    => null,
		'panel'       => 'pest_control_treatment_panel_id',
	));

	$wp_customize->add_setting('pest_control_treatment_professionals_team_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_professionals_team_text',array(
		'description' => __('<p>1. More options for Professionals Team section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Professionals Team section.</p>','pest-control-treatment'),
		'section'=> 'pest_control_treatment_professionals_team',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('pest_control_treatment_professionals_team_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_professionals_team_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=pest_control_treatment_guide') ." '>More Info</a>",
		'section'=> 'pest_control_treatment_professionals_team',
		'type'=> 'hidden'
	));

	//Blog News Section
	$wp_customize->add_section('pest_control_treatment_blog_news', array(
		'title'       => __('Blog News Section', 'pest-control-treatment'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','pest-control-treatment'),
		'priority'    => null,
		'panel'       => 'pest_control_treatment_panel_id',
	));

	$wp_customize->add_setting('pest_control_treatment_blog_news_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_blog_news_text',array(
		'description' => __('<p>1. More options for Blog News section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Blog News section.</p>','pest-control-treatment'),
		'section'=> 'pest_control_treatment_blog_news',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('pest_control_treatment_blog_news_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_blog_news_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=pest_control_treatment_guide') ." '>More Info</a>",
		'section'=> 'pest_control_treatment_blog_news',
		'type'=> 'hidden'
	));

	//Gallery Section
	$wp_customize->add_section('pest_control_treatment_gallery', array(
		'title'       => __('Gallery Section', 'pest-control-treatment'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','pest-control-treatment'),
		'priority'    => null,
		'panel'       => 'pest_control_treatment_panel_id',
	));

	$wp_customize->add_setting('pest_control_treatment_gallery_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_gallery_text',array(
		'description' => __('<p>1. More options for Gallery section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Gallery section.</p>','pest-control-treatment'),
		'section'=> 'pest_control_treatment_gallery',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('pest_control_treatment_gallery_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_gallery_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=pest_control_treatment_guide') ." '>More Info</a>",
		'section'=> 'pest_control_treatment_gallery',
		'type'=> 'hidden'
	));

	//Partner Section
	$wp_customize->add_section('pest_control_treatment_partner', array(
		'title'       => __('Partner Section', 'pest-control-treatment'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','pest-control-treatment'),
		'priority'    => null,
		'panel'       => 'pest_control_treatment_panel_id',
	));

	$wp_customize->add_setting('pest_control_treatment_partner_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_partner_text',array(
		'description' => __('<p>1. More options for Partner section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Partner section.</p>','pest-control-treatment'),
		'section'=> 'pest_control_treatment_partner',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('pest_control_treatment_partner_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_partner_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=pest_control_treatment_guide') ." '>More Info</a>",
		'section'=> 'pest_control_treatment_partner',
		'type'=> 'hidden'
	));

	//Footer Text
	$wp_customize->add_section('pest_control_treatment_footer',array(
		'title'	=> esc_html__('Footer Settings','pest-control-treatment'),
		'panel' => 'pest_control_treatment_panel_id',
		'description' => __('For more options of Footer section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/pest-control-wordpress-theme">GET PRO</a>','pest-control-treatment'),
	));

	$wp_customize->add_setting( 'pest_control_treatment_footer_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
    ));
    $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_footer_hide_show',array(
      'label' => esc_html__( 'Show / Hide Footer','pest-control-treatment' ),
      'section' => 'pest_control_treatment_footer'
    )));

 	// font size
	$wp_customize->add_setting('pest_control_treatment_button_footer_font_size',array(
		'default'=> 25,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_button_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','pest-control-treatment'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'pest_control_treatment_footer',
	));

	$wp_customize->add_setting('pest_control_treatment_button_footer_heading_letter_spacing',array(
		'default'=> 1,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_button_footer_heading_letter_spacing',array(
		'label'	=> __('Heading Letter Spacing','pest-control-treatment'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'pest_control_treatment_footer',
	));

	// text trasform
	$wp_customize->add_setting('pest_control_treatment_button_footer_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_button_footer_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Heading Text Transform','pest-control-treatment'),
		'choices' => array(
			'Uppercase' => __('Uppercase','pest-control-treatment'),
			'Capitalize' => __('Capitalize','pest-control-treatment'),
			'Lowercase' => __('Lowercase','pest-control-treatment'),
		),
		'section'=> 'pest_control_treatment_footer',
	));

	$wp_customize->add_setting('pest_control_treatment_footer_heading_weight',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_footer_heading_weight',array(
        'type' => 'select',
        'label' => __('Heading Font Weight','pest-control-treatment'),
        'section' => 'pest_control_treatment_footer',
        'choices' => array(
        	'100' => __('100','pest-control-treatment'),
            '200' => __('200','pest-control-treatment'),
            '300' => __('300','pest-control-treatment'),
            '400' => __('400','pest-control-treatment'),
            '500' => __('500','pest-control-treatment'),
            '600' => __('600','pest-control-treatment'),
            '700' => __('700','pest-control-treatment'),
            '800' => __('800','pest-control-treatment'),
            '900' => __('900','pest-control-treatment'),
        ),
	) );

	$wp_customize->add_setting('pest_control_treatment_footer_template',array(
		'default'	=> esc_html('pest_control_treatment-footer-one'),
		'sanitize_callback'	=> 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_footer_template',array(
		'label'	=> esc_html__('Footer style','pest-control-treatment'),
		'section'	=> 'pest_control_treatment_footer',
		'setting'	=> 'pest_control_treatment_footer_template',
		'type' => 'select',
		'choices' => array(
			'pest_control_treatment-footer-one' => esc_html__('Style 1', 'pest-control-treatment'),
			'pest_control_treatment-footer-two' => esc_html__('Style 2', 'pest-control-treatment'),
			'pest_control_treatment-footer-three' => esc_html__('Style 3', 'pest-control-treatment'),
			'pest_control_treatment-footer-four' => esc_html__('Style 4', 'pest-control-treatment'),
			'pest_control_treatment-footer-five' => esc_html__('Style 5', 'pest-control-treatment'),
		)
	));

	$wp_customize->add_setting('pest_control_treatment_footer_background_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pest_control_treatment_footer_background_color', array(
		'label'    => __('Footer Background Color', 'pest-control-treatment'),
		'section'  => 'pest_control_treatment_footer',
	)));

	$wp_customize->add_setting('pest_control_treatment_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'pest_control_treatment_footer_background_image',array(
        'label' => __('Footer Background Image','pest-control-treatment'),
        'section' => 'pest_control_treatment_footer'
	)));

	$wp_customize->add_setting('pest_control_treatment_footer_img_position',array(
	  'default' => 'center center',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','pest-control-treatment'),
		'section' => 'pest_control_treatment_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'pest-control-treatment' ),
			'center top'   => esc_html__( 'Top', 'pest-control-treatment' ),
			'right top'   => esc_html__( 'Top Right', 'pest-control-treatment' ),
			'left center'   => esc_html__( 'Left', 'pest-control-treatment' ),
			'center center'   => esc_html__( 'Center', 'pest-control-treatment' ),
			'right center'   => esc_html__( 'Right', 'pest-control-treatment' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'pest-control-treatment' ),
			'center bottom'   => esc_html__( 'Bottom', 'pest-control-treatment' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'pest-control-treatment' ),
		),
	));

  // Footer
  $wp_customize->add_setting('pest_control_treatment_img_footer',array(
    'default'=> 'scroll',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
  ));
  $wp_customize->add_control('pest_control_treatment_img_footer',array(
    'type' => 'select',
    'label' => __('Footer Background Attatchment','pest-control-treatment'),
    'choices' => array(
      'fixed' => __('fixed','pest-control-treatment'),
      'scroll' => __('scroll','pest-control-treatment'),
    ),
    'section'=> 'pest_control_treatment_footer',
  ));

  // footer padding
  $wp_customize->add_setting('pest_control_treatment_footer_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('pest_control_treatment_footer_padding',array(
    'label' => __('Footer Top Bottom Padding','pest-control-treatment'),
    'description' => __('Enter a value in pixels. Example:20px','pest-control-treatment'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'pest-control-treatment' ),
    ),
    'section'=> 'pest_control_treatment_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('pest_control_treatment_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
  ));
  $wp_customize->add_control('pest_control_treatment_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','pest-control-treatment'),
    'section' => 'pest_control_treatment_footer',
    'choices' => array(
      'Left' => __('Left','pest-control-treatment'),
      'Center' => __('Center','pest-control-treatment'),
      'Right' => __('Right','pest-control-treatment')
    ),
  ) );

  $wp_customize->add_setting('pest_control_treatment_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
  ));
  $wp_customize->add_control('pest_control_treatment_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','pest-control-treatment'),
    'section' => 'pest_control_treatment_footer',
    'choices' => array(
      'Left' => __('Left','pest-control-treatment'),
      'Center' => __('Center','pest-control-treatment'),
      'Right' => __('Right','pest-control-treatment')
  	),
	) );
	
	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('pest_control_treatment_footer_text', array(
		'selector' => '.copyright p',
		'render_callback' => 'pest_control_treatment_Customize_partial_pest_control_treatment_footer_text',
	));

	$wp_customize->add_setting('pest_control_treatment_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_footer_text',array(
		'label'	=> esc_html__('Copyright Text','pest-control-treatment'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Copyright 2024, .....', 'pest-control-treatment' ),
      ),
		'section'=> 'pest_control_treatment_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'pest_control_treatment_copyright_hide_show',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
	));
	$wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_copyright_hide_show',array(
		'label' => esc_html__( 'Show / Hide Copyright','pest-control-treatment' ),
		'section' => 'pest_control_treatment_footer'
	)));

	$wp_customize->add_setting('pest_control_treatment_copyright_alingment',array(
    'default' => 'center',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Image_Radio_Control($wp_customize, 'pest_control_treatment_copyright_alingment', array(
    'type' => 'select',
    'label' => esc_html__('Copyright Alignment','pest-control-treatment'),
    'section' => 'pest_control_treatment_footer',
    'settings' => 'pest_control_treatment_copyright_alingment',
    'choices' => array(
        'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
        'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
        'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
  ))));

	$wp_customize->add_setting('pest_control_treatment_copyright_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pest_control_treatment_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'pest-control-treatment'),
		'section'  => 'pest_control_treatment_footer',
	)));

	$wp_customize->add_setting('pest_control_treatment_copyright_font_size',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_copyright_font_size',array(
		'label' => __('Copyright Font Size','pest-control-treatment'),
		'description' => __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'pest-control-treatment' ),
	    ),
		'section'=> 'pest_control_treatment_footer',
		'type'=> 'text'
	));

  $wp_customize->add_setting( 'pest_control_treatment_hide_show_scroll',array(
  	'default' => 1,
  	'transport' => 'refresh',
  	'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  ));
  $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_hide_show_scroll',array(
  	'label' => esc_html__( 'Show / Hide Scroll to Top','pest-control-treatment' ),
  	'section' => 'pest_control_treatment_footer'
  )));

  //Selective Refresh
	$wp_customize->selective_refresh->add_partial('pest_control_treatment_scroll_to_top_icon', array(
		'selector' => '.scrollup i',
		'render_callback' => 'pest_control_treatment_Customize_partial_pest_control_treatment_scroll_to_top_icon',
	));

  $wp_customize->add_setting('pest_control_treatment_scroll_top_alignment',array(
    'default' => 'Right',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Image_Radio_Control($wp_customize, 'pest_control_treatment_scroll_top_alignment', array(
    'type' => 'select',
    'label' => esc_html__('Scroll To Top','pest-control-treatment'),
    'section' => 'pest_control_treatment_footer',
    'settings' => 'pest_control_treatment_scroll_top_alignment',
    'choices' => array(
        'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
        'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
        'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
  ))));

 	$wp_customize->add_setting('pest_control_treatment_scroll_top_icon',array(
    'default' => 'fas fa-long-arrow-alt-up',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser($wp_customize,'pest_control_treatment_scroll_top_icon',array(
    'label' => __('Add Scroll to Top Icon','pest-control-treatment'),
    'transport' => 'refresh',
    'section' => 'pest_control_treatment_footer',
    'setting' => 'pest_control_treatment_scroll_top_icon',
    'type'    => 'icon'
  )));

  $wp_customize->add_setting('pest_control_treatment_scroll_to_top_font_size',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('pest_control_treatment_scroll_to_top_font_size',array(
    'label' => __('Icon Font Size','pest-control-treatment'),
    'description' => __('Enter a value in pixels. Example:20px','pest-control-treatment'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'pest-control-treatment' ),
    ),
    'section'=> 'pest_control_treatment_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('pest_control_treatment_scroll_to_top_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('pest_control_treatment_scroll_to_top_padding',array(
    'label' => __('Icon Top Bottom Padding','pest-control-treatment'),
    'description' => __('Enter a value in pixels. Example:20px','pest-control-treatment'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'pest-control-treatment' ),
    ),
    'section'=> 'pest_control_treatment_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('pest_control_treatment_scroll_to_top_width',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('pest_control_treatment_scroll_to_top_width',array(
    'label' => __('Icon Width','pest-control-treatment'),
    'description' => __('Enter a value in pixels Example:20px','pest-control-treatment'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'pest-control-treatment' ),
  ),
	  'section'=> 'pest_control_treatment_footer',
	  'type'=> 'text'
  ));

  $wp_customize->add_setting('pest_control_treatment_scroll_to_top_height',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('pest_control_treatment_scroll_to_top_height',array(
    'label' => __('Icon Height','pest-control-treatment'),
    'description' => __('Enter a value in pixels. Example:20px','pest-control-treatment'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'pest-control-treatment' ),
    ),
    'section'=> 'pest_control_treatment_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting( 'pest_control_treatment_scroll_to_top_border_radius', array(
    'default'              => '',
    'transport'        => 'refresh',
    'sanitize_callback'    => 'pest_control_treatment_sanitize_number_range'
  ) );
  $wp_customize->add_control( 'pest_control_treatment_scroll_to_top_border_radius', array(
    'label'       => esc_html__( 'Icon Border Radius','pest-control-treatment' ),
    'section'     => 'pest_control_treatment_footer',
    'type'        => 'range',
    'input_attrs' => array(
      'step'             => 1,
      'min'              => 1,
      'max'              => 50,
    ),
  ) );

 	//Blog Post
	$wp_customize->add_panel( 'pest_control_treatment_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'pest-control-treatment' ),
		'panel' => 'pest_control_treatment_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'pest_control_treatment_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'pest-control-treatment' ),
		'panel' => 'pest_control_treatment_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('pest_control_treatment_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'pest_control_treatment_Customize_partial_pest_control_treatment_toggle_postdate',
	));

	//Blog layout
  $wp_customize->add_setting('pest_control_treatment_blog_layout_option',array(
    'default' => 'Default',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
  ));
  $wp_customize->add_control(new Pest_Control_Treatment_Image_Radio_Control($wp_customize, 'pest_control_treatment_blog_layout_option', array(
    'type' => 'select',
    'label' => __('Blog Post Layouts','pest-control-treatment'),
    'section' => 'pest_control_treatment_post_settings',
    'choices' => array(
      'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
      'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
      'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
  ))));

	$wp_customize->add_setting('pest_control_treatment_theme_options',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_theme_options',array(
    'type' => 'select',
    'label' => esc_html__('Post Sidebar Layout','pest-control-treatment'),
    'description' => esc_html__('Here you can change the sidebar layout for posts. ','pest-control-treatment'),
    'section' => 'pest_control_treatment_post_settings',
    'choices' => array(
        'Left Sidebar' => esc_html__('Left Sidebar','pest-control-treatment'),
        'Right Sidebar' => esc_html__('Right Sidebar','pest-control-treatment'),
        'One Column' => esc_html__('One Column','pest-control-treatment'),
        'Three Columns' => __('Three Columns','pest-control-treatment'),
        'Four Columns' => __('Four Columns','pest-control-treatment'),
        'Grid Layout' => esc_html__('Grid Layout','pest-control-treatment')
        ),
	) );

	$wp_customize->add_setting('pest_control_treatment_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
  $wp_customize,'pest_control_treatment_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_post_settings',
		'setting'	=> 'pest_control_treatment_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting( 'pest_control_treatment_blog_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  ));
  $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_blog_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','pest-control-treatment' ),
    'section' => 'pest_control_treatment_post_settings'
  )));

	$wp_customize->add_setting('pest_control_treatment_toggle_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
  $wp_customize,'pest_control_treatment_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_post_settings',
		'setting'	=> 'pest_control_treatment_toggle_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'pest_control_treatment_blog_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  ));
  $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_blog_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','pest-control-treatment' ),
		'section' => 'pest_control_treatment_post_settings'
  )));

  $wp_customize->add_setting('pest_control_treatment_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
  $wp_customize,'pest_control_treatment_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_post_settings',
		'setting'	=> 'pest_control_treatment_toggle_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'pest_control_treatment_blog_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  ) );
  $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_blog_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','pest-control-treatment' ),
		'section' => 'pest_control_treatment_post_settings'
  )));

  $wp_customize->add_setting('pest_control_treatment_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
  $wp_customize,'pest_control_treatment_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_post_settings',
		'setting'	=> 'pest_control_treatment_toggle_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'pest_control_treatment_blog_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  ) );
  $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_blog_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','pest-control-treatment' ),
		'section' => 'pest_control_treatment_post_settings'
  )));

  $wp_customize->add_setting( 'pest_control_treatment_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
	));
  $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_featured_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','pest-control-treatment' ),
		'section' => 'pest_control_treatment_post_settings'
  )));

  $wp_customize->add_setting( 'pest_control_treatment_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'pest_control_treatment_sanitize_number_range'
	) );
	$wp_customize->add_control( 'pest_control_treatment_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','pest-control-treatment' ),
		'section'     => 'pest_control_treatment_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'pest_control_treatment_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'pest_control_treatment_sanitize_number_range'
	) );
	$wp_customize->add_control( 'pest_control_treatment_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','pest-control-treatment' ),
		'section'     => 'pest_control_treatment_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('pest_control_treatment_blog_post_featured_image_dimension',array(
   'default' => 'default',
   'sanitize_callback'	=> 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_blog_post_featured_image_dimension',array(
		'type' => 'select',
		'label'	=> __('Blog Post Featured Image Dimension','pest-control-treatment'),
		'section'	=> 'pest_control_treatment_post_settings',
		'choices' => array(
		'default' => __('Default','pest-control-treatment'),
		'custom' => __('Custom Image Size','pest-control-treatment'),
      ),
	));

	$wp_customize->add_setting('pest_control_treatment_blog_post_featured_image_custom_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('pest_control_treatment_blog_post_featured_image_custom_width',array(
		'label'	=> __('Featured Image Custom Width','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'pest-control-treatment' ),),
		'section'=> 'pest_control_treatment_post_settings',
		'type'=> 'text',
		'active_callback' => 'pest_control_treatment_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('pest_control_treatment_blog_post_featured_image_custom_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_blog_post_featured_image_custom_height',array(
		'label'	=> __('Featured Image Custom Height','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'pest-control-treatment' ),),
		'section'=> 'pest_control_treatment_post_settings',
		'type'=> 'text',
		'active_callback' => 'pest_control_treatment_blog_post_featured_image_dimension'
	));

  $wp_customize->add_setting( 'pest_control_treatment_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'pest_control_treatment_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'pest_control_treatment_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','pest-control-treatment' ),
		'section'     => 'pest_control_treatment_post_settings',
		'type'        => 'range',
		'settings'    => 'pest_control_treatment_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('pest_control_treatment_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','pest-control-treatment'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','pest-control-treatment'),
		'section'=> 'pest_control_treatment_post_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('pest_control_treatment_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Post Content','pest-control-treatment'),
    'section' => 'pest_control_treatment_post_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','pest-control-treatment'),
        'Excerpt' => esc_html__('Excerpt','pest-control-treatment'),
        'No Content' => esc_html__('No Content','pest-control-treatment')
        ),
	) );

  $wp_customize->add_setting('pest_control_treatment_blog_page_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_blog_page_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Blog Posts','pest-control-treatment'),
    'section' => 'pest_control_treatment_post_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','pest-control-treatment'),
        'Without Blocks' => __('Without Blocks','pest-control-treatment')
        ),
	) );

	$wp_customize->add_setting( 'pest_control_treatment_blog_pagination_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  ));
  $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_blog_pagination_hide_show',array(
		'label' => esc_html__( 'Show / Hide Blog Pagination','pest-control-treatment' ),
		'section' => 'pest_control_treatment_post_settings'
  )));

	$wp_customize->add_setting('pest_control_treatment_blog_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_blog_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','pest-control-treatment'),
		'input_attrs' => array(
      'placeholder' => __( '[...]', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'pest_control_treatment_blog_pagination_type', array(
    'default'			=> 'blog-page-numbers',
    'sanitize_callback'	=> 'pest_control_treatment_sanitize_choices'
  ));
  $wp_customize->add_control( 'pest_control_treatment_blog_pagination_type', array(
    'section' => 'pest_control_treatment_post_settings',
    'type' => 'select',
    'label' => __( 'Blog Pagination', 'pest-control-treatment' ),
    'choices'		=> array(
      'blog-page-numbers'  => __( 'Numeric', 'pest-control-treatment' ),
      'next-prev' => __( 'Older Posts/Newer Posts', 'pest-control-treatment' ),
  )));

  // Button Settings
	$wp_customize->add_section( 'pest_control_treatment_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'pest-control-treatment' ),
		'panel' => 'pest_control_treatment_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('pest_control_treatment_button_text', array(
		'selector' => '.post-main-box .more-btn a',
		'render_callback' => 'pest_control_treatment_Customize_partial_pest_control_treatment_button_text',
	));

  $wp_customize->add_setting('pest_control_treatment_button_text',array(
		'default'=> esc_html__('Read More','pest-control-treatment'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_button_text',array(
		'label'	=> esc_html__('Add Button Text','pest-control-treatment'),
		'input_attrs' => array(
    'placeholder' => esc_html__( 'Read More', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('pest_control_treatment_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_button_font_size',array(
		'label'	=> __('Button Font Size','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
  		'placeholder' => __( '10px', 'pest-control-treatment' ),
    ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'pest_control_treatment_button_settings',
	));


	$wp_customize->add_setting( 'pest_control_treatment_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'pest_control_treatment_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'pest_control_treatment_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','pest-control-treatment' ),
		'section'     => 'pest_control_treatment_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// button padding
	$wp_customize->add_setting('pest_control_treatment_button_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_button_top_bottom_padding',array(
		'label'	=> __('Button Top Bottom Padding','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'pest-control-treatment' ),
    ),
		'section'=> 'pest_control_treatment_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_button_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_button_left_right_padding',array(
		'label'	=> __('Button Left Right Padding','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'pest-control-treatment' ),
    ),
		'section'=> 'pest_control_treatment_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'pest-control-treatment' ),
  ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'pest_control_treatment_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('pest_control_treatment_button_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','pest-control-treatment'),
		'choices' => array(
      'Uppercase' => __('Uppercase','pest-control-treatment'),
      'Capitalize' => __('Capitalize','pest-control-treatment'),
      'Lowercase' => __('Lowercase','pest-control-treatment'),
    ),
		'section'=> 'pest_control_treatment_button_settings',
	));

	// Related Post Settings
	$wp_customize->add_section( 'pest_control_treatment_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'pest-control-treatment' ),
		'panel' => 'pest_control_treatment_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('pest_control_treatment_related_post_title', array(
		'selector' => '.related-post h3',
		'render_callback' => 'pest_control_treatment_Customize_partial_pest_control_treatment_related_post_title',
	));

  $wp_customize->add_setting( 'pest_control_treatment_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  ) );
  $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_related_post',array(
		'label' => esc_html__( 'Related Post','pest-control-treatment' ),
		'section' => 'pest_control_treatment_related_posts_settings'
  )));

  $wp_customize->add_setting('pest_control_treatment_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','pest-control-treatment'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Related Post', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_related_posts_settings',
		'type'=> 'text'
	));

 	$wp_customize->add_setting('pest_control_treatment_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'pest_control_treatment_sanitize_number_absint'
	));
	$wp_customize->add_control('pest_control_treatment_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','pest-control-treatment'),
		'input_attrs' => array(
      'placeholder' => esc_html__( '3', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'pest_control_treatment_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'pest_control_treatment_sanitize_number_range'
	) );
	$wp_customize->add_control( 'pest_control_treatment_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','pest-control-treatment' ),
		'section'     => 'pest_control_treatment_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'pest_control_treatment_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// Single Posts Settings
	$wp_customize->add_section( 'pest_control_treatment_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'pest-control-treatment' ),
		'panel' => 'pest_control_treatment_blog_post_parent_panel',
	));

	$wp_customize->add_setting('pest_control_treatment_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
  $wp_customize,'pest_control_treatment_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_single_blog_settings',
		'setting'	=> 'pest_control_treatment_single_postdate_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'pest_control_treatment_single_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
	) );
	$wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_single_postdate',array(
		'label' => esc_html__( 'Show / Hide Date','pest-control-treatment' ),
		'section' => 'pest_control_treatment_single_blog_settings'
	)));

	$wp_customize->add_setting('pest_control_treatment_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
  $wp_customize,'pest_control_treatment_single_author_icon',array(
		'label'	=> __('Add Author Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_single_blog_settings',
		'setting'	=> 'pest_control_treatment_single_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'pest_control_treatment_single_author',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
	) );
	$wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_single_author',array(
    'label' => esc_html__( 'Show / Hide Author','pest-control-treatment' ),
    'section' => 'pest_control_treatment_single_blog_settings'
	)));

 	$wp_customize->add_setting('pest_control_treatment_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
  $wp_customize,'pest_control_treatment_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_single_blog_settings',
		'setting'	=> 'pest_control_treatment_single_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'pest_control_treatment_single_comments',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
	) );
	$wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_single_comments',array(
    'label' => esc_html__( 'Show / Hide Comments','pest-control-treatment' ),
    'section' => 'pest_control_treatment_single_blog_settings'
	)));

	$wp_customize->add_setting('pest_control_treatment_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
  $wp_customize,'pest_control_treatment_single_time_icon',array(
		'label'	=> __('Add Time Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_single_blog_settings',
		'setting'	=> 'pest_control_treatment_single_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'pest_control_treatment_single_time',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
	) );
	$wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_single_time',array(
    'label' => esc_html__( 'Show / Hide Time','pest-control-treatment' ),
    'section' => 'pest_control_treatment_single_blog_settings'
	)));

	$wp_customize->add_setting( 'pest_control_treatment_toggle_tags',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
	));
  	$wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_toggle_tags', array(
		'label' => esc_html__( 'Show / Hide Tags','pest-control-treatment' ),
		'section' => 'pest_control_treatment_single_blog_settings'
  	)));

	$wp_customize->add_setting( 'pest_control_treatment_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  	) );
 	$wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','pest-control-treatment' ),
		'section' => 'pest_control_treatment_single_blog_settings'
  	)));

	// Single Posts Category
 	 $wp_customize->add_setting( 'pest_control_treatment_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
	 ) );
		$wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_single_post_category',array(
			'label' => esc_html__( 'Show / Hide Category','pest-control-treatment' ),
			'section' => 'pest_control_treatment_single_blog_settings'
	)));

	$wp_customize->add_setting( 'pest_control_treatment_singlepost_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'pest_control_treatment_sanitize_number_range'
	) );
	$wp_customize->add_control( 'pest_control_treatment_singlepost_image_box_shadow', array(
		'label'       => esc_html__( 'Single post Image Box Shadow','pest-control-treatment' ),
		'section'     => 'pest_control_treatment_single_blog_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('pest_control_treatment_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','pest-control-treatment'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','pest-control-treatment'),
		'section'=> 'pest_control_treatment_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'pest_control_treatment_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
	));
	$wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_single_blog_post_navigation_show_hide', array(
	  'label' => esc_html__( 'Show / Hide Post Navigation','pest-control-treatment' ),
	  'section' => 'pest_control_treatment_single_blog_settings'
	)));

	$wp_customize->add_setting( 'pest_control_treatment_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
    ) );
 	$wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','pest-control-treatment' ),
		'section' => 'pest_control_treatment_single_blog_settings'
  )));

	//navigation text
	$wp_customize->add_setting('pest_control_treatment_single_blog_prev_navigation_text',array(
		'default'=> 'PREVIOUS',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','pest-control-treatment'),
		'input_attrs' => array(
      'placeholder' => __( 'PREVIOUS', 'pest-control-treatment' ),
      ),
		'section'=> 'pest_control_treatment_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_single_blog_next_navigation_text',array(
		'default'=> 'NEXT',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','pest-control-treatment'),
		'input_attrs' => array(
      'placeholder' => __( 'NEXT', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_single_blog_comment_title',array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('pest_control_treatment_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','pest-control-treatment'),
		'input_attrs' => array(
      'placeholder' => __( 'Leave a Reply', 'pest-control-treatment' ),
    	),
		'section'=> 'pest_control_treatment_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_single_blog_comment_button_text',array(
		'default'=> 'Post Comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('pest_control_treatment_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','pest-control-treatment'),
		'input_attrs' => array(
    'placeholder' => __( 'Post Comment', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','pest-control-treatment'),
		'description'	=> __('Enter a value in %. Example:50%','pest-control-treatment'),
		'input_attrs' => array(
      'placeholder' => __( '100%', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_single_blog_settings',
		'type'=> 'text'
	));

	 // Grid layout setting
	$wp_customize->add_section( 'pest_control_treatment_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'pest-control-treatment' ),
		'panel' => 'pest_control_treatment_blog_post_parent_panel',
	));

	$wp_customize->add_setting('pest_control_treatment_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
        $wp_customize,'pest_control_treatment_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_grid_layout_settings',
		'setting'	=> 'pest_control_treatment_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'pest_control_treatment_grid_postdate',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  ) );
  $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_grid_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','pest-control-treatment' ),
    'section' => 'pest_control_treatment_grid_layout_settings'
  )));

	$wp_customize->add_setting('pest_control_treatment_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
        $wp_customize,'pest_control_treatment_grid_author_icon',array(
		'label'	=> __('Add Author Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_grid_layout_settings',
		'setting'	=> 'pest_control_treatment_grid_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'pest_control_treatment_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  ) );
  $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_grid_author',array(
		'label' => esc_html__( 'Show / Hide Author','pest-control-treatment' ),
		'section' => 'pest_control_treatment_grid_layout_settings'
  )));

  $wp_customize->add_setting('pest_control_treatment_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
        $wp_customize,'pest_control_treatment_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_grid_layout_settings',
		'setting'	=> 'pest_control_treatment_grid_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'pest_control_treatment_grid_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  ) );
  $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_grid_time',array(
		'label' => esc_html__( 'Show / Hide Time','pest-control-treatment' ),
		'section' => 'pest_control_treatment_grid_layout_settings'
  )));

  $wp_customize->add_setting('pest_control_treatment_grid_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
        $wp_customize,'pest_control_treatment_grid_time_icon',array(
		'label'	=> __('Add Time Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_grid_layout_settings',
		'setting'	=> 'pest_control_treatment_grid_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'pest_control_treatment_grid_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  ) );
  $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_grid_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','pest-control-treatment' ),
		'section' => 'pest_control_treatment_grid_layout_settings'
  )));

 	$wp_customize->add_setting('pest_control_treatment_grid_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_grid_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','pest-control-treatment'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','pest-control-treatment'),
		'section'=> 'pest_control_treatment_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('pest_control_treatment_display_grid_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_display_grid_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Grid Posts','pest-control-treatment'),
    'section' => 'pest_control_treatment_grid_layout_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','pest-control-treatment'),
      'Without Blocks' => __('Without Blocks','pest-control-treatment')
      ),
	) );

	$wp_customize->add_setting('pest_control_treatment_grid_button_text',array(
		'default'=> esc_html__('Read More','pest-control-treatment'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','pest-control-treatment'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_grid_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','pest-control-treatment'),
		'input_attrs' => array(
        'placeholder' => __( '[...]', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('pest_control_treatment_grid_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_grid_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Grid Post Content','pest-control-treatment'),
    'section' => 'pest_control_treatment_grid_layout_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','pest-control-treatment'),
      'Excerpt' => esc_html__('Excerpt','pest-control-treatment'),
      'No Content' => esc_html__('No Content','pest-control-treatment')
    ),
	) );

  $wp_customize->add_setting( 'pest_control_treatment_grid_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'pest_control_treatment_sanitize_number_range'
	) );
	$wp_customize->add_control( 'pest_control_treatment_grid_featured_image_border_radius', array(
		'label'       => esc_html__( 'Grid Featured Image Border Radius','pest-control-treatment' ),
		'section'     => 'pest_control_treatment_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'pest_control_treatment_grid_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'pest_control_treatment_sanitize_number_range'
	) );
	$wp_customize->add_control( 'pest_control_treatment_grid_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Grid Featured Image Box Shadow','pest-control-treatment' ),
		'section'     => 'pest_control_treatment_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Other
	$wp_customize->add_panel( 'pest_control_treatment_other_parent_panel', array(
		'title' => esc_html__( 'Other Settings', 'pest-control-treatment' ),
		'panel' => 'pest_control_treatment_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'pest_control_treatment_left_right', array(
  	'title' => esc_html__('General Settings', 'pest-control-treatment'),
		'panel' => 'pest_control_treatment_other_parent_panel'
	) );

	$wp_customize->add_setting('pest_control_treatment_width_option',array(
    'default' => 'Full Width',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Image_Radio_Control($wp_customize, 'pest_control_treatment_width_option', array(
    'type' => 'select',
    'label' => esc_html__('Width Layouts','pest-control-treatment'),
    'description' => esc_html__('Here you can change the width layout of Website.','pest-control-treatment'),
    'section' => 'pest_control_treatment_left_right',
    'choices' => array(
        'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
        'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
        'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
  ))));

	$wp_customize->add_setting('pest_control_treatment_page_layout',array(
    'default' => 'One_Column',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_page_layout',array(
    'type' => 'select',
    'label' => esc_html__('Page Sidebar Layout','pest-control-treatment'),
    'description' => esc_html__('Here you can change the sidebar layout for pages. ','pest-control-treatment'),
    'section' => 'pest_control_treatment_left_right',
    'choices' => array(
        'Left_Sidebar' => esc_html__('Left Sidebar','pest-control-treatment'),
        'Right_Sidebar' => esc_html__('Right Sidebar','pest-control-treatment'),
        'One_Column' => esc_html__('One Column','pest-control-treatment')
    ),
	) );

	$wp_customize->add_setting( 'pest_control_treatment_single_page_breadcrumb1',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
    ) );
    $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_single_page_breadcrumb1',array(
		'label' => esc_html__( 'Show / Hide Page Breadcrumb','pest-control-treatment' ),
		'section' => 'pest_control_treatment_left_right'
    )));
	
    // Pre-Loader
	$wp_customize->add_setting( 'pest_control_treatment_loader_enable',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  ) );
  $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_loader_enable',array(
    'label' => esc_html__( 'Pre-Loader','pest-control-treatment' ),
    'section' => 'pest_control_treatment_left_right'
  )));

	$wp_customize->add_setting('pest_control_treatment_preloader_bg_color', array(
		'default'           => '#FCB900',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pest_control_treatment_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'pest-control-treatment'),
		'section'  => 'pest_control_treatment_left_right',
	)));

	$wp_customize->add_setting('pest_control_treatment_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pest_control_treatment_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'pest-control-treatment'),
		'section'  => 'pest_control_treatment_left_right',
	)));

	$wp_customize->add_setting('pest_control_treatment_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'pest_control_treatment_preloader_bg_img',array(
    	'label' => __('Preloader Background Image','pest-control-treatment'),
    	'section' => 'pest_control_treatment_left_right'
	)));

	$wp_customize->add_setting('pest_control_treatment_breadcrumbs_alignment',array(
        'default' => 'Left',
        'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_breadcrumbs_alignment',array(
        'type' => 'select',
        'label' => __('Breadcrumbs Alignment','pest-control-treatment'),
        'section' => 'pest_control_treatment_left_right',
        'choices' => array(
            'Left' => __('Left','pest-control-treatment'),
            'Right' => __('Right','pest-control-treatment'),
            'Center' => __('Center','pest-control-treatment'),
        ),
	) );

    //404 Page Setting
	$wp_customize->add_section('pest_control_treatment_404_page',array(
		'title'	=> __('404 Page Settings','pest-control-treatment'),
		'panel' => 'pest_control_treatment_other_parent_panel',
	));

	$wp_customize->add_setting('pest_control_treatment_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('pest_control_treatment_404_page_title',array(
		'label'	=> __('Add Title','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('pest_control_treatment_404_page_content',array(
		'label'	=> __('Add Text','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_404_page_button_text',array(
		'label'	=> __('Add Button Text','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( 'Go Back', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('pest_control_treatment_no_results_page',array(
		'title'	=> __('No Results Page Settings','pest-control-treatment'),
		'panel' => 'pest_control_treatment_other_parent_panel',
	));

	$wp_customize->add_setting('pest_control_treatment_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('pest_control_treatment_no_results_page_title',array(
		'label'	=> __('Add Title','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('pest_control_treatment_no_results_page_content',array(
		'label'	=> __('Add Text','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_no_results_page',
		'type'=> 'text'
	));

	//Social Icon Setting
	$wp_customize->add_section('pest_control_treatment_social_icon_settings',array(
		'title'	=> __('Sidebar Social Icons Settings','pest-control-treatment'),
		'panel' => 'pest_control_treatment_other_parent_panel',
	));

	$wp_customize->add_setting('pest_control_treatment_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_social_icon_padding',array(
		'label'	=> __('Icon Padding','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_social_icon_width',array(
		'label'	=> __('Icon Width','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_social_icon_height',array(
		'label'	=> __('Icon Height','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_social_icon_settings',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('pest_control_treatment_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','pest-control-treatment'),
		'panel' => 'pest_control_treatment_other_parent_panel',
	));

	$wp_customize->add_setting( 'pest_control_treatment_responsive_topbar_hide',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
    ));
    $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_responsive_topbar_hide',array(
      'label' => esc_html__( 'Show / Hide Topbar','pest-control-treatment' ),
      'section' => 'pest_control_treatment_responsive_media'
    )));

 	$wp_customize->add_setting( 'pest_control_treatment_resp_banner_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
    ));  
    $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_resp_banner_hide_show',array(
      'label' => esc_html__( 'Show / Hide Banner','pest-control-treatment' ),
      'section' => 'pest_control_treatment_responsive_media'
    )));

    $wp_customize->add_setting( 'pest_control_treatment_sidebar_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
    ));  
    $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_sidebar_hide_show',array(
      'label' => esc_html__( 'Show / Hide Sidebar','pest-control-treatment' ),
      'section' => 'pest_control_treatment_responsive_media'
    )));

    $wp_customize->add_setting( 'pest_control_treatment_resp_scroll_top_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
    ));  
    $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_resp_scroll_top_hide_show',array(
      'label' => esc_html__( 'Show / Hide Scroll To Top','pest-control-treatment' ),
      'section' => 'pest_control_treatment_responsive_media'
    )));

    $wp_customize->add_setting( 'pest_control_treatment_stickyheader_hide_show',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
    ));  
    $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_stickyheader_hide_show',array(
      'label' => esc_html__( 'Show / Hide Sticky Header','pest-control-treatment' ),
      'section' => 'pest_control_treatment_responsive_media'
    )));

  	$wp_customize->add_setting('pest_control_treatment_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
        $wp_customize,'pest_control_treatment_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_responsive_media',
		'setting'	=> 'pest_control_treatment_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('pest_control_treatment_res_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Pest_Control_Treatment_Fontawesome_Icon_Chooser(
        $wp_customize,'pest_control_treatment_res_close_menu_icon',array(
		'label'	=> __('Add Close Menu Icon','pest-control-treatment'),
		'transport' => 'refresh',
		'section'	=> 'pest_control_treatment_responsive_media',
		'setting'	=> 'pest_control_treatment_res_close_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('pest_control_treatment_resp_menu_toggle_btn_bg_color', array(
		'default'           => '#339D55',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pest_control_treatment_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'pest-control-treatment'),
		'section'  => 'pest_control_treatment_responsive_media',
	)));

    $wp_customize->add_setting( 'pest_control_treatment_responsive_preloader_hide',array(
        'default' => false,
        'transport' => 'refresh',
        'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
    ) );
    $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_responsive_preloader_hide',array(
        'label' => esc_html__( 'Show / Hide Preloader','pest-control-treatment' ),
        'section' => 'pest_control_treatment_responsive_media'
    )));

  //Woocommerce settings
	$wp_customize->add_section('pest_control_treatment_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'pest-control-treatment'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'pest_control_treatment_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar',
		'render_callback' => 'pest_control_treatment_customize_partial_pest_control_treatment_woocommerce_shop_page_sidebar', ) );

    //Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'pest_control_treatment_woocommerce_shop_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  	) );

  	$wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( 
		$wp_customize, 'pest_control_treatment_woocommerce_shop_page_sidebar',
		array('label' => esc_html__( 'Show / Hide Shop Page Sidebar','pest-control-treatment' ), 'section' => 'pest_control_treatment_woocommerce_section'))
	);

   $wp_customize->add_setting('pest_control_treatment_shop_page_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_shop_page_layout',array(
    'type' => 'select',
    'label' => __('Shop Page Sidebar Layout','pest-control-treatment'),
    'section' => 'pest_control_treatment_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','pest-control-treatment'),
        'Right Sidebar' => __('Right Sidebar','pest-control-treatment'),
    ),
	) );

   //Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'pest_control_treatment_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar',
		'render_callback' => 'pest_control_treatment_customize_partial_pest_control_treatment_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'pest_control_treatment_woocommerce_single_product_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
   ) );
 	$wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Single Product Sidebar','pest-control-treatment' ),
		'section' => 'pest_control_treatment_woocommerce_section'
  )));

   $wp_customize->add_setting('pest_control_treatment_single_product_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_single_product_layout',array(
    'type' => 'select',
    'label' => __('Single Product Sidebar Layout','pest-control-treatment'),
    'section' => 'pest_control_treatment_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','pest-control-treatment'),
        'Right Sidebar' => __('Right Sidebar','pest-control-treatment'),
    ),
	) );

	//Products per page
    $wp_customize->add_setting('pest_control_treatment_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'pest_control_treatment_sanitize_float'
	));
	$wp_customize->add_control('pest_control_treatment_products_per_page',array(
		'label'	=> __('Products Per Page','pest-control-treatment'),
		'description' => __('Display on shop page','pest-control-treatment'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'pest_control_treatment_woocommerce_section',
		'type'=> 'number',
	));

    //Products per row
    $wp_customize->add_setting('pest_control_treatment_products_per_row',array(
		'default'=> '4',
		'sanitize_callback'	=> 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_products_per_row',array(
		'label'	=> __('Products Per Row','pest-control-treatment'),
		'description' => __('Display on shop page','pest-control-treatment'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'pest_control_treatment_woocommerce_section',
		'type'=> 'select',
		));

	//Products padding
	$wp_customize->add_setting('pest_control_treatment_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'pest_control_treatment_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'pest_control_treatment_sanitize_number_range'
	) );
	$wp_customize->add_control( 'pest_control_treatment_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','pest-control-treatment' ),
		'section'     => 'pest_control_treatment_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'pest_control_treatment_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'pest_control_treatment_sanitize_number_range'
	) );
	$wp_customize->add_control( 'pest_control_treatment_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','pest-control-treatment' ),
		'section'     => 'pest_control_treatment_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'pest_control_treatment_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'pest_control_treatment_sanitize_number_range'
	) );
	$wp_customize->add_control( 'pest_control_treatment_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','pest-control-treatment' ),
		'section'     => 'pest_control_treatment_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('pest_control_treatment_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_woocommerce_section',
		'type'=> 'text'
	));

	//Products Sale Badge
	$wp_customize->add_setting('pest_control_treatment_woocommerce_sale_position',array(
    'default' => 'right',
    'sanitize_callback' => 'pest_control_treatment_sanitize_choices'
	));
	$wp_customize->add_control('pest_control_treatment_woocommerce_sale_position',array(
    'type' => 'select',
    'label' => __('Sale Badge Position','pest-control-treatment'),
    'section' => 'pest_control_treatment_woocommerce_section',
    'choices' => array(
        'left' => __('Left','pest-control-treatment'),
        'right' => __('Right','pest-control-treatment'),
    ),
	) );

	$wp_customize->add_setting('pest_control_treatment_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('pest_control_treatment_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('pest_control_treatment_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','pest-control-treatment'),
		'description'	=> __('Enter a value in pixels. Example:20px','pest-control-treatment'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'pest-control-treatment' ),
        ),
		'section'=> 'pest_control_treatment_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'pest_control_treatment_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'pest_control_treatment_sanitize_number_range'
	) );
	$wp_customize->add_control( 'pest_control_treatment_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','pest-control-treatment' ),
		'section'     => 'pest_control_treatment_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Related Product
  $wp_customize->add_setting( 'pest_control_treatment_related_product_show_hide',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'pest_control_treatment_switch_sanitization'
  ) );
  $wp_customize->add_control( new Pest_Control_Treatment_Toggle_Switch_Custom_Control( $wp_customize, 'pest_control_treatment_related_product_show_hide',array(
    'label' => esc_html__( 'Show / Hide Related product','pest-control-treatment' ),
    'section' => 'pest_control_treatment_woocommerce_section'
  )));

}

add_action( 'customize_register', 'pest_control_treatment_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Pest_Control_Treatment_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Pest_Control_Treatment_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Pest_Control_Treatment_Customize_Section_Pro( $manager,'pest_control_treatment_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'PEST CONTROL PRO', 'pest-control-treatment' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'pest-control-treatment' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/products/pest-control-wordpress-theme'),
		) )	);

		// Register sections.
		$manager->add_section(new Pest_Control_Treatment_Customize_Section_Pro($manager,'pest_control_treatment_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'pest-control-treatment' ),
			'pro_text' => esc_html__( 'DOCS', 'pest-control-treatment' ),
			'pro_url'  => esc_url('https://preview.vwthemesdemo.com/docs/free-pest-control-treatment/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'pest-control-treatment-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'pest-control-treatment-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Pest_Control_Treatment_Customize::get_instance();
