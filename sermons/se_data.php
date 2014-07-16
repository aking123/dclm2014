<?php

// BST, SWS, REV, CRU, RET, YTH
// Define Sermon categories (multi-dimensional) arrays
$sermons    = array(array());
$biblestudy = array(array());
$sundays    = array(array()); // Includes search the scriptures
$revivals   = array(array());
$retreats   = array(array());
$crusades   = array(array());
$youth_ser  = array(array()); // Includes SAY and YES

/* 
sermon_data = array ("Sdate" => "yyyymmdd",
                 "Title" => ""
                 "Category" => ""
                 "Desc" => ""
                 "High" =>""
                 "Low" => ""
                 "Audio" => ""
                 "Outline" => ""
                 "Active" => ""
		 "Thumbs" => ""
		 "Link"  =>
          )

*/
$sermons[] = array("Sdate" => "20140701",
                 "Title" => "Special Study: God&rsquo;s Faithfulness Releases us from Worry and Anxiety",
                 "Category" => "BST",
                 "Desc" => "Weekly Bible Study",
                 "High" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140714Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140714Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140714Eng.mp3",
                 "Outline" => "http://s3.amazonaws.com/MBSoutlines/2014/MBS14072014.doc",
                 "Active" => "",
                 "Thumbs" => "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg",
              );

$sermons[] = array("Sdate" => "20140701",
                 "Title" => "Special Study: God&rsquo;s Faithfulness Releases us from Worry and Anxiety",
                 "Category" => "BST",
                 "Desc" => "Weekly Bible Study",
                 "High" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140707Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140707Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140707Eng.mp3",
                 "Outline" => "http://s3.amazonaws.com/MBSoutlines/2014/MBS07072014.doc",
                 "Active" => "",
                 "Thumbs" => "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg",
              );

$sermons[] = array("Sdate" => "20140630",
                 "Title" => "Special Study: Faith That Banishes Worry and Anxiety",
                 "Category" => "BST",
                 "Desc" => "Weekly Bible Study",
                 "High" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140630Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140630Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140630Eng.mp3",
                 "Outline" => "http://s3.amazonaws.com/MBSoutlines/2014/MBS30062014.doc",
                 "Active" => "",
                 "Thumbs" => "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg",
              );

$sermons[] = array("Sdate" => "20140629",
                 "Title" => "The Priority of Selfless Service in Christian Worship",
                 "Category" => "SWS",
                 "Desc" => "Sunday Worship Service",
                 "High" => "https://s3.amazonaws.com/2014Services/SWS/HQSWS20140629Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/SWS/HQSWS20140629Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/SWS/HQSWS20140629Eng.mp3",
                 "Outline" => "",
                 "Active" => "",
                 "Thumbs" => "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg",
              );

$sermons[] = array("Sdate" => "20140623",
                 "Title" => "Special Study: The Blessing of Serving God",
                 "Category" => "BST",
                 "Desc" => "Weekly Bible Study",
                 "High" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140623Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140623Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140623Eng.mp3",
                 "Outline" => "http://s3.amazonaws.com/MBSoutlines/2014/MBS16062014.doc",
                 "Active" => "",
                 "Thumbs" => "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg",
              );

$sermons[] = array("Sdate" => "20140622",
                 "Title" => "God's Book in a Believer's Life",
                 "Category" => "CRU",
                 "Desc" => "June 2014 Revival Program",
                 "High" => "https://s3.amazonaws.com/2014Services/Monthly%20Revival%26Miracle/The%20Yoke%20is%20broken-June/Messages/God%27s_Book_in_a_Believer%E2%80%99s_Life_Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/Monthly%20Revival%26Miracle/The%20Yoke%20is%20broken-June/Messages/God%27s_Book_in_a_Believer%E2%80%99s_Life_Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/Monthly%20Revival%26Miracle/The%20Yoke%20is%20broken-June/Messages/God%27s_Book_in_a_Believer%E2%80%99s_Life_Eng.mp3",
                 "Outline" => "",
                 "Active" => "",
                 "Thumbs" => "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg",
              );

$sermons[] = array("Sdate" => "20140621",
                 "Title" => "Come, Continue and Conquer",
                 "Category" => "CRU",
                 "Desc" => "June 2014 Revival Program",
                 "High" => "http://goo.gl/hI9aG3",
                 "Low" => "http://goo.gl/RLQ3gb",
                 "Audio" => "http://goo.gl/fPTF0c",
                 "Outline" => "",
                 "Active" => "",
                 "Thumbs" => "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg",
              );

$sermons[] = array("Sdate" => "20140621",
                 "Title" => "Jesus the Unforgettable Miracle Worker",
                 "Category" => "CRU",
                 "Desc" => "June 2014 Revival Program",
                 "High" => "https://s3.amazonaws.com/2014Services/Monthly%20Revival%26Miracle/The%20Yoke%20is%20broken-June/Messages/Jesus_the_Unforgettable_Miracle_Worker_Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/Monthly%20Revival%26Miracle/The%20Yoke%20is%20broken-June/Messages/Jesus_the_Unforgettable_Miracle_Worker_Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/Monthly%20Revival%26Miracle/The%20Yoke%20is%20broken-June/Messages/Jesus_the_Unforgettable_Miracle_Worker_Eng.mp3",
                 "Outline" => "",
                 "Active" => "",
                 "Thumbs" => "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg",
              );

