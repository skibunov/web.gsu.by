<?php 

	if(isset($_GET['nameAir']))
		$nameAir = $_GET['nameAir'];

	if(isset($_GET['countAir']))
		$countAir = $_GET['countAir'];

	if(isset($_GET['countryAir']))
		$countryAir = $_GET['countryAir'];

	if(isset($_GET['dateAir']))
		$dateAir = $_GET['dateAir'];

	if(isset($_GET['countPlaneAir']))
		$countPlaneAir = $_GET['countPlaneAir'];

	if(isset($_GET['countFlightAir']))
		$countFlightAir = $_GET['countFlightAir'];

	if(isset($_GET['workAir']))
		$workAir = implode('<br>',$_GET['workAir']);



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
	      <td><?php echo $nameAir; ?></ts>
	      <td><?php echo $countAir; ?></td>
	      <td><?php echo $countryAir; ?></td>
	      <td><?php echo $dateAir; ?></td>
	      <td><?php echo $countPlaneAir; ?></td>
	      <td><?php echo $countFlightAir; ?></td>
	      <td><?php echo $workAir; ?></td>
	    </tr>
	  </tbody>
	</table>
	</div>


</body>
</html>