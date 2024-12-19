<?php 
	if(isset($_GET['import-demo']) && $_GET['import-demo'] == true){
		// ------- Create Nav Menu --------
		$corporate_lawyer_firm_menuname ='Main Menus';
	    $corporate_lawyer_firm_bpmenulocation = 'main-menu';
	    $corporate_lawyer_firm_menu_exists = wp_get_nav_menu_object( $corporate_lawyer_firm_menuname );
	    if( !$corporate_lawyer_firm_menu_exists){
	        $corporate_lawyer_firm_menu_id = wp_create_nav_menu($corporate_lawyer_firm_menuname);
	        $corporate_lawyer_firm_home_parent = wp_update_nav_menu_item($corporate_lawyer_firm_menu_id, 0, array(
				'menu-item-title' =>  __('Home','corporate-lawyer-firm'),
				'menu-item-classes' => 'home',
				'menu-item-url' =>home_url( '/' ),
				'menu-item-status' => 'publish')
			);

			wp_update_nav_menu_item($corporate_lawyer_firm_menu_id, 0, array(
	            'menu-item-title' =>  __('Case Study','corporate-lawyer-firm'),
	            'menu-item-classes' => 'features',
	            'menu-item-url' => home_url( '//features/' ),
	            'menu-item-status' => 'publish'));

	        wp_update_nav_menu_item($corporate_lawyer_firm_menu_id, 0, array(
	            'menu-item-title' =>  __('Pages','corporate-lawyer-firm'),
	            'menu-item-classes' => 'products',
	            'menu-item-url' => home_url( '//products/' ), 
	            'menu-item-status' => 'publish'));

	        wp_update_nav_menu_item($corporate_lawyer_firm_menu_id, 0, array(
	            'menu-item-title' =>  __('Blog','corporate-lawyer-firm'),
	            'menu-item-classes' => 'pricing',
	            'menu-item-url' => home_url( '//pricing/' ), 
	            'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($corporate_lawyer_firm_menu_id, 0, array(
	            'menu-item-title' =>  __('Practice Area','corporate-lawyer-firm'),
	            'menu-item-classes' => 'support',
	            'menu-item-url' => home_url( '//support/' ), 
	            'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($corporate_lawyer_firm_menu_id, 0, array(
	            'menu-item-title' =>  __('Contact','corporate-lawyer-firm'),
	            'menu-item-classes' => 'marketing',
	            'menu-item-url' => home_url( '//marketing/' ), 
	            'menu-item-status' => 'publish'));
	        
			if( !has_nav_menu( $corporate_lawyer_firm_bpmenulocation ) ){
	            $locations = get_theme_mod('nav_menu_locations');
	            $locations[$corporate_lawyer_firm_bpmenulocation] = $corporate_lawyer_firm_menu_id;
	            set_theme_mod( 'nav_menu_locations', $locations );
	        }
	    }
	    $corporate_lawyer_firm_home_id='';
		$corporate_lawyer_firm_home_content = '';
		$corporate_lawyer_firm_home_title = 'Home';
		$home = array(
			'post_type' => 'page',
			'post_title' => $corporate_lawyer_firm_home_title,
			'post_content' => $corporate_lawyer_firm_home_content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'home'
		);
		$corporate_lawyer_firm_home_id = wp_insert_post($home);
	    
		add_post_meta( $corporate_lawyer_firm_home_id, '_wp_page_template', 'frontpage.php' );

		update_option( 'page_on_front', $corporate_lawyer_firm_home_id );
		update_option( 'show_on_front', 'page' );

		//---Header--//

		set_theme_mod( 'corporate_lawyer_firm_header_hire_us_txt', 'FREE CONSULTANT');
		set_theme_mod( 'corporate_lawyer_firm_header_hire_us_lnk', '#');

		//-----Slider-----//

		set_theme_mod( 'corporate_lawyer_firm_blog_box_enable', true);

		set_theme_mod( 'corporate_lawyer_firm_blog_slide_number', '3' );
		$corporate_lawyer_firm_latest_post_category = wp_create_category('Slider Post');
			set_theme_mod( 'corporate_lawyer_firm_blog_slide_category', 'Slider Post' ); 
		
		set_theme_mod( 'corporate_lawyer_firm_slider_extra_text', 'WELCOME POWERFUL LAW FIRM');

		for($i=1; $i<=3; $i++) {

			$slider_title=array('Our Expertise, Your Success. We Represent Your Voice.', 'Your Goals, Our Knowledge. We Champion Your Cause.', 'Your Vision, Our Expertise. We Amplify Your Message.');

			$content = 'Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...';

			// Create post object
			$corporate_lawyer_firm_my_post = array(
				'post_title'    => wp_strip_all_tags( $slider_title[$i-1] ),
				'post_content'  => $content,
				'post_status'   => 'publish',
				'post_type'     => 'post',
				'post_category' => array($corporate_lawyer_firm_latest_post_category) 
			);

			// Insert the post into the database
			$corporate_lawyer_firm_post_id = wp_insert_post( $corporate_lawyer_firm_my_post );

			$corporate_lawyer_firm_image_url = get_template_directory_uri().'/assets/images/slider'.$i.'.png';

			$corporate_lawyer_firm_image_name= 'slider'.$i.'.png';
			$corporate_lawyer_firm_upload_dir       = wp_upload_dir(); 
			// Set upload folder
			$corporate_lawyer_firm_image_data       = file_get_contents($corporate_lawyer_firm_image_url); 
			 
			// Get image data
			$corporate_lawyer_firm_unique_file_name = wp_unique_filename( $corporate_lawyer_firm_upload_dir['path'], $corporate_lawyer_firm_image_name ); 
			// Generate unique name
			$filename= basename( $corporate_lawyer_firm_unique_file_name ); 
			// Create image file name
			// Check folder permission and define file location
			if( wp_mkdir_p( $corporate_lawyer_firm_upload_dir['path'] ) ) {
				$file = $corporate_lawyer_firm_upload_dir['path'] . '/' . $filename;
			} else {
				$file = $corporate_lawyer_firm_upload_dir['basedir'] . '/' . $filename;
			}
			file_put_contents( $file, $corporate_lawyer_firm_image_data );
			$wp_filetype = wp_check_filetype( $filename, null );
			$corporate_lawyer_firm_attachment = array(
				'post_mime_type' => $wp_filetype['type'],
				'post_title'     => sanitize_file_name( $filename ),
				'post_content'   => '',
				'post_type'     => 'post',
				'post_status'    => 'inherit'
			);
			$attach_id = wp_insert_attachment( $corporate_lawyer_firm_attachment, $file, $corporate_lawyer_firm_post_id );
			require_once(ABSPATH . 'wp-admin/includes/image.php');
			$attach_data = wp_generate_attachment_metadata( $attach_id, $file );
				wp_update_attachment_metadata( $attach_id, $attach_data );
				set_post_thumbnail( $corporate_lawyer_firm_post_id, $attach_id );
		}

		//--------------Case Studies Section-----------//

		set_theme_mod( 'corporate_lawyer_firm_projects_section_enable', true);

        set_theme_mod( 'corporate_lawyer_firm_projects_small_heading', 'HANDS-ON EXPERIENCE');
		set_theme_mod( 'corporate_lawyer_firm_projects_heading', 'Recent Case Studies');
		set_theme_mod( 'corporate_lawyer_firm_projects_heading_text', 'Our commitment and dedication to continually move forward enables us to improve our representation and provide you with a service you can’t find anywhere else.');


		set_theme_mod( 'corporate_lawyer_firm_project_button_txt', 'VIEW ALL CASE STUDIES');
		set_theme_mod( 'corporate_lawyer_firm_project_button_link', '#');

        
		set_theme_mod( 'corporate_lawyer_firm_projects_number', '5');
		
		$case_studies_category = wp_create_category('Case Studies');
		for($i=1; $i<=5; $i++) {
			 
			$tab_name=array('All', 'CAR ACCIDENT', 'FAMILY LAW', 'ECONOMIC LAW', 'HEALTH CARE LAW');
			set_theme_mod( 'corporate_lawyer_firm_projects_text'.$i, $tab_name[$i-1] );

  		    set_theme_mod( 'corporate_lawyer_firm_projects_category'.$i, 'Case Studies' ); 

		}

        set_theme_mod( 'corporate_lawyer_firm_projects_number', 8);

        $case_studies_text=array('Strange Accident Happened','International Tax Treaties','The Insurance Paid Hospital','The Power Of Cooperation','Strange Accident Happened','International Tax Treaties','The Insurance Paid Hospital','The Power Of Cooperation');

		for($i=1; $i<=4; $i++) {

			$title =   $case_studies_text[$i-1];
			$content = 'Quick sales business plan agile development equity churn rate social proof crowdsource iPhone ownership entrepreneur lean…';
			

			// Create post object
			$my_post = array(
				'post_title'    => wp_strip_all_tags( $title ),
				'post_content'  => $content,
				'post_status'   => 'publish',
				'post_type'     => 'post',
				'post_category' => array($case_studies_category) 
			);

			// Insert the post into the database
			$post_id = wp_insert_post( $my_post );
			
			$image_url = get_template_directory_uri().'/assets/images/case-studies'.$i.'.jpg';

			$image_name= 'case-studies'.$i.'.jpg';
			$upload_dir       = wp_upload_dir(); 
			// Set upload folder
			$image_data       = file_get_contents($image_url); 

			$meta_case_studie_category_text=array('CAR ACCIDENT', 'FAMILY LAW', 'HEALTH CARE LAW', 'ECONOMIC LAW', 'CAR ACCIDENT', 'FAMILY LAW', 'HEALTH CARE LAW', 'ECONOMIC LAW');
			update_post_meta( $post_id, 'meta_case_studie_category', $meta_case_studie_category_text[$i-1]);

			// Get image data
			$unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
			// Generate unique name
			$filename= basename( $unique_file_name ); 
			// Create image file name
			// Check folder permission and define file location
			if( wp_mkdir_p( $upload_dir['path'] ) ) {
				$file = $upload_dir['path'] . '/' . $filename;
			} else {
				$file = $upload_dir['basedir'] . '/' . $filename;
			}
			file_put_contents( $file, $image_data );
			$wp_filetype = wp_check_filetype( $filename, null );
			$attachment = array(
				'post_mime_type' => $wp_filetype['type'],
				'post_title'     => sanitize_file_name( $filename ),
				'post_content'   => '',
				'post_type'     => 'case_studies',
				'post_status'    => 'inherit',
			);
			$attach_id = wp_insert_attachment( $attachment, $file, $post_id );
			require_once(ABSPATH . 'wp-admin/includes/image.php');
			$attach_data = wp_generate_attachment_metadata( $attach_id, $file );
				wp_update_attachment_metadata( $attach_id, $attach_data );
				set_post_thumbnail( $post_id, $attach_id );
		}
	}
?>