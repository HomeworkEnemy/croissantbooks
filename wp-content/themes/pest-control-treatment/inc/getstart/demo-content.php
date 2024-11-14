<div class="theme-offer">
	<?php
        // Check if the demo import has been completed
        $pest_control_treatment_demo_import_completed = get_option('pest_control_treatment_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($pest_control_treatment_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'pest-control-treatment') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('VIEW SITE', 'pest-control-treatment') . '</a></span>';
        }

		//POST and update the customizer and other related data of POLITICAL CAMPAIGN
        if (isset($_POST['submit'])) {

            // Check if Contact Form 7 is installed and activated
            if (!is_plugin_active('woocommerce/woocommerce.php')) {
              // Install the plugin if it doesn't exist
              $pest_control_treatment_plugin_slug = 'woocommerce';
              $pest_control_treatment_plugin_file = 'woocommerce/woocommerce.php';

              // Check if plugin is installed
              $pest_control_treatment_installed_plugins = get_plugins();
              if (!isset($pest_control_treatment_installed_plugins[$pest_control_treatment_plugin_file])) {
                  include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                  include_once(ABSPATH . 'wp-admin/includes/file.php');
                  include_once(ABSPATH . 'wp-admin/includes/misc.php');
                  include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

                  // Install the plugin
                  $pest_control_treatment_upgrader = new Plugin_Upgrader();
                  $pest_control_treatment_upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
              }
              // Activate the plugin
              activate_plugin($pest_control_treatment_plugin_file);
            }
            if (!is_plugin_active('yith-woocommerce-wishlist/yith-woocommerce-wishlist.php')) {       
                // Install the plugin if it doesn't exist
                $pest_control_treatment_plugin_slug = 'yith-woocommerce-wishlist';
                $pest_control_treatment_plugin_file = 'yith-woocommerce-wishlist/yith-woocommerce-wishlist.php';
    
                // Check if plugin is installed
                $pest_control_treatment_installed_plugins = get_plugins();
                if (!isset($pest_control_treatment_installed_plugins[$pest_control_treatment_plugin_file])) {
                include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                include_once(ABSPATH . 'wp-admin/includes/file.php');
                include_once(ABSPATH . 'wp-admin/includes/misc.php');
                include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
    
                // Install the plugin
                  $pest_control_treatment_upgrader = new Plugin_Upgrader();
                  $pest_control_treatment_upgrader->install('https://downloads.wordpress.org/plugin/yith-woocommerce-wishlist.latest-stable.zip');
                }
    
                // Activate the plugin
                 activate_plugin($pest_control_treatment_plugin_file);
            }

            // ------- Create Nav Menu --------
            $pest_control_treatment_menuname = 'Main Menus';
            $pest_control_treatment_bpmenulocation = 'primary';
            $pest_control_treatment_menu_exists = wp_get_nav_menu_object($pest_control_treatment_menuname);

            if (!$pest_control_treatment_menu_exists) {
                $pest_control_treatment_menu_id = wp_create_nav_menu($pest_control_treatment_menuname);

                // Create Home Page
                $pest_control_treatment_home_title = 'Home';
                $pest_control_treatment_home = array(
                    'post_type' => 'page',
                    'post_title' => $pest_control_treatment_home_title,
                    'post_content' => '',
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'home'
                );
                $pest_control_treatment_home_id = wp_insert_post($pest_control_treatment_home);
                // Assign Home Page Template
                add_post_meta($pest_control_treatment_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
                // Update options to set Home Page as the front page
                update_option('page_on_front', $pest_control_treatment_home_id);
                update_option('show_on_front', 'page');
                // Add Home Page to Menu
                wp_update_nav_menu_item($pest_control_treatment_menu_id, 0, array(
                    'menu-item-title' => __('Home', 'pest-control-treatment'),
                    'menu-item-classes' => 'home',
                    'menu-item-url' => home_url('/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $pest_control_treatment_home_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Pages Page with Dummy Content
                $pest_control_treatment_pages_title = 'Pages';
                $pest_control_treatment_pages_content = 'Explore all the pages we have on our website. Find information about our services, company, and more.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $pest_control_treatment_pages = array(
                    'post_type' => 'page',
                    'post_title' => $pest_control_treatment_pages_title,
                    'post_content' => $pest_control_treatment_pages_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'pages'
                );
                $pest_control_treatment_pages_id = wp_insert_post($pest_control_treatment_pages);
                // Add Pages Page to Menu
                wp_update_nav_menu_item($pest_control_treatment_menu_id, 0, array(
                    'menu-item-title' => __('Pages', 'pest-control-treatment'),
                    'menu-item-classes' => 'pages',
                    'menu-item-url' => home_url('/pages/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $pest_control_treatment_pages_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create About Us Page with Dummy Content
                $pest_control_treatment_about_title = 'About Us';
                $pest_control_treatment_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>
                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $pest_control_treatment_about = array(
                    'post_type' => 'page',
                    'post_title' => $pest_control_treatment_about_title,
                    'post_content' => $pest_control_treatment_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $pest_control_treatment_about_id = wp_insert_post($pest_control_treatment_about);
                // Add About Us Page to Menu
                wp_update_nav_menu_item($pest_control_treatment_menu_id, 0, array(
                    'menu-item-title' => __('About Us', 'pest-control-treatment'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $pest_control_treatment_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Set the menu location if it's not already set
                if (!has_nav_menu($pest_control_treatment_bpmenulocation)) {
                    $pest_control_treatment_locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                    if (empty($pest_control_treatment_locations)) {
                        $pest_control_treatment_locations = array();
                    }
                    $pest_control_treatment_locations[$pest_control_treatment_bpmenulocation] = $pest_control_treatment_menu_id;
                    set_theme_mod('nav_menu_locations', $pest_control_treatment_locations);
                }
            }


            // Set the demo import completion flag
    		update_option('pest_control_treatment_demo_import_completed', true);
    		// Display success message and "View Site" button
    		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'pest-control-treatment') . '</p>';
    		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('VIEW SITE', 'pest-control-treatment') . '</a></span>';
            //end


            // Top Bar //
            set_theme_mod( 'pest_control_treatment_topbar_location_text_icon', 'fa-solid fa-location-dot' );
            set_theme_mod( 'pest_control_treatment_topbar_add_text_location', 'Find Location' );
            set_theme_mod( 'pest_control_treatment_find_us_btn_link', '#' );
            set_theme_mod( 'pest_control_treatment_phone_number', '9876543210' );
            set_theme_mod( 'pest_control_treatment_phone_icon', 'fas fa-phone' );
            set_theme_mod( 'pest_control_treatment_appointment_button_text', 'Appointment' );
            set_theme_mod( 'pest_control_treatment_appointment_btn_link', '#' );
            set_theme_mod( 'pest_control_treatment_heart_icon', 'fa-solid fa-heart' );
            set_theme_mod( 'pest_control_treatment_cart_icon', 'fa-solid fa-cart-shopping' );
            set_theme_mod( 'pest_control_treatment_top_btn_url', '#' );
            set_theme_mod( 'pest_control_treatment_cart_icon', 'fas fa-shopping-basket' );
           

            // slider section start //
            set_theme_mod( 'pest_control_treatment_banner_button_text', 'Read More' );
            set_theme_mod( 'pest_control_treatment_banner_btn_link', '#' );
            set_theme_mod( 'pest_control_treatment_banner_small_masquito_icon', 'fa-solid fa-mosquito' );
            set_theme_mod( 'pest_control_treatment_review_number', '120K' );
            set_theme_mod( 'pest_control_treatment_review_text', 'Reviews' );
            set_theme_mod( 'pest_control_treatment_social_icon_text', 'Follow On Social Media' );
            set_theme_mod( 'pest_control_treatment_slider_text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry ' );
            set_theme_mod( 'pest_control_treatment_slider_tagline_title', 'Guarding Your Home : Tailored Pest Control Treatment Solutions for Every Need' );
            set_theme_mod( 'pest_control_treatment_service_banner_player_image', get_template_directory_uri().'/assets/images/girl.png');


            // Our Services Section //
            set_theme_mod( 'pest_control_treatment_section_title', 'Professional Services' );
            set_theme_mod( 'pest_control_treatment_feature_courses_tagline_title', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' );
   
            set_theme_mod( 'pest_control_treatment_services_number', '2' );

            $pest_control_treatment_tab_text_array = array("Commercial", "Residential");
            for($pest_control_treatment_tab_index=1; $pest_control_treatment_tab_index <= 2; $pest_control_treatment_tab_index++) {

              $pest_control_treatment_theme_mod_key = 'pest_control_treatment_services_text' . $pest_control_treatment_tab_index;
              $pest_control_treatment_theme_mod_value = $pest_control_treatment_tab_text_array[$pest_control_treatment_tab_index - 1];
              set_theme_mod($pest_control_treatment_theme_mod_key, $pest_control_treatment_theme_mod_value);
           
              set_theme_mod( 'pest_control_treatment_services_post_count' . $pest_control_treatment_tab_index, '4' );

               // select Post Box
                $pest_control_treatment_title_array = array("Hospital Cleaning","Office Cleaning","Industrial Cleaning","School Cleaning");
                $pest_control_treatment_tag_array = array("Hospital Cleaning","Office Cleaning","Industrial Cleaning","School Cleaning");
                for ($pest_control_treatment_post_index = 1; $pest_control_treatment_post_index <= 4; $pest_control_treatment_post_index++) {

                    // Create post
                    $pest_control_treatment_title = $pest_control_treatment_title_array[$pest_control_treatment_post_index - 1];
                    $pest_control_treatment_tags = $pest_control_treatment_tag_array[$pest_control_treatment_post_index - 1];
                    $pest_control_treatment_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
                    $pest_control_treatment_my_post = array(
                         'post_title'   => wp_strip_all_tags($pest_control_treatment_title),
                         'post_content' => $pest_control_treatment_content,
                         'post_status'  => 'publish',
                         'post_type'    => 'post',
                    );
                    $pest_control_treatment_post_id = wp_insert_post($pest_control_treatment_my_post);

                    // Check if the post was created successfully
                    if (!is_wp_error($pest_control_treatment_post_id)) {
                        // Set tags for the post
                        wp_set_post_tags($pest_control_treatment_post_id, $pest_control_treatment_tags);
                    }

                    set_theme_mod('pest_control_treatment_services_category' . $pest_control_treatment_post_index . $pest_control_treatment_tab_index, $pest_control_treatment_post_id);
                    // Get image URL
                    $pest_control_treatment_image_url = get_template_directory_uri() . '/assets/images/about' . $pest_control_treatment_post_index . '.png';
                    $pest_control_treatment_image_data = wp_remote_get($pest_control_treatment_image_url);
                    if (!is_wp_error($pest_control_treatment_image_data)) {
                         $pest_control_treatment_image_body = wp_remote_retrieve_body($pest_control_treatment_image_data);
                         $pest_control_treatment_upload_dir = wp_upload_dir();
                         $pest_control_treatment_image_name = 'image' . $pest_control_treatment_post_index . '.png';
                         $pest_control_treatment_uploaded_file = wp_upload_bits($pest_control_treatment_image_name, null, $pest_control_treatment_image_body);
                         if (!$pest_control_treatment_uploaded_file['error']) {
                             // Set attachment data
                             $pest_control_treatment_attachment = array(
                                 'post_mime_type' => $pest_control_treatment_uploaded_file['type'],
                                 'post_title'     => sanitize_file_name($pest_control_treatment_image_name),
                                 'post_content'   => '',
                                 'post_status'    => 'inherit',
                             );
                             $pest_control_treatment_attach_id = wp_insert_attachment($pest_control_treatment_attachment, $pest_control_treatment_uploaded_file['file'], $pest_control_treatment_post_id);
                             require_once(ABSPATH . 'wp-admin/includes/image.php');
                             $pest_control_treatment_attach_data = wp_generate_attachment_metadata($pest_control_treatment_attach_id, $pest_control_treatment_uploaded_file['file']);
                             wp_update_attachment_metadata($pest_control_treatment_attach_id, $pest_control_treatment_attach_data);
                             set_post_thumbnail($pest_control_treatment_post_id, $pest_control_treatment_attach_id);
                         }
                    }
                }
            }

            // testimonial
            set_theme_mod( 'pest_control_treatment_slide_number', '3' ); // Limiting to 3 slides
            $pest_control_treatment_activity_text_array = array(
                "What Our Clients Says?", 
                "What Our Clients Says?", 
                "What Our Clients Says?"
            );
            // Icon array
            $pest_control_treatment_activity_icon_array = array(
                "fa-solid fa-quote", 
                "fa-solid fa-quote", 
                "fa-solid fa-quote"
            );
            // Short text array
            $pest_control_treatment_short_text_array = array(
                "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
            );
            $pest_control_treatment_name_array = array(
                "Manager",
                "Manager",
                "Manager"
            );
            $pest_control_treatment_deg_array = array(
                "Cries Morning",
                "Cries Morning",
                "Cries Morning"
            );
            $pest_control_treatment_image_array = array(
                get_template_directory_uri() . '/assets/images/profile1.png',
                get_template_directory_uri() . '/assets/images/profile2.png',
                get_template_directory_uri() . '/assets/images/profile3.png'
            );
            $pest_control_treatment_sponser_array = array(
                get_template_directory_uri() . '/assets/images/sponser1.png',
                get_template_directory_uri() . '/assets/images/sponser2.png',
                get_template_directory_uri() . '/assets/images/sponser3.png'
            );
            
            // Long text array
            $pest_control_treatment_long_text_array = array(
                "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry."
            );
            
            // Loop for 3 slides
            for($pest_control_treatment_i=1; $pest_control_treatment_i <= 3; $pest_control_treatment_i++) {
                // Title setting
                $pest_control_treatment_theme_mod_key = 'pest_control_treatment_client_tagline_title' . $pest_control_treatment_i;
                $pest_control_treatment_theme_mod_value = $pest_control_treatment_activity_text_array[$pest_control_treatment_i - 1];
                set_theme_mod($pest_control_treatment_theme_mod_key, $pest_control_treatment_theme_mod_value);
            
                // Icon setting
                $pest_control_treatment_theme_mod_key = 'pest_control_treatment_services_icon' . $pest_control_treatment_i;
                $pest_control_treatment_theme_mod_value = $pest_control_treatment_activity_icon_array[$pest_control_treatment_i - 1];
                set_theme_mod($pest_control_treatment_theme_mod_key, $pest_control_treatment_theme_mod_value);

                // Short text setting
                set_theme_mod('pest_control_treatment_client_text'.$pest_control_treatment_i, $pest_control_treatment_short_text_array[$pest_control_treatment_i - 1]);
                // Long text setting
                set_theme_mod('pest_control_treatment_client_text1'.$pest_control_treatment_i, $pest_control_treatment_long_text_array[$pest_control_treatment_i - 1]);
                set_theme_mod('pest_control_treatment_author_tagline_title'.$pest_control_treatment_i, $pest_control_treatment_deg_array[$pest_control_treatment_i - 1]);
                set_theme_mod('pest_control_treatment_author_text'.$pest_control_treatment_i, $pest_control_treatment_name_array[$pest_control_treatment_i - 1]);
                set_theme_mod('pest_control_treatment_service_sponsor_image' . $pest_control_treatment_i, $pest_control_treatment_image_array[$pest_control_treatment_i - 1]);
                set_theme_mod('pest_control_treatment_service_client_image' . $pest_control_treatment_i, $pest_control_treatment_sponser_array[$pest_control_treatment_i - 1]);
            }

            //Copyright Text
            set_theme_mod( 'pest_control_treatment_footer_text', 'By VWThemes' );
        }
    ?>

	<p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for Pest Control Treatment','pest-control-treatment'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=pest_control_treatment_guide" method="POST" onsubmit="return validate(this);">
    <?php if (!get_option('pest_control_treatment_demo_import_completed')) : ?>
        <form method="post">
            <input class= "run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer','pest-control-treatment'); ?>" class="button button-primary button-large">
        </form>
    <?php endif; ?>
    </form>
	<script type="text/javascript">
		function validate(valid) {
			 if(confirm("Do you really want to import the theme demo content?")){
			    document.forms[0].submit();
			}
		    else {
			    return false;
		    }
		}
	</script>
</div>
