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
		$flightsPlane = implode(',',$_GET['flightsPlane']);


	$file = fopen("../planesList.txt", "at") or die("Невозможно открыть файл");
	flock($file,LOCK_EX); 

	$temp = $numberPlane."|".$modelPlane."|".$countPlane."|".$controlPlane."|".$countryPlane."|".$datePlane."|".$flightsPlane."\n";

	fputs($file,$temp);

	fflush($file); 
	flock($file,LOCK_UN);
	
	fclose($file);

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
	<div class="col-10 mx-auto p-5">
	<div class="alert alert-success alert-dismissible fade show" role="alert">
  		<strong>Успешно!</strong> Данные добавлены в файл
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  		</button>
	</div>
	</div>
</body>
</html>