<meta charset="utf-8">
<?php 
	session_start();
	include_once "../database/connection.php";

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = "DELETE FROM users WHERE id = '$id'";

		$res = mysqli_query($conn,$query);
		if (!$res) {
        	$_SESSION['err'] = 'Проблемы с базой данных, запись не добавлена'; 
      	} 

	}

	header('Location: ../admin.php');


 ?>