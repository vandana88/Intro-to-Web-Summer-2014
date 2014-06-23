<?php get_header(); ?>
<?php // get_sidebar(); ?>

	<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
			<?php $data = get_post_meta($post -> ID, 'taxali', true); ?>

			<a href="<?php bloginfo('url'); ?>/<?php echo $data[ 'page-slug' ]; ?>/" style="display: block; position: absolute; width: 1043px; height: 413px; top: 50%; left: 50%; margin: -206.5px 0 0 -521.5px;"><?php echo wp_get_attachment_image($data[ 'image-id' ], 'full'); ?></a>

		<?php endwhile; else: ?>
			
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

	<?php endif; ?>

<?php get_footer(); ?>