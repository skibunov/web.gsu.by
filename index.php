<?php 
  session_start();

if (empty($_SESSION['namePilot']))
  $_SESSION['namePilot'] = "";

if (empty($_SESSION['surnamePilot']))
  $_SESSION['surnamePilot'] = "";

if (empty($_SESSION['middleNamePilot']))
  $_SESSION['middleNamePilot'] = "";

if (empty($_SESSION['positionPilot']))
  $_SESSION['positionPilot'] = "";

if (empty($_SESSION['birthdayPilot']))
  $_SESSION['birthdayPilot'] = "";

if (empty($_SESSION['adressPilot']))
  $_SESSION['adressPilot'] = "";

if (empty($_SESSION['telPilot']))
  $_SESSION['telPilot'] = "";

  if (isset($_GET['next'])) {
    $_SESSION['namePilot'] = $_GET['namePilot'];
    $_SESSION['surnamePilot'] = $_GET['surnamePilot'];
    $_SESSION['middleNamePilot'] = $_GET['middleNamePilot'];
    $_SESSION['positionPilot'] = $_GET['positionPilot'];
    $_SESSION['birthdayPilot'] = $_GET['birthdayPilot'];
    $_SESSION['adressPilot'] = $_GET['adressPilot'];
    $_SESSION['telPilot'] = $_GET['telPilot'];

    header("Location: plane.php");
  }

  if (isset($_GET['preview'])) {
    $_SESSION['namePilot'] = $_GET['namePilot'];
    $_SESSION['surnamePilot'] = $_GET['surnamePilot'];
    $_SESSION['middleNamePilot'] = $_GET['middleNamePilot'];
    $_SESSION['positionPilot'] = $_GET['positionPilot'];
    $_SESSION['birthdayPilot'] = $_GET['birthdayPilot'];
    $_SESSION['adressPilot'] = $_GET['adressPilot'];
    $_SESSION['telPilot'] = $_GET['telPilot'];

    header("Location: airport.php");
  }

//Авторизация
  if (isset($_SESSION['login']))
    $login = $_SESSION['login'];

  if (isset($_SESSION['role']))
    $role = $_SESSION['role'];

  if (isset($_SESSION['auth']))
    $auth = $_SESSION['auth'];

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
    <a class="flex-sm-fill text-sm-center nav-link active" href="index.php">Пилот</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="plane.php">Самолет</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="airport.php">Аэропорт</a>
  </nav>
  <header class="jumbotron text-center" style="background-color: #f8f9fa;">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
         <h1>Пилот</h1>
         <?php if (isset($auth)) {
           echo("<p> Логин: ".$login."; Роль:".$role."</p>");
         } ?>
         <?php if (isset($auth)) { ?>
         <div class="btn-toolbar" role="toolbar" style="justify-content: center; display: flex;" >
          <div class="btn-group mr-2" role="group">
            <a type="submit" href="php/readPilotsFile.php" class="btn btn-secondary">Просмотр содержимого файла</a>
          </div>
          <div class="btn-group mr-2" role="group">
            <a type="submit" href="php/sortPilotsFile.php" class="btn btn-secondary">Сортировка данных</a>
          </div>
          <div class="btn-group" role="group">
            <a type="submit" href="php/searchPilotsFile.php" class="btn btn-secondary">Поиск данных</a>
          </div>
        </div>
      <?php } ?>

      </div>
    </div>
  </div>
</header>

<main class="main">
  <div class="container">
    <div class="row">

      <div class="col-10 mx-auto">
        <?php include_once 'php/addPilot.php'; ?>
      </div>  

      <?php if (isset($role) && $role == "admin") { ?>
      <div class="col-6 mx-auto Larger shadow p-5 mb-5" style="border-radius: 15px;">
        <form>
          <div class="form-group">
            <label>Имя пилота: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" value="<?php echo($_SESSION['namePilot']); ?>" name="namePilot" autofocus required pattern="^[a-zA-Z]+$">
          </div>

          <div class="form-group">
            <label>Фамилия пилота: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" value="<?php echo($_SESSION['surnamePilot']); ?>" name="surnamePilot" required pattern="^[a-zA-Z]+$">
          </div>

          <div class="form-group">
            <label for="secondNamePilot">Отчество пилота:</label>
            <input type="text" class="form-control" value="<?php echo($_SESSION['middleNamePilot']); ?>" name="middleNamePilot" pattern="^[a-zA-Z]+$">
          </div>

          <div class="form-group">
            <label>Должность пилота: <span class="text-danger">*</span></label>
            <select class="form-control" name="positionPilot" required>
              <option disabled value='' <?php echo $_SESSION['positionPilot'] == "" ? 'selected="selected"' : ''?>>Выбрать</option>
              <option value="Первый пилот" <?php echo $_SESSION['positionPilot'] == "Первый пилот" ? 'selected="selected"' : ''?>>Первый пилот</option>
              <option value="Второй пилот" <?php echo $_SESSION['positionPilot'] == "Второй пилот" ? 'selected="selected"' : ''?>>Второй пилот</option>
            </select>
          </div>

          <div class="form-group">
            <label>Введите дату рождения: <span class="text-danger">*</span></label>
            <input type="date" class="form-control" value="<?php echo($_SESSION['birthdayPilot']); ?>"  name="birthdayPilot" required>
          </div>

          <div class="form-group">
            <label>Адрес пилота:</label>
            <input type="text" class="form-control" value="<?php echo($_SESSION['adressPilot']); ?>"  name="adressPilot">
          </div>

          <div class="form-group">
            <label>Мобильный телефон пилота: <span class="text-danger">*</span></label>
            <input type="tel" placeholder="+375" class="form-control" value="<?php echo($_SESSION['telPilot']); ?>"  name="telPilot" required pattern="^[ 0-9]+$">
          </div>

          
          <div class="btn-group btn-block" role="group">
            <button type="submit" value="Добавить пилота" name="submit" class="btn btn-primary">Добавить пилота</button>
            <button type="submit" formaction="php/addPilotFile.php" value="Запись в файл" name="writeFile" class="btn btn-secondary">Запись в файл</button>
          </div>

          <div class="btn-group btn-block" role="group">
            <button type="submit" class="btn btn-primary" name="preview" value="Preview">Preview</button>
            <button type="submit" class="btn btn-secondary" name="next" value="Next">Next</button>
          </div>
        </form>
      </div>
      <?php } else if (!isset($auth)) {?>
          <h1><a href="auth/index.php">Авторизуйтесь</a></h1>

      <?php } ?>
    </div>


  </div>
</div>
</main> 




<script src="vendor/jQuery/jquery.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>