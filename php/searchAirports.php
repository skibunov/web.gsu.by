<?php 

	include_once "../database/connection.php";
	
	if (isset($_GET['search']))
		$search = $_GET['search'];
	else
		$search = "name";

	if (isset($_GET['nameSearch'])) 		
		$nameSearch = $_GET['nameSearch'];
	else
		$nameSearch = "";

	$SELECT_SEARCH_QUERY = "SELECT * FROM airport WHERE ".$search." LIKE '%".$nameSearch."%'";

	$result = mysqli_query($conn, $SELECT_SEARCH_QUERY);

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
	<h1 class="text-center">Поиск в таблице аэропортов</h1>
	<div class="col-6 mx-auto mb-2">
		<form>
			<div class="form-group">
	    		<input type="text" class="form-control" placeholder="Поиск" name="nameSearch" required>
	  		</div>
	  		<div class="form-group mb-2">
				<select class="form-control" name="search" required>
					<option value="name">Название</option>
					<option value="count">Количество взлетных полос</option>
					<option value="country">Местоположение аэропорта</option>
					<option value="datetime">Дата основания аэропорта</option>
					<option value="count_plane">Количество самолётов</option>
					<option value="count_flight">Количество рейсов</option>
					<option value="season">Работоспособность аэропорта</option>
				</select>
			</div>
			<button type="submit" name="input" class="btn btn-primary btn-block">Поиск</button>
		</form>

	</div>
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