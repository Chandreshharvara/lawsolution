<?php if ( get_theme_mod('corporate_lawyer_firm_projects_section_enable',false) ) : ?>

<div class="project py-5">
	<div class="container">
		<div class="row mb-4">
			<div class="col-lg-5 col-md-5 align-self-center wow fadeInLeft">
				<?php if ( get_theme_mod('corporate_lawyer_firm_projects_small_heading') ) : ?>
					<h6><?php echo esc_html(get_theme_mod('corporate_lawyer_firm_projects_small_heading')); ?></h6>
				<?php endif; ?>
				<?php if ( get_theme_mod('corporate_lawyer_firm_projects_heading') ) : ?>
					<h3><?php echo esc_html(get_theme_mod('corporate_lawyer_firm_projects_heading')); ?></h3>
				<?php endif; ?>
			</div>
			<div class="col-lg-7 col-md-7 align-self-center wow fadeInRight">
				<?php if ( get_theme_mod('corporate_lawyer_firm_projects_heading_text') ) : ?>
					<p class="mb-0"><?php echo esc_html(get_theme_mod('corporate_lawyer_firm_projects_heading_text')); ?></p>
				<?php endif; ?>
			</div>
		</div>		
		<div class="tab">
	        <?php $corporate_lawyer_firm_featured_post = get_theme_mod('corporate_lawyer_firm_projects_number', '');
	          	for ( $corporate_lawyer_firm_j = 1; $corporate_lawyer_firm_j <= $corporate_lawyer_firm_featured_post; $corporate_lawyer_firm_j++ ){ ?>
          		<button class="tablinks me-2 mr-md-3 wow slideInUp" onclick="corporate_lawyer_firm_projects_tab(event, '<?php $corporate_lawyer_firm_main_id = get_theme_mod('corporate_lawyer_firm_projects_text'.$corporate_lawyer_firm_j); $corporate_lawyer_firm_tab_id = str_replace(' ', '-', $corporate_lawyer_firm_main_id); echo $corporate_lawyer_firm_tab_id; ?> ')">
	          	<?php echo esc_html(get_theme_mod('corporate_lawyer_firm_projects_text'.$corporate_lawyer_firm_j)); ?></button>
	        <?php }?>
      	</div>

  	  	<?php for ( $corporate_lawyer_firm_j = 1; $corporate_lawyer_firm_j <= $corporate_lawyer_firm_featured_post; $corporate_lawyer_firm_j++ ){ ?>
	        <div id="<?php $corporate_lawyer_firm_main_id = get_theme_mod('corporate_lawyer_firm_projects_text'.$corporate_lawyer_firm_j); $corporate_lawyer_firm_tab_id = str_replace(' ', '-', $corporate_lawyer_firm_main_id); echo $corporate_lawyer_firm_tab_id; ?>"  class="tabcontent mt-5">
		        <?php $corporate_lawyer_firm_args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' =>  get_theme_mod('corporate_lawyer_firm_projects_category'.$corporate_lawyer_firm_j),
					'posts_per_page' => 9,
				); ?>
				<div class="row">
				    <?php $corporate_lawyer_firm_arr_posts = new WP_Query( $corporate_lawyer_firm_args );
				    	if ( $corporate_lawyer_firm_arr_posts->have_posts() ) :
				      	while ( $corporate_lawyer_firm_arr_posts->have_posts() ) :
				        $corporate_lawyer_firm_arr_posts->the_post();
				        ?>
				        <div class="col-lg-3 col-md-6 col-sm-6 wow zoomIn">
					        <div class="projects_inner_box mb-4 text-center">
								<?php
						            if ( has_post_thumbnail() ) :
						              the_post_thumbnail();
						            else:
						              ?>
						              <div class="slider-alternate">
						                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>">
						              </div>
						              <?php
						            endif;
						          ?>
								<div class="projects_content_box">
									<div class="project_category">
										<?php
											$corporate_lawyer_firm_categories = get_the_category();
											if ( ! empty( $corporate_lawyer_firm_categories ) ) {
											    echo esc_html( $corporate_lawyer_firm_categories[0]->name );   
											}
										?>
									</div>
					        		<h4><?php the_title(); ?></h4>
					        		<a href="<?php the_permalink(); ?>"><i class="fas fa-long-arrow-alt-right"></i></a>
					            </div>
					        </div>
					    </div>
				      	<?php
				    endwhile;
				    wp_reset_postdata();
				    endif; ?>
				</div>
				<?php if ( get_theme_mod('corporate_lawyer_firm_project_button_txt') || get_theme_mod('corporate_lawyer_firm_project_button_link') ) : ?>
					<p class="project-button text-center my-3 my-md-0"><a href="<?php echo esc_url( get_theme_mod('corporate_lawyer_firm_project_button_link' ) ); ?>"><?php echo esc_html( get_theme_mod('corporate_lawyer_firm_project_button_txt' ) ); ?></a></p>
				<?php endif; ?>
			</div>
		<?php }?>
	</div>
</div>

<?php endif; ?>
