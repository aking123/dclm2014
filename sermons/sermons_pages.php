<?php
session_start();

  if (isset($_SESSION["se_Page"]))
	  unset($_SESSION["se_Page"]);
  $_SESSION["se_Page"] = $_POST;
  $pageParent = dirname($_POST["ptemplate"]);
  $pageTemplate = basename($_POST["ptemplate"]);


  /* NOTE: PageDir is relative to the sermons directory */
  $pageDir = '../' . $pageParent . '/' . $_POST["pageLink"];
  if (! is_dir($pageDir)) {
	//echo "The directory $crusadeFile does not exist";
	////Test with perm 0755
	if (!mkdir($pageDir, 0777, true))
		die('Failed to create folders...');
  }
  $pageFile = $pageDir . '/index.php';
  //if (is_writable($crusadeFile)) {
 	$fp = fopen($pageFile, 'wt+');
 	fwrite($fp, '<?php'.PHP_EOL);
  //} else {
  //	   die('Failed to create index.php inside' .$pageDir. 'folders...');
  //}
	
//  fwrite($fp, 'if (!isset($_SESSION)) { session_start(); }'.PHP_EOL);
  $stringData = '$thisPage = '. $_POST["pageNum"] . ';'.PHP_EOL;
  fwrite($fp, $stringData);
  $stringData = 'include "../'. $pageTemplate. '";'.PHP_EOL;
  fwrite($fp, $stringData);
//  fwrite($fp, 'session_destroy();'.PHP_EOL);
  fwrite($fp, '?>'.PHP_EOL);
  fclose($fp);
  header('Location: ' . $pageDir);
	  
?>
