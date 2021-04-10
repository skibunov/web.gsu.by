<?php 
	session_start();
	include_once '../database/connection.php';  

	if (isset($_POST['auth'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];

		$err = array();

		if (empty($login) or empty($password)) {
			$err[] = "Вы не ввели логин или пароль";
		}


		if (empty($err)) {
			
			$user = mysqli_query($conn,"SELECT * FROM users WHERE login = '".$login."' LIMIT 1");
			$user = mysqli_fetch_assoc($user);
			
			if (!empty($user)) {
				$salt = $user['salt'];
				if ($user['login']==$login and $user['password']==md5($password.$salt)) {

					$ban = mysqli_query($conn,"SELECT * FROM users WHERE login = '$login' and  NOW( ) > ban LIMIT 1");
					if (mysqli_num_rows($ban) <= 0) {
						$err[] = "Пользователь забанен до ".$user['ban'];
						$_SESSION['err'] = $err;
						header('Location: ../main.php');
						die();
					}

					$_SESSION['id'] = $user['id'];
					$_SESSION['login'] = $user['login'];
					$_SESSION['role'] = $user['role'];
					$_SESSION['ban'] = $user['ban'];

					$_SESSION['auth'] = true;

				} else {
					$err[] = "Логин или пароль не верны";
				}	
			} else {
				$err[] = "Пользователя не существует";
			}
		}

		$_SESSION['err'] = $err;

		date_default_timezone_set('UTC');
		setcookie("lastDate",date("m.d.y"),time()+3600,'/');


    	header('Location: ../main.php');

	}


 ?>