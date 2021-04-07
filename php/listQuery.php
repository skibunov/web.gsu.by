<?php 
	include_once "../database/connection.php";

	$SELECT_QUERY = "SELECT * FROM pilots";

	$result = mysqli_query($conn, $SELECT_QUERY);

	$table1 = "";
	while ($row = $result->fetch_assoc()) { 
     	$table1 .= "<tr>";
		$table1 .= "<td>".$row['firstname']."</td>";
		$table1 .= "<td>".$row['lastname']."</td>";
		$table1 .= "<td>".$row['middlename']."</td>";
		$table1 .= "<td>".$row['position']."</td>";
		$table1 .= "<td>".$row['birthday']."</td>";
		$table1 .= "<td>".$row['adress']."</td>";
		$table1 .= "<td>".$row['phone']."</td>";
		$table1 .= "</tr>";
	} 

	$SELECT_QUERY = "SELECT * FROM plane";

	$result = mysqli_query($conn, $SELECT_QUERY);

	$table2 = "";
	while ($row = $result->fetch_assoc()) { 
     	$table2 .= "<tr>";
		$table2 .= "<td>".$row['numb']."</td>";
		$table2 .= "<td>".$row['model']."</td>";
		$table2 .= "<td>".$row['count']."</td>";
		$table2 .= "<td>".$row['status']."</td>";
		$table2 .= "<td>".$row['country']."</td>";
		$table2 .= "<td>".$row['year']."</td>";
		$table2 .= "<td>".$row['flights']."</td>";
		$table2 .= "</tr>";
	} 

	$SELECT_QUERY = "SELECT * FROM airport";

	$result = mysqli_query($conn, $SELECT_QUERY);

	$table3 = "";
	while ($row = $result->fetch_assoc()) { 
     	$table3 .= "<tr>";
		$table3 .= "<td>".$row['name']."</td>";
		$table3 .= "<td>".$row['count']."</td>";
		$table3 .= "<td>".$row['country']."</td>";
		$table3 .= "<td>".$row['datetime']."</td>";
		$table3 .= "<td>".$row['count_plane']."</td>";
		$table3 .= "<td>".$row['count_flight']."</td>";
		$table3 .= "<td>".$row['season']."</td>";
		$table3 .= "</tr>";
	} 



	$SELECT_QUERY = "SELECT * FROM pilots WHERE firstname = 'Андрей'";

	$result = mysqli_query($conn, $SELECT_QUERY);

	$table4 = "";
	while ($row = $result->fetch_assoc()) { 
     	$table4 .= "<tr>";
		$table4 .= "<td>".$row['firstname']."</td>";
		$table4 .= "<td>".$row['lastname']."</td>";
		$table4 .= "<td>".$row['middlename']."</td>";
		$table4 .= "<td>".$row['position']."</td>";
		$table4 .= "<td>".$row['birthday']."</td>";
		$table4 .= "<td>".$row['adress']."</td>";
		$table4 .= "<td>".$row['phone']."</td>";
		$table4 .= "</tr>";
	} 


	$SELECT_QUERY = "SELECT * FROM pilots WHERE firstname LIKE '%А%'";

	$result = mysqli_query($conn, $SELECT_QUERY);

	$table5 = "";
	while ($row = $result->fetch_assoc()) { 
     	$table5 .= "<tr>";
		$table5 .= "<td>".$row['firstname']."</td>";
		$table5 .= "<td>".$row['lastname']."</td>";
		$table5 .= "<td>".$row['middlename']."</td>";
		$table5 .= "<td>".$row['position']."</td>";
		$table5 .= "<td>".$row['birthday']."</td>";
		$table5 .= "<td>".$row['adress']."</td>";
		$table5 .= "<td>".$row['phone']."</td>";
		$table5 .= "</tr>";
	} 


	$SELECT_QUERY = "SELECT * FROM pilots WHERE birthday BETWEEN '2001-01-01' AND '2002-01-01'";

	$result = mysqli_query($conn, $SELECT_QUERY);

	$table6 = "";
	while ($row = $result->fetch_assoc()) { 
     	$table6 .= "<tr>";
		$table6 .= "<td>".$row['firstname']."</td>";
		$table6 .= "<td>".$row['lastname']."</td>";
		$table6 .= "<td>".$row['middlename']."</td>";
		$table6 .= "<td>".$row['position']."</td>";
		$table6 .= "<td>".$row['birthday']."</td>";
		$table6 .= "<td>".$row['adress']."</td>";
		$table6 .= "<td>".$row['phone']."</td>";
		$table6 .= "</tr>";
	} 


	$SELECT_QUERY = "SELECT * FROM pilots ORDER BY firstname DESC";

	$result = mysqli_query($conn, $SELECT_QUERY);

	$table7 = "";
	while ($row = $result->fetch_assoc()) { 
     	$table7 .= "<tr>";
		$table7 .= "<td>".$row['firstname']."</td>";
		$table7 .= "<td>".$row['lastname']."</td>";
		$table7 .= "<td>".$row['middlename']."</td>";
		$table7 .= "<td>".$row['position']."</td>";
		$table7 .= "<td>".$row['birthday']."</td>";
		$table7 .= "<td>".$row['adress']."</td>";
		$table7 .= "<td>".$row['phone']."</td>";
		$table7 .= "</tr>";
	} 


	$SELECT_QUERY = "SELECT * FROM pilots ORDER BY firstname ASC";

	$result = mysqli_query($conn, $SELECT_QUERY);

	$table8 = "";
	while ($row = $result->fetch_assoc()) { 
     	$table8 .= "<tr>";
		$table8 .= "<td>".$row['firstname']."</td>";
		$table8 .= "<td>".$row['lastname']."</td>";
		$table8 .= "<td>".$row['middlename']."</td>";
		$table8 .= "<td>".$row['position']."</td>";
		$table8 .= "<td>".$row['birthday']."</td>";
		$table8 .= "<td>".$row['adress']."</td>";
		$table8 .= "<td>".$row['phone']."</td>";
		$table8 .= "</tr>";
	} 



	$SELECT_QUERY = "SELECT * FROM pilots LIMIT 1";

	$result = mysqli_query($conn, $SELECT_QUERY);

	$table9 = "";
	while ($row = $result->fetch_assoc()) { 
     	$table9 .= "<tr>";
		$table9 .= "<td>".$row['firstname']."</td>";
		$table9 .= "<td>".$row['lastname']."</td>";
		$table9 .= "<td>".$row['middlename']."</td>";
		$table9 .= "<td>".$row['position']."</td>";
		$table9 .= "<td>".$row['birthday']."</td>";
		$table9 .= "<td>".$row['adress']."</td>";
		$table9 .= "<td>".$row['phone']."</td>";
		$table9 .= "</tr>";
	} 


	$SELECT_QUERY = "SELECT COUNT(firstname) FROM pilots";

	$result = mysqli_query($conn, $SELECT_QUERY);

	$table10 = "";
	while ($row = $result->fetch_assoc()) { 
     	$table10 .= "<tr>";
		$table10 .= "<td>".$row['COUNT(firstname)']."</td>";
		$table10 .= "</tr>";
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
	<h1 class="text-center">SELECT * FROM pilots</h1>
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
	  	<?php echo $table1; ?>
	  </tbody>
	</table>

	<h1 class="text-center">SELECT * FROM plane</h1>
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
	  	<?php echo $table2; ?>
	  </tbody>
	</table>

	<h1 class="text-center">SELECT * FROM airport</h1>
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
	  	<?php echo $table3; ?>
	  </tbody>
	</table>

	<h1 class="text-center">SELECT * FROM pilots WHERE firstname = 'Андрей'</h1>
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
	  	<?php echo $table4; ?>
	  </tbody>
	</table>


	<h1 class="text-center">SELECT * FROM pilots WHERE firstname LIKE %й%</h1>
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
	  	<?php echo $table5; ?>
	  </tbody>
	</table>

	<h1 class="text-center">SELECT * FROM pilots WHERE birthday BETWEEN '2001-01-01' AND '2002-01-01'</h1>
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
	  	<?php echo $table6; ?>
	  </tbody>
	</table>

	<h1 class="text-center">SELECT * FROM pilots ORDER BY firstname DESC</h1>
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
	  	<?php echo $table7; ?>
	  </tbody>
	</table>


	<h1 class="text-center">SELECT * FROM pilots ORDER BY firstname ASC</h1>
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
	  	<?php echo $table8; ?>
	  </tbody>
	</table>


	<h1 class="text-center">SELECT * FROM pilots LIMIT 1</h1>
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
	  	<?php echo $table9; ?>
	  </tbody>
	</table>


	<h1 class="text-center">SELECT COUNT( firstname ) FROM pilots</h1>
	<table class="table table-bordered">
	  <thead>
	    <tr>	
	      <th scope="col">COUNT(firstname)</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php echo $table10; ?>
	  </tbody>
	</table>


	</div>


</body>
</html>
