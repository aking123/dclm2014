<?php

include(dirname(__FILE__) . "/../common/dclm_db.php");

$db = new database(); // Initiate a new database connection

class sermon
{
	//private $search;
	private $getall;
	private $query;
	public $Result;
	public $sto_rec;

		
	function setSearch($search)
	{
		$itm_search = " WHERE title like ";
		$data_search = explode(" ", $search);
		if(is_array($data_search))
		{
			for( $i = 0; $i < count($data_search); $i++)
			{
				$itm_search.= ($i == count($data_search)-1)?"'%".$data_search[$i]."%'" : "'%".$data_search[$i]."%' or  title like ";
			}
		}
		else $itm_search .= "'%".$data_search."%'";
		$this->query = "select * from sermon_data".$itm_search;
		$this->conn();
	}
	
	/*function setGetAll($search)
	{
		$this->getall = $search;
	}*/
	
	function getAll()
	{
		$this->query = 'SELECT * FROM sermon_data ORDER BY Sdate DESC LIMIT 6';
		$this->conn();		
	}
	
	function getCategory($thisCategory)
	{
		$this->query = 'SELECT * FROM sermon_data WHERE Categ="'. $thisCategory .'" ORDER BY Sdate DESC';
		$this->conn();		
	}
		
	function getRecent()
	{
		$this->query = "SELECT * FROM sermon_data ORDER BY Sdate DESC LIMIT 3";
		$this->conn();		
	}
		
	function getCrusade($searchTerm)
	{
		$this->query = 'SELECT * FROM sermon_data WHERE Categ="'. $searchTerm .'" ORDER BY Sdate DESC LIMIT 5';
		$this->conn();		
	}
		
	function conn(){
		mysqli_select_db($this->sto_rec, "dclm_sermon2") or die("could not connect");
		$this->Result = mysqli_query($this->sto_rec, $this->encodeChar($this->query));
	}	
	
	function encodeChar($chsJs) {
		$ban = array(";", "exec", "execute","--","#");
		$ran = array(":", "^", "^C","^s","^sh");
		$bas = $chsJs;
		$chsJs = (substr($bas,-1)==";")?substr($chsJs,0,-1):$chsJs;
		$chsJs = str_replace($ban,$ran,$chsJs);
		return $chsJs.";";
	}

	function decodeChar($dhsJs) {
		$ban = array(";", "exec", "execute","--","#");
		$ran = array(":", "^", "^C","^s","^sh");
	
		$dhsJs = str_replace($ran,$ban,$dhsJs);

		return $dhsJs;
	}
}

 $samon = new sermon;

 $samon->sto_rec = $db->get_link();


?>
