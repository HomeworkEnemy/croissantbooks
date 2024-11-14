<?php
/**
 * Educational Blocks functions and definitions
 *
 * @package Educational Blocks
 */

if ( ! function_exists( 'educational_blocks_setup' ) ) :
function educational_blocks_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

    load_theme_textdomain( 'educational-blocks', get_template_directory() . '/languages' );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Enqueue editor styles.
	add_editor_style( array( 'assets/css/editor-style.css' ) );
}
endif; // educational_blocks_setup
add_action( 'after_setup_theme', 'educational_blocks_setup' );

function educational_blocks_scripts() {
	wp_enqueue_style( 'educational-blocks-basic-style', get_stylesheet_uri() );

	$educational_blocks_enable_animations = get_option( 'educational_blocks_enable_animations', true );

    if ( $educational_blocks_enable_animations ) {
        //animation
	wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

	wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );
    }

	//font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );

	// script.js
	wp_enqueue_script('educational-blocks-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'educational_blocks_scripts' );

// Get start function

function educational_blocks_enqueue_admin_script($hook) {
    // Admin JS
    wp_enqueue_script('educational-blocks-admin-js', get_theme_file_uri('/inc/dashboard/admin.js'), array('jquery'), true);
    wp_localize_script(
        'educational-blocks-admin-js',
        'educational_blocks',
        array(
            'admin_ajax'    =>  admin_url('admin-ajax.php'),
            'wpnonce'           =>  wp_create_nonce('educational_blocks_dismissed_notice_nonce')
        )
    );
    wp_enqueue_script('educational-blocks-admin-js');

    wp_localize_script( 'educational-blocks-admin-js', 'educational_blocks_scripts_localize',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action('admin_enqueue_scripts', 'educational_blocks_enqueue_admin_script');

//dismiss function 
add_action( 'wp_ajax_educational_blocks_dismissed_notice_handler', 'educational_blocks_ajax_notice_dismiss_fuction' );

function educational_blocks_ajax_notice_dismiss_fuction() {
    if (!wp_verify_nonce($_POST['wpnonce'], 'educational_blocks_dismissed_notice_nonce')) {
        exit;
    }
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

//get start box
function educational_blocks_custom_admin_notice() {
    // Check if the notice is dismissed
    if ( ! get_option('dismissed-get_started_notice', FALSE ) )  {
        // Check if not on the theme documentation page
        $educational_blocks_current_screen = get_current_screen();
        if ($educational_blocks_current_screen && $educational_blocks_current_screen->id !== 'appearance_page_educational-blocks-guide-page') {
            $educational_blocks_theme = wp_get_theme();
            ?>
            <div class="notice notice-info is-dismissible" data-notice="get_started_notice">
                <div class="notice-div">
                    <div>
                        <p class="theme-name"><?php _e('Educational Blocks', 'educational-blocks'); ?></p>
                        <p><?php _e('For information and detailed instructions, check out our theme documentation.', 'educational-blocks'); ?></p>
                    </div>
                    <div class="notice-buttons-box">
                        <a class="button-primary livedemo" href="<?php echo esc_url( EDUCATIONAL_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'educational-blocks'); ?></a>
                        <a class="button-primary buynow" href="<?php echo esc_url( EDUCATIONAL_BLOCKS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'educational-blocks'); ?></a>
                        <a class="button-primary theme-install" href="themes.php?page=educational-blocks-guide-page"><?php _e('Begin Installation', 'educational-blocks'); ?></a> 
                    </div>
                </div>
            </div>
        <?php
        }
    }
}
add_action('admin_notices', 'educational_blocks_custom_admin_notice');

//after switch theme
add_action('after_switch_theme', 'educational_blocks_after_switch_theme');
function educational_blocks_after_switch_theme () {
    update_option('dismissed-get_started_notice', FALSE );
}

//get-start-function-end//

// Block Patterns.
require get_template_directory() . '/block-patterns.php';

require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );

require get_template_directory() . '/custom-setting.php';

require get_parent_theme_file_path( '/inc/customizer/customizer.php' );

require get_template_directory() .'/inc/TGM/tgm.php';