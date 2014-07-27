<html>
<head></head>
<body>
  <h3>
<?php 
 include 'dclm_db.php';
 $db = new database(); // Initiate a new database connection
 $link = $db->get_link();

 function insertArr($tableName, $insData)
 {
	//$db = new database();
	$columns = implode(", ",array_keys($insData));
	$escaped_values = array_map('mysql_real_escape_string', array_values($insData));
	foreach ($escaped_values as $idx=>$data) $escaped_values[$idx] = "'".$data."'";
	$values  = implode(", ", $escaped_values);
	return $query = "INSERT INTO $tableName ($columns) VALUES ($values)";
 }

//$link = connect_to_db();

$whatToDo = 'insert_sermons'; 

if ($whatToDo == 'sermons') {
   $my_db = "dclm_sermon2";
   $db_selected = mysqli_select_db($link, $my_db);
   if (!$db_selected) {
     // If we couldn't, then it either doesn't exist, or we can't see it.
      $sql = 'CREATE DATABASE '.$my_db;
      if (mysqli_query($link, $sql)) {
	  echo "Database my_db created successfully\n";
	  mysqli_select_db($link, $my_db);
      } else {
          echo 'Error creating database: ' . mysqli_error($link) . "\n";
      }
   }
	
// -----------------Create Sermon categories ---------------------------------
  $dbtable = 'category';

  $sql = 'CREATE TABLE '.$dbtable.' (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	  category_id INT(2) DEFAULT NULL, activity varchar(80) DEFAULT NULL,
	  act_sht varchar(20) DEFAULT NULL) DEFAULT CHARACTER SET utf8';
  // ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
  if (!mysqli_query($link, $sql))
  {
    echo 'Error creating '.$dbtable. ' table: ' . mysqli_error($link) .'<br/>';
    exit();
  }
  echo $dbtable.' table successfully created. <br>';

// -----------------Create Sermon Metadata table -----------------------------
  $dbtable = 'sermon_data';

  $sql = 'CREATE TABLE '.$dbtable.' (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
             categ_id int DEFAULT NULL, Sdate date DEFAULT NULL,
             Title varchar(80) DEFAULT NULL, Categ varchar(10) DEFAULT NULL,
             Descr varchar(100) DEFAULT NULL, High varchar(200) DEFAULT NULL,
             Low varchar(200) DEFAULT NULL, Audio varchar(200) DEFAULT NULL,
	     Outline varchar(200) DEFAULT NULL, status_ad int(2) DEFAULT "1")
	     DEFAULT CHARACTER SET utf8';
  if (!mysqli_query($link, $sql))
  {
    echo 'Error creating '.$dbtable. ' table: ' . mysqli_error($link) .'<br>';
    exit();
  }
  echo $dbtable.' table successfully created. <br>';

// -----------------Create tag table ------------------------------------
  $dbtable = 'tag';

  $sql = 'CREATE TABLE '.$dbtable.' (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	  tag_name varchar(80) DEFAULT NULL, nick varchar(30) DEFAULT NULL)
	  DEFAULT CHARACTER SET utf8';
  if (!mysqli_query($link, $sql))
  {
    echo 'Error creating '.$dbtable. ' table: ' . mysqli_error($link) .'<br>';
    exit();
  }
  echo $dbtable.' table successfully created. <br>';

} // End dclm_sermon DB 


if ($whatToDo == 'insert_sermons') {
// -----------------Insert sertmon data into its table------------------------
   mysqli_select_db($link, "dclm_sermon2") or die("could not connect");
	
   $dbtable = 'sermon_data';

   include '../sermons/se_data2.php';
   for ($ct=1; $ct < count($sermons); $ct++) {
      $thequery = insertArr($dbtable, $sermons[$ct]);

      if (!mysqli_query($link, $thequery)) {
         echo 'Error inserting data for sermon: ' . mysqli_error($link) .'<br>';
         exit();
      }
      else echo 'row '. $ct . ' of sermon data successfully inserted <br/>';
   }
}

mysqli_close($link);

?>
  </h1>
</body>
</html>

