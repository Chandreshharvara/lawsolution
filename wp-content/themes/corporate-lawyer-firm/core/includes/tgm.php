<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function corporate_lawyer_firm_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'corporate-lawyer-firm' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	corporate_lawyer_firm_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'corporate_lawyer_firm_register_recommended_plugins' );