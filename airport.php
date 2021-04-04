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
    <a class="flex-sm-fill text-sm-center nav-link" href="plane.php">Самолет</a>
    <a class="flex-sm-fill text-sm-center nav-link active" href="airport.php">Аэропорт</a>
  </nav>
  <header class="jumbotron text-center" style="background-color: #f8f9fa;">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
         <h1>Аэропорт</h1>
         <p>Форма для заполнения аэропорта!</p>
          <div class="btn-toolbar" role="toolbar" style="justify-content: center; display: flex;" >
          <div class="btn-group mr-2" role="group">
            <a type="submit" href="php/readAirportsFile.php" class="btn btn-secondary">Просмотр содержимого файла</a>
          </div>
          <div class="btn-group mr-2" role="group">
            <a type="submit" href="php/sortAirportsFile.php" class="btn btn-secondary">Сортировка данных</a>
          </div>
          <div class="btn-group" role="group">
            <a type="submit" href="php/searchAirportsFile.php" class="btn btn-secondary">Поиск данных</a>
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
        <form action="php/addAirport.php">
          <div class="form-group">
            <label>Название аэропорта: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="Air['nameAir']" required>
          </div>
          <div class="form-group">
            <label>Количество взлетных полос: <span class="text-danger">*</span></label>
            <input type="number" class="form-control" size="0" name="Air['countAir']" min="1" value="1" required>
          </div>
          <div class="form-group">
            <label>Местоположение аэропорта: <span class="text-danger">*</span></label>
            <select class="form-control" name="Air['countryAir']" required>
              <option>США</option>
              <option>ЕВРОПА</option>
              <option>РОССИЯ</option>
              <option>БЕЛАРУСЬ</option>
            </select>
          </div>

          <div class="form-group">
            <label>Дата основания аэропорта: <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="Air['dateAir']" required>
          </div>

          <div class="form-group">
            <label>Количество самолётов: <span class="text-danger">*</span></label>
            <input type="number" class="form-control" size="0" name="Air['countPlaneAir']" min="1" value="1" required>
          </div>
          
          <div class="form-group">
            <label>Количество рейсов, осуществляемых данным аэропортом: <span class="text-danger">*</span></label>
            <input type="number" class="form-control" size="0" name="Air['countFlightAir']" min="1" value="1" required>
          </div>

          
          <div class="form-group">
            <label>Сезоны работаспособность аэропорта: </label>
            <div class="form-check">
              <input class="form-check-input" id="spring" type="checkbox" value="Весна" name="Air['season']['spring']">
              <label class="form-check-label" for="spring">
                Весна
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" id="autumn" type="checkbox" value="Осень" name="Air['season']['autumn']">
              <label class="form-check-label" for="autumn">
                Осень
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" id="winter" type="checkbox" value="Зима" name="Air['season']['winter']">
              <label class="form-check-label" for="winter">
                Зима
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" id="summer" type="checkbox" value="Лето" name="Air['season']['summer']">
              <label class="form-check-label" for="summer">
                Лето
              </label>
            </div>
          </div>


          <div class="btn-group btn-block" role="group">
            <button type="submit" class="btn btn-primary">Добавить пилота</button>
            <button type="submit" formaction="php/addAirportFile.php" value="Запись в файл" name="writeFile" class="btn btn-secondary">Запись в файл</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</main> 


<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>