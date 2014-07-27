<?php
/*
 * Process the recent sermon view here;
 */ 
  require_once(dirname(__FILE__) . '/sermons/sermon_query.php');

  $samon->getRecent("BST");
  $rct_sermons  = '<h1 class="resurrect-widget-title">Recent Sermons</h1>';
  while($row = mysqli_fetch_array($samon->Result)) 
  {
	 // TODO: This foreach segment can be totally avoided if date transformation (as done below) is performed during sermon data insertion
	foreach ( $row as $key => $value ) {
		if ($key == "Sdate") {
	   		$timestamp = strtotime($value);
	   		$value = date('F dS \, Y', $timestamp);
	  		$row[$key] = $value ; 
		}

	}

    //TODO: $Thumb should be different images for different sermon categories.
    $Thumb = "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-100x100.jpg";

    $rct_sermons .= '	<article class="ctc_sermon type-ctc_sermon has-post-thumbnail hentry resurrect-widget-entry resurrect-sermons-widget-entry resurrect-clearfix resurrect-widget-entry-first ctfw-has-image">';
    $rct_sermons .= '		<header class="resurrect-clearfix">';
    $rct_sermons .= '			<h1 class="resurrect-widget-entry-title"><a href="' . $row["High"] . '" title="' . htmlspecialchars($row["Title"]) . '">' . htmlspecialchars($row["Title"]) . '</a></h1>';
    $rct_sermons .= '			<div class="resurrect-widget-entry-thumb">';
    $rct_sermons .= '				<a href="' . $row["High"] . '" title="' . htmlspecialchars($row["Title"]) . '"><img width="100" height="100" src="' . $Thumb . '" class="resurrect-image" alt="" /></a>';
    $rct_sermons .= '			</div>';
			
    $rct_sermons .= '			<ul class="resurrect-widget-entry-meta resurrect-clearfix">';
    $rct_sermons .= '				<li class="resurrect-widget-entry-date resurrect-sermons-widget-entry-date">';
    $rct_sermons .= '					<time datetime="2013-06-12T14:09:39+00:00">' . $row["Sdate"] . '</time>';
    $rct_sermons .= '				</li>';
    $rct_sermons .= '				<li class="resurrect-widget-entry-icons resurrect-sermons-widget-entry-icons">';
    $rct_sermons .= '					<ul class="resurrect-list-icons">';
    if ( $row["Outline"] != "" ) {
       $rct_sermons .= '					<li><a href="' . $row["Outline"] . '" class="el-icon-book" title="Read Online"></a></li>';
    }
    if ( $row["High"] != "" ) {
    	$rct_sermons .= '					<li><a href="' . $row["High"] . '" class="el-icon-download" title="Download Video"></a></li>';
	$rct_sermons .= '					<li><a href="' . $row["High"] . '?player=video" class="el-icon-video" title="Watch Video"></a></li>';
    } else if ( $row["Low"] != "" ) {
    	$rct_sermons .= '					<li><a href="' . $row["Low"] . '" class="el-icon-download" title="Download Video"></a></li>';
	$rct_sermons .= '					<li><a href="' . $row["Low"] . '?player=video" class="el-icon-video" title="Watch Video"></a></li>';
    }
 
    if ( $row["Audio"] != "" ) {
       $rct_sermons .= '					<li><a href="' . $row["Audio"] . '?player=audio" class="el-icon-headphones" title="Listen to Audio"></a></li>';
    }
    $rct_sermons .= '					</ul>';
    $rct_sermons .= '				</li>';
    $rct_sermons .= '			</ul>';
    $rct_sermons .= '		</header>';
    $rct_sermons .= '	</article>';
  }

 mysqli_close($samon->sto_rec);

?>
