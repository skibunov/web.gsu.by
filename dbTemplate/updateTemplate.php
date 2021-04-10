<meta charset="utf-8">
<?php 
	session_start();
	include_once '../database/connection.php';  

	if (isset($_POST['update'])) {
		$id = $_SESSION['id'];
		$firstname = $_POST['firstname']; 
		$lastname = $_POST['lastname'];
		$age = $_POST['age'];
		$email = $_POST['email'];


		$query = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', 
		age = '$age', email = '$email' WHERE id = '$id'";



		$res = mysqli_query($conn,$query);
		if (!$res) {
        	$_SESSION['errupdate'] = 'Проблемы с базой данных, запись не добавлена'; 
      	} 

      

      	header('Location: ../edit.php');


	}



 ?>