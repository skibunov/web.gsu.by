<?php 

	if(isset($_GET['Air']))
		$Air = $_GET['Air'];


	if(!empty($Air["'season'"]))
		$season = implode('<br>',$Air["'season'"]);
	else
		$season = "Не указано"


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
	    <tr>
	      <td><?php echo $Air["'nameAir'"]; ?></ts>
	      <td><?php echo $Air["'countAir'"]; ?></td>
	      <td><?php echo $Air["'countryAir'"]; ?></td>
	      <td><?php echo $Air["'dateAir'"]; ?></td>
	      <td><?php echo $Air["'countPlaneAir'"]; ?></td>
	      <td><?php echo $Air["'countFlightAir'"]; ?></td>
	      <td><?php echo $season; ?></td>
	    </tr>
	  </tbody>
	</table>
	</div>


</body>
</html>