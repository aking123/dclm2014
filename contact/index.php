<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include '../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->

   <title>Contact - Deeper Christian Life Ministry</title>


   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js'></script>

<script type='text/javascript' src='js/resurrect/framework/ie-unsupported.js'></script>

	<!-- Nav_menu_scripts -->
   <script type='text/javascript' src='js/resurrect/framework/jquery.fitvids.js'></script>
   <script type='text/javascript' src='js/resurrect/framework/responsive-embeds.js'></script>
   <script type='text/javascript' src='js/resurrect/js/selectnav.min.js'></script>
   <script type='text/javascript' src='js/resurrect/js/superfish.min.js'></script>
   <script type='text/javascript' src='js/resurrect/js/supersubs.js'></script>
	<!-- /Nav_menu_scripts -->

   <script type='text/javascript' src='js/resurrect/js/jquery_cookie.min.js'></script>

<script type='text/javascript'>
/* <![CDATA[ */
var dclm_main = {<?php echo $dclm_main_common ?>"slider_slideshow":"0","comment_name_required":"1","comment_email_required":"1","comment_name_error_required":"Required","comment_email_error_required":"Required","comment_email_error_invalid":"Invalid Email","comment_url_error_invalid":"Invalid URL","comment_message_error_required":"Comment Required"};
/* ]]> */
</script>

<script type='text/javascript' src='js/resurrect/js/main.js'></script>

<script type="text/javascript">
if ( jQuery.cookie( 'resurrect_responsive_off' ) ) {

	// Add helper class without delay
	jQuery( 'html' ).addClass( 'resurrect-responsive-off' );

	// Disable responsive.css
	jQuery( '#resurrect-responsive-css' ).remove();

} else {

	// Add helper class without delay
	jQuery( 'html' ).addClass( 'resurrect-responsive-on' );

	// Add viewport meta to head -- IMMEDIATELY, not on ready()
	jQuery( 'head' ).append(' <meta name="viewport" content="width=device-width, initial-scale=1">' );

}
</script>
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

</head>

<body class="page custom-background">

<div id="resurrect-container">

	<div id="resurrect-top">

	<!-- DCLM.org Banner (common tags) -->
  <?php include '../common/dclmweb-banner.php'; ?>
	<!-- /banner_inc -->

	</div>

	<div id="resurrect-middle">

		<div id="resurrect-middle-content" class="resurrect-clearfix">

			<header id="resurrect-header" class="resurrect-header-text-dark">
				
	<!-- DCLM.org Logo (common tags) -->
  <?php include '../common/dclmweb-logo.php'; ?>
	<!-- /logo_inc -->
										
				
	<!-- DCLM.org Main navigation (menu common tags) -->
  <?php include '../common/dclmweb-nav.php'; ?>
	<!-- /nav_inc -->
				

<!--
	<div id="resurrect-banner">

		<img width="960" height="250" src="images/bible2-banner-960x250.jpg" class="attachment-resurrect-banner" alt="Bible 2 (Banner)" />
		
			<h1>
				<a href="contact/" title="Contact Us">Contact Us</a>
			</h1>

			<div class="ctfw-breadcrumbs"><a href="/">Home</a> > <a href="contact/">Contact</a></div>
		
	</div>
-->

			</header>

<div id="resurrect-content" class="resurrect-has-sidebar">

	<div id="resurrect-content-inner">
<!-- Start_Contact --> 
			<div class="ctfw-breadcrumbs"><a href="/">Home</a> > <a href="contact/">Contact</a></div>

	<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">

			
	<article class="page type-page hentry resurrect-entry-full ctfw-no-image">

					<h1 class="resurrect-entry-title resurrect-main-title">Contact Us</h1>
		
		<div class="resurrect-entry-content resurrect-clearfix">

			<p>You can use a form builder plugin like Contact Form 7 to add a contact form anywhere.</p>
<div class="wpcf7" id="wpcf7-f937-p27-o1">
<div class="screen-reader-response"></div>
<form action="/resurrect/contact/#wpcf7-f937-p27-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
</div>
<h4>Your Name</h4>
<p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span></p>
<h4>Your Email</h4>
<p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span></p>
<h4>Your Subject</h4>
<p><span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span></p>
<h4>Message</h4>
<p><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="80" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea></span></p>
<p>
<input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>

			
		</div>

		

	</article>


	

		</div>

		    		
<!-- End_contact -->		
	</div>

</div>


	<div id="resurrect-sidebar-right" role="complementary">
		
	<aside class="resurrect-widget resurrect-sidebar-widget widget_ctfw-sermons">
	<!-- DCLM.org Recent_sermons -->
<?php
	include '../sermons/se_data.php';

	echo $rct_sermons ;
?>
	<!-- /DCLM.org Recent_sermons -->

	</aside>
		
	</div>



		</div>

	</div>

	<!-- Middle End -->

	<!-- Footer Start -->

	<footer id="resurrect-footer">

	<!-- footer_inc (DCLM.org Footer) -->
  <?php include '../common/dclmweb-footer.php'; ?>
	<!-- /footer_inc -->

	</footer>

	<!-- Footer End -->

</div>

<!-- Container End -->


<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/demos.churchthemes.com\/resurrect\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ...","cached":"1"};
/* ]]> */
</script>


</body>
</html>

