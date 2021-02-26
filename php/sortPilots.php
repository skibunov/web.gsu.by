<?php 

	$file = fopen("../pilotsList.txt", "rt") or die("Невозможно открыть файл");

	$line = "";
	for($i = 0; $str = fgets($file); $i++){  
		$line .= $str;
		$array = explode("|",$line);
		list($namePilot,$surnamePilot,$middleNamePilot,$positionPilot,$birthdayPilot,$adressPilot,$telPilot) = $array;
	}




	echo $namePilot;

 ?>
   <!-- Required meta tags -->
  <meta charset="utf-8">