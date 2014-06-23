<?php get_header(); ?>
<?php // get_sidebar(); ?>
	
	<?php // Press Release Home ?>
	<!-- <h2>Press Releases</h2> -->
	<div id="mainC">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : ?>
		  <?php the_post(); ?>
			<?php $data = get_post_meta($post -> ID, 'taxali', true); ?>
				<div class="post">
					<a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title(); ?>">
						<?php if ( $data['press-cover-image'] != '' ) { ?>
							<img src="<?php echo $data[ 'press-cover-image' ]; ?>" alt="<?php the_title(); ?> Lead Image" class="lead-image square" width="139px" />
						<?php } else { ?>
							<img src="http://placekitten.com/g/139/159" alt="<?php the_title(); ?> Lead Image" class="lead-image square" width="139px" height="159px" />
						<?php } ?>
						<p><strong><?php the_title(); ?></strong></p>
					</a>
				</div>
			<?php endwhile; else: ?>	
				<p><?php _e('New press coming soon.'); ?></p>
		<?php endif; ?>
	</div>
	<?php // Press Release Home ?>

<?php get_footer(); ?>








