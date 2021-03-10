<?php 

	$str  = file("../pilotsList.txt");

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
			list($namePilot,$surnamePilot,$middleNamePilot,$positionPilot,$birthdayPilot,$adressPilot,$telPilot) = $v;
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
		<h1 class="text-center">Сортированная таблица пилотов</h1>
		<div class="col-6 mx-auto">
			<form class="mb-2">
				<div class="form-group mb-2">
					<select class="form-control" name="sort">
						<option value="0">Имя</option>
						<option value="1">Фамилия</option>
						<option value="2">Отчество</option>
						<option value="3">Должность</option>
						<option value="4">Дата рождения</option>
						<option value="5">Адрес</option>
						<option value="6">Мобильный телефон</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Отсортировать</button>
			</form>
		</div>

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