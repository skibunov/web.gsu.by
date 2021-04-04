<?php 
	include_once "../database/connection.php";
	if (isset($_GET['submit'])) {

		if(isset($_GET['namePilot']))
			$namePilot = $_GET['namePilot'];

		if(isset($_GET['surnamePilot']))
			$surnamePilot = $_GET['surnamePilot'];

		if(isset($_GET['middleNamePilot']) && $_GET['middleNamePilot'] != '')
			$middleNamePilot = $_GET['middleNamePilot'];
		else
			$middleNamePilot = "Не указано";

		if(isset($_GET['positionPilot']))
			$positionPilot = $_GET['positionPilot'];

		if(isset($_GET['birthdayPilot']))
			$birthdayPilot = $_GET['birthdayPilot'];

		if(isset($_GET['adressPilot']) && $_GET['adressPilot'] != '')
			$adressPilot = $_GET['adressPilot'];
		else
			$adressPilot = "Не указано";

		if(isset($_GET['telPilot']))
			$telPilot = $_GET['telPilot'];
	}
	$INSERT_QUERY = "INSERT INTO pilots (firstname, lastname, middlename, position, birthday, adress, phone) VALUES ('".$namePilot."', '".$surnamePilot."', '".$middleNamePilot."', '".$positionPilot."', '".$birthdayPilot."', '".$adressPilot."', '".$telPilot."')";
?>

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
	<div class="col-10 mx-auto p-5">
	<?php if (mysqli_query($conn, $INSERT_QUERY)) { ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
  		<strong>Успешно!</strong> Данные добавлены в базу данных
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  		</button>
	</div>
	<?php } else {  ?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>Не добавленно!</strong> Ошибка при добавлении в базу данных
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
	<?php } ?>	
	</div>
</body>
</html>
