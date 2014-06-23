<?php get_header(); ?>
<?php // get_sidebar(); ?>

	<?php if (is_page() && '27' == $post->post_parent) { ?>

		<?php // Archived Show Pages ?>
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php $data = get_post_meta($post -> ID, 'taxali', true); ?>
				<!-- <h2>Show Archive | <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br /><?php echo $data[ 'details' ]; ?></h2> -->
				<div id="mainC" class="clearfix">
					<div id="galboxleft" class="clearfix">
						<?php

						$args = array(
							'src'	=> $src,
							'class'	=> "attachment-$size",
							'alt'   => trim(strip_tags( get_post_meta($attachment, '_wp_attachment_image_alt', true) )),
							'title' => trim(strip_tags( $attachment->post_title )),
							'order' => 'ASC',
							'orderby' => 'menu_order',
							'post_type' => 'attachment',
							'numberposts' => -1,
							'post_status' => null,
							'post_parent' => $post->ID
						);

						$attachments = get_posts( $args );
						if ( $attachments ) {
							foreach ( $attachments as $attachment ) {
								$attachment_id = $attachment->ID;
								$image_attributes = wp_get_attachment_image_src($attachment_id, 'large');
						  	echo '<div class="box" style="float: left;">';
						  	echo '<a rel="group" class="fancybox-image" href="';
						  	echo $image_attributes[0];
						  	echo '" title="';
						  	echo $attachment->post_title;
						  	echo '">';
								echo wp_get_attachment_image( $attachment->ID, 'event-thumb' );
						    echo '</a></div>';
						  }
						}

						?>
					</div>

					<div id="galboxright">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; else: ?>
				<p><?php _e('Something appears to have gone horribly wrong. This is embarrassing.'); ?></p>
		<?php endif; ?>
		<?php // Archived Show Pages ?>
		
	<?php } else { ?>

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
		
	<?php } ?>

<?php get_footer(); ?>








