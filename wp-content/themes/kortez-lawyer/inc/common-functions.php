<?php
/**
 * Common Functions for Kortez Lawyer Theme.
 *
 * @package     Kortez Lawyer
 * @since       Kortez Lawyer 1.0.0
 */

if( ! function_exists( 'kortez_lawyer_sort_category' ) ):
/**
 * Helper function for kortez_lawyer_get_the_category()
 *
 * @since Kortez Lawyer 1.0.0
 */
function kortez_lawyer_sort_category( $a, $b ){
    return $a->term_id < $b->term_id;
}
endif;

if( ! function_exists( 'kortez_lawyer_get_the_category' ) ):
	/**
	* Returns categories after sorting by term id descending
	* 
	* @since Kortez Lawyer 1.0.0
	* @uses kortez_lawyer_sort_category()
	* @return array
	*/
	function kortez_lawyer_get_the_category( $id = false ){
	    $failed = true;

	    if( !$id ){
	        $id = get_the_id();
	    }
	    
	    # Check if Yoast Plugin is installed 
	    # If yes then, get Primary category, set by Plugin

	    if ( class_exists( 'WPSEO_Primary_Term' ) ){

	        # Show the post's 'Primary' category, if this Yoast feature is available, & one is set
	        $wpseo_primary_term = new WPSEO_Primary_Term( 'category', $id );
	        $wpseo_primary_term = $wpseo_primary_term->get_primary_term();

	        $kortez_lawyer_cat[0] = get_term( $wpseo_primary_term );

	        if ( !is_wp_error( $kortez_lawyer_cat[0] ) ) { 
	           $failed = false;
	        }
	    }

	    if( $failed ){

	      $kortez_lawyer_cat = get_the_category( $id );
	      usort( $kortez_lawyer_cat, 'kortez_lawyer_sort_category' );  
	    }
	    
	    return $kortez_lawyer_cat;
	}

endif;

/**
* Get post categoriesby by term id
* 
* @since Kortez Lawyer 1.0.0
* @uses kortez_lawyer_get_post_categories()
* @return array
*/
function kortez_lawyer_get_post_categories(){

	$terms = get_terms( array(
	    'taxonomy' => 'category',
	    'hide_empty' => true,
	) );

	if( empty($terms) || !is_array( $terms ) ){
		return array();
	}

	$data = array();
	foreach ( $terms as $key => $value) {
		$term_id = absint( $value->term_id );
		$data[$term_id] =  esc_html( $value->name );
	}
	return $data;

}

/**
* Check if all getting started recommended plugins are active.
* @since Kortez Lawyer 1.0.0
*/
if( !function_exists( 'kortez_lawyer_are_plugin_active' ) ){
    function kortez_lawyer_are_plugin_active() {
        if( is_plugin_active( 'advanced-import/advanced-import.php' ) && is_plugin_active( 'kortez-toolset/kortez-toolset.php' ) && is_plugin_active( 'elementor/elementor.php' ) && is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) && is_plugin_active( 'elementskit-lite/elementskit-lite.php' ) ){
            return true;
        }else{
            return false;
        }
    }
}