$sermons[] = array("Sdate" => "20140621",
                 "Title" => "Christ's Great Invitation",
                 "Category" => "CRU",
                 "Desc" => "June 2014 Revival Program",
                 "High" => "https://s3.amazonaws.com/2014Services/Monthly%20Revival%26Miracle/The%20Yoke%20is%20broken-June/Messages/Christ_Great_Invitation_Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/Monthly%20Revival%26Miracle/The%20Yoke%20is%20broken-June/Messages/Christ_Great_Invitation_Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/Monthly%20Revival%26Miracle/The%20Yoke%20is%20broken-June/Messages/Christ_Great_Invitation_Eng.mp3",
                 "Outline" => "",
                 "Active" => "",
                 "Thumbs" => "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg",
              );

$sermons[] = array("Sdate" => "20140619",
                 "Title" => "The Lord my Security",
                 "Category" => "REV",
                 "Desc" => "Monthly Revival Service",
                 "High" => "https://s3.amazonaws.com/2014Services/THURS/HQTHURS20140619Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/THURS/HQTHURS20140619Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/THURS/HQTHURS20140619Eng.mp3",
                 "Outline" => "",
                 "Active" => "",
                 "Thumbs" => "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg",
              );

$sermons[] = array("Sdate" => "20140616",
                 "Title" => "Special Study: Antidote for Worry and Anxiety",
                 "Category" => "BST",
                 "Desc" => "Weekly Bible Study",
                 "High" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140616Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140616Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140616Eng.mp3",
                 "Outline" => "http://s3.amazonaws.com/MBSoutlines/2014/MBS16062014.doc",
                 "Active" => "",
                 "Thumbs" => "",
              );

$sermons[] = array("Sdate" => "20140602",
                 "Title" => "Special Study: Undivided Loyalty in Serving God",
                 "Category" => "BST",
                 "Desc" => "Weekly Bible Study",
                 "High" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140602Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140602Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140602Eng.mp3",
                 "Outline" => "http://s3.amazonaws.com/MBSoutlines/2014/MBS02062014.doc",
                 "Active" => "",
                 "Thumbs" => "",
              );

$sermons[] = array("Sdate" => "20140525",
                 "Title" => "The Mystery of the Indwelling Christ",
                 "Category" => "SWS",
                 "Desc" => "Sunday Worship Service",
                 "High" => "https://s3.amazonaws.com/2014Services/SWS/HQSWS20140525Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/SWS/HQSWS20140525Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/SWS/HQSWS20140525Eng.mp3",
                 "Outline" => "",
                 "Active" => "",
                 "Thumbs" => "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg",
              );

$sermons[] = array("Sdate" => "20140515",
                 "Title" => "Command and Let the Mountains Move",
                 "Category" => "REV",
                 "Desc" => "Monthly Revival Service",
                 "High" => "https://s3.amazonaws.com/2014Services/THURS/HQTHURS20140515Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/THURS/HQTHURS20140515Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/THURS/HQTHURS20140515Eng.mp3",
                 "Outline" => "",
                 "Active" => "",
                 "Thumbs" => "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg",
              );

