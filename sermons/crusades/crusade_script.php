<?php
session_start();

  if (isset($_SESSION['thisCrusade']))
	  unset($_SESSION['thisCrusade']);
//  $_SESSION['thisCrusade'] = $_POST;
  /* We try to reverse the string replacement operation done in 
   * crusades/index.php's json_encode object here. 
   * TODO: In future when we get these values from a DB, this operations (i.e.
   *  the string replacements and its reversal) may become redundant and can
   *  then be removed */
  foreach ( $_POST as $key => $value ) {
      $value = str_replace("$$", "'", $value);
      $_SESSION['thisCrusade'][$key] = $value ;
  }

  $crusadeDir = str_replace("'", "", htmlspecialchars($_SESSION['thisCrusade']["Title"]));
  $crusadeDir = str_replace(" ", "-", $crusadeDir);
  if (is_dir($crusadeDir)) {
	//echo "The directory $crusadeDir exists";
	header('Location: ../crusades/'. $crusadeDir);
  } else {
	  //echo "The file $crusadeFile does not exist";
	  ////Test with perm 0755
	if (!mkdir($crusadeDir, 0777, true))
		die('Failed to create folders...');
	$crusadeFile = $crusadeDir . '/index.php';
//	if (is_writable($crusadeFile)) {
	   $fp = fopen($crusadeFile, 'wt');
	   fwrite($fp, '<?php'.PHP_EOL);
//	} else {
//	   die('Failed to create index.php inside' .$crusadeFile. 'folders...');

//	}
	
  }

  fwrite($fp, 'if (!isset($_SESSION)) { session_start(); }'.PHP_EOL);
//  $stringData = 'print_r($_SESSION["thisCrusade"]);'.PHP_EOL;
  $stringData = 'include "../crusade_template.php";'.PHP_EOL;
  fwrite($fp, $stringData);
//  fwrite($fp, 'session_destroy();'.PHP_EOL);
  fwrite($fp, '?>'.PHP_EOL);
  fclose($fp);
  header('Location: ../crusades/' . $crusadeDir);
	  
?>
