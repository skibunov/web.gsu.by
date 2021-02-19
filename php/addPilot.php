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

<?php if (isset($_GET['submit'])) { ?>
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
	    <tr>
	      <td><?php echo $namePilot; ?></ts>
	      <td><?php echo $surnamePilot; ?></td>
	      <td><?php echo $middleNamePilot; ?></td>
	      <td><?php echo $positionPilot; ?></td>
	      <td><?php echo $birthdayPilot; ?></td>
	      <td><?php echo $adressPilot; ?></td>
	      <td><?php echo $telPilot; ?></td>
	    </tr>
	  </tbody>
	</table>
		</div>
<?php } ?>