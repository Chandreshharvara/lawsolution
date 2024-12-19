<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_corporate_lawyer_firm_dismissed_notice_handler', 'corporate_lawyer_firm_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function corporate_lawyer_firm_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function corporate_lawyer_firm_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started', FALSE ) ) {?>

            <?php
            require_once get_template_directory() .'/core/includes/demo-import.php';
            $current_screen = get_current_screen();
				if ($current_screen->id !== 'appearance_page_corporate-lawyer-firm-guide-page') {
             $corporate_lawyer_firm_comments_theme = wp_get_theme(); ?>
            <div class="corporate-lawyer-firm-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="corporate-lawyer-firm-notice">
				<div class="corporate-lawyer-firm-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'corporate-lawyer-firm'); ?>">
				</div>
				<div class="corporate-lawyer-firm-notice-content">
					<div class="corporate-lawyer-firm-notice-heading"><?php esc_html_e('Thanks for installing ','corporate-lawyer-firm'); ?><?php echo esc_html( $corporate_lawyer_firm_comments_theme ); ?> <?php esc_html_e('Theme','corporate-lawyer-firm'); ?></div>
					<p><?php echo esc_html__('Get started with the wordpress theme installation','corporate-lawyer-firm'); ?></p>
					<div class="diplay-flex-btn">
						<a class="button button-primary" href="<?php echo esc_url(admin_url('themes.php?page=corporate-lawyer-firm-guide-page')); ?>"><?php echo esc_html__('More Option','corporate-lawyer-firm'); ?></a>
						<?php if(isset($_GET['import-demo']) && $_GET['import-demo'] == true){ ?>
				    		<a class="button button-success" href="<?php echo esc_url(home_url()); ?>" target="_blank"><?php echo esc_html__('Go to Homepage','corporate-lawyer-firm'); ?></a> <span class="imp-success"><?php echo esc_html__('Imported Successfully','corporate-lawyer-firm'); ?></span>
				    	<?php } else { ?>
						<form id="demo-importer-form" action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.phps" method="POST">
				        	<input  type="submit" name="submit" value="<?php esc_attr_e('Demo Import','corporate-lawyer-firm'); ?>" class="button button-primary">
				    	</form>
				    	<?php } ?>
					</div>
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'corporate_lawyer_firm_deprecated_hook_admin_notice' );

