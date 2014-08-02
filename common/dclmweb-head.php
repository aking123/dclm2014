<?php
	require_once(dirname(__FILE__) ."/siteinfo.php");
?>
  <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php
  echo  '<base href="http://' . $sitename . '/' . $site_basename . '/"><!--[if lte IE 6]></base><![endif]-->';
?>
   <link rel='stylesheet' href='css/base.css' type='text/css' media='all' />
   <link rel='stylesheet' href='css/global.css' type='text/css' media='all' />
   <link rel='stylesheet' id='resurrect-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Oswald:400,700|Open+Sans:300,300italic,400,400italic,700,700italic' type='text/css' media='all' />
   <link rel='stylesheet' id='elusive-webfont-css'  href='css/resurrect/elusive-webfont.css' type='text/css' media='all' />
   <link rel='stylesheet' id='resurrect-style-css'  href='css/resurrect/style.css' type='text/css' media='all' />
   <link rel='stylesheet' id='resurrect-responsive-css'  href='css/resurrect/responsive.css' type='text/css' media='all' />
   <link rel='stylesheet' id='resurrect-color-css'  href='css/resurrect/light-color.css' type='text/css' media='all' />

   <link rel='canonical' href='http://dclm.org/' />



   <meta property="og:site_name" content="Deeper Life Bible Church" />
   <meta property="og:type" content="website" />
   <meta property="og:locale" content="en_US" />
   <meta property="og:title" content="Deeper Life Bible Church" />
   <meta property="og:description" content="&quot;...earnestly contend for the faith which was once delivered unto the saints&quot; Jude 3." />
   <meta property="og:url" content="http://dclm.org" />

<script type='text/javascript'>
/* <![CDATA[ */
var ctfw_ie_unsupported = {"default_version":"7","min_version":"5","max_version":"9","version":"7","message":"You are using an outdated version of Internet Explorer. Please upgrade your browser to use this site.","redirect_url":"http:\/\/browsehappy.com\/"};
/* ]]> */
</script>

<?php

  $dclm_main_common = '"site_path":"\/","home_url":"http:\/\/';
  $dclm_main_common .= $sitename . '\/' . $site_basename ;
  $dclm_main_common .= '","is_ssl":"","current_protocol":"http","mobile_menu_label":"Menu",';

?>
