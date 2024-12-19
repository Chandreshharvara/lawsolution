<?php
  global $post;

$post_author_id   = get_post_field( 'post_author', get_queried_object_id() );
$corporate_lawyer_firm_get_post_column_layout = get_theme_mod( 'corporate_lawyer_firm_post_column_count', 2 );
$corporate_lawyer_firm_post_column_layout = 'col-sm-12 col-md-6 col-lg-4';
if ( $corporate_lawyer_firm_get_post_column_layout == 2 ) {
  $corporate_lawyer_firm_post_column_layout = 'col-lg-6 col-md-12';
} elseif ( $corporate_lawyer_firm_get_post_column_layout == 3 ) {
  $corporate_lawyer_firm_post_column_layout = 'col-sm-12 col-md-6 col-lg-4';
} elseif ( $corporate_lawyer_firm_get_post_column_layout == 4 ) {
  $corporate_lawyer_firm_post_column_layout = 'col-sm-12 col-md-6 col-lg-3';
}else{
  $corporate_lawyer_firm_post_column_layout = 'col-sm-12 grid-layout';
}
?>

<div class="<?php echo esc_attr( $corporate_lawyer_firm_post_column_layout ); ?> blog-grid-layout">
  <div id="post-<?php the_ID(); ?>" <?php post_class('post-box mb-4 p-3 wow zoomIn'); ?>>
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the gallery.
        if ( get_post_gallery() ) {
          echo '<div class="entry-gallery">';
            echo ( get_post_gallery() );
          echo '</div>';
        };
      };
    ?>
    <?php if ( get_theme_mod('corporate_lawyer_firm_blog_admin_enable',true) || get_theme_mod('corporate_lawyer_firm_blog_comment_enable',true) ) : ?>
      <div class="post-meta my-3">
        <?php if ( get_theme_mod('corporate_lawyer_firm_blog_admin_enable',true) ) : ?>
          <i class="far fa-user me-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a>
        <?php endif; ?>
        <?php if ( get_theme_mod('corporate_lawyer_firm_blog_comment_enable',true) ) : ?>
          <span class="ms-3"><i class="far fa-comments me-2"></i> <?php comments_number(esc_html__( '0', 'corporate-lawyer-firm' ),esc_html__( '1', 'corporate-lawyer-firm' ),esc_html__( '%', 'corporate-lawyer-firm' ));?><?php esc_html_e( 'comments', 'corporate-lawyer-firm' ); ?>
                </span>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <h3 class="post-title mb-3 mt-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="post-content">
      <?php echo wp_trim_words( get_the_content(), get_theme_mod('corporate_lawyer_firm_post_excerpt_number',15) ); ?>
    </div>
  </div>
</div>