<?php 

	$file = file("../airportList.txt") or die("Невозможно открыть файл");

	$sort = "'nameAir'";
	if (isset($_GET['sort']))
		$sort = $_GET['sort'];

	foreach ($file as $str){  
		$array[] = unserialize($str);
	}
	
	function sortA($array,$sort){
		for ($i = 0; $i < count($array); $i++) { 
			for ($j = 0; $j < count($array) - $i - 1; $j++){
				if ($array[$j][$sort] > $array[$j+1][$sort]) {
					$tmp = $array[$j];
					$array[$j] = $array[$j+1];
					$array[$j+1] = $tmp;
				}
			}
		}
		return $array;
	}

	$array = sortA($array,$sort);

	$table = "";
	foreach ($array as $str){  
		if (!empty($str)) {
			$table .= "<tr>";
			$table .= "<td>".$str["'nameAir'"]."</td>";
			$table .= "<td>".$str["'countAir'"]."</td>";
			$table .= "<td>".$str["'countryAir'"]."</td>";
			$table .= "<td>".$str["'dateAir'"]."</td>";
			$table .= "<td>".$str["'countPlaneAir'"]."</td>";
			$table .= "<td>".$str["'countFlightAir'"]."</td>";
			$table .= "<td>";
			foreach ($str["'season'"] as $value) {
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
	<h1 class="text-center">Сортированная таблица аэропортов</h1>
	<div class="col-6 mx-auto">
		<form class="mb-2">
			<div class="form-group mb-2">
				<select class="form-control" name="sort">
					<option value="'nameAir'">Название</option>
					<option value="'countAir'">Количество взлетных полос</option>
					<option value="'countryAir'">Местоположение аэропорта</option>
					<option value="'dateAir'">Дата основания аэропорта</option>
					<option value="'countPlaneAir'">Количество самолётов</option>
					<option value="'countFlightAir'">Количество рейсов</option>
					<option value="'season'">Работоспособность аэропорта</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Отсортировать</button>
		</form>
	</div>
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