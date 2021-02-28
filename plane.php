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
         <p>Форма для заполнения самолета!</p>
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
       </div>
     </div>
   </div>
 </header>

 <main class="main">
  <div class="container">
    <div class="row">
      <div class="col-6 mx-auto Larger shadow p-5 mb-5" style="border-radius: 15px;">
        <form action="php/addPlane.php">
          <div class="form-group">
            <label>Номер самолета: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="numberPlane" autofocus required>
          </div>
          <div class="form-group">
            <label>Модель самолета: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="modelPlane" required>
          </div>
          <div class="form-group">
            <label>Количество мест: <span class="text-danger">*</span></label>
            <input type="number" class="form-control" size="0" name="countPlane" min="1" value="1" required>
          </div>
          <div class="form-group">
            <label>Проверка работоспособности: <span class="text-danger">*</span></label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="controlPlane" value="Прошел проверку" id="truePlane" required>
              <label class="form-check-label" for="truePlane">
                Прошел проверку
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="controlPlane" value="Выявлены технические ошибки" id="falsePlane" required>
              <label class="form-check-label" for="falsePlane">
                Выявлены технические ошибки
              </label>
            </div>
          </div>

          <div class="form-group">
            <label>Страна производства: <span class="text-danger">*</span></label>
            <select class="form-control" name="countryPlane" required>
              <option value="США">США</option>
              <option value="ЕВПРОПА">ЕВРОПА</option>
              <option value="РОССИЯ">РОССИЯ</option>
              <option value="БЕЛАРУСЬ">БЕЛАРУСЬ</option>
            </select>
          </div>

          <div class="form-group">
            <label>Год выпуска: <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="datePlane" required>
          </div>

          <div class="form-group">
            <label>Типы рейсов: <span class="text-danger">*</span></label>
            <select multiple class="form-control" name="flightsPlane[]" required>
              <option value="Междунородные рейсы">Междунородные рейсы</option>
              <option value="Межгородние рейсы">Межгородние рейсы</option>
            </select>
          </div>

          <div class="btn-group btn-block" role="group">
            <button type="submit" class="btn btn-primary">Добавить самолет</button>
            <button type="submit" formaction="php/addPlaneFile.php" value="Запись в файл" name="writeFile" class="btn btn-secondary">Запись в файл</button>
          </div>


      </form>
    </div>
  </div>
</div>
</main> 


<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>