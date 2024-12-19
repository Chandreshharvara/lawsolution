<?php get_header(); ?>

<div id="content">
	<div class="container">
		<div class="py-5">
			<h1><?php esc_html_e('404', 'corporate-lawyer-firm'); ?></h1>
			<h2><?php esc_html_e('Not found', 'corporate-lawyer-firm'); ?></h2>
			<p><?php esc_html_e('Sorry, no posts matched your criteria.', 'corporate-lawyer-firm'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>