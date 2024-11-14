<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function educational_blocks_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ovation Elements', 'educational-blocks' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	educational_blocks_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'educational_blocks_register_recommended_plugins' );