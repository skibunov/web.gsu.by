<?php 

	if (isset($_POST['kyp'])) {
		if (!isset($_COOKIE['basket'])) {
			setcookie("basket",$_POST['kyp'],time()*36000);
			header("Refresh:0");
		}else{
			setcookie("basket",$_COOKIE['basket'].",".$_POST['kyp'],time()*36000);
			header("Refresh:0");
		}
	}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.min.css">
 	<title>Document</title>
 </head>
 <body>	
 	<div class="container">
 	<div class="row">
 	<?php 
 	$sum = 0;
 	if (isset($_COOKIE['basket']))
 		$arr = explode(",",$_COOKIE['basket']); 
 	for ($i = 0; $i < count($arr); $i++) { $sum = $sum + $arr[$i]*100;?>
 	<div class="col-3">
        <div class="card">
          <img src="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title <?php echo $arr[$i] ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>      
     </div>
 	<?php  } ?>
 	<?php echo "Cумма: ".$sum ?>
 	</div>
 	</div>
 </body>
 </html>