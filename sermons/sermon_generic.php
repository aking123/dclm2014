<?php

//output data
 if (($categ == 'BST') || ($categ == 'SWS') || ($categ == 'REV')) 
	 $samon->getCategory($categ);
 else
	 $samon->getEvent($categ);
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
	$sermons[] = $row;
 }

 $categ_link = dirname($tpl);

 $sermonTotal = count($sermons);
 if (fmod($sermonTotal,6) == 0)
    $page_total = (int)($sermonTotal/6) ;
 else
    $page_total = (int)($sermonTotal/6) + 1 ;

 $startCt = (($thisPage - 1) * 6);
 $stopCt = min((6*$thisPage), $sermonTotal) - 1 ;
 for ($s_ct = $startCt; $s_ct <= $stopCt; $s_ct++) {
    // if ($s_ct == 0) {
        echo '	<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">';
	echo '		<article class="page type-page has-post-thumbnail hentry resurrect-entry-full ctfw-has-image">';
        echo '		<div class="resurrect-entry-content resurrect-clearfix">
';
//	echo '			<!-- <p> We can put notices and/alerts here.</p> -->';
	echo '		<section id="resurrect-loop-after-content" class="resurrect-loop-after-content">';
    // }
	
    echo '			<article class="ctc_sermon type-ctc_sermon hentry resurrect-entry-short resurrect-sermon-short ctfw-no-image">';
		
    echo '			<header class="resurrect-entry-header resurrect-clearfix">';
    echo '		<div class="resurrect-entry-title-meta">';

    echo '				<h1 class="resurrect-entry-title">';
    echo '				<a href="sermons/" title="' . $sermons[$s_ct]["Descr"] . '">' . $sermons[$s_ct]["Title"] . '</a>';
    echo '				</h1>';
		
    echo '		<ul class="resurrect-entry-meta">';

    echo '			<li class="resurrect-entry-date resurrect-content-icon"> ';
    echo '				<span class="el-icon-folder-open"></span>';
    echo '				<a class="dclm-sermon-category" href="' . $categ_link .'" rel="tag">' . $sermons[$s_ct]["Descr"] . '</a>';
    echo '			</li>';

    echo '			<li class="resurrect-entry-date resurrect-content-icon"> ';
    echo '				<span class="el-icon-calendar"></span>';
    echo '				<time datetime="2014-06-23T14:09:39+00:00">' . $sermons[$s_ct]["Sdate"] . '</time>';
    echo '			</li> ';
    echo '		</ul> ';

    echo '	</div>';

    echo '</header>';

    echo '<footer class="resurrect-entry-footer resurrect-clearfix">';
    echo '		<ul class="resurrect-entry-footer-item resurrect-list-buttons"> ';
    if (($sermons[$s_ct]["High"] != "") && ($sermons[$s_ct]["Low"] != "")) {
	echo '			<li> ';
	echo '			<a href="'  . $sermons[$s_ct]["High"] . '" title="Download High Quality Sermon"><span class="resurrect-button-icon el-icon-download"></span>High</a>';
	echo '	</li> ';
	echo '			<li> ';
	echo '			<a href="'  . $sermons[$s_ct]["Low"] . '" title="Download Low Quality Sermon"><span class="resurrect-button-icon el-icon-download"></span>Low</a>';
	echo '	</li> ';
    }	
    else if ($sermons[$s_ct]["High"] != "") {
	echo '			<li> ';
	echo '			<a href="'  . $sermons[$s_ct]["High"] . '" title="Download Sermon"><span class="resurrect-button-icon el-icon-download"></span>Download</a>';
	echo '	</li> ';
    }
    else if ($sermons[$s_ct]["Low"] != "") {
	echo '			<li> ';
	echo '			<a href="'  . $sermons[$s_ct]["Low"] . '" title="Download Sermon"><span class="resurrect-button-icon el-icon-download"></span>Download</a>';
	echo '	</li> ';
    }
    if ($sermons[$s_ct]["Outline"] != "") {
        echo '		<li>';
        echo '			<a href="'  . $sermons[$s_ct]["Outline"] . '" title="Read Sermon Outline"><span class="resurrect-button-icon el-icon-book"></span>	Outline	</a>';
	echo '		</li> ';
    }
    if (($sermons[$s_ct]["High"] != "") || ($sermons[$s_ct]["Low"] != "")) {
	$video_to_show = "";
	if ($sermons[$s_ct]["High"] != "")
		$video_to_show = $sermons[$s_ct]["High"] ;
	else
		$video_to_show = $sermons[$s_ct]["Low"] ;
        echo '	        <li>  ';
	echo '		<a href="' . $video_to_show . '?player=video"><span class="resurrect-button-icon el-icon-video"></span>Watch</a> ';
        echo ' 		</li> ';
    }
    if ($sermons[$s_ct]["Audio"] != "") {
        echo '		<li>';
        echo '			<a href="' . $sermons[$s_ct]["Audio"] . '?player=audio"><span class="resurrect-button-icon el-icon-headphones"></span>Listen</a> ';
        echo '		</li> ';
    }    
    echo '	</ul> ';

    echo '</footer> ';
 
    echo '	</article> ';
   // if ($s_ct == ($sermonTotal - 1)) {
       echo '</section>'; 
       echo '		</div> ';
       echo '	</article> ';
       echo '		</div>';
   // }

}

 include dirname(__FILE__) . '/pages_nav.php';


 mysqli_close($samon->sto_rec);
?>
