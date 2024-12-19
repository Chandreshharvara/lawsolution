<?php

$corporate_lawyer_firm_custom_css = '';


$corporate_lawyer_firm_is_dark_mode_enabled = get_theme_mod( 'corporate_lawyer_firm_is_dark_mode_enabled', false );

if ( $corporate_lawyer_firm_is_dark_mode_enabled ) {

    $corporate_lawyer_firm_custom_css .= 'body,.fixed-header,tr:nth-child(2n+2) {';
    $corporate_lawyer_firm_custom_css .= 'background: #000;';
    $corporate_lawyer_firm_custom_css .= '}';

    $corporate_lawyer_firm_custom_css .= 'body,h1,h2,h3,h4,h5,p,#main-menu ul li a,.woocommerce .woocommerce-ordering select, .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea,a,.logo span,.logo a,.header-search .open-search-form i{';
    $corporate_lawyer_firm_custom_css .= 'color: #fff;';
    $corporate_lawyer_firm_custom_css .= '}';

    $corporate_lawyer_firm_custom_css .= 'a.wc-block-components-product-name, .wc-block-components-product-name,.wc-block-components-totals-footer-item .wc-block-components-totals-item__value,
.wc-block-components-totals-footer-item .wc-block-components-totals-item__label,
.wc-block-components-totals-item__label,.wc-block-components-totals-item__value,
.wc-block-components-product-metadata .wc-block-components-product-metadata__description>p,
.is-medium table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__total .wc-block-components-formatted-money-amount,
.wc-block-components-quantity-selector input.wc-block-components-quantity-selector__input,
.wc-block-components-quantity-selector .wc-block-components-quantity-selector__button,
.wc-block-components-quantity-selector,table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__quantity .wc-block-cart-item__remove-link,
.wc-block-components-product-price__value.is-discounted,del.wc-block-components-product-price__regular{';
    $corporate_lawyer_firm_custom_css .= 'color: #fff !important;';
    $corporate_lawyer_firm_custom_css .= '}';

    $corporate_lawyer_firm_custom_css .= 'h5.product-text a,#featured-product p.price,.card-header a,.comment-content.card-block p,.post-box.sticky a, .sticky .post-content{';
    $corporate_lawyer_firm_custom_css .= 'color: #000 !important';
    $corporate_lawyer_firm_custom_css .= '}';

	$corporate_lawyer_firm_custom_css .= '.post-box{';
    $corporate_lawyer_firm_custom_css .= '    border: 1px solid rgb(229 229 229 / 48%)';
    $corporate_lawyer_firm_custom_css .= '}';
}

	/*---------------------------text-transform-------------------*/

	$corporate_lawyer_firm_text_transform = get_theme_mod( 'menu_text_transform_corporate_lawyer_firm','UPPERCASE');

    if($corporate_lawyer_firm_text_transform == 'CAPITALISE'){

		$corporate_lawyer_firm_custom_css .='#main-menu ul li a{';

			$corporate_lawyer_firm_custom_css .='text-transform: capitalize;';

		$corporate_lawyer_firm_custom_css .='}';

	}else if($corporate_lawyer_firm_text_transform == 'UPPERCASE'){

		$corporate_lawyer_firm_custom_css .='#main-menu ul li a{';

			$corporate_lawyer_firm_custom_css .='text-transform: uppercase;';

		$corporate_lawyer_firm_custom_css .='}';

	}else if($corporate_lawyer_firm_text_transform == 'LOWERCASE'){

		$corporate_lawyer_firm_custom_css .='#main-menu ul li a{';

			$corporate_lawyer_firm_custom_css .='text-transform: lowercase;';

		$corporate_lawyer_firm_custom_css .='}';
	}

		/*---------------------------menu-zoom-------------------*/

		$corporate_lawyer_firm_menu_zoom = get_theme_mod( 'corporate_lawyer_firm_menu_zoom','None');

	if($corporate_lawyer_firm_menu_zoom == 'None'){

		$corporate_lawyer_firm_custom_css .='#main-menu ul li a{';

			$corporate_lawyer_firm_custom_css .='';

		$corporate_lawyer_firm_custom_css .='}';

	}else if($corporate_lawyer_firm_menu_zoom == 'Zoominn'){

		$corporate_lawyer_firm_custom_css .='#main-menu ul li a:hover{';

			$corporate_lawyer_firm_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #BF9874;';

		$corporate_lawyer_firm_custom_css .='}';
	}

	/*---------------------------Slider-content-alignment-------------------*/


$corporate_lawyer_firm_slider_content_alignment = get_theme_mod( 'corporate_lawyer_firm_slider_content_alignment','LEFT-ALIGN');

if($corporate_lawyer_firm_slider_content_alignment == 'LEFT-ALIGN'){

	$corporate_lawyer_firm_custom_css .='.blog_box{';

		$corporate_lawyer_firm_custom_css .='text-align:left;';

	$corporate_lawyer_firm_custom_css .='}';


}else if($corporate_lawyer_firm_slider_content_alignment == 'CENTER-ALIGN'){

	$corporate_lawyer_firm_custom_css .='.blog_box{';

		$corporate_lawyer_firm_custom_css .='text-align:center;';

	$corporate_lawyer_firm_custom_css .='}';


}else if($corporate_lawyer_firm_slider_content_alignment == 'RIGHT-ALIGN'){

	$corporate_lawyer_firm_custom_css .='.blog_box{';

		$corporate_lawyer_firm_custom_css .='text-align:right;';

	$corporate_lawyer_firm_custom_css .='}';

}


	/*---------------------------Copyright Text alignment-------------------*/

$corporate_lawyer_firm_copyright_text_alignment = get_theme_mod( 'corporate_lawyer_firm_copyright_text_alignment','LEFT-ALIGN');

 if($corporate_lawyer_firm_copyright_text_alignment == 'LEFT-ALIGN'){

		$corporate_lawyer_firm_custom_css .='.copy-text p{';

			$corporate_lawyer_firm_custom_css .='text-align:left;';

		$corporate_lawyer_firm_custom_css .='}';


	}else if($corporate_lawyer_firm_copyright_text_alignment == 'CENTER-ALIGN'){

		$corporate_lawyer_firm_custom_css .='.copy-text p{';

			$corporate_lawyer_firm_custom_css .='text-align:center;';

		$corporate_lawyer_firm_custom_css .='}';


	}else if($corporate_lawyer_firm_copyright_text_alignment == 'RIGHT-ALIGN'){

		$corporate_lawyer_firm_custom_css .='.copy-text p{';

			$corporate_lawyer_firm_custom_css .='text-align:right;';

		$corporate_lawyer_firm_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/


$corporate_lawyer_firm_related_product_setting = get_theme_mod('corporate_lawyer_firm_related_product_setting',true);

	if($corporate_lawyer_firm_related_product_setting == false){

		$corporate_lawyer_firm_custom_css .='.related.products, .related h2{';

			$corporate_lawyer_firm_custom_css .='display: none;';

		$corporate_lawyer_firm_custom_css .='}';
	}

/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$corporate_lawyer_firm_scroll_top_position = get_theme_mod( 'corporate_lawyer_firm_scroll_top_position','Right');

	if($corporate_lawyer_firm_scroll_top_position == 'Right'){

		$corporate_lawyer_firm_custom_css .='.scroll-up{';

			$corporate_lawyer_firm_custom_css .='right: 20px;';

		$corporate_lawyer_firm_custom_css .='}';

	}else if($corporate_lawyer_firm_scroll_top_position == 'Left'){

		$corporate_lawyer_firm_custom_css .='.scroll-up{';

			$corporate_lawyer_firm_custom_css .='left: 20px;';

		$corporate_lawyer_firm_custom_css .='}';

	}else if($corporate_lawyer_firm_scroll_top_position == 'Center'){

		$corporate_lawyer_firm_custom_css .='.scroll-up{';

			$corporate_lawyer_firm_custom_css .='right: 50%;left: 50%;';

		$corporate_lawyer_firm_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


	$corporate_lawyer_firm_pagination_setting = get_theme_mod('corporate_lawyer_firm_pagination_setting',true);

		if($corporate_lawyer_firm_pagination_setting == false){

			$corporate_lawyer_firm_custom_css .='.nav-links{';

				$corporate_lawyer_firm_custom_css .='display: none;';

			$corporate_lawyer_firm_custom_css .='}';
		}

		
	/*---------------------------Container Width-------------------*/

$corporate_lawyer_firm_container_width = get_theme_mod('corporate_lawyer_firm_container_width');

		$corporate_lawyer_firm_custom_css .='body{';

			$corporate_lawyer_firm_custom_css .='width: '.esc_attr($corporate_lawyer_firm_container_width).'%; margin: auto';

		$corporate_lawyer_firm_custom_css .='}';
		
	/*---------------------------Woocommerce Pagination Alignment Settings-------------------*/

	$corporate_lawyer_firm_woocommerce_pagination_position = get_theme_mod( 'corporate_lawyer_firm_woocommerce_pagination_position','Center');

	if($corporate_lawyer_firm_woocommerce_pagination_position == 'Left'){

		$corporate_lawyer_firm_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$corporate_lawyer_firm_custom_css .='text-align: left;';

		$corporate_lawyer_firm_custom_css .='}';

	}else if($corporate_lawyer_firm_woocommerce_pagination_position == 'Center'){

		$corporate_lawyer_firm_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$corporate_lawyer_firm_custom_css .='text-align: center;';

		$corporate_lawyer_firm_custom_css .='}';

	}else if($corporate_lawyer_firm_woocommerce_pagination_position == 'Right'){

		$corporate_lawyer_firm_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$corporate_lawyer_firm_custom_css .='text-align: right;';

		$corporate_lawyer_firm_custom_css .='}';
	}