<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'corporate-lawyer-firm' ); ?></a>

<?php if(get_theme_mod('corporate_lawyer_firm_site_loader',false)!= ''){ ?>
    <?php if(get_theme_mod( 'corporate_lawyer_firm_preloader_type','four-way-loader') == 'four-way-loader'){ ?>
	    <div class="cssloader">
	    	<div class="sh1"></div>
	    	<div class="sh2"></div>
	    	<h1 class="lt"><?php esc_html_e( 'loading',  'corporate-lawyer-firm' ); ?></h1>
	    </div>
    <?php }else if(get_theme_mod( 'corporate_lawyer_firm_preloader_type') == 'cube-loader') {?>
		<div class="cssloader">
    		<div class="loader-main ">
				<div class="triangle35b"></div>
				<div class="triangle35b"></div>
				<div class="triangle35b"></div>
			</div>
    	</div>
    <?php }?>
<?php }?>

<header id="site-navigation" class="header text-center text-md-start py-2 wow fadeInDown">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-12 col-sm-12 align-self-center">
				<div class="logo">
		    		<div class="logo-image">
		    			<?php the_custom_logo(); ?>
			    	</div>
			    	<div class="logo-content text-center text-lg-start">
				    	<?php
				    		if ( get_theme_mod('corporate_lawyer_firm_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('corporate_lawyer_firm_display_header_text', false) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
			    		?>
					</div>
				</div>
		   	</div>
			<div class="col-lg-6 col-md-8 col-sm-12 align-self-center">
				<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
					<span aria-hidden="true"><?php esc_html_e( 'Menu', 'corporate-lawyer-firm' ); ?></span>
				</button>
				<nav id="main-menu" class="close-panal">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'main-menu',
							'container' => 'false'
						));
					?>
					<button class="close-menu my-2 p-2" type="button">
						<span aria-hidden="true"><i class="fa fa-times"></i></span>
					</button>
				</nav>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-2 align-self-center">
				<div class="header-search text-center">
		        	<?php if ( get_theme_mod('corporate_lawyer_firm_search_box_enable', true) == true ) : ?>
		                <a class="open-search-form" href="#search-form"><i class="fa fa-search" aria-hidden="true"></i></a>
		                <div class="search-form"><?php get_search_form();?></div>
		        	<?php endif; ?>
		        </div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-10 align-self-center">
				<?php if ( get_theme_mod('corporate_lawyer_firm_header_hire_us_txt') || get_theme_mod('corporate_lawyer_firm_header_hire_us_lnk') ) : ?>
					<p class="header-button text-sm-end text-md-end text-center my-3 my-md-0"><a href="<?php echo esc_url( get_theme_mod('corporate_lawyer_firm_header_hire_us_lnk' ) ); ?>"><?php echo esc_html( get_theme_mod('corporate_lawyer_firm_header_hire_us_txt' ) ); ?></a></p>
				<?php endif; ?>
	       	</div>
	   	</div>
	</div>
</header>
