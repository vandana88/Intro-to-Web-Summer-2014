<?php get_header(); ?>
<?php // get_sidebar(); ?>

	<?php // Pages ?>
	<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
			<!-- <h2><?php the_title(); ?></h2> -->
			<div id="mainC">
				<?php if (is_page('links')) { ?>
				<div id="float">
				<?php } ?>
				<?php the_content(); ?>
				<?php if (is_page('links')) { ?>
				</div>
				<?php } ?>
			</div>
		<?php endwhile; else: ?>
			<p><?php _e('Something appears to have gone horribly wrong. This is embarrassing.'); ?></p>
	<?php endif; ?>
	<?php // Pages ?>

<?php get_footer(); ?>








