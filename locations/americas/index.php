<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include '../../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->

   <title>North American / Caribbean Locations - Deeper Christian Life Ministry</title>


   <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js'></script>
   <script type='text/javascript' src='js/jquery/jquery.js'></script>
   <script type='text/javascript' src='js/jquery/jquery-migrate.js'></script>
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

		<img width="960" height="250" src="images/banners/americaloc.jpg" class="attachment-resurrect-banner" alt="Americas (Banner)" />
		
			<!-- <h1><a href="locations/" title="Americas">Locations - Morth America/Caribbean</a></h1>-->

			<div class="ctfw-breadcrumbs"><a href="./">Home</a> > <a href="locations/">Locations</a> > <a href="locations/americas/">North America / Caribbean</a></div>
		
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
		<h1 class="resurrect-entry-title">Canada</h1>
		<ul class="resurrect-entry-meta">
			<li class="resurrect-location-address resurrect-content-icon">
				<span class="el-icon-map-marker"></span>
				13430 33 Street,<br/>
				Edmonton, Alberta. T5A 5C1. Canada
			</li>
			
			<li class="resurrect-location-phone resurrect-content-icon">
				<span class="el-icon-phone-alt"></span>
					Toll free: 1 (888) 710-1517
			</li>
			
			<li class="resurrect-location-webaddress resurrect-content-icon">
				<span class="el-icon-website-alt"></span>
				<a href="http://www.deeperlife.ca">www.deeperlife.ca (Follow link for detailed location information)</a> 
			</li>

			<li class="resurrect-person-email resurrect-content-icon">
				<span class="el-icon-envelope"></span>
				<a href="mailto:info@deeperlife.ca">info@deeperlife.ca</a>
			</li>

			<li class="resurrect-person-position resurrect-content-icon">
				<span class="el-icon-adult"></span>
				National Overseer: Pastor Jacob Oresile
			</li>
		</ul>
	</div>
</header>

</article>
	
</section>
		</div>		

	</article>
</div>
<!-- End Canada Location main -->

<!-- Start US Location main -->
<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">
	<article class="page type-page hentry resurrect-entry-full">
		<div class="resurrect-entry-content resurrect-clearfix">

			<section id="resurrect-loop-after-content" class="resurrect-loop-after-content">
		
	<article class="ctfw-no-image">

		<div class="resurrect-entry-title-meta">
			<h1 class="resurrect-entry-title">United States</h1>
		</div>
	</article>

<?php 
	include 'us_regions_list.php';

 for ($u_ct=1; $u_ct < count($us_regions); $u_ct++) {

	echo'	<article class="resurrect-entry-short resurrect-location-short ctfw-no-image">';
	
	echo'	<header class="resurrect-entry-header resurrect-clearfix">';

	echo'	<div class="resurrect-entry-title-meta">';
	echo'		<h3 class="resurrect-entry-title">' . $us_regions[$u_ct]["Name"] . ':</h3>';
	echo'		<p>' .  $us_regions[$u_ct]["LocalChurches"] . '</p>';
	echo'		<ul class="resurrect-entry-meta">';
	if ($us_regions[$u_ct]["Address1"] != ''){
	echo'			<li class="resurrect-location-address resurrect-content-icon">';
	echo'				<span class="el-icon-map-marker"></span>';
	echo' ';
	echo'				' . $us_regions[$u_ct]["Address1"] . '<br/>';
	echo'				' . $us_regions[$u_ct]["Address2"] ;
	echo'			</li>';
	echo'			';
	}
	if ($us_regions[$u_ct]["Phone"] != ''){
	echo'			<li class="resurrect-location-phone resurrect-content-icon">';
	echo'				<span class="el-icon-phone-alt"></span>';
	echo'					' . $us_regions[$u_ct]["Phone"] ;
	echo'			</li>';
	echo'			';
	}
	if ($us_regions[$u_ct]["WebAddress"] != ''){
	echo'			<li class="resurrect-location-webaddress resurrect-content-icon">';
	echo'				<span class="el-icon-website-alt"></span>';
	echo'				<a href="http://' . $us_regions[$u_ct]["WebAddress"] . '">' . $us_regions[$u_ct]["WebAddress"] . ' (Follow link for detailed location information)</a>';
	echo'			</li>';
	echo'';
	}
	if ($us_regions[$u_ct]["Email"] != ''){
	echo'			<li class="resurrect-person-email resurrect-content-icon">';
	echo'				<span class="el-icon-envelope"></span>';
	echo'				<a href="mailto:' . $us_regions[$u_ct]["Email"] . '">' . $us_regions[$u_ct]["Email"] . '</a>';
	echo'			</li>';
	echo'';
	}
	if ($us_regions[$u_ct]["Pastor"] != ''){
	echo'			<li class="resurrect-person-position resurrect-content-icon">';
	echo'				<span class="el-icon-adult"></span>';
	echo'				Regional Overseer: Pastor ' . $us_regions[$u_ct]["Pastor"]  ;
	echo'			</li>';
	}
	echo'		</ul>';
	echo'	</div>';
	echo'</header>';
	echo'';
	echo'</article>';
	echo'';
}
?>

</section>
		</div>		

	</article>
</div>
<!-- End US Location main -->


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

