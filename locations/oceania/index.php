<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include '../../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->

   <title>Australia / Oceania Locations - Deeper Christian Life Ministry</title>


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

</head>

<body class="page custom-background">

<div id="resurrect-container">

	<div id="resurrect-top">

	<!-- DCLM.org Banner (common tags) -->
  <?php include '../../common/dclmweb-banner.php'; ?>
	<!-- /banner_inc -->

	</div>

	<div id="resurrect-middle">

		<div id="resurrect-middle-content" class="resurrect-clearfix">

			<header id="resurrect-header" class="resurrect-header-text-dark">
				
	<!-- DCLM.org Logo (common tags) -->
  <?php include '../../common/dclmweb-logo.php'; ?>
	<!-- /logo_inc -->
										
				
	<!-- DCLM.org Main navigation (menu common tags) -->
  <?php include '../../common/dclmweb-nav.php'; ?>
	<!-- /nav_inc -->
				

	<div id="resurrect-banner">

		<img width="960" height="250" src="images/banners/australialoc1.jpg" class="attachment-resurrect-banner" alt="Australia (Banner)" />
		
			<!-- <h1><a href="locations/" title="Australia">Locations - Africa</a></h1> -->

			<div class="ctfw-breadcrumbs"><a href="./">Home</a> > <a href="locations/">Locations</a> > <a href="locations/oceania/">Australia / Oceania</a></div>
		
	</div>


			</header>

<div id="resurrect-content" class="resurrect-has-sidebar">

	<div id="resurrect-content-inner">

<!-- Start Canada Locations main -->
<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">
	<article class="page type-page hentry resurrect-entry-full">
		<div class="resurrect-entry-content resurrect-clearfix">

			<section id="resurrect-loop-after-content" class="resurrect-loop-after-content">
		
	<article class="ctc_location type-ctc_location hentry resurrect-entry-short resurrect-location-short ctfw-no-image">

		
<header class="resurrect-entry-header resurrect-clearfix">

	<div class="resurrect-entry-title-meta">
		<h1 class="resurrect-entry-title">Australia</h1>
		<ul class="resurrect-entry-meta">
			
			<li class="resurrect-location-phone resurrect-content-icon">
				<span class="el-icon-phone-alt"></span>
					61 3 5443 8707 , 61 450191555
			</li>
			

			<li class="resurrect-person-position resurrect-content-icon">
				<span class="el-icon-adult"></span>
				Contact: Bro Segun Adelana
			</li>
		</ul>
	</div>
</header>
</article>

<?php 
	include 'aus_regions_list.php';

 for ($u_ct=1; $u_ct < count($aus_regions); $u_ct++) {

	echo'	<article class="resurrect-entry-short resurrect-location-short ctfw-no-image">';
	
//	echo'	<header class="resurrect-entry-header resurrect-clearfix">';
	echo'	<div class="resurrect-entry-title-meta">';
	echo'		<h3 class="resurrect-entry-title">' . $aus_regions[$u_ct]["Name"] . ':</h3>';
	if ($aus_regions[$u_ct]["LocalChurches"] != ''){
	echo'		<p>' .  $aus_regions[$u_ct]["LocalChurches"] . '</p>';
	}
	echo'		<ul class="resurrect-entry-meta">';
	if ($aus_regions[$u_ct]["Address1"] != ''){
	echo'			<li class="resurrect-location-address resurrect-content-icon">';
	echo'				<span class="el-icon-map-marker"></span>';
	echo' ';
	echo'				' . $aus_regions[$u_ct]["Address1"] . '<br/>';
		if ($aus_regions[$u_ct]["Address2"] != '') echo'				' . $aus_regions[$u_ct]["Address2"] . '<br/>';
		if ($aus_regions[$u_ct]["Address3"] != '') echo'				' . $aus_regions[$u_ct]["Address3"] ;
	echo'			</li>';
	}
	if ($aus_regions[$u_ct]["Phone"] != ''){
	echo'			<li class="resurrect-location-phone resurrect-content-icon">';
	echo'				<span class="el-icon-phone-alt"></span>';
	echo'					' . $aus_regions[$u_ct]["Phone"] ;
	echo'			</li>';
	}
	if ($aus_regions[$u_ct]["WebAddress"] != ''){
	echo'			<li class="resurrect-location-webaddress resurrect-content-icon">';
	echo'				<span class="el-icon-website-alt"></span>';
	echo'				<a href="http://' . $aus_regions[$u_ct]["WebAddress"] . '">' . $aus_regions[$u_ct]["WebAddress"] . ' (Follow link for detailed location information)</a>';
	echo'			</li>';
	}
	if ($aus_regions[$u_ct]["Email"] != ''){
	echo'			<li class="resurrect-person-email resurrect-content-icon">';
	echo'				<span class="el-icon-envelope"></span>';
	echo'				<a href="mailto:' . $aus_regions[$u_ct]["Email"] . '">' . $aus_regions[$u_ct]["Email"] . '</a>';
	echo'			</li>';
	}
	if ($aus_regions[$u_ct]["Pastor"] != ''){
	echo'			<li class="resurrect-person-position resurrect-content-icon">';
	echo'				<span class="el-icon-adult"></span>';
	echo'				Regional Overseer: Pastor ' . $aus_regions[$u_ct]["Pastor"]  ;
	echo'			</li>';
	}
	echo'		</ul>';
	echo'	</div>';
//	echo'</header>';
	echo'';
	echo'</article>';
	echo'';
}
?>
	
</section>
		</div>		

	</article>
</div>
<!-- End Australia Location main -->
		
	</div>

</div>


<div id="resurrect-sidebar-right" role="complementary">
	
	<aside class="resurrect-widget resurrect-sidebar-widget widget_ctfw-highlight">
		<div class="resurrect-caption-image resurrect-highlight">

			<img width="600" height="410" src="http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/man5-highlight-600x410.jpg" class="resurrect-image" alt="Man 5 (Highlight)" />						<div class="resurrect-caption-image-caption">
			    <div class="resurrect-caption-image-title">
				<h1 class="resurrect-widget-title"><a href="contact/">Contact Us</a></h1>
			    </div>
			    <div class="resurrect-caption-image-description">
				<a href="contact/">Have questions?</a>	
			    </div>
			</div>
	
		</div>
	</aside>

	<aside class="resurrect-widget resurrect-sidebar-widget widget_ctfw-sermons">
	<!-- DCLM.org Recent_sermons -->
<?php
		include '../../sermons/se_data.php';
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
  <?php include '../../common/dclmweb-footer.php'; ?>
	<!-- /footer_inc -->

	</footer>

	<!-- Footer End -->

</div>

<!-- Container End -->


</body>
</html>

