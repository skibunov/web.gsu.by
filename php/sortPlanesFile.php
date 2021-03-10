<?php 

	$str  = file("../planesList.txt");
	
	$sort = 0;
	if (isset($_GET['sort']))
		$sort = $_GET['sort'];

	foreach ($str as $value) {
		$array[] =  explode("|",$value);
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
	foreach ($array as $v) {
		if (!empty($v)){
			list($numberPlane,$modelPlane,$countPlane,$controlPlane,$countryPlane,$datePlane,$flightsPlane) = $v;
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
	<h1 class="text-center">Сортированная таблица самолетов</h1>
		<div class="col-6 mx-auto">
			<form class="mb-2">
				<div class="form-group mb-2">
					<select class="form-control" name="sort">
						<option value="0">Номер</option>
						<option value="1">Модель</option>
						<option value="2">Количество мест</option>
						<option value="3">Работоспособности</option>
						<option value="4">Страна производства</option>
						<option value="5">Год выпуска</option>
						<option value="6">Типы рейсов</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Отсортировать</button>
			</form>
		</div>
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