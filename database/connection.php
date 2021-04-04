<?php 

	$servername = "localhost";
	$username = "root";
	$password = "usbw";
	$dbname = "skibunov";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$dbname) or die("Connection failed");
	mysqli_set_charset($conn, 'utf8');

 ?>