			<?php if (!is_page('home')) { ?>
			<?php // Show Nothing ?>

				<div id="footer">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget')) : endif; ?>
					<p class="smaller">All of the images on this site are protected by International Copyright Laws and may not be used without permission from Gary Taxali.</p>
					<p class="smaller">All rights reserved.</p>
				</div>
				
			<?php } else { ?>

			<div id="footer">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget')) : endif; ?>
				<p class="smaller">All of the images on this site are protected by International Copyright Laws and may not be used without permission from Gary Taxali.</p>
				<p class="smaller">All rights reserved.</p>
			</div>

		<?php } ?>

		<script>
		var b = document.documentElement;
		b.setAttribute('data-useragent',  navigator.userAgent);
		b.setAttribute('data-platform', navigator.platform );
		</script>	
		<?php wp_footer(); ?>
	</body>
</html>