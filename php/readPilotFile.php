<?php 

	$file = fopen("../pilotsList.txt", "rt") or die("Невозможно открыть файл");
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
	<div class="col-10 mx-auto">
	<h1 class="text-center">Таблица Пилотов</h1>
	<table class="table table-bordered">
	  <thead>
	    <tr>	
	      <th scope="col">Имя</th>
	      <th scope="col">Фамилия</th>
	      <th scope="col">Отчество</th>
	      <th scope="col">Должность</th>
	      <th scope="col">Дату рождения</th>
	      <th scope="col">Адрес</th>
	      <th scope="col">Мобильный телефон</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
	  	for($i = 0; $str = fgets($file); $i++){  
			$array = explode("|",$str);
			list($namePilot,$surnamePilot,$middleNamePilot,$positionPilot,$birthdayPilot,$adressPilot,$telPilot) = $array;
	  	?>	
	    <tr>	
	      <td><?php echo $namePilot; ?></ts>
	      <td><?php echo $surnamePilot; ?></td>
	      <td><?php echo $middleNamePilot; ?></td>
	      <td><?php echo $positionPilot; ?></td>
	      <td><?php echo $birthdayPilot; ?></td>
	      <td><?php echo $adressPilot; ?></td>
	      <td><?php echo $telPilot; ?></td>
	    </tr>
		<?php } ?>
	  </tbody>
	</table>
	</div>


</body>
</html>

<?php
	fclose($file);
 ?>