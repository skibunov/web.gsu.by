<?php 

	$file = fopen("../pilotsList.txt", "rt") or die("Невозможно открыть файл");

	// $prompt_msg = "Please type search name.";
	// $name = prompt($prompt_msg);

	$table = "";
	for($i = 0; $str = fgets($file); $i++){  
		if (is_int(strpos($str,"a"))) {
			$array = explode("|",$str);
			if (!empty($array)){
				list($namePilot,$surnamePilot,$middleNamePilot,$positionPilot,$birthdayPilot,$adressPilot,$telPilot) = $array;
			 	$table .= "<tr>";
				$table .= "<td>".$namePilot."</td>";
				$table .= "<td>".$surnamePilot."</td>";
				$table .= "<td>".$middleNamePilot."</td>";
				$table .= "<td>".$positionPilot."</td>";
				$table .= "<td>".$birthdayPilot."</td>";
				$table .= "<td>".$adressPilot."</td>";
				$table .= "<td>".$telPilot."</td>";
				$table .= "</tr>";
			}
		}
	}

 ?>

<?php 
    function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

        $answer = "<script type='text/javascript'> document.write(answer); </script>";
        return($answer);
    }

 ?>

  <!doctype html>
<html lang="ru">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.min.css">

  <title>Hello, world!</title>
</head>
<body>
	<div class="col-10 mx-auto">
	<h1 class="text-center">Поиск по таблице пилотов</h1>
	<table class="table table-bordered">
	  <thead>
	    <tr>	
	      <th scope="col">Имя</th>
	      <th scope="col">Фамилия</th>
	      <th scope="col">Отчество</th>
	      <th scope="col">Должность</th>
	      <th scope="col">Дату рождения</th>
	      <th scope="col">Адрес</th>
	      <th scope="col">Мобильный телефон</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php echo $table; ?>
	  </tbody>
	</table>
	</div>


</body>
</html>
 