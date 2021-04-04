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
         <p>Форма для заполнения пилота!</p>
         <div class="btn-toolbar" role="toolbar" style="justify-content: center; display: flex;" >
          <div class="btn-group mr-2" role="group">
            <a type="submit" href="php/readPilots.php" class="btn btn-secondary">Просмотр содержимого файла</a>
          </div>
          <div class="btn-group mr-2" role="group">
            <a type="submit" href="php/sortPilots.php" class="btn btn-secondary">Сортировка данных</a>
          </div>
          <div class="btn-group" role="group">
            <a type="submit" href="php/searchPilots.php" class="btn btn-secondary">Поиск данных</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</header>

<main class="main">
  <div class="container">
    <div class="row">
      <div class="col-6 mx-auto Larger shadow p-5 mb-5" style="border-radius: 15px;">
        <form method="GET" action="php/addPilot.php">
          <div class="form-group">
            <label>Имя пилота: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="namePilot" autofocus required>
          </div>

          <div class="form-group">
            <label>Фамилия пилота: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="surnamePilot" required>
          </div>

          <div class="form-group">
            <label for="secondNamePilot">Отчество пилота:</label>
            <input type="text" class="form-control" name="middleNamePilot">
          </div>

          <div class="form-group">
            <label>Должность пилота: <span class="text-danger">*</span></label>
            <select class="form-control" name="positionPilot" required>
              <option selected disabled value=''>Выбрать</option>
              <option value="Первый пилот">Первый пилот</option>
              <option value="Второй пилот">Второй пилот</option>
            </select>
          </div>

          <div class="form-group">
            <label>Введите дату рождения: <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="birthdayPilot" required>
          </div>

          <div class="form-group">
            <label>Адрес пилота:</label>
            <input type="text" class="form-control" name="adressPilot">
          </div>

          <div class="form-group">
            <label>Мобильный телефон пилота: <span class="text-danger">*</span></label>
            <input type="tel" placeholder="+375" class="form-control" name="telPilot" required>
          </div>

          
          <div class="btn-group btn-block" role="group">
            <button type="submit" value="Добавить пилота" name="submit" class="btn btn-primary">Добавить пилота в базу</button>
          </div>
        </form>
      </div>
    </div>


  </div>
</div>
</main> 




<script src="vendor/jQuery/jquery.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>