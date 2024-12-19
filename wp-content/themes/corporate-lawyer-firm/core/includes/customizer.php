<?php

if ( ! defined( 'CORPORATE_LAWYER_FIRM_BUY_NOW_1' ) ) {
define('CORPORATE_LAWYER_FIRM_BUY_NOW_1',__('https://www.misbahwp.com/products/law-firm-wordpress-theme','corporate-lawyer-firm'));
}

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'corporate_lawyer_firm_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'corporate-lawyer-firm' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'corporate_lawyer_firm_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'corporate-lawyer-firm' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'corporate_lawyer_firm_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'corporate-lawyer-firm' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'corporate-lawyer-firm' ),
			'off' => esc_html__( 'Disable', 'corporate-lawyer-firm' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'corporate_lawyer_firm_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'corporate-lawyer-firm' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'corporate-lawyer-firm' ),
			'off' => esc_html__( 'Disable', 'corporate-lawyer-firm' ),
		],
	] );

	//FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'corporate_lawyer_firm_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'corporate-lawyer-firm' ),
	) );

	Kirki::add_section( 'corporate_lawyer_firm_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'corporate-lawyer-firm' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'corporate-lawyer-firm' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CORPORATE_LAWYER_FIRM_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'corporate-lawyer-firm' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'corporate_lawyer_firm_font_style_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'corporate-lawyer-firm' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'corporate_lawyer_firm_all_headings_typography',
		'section'     => 'corporate_lawyer_firm_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'corporate-lawyer-firm' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'corporate_lawyer_firm_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'corporate-lawyer-firm' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'corporate-lawyer-firm' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'corporate_lawyer_firm_body_content_typography',
		'section'     => 'corporate_lawyer_firm_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'corporate-lawyer-firm' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'corporate_lawyer_firm_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'corporate-lawyer-firm' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'corporate-lawyer-firm' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

		// PANEL
	Kirki::add_panel( 'corporate_lawyer_firm_panel_id_5', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Animations', 'corporate-lawyer-firm' ),
	) );

	// ANIMATION SECTION
	Kirki::add_section( 'corporate_lawyer_firm_section_animation', array(
	    'title'          => esc_html__( 'Animations', 'corporate-lawyer-firm' ),
	    'panel'          => 'corporate_lawyer_firm_panel_id_5',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'corporate-lawyer-firm' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CORPORATE_LAWYER_FIRM_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'corporate-lawyer-firm' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'corporate_lawyer_firm_section_animation',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'corporate-lawyer-firm' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'corporate_lawyer_firm_animation_enabled',
		'label'       => esc_html__( 'Turn On To Show Animation', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_section_animation',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'corporate-lawyer-firm' ),
			'off' => esc_html__( 'Disable', 'corporate-lawyer-firm' ),
		],
	] );

	// PANEL
	Kirki::add_panel( 'corporate_lawyer_firm_panel_id_2', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Dark Mode', 'corporate-lawyer-firm' ),
	) );

	// DARK MODE SECTION
	Kirki::add_section( 'corporate_lawyer_firm_section_dark_mode', array(
	    'title'          => esc_html__( 'Dark Mode', 'corporate-lawyer-firm' ),
	    'panel'          => 'corporate_lawyer_firm_panel_id_2',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'corporate-lawyer-firm' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CORPORATE_LAWYER_FIRM_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'corporate-lawyer-firm' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'corporate_lawyer_firm_section_dark_mode',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'corporate-lawyer-firm' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'corporate_lawyer_firm_dark_colors',
	    'section'     => 'corporate_lawyer_firm_section_dark_mode',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dark Appearance', 'corporate-lawyer-firm' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'corporate_lawyer_firm_is_dark_mode_enabled',
		'label'       => esc_html__( 'Turn To Dark Mode', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_section_dark_mode',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'corporate-lawyer-firm' ),
			'off' => esc_html__( 'Disable', 'corporate-lawyer-firm' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'corporate_lawyer_firm_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'corporate-lawyer-firm' ),
	) );

	// COLOR SECTION

	Kirki::add_section( 'corporate_lawyer_firm_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'corporate-lawyer-firm' ),
	    'panel'          => 'corporate_lawyer_firm_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'corporate-lawyer-firm' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CORPORATE_LAWYER_FIRM_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'corporate-lawyer-firm' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'corporate_lawyer_firm_section_color',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'corporate-lawyer-firm' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'corporate_lawyer_firm_global_colors',
		'section'     => 'corporate_lawyer_firm_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'corporate-lawyer-firm' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'corporate_lawyer_firm_global_color',
		'label'       => __( 'choose your Appropriate Color', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_section_color',
		'default'     => '#BF9874',
	] );

	// Additional Settings

	Kirki::add_section( 'corporate_lawyer_firm_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'corporate-lawyer-firm' ),
	    'panel'          => 'corporate_lawyer_firm_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'corporate-lawyer-firm' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CORPORATE_LAWYER_FIRM_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'corporate-lawyer-firm' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'corporate_lawyer_firm_additional_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'corporate-lawyer-firm' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'corporate_lawyer_firm_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
		[
			'settings'    => 'corporate_lawyer_firm_scroll_top_position',
			'label'       => esc_html__( 'Alignment for Scroll To Top', 'corporate-lawyer-firm' ),
			'section'     => 'corporate_lawyer_firm_additional_settings',
			'default'     => 'Right',
			'priority'    => 10,
			'choices'     => [
				'Left'   => esc_html__( 'Left', 'corporate-lawyer-firm' ),
				'Center' => esc_html__( 'Center', 'corporate-lawyer-firm' ),
				'Right'  => esc_html__( 'Right', 'corporate-lawyer-firm' ),
			],
		]
		);

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_corporate_lawyer_firm',
		'label'       => esc_html__( 'Menus Text Transform', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'corporate-lawyer-firm' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'corporate-lawyer-firm' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'corporate-lawyer-firm' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'corporate-lawyer-firm' ),
		],
	]);

	new \Kirki\Field\Select(
	[
		'settings'    => 'corporate_lawyer_firm_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_additional_settings',
		'default' => 'None',
		'placeholder' => esc_html__( 'Choose an option', 'corporate-lawyer-firm' ),
		'choices'     => [
			'None' => __('None','corporate-lawyer-firm'),
            'Zoominn' => __('Zoom Inn','corporate-lawyer-firm'),
            
		],
	] );

		Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'corporate_lawyer_firm_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'corporate_lawyer_firm_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'corporate_lawyer_firm_preloader_type',
		'label'       => esc_html__( 'Preloader Type', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_additional_settings',
		'default' => 'four-way-loader',
		'placeholder' => esc_html__( 'Choose an option', 'corporate-lawyer-firm' ),
		'choices'     => [
			'four-way-loader' => __('Type 1','corporate-lawyer-firm'),
            'cube-loader' => __('Type 2','corporate-lawyer-firm'),
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'corporate_lawyer_firm_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'corporate-lawyer-firm' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','corporate-lawyer-firm'),
            'Right Sidebar' => __('Right Sidebar','corporate-lawyer-firm'),
            'One Column' => __('One Column','corporate-lawyer-firm')
		],
	] );
	


	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'corporate_lawyer_firm_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'corporate-lawyer-firm' ),
			'panel'          => 'corporate_lawyer_firm_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'corporate-lawyer-firm' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CORPORATE_LAWYER_FIRM_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'corporate-lawyer-firm' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'corporate_lawyer_firm_woocommerce_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'corporate-lawyer-firm' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'corporate_lawyer_firm_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'corporate_lawyer_firm_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'corporate_lawyer_firm_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
	[
		'settings' => 'corporate_lawyer_firm_per_columns',
		'label'    => esc_html__( 'Product Per Row', 'corporate-lawyer-firm' ),
		'section'  => 'corporate_lawyer_firm_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'corporate_lawyer_firm_product_per_page',
		'label'    => esc_html__( 'Product Per Page', 'corporate-lawyer-firm' ),
		'section'  => 'corporate_lawyer_firm_woocommerce_settings',
		'default'  => 9,
		'choices'  => [
			'min'  => 1,
			'max'  => 15,
			'step' => 1,
		],
	]
	);

		new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'corporate-lawyer-firm' ),
		'section'  => 'corporate_lawyer_firm_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'corporate-lawyer-firm' ),
		'section'  => 'corporate_lawyer_firm_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'corporate_lawyer_firm_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'corporate-lawyer-firm' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','corporate-lawyer-firm'),
            'Right Sidebar' => __('Right Sidebar','corporate-lawyer-firm')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'corporate_lawyer_firm_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'corporate-lawyer-firm' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','corporate-lawyer-firm'),
            'Right Sidebar' => __('Right Sidebar','corporate-lawyer-firm')
		],
	] );

		new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'corporate_lawyer_firm_woocommerce_pagination_position',
		'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_woocommerce_settings',
		'default'     => 'Center',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'corporate-lawyer-firm' ),
			'Center' => esc_html__( 'Center', 'corporate-lawyer-firm' ),
			'Right'  => esc_html__( 'Right', 'corporate-lawyer-firm' ),
		],
	]
	);

}	

	// POST SECTION

	Kirki::add_section( 'corporate_lawyer_firm_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'corporate-lawyer-firm' ),
	    'panel'          => 'corporate_lawyer_firm_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'corporate-lawyer-firm' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CORPORATE_LAWYER_FIRM_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'corporate-lawyer-firm' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'corporate_lawyer_firm_section_post',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'corporate-lawyer-firm' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'corporate_lawyer_firm_enable_post_heading',
		'section'     => 'corporate_lawyer_firm_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'corporate-lawyer-firm' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'corporate_lawyer_firm_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'corporate-lawyer-firm' ),
			'off' => esc_html__( 'Disable', 'corporate-lawyer-firm' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'corporate_lawyer_firm_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'corporate-lawyer-firm' ),
			'off' => esc_html__( 'Disable', 'corporate-lawyer-firm' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'corporate_lawyer_firm_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'corporate_lawyer_firm_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'corporate_lawyer_firm_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'corporate-lawyer-firm' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','corporate-lawyer-firm'),
            'Right Sidebar' => __('Right Sidebar','corporate-lawyer-firm')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'corporate_lawyer_firm_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'corporate-lawyer-firm' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','corporate-lawyer-firm'),
            'Right Sidebar' => __('Right Sidebar','corporate-lawyer-firm')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'corporate_lawyer_firm_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'corporate-lawyer-firm' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','corporate-lawyer-firm'),
            'Right Sidebar' => __('Right Sidebar','corporate-lawyer-firm')
		],
	] );

	Kirki::add_field( 'corporate_lawyer_firm_config', [
		'type'        => 'select',
		'settings'    => 'corporate_lawyer_firm_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'corporate-lawyer-firm' ),
				'2' => __( '2 Column', 'corporate-lawyer-firm' ),
				'3' => __( '3 Column', 'corporate-lawyer-firm' ),
				'4' => __( '4 Column', 'corporate-lawyer-firm' ),
			],
	] );

	// HEADER SECTION

	Kirki::add_section( 'corporate_lawyer_firm_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'corporate-lawyer-firm' ),
	    'panel'          => 'corporate_lawyer_firm_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'corporate-lawyer-firm' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CORPORATE_LAWYER_FIRM_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'corporate-lawyer-firm' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'corporate_lawyer_firm_section_header',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'corporate-lawyer-firm' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'corporate_lawyer_firm_search_box_enable',
		'label'       => esc_html__( 'Search Button Enable / Disable', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'corporate-lawyer-firm' ),
			'off' => esc_html__( 'Disable', 'corporate-lawyer-firm' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'corporate_lawyer_firm_enable_hire_us',
		'section'     => 'corporate_lawyer_firm_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Consultant Button', 'corporate-lawyer-firm' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Button Text', 'corporate-lawyer-firm' ),
		'settings' => 'corporate_lawyer_firm_header_hire_us_txt',
		'section'  => 'corporate_lawyer_firm_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'       => esc_html__( 'Button Link', 'corporate-lawyer-firm' ),
		'settings' => 'corporate_lawyer_firm_header_hire_us_lnk',
		'section'  => 'corporate_lawyer_firm_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	// SLIDER SECTION

	Kirki::add_section( 'corporate_lawyer_firm_blog_slide_section', array(
        'title'          => esc_html__( 'Slider Settings', 'corporate-lawyer-firm' ),
        'panel'          => 'corporate_lawyer_firm_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'corporate-lawyer-firm' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CORPORATE_LAWYER_FIRM_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'corporate-lawyer-firm' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'corporate_lawyer_firm_blog_slide_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'corporate-lawyer-firm' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'corporate_lawyer_firm_enable_heading',
		'section'     => 'corporate_lawyer_firm_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'corporate-lawyer-firm' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'corporate_lawyer_firm_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'corporate-lawyer-firm' ),
			'off' => esc_html__( 'Disable', 'corporate-lawyer-firm' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'corporate_lawyer_firm_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_blog_slide_section',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'corporate-lawyer-firm' ),
			'off' => esc_html__( 'Disable', 'corporate-lawyer-firm' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'corporate_lawyer_firm_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_blog_slide_section',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'corporate-lawyer-firm' ),
			'off' => esc_html__( 'Disable', 'corporate-lawyer-firm' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'corporate_lawyer_firm_slider_heading',
		'section'     => 'corporate_lawyer_firm_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'corporate-lawyer-firm' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'corporate_lawyer_firm_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_blog_slide_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'corporate_lawyer_firm_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'corporate-lawyer-firm' ),
		'priority'    => 10,
		'choices'     => corporate_lawyer_firm_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Extra Text', 'corporate-lawyer-firm' ),
		'settings' => 'corporate_lawyer_firm_slider_extra_text',
		'section'  => 'corporate_lawyer_firm_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'corporate_lawyer_firm_footer_enable_heading_22',
		'section'     => 'corporate_lawyer_firm_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content Alignment', 'corporate-lawyer-firm' ) . '</h3>',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'corporate_lawyer_firm_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_blog_slide_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'corporate-lawyer-firm' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'corporate-lawyer-firm' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'corporate-lawyer-firm' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'corporate-lawyer-firm' ),

		],
	] );

	//PROJECTS SECTION

	Kirki::add_section( 'corporate_lawyer_firm_project_section', array(
	    'title'          => esc_html__( 'Our Project Settings', 'corporate-lawyer-firm' ),
	    'panel'          => 'corporate_lawyer_firm_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'corporate-lawyer-firm' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CORPORATE_LAWYER_FIRM_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'corporate-lawyer-firm' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'corporate_lawyer_firm_project_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'corporate-lawyer-firm' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'corporate_lawyer_firm_enable_heading',
		'section'     => 'corporate_lawyer_firm_project_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Project',  'corporate-lawyer-firm' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'corporate_lawyer_firm_projects_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_project_section',
		'default'     => false,
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'corporate-lawyer-firm' ),
			'off' => esc_html__( 'Disable',  'corporate-lawyer-firm' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'corporate_lawyer_firm_projects_text_heading',
		'section'     => 'corporate_lawyer_firm_project_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Project', 'corporate-lawyer-firm' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Small Heading', 'corporate-lawyer-firm' ),
		'settings' => 'corporate_lawyer_firm_projects_small_heading',
		'section'  => 'corporate_lawyer_firm_project_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Heading', 'corporate-lawyer-firm' ),
		'settings' => 'corporate_lawyer_firm_projects_heading',
		'section'  => 'corporate_lawyer_firm_project_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Content', 'corporate-lawyer-firm' ),
		'settings' => 'corporate_lawyer_firm_projects_heading_text',
		'section'  => 'corporate_lawyer_firm_project_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'corporate_lawyer_firm_projects_number',
		'label'       => esc_html__( 'Number of tabs to show', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_project_section',
		'default'     => '',
		'choices'     => [
			'min'  => 0,
			'max'  => 8,
			'step' => 1,
		],
	] );

	$featured_post = get_theme_mod('corporate_lawyer_firm_projects_number','');
    	for ( $j = 1; $j <= $featured_post; $j++ ) :

    	Kirki::add_field( 'theme_config_id', [
	        'type'        => 'text',
	        'settings'    => 'corporate_lawyer_firm_projects_text' .$j,
	        'label'       => esc_html__( 'Tab Text ', 'corporate-lawyer-firm' ).$j,
	        'section'     => 'corporate_lawyer_firm_project_section',
	        'default'     => '',
	    ] );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'select',
			'settings'    => 'corporate_lawyer_firm_projects_category'.$j,
			'label'       => esc_html__( 'Select the category to show project ', 'corporate-lawyer-firm' ).$j,
			'section'     => 'corporate_lawyer_firm_project_section',
			'default'     => '',
			'placeholder' => esc_html__( 'Select an category...', 'corporate-lawyer-firm' ),
			'priority'    => 10,
			'choices'     => corporate_lawyer_firm_get_categories_select(),
		] );

	endfor;

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Button Text', 'corporate-lawyer-firm' ),
		'settings' => 'corporate_lawyer_firm_project_button_txt',
		'section'  => 'corporate_lawyer_firm_project_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'       => esc_html__( 'Button Link', 'corporate-lawyer-firm' ),
		'settings' => 'corporate_lawyer_firm_project_button_link',
		'section'  => 'corporate_lawyer_firm_project_section',
		'default'  => '',
		'priority' => 10,
	] );

	// FOOTER SECTION

	Kirki::add_section( 'corporate_lawyer_firm_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'corporate-lawyer-firm' ),
        'panel'          => 'corporate_lawyer_firm_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'corporate-lawyer-firm' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CORPORATE_LAWYER_FIRM_BUY_NOW_1 ) . '">' . __( 'GO TO PREMIUM', 'corporate-lawyer-firm' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'corporate_lawyer_firm_footer_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'corporate-lawyer-firm' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'corporate_lawyer_firm_footer_enable_heading',
		'section'     => 'corporate_lawyer_firm_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'corporate-lawyer-firm' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'corporate_lawyer_firm_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'corporate-lawyer-firm' ),
			'off' => esc_html__( 'Disable', 'corporate-lawyer-firm' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'corporate_lawyer_firm_footer_text_heading',
		'section'     => 'corporate_lawyer_firm_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'corporate-lawyer-firm' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'corporate_lawyer_firm_footer_text',
		'section'  => 'corporate_lawyer_firm_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'corporate_lawyer_firm_footer_text_heading_2',
	'section'     => 'corporate_lawyer_firm_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'corporate-lawyer-firm' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'corporate_lawyer_firm_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'corporate-lawyer-firm' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'corporate-lawyer-firm' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'corporate-lawyer-firm' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'corporate-lawyer-firm' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'corporate_lawyer_firm_footer_text_heading_1',
	'section'     => 'corporate_lawyer_firm_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'corporate-lawyer-firm' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'corporate_lawyer_firm_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'corporate-lawyer-firm' ),
		'section'     => 'corporate_lawyer_firm_footer_section',
		'default'     => '',
	] );
}
