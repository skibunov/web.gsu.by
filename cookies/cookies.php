<?php

	$num = (isset($_COOKIE['counter'])) ? $_COOKIE['counter'] : 0;
	$num++;
	setcookie("counter",$num,time()+3600*24);

	date_default_timezone_set('UTC');
	$date = date("i");
	if (!isset($_COOKIE['date'])) {
		setcookie("date",$date,time()+3600*24);
		$data_res = 0;
	} else {
		$date_c = $_COOKIE['date'];
		$date_n = date("i");
		$data_res = $date_n - $date_c;
		setcookie("date",$date_n,time()+3600*24);  
	}

	if (isset($_GET['submit1'])) {
		$check_time = strtotime($_GET['birthday']) - time();
		$months = floor($check_time/86400/12);
		$days = floor($check_time/86400);
		$hours = floor(($check_time%86400)/3600);
		$minutes = floor(($check_time%3600)/60);
		if ($days <= 0) {
			setcookie("birthday","У вас сегодня день Рождения",time()+3600*24);
		}else{
			setcookie("birthday",$days,time()+3600*24);
		} 
	}

	if (isset($_GET['submit2'])) {
		if ($_GET['them'] == "blue") {
			setcookie("them","blue",time()+3600*24);
		}else{
			setcookie("them","grey",time()+3600*24);
		}
	}


	if (isset($_GET['banner'])) {
		setcookie("banner",1,time()+120000);
	}

	
 ?>
