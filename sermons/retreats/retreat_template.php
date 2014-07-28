<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include '../../../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->
  <?php
	$pageTitle = str_replace("_", " ", $_SESSION["se_Page"]["pageLink"]);
	echo '<title>'. htmlspecialchars($pageTitle) .' - Deeper Christian Life Ministry</title>';
  ?>

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
  <?php include '../../../common/dclmweb-banner.php'; ?>
	<!-- /banner_inc -->

	</div>

	<div id="resurrect-middle">

		<div id="resurrect-middle-content" class="resurrect-clearfix">

			<header id="resurrect-header" class="resurrect-header-text-dark">
				
	<!-- DCLM.org Logo (common tags) -->
  <?php include '../../../common/dclmweb-logo.php'; ?>
	<!-- /logo_inc -->
										
				
	<!-- DCLM.org Main navigation (menu common tags) -->
  <?php include '../../../common/dclmweb-nav.php'; ?>
	<!-- /nav_inc -->
				

	<div id="resurrect-banner">

		<img width="960" height="250" src="images/bible2-banner-960x250.jpg" class="attachment-resurrect-banner" alt="Bible 2 (Banner)" />
		
			<h1>
				<a href="sermons/" title="Sermon Archive">Sermon Archive - Retreats</a>
			</h1>

			<div class="ctfw-breadcrumbs"><a href="http://dclm.org/">Home</a> > <a href="sermons/">Sermon Archive</a> > <a href="sermons/retreats/">Retreats</a></div>
		
	</div>


			</header>

<div id="resurrect-content" class="resurrect-has-sidebar">

	<div id="resurrect-content-inner">

		
	<!-- DCLM.org Sermons common data -->
<?php
	include dirname(__FILE__) . '/../sermon_query.php';

//  	<!-- Crusade sermons -->
	$categ = "RET";
	$tpl  = 'sermons/retreats/retreat_template.php' ;
        include dirname(__FILE__) . '/../sermon_generic.php';  
	//<!-- /sermon_main -->
?>		
	
	</div>

</div>


	<div id="resurrect-sidebar-right" role="complementary">
		
	    <aside id="ctfw-categories-1" class="resurrect-widget resurrect-sidebar-widget widget_ctfw-categories">
			<h1 class="resurrect-widget-title">Services and Programs</h1>
			<ul>
				<li class="cat-item"><a href="sermons/biblestudies/" title="View Bible Study Teachings">Bible Study</a>	</li>
				<li class="cat-item"><a href="sermons/sundayservices/" title="View Sunday Services' sermons">Sunday Worship Service</a>	</li>
				<li class="cat-item"><a href="sermons/revivalservices/" title="View Thursday Revival Services' sermons">Thursday Revival Service</a></li>
				<li class="cat-item"><a href="sermons/retreats/" title="View all posts filed under Worship">Retreats</a></li>
			</ul>
	    </aside>
	    <aside id="ctfw-categories-3" class="resurrect-widget resurrect-sidebar-widget widget_ctfw-categories">
		<h1 class="resurrect-widget-title">Conferences and Summits</h1>
		<ul>
			<li class="cat-item"><a href="sermons/youths/" title="Youth Summit">Youth Empowerment Summits</a>
</li>
			<li class="cat-item"><a href="sermons/youths/" title="Youth Camps">Success Academy For Youths</a>
</li>
			<li class="cat-item"><a href="sermons/europe/" title="European Program and Events">European Conferences</a>
</li>
			<li class="cat-item"><a href="sermons/americas/" title="European Program and Events">U.S. Conventions</a>
</li>
		</ul>
	    </aside>
	    <aside id="ctfw-categories-3" class="resurrect-widget resurrect-sidebar-widget widget_ctfw-categories">
		<h1 class="resurrect-widget-title">Special Occasions</h1>
		<ul>
			<li class="cat-item"><a href="sermons/youths/" title="Youth Summit">Singles Seminars</a>
</li>
			<li class="cat-item"><a href="sermons/youths/" title="Youth Camps">Marriage and Family Seminars</a>
</li>
			<li class="cat-item"><a href="sermons/europe/" title="European Program and Events">Independence Program</a>
</li>
			<li class="cat-item"><a href="sermons/americas/" title="European Program and Events">Watch Night Services</a>
</li>
		</ul>
	    </aside>


	</div>



		</div>

	</div>

	<!-- Middle End -->

	<!-- Footer Start -->

	<footer id="resurrect-footer">

	<!-- footer_inc (DCLM.org Footer) -->
  <?php include '../../../common/dclmweb-footer.php'; ?>
	<!-- /footer_inc -->

	</footer>

	<!-- Footer End -->

</div>

<!-- Container End -->

</body>
</html>

