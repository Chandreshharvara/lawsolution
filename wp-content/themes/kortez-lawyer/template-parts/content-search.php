<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kortez_lawyer
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="featured-image">
			<?php kortez_lawyer_post_thumbnail(); ?>
		</div><!-- .featured-image -->
	<?php endif; ?>

	<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			kortez_lawyer_posted_on();
			?>
		</div><!-- .entry-meta -->
	<?php endif; ?>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->

	<?php $excerpt = get_the_excerpt();
	if ( !empty($excerpt) ) { ?>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->
	<?php } ?>

	<footer class="entry-footer">
		<?php kortez_lawyer_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->