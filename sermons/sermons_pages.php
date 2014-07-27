<?php
session_start();

  if (isset($_SESSION["se_Page"]))
	  unset($_SESSION["se_Page"]);
  $_SESSION["se_Page"] = $_POST;
//  header('Location: ../test.php');


  /* NOTE: PageDir is relative to the sermons directory */
  $pageDir = '../' . $_SESSION["se_Page"]["pageParent"] . '/' . $_SESSION["se_Page"]["pageNum"];
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
  $stringData = '$thisPage = '. $_SESSION["se_Page"]["pageNum"] . ';'.PHP_EOL;
  fwrite($fp, $stringData);
//  $stringData = 'include dirname(__FILE__)."../../sermon_query.php";'.PHP_EOL;
//  fwrite($fp, $stringData);
  $stringData = 'include "../bst_template.php";'.PHP_EOL;
  fwrite($fp, $stringData);
//  fwrite($fp, 'session_destroy();'.PHP_EOL);
  fwrite($fp, '?>'.PHP_EOL);
  fclose($fp);
  header('Location: ' . $pageDir);
	  
?>
