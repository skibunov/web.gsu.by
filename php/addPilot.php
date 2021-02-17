<?php 

	if(isset($_POST['namePilot']))
		$namePilot = $_POST['namePilot'];

	if(isset($_POST['surnamePilot']))
		$surnamePilot = $_POST['surnamePilot'];

	if(isset($_POST['middleNamePilot']))
		$middleNamePilot = $_POST['middleNamePilot'];

	if(isset($_POST['positionPilot']))
		$positionPilot = $_POST['positionPilot'];

	if(isset($_POST['birthdayPilot']))
		$birthdayPilot = $_POST['birthdayPilot'];

	if(isset($_POST['adressPilot']))
		$adressPilot = $_POST['adressPilot'];

	if(isset($_POST['telPilot']))
		$telPilot = $_POST['telPilot'];


	// echo json_encode(array(
 //    	'namePilot' => $namePilot,
 //    	'surnamePilot' => $surnamePilot,
 //    	'middleNamePilot' => $middleNamePilot,
 //    	'positionPilot' => $positionPilot,
 //    	'birthdayPilot' => $birthdayPilot,
 //    	'adressPilot' => $adressPilot,
 //    	'telPilot' => $telPilot
	// ));


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
	
	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th scope="col">Имя</th>
	      <th scope="col">Фамилия </th>
	      <th scope="col">Отчество </th>
	      <th scope="col">Должность </th>
	      <th scope="col">Дату рождения</th>
	      <th scope="col">Адрес</th>
	      <th scope="col">Мобильный телефон</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th><?php echo $namePilot; ?></th>
	      <td><?php echo $surnamePilot; ?></td>
	      <td><?php echo $middleNamePilot; ?></td>
	      <td><?php echo $positionPilot; ?></td>
	      <td><?php echo $birthdayPilot; ?></td>
	      <td><?php echo $adressPilot; ?></td>
	      <td><?php echo $telPilot; ?></td>
	    </tr>
	  </tbody>
	</table>


</body>
</html>
