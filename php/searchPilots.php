<?php 

	include_once "../database/connection.php";
	
	if (isset($_GET['search']))
		$search = $_GET['search'];
	else
		$search = "firstname";

	if (isset($_GET['nameSearch'])) 		
		$nameSearch = $_GET['nameSearch'];
	else
		$nameSearch = "";

	$SELECT_SEARCH_QUERY = "SELECT * FROM pilots WHERE ".$search." LIKE '%".$nameSearch."%'";

	$result = mysqli_query($conn, $SELECT_SEARCH_QUERY);

	$table = "";
	while ($row = $result->fetch_assoc()) { 
     	$table .= "<tr>";
		$table .= "<td>".$row['firstname']."</td>";
		$table .= "<td>".$row['lastname']."</td>";
		$table .= "<td>".$row['middlename']."</td>";
		$table .= "<td>".$row['position']."</td>";
		$table .= "<td>".$row['birthday']."</td>";
		$table .= "<td>".$row['adress']."</td>";
		$table .= "<td>".$row['phone']."</td>";
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
	<h1 class="text-center">Поиск по таблице пилотов</h1>
	<div class="col-6 mx-auto mb-2">
		<form>
			<div class="form-group">
	    		<input type="text" class="form-control" placeholder="Поиск" name="nameSearch" required>
	  		</div>
	  		<div class="form-group mb-2">
				<select class="form-control" name="search">
					<option value="firstname">Имя</option>
					<option value="lastname">Фамилия</option>
					<option value="middlename">Отчество</option>
					<option value="position">Должность</option>
					<option value="birthday">Дата рождения</option>
					<option value="adress">Адрес</option>
					<option value="phone">Мобильный телефон</option>
				</select>
			</div>
			<button type="submit" name="input" class="btn btn-primary btn-block">Поиск</button>
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
 