function corporate_lawyer_firm_admin_enqueue_scripts() {
	wp_enqueue_style( 'corporate-lawyer-firm-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
	wp_enqueue_script( 'corporate-lawyer-firm-admin-script', get_template_directory_uri() . '/js/corporate-lawyer-firm-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'corporate-lawyer-firm-admin-script', 'corporate_lawyer_firm_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
     wp_enqueue_script( 'corporate-lawyer-firm-demo-script', get_template_directory_uri() . '/js/demo-script.js', array( 'jquery' ), '', true );
}
add_action( 'admin_enqueue_scripts', 'corporate_lawyer_firm_admin_enqueue_scripts' );

add_action( 'admin_menu', 'corporate_lawyer_firm_getting_started' );
function corporate_lawyer_firm_getting_started() {
	add_theme_page( esc_html__('Get Started', 'corporate-lawyer-firm'), esc_html__('Get Started', 'corporate-lawyer-firm'), 'edit_theme_options', 'corporate-lawyer-firm-guide-page', 'corporate_lawyer_firm_test_guide');
}

if ( ! defined( 'CORPORATE_LAWYER_FIRM_DOCS_FREE' ) ) {
define('CORPORATE_LAWYER_FIRM_DOCS_FREE',__('https://demo.misbahwp.com/docs/corporate-lawyer-firm-free-docs/','corporate-lawyer-firm'));
}
if ( ! defined( 'CORPORATE_LAWYER_FIRM_DOCS_PRO' ) ) {
define('CORPORATE_LAWYER_FIRM_DOCS_PRO',__('https://demo.misbahwp.com/docs/corporate-lawyer-firm-pro-docs/','corporate-lawyer-firm'));
}
if ( ! defined( 'CORPORATE_LAWYER_FIRM_BUY_NOW' ) ) {
define('CORPORATE_LAWYER_FIRM_BUY_NOW',__('https://www.misbahwp.com/products/law-firm-wordpress-theme','corporate-lawyer-firm'));
}
if ( ! defined( 'CORPORATE_LAWYER_FIRM_SUPPORT_FREE' ) ) {
define('CORPORATE_LAWYER_FIRM_SUPPORT_FREE',__('https://wordpress.org/support/theme/corporate-lawyer-firm','corporate-lawyer-firm'));
}
if ( ! defined( 'CORPORATE_LAWYER_FIRM_REVIEW_FREE' ) ) {
define('CORPORATE_LAWYER_FIRM_REVIEW_FREE',__('https://wordpress.org/support/theme/corporate-lawyer-firm/reviews/#new-post','corporate-lawyer-firm'));
}
if ( ! defined( 'CORPORATE_LAWYER_FIRM_DEMO_PRO' ) ) {
define('CORPORATE_LAWYER_FIRM_DEMO_PRO',__('https://demo.misbahwp.com/corporate-lawyer-firm/','corporate-lawyer-firm'));
}
if( ! defined( 'CORPORATE_LAWYER_FIRM_THEME_BUNDLE' ) ) {
define('CORPORATE_LAWYER_FIRM_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle','corporate-lawyer-firm'));
}

function corporate_lawyer_firm_test_guide() { ?>
	<?php $corporate_lawyer_firm_theme = wp_get_theme();
	require_once get_template_directory() .'/core/includes/demo-import.php'; ?>
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( CORPORATE_LAWYER_FIRM_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'corporate-lawyer-firm' ) ?></a>			
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'corporate-lawyer-firm' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( CORPORATE_LAWYER_FIRM_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'corporate-lawyer-firm' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( CORPORATE_LAWYER_FIRM_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'corporate-lawyer-firm' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','corporate-lawyer-firm'); ?><?php echo esc_html( $corporate_lawyer_firm_theme ); ?>  <span><?php esc_html_e('Version: ', 'corporate-lawyer-firm'); ?><?php echo esc_html($corporate_lawyer_firm_theme['Version']);?></span></h3>
				<div class="demo-import-box">
					<h4><?php echo esc_html__('Import homepage demo in just one click.','corporate-lawyer-firm'); ?></h4>
					<p><?php echo esc_html__('Get started with the wordpress theme installation','corporate-lawyer-firm'); ?></p>
					<?php if(isset($_GET['import-demo']) && $_GET['import-demo'] == true){ ?>
			    		<span class="imp-success"><?php echo esc_html__('Imported Successfully','corporate-lawyer-firm'); ?></span>  <a class="button button-success" href="<?php echo esc_url(home_url()); ?>" target="_blank"><?php echo esc_html__('Go to Homepage','corporate-lawyer-firm'); ?></a>
			    	<?php } else { ?>
					<form id="demo-importer-form" action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.phps" method="POST">
			        	<input  type="submit" name="submit" value="<?php esc_attr_e('Demo Import','corporate-lawyer-firm'); ?>" class="button button-primary">
			    	</form>
			    	<?php } ?>
				</div>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-insidee">
					<?php
						$corporate_lawyer_firm_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $corporate_lawyer_firm_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>
		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'corporate-lawyer-firm' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','corporate-lawyer-firm'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( CORPORATE_LAWYER_FIRM_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'corporate-lawyer-firm' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( CORPORATE_LAWYER_FIRM_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'corporate-lawyer-firm' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( CORPORATE_LAWYER_FIRM_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'corporate-lawyer-firm' ) ?></a>
					</div>
				</div>
				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'corporate-lawyer-firm' ); ?></h3>
				<div class="insidee theme-bundle">
					<p class="offer"><?php esc_html_e('Get 80+ Perfect WordPress Theme In A Single Package at just $99."','corporate-lawyer-firm'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 80+ WordPress Themes At 15% Off','corporate-lawyer-firm'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','corporate-lawyer-firm'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( CORPORATE_LAWYER_FIRM_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'corporate-lawyer-firm' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','corporate-lawyer-firm'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','corporate-lawyer-firm'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','corporate-lawyer-firm'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','corporate-lawyer-firm'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','corporate-lawyer-firm'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','corporate-lawyer-firm'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','corporate-lawyer-firm'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','corporate-lawyer-firm'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','corporate-lawyer-firm'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','corporate-lawyer-firm'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','corporate-lawyer-firm'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','corporate-lawyer-firm'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','corporate-lawyer-firm'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','corporate-lawyer-firm'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','corporate-lawyer-firm'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>

<?php } ?>
