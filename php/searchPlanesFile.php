<?php 

	$str  = file("../planesList.txt");

	if (isset($_GET['nameSearch']))
		$nameSearch = $_GET['nameSearch'];

	if (isset($_GET['fieldSearch']))
		$fieldSearch = $_GET['fieldSearch'];

	foreach ($str as $v){
		$array[] = explode("|",$v);
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
	for($i = 0; $i < count($search); $i++){ 
		if (!empty($search[$i])){
			list($numberPlane,$modelPlane,$countPlane,$controlPlane,$countryPlane,$datePlane,$flightsPlane) = $search[$i];
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
	<div class="col-6 mx-auto mb-2">
		<form>
			<div class="form-group">
	    		<input type="text" class="form-control" placeholder="Поиск" name="nameSearch" required>
	  		</div>
	  		<div class="form-group mb-2">
				<select class="form-control" name="fieldSearch" required>
					<option value="0">Номер</option>
					<option value="1">Модель</option>
					<option value="2">Количество мест</option>
					<option value="3">Работоспособности</option>
					<option value="4">Страна производства</option>
					<option value="5">Год выпуска</option>
					<option value="6">Типы рейсов</option>
				</select>
			</div>
			<button type="submit" name="search" class="btn btn-primary btn-block">Поиск</button>
		</form>

	</div>
	<table class="table table-bordered">
	  <thead>
	   	<tr>
	      <th scope="col">Номер</th>
	      <th scope="col">Модель </th>
	      <th scope="col">Количество мест</th>
	      <th scope="col">Работоспособности</th>
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
 