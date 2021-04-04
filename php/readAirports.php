<?php 

	include_once "../database/connection.php";

	$SELECT_QUERY = "SELECT * FROM airport";

	$result = mysqli_query($conn, $SELECT_QUERY);

	$table = "";
	while ($row = $result->fetch_assoc()) { 
     	$table .= "<tr>";
		$table .= "<td>".$row['name']."</td>";
		$table .= "<td>".$row['count']."</td>";
		$table .= "<td>".$row['country']."</td>";
		$table .= "<td>".$row['datetime']."</td>";
		$table .= "<td>".$row['count_plane']."</td>";
		$table .= "<td>".$row['count_flight']."</td>";
		$table .= "<td>".$row['season']."</td>";
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
	    <?php echo $table; ?>
	  </tbody>
	</table>
	</div>


</body>
</html>