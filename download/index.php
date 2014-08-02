<?php
if (isset($_REQUEST["fnom"])) {
  // Directory where downloadable files live.
  $downloads = "../resources/";

  // Get the filename from the user
  // Because we have need to escape " ' " in the javascript earlier on,
  // "'" was replaced with "\'", now revert the replacement
  $filename = str_replace("\'", "'", $_GET['fnom']);
  $fullpath = $downloads.$filename;

  // Regular expression matching a safe filename.

  // Filename must contain ONLY letters, digits, and underscores,
  // with a single dot in the middle. NO slashes, NO double dots,
  // NO pipe characters, nothing potentially dangerous.
  $safeFilename = '/[^\w \-\,\.\']/';

  // Now make sure the file actually exists
  if (!file_exists($fullpath)) {
    error("File does not exist");
    exit;
  }
}
else if (isset($_REQUEST["link"])) {
  $safeFilename = '#$@$$!';
  $fullpath=$_REQUEST["link"];
}

  $path_parts = pathinfo($fullpath);

  download();

function download()
{
  global $path_parts, $safeFilename, $fullpath;

  // MAKE SURE THE FILENAME IS SAFE!
  if (preg_match($safeFilename, $path_parts["basename"])) {
    error("Bad filename");
    exit;
  }
  $ext = strtolower($path_parts["extension"]);
  switch ($ext) {
      case "doc":
      header("Content-disposition: attachment; filename=\"".$path_parts["basename"]."\"");
      header("Content-type: application/msword");
      break;
      case "docx":
      header("Content-disposition: attachment; filename=\"".$path_parts["basename"]."\"");
      header("Content-type: application/msword");
      break;
      case "mp3":
      header("Content-disposition: attachment; filename=\"".$path_parts["basename"]."\"");
      header("Content-type: audio/mpeg");
      break;
      case "mp4":
      header("Content-disposition: attachment; filename=\"".$path_parts["basename"]."\"");
      header("Content-type: audio/video");
      break;
      case "wmv":
      header("Content-disposition: attachment; filename=\"".$path_parts["basename"]."\"");
      header("Content-type: audio/video");
      break;
      case "pdf":
      header("Content-disposition: attachment; filename=\"".$path_parts["basename"]."\"");
      header("Content-type: application/pdf");
      break;
      default;
      header("Content-disposition: filename=\"".$path_parts["basename"]."\"");
      header("Content-type: application/octet-stream");
  }
  readfile($fullpath);
  // Exit successfully. We could just let the script exit
  // normally at the bottom of the page, but then blank lines 
  // after the close of the script code would potentially cause 
  // problems after the file download.
  exit(0);
}

function error($message) {
  // You might want to output a more attractive error
  // message page - hey, you're the web designer
?>
<html>
<head>
<title><?php echo $message?></title>
</head>
<body>
<h1><?php echo $message?></h1>
</body>
</html>
<?php
}
?>
