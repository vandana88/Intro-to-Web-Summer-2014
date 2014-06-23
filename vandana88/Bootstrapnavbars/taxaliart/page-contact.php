<?php get_header(); ?>
<?php // get_sidebar(); ?>

	<?php // Pages ?>
	<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
			<!-- <h2><?php the_title(); ?></h2> -->




			
<div id="mainmail" class="clearfix">

<div id="boxleft">

gary [@] garytaxali.com</p>

</div><!-- boxleft -->
<div id="boxright">

<div class="conformbg">
<form action="/formtoemailpro.php" method="post" class="conform">
<fieldset class="formbg"><legend>Contact Gary Taxali</legend>
<label class="name">Name <span class="required">*</span></label> <input type="text"  name="name" class="input">
<label class="name">Email <span class="required">*</span></label> <input type="text"  name="email" class="input">
<label class="name2">Inquiries <span class="required">*</span></label> 

<textarea name="comments" cols="" rows="" class="txtbox"></textarea>
<input type="submit" onfocus="this.blur();" value="submit" class="sendbut">
</fieldset>
</form>
</div><!-- conformbg -->
</div><!-- boxright -->


</div><!-- content -->





		<?php endwhile; else: ?>
			<p><?php _e('Something appears to have gone horribly wrong. This is embarrassing.'); ?></p>
	<?php endif; ?>
	<?php // Pages ?>

<?php get_footer(); ?>