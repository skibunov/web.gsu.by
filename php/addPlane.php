<?php 

	if(isset($_GET['numberPlane']))
		$numberPlane = $_GET['numberPlane'];

	if(isset($_GET['modelPlane']))
		$modelPlane = $_GET['modelPlane'];

	if(isset($_GET['countPlane']))
		$countPlane = $_GET['countPlane'];

	if(isset($_GET['controlPlane']))
		$controlPlane = $_GET['controlPlane'];

	if(isset($_GET['countryPlane']))
		$countryPlane = $_GET['countryPlane'];

	if(isset($_GET['datePlane']))
		$datePlane = $_GET['datePlane'];

	if(isset($_GET['flightsPlane']))
		$flightsPlane = implode('<br>',$_GET['flightsPlane']);



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
	<h1 class="text-center">Таблица Самолетов</h1>
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
	    <tr>
	      <td><?php echo $numberPlane; ?></ts>
	      <td><?php echo $modelPlane; ?></td>
	      <td><?php echo $countPlane; ?></td>
	      <td><?php echo $controlPlane; ?></td>
	      <td><?php echo $countryPlane; ?></td>
	      <td><?php echo $datePlane; ?></td>
	      <td><?php echo $flightsPlane;?></td>
	    </tr>
	  </tbody>
	</table>
	</div>


</body>
</html>