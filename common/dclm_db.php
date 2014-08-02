<?php
/*
 * Class to initiate a new MySQL connection based on $dbInfo
 */
class database{
    protected $databaseLink;
    function __construct(){
	include dirname(__FILE__) ."/siteinfo.php";

	$this->database = $dbInfo['host'];
        $this->mysql_user = $dbInfo['user'];
        $this->mysql_pass = $dbInfo['pass'];
        $this->database_name = $dbname;
        $this->openConnection();
        return $this->get_link();
    }
    function openConnection(){
	$this->databaseLink = mysqli_connect($this->database, $this->mysql_user, $this->mysql_pass);
	if (!$this->databaseLink) {
     		echo 'Unable to connect to the database server.';
     		exit();
   	}

	   //mysqli_set_charset($link, 'utf8') ; enforces utf8 encoding
	if (!mysqli_set_charset($this->databaseLink, 'utf8')) {
		echo 'Unable to set database connection encoding.'.'<br>';
		exit();
	}

	if (!mysqli_select_db($this->databaseLink, $this->database_name))
	{
	   echo 'Unable to locate the ' .$this->database_name . ' database.'.'<br>';
	   exit();
	}
    }

    function get_link(){
    return $this->databaseLink;
    }
}

?>
