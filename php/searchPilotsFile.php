<?php 

	$file = fopen("../pilotsList.txt", "rt") or die("Невозможно открыть файл");

	if (isset($_GET['nameSearch']))
		$nameSearch = $_GET['nameSearch'];

	if (isset($_GET['fieldSearch']))
		$fieldSearch = $_GET['fieldSearch'];

	for ($i = 0; $str = fgets($file); $i++) { 
		$array[] = explode("|",$str);
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
				list($namePilot,$surnamePilot,$middleNamePilot,$positionPilot,$birthdayPilot,$adressPilot,$telPilot) = $search[$i];
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
	<h1 class="text-center">Поиск по таблице пилотов</h1>
	<div class="col-6 mx-auto mb-2">
		<form>
			<div class="form-group">
	    		<input type="text" class="form-control" placeholder="Поиск" name="nameSearch" required>
	  		</div>
	  		<div class="form-group mb-2">
				<select class="form-control" name="fieldSearch" required>
					<option value="0">Имя</option>
					<option value="1">Фамилия</option>
					<option value="2">Отчество</option>
					<option value="3">Должность</option>
					<option value="4">Дата рождения</option>
					<option value="5">Адрес</option>
					<option value="6">Мобильный телефон</option>
				</select>
			</div>
			<button type="submit" name="search" class="btn btn-primary btn-block">Поиск</button>
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
 