<?php 

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

 ?>


<?php if (isset($_GET['writeFile'])) {
	$file = fopen("../pilotsList.txt", "at") or die("Невозможно открыть файл");

	$temp = $namePilot."|".$surnamePilot."|".$middleNamePilot."|".$positionPilot."|".$birthdayPilot."|".$adressPilot."|".$telPilot."\n";

	fputs($file,$temp);
	fclose($file);
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
	<div class="alert alert-success alert-dismissible fade show" role="alert">
  		<strong>Успешно!</strong> Данные добавлены в файл
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  		</button>
	</div>
	</div>
</body>
</html>

<?php } ?>