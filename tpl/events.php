<?php
require_once ('../includes/config.php');
require_once('../classes/db.class.php');

$bd = mysql_connect(DB_HOST, DB_USER, DB_PWD) or die("DB_HOST, DB_USER, DB_PWD");
mysql_select_db(DB_DB, $bd) or die(DB_DB);

if($_POST['page']) {
	$page = $_POST['page'];
	$cur_page = $page;
	$page -= 1;
	$per_page = 6;
	$previous_btn = true;
	$next_btn = true;
	$first_btn = true;
	$last_btn = true;
	$start = $page * $per_page;
	
	$query_pag_data = "SELECT * from event WHERE event_home = 1 LIMIT $start, $per_page";
	$result_pag_data = mysql_query($query_pag_data) or die('MySql Error' . mysql_error());
	$msg = "";
	
	$msg .= '<h2 class="home"><a href="#">ACCU Events</a><a href="#" class="icons feed-icon">News RSS Feed</a></h2>';
		$msg .= '<div class="news-listing meta-dynamic-content-container" style="height: 360px;">';
			$msg .= '<ul class="listing absolute" style="height: 360px;">';
				
				while ($row = mysql_fetch_array($result_pag_data)) {
	
					$msg .= '<li class="news news-with-image first" style="width: 350px; display: list-item;">';
						//$msg .= '<div class="image-thumbnail">';
						//$msg .= '<a href="#"><img src="content/siteimages/no-image_220x147.jpg" alt="Sun Shines on Renewable Energy as an Economic Force "></a>';
						//$msg .= '</div>';
						$getdate = strtotime($row['event_starting_date']);
						$msg .= '<div class="details"><span class="date" title="'.date("l F d, Y", $getdate).'">'.date("l F d, Y", $getdate).'</span>';
						$msg .= '<h4><a href="event.php?event_id='.$row['event_id'].'" title="'.$row['event_name'].'">'.nl2br($row['event_name']).'</a></h4>';
						$msg .= '<p class="excerpt"><span class="meta-info">';
						$msg .= '<a href="event.php?event_id='.$row['event_id'].'" class="read-more">read more</a></span></p>';
						$msg .= '</div>';
						$msg .= '<span class="clear"></span>';
					$msg .= '</li>';
	
			 }
			 
		   $msg .= '</ul>';
		$msg .= '</div>';
		
	$msg = "<div class='data'><ul>" . $msg . "</ul></div>"; // Content for Data
	
	
	/* --------------------------------------------- */
	$query_pag_num = "SELECT COUNT(*) AS count FROM news";
	$result_pag_num = mysql_query($query_pag_num);
	$row = mysql_fetch_array($result_pag_num);
	$count = $row['count'];
	$no_of_paginations = ceil($count / $per_page);
	
	/* ---------------Calculating the starting and endign values for the loop----------------------------------- */
	if ($cur_page >= 7) {
		$start_loop = $cur_page - 3;
		if ($no_of_paginations > $cur_page + 3)
			$end_loop = $cur_page + 3;
		else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			$start_loop = $no_of_paginations - 6;
			$end_loop = $no_of_paginations;
		} else {
			$end_loop = $no_of_paginations;
		}
	} else {
		$start_loop = 1;
		if ($no_of_paginations > 7)
			$end_loop = 7;
		else
			$end_loop = $no_of_paginations;
	}
	/* ----------------------------------------------------------------------------------------------------------- */
	$msg .= "<div class='pagination'><ul>";
	
	for ($i = $start_loop; $i <= $end_loop; $i++) {
		if ($cur_page == $i)
			$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'></li>";
		else
			$msg .= "<li p='$i' class='active'></li>";
	}
	
	$allrecords .="<a href='events-highlights.php' title='View all Events'>View All</a>";
	$total_string = "<span class='total' a='$no_of_paginations'><b>" . $allrecords . "</b></span>";
	$msg = $msg . "</ul>".$total_string."</div>";
	
	//$total_string = "<span class='total' a='$no_of_paginations'>Page <b>" . $cur_page . "</b> of <b>$no_of_paginations</b></span>";
	//$msg = $msg . "</ul>".$total_string."</div>";
	//$msg = $msg . "</ul></div>";
	echo $msg;
}