<?php 

	if (isset($_SESSION['auth']) and $_SESSION['role'] == "admin") 
		die();

	include_once "database/connection.php";


	$query = "SELECT COUNT(*) FROM users";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	$users_all = $row['COUNT(*)'];

	$query = "SELECT COUNT(*) FROM users WHERE role = 'admin'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	$users_admin = $row['COUNT(*)'];

	$query = "SELECT COUNT(*) FROM users WHERE role = 'moder'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	$users_moder = $row['COUNT(*)'];

	$query = "SELECT COUNT(*) FROM users WHERE ban > NOW()";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	$users_ban = $row['COUNT(*)'];



	$query = "SELECT * FROM users";
	$result = mysqli_query($conn, $query);

	$table = "";
	while ($row = $result->fetch_assoc()) { 
     	$table .= "<tr>";
		$table .= "<td>".$row['id']."</td>";
		$table .= "<td>".$row['login']."</td>";
		$table .= "<td>".$row['firstname']."</td>";
		$table .= "<td>".$row['lastname']."</td>";
		$table .= "<td>".$row['age']."</td>";
		$table .= "<td>".$row['email']."</td>";
		$table .= "<td>".$row['role']."</td>";
		$table .= "<td>".$row['ban']."</td>";
		$table .= '<td>
					<a href="dbTemplate/deleteTemplate.php?id='.$row['id'].'" class="btn btn-danger">Удалить</a>
					<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      					Бан
    				</button>
				    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
				      <a class="dropdown-item" href="dbTemplate/banTemplate.php?id='.$row['id'].'&ban=MINUTE">На минута</a>
				      <a class="dropdown-item" href="dbTemplate/banTemplate.php?id='.$row['id'].'&ban=HOUR">На час</a>
				      <a class="dropdown-item" href="dbTemplate/banTemplate.php?id='.$row['id'].'&ban=DAY">На день</a>
				      <a class="dropdown-item" href="dbTemplate/banTemplate.php?id='.$row['id'].'&ban=WEEK">На неделю</a>
				      <a class="dropdown-item" href="dbTemplate/banTemplate.php?id='.$row['id'].'&ban=MONTH">На месяц</a>
				    </div>
				    <a href="dbTemplate/unbanTemplate.php?id='.$row['id'].'" class="btn btn-success">Разбанить</a>
					</td>';

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
  <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css">

  <title>Hello, world!</title>
</head>
<body>
	<div class="col-10 mx-auto">
	<h1 class="text-center">Таблица Пользователей</h1>
	<h3 class="text-center">Администраторов - <?=$users_admin ?>, модераторов - <?=$users_moder ?>, забаненных пользователей - <?=$users_ban ?>, всего пользователей - <?=$users_all ?></h3>
	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th scope="col">Id</th>	
	      <th scope="col">Логин</th>
	      <th scope="col">Имя</th>
	      <th scope="col">Фамилия</th>
	      <th scope="col">Возраст</th>
	      <th scope="col">E - mail</th>
	      <th scope="col">Роль</th>
	      <th scope="col">Бан</th>
	      <th scope="col">Администрирование</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?=$table ?>
	  </tbody>
	</table>
	</div>

<script src="vendor/jQuery/jquery.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>