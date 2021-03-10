<?php 

	$file = file("../airportList.txt") or die("Невозможно открыть файл");
	
	if (isset($_GET['nameSearch']))
		$nameSearch = $_GET['nameSearch'];

	if (isset($_GET['fieldSearch']))
		$fieldSearch = $_GET['fieldSearch'];

	foreach ($file as $v){
		$array[] = unserialize($v);
	}

	for ($i = 0; $i < count($array); $i++) { 
		$array[$i]["'season'"] = implode($array[$i]["'season'"],",");
	}

	$search = "";
	if (isset($_GET['search'])) {
		for ($i = 0; $i < count($array); $i++) { 
			if ($array[$i][$fieldSearch] == $nameSearch || strpos($array[$i][$fieldSearch], $nameSearch) || is_int(strpos($array[$i][$fieldSearch], $nameSearch))) {
				$search[] = $array[$i];
			}
		}
	} else {
		$search = $array;
	}

	$table = "";
	foreach ($search as $str){  
		if (!empty($str)) {
				$table .= "<tr>";
				$table .= "<td>".$str["'nameAir'"]."</td>";
				$table .= "<td>".$str["'countAir'"]."</td>";
				$table .= "<td>".$str["'countryAir'"]."</td>";
				$table .= "<td>".$str["'dateAir'"]."</td>";
				$table .= "<td>".$str["'countPlaneAir'"]."</td>";
				$table .= "<td>".$str["'countFlightAir'"]."</td>";
				$str["'season'"] = str_replace(",","<br>", $str["'season'"]);
				$table .= "<td>".$str["'season'"]."</td>";
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
	<h1 class="text-center">Поиск в таблице аэропортов</h1>
	<div class="col-6 mx-auto mb-2">
		<form>
			<div class="form-group">
	    		<input type="text" class="form-control" placeholder="Поиск" name="nameSearch" required>
	  		</div>
	  		<div class="form-group mb-2">
				<select class="form-control" name="fieldSearch" required>
					<option value="'nameAir'">Название</option>
					<option value="'countAir'">Количество взлетных полос</option>
					<option value="'countryAir'">Местоположение аэропорта</option>
					<option value="'dateAir'">Дата основания аэропорта</option>
					<option value="'countPlaneAir'">Количество самолётов</option>
					<option value="'countFlightAir'">Количество рейсов</option>
					<option value="'season'">Работоспособность аэропорта</option>
				</select>
			</div>
			<button type="submit" name="search" class="btn btn-primary btn-block">Поиск</button>
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