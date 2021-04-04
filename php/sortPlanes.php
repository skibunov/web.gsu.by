<?php 
	include_once "../database/connection.php";

	if (isset($_GET['sort']))
		$sort = $_GET['sort'];
	else
		$sort = "numb";

	$SELECT_ORDER_QUERY = "SELECT * FROM plane ORDER BY ".$sort."";

	$result = mysqli_query($conn, $SELECT_ORDER_QUERY);

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
	<h1 class="text-center">Сортированная таблица самолетов</h1>
		<div class="col-6 mx-auto">
			<form class="mb-2">
				<div class="form-group mb-2">
					<select class="form-control" name="sort">
						<option value="numb">Номер</option>
						<option value="model">Модель</option>
						<option value="count">Количество мест</option>
						<option value="status">Работоспособности</option>
						<option value="country">Страна производства</option>
						<option value="year">Год выпуска</option>
						<option value="flights">Типы рейсов</option>
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