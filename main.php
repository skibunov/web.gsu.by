<?php session_start();  ?>
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

  <?php if (isset($_SESSION['auth'])) { ?>
    <div class="col-12 col-sm-12 col-md-12 col-lg-3 text-sm-center mx-auto">
      <h3>Привет, <?php echo($_SESSION['login']) ?></h3>
      <h3>Ваша роль - <?php echo($_SESSION['role']) ?></h3>
      <h3>Дата последнего захода - <?php echo($_COOKIE['lastDate']); ?></h3>
      <div class="list-group">
        <a href="user.php?id=<?=$_SESSION['id'] ?>" class="list-group-item list-group-item-action">Просмотр профиля</a>
        <a href="edit.php" class="list-group-item list-group-item-action">Редактировать профиль</a>
        <?php if ($_SESSION['role'] == 'admin') { ?>
          <a href="admin.php" class="list-group-item list-group-item-action">Админ - панель</a>  
        <?php } ?>
        <a href="dbTemplate/logout.php" class="list-group-item list-group-item-action">Выход</a>
      </div>
    </div>
  <?php } else {
    include_once 'assets/menu.php'; 
  }

  ?>

  <script src="vendor/jQuery/jquery.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>