$sermon_nums = count($sermons);
//echo " Total number of Sermons is " . $sermon_nums ."<br/><br/>" ;
for ($s_ct=1; $s_ct < $sermon_nums; $s_ct++) {
    foreach ( $sermons[$s_ct] as $key => $value ) {
	if ($key == "Sdate") {
	   $timestamp = strtotime($value);
	   $value = date('F dS \, Y', $timestamp);
	   $sermons[$s_ct][$key] = $value ; 
    	}
    /* 
     * The various If.. else .. structure below is unnecsaary if/when we use
     * sql database to store and retrieve the sermons. Then we can just query
     * the database with appropriate selective syntax for each category
    */   
	if ($value == "BST") {
	   $biblestudy[] = $sermons[$s_ct] ;
    	}
	if ($value == "CRU") {
	   $crusades[] = $sermons[$s_ct] ;
    	}
    	if ($value == "RET") {
	   $retreats[] = $sermons[$s_ct] ;
	}
    	if ($value == "REV") {
	   $revivals[] = $sermons[$s_ct] ;
	}
    	if ($value == "SWS") {
	   $sundays[] = $sermons[$s_ct] ;
	}
    	if ($value == "YTH") {
	   $youth_ser[] = $sermons[$s_ct] ;
	}
    }
}
/*
        echo " For Bible study sermon; " .  count($biblestudy) . "<br/>" ;
    for ($i = 1; $i < count($biblestudy); $i++) {
	foreach ( $biblestudy[$i] as $key => $value ) {
		echo $key . " : ". $value ."<br/>"  ;
    	}
        echo "<br/><br/>" ;
    }

        echo " For Crusade sermon; " .  count($crusades) . "<br/>" ;
    for ($i = 1; $i < count($crusades); $i++) {
   	foreach ( $crusades[$i] as $key => $value ) {
		echo $key . " : ". $value ."<br/>"  ;
	}
        echo "<br/><br/>" ;
    }

        echo " For Retreat sermon; " .  count($retreats) . "<br/>" ;
    for ($i = 1; $i < count($retreats); $i++) {
   	foreach ( $retreats[$i] as $key => $value ) {
		echo $key . " : ". $value ."<br/>"  ;
	}
        echo "<br/><br/>" ;
    }

        echo " For Revival sermon; " . count($revivals) . "<br/>" ;
    for ($i = 1; $i < count($revivals); $i++) {
   	foreach ( $revivals[$i] as $key => $value ) {
		echo $key . " : ". $value ."<br/>"  ;
	}
        echo "<br/><br/>" ;
    }

        echo " For Sunday Service sermon; " .  count($revivals) . "<br/>" ;
    for ($i = 1; $i < count($sundays); $i++) {
   	foreach ( $sundays[$i] as $key => $value ) {
		echo $key . " : ". $value ."<br/>"  ;
	}
        echo "<br/><br/>" ;
    }

        echo " For Youth sermon; " . count($youth_ser) . "<br/>" ;
    for ($i = 1; $i < count($youth_ser); $i++) {
   	foreach ( $youth_ser[$i] as $key => $value ) {
		echo $key . " : ". $value ."<br/>"  ;
	}
        echo "<br/><br/>" ;
     }	
 */
// if (($s_ct == 1) || (sermon[$s_ct]["Category"] != sermon[$s_ct - 1]["Category"]))
//

  $rct_sermons  = '<h1 class="resurrect-widget-title">Recent Sermons</h1>';
  for ($rct = 1 ; $rct < 4 ; $rct++) {
    $rct_sermons .= '	<article class="ctc_sermon type-ctc_sermon has-post-thumbnail hentry resurrect-widget-entry resurrect-sermons-widget-entry resurrect-clearfix resurrect-widget-entry-first ctfw-has-image">';
    $rct_sermons .= '		<header class="resurrect-clearfix">';
    $rct_sermons .= '			<div class="resurrect-widget-entry-thumb">';
    $rct_sermons .= '				<a href="' . $sermons[$rct]["Active"] . '" title="' . $sermons[$rct]["Title"] . '"><img width="100" height="100" src="http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-100x100.jpg" class="resurrect-image" alt="" /></a>';
    $rct_sermons .= '			</div>';
			
    $rct_sermons .= '			<h1 class="resurrect-widget-entry-title"><a href="' . $sermons[$rct]["Active"] . '" title="' . $sermons[$rct]["Title"] . '">' . $sermons[$rct]["Title"] . '</a></h1>';

    $rct_sermons .= '				<ul class="resurrect-widget-entry-meta resurrect-clearfix">';
    $rct_sermons .= '					<li class="resurrect-widget-entry-date resurrect-sermons-widget-entry-date">';
    $rct_sermons .= '						<time datetime="2013-06-12T14:09:39+00:00">' . $sermons[$rct]["Sdate"] . '</time>';
    $rct_sermons .= '					</li>';
    $rct_sermons .= '					<li class="resurrect-widget-entry-icons resurrect-sermons-widget-entry-icons">';
    $rct_sermons .= '						<ul class="resurrect-list-icons">';
    if ( $sermons[$rct]["Outline"] != "" ) {
       $rct_sermons .= '					<li><a href="' . $sermons[$rct]["Outline"] . '" class="el-icon-book" title="Read Online"></a></li>';
    }
    if ( $sermons[$rct]["High"] != "" ) {
    	$rct_sermons .= '					<li><a href="' . $sermons[$rct]["High"] . '" class="el-icon-download" title="Download Video"></a></li>';
	$rct_sermons .= '					<li><a href="' . $sermons[$rct]["High"] . '?player=video" class="el-icon-video" title="Watch Video"></a></li>';
    } else if ( $sermons[$rct]["Low"] != "" ) {
    	$rct_sermons .= '					<li><a href="' . $sermons[$rct]["Low"] . '" class="el-icon-download" title="Download Video"></a></li>';
	$rct_sermons .= '					<li><a href="' . $sermons[$rct]["Low"] . '?player=video" class="el-icon-video" title="Watch Video"></a></li>';
    }
 
    if ( $sermons[$rct]["Audio"] != "" ) {
       $rct_sermons .= '					<li><a href="' . $sermons[$rct]["Audio"] . '?player=audio" class="el-icon-headphones" title="Listen to Audio"></a></li>';
    }
    $rct_sermons .= '						</ul>';
    $rct_sermons .= '					</li>';
    $rct_sermons .= '			</ul>';
    $rct_sermons .= '		</header>';
    $rct_sermons .= '	</article>';
  }

?>
