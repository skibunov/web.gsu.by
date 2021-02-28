<?php 

	$file = fopen("../airportList.txt", "rt") or die("Невозможно открыть файл");

	$table = "";
	for($i = 0; $str = fgets($file); $i++){  
		$array = unserialize($str);
		if (!empty($array)) {
			$table .= "<tr>";
			$table .= "<td>".$array["'nameAir'"]."</td>";
			$table .= "<td>".$array["'countAir'"]."</td>";
			$table .= "<td>".$array["'countryAir'"]."</td>";
			$table .= "<td>".$array["'dateAir'"]."</td>";
			$table .= "<td>".$array["'countPlaneAir'"]."</td>";
			$table .= "<td>".$array["'countFlightAir'"]."</td>";
			$table .= "<td>";
			foreach ($array["'season'"] as $value) {
				$table.= $value."<br>";
			}
			$table .= "</td>";
			$table .= "</tr>";
		}
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
	<h1 class="text-center">Таблица Аэропортов</h1>
	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th scope="col">Название</th>
	      <th scope="col">Количество взлетных полос</th>
	      <th scope="col">Местоположение аэропорта </th>
	      <th scope="col">Дата основания аэропорта</th>
	      <th scope="col">Количество самолётов</th>
	      <th scope="col">Количество рейсов</th>
	      <th scope="col">Работоспособность аэропорта</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php echo $table; ?>
	  </tbody>
	</table>
	</div>


</body>
</html>