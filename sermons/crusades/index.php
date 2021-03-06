<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include '../../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->

   <title>Crusades Archive - Deeper Christian Life Ministry</title>


   <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js'></script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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
				

			</header>

<div id="resurrect-content" class="resurrect-no-sidebar">

	<div id="resurrect-content-inner">

		<div class="ctfw-breadcrumbs"><a href="./">Home</a> > <a href="sermons/">Sermon Archive</a> > <a href="sermons/crusades/">Crusades</a></div>

        	<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">
			<article class="page type-page has-post-thumbnail hentry resurrect-entry-full ctfw-has-image">
				<h1 class="resurrect-entry-title resurrect-main-title">Crusade Sermons and Testimonies</h1>
		
				<div class="resurrect-entry-content resurrect-clearfix">
					<div class="resurrect-galleries-list gallery gallery-columns-3">

	<!-- DCLM.org Crusade Sermons common data -->
<?php 
	include 'crusade_list.php';
 $tpl = "../events_template.php";
 for ($ct=1; $ct < count($crusades); $ct++) {
	 echo'		<div class="resurrect-galleries-item gallery-item resurrect-caption-image">';
	$linkname = str_replace("'", "", $crusades[$ct]["Title"]);
	$linkname = str_replace(" ", "_", $linkname);
	$page_link = "sermons/crusades/" . $linkname ;
	$json_enc = array("pageNum" => "1", "pageLink" => $page_link, "ptemplate" => $tpl);
	echo'			<a href="' . $page_link .'" onclick=\'loadSermon(' . json_encode($json_enc) . ')\' title="' . htmlspecialchars($crusades[$ct]["Title"]) . '">';
	echo'			<img src="images/crusades/' . $crusades[$ct]["Flyer"] . '" class="resurrect-image" alt="' . htmlspecialchars($crusades[$ct]["Title"]) . '" />';
	echo'			<div class="resurrect-caption-image-caption">';
	echo'					<div class="resurrect-caption-image-title">' . htmlspecialchars($crusades[$ct]["Title"]) . '</div>';
	echo'					<div class="resurrect-caption-image-description">' . $crusades[$ct]["Date"] . '</div>';
	echo'			</div>';
	echo'			</a>';
	echo'		</div>';
	echo'	'; 
 }
?>
				
					</div>
				</div>
			</article>

		</div>
	</div>
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

