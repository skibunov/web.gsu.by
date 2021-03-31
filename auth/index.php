<?php 
	session_start();
	$item = json_decode(file_get_contents("bd.json"),true);

	$msgs = [];
	if (isset($_POST['submit'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];
		$passwordConfirm = $_POST['passwordConfirm'];
		if ($passwordConfirm != $password) {
			$msgs['err'] = "Не верные пароли";
		}

		if (empty($msgs['err'])) {
			foreach ($item as $key => $value) {
				if ($value['login'] == $login) {
					if ($value['password'] == $password) {
						$_SESSION['login'] = $value['login'];
						$_SESSION['role'] = $value['role'];
						$_SESSION['auth'] = true;
	 				}
				}
			}
		}
		if (empty($_SESSION['login']) || empty($_SESSION['role']) || empty($_SESSION['auth'])) {
			$msgs['err'] = "Не верные пароли и/или логин";
		}



		if (empty($msgs['err'])) {
			header("Location: ../index.php");
		}

	}


 ?>
<!doctype html>
<html lang="ru">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../vendor/bootstrap/dist/css/bootstrap.min.css">

  <title>Hello, world!</title>
</head>
<body>

  <main class="main">
    <div class="container">
      <div class="row">
        <div class="col-6 mx-auto Larger shadow p-5 mb-5" style="border-radius: 15px;">
          <div class="form-group">
            <form method="POST">
         		<div class="form-group">
            		<label>Логин <span class="text-danger">*</span></label>
            		<input type="text" name="login" class="form-control" required>
          		</div>
          		<div class="form-group">
            		<label>Пароль <span class="text-danger">*</span></label>
            		<input type="password" name="password" class="form-control" required>
          		</div>
          		<div class="form-group">
            		<label>Подтверждение Пароля <span class="text-danger">*</span></label>
            		<input type="password" name="passwordConfirm" class="form-control" required>
          		</div>

          		<div class="form-group">
          			<button type="submit" name="submit" class="btn btn-primary btn-block">Авторизация</button>
          		</div>
            </form>
            <?php if (isset($msgs['err'])) {
            	echo("<p>".$msgs['err']."</p>");
            } ?>
          </div>  
        </div>
      </div>
    </div>
  </main> 


  <script src="../../vendor/jQuery/jquery.js"></script>
  <script src="../../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>