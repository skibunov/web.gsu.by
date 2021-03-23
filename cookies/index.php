<?php include_once 'cookies.php'; ?>
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
          <h6>Дата последнего посещения <?php echo $correctdate; ?> минут</h6>
        </div>
      </div>
    </div>
  </div>
</header>

<main class="main">
  <div class="container">
    <?php if (!isset($_COOKIE['banner'])) { ?>
    <div class="row">
       <div class="col-6 mx-auto Larger shadow p-5 mb-5 banner" style="border-radius: 15px;">
        <form method="post">
          <button type="submit" name="banner" class="btn btn-primary">Убрать баннер</button>
        </form>
       </div>
    </div>
    <?php  } ?>

    <div class="row">
      <div class="col-6 mx-auto Larger shadow p-5 mb-5" style="border-radius: 15px;">
        <?php if (isset($_COOKIE['birthday'])) {
          if ($tmp->days == 0) {
            echo "У вас сегодня день Рождения!"; 
          }else{
            echo "<p>До даты Рождения - ".$tmp->days." </p>";
          }
          
        } ?>
        <form method="post">
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
        <form method="post">
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



      <form method="post" action="basket.php">
      <div class="row">
      <div class="col-3">
        <div class="card">
          <img src="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title [1]</h5>
            <p class="card-text"><input  type="text" name="summ" value="100" disabled></p>
            <button type="submit" class="btn btn-primary" value="1" name="kyp">Купить</button>
          </div>
        </div>      
      </div>
      <div class="col-3">
        <div class="card">
          <img src="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title [2]</h5>
            <p class="card-text"><input  type="text" name="summ" value="200" disabled></p>
            <button type="submit" class="btn btn-primary" value="2" name="kyp">Купить</button>
          </div>
        </div>      
      </div>
      <div class="col-3">
        <div class="card">
          <img src="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title [3]</h5>
            <p class="card-text"><input  type="text" name="summ" value="300" disabled></p>
            <button type="submit" class="btn btn-primary" value="3" name="kyp">Купить</button>
          </div>
        </div>      
      </div>
      <div class="col-3">
        <div class="card">
          <img src="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title [4]</h5>
            <p class="card-text"><input  type="text" name="summ" value="400" disabled></p>
            <button type="submit" class="btn btn-primary" value="4" name="kyp">Купить</button>
          </div>
        </div>      
      </div>
      <div class="col-3">
        <div class="card">
          <img src="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title [5]</h5>
            <p class="card-text"><input  type="text" name="summ" value="500" disabled></p>
            <button type="submit" class="btn btn-primary" value="5" name="kyp">Купить</button>
          </div>
        </div>      
      </div>
      <div class="col-3">
        <div class="card">
          <img src="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title [6]</h5>
            <p class="card-text"><input  type="text" name="summ" value="600" disabled></p>
            <button type="submit" class="btn btn-primary" value="6" name="kyp">Купить</button>
          </div>
        </div>      
      </div>
      <div class="col-3">
        <div class="card">
          <img src="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title [7]</h5>
            <p class="card-text"><input  type="text" name="summ" value="700" disabled></p>
            <button type="submit" class="btn btn-primary" value="7" name="kyp">Купить</button>
          </div>
        </div>      
      </div>
      <div>
    </form>

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

</body>
</html>