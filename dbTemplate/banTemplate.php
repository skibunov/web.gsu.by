<?php 

	session_start();
	include_once "../database/connection.php";

	if (isset($_GET['ban']) and isset($_GET['id'])) {

		$ban = $_GET['ban'];
		$id = $_GET['id'];

		$query = "UPDATE users SET ban = DATE_ADD(NOW(), INTERVAL 1 $ban) WHERE id  = '$id'";
		$res = mysqli_query($conn,$query);
		if (!$res) {
        	$_SESSION['err'] = 'Проблемы с базой данных, запись не добавлена'; 
      	} 


      	header('Location: ../admin.php');

	}



 ?>