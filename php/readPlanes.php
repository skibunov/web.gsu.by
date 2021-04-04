<?php 
	include_once "../database/connection.php";

	$SELECT_QUERY = "SELECT * FROM plane";

	$result = mysqli_query($conn, $SELECT_QUERY);

	$table = "";
	while ($row = $result->fetch_assoc()) { 
     	$table .= "<tr>";
		$table .= "<td>".$row['numb']."</td>";
		$table .= "<td>".$row['model']."</td>";
		$table .= "<td>".$row['count']."</td>";
		$table .= "<td>".$row['status']."</td>";
		$table .= "<td>".$row['country']."</td>";
		$table .= "<td>".$row['year']."</td>";
		$table .= "<td>".$row['flights']."</td>";
		$table .= "</tr>";
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
	<h1 class="text-center">Сортировка таблицы самолетов</h1>
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