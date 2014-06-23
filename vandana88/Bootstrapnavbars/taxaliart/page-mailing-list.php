<?php get_header(); ?>
<?php // get_sidebar(); ?>

	<?php // Pages ?>
	<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
			<h2><?php the_title(); ?></h2>

<div id="mainmail" class="clearfix">

<div id="boxleft">
<p>

Enter your name and email address to receive email announcements about upcoming shows, events, etc. </p>
<br>

<p>If you would also like to receive printed invitations to upcoming shows, please enter your mailing address into the fields below.</p>
<br>
<p>If you are already a member of the e-list, please send us an <a href="contact.php">email</a> with your mailing address and we'll add it for you. </p>
</div><!-- boxleft -->
<div id="boxright">

<div class="mformbg">
<form method="post" action="http://www.ctipost.com/form.php?form=26" id="frmSS26" onSubmit="return CheckForm26(this);" class="mform">

	<label class="name">Name:</label>
	<input type="text" name="CustomFields[113]" id="CustomFields_113_26" value="" class="input">

	<label class="name2"> Your email address:<span class="required">*</span>&nbsp;</label>
	<input type="text" name="email" value="" class="input2">

<label class="name3">
Preferred Format:<span class="required">*</span>&nbsp</label><select name="format" class="input"><option value="h">HTML</option><option value="t">Text</option></select>


	<label class="name">Company:</label><input type="text" name="CustomFields[129]" id="CustomFields_129_26" value="" class="input">

	<label class="name">Address:</label><input type="text" name="CustomFields[130]" id="CustomFields_130_26" value="" class="input">

	<label class="name">City:</label><input type="text" name="CustomFields[102]" id="CustomFields_102_26" value="" class="input">

	<label class="name">Province/State:</label><input type="text" name="CustomFields[131]" id="CustomFields_131_26" value="" class="input">

	<label class="name">Postal/Zip Code:</label><input type="text" name="CustomFields[132]" id="CustomFields_132_26" value="" class="input">

	<label class="name">Country:</label><input type="text" name="CustomFields[133]" id="CustomFields_133_26" value="" class="input">

<label class="name2">
Enter the security code shown:<br>(no spaces please)<span class="required">*</span>&nbsp;</label><div class="input2"><script>
				var SIDString = '';

				function getRandomLetter() {
					return String.fromCharCode(getRandom(65, 90));
				}

				function getRandom(lowerBound, upperBound) {
					return Math.floor((upperBound - lowerBound + 1) * Math.random() + lowerBound);
				}

				function SetSID()
				{
					if (SIDString.length > 0)
					{
						return SIDString;
					}

					sidc = 0;

					while (sidc < 32)
					{
						SIDString = SIDString + getRandomLetter();
						sidc++;
					}
					return SIDString;
				}
			</script>
		<script>
					var url = "http://www.ctipost.com/admin/resources/form_designs/captcha/index.php?c=" + getRandom(1,1000)+ "&ss=" + SetSID();
						document.write("<img src='" + url + "' alt='img'/>");
					</script></div><br><input type="text" name="captcha" value="" class="input">
				<input type="submit"  onfocus="this.blur();" value="subscribe" class="sendbut2">
			
</form>
</div><!-- mform -->

<script language="javascript">

			function CheckMultiple26(frm, name) {
				for (var i=0; i < frm.length; i++)
				{
					fldObj = frm.elements[i];
					fldId = fldObj.id;
					if (fldId) {
						var fieldnamecheck=fldObj.id.indexOf(name);
						if (fieldnamecheck != -1) {
							if (fldObj.checked) {
								return true;
							}
						}
					}
				}
				return false;
			}
		function CheckForm26(f) {
			if (f.email.value == "") {
				alert("Please enter your email address.");
				f.email.focus();
				return false;
			}
		
						if (f.format.selectedIndex == -1) {
							alert("Please choose a format to receive your email campaigns in");
							f.format.focus();
							return false;
						}
					
				if (f.captcha.value == "") {
					alert("Please enter the security code shown");
					f.captcha.focus();
					return false;
				}
			
				return true;
			};
		
</script>






</div><!-- boxright -->


</div><!-- content -->

		<?php endwhile; else: ?>
			<p><?php _e('Something appears to have gone horribly wrong. This is embarrassing.'); ?></p>
	<?php endif; ?>
	<?php // Pages ?>

<?php get_footer(); ?>