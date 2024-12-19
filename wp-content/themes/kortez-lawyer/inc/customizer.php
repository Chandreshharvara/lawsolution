<?php
/**
 * Kortez Lawyer Theme Customizer
 *
 * @package kortez_lawyer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kortez_lawyer_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	require get_template_directory() . '/inc/getting-started-section.php';

	include get_template_directory() . '/inc/upsell-section.php';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'kortez_lawyer_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'kortez_lawyer_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->register_section_type( 'kortez_lawyer_Customize_Upsell_Section' );

	// Register section.
	$wp_customize->add_section(
		new kortez_lawyer_Customize_Upsell_Section(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Kortez Lawyer Pro', 'kortez-lawyer' ),
				'pro_text' => esc_html__( 'Buy Pro', 'kortez-lawyer' ),
				'pro_url'  => 'https://kortezthemes.com/kortez-lawyer-pro/',
				'priority' => 10,
			)
		)
	);

	// Footer Section
	$wp_customize->add_section('section_footer', array(    
		'title'       => __('Footer Copyright', 'kortez-lawyer'),
	));

	$wp_customize->add_setting( 'footer_copyright_text', array(
		'default'           => esc_html__('Copyright © 2024 Kortez Lawyer.', 'kortez-lawyer'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'footer_copyright_text', array(
		'label'       => __( 'Footer Copyright Text', 'kortez-lawyer' ),
		'section' 	  => 'section_footer',
		'type'        => 'text',
	) );
}
add_action( 'customize_register', 'kortez_lawyer_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function kortez_lawyer_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function kortez_lawyer_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function kortez_lawyer_customize_preview_js() {
	wp_enqueue_script( 'kortez-lawyer-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), 20151215, true );
}
add_action( 'customize_preview_init', 'kortez_lawyer_customize_preview_js' );

/**
 * Customizer control scripts and styles.
 *
 * @since 1.0.0
 */
function kortez_lawyer_customizer_control_scripts() {

	wp_enqueue_style( 'kortez-lawyer-customize-controls', get_template_directory_uri() . '/css/customize-controls.css', '', '1.0.0' );

	wp_enqueue_script( 'kortez-lawyer-customize-controls', get_template_directory_uri() . '/js/customize-controls.js', array( 'customize-controls' ), '1.0.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'kortez_lawyer_customizer_control_scripts', 0 );