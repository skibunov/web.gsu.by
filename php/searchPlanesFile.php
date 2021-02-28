<?php 

	$str  = file("../planesList.txt");

	// $prompt_msg = "Please type search name.";
	// $name = prompt($prompt_msg);


	$table = "";
	foreach ($str as $v) {
		if (is_int(strpos($v,"a"))) {
			$array = explode("|",$v);
			if (!empty($array)){
				list($numberPlane,$modelPlane,$countPlane,$controlPlane,$countryPlane,$datePlane,$flightsPlane) = $array;
				$flightsPlane = str_replace(",","<br>", $flightsPlane);
				$table .= "<tr>";
				$table .= "<td>".$numberPlane."</td>";
				$table .= "<td>".$modelPlane."</td>";
				$table .= "<td>".$countPlane."</td>";
				$table .= "<td>".$controlPlane."</td>";
				$table .= "<td>".$countryPlane."</td>";
				$table .= "<td>".$datePlane."</td>";
				$table .= "<td>".$flightsPlane."</td>";
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
	<h1 class="text-center">Поиск по таблице самолетов</h1>
	<table class="table table-bordered">
	  <thead>
	   	<tr>
	      <th scope="col">Номер</th>
	      <th scope="col">Модель </th>
	      <th scope="col">Количество мест </th>
	      <th scope="col">Работоспособности </th>
	      <th scope="col">Страна производства</th>
	      <th scope="col">Год выпуска</th>
	      <th scope="col">Типы рейсов</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php echo $table; ?>
	  </tbody>
	</table>
	</div>


</body>
</html>
 