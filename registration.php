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
  <div class="col-6 col-md-6 mx-auto  Larger shadow p-5 mb-5" style="border-radius: 15px;">
    <h3 class="text-center">Регистрация</h3>
    <form action="dbTemplate/registrationTemplate.php" method="POST">
        <div class="form-group">
            <label>Логин: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="login" required>
        </div> 
        <div class="form-group">
            <label>Имя: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="firstname" required>
        </div>
        <div class="form-group">
            <label>Фамилия: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="lastname" required>
        </div> 
         <div class="form-group">
            <label>Возраст: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="age" required>
        </div>
         <div class="form-group">
            <label>Email: <span class="text-danger">*</span></label>
            <input type="mail" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label>Пароль: <span class="text-danger">*</span></label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="reg">РЕГИСТРАЦИЯ</button>
        <br>
        <?php 
          if (isset($_SESSION['err']) || !empty($_SESSION['err'])) {
            echo("<div class = 'bg-warning panel'>");
            echo("<b>Ошибка регистрации:</b><br>");
            foreach ($_SESSION['err'] as $err) {
              echo($err."<br>");
            }
            echo("</div>");
            unset($_SESSION['err']);
          }
          ?>      
    </form>
  </div>



  <script src="vendor/jQuery/jquery.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
