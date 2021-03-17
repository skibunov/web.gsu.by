<?php include 'cookies.php'; ?>
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
         <h1>Cookies</h1>
         <div class="badge badge-primary">
          <h6>Вы посетили наш сайт <?php echo $num; ?> раз!</h6>
          <h6>Дата последнего посещения <?php echo $data_res; ?> минут</h6>
        </div>
      </div>
    </div>
  </div>
</header>

<main class="main">
  <div class="container">
    <div class="row">
       <div class="col-6 mx-auto Larger shadow p-5 mb-5 banner" style="border-radius: 15px;">
        <form>
          <button type="submit" name="banner" class="btn btn-primary">Убрать баннер</button>
        </form>
       </div>
    </div>

    <div class="row">
      <div class="col-6 mx-auto Larger shadow p-5 mb-5" style="border-radius: 15px;">
        <?php if (isset($_COOKIE['birthday'])) {
          echo "<p>До даты Рождения - ".$_COOKIE['birthday']." </p>";
        } ?>
        <form>
          <div class="form-group">
            <label>Введите дату рождения: <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="birthday" required>
          </div>
          <button type="submit" value="Установить" name="submit1" class="btn btn-primary">Установить</button>
        </form>
      </div>
    </div>  

    <div class="row">
      <div class="col-6 mx-auto Larger shadow p-5 mb-5" style="border-radius: 15px;">
        <form>
          <div class="form-group">
            <label>Дизайн сайта: <span class="text-danger">*</span></label>
            <select class="form-control" name="them" required>
              <option selected value="blue">Синий</option>
              <option value="grey">Серый</option>
            </select>
          </div>
          <button type="submit" value="Установить" name="submit2" class="btn btn-primary">Установить</button>
        </form>
      </div>

    </div>
  </div>
</div>
</main> 


<script src="../vendor/jQuery/jquery.js"></script>
<script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<?php if (isset($_COOKIE['them']) && $_COOKIE['them'] == "grey"): ?>
   <script>
    $(".badge").addClass("badge badge-secondary");
 </script>
<?php endif ?>

<?php if (isset($_COOKIE['banner'])): ?>
  <script>
    $(".banner").hide();
  </script>
<?php endif ?>
</body>
</html>