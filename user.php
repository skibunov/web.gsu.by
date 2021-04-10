<?php 
include_once 'database/connection.php';  

if (isset($_GET['id'])){ 
	$id = $_GET['id'];

	$user = mysqli_query($conn,"SELECT * FROM users WHERE id = '".$id."' LIMIT 1");
	$user = mysqli_fetch_assoc($user);




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

	<nav class="nav nav-pills flex-column flex-sm-row p-3">
		<a class="flex-sm-fill text-sm-center nav-link" href="main.php">Главная</a>
		<a class="flex-sm-fill text-sm-center nav-link" href="index.php">Пилот</a>
		<a class="flex-sm-fill text-sm-center nav-link" href="plane.php">Самолет</a>
		<a class="flex-sm-fill text-sm-center nav-link" href="airport.php">Аэропорт</a>
	</nav>

  <header class="jumbotron text-center" style="background-color: #f8f9fa;">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">


        </div>
      </div>
    </div>
  </header>

	<div class="col-12 col-sm-12 col-md-12 col-lg-8 mx-auto">
		<table class="table inforu">
			<tbody>
				<tr>
					<th scope="row">Логин</th>
					<td><?=$user['login'] ?></td>
				</tr>
				<tr>
					<th scope="row">Имя</th>
					<td><?=$user['firstname'] ?></td>
				</tr>
				<tr>
					<th scope="row">Фамилия</th>
					<td><?=$user['lastname'] ?></td>
				</tr>
				<tr>
					<th scope="row">Возраст</th>
					<td><?=$user['age'] ?></td>
				</tr>
				<tr>
					<th scope="row">E-mail</th>
					<td><?=$user['email'] ?></td>
				</tr>
				<tr>
					<th scope="row">Роль</th>
					<td><?=$user['role'] ?></td>
				</tr>
				<tr>
					<th scope="row">Бан</th>
					<td><?=$user['ban'] ?></td>
				</tr>
			</tbody>
		</table>
	</div>



	<script src="vendor/jQuery/jquery.js"></script>
	<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>

<?php } ?>