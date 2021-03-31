<?php 
  session_start();

if (empty($_SESSION['numberPlane']))
  $_SESSION['numberPlane'] = "";

if (empty($_SESSION['modelPlane']))
  $_SESSION['modelPlane'] = "";

if (empty($_SESSION['countPlane']))
  $_SESSION['countPlane'] = "";

if (empty($_SESSION['controlPlane']))
  $_SESSION['controlPlane'] = "";

if (empty($_SESSION['countryPlane']))
  $_SESSION['countryPlane'] = "";

if (empty($_SESSION['datePlane']))
  $_SESSION['datePlane'] = "";

if (empty($_SESSION['flightsPlane']))
  $_SESSION['flightsPlane'] = array();

  if (isset($_GET['next'])) {
    $_SESSION['numberPlane'] = $_GET['numberPlane'];
    $_SESSION['modelPlane'] = $_GET['modelPlane'];
    $_SESSION['countPlane'] = $_GET['countPlane'];
    $_SESSION['controlPlane'] = $_GET['controlPlane'];
    $_SESSION['countryPlane'] = $_GET['countryPlane'];
    $_SESSION['datePlane'] = $_GET['datePlane'];
    $_SESSION['flightsPlane'] = $_GET['flightsPlane'];

    header("Location: airport.php");
  }

  if (isset($_GET['preview'])) {
    $_SESSION['numberPlane'] = $_GET['numberPlane'];
    $_SESSION['modelPlane'] = $_GET['modelPlane'];
    $_SESSION['countPlane'] = $_GET['countPlane'];
    $_SESSION['controlPlane'] = $_GET['controlPlane'];
    $_SESSION['countryPlane'] = $_GET['countryPlane'];
    $_SESSION['datePlane'] = $_GET['datePlane'];
    $_SESSION['flightsPlane'] = $_GET['flightsPlane'];

    header("Location: index.php");
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
    <a class="flex-sm-fill text-sm-center nav-link" href="index.php">Пилот</a>
    <a class="flex-sm-fill text-sm-center nav-link active" href="plane.php">Самолет</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="airport.php">Аэропорт</a>
  </nav>
  <header class="jumbotron text-center" style="background-color: #f8f9fa;">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
         <h1>Самолет</h1>
        <?php if (isset($auth)) {
           echo("<p> Логин: ".$login."; Роль:".$role."</p>");
         } ?>
         <?php if (isset($auth)) { ?>
          <div class="btn-toolbar" role="toolbar" style="justify-content: center; display: flex;" >
          <div class="btn-group mr-2" role="group">
            <a type="submit" href="php/readPlanesFile.php" class="btn btn-secondary">Просмотр содержимого файла</a>
          </div>
          <div class="btn-group mr-2" role="group">
            <a type="submit" href="php/sortPlanesFile.php" class="btn btn-secondary">Сортировка данных</a>
          </div>
          <div class="btn-group" role="group">
            <a type="submit" href="php/searchPlanesFile.php" class="btn btn-secondary">Поиск данных</a>
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
      <?php if (isset($role) && $role == "admin") { ?>
      <div class="col-6 mx-auto Larger shadow p-5 mb-5" style="border-radius: 15px;">
        <form>
          <div class="form-group">
            <label>Номер самолета: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" value="<?php echo($_SESSION['numberPlane']); ?>" name="numberPlane" autofocus required>
          </div>
          <div class="form-group">
            <label>Модель самолета: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" value="<?php echo($_SESSION['modelPlane']); ?>" name="modelPlane" required>
          </div>
          <div class="form-group">
            <label>Количество мест: <span class="text-danger">*</span></label>
            <input type="number" class="form-control" value="<?php echo($_SESSION['countPlane']); ?>" size="0" name="countPlane" min="1" value="1" required>
          </div>
          <div class="form-group">
            <label>Проверка работоспособности: <span class="text-danger">*</span></label>
            <div class="form-check">
              <input class="form-check-input" <?php echo $_SESSION['controlPlane'] == "Прошел проверку" ? 'checked="checked"' : ''?> type="radio" name="controlPlane" value="Прошел проверку" id="truePlane" required>
              <label class="form-check-label" for="truePlane">
                Прошел проверку
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" <?php echo $_SESSION['controlPlane'] == "Выявлены технические ошибки" ? 'checked="checked"' : ''?> type="radio" name="controlPlane" value="Выявлены технические ошибки" id="falsePlane" required>
              <label class="form-check-label" for="falsePlane">
                Выявлены технические ошибки
              </label>
            </div>
          </div>

          <div class="form-group">
            <label>Страна производства: <span class="text-danger">*</span></label>
            <select class="form-control" name="countryPlane" required>
              <option value="США" <?php echo $_SESSION['countryPlane'] == "США" ? 'selected="selected"' : ''?>>США</option>
              <option value="ЕВРОПА" <?php echo $_SESSION['countryPlane'] == "ЕВРОПА" ? 'selected="selected"' : ''?>>ЕВРОПА</option>
              <option value="РОССИЯ" <?php echo $_SESSION['countryPlane'] == "РОССИЯ" ? 'selected="selected"' : ''?>>РОССИЯ</option>
              <option value="БЕЛАРУСЬ" <?php echo $_SESSION['countryPlane'] == "БЕЛАРУСЬ" ? 'selected="selected"' : ''?>>БЕЛАРУСЬ</option>
            </select>
          </div>

          <div class="form-group">
            <label>Год выпуска: <span class="text-danger">*</span></label>
            <input type="date" class="form-control" value="<?php echo($_SESSION['datePlane']); ?>" name="datePlane" required>
          </div>

          <div class="form-group">
            <label>Типы рейсов: <span class="text-danger">*</span></label>
            <select multiple class="form-control" name="flightsPlane[]" required>
              <option <?php foreach ($_SESSION['flightsPlane'] as $value) {
                echo $value== "Междунородные рейсы" ? 'selected="selected"' : '';
              } ?> value="Междунородные рейсы">Междунородные рейсы</option>
              <option <?php foreach ($_SESSION['flightsPlane'] as $value) {
                echo $value== "Межгородние рейсы" ? 'selected="selected"' : '';
              } ?> value="Межгородние рейсы">Межгородние рейсы</option>
            </select>
          </div>

          <div class="btn-group btn-block" role="group">
            <button type="submit" formaction="php/addPlane.php" class="btn btn-primary">Добавить самолет</button>
            <button type="submit" formaction="php/addPlaneFile.php" value="Запись в файл" name="writeFile" class="btn btn-secondary">Запись в файл</button>
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
</main> 


<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>