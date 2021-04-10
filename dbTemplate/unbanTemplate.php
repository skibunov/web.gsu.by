<?php 

	session_start();
	include_once "../database/connection.php";

	if (isset($_GET['id'])) {

		$id = $_GET['id'];

		$query = "UPDATE users SET ban = NOW() WHERE id  = '$id'";
		$res = mysqli_query($conn,$query);
		if (!$res) {
        	$_SESSION['err'] = 'Проблемы с базой данных, запись не добавлена'; 
      	} 


      	header('Location: ../admin.php');

	}



 ?>