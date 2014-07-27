<?php

if ($page_total > 1) {
	echo'	<nav class="resurrect-pagination resurrect-content-block resurrect-content-block-compact resurrect-clearfix">';
	echo'		<ul class="page-numbers">';
	if ($thisPage > 1) {
		if ($thisPage == 2) $pgPre = ''; // No subdirectory for page 1
		else $pgPre = $thisPage - 1 . '/';
		echo'	<li><a class="prev page-numbers" href="' . $page_link . $pgPre .'" onclick="loadSermon(' . ($thisPage - 1) . ', \''. $page_link .'\')"><span class="resurrect-button-icon el-icon-arrow-left"></span> Previous</a></li>';
	}			
	for ($pg=1; $pg <= $page_total; $pg++) {
		if ($pg == 1) $pgl = '';  // No subdirectory for page 1
		else  $pgl = $pg . '/';
		if ($pg == $thisPage) {
			echo'			<li><span class="page-numbers current">'.$pg.'</span></li>';
		}
		else {
			echo'			<li><a class="page-numbers" href="' . $page_link . $pgl .'" onclick="loadSermon(' . $pg . ', \'' .$page_link .'\')">'. $pg .'</a></li>';
		}
	}
	if ($thisPage != $page_total) {
		echo'			<li><a class="next page-numbers" href="' . $page_link . ($thisPage + 1) .'/" onclick="loadSermon(' . ($thisPage + 1) . ', \'' . $page_link .'\')">Next <span class="resurrect-button-icon el-icon-arrow-right"></span></a></li>';
	}
	echo'		</ul>';
	echo'	</nav>';
}

?>

<!-- Load new pages scriptContainer End -->
<script type='text/javascript'>
function loadSermon(num, str) {	
	var str, num;
	if (num == 1) return true;
	var request = $.ajax({
	url: "sermons/sermons_pages.php",
	type: "POST",
	data: { pageNum: num, pageParent: str },
	async: false,
	dataType: "html"
	});

 	return false; // this is so the browser doesn't follow the link
}

</script>
