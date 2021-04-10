<meta charset="utf-8">
<?php 
  session_start(); 
  include_once '../database/connection.php'; 

  function generateSalt(){
    $salt = '';
    $saltLength = 8; //длина соли

    for($i=0; $i<$saltLength; $i++) {
      $salt .= chr(mt_rand(33,126)); //символ из ASCII-table
    }

    return $salt;
  }


  if (isset($_POST['reg'])) {
    $login = $_POST['login'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $err = array();
    
    if (strlen($login) < 4 or strlen($login) > 12) {
      $err[] = 'логин от 4 до 12 символов';
    }

    if (strlen($password) < 6 or strlen($password) > 10) {
      $err[] = 'пароль должен быть от 6 до 10 символов';
    }

    $logcheck = mysqli_query($conn, "SELECT `id` FROM `users` WHERE `login`='$login'");
    if(mysqli_num_rows($logcheck) > 0){
      $err[] = 'Пользователь с таким именем уже зарегистрирован!';
    }


    if (empty($err)) {
      $salt = generateSalt();
      $passwordmd5 = md5($password.$salt);

      $query = "INSERT INTO users(login,firstname,lastname,age,email,password,salt) 
      VALUES ('".$login."','".$firstname."','".$lastname."','".$age."','".$email."','".$passwordmd5."'
        ,'".$salt."')";

      if (!mysqli_query($conn,$query)) {
        $err[] = 'Проблемы с базой данных, запись не добавлена';  
      }


    }

    $_SESSION['err'] = $err;
    header('Location: ../registration.php');

  }



 ?>