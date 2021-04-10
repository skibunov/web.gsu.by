<div class="col-12 col-sm-12 col-md-12 col-lg-3 text-sm-center mx-auto">
    <h3>Авторизация</h3>
    <form method="post" action="../dbTemplate/authTemplate.php">
      <div class="form-group">
        <input type="text" name="login"  class="form-control" placeholder="Логин...">
      </div>
      <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Пароль...">
      </div>
      <button type="submit" class="btn btn-primary btn-block" name="auth">ВОЙТИ</button>
    </form>
    <center><a href="../registration.php">Регистрация</a></center>
    <?php 
      if (isset($_SESSION['err']) || !empty($_SESSION['err'])) {
        echo("<div class = 'bg-warning panel'>");
        echo("<b>Ошибка Авторизации:</b><br>");
        foreach ($_SESSION['err'] as $err) {
          echo($err."<br>");
        }
        echo("</div>");
        unset($_SESSION['err']);
    }else {
        unset($_SESSION['err']);
    }
    ?> 
</div>