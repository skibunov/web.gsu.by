<?php 
session_start();
//счетчик обновления страницы
if (!isset($_SESSION['time'])) {
  $_SESSION['time'] = "Вы еще не обновляли страницу";
} else {
  $_SESSION['time'] = $_SESSION['time'] + 1;
}


//Добавление в session items
if (isset($_POST['add'])) {
  if (empty($_SESSION['item'])) {
    $_SESSION['item'] = $_POST['add'];
  }else {
    $_SESSION['item'] = $_POST['add'].",".$_SESSION['item'];
  }
  header("Refresh:0");
}
?>

<?php include_once 'items.php'; ?>
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

  <nav class="nav nav-pills flex-column flex-sm-row p-3">
    <a class="flex-sm-fill text-sm-center nav-link active" href="../index.php">Пилот</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="../plane.php">Самолет</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="../airport.php">Аэропорт</a>
  </nav>
  <header class="jumbotron text-center" style="background-color: #f8f9fa;">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
         <h1>Session</h1>
         <div class="badge badge-primary">
          <h6>Вы посетили наш сайт <?php echo($_SESSION['time']); ?> раз!</h6>
          <h6>Дата последнего посещения <?= isset($_SESSION['lastTime']) ? time() - $_SESSION['lastTime'] : 'НЕ ЗАХОДИЛИ' ?> секунд</h6>
        </div>
      </div>
    </div>
  </div>
</header>

<?php 
  //сколько секунд назад
  $_SESSION['lastTime'] = time();
 ?>

<main class="main">
  <div class="container">
    <div class="row">
      <div class="col-6 mx-auto Larger shadow p-5 mb-5" style="border-radius: 15px;">
        <form method="POST" action="input.php">
          <div class="form-group">
            <label>Email: </label>
            <input type="email" class="form-control" name="email">
          </div>
          <button type="submit" value="Добавить пилота" name="submit" class="btn btn-primary">Отправить</button>
        </form>
      </div>  
    </div>

    <h2>Выбор товаров (<a href="basket.php">Корзина</a>)</h2> 
    <form method="POST">
      <div class="row mb-5">
          <?php foreach ($item as $key => $value) { ?>
          <div class="col-4 mb-5">
            <div class="card">
              <img class="card-img-top" src="<?php echo($value["img"]) ?>" alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title"><?php echo($value["name"]) ?></h3>
                <p class="card-text"><?php  echo($value["description"]) ?></p>
                <p class="card-text"><input type="text" class="form-control" value="<?php echo($value["cost"]) ?>" disabled></p>
                <button class="btn btn-primary" value="<?php echo($value["id"]); ?>" name="add">Положить в корзину</button> 
              </div>
            </div>   
          </div>
          <?php } ?>  
      </div>
    </form>

  </div>
</div>
</main> 


<script src="../vendor/jQuery/jquery.js"></script>
<script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>