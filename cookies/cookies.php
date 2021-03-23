<?php

	$num = (isset($_COOKIE['counter'])) ? $_COOKIE['counter'] : 0;
	$num++;
	setcookie("counter",$num,time()+3600*24);


	date_default_timezone_set('UTC'); 
	if (isset($_COOKIE['date'])) {
		$correctdate = date('i') -  $_COOKIE['date'];
	}else{
		$correctdate = 0;
	}
	$date =  date('i');
	setcookie("date",$date,time()+3600*24);

	if (isset($_POST['banner'])) {
		setcookie("banner",true,time()+ (60*2));
		header("Refresh:0");	
	}

	if (isset($_POST['submit1'])) {
		setcookie("birthday",$_POST['birthday'],time()+3600*24);
		header("Refresh:0");
	}

	if (isset($_COOKIE['birthday'])) {
		$cd = new \DateTime('today'); // Сегодня, время 00:00:00
	    $bd = new \DateTime($_COOKIE['birthday']); // Объект Дата дня рождения
	    $bd->setDate($cd->format('Y'), $bd->format('m'), $bd->format('d')); // Устанавливаем текущий год, оставляем месяц и день
	    $tmp = $cd->diff($bd); // Разница дат
	    if($tmp->invert){ // Если в этом году уже был (разница "отрицательная")
	        $bd->modify('+1 year'); // Добавляем год
	        $tmp = $cd->diff($bd); // Снова вычисляем разницу
    	}
	}



	if (isset($_POST['submit2'])) {
		setcookie("them",$_POST['them'],time()+3600*24);
		header("Refresh:0");
	}

 ?>
