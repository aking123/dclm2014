<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include '../../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->

   <title>Sermon Player - Deeper Christian Life Ministry</title>


   <link rel="stylesheet" href="css/mediaelementplayer.min.css" />

   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js'></script>
   <script type='text/javascript' src="js/mediaelement-and-player.min.js"></script>
   <script type='text/javascript' src='js/jquery.smooth-scroll.min.js'></script>

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

		<img width="960" height="250" src="images/bible2-banner-960x250.jpg" class="attachment-resurrect-banner" alt="Bible 2 (Banner)" />
		
			<h1>
				<a href="sermons/" title="Sermon Archive">Sermons - Sermon Player</a>
			</h1>

			<div class="ctfw-breadcrumbs"><a href="http://dclm.org/">Home</a> > <a href="sermons/">Sermon Archive</a> > <a href="sermons/biblestudies/">Bible Studies</a></div>
		
	</div>

			</header>

<div id="resurrect-content" class="resurrect-has-sidebar">

	<div id="resurrect-content-inner">

<?php
if (isset($_SESSION["se_Page"])) {
   $sermon = $_SESSION["se_Page"] ;
}
else {
   $sermon = array("Sdate" => "20140721",
                 "Title" => "Special Study: Leaving All Our Worries in God's Hands",
                 "Categ" => "BST",
                 "Descr" => "Weekly Bible Study",
                 "High" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140721Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140721Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140721Eng.mp3",
                 "Outline" => "http://s3.amazonaws.com/MBSoutlines/2014/MBS14072014.doc",
              );
}
    $Thumb = "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg";

    echo '	<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">';
    echo '		<article class="page type-page has-post-thumbnail hentry resurrect-entry-full ctfw-has-image">';
    echo '		<div class="resurrect-entry-content resurrect-clearfix">
';
    echo '		<section id="resurrect-loop-after-content" class="resurrect-loop-after-content">';
	
    echo '			<article class="ctc_sermon type-ctc_sermon hentry resurrect-entry-short resurrect-sermon-short">';
		
    echo '			<header class="resurrect-entry-header resurrect-clearfix">';
    echo '			<div class="resurrect-entry-image">';
    echo '			<a href="sermons/" title="' . htmlspecialchars($sermon["Descr"]) .'"><img width="400" height="400" src="' . $Thumb . '" class="resurrect-image" alt="" /></a>		</div>';
	
    echo '		<div class="resurrect-entry-title-meta">';

    echo '				<h1 class="resurrect-entry-title">';
    echo '				<a href="#">' . htmlspecialchars($sermon["Title"]) . '</a>';
    echo '				</h1>';
		
    echo '		<ul class="resurrect-entry-meta">';

    echo '			<li class="resurrect-entry-date resurrect-content-icon"> ';
    echo '				<span class="el-icon-folder-open"></span>';
    echo '				<a class="dclm-sermon-category" href="sermons/biblestudies/" rel="tag">' . htmlspecialchars($sermon["Descr"]) . '</a>';
    echo '			</li>';

    echo '			<li class="resurrect-entry-date resurrect-content-icon"> ';
    echo '				<span class="el-icon-calendar"></span>';
    echo '				<time datetime="' . $sermon["Sdate"] . '">' . $sermon["Sdate"] . '</time>';
    echo '			</li> ';
    echo '		</ul> ';

    echo '	</div>';

    echo '</header>';

    // Thee actual player window
    echo '<div id="resurrect-sermon-full-media">';
    echo '	<div id="resurrect-sermon-full-player">';
    echo '		<div id="resurrect-sermon-full-video-player">';
    if ($_REQUEST["player"] == "audio") {
	    echo '			<audio src="'. $sermon["Audio"] . '" type="audio/mp3" controls="controls" preload="none"></audio>';
    }
    else {
	    echo '			<video src="'. $sermon["Low"] . '" width="600" height="360" type="video/mp4" controls="controls" preload="none"></video>';
    }
    echo '		</div>';
    echo '	</div>';


    echo '		<ul id="resurrect-sermon-full-buttons" class="resurrect-list-buttons"> ';
    if (($sermon["High"] != "") && ($sermon["Low"] != "")) {
	echo '			<li> ';
	echo '			<a href="download/?link='  . $sermon["High"] . '" title="Download High Quality Sermon"><span class="resurrect-button-icon el-icon-download"></span>Download (High Quality)</a>';
	echo '	</li> ';
	echo '			<li> ';
	echo '			<a href="download/?link='  . $sermon["Low"] . '" title="Download Low Quality Sermon"><span class="resurrect-button-icon el-icon-download"></span>Download (Low Quality)</a>';
	echo '	</li> ';
    }	
    else if ($sermon["High"] != "") {
	echo '			<li> ';
	echo '			<a href="download/?link='  . $sermon["High"] . '" title="Download Sermon"><span class="resurrect-button-icon el-icon-download"></span>Download</a>';
	echo '	</li> ';
    }
    else if ($sermon["Low"] != "") {
	echo '			<li> ';
	echo '			<a href="download/?link='  . $sermon["Low"] . '" title="Download Sermon"><span class="resurrect-button-icon el-icon-download"></span>Download</a>';
	echo '	</li> ';
    }
    if ($sermon["Outline"] != "") {
        echo '		<li>';
        echo '			<a href="download/?link='  . $sermon["Outline"] . '" title="Read Sermon Outline"><span class="resurrect-button-icon el-icon-book"></span>	Outline	</a>';
	echo '		</li> ';
    }
    echo '	</ul> ';
    echo '</div> ';
 
    echo '	</article> ';
       echo '</section>'; 
       echo '		</div> ';
       echo '	</article> ';
       echo '		</div>';


?>
		
	</div>

</div>


	<div id="resurrect-sidebar-right" role="complementary">
		
  <?php include '../sidebar-common.php'; ?>

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


<script>
       $('audio,video').mediaelementplayer({
         // width of audio player
        audioWidth: 600,
        // height of audio player
        audioHeight: 40,
    	// the order of controls you want on the control bar (and other plugins below)
	features: ['playpause','progress','current','duration','volume','fullscreen'],
	// Hide controls when playing and mouse is not over the video
	alwaysShowControls: false,
       );
</script>

<script>
jQuery(document).ready(function($) {
	$.smoothScroll({
		scrollTarget: '#resurrect-content-inner',
		offset: -60,
		easing: 'swing',
		speed: 800
	});
});
</script>

</body>
</html>

