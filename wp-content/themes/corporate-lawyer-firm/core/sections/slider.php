<?php if ( get_theme_mod('corporate_lawyer_firm_blog_box_enable',false) ) : ?>

<?php $corporate_lawyer_firm_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('corporate_lawyer_firm_blog_slide_category'),
  'posts_per_page' => get_theme_mod('corporate_lawyer_firm_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $corporate_lawyer_firm_arr_posts = new WP_Query( $corporate_lawyer_firm_args );
    if ( $corporate_lawyer_firm_arr_posts->have_posts() ) :
      while ( $corporate_lawyer_firm_arr_posts->have_posts() ) :
        $corporate_lawyer_firm_arr_posts->the_post();
        ?>
        <div class="blog_inner_box wow fadeInRight">
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
          <div class="blog_box">
            <?php if ( get_theme_mod('corporate_lawyer_firm_slider_extra_text') ) : ?>
              <h4><?php echo esc_html( get_theme_mod('corporate_lawyer_firm_slider_extra_text' ) ); ?></h4>
            <?php endif; ?>
            <?php if ( get_theme_mod('corporate_lawyer_firm_title_unable_disable',true) ) : ?>
              <h3 class="my-3"><?php the_title(); ?></a></h3>
            <?php endif; ?>
            <p><?php echo wp_trim_words( get_the_content(), 15); ?></p>
            <?php if ( get_theme_mod('corporate_lawyer_firm_button_unable_disable',true) ) : ?>
            <p class="slider-button mt-4">
              <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('PRACTICE AREA','corporate-lawyer-firm'); ?></a>
            </p>
            <?php endif; ?>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>