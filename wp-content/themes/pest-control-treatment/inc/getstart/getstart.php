<?php
//about theme info
add_action( 'admin_menu', 'pest_control_treatment_gettingstarted' );
function pest_control_treatment_gettingstarted() {
	add_theme_page( esc_html__('About Pest Control Treatment ', 'pest-control-treatment'), esc_html__('Theme Demo Import', 'pest-control-treatment'), 'edit_theme_options', 'pest_control_treatment_guide', 'pest_control_treatment_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function pest_control_treatment_admin_theme_style() {
	wp_enqueue_style('pest-control-treatment-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('pest-control-treatment-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'pest_control_treatment_admin_theme_style');

//guidline for about theme
function pest_control_treatment_mostrar_guide() { 
	//custom function about theme customizer
	$pest_control_treatment_return = add_query_arg( array()) ;
	$pest_control_treatment_theme = wp_get_theme( 'pest-control-treatment' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to Pest Control Treatment ', 'pest-control-treatment' ); ?> <span class="version"><?php esc_html_e( 'Version', 'pest-control-treatment' ); ?>: <?php echo esc_html($pest_control_treatment_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','pest-control-treatment'); ?></p>
    </div>
	<div class="col-right coupen-section">
		<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<h4><?php esc_html_e('Try Premium ','pest-control-treatment'); ?></h4>
				<h4><?php esc_html_e('Pest Control Treatment','pest-control-treatment'); ?></h4>
				<h4 class="disc-text"><?php esc_html_e('at 20% Discount','pest-control-treatment'); ?></h4>
				<h4><?php esc_html_e('Use Coupon','pest-control-treatment'); ?> ( <span><?php esc_html_e('vwpro20','pest-control-treatment'); ?></span> ) </h4> 
				<div class="info-link">
					<a href="<?php echo esc_url( PEST_CONTROL_TREATMENT_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'pest-control-treatment' ); ?></a>
				</div>
			</div>
		</div>   
		<div class="logo-img">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>	
    </div>
	

    <div class="tab-sec">
    	<div class="tab">
		    <button class="tablinks" onclick="pest_control_treatment_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'pest-control-treatment' ); ?></button>
			<button class="tablinks" onclick="pest_control_treatment_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'pest-control-treatment' ); ?></button>
			<button class="tablinks" onclick="pest_control_treatment_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'pest-control-treatment' ); ?></button>
			<button class="tablinks" onclick="pest_control_treatment_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'pest-control-treatment' ); ?></button>
			<button class="tablinks" onclick="pest_control_treatment_open_tab(event, 'product_addons_editor')"><?php  esc_html_e( 'Woocommerce Product Addons', 'pest-control-treatment' ); ?></button>
			<button class="tablinks" onclick="pest_control_treatment_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'pest-control-treatment' ); ?></button>
  			<button class="tablinks" onclick="pest_control_treatment_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free vs Premimum', 'pest-control-treatment' ); ?></button>
  			<button class="tablinks" onclick="pest_control_treatment_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 250+ Themes Bundle at $99', 'pest-control-treatment' ); ?></button>
		</div>

		<?php 
			$pest_control_treatment_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$pest_control_treatment_plugin_custom_css ='display: block';
			}
		?>

        <div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'pest-control-treatment' ); ?></h3>
				<?php 
				/* Get Started. */ 
				require get_parent_theme_file_path( '/inc/getstart/demo-content.php' );
			 	?>
			</div> 	
		</div>

		<div id="lite_theme" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Pest_Control_Treatment_Plugin_Activation_Settings::get_instance();
				$pest_control_treatment_actions = $plugin_ins->recommended_actions;
				?>
				<div class="pest-control-treatment-recommended-plugins">
				    <div class="pest-control-treatment-action-list">
				        <?php if ($pest_control_treatment_actions): foreach ($pest_control_treatment_actions as $key => $pest_control_treatment_actionValue): ?>
				                <div class="pest-control-treatment-action" id="<?php echo esc_attr($pest_control_treatment_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($pest_control_treatment_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($pest_control_treatment_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($pest_control_treatment_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','pest-control-treatment'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($pest_control_treatment_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'pest-control-treatment' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('Pest Control Treatment is expertly designed to cater to both commercial and residential pest control services. This theme is perfect for businesses specializing in pest control, extermination, pest management, and pest removal. It integrates seamlessly with various plugins to provide robust features such as appointment booking, service listings, and detailed pest control plans. With user-friendly customization options, you can personalize the site to reflect your brand’s unique identity, ensuring it stands out in the competitive market. Aesthetically, the Pest Control Treatment WordPress Theme offers a clean, modern, and professional look that is retina-ready and fully responsive, ensuring optimal viewing on any device. Its elegant design includes sections for testimonials, team introductions, and call-to-action buttons (CTA) to engage visitors effectively. The theme is SEO-friendly with optimized codes for faster page load times, enhancing your site’s visibility on search engines and improving user experience. It also supports social media integration, enabling you to connect with your audience on various platforms. With features tailored for pest control specialists, including sections for pest inspection, pest treatment, rodent control, insect control, and termite treatment, pest management, pest treatment, pest services, pest removal, pest extermination, pest prevention, pest inspection, pest solutions, pest control business, pest control company, pest control professionals, pest control services, pest control industry, pest control solutions. This theme is ideal for showcasing a wide range of services. It supports eco-friendly and chemical-free pest control options, appealing to environmentally conscious customers.','pest-control-treatment'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'pest-control-treatment' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'pest-control-treatment' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( PEST_CONTROL_TREATMENT_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'pest-control-treatment' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'pest-control-treatment'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'pest-control-treatment'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'pest-control-treatment'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'pest-control-treatment'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'pest-control-treatment'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( PEST_CONTROL_TREATMENT_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'pest-control-treatment'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'pest-control-treatment'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'pest-control-treatment'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( PEST_CONTROL_TREATMENT_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'pest-control-treatment'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'pest-control-treatment' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','pest-control-treatment'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pest_control_treatment_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','pest-control-treatment'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pest_control_treatment_bannersettings') ); ?>" target="_blank"><?php esc_html_e('Banner Settings','pest-control-treatment'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pest_control_treatment_about_section') ); ?>" target="_blank"><?php esc_html_e('Professional Services Section','pest-control-treatment'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pest_control_treatment_sponsorsettings') ); ?>" target="_blank"><?php esc_html_e('Testimonial Section','pest-control-treatment'); ?></a>
								</div>

								<div class="row-box2">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','pest-control-treatment'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','pest-control-treatment'); ?></a>
								</div>

								<div class="row-box2">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pest_control_treatment_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','pest-control-treatment'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pest_control_treatment_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','pest-control-treatment'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','pest-control-treatment'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','pest-control-treatment'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','pest-control-treatment'); ?></span><?php esc_html_e(' Go to ','pest-control-treatment'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','pest-control-treatment'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','pest-control-treatment'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','pest-control-treatment'); ?></span><?php esc_html_e(' Go to ','pest-control-treatment'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','pest-control-treatment'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','pest-control-treatment'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','pest-control-treatment'); ?> <a class="doc-links" href="<?php echo esc_url( PEST_CONTROL_TREATMENT_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','pest-control-treatment'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Pest_Control_Treatment_Plugin_Activation_Settings::get_instance();
			$pest_control_treatment_actions = $plugin_ins->recommended_actions;
			?>
				<div class="pest-control-treatment-recommended-plugins">
				    <div class="pest-control-treatment-action-list">
				        <?php if ($pest_control_treatment_actions): foreach ($pest_control_treatment_actions as $key => $pest_control_treatment_actionValue): ?>
				                <div class="pest-control-treatment-action" id="<?php echo esc_attr($pest_control_treatment_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($pest_control_treatment_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($pest_control_treatment_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($pest_control_treatment_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','pest-control-treatment'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($pest_control_treatment_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'pest-control-treatment' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','pest-control-treatment'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon ','pest-control-treatment'); ?></span></b></p>
	              	<div class="pest-control-treatment-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','pest-control-treatment'); ?></a>
				    </div>	
				    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern1.png" alt="" />
	              	<p><b><?php esc_html_e('Click on Patterns Tab >> Click on Theme Name >> Click on Section >> Publish.','pest-control-treatment'); ?></span></b></p>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />
	            </div>

              	<div class="block-pattern-link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'pest-control-treatment' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','pest-control-treatment'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pest_control_treatment_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','pest-control-treatment'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','pest-control-treatment'); ?></a>
							</div>
							
							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pest_control_treatment_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','pest-control-treatment'); ?></a>
							</div>
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pest_control_treatment_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','pest-control-treatment'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','pest-control-treatment'); ?></a>
							</div> 
						</div>
					</div>
				</div>	
					
	        </div>
		</div>

		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Pest_Control_Treatment_Plugin_Activation_Settings::get_instance();
			$pest_control_treatment_actions = $plugin_ins->recommended_actions;
			?>
				<div class="pest-control-treatment-recommended-plugins">
				    <div class="pest-control-treatment-action-list">
				        <?php if ($pest_control_treatment_actions): foreach ($pest_control_treatment_actions as $key => $pest_control_treatment_actionValue): ?>
				                <div class="pest-control-treatment-action" id="<?php echo esc_attr($pest_control_treatment_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($pest_control_treatment_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($pest_control_treatment_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($pest_control_treatment_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'pest-control-treatment' ); ?></h3>
				<hr class="h3hr">
				<div class="pest-control-treatment-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','pest-control-treatment'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'pest-control-treatment' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','pest-control-treatment'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pest_control_treatment_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','pest-control-treatment'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','pest-control-treatment'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pest_control_treatment_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','pest-control-treatment'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=pest_control_treatment_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','pest-control-treatment'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','pest-control-treatment'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
			<?php if(!class_exists('IEPA_Loader')){
			$plugin_ins = Pest_Control_Treatment_Plugin_Activation_Woo_Products::get_instance();
			$pest_control_treatment_actions = $plugin_ins->recommended_actions;
			?>
			<div class="pest-control-treatment-recommended-plugins">
			    <div class="pest-control-treatment-action-list">
			        <?php if ($pest_control_treatment_actions): foreach ($pest_control_treatment_actions as $key => $pest_control_treatment_actionValue): ?>
			                <div class="pest-control-treatment-action" id="<?php echo esc_attr($pest_control_treatment_actionValue['id']);?>">
		                        <div class="action-inner plugin-activation-redirect">
		                            <h3 class="action-title"><?php echo esc_html($pest_control_treatment_actionValue['title']); ?></h3>
		                            <div class="action-desc"><?php echo esc_html($pest_control_treatment_actionValue['desc']); ?></div>
		                            <?php echo wp_kses_post($pest_control_treatment_actionValue['link']); ?>
		                        </div>
			                </div>
			            <?php endforeach;
			        endif; ?>
			    </div>
			</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'pest-control-treatment' ); ?></h3>
				<hr class="h3hr">
				<div class="pest-control-treatment-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','pest-control-treatment'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','pest-control-treatment'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','pest-control-treatment'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','pest-control-treatment'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','pest-control-treatment'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','pest-control-treatment'); ?></b></p>
	              	<div class="pest-control-treatment-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','pest-control-treatment'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','pest-control-treatment'); ?></p>
			    </div>
			<?php } ?>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'pest-control-treatment' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Pest Control Treatment is expertly designed to cater to both commercial and residential pest control services. This theme is perfect for businesses specializing in pest control, extermination, pest management, and pest removal. It integrates seamlessly with various plugins to provide robust features such as appointment booking, service listings, and detailed pest control plans. With user-friendly customization options, you can personalize the site to reflect your brand’s unique identity, ensuring it stands out in the competitive market. Aesthetically, the Pest Control Treatment WordPress Theme offers a clean, modern, and professional look that is retina-ready and fully responsive, ensuring optimal viewing on any device. Its elegant design includes sections for testimonials, team introductions, and call-to-action buttons (CTA) to engage visitors effectively. The theme is SEO-friendly with optimized codes for faster page load times, enhancing your sites visibility on search engines and improving user experience. It also supports social media integration, enabling you to connect with your audience on various platforms. With features tailored for pest control specialists, including sections for pest inspection, pest treatment, rodent control, insect control, and termite treatment, this theme is ideal for showcasing a wide range of services. It supports eco-friendly and chemical-free pest control options, appealing to environmentally conscious customers.','pest-control-treatment'); ?></p>
		    </div>
		    <div class="col-right-pro">
			    <div class="pro-links">
			    	<a href="<?php echo esc_url( PEST_CONTROL_TREATMENT_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'pest-control-treatment'); ?></a>
					<a href="<?php echo esc_url( PEST_CONTROL_TREATMENT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'pest-control-treatment'); ?></a>
					<a href="<?php echo esc_url( PEST_CONTROL_TREATMENT_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'pest-control-treatment'); ?></a>
					<a href="<?php echo esc_url( PEST_CONTROL_TREATMENT_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 250+ Themes Bundle at $99', 'pest-control-treatment'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="free_pro" class="tabcontent">
		<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'pest-control-treatment' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'pest-control-treatment'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'pest-control-treatment'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Banner Settings', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'pest-control-treatment'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'pest-control-treatment'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'pest-control-treatment'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'pest-control-treatment'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'pest-control-treatment'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'pest-control-treatment'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'pest-control-treatment'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'pest-control-treatment'); ?></td>
								<td class="table-img"><?php esc_html_e('13', 'pest-control-treatment'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template / Support Templates', 'pest-control-treatment'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'pest-control-treatment'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'pest-control-treatment'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'pest-control-treatment'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'pest-control-treatment'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Left/Right Sidebar)', 'pest-control-treatment'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Video Gallery', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Pest Control Treatment ', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Detail Services', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('About Business Page', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Team Member Page', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Project Description Page', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support Page', 'pest-control-treatment'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( PEST_CONTROL_TREATMENT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'pest-control-treatment'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   <div class="col-left-pro">
		   	<h3><?php esc_html_e( 'WP Theme Bundle', 'pest-control-treatment' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 250+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','pest-control-treatment'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'pest-control-treatment' ); ?></h4>
		    		<p><?php esc_html_e('250+ Premium Themes & 5+ Plugins.', 'pest-control-treatment'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'pest-control-treatment'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'pest-control-treatment'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'pest-control-treatment'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'pest-control-treatment'); ?></p>
		    	</div>
		    	<p>Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!</p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( PEST_CONTROL_TREATMENT_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'pest-control-treatment'); ?></a>
					<a href="<?php echo esc_url( PEST_CONTROL_TREATMENT_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'pest-control-treatment'); ?></a>
				</div>
		   </div>
		   <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   </div>		    
		</div>

	</div>
</div>

<?php } ?>