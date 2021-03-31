<?php include_once 'items.php'; ?>
<?php 
	session_start();

	$arr = array();
	if (isset($_SESSION['item'])) {
		$arr = explode(",",$_SESSION['item']); 
	}
	
	$sum = 0;
	foreach ($arr as $value) {
		$sum = $item[$value - 1]["cost"] + $sum;
	}


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

<main class="main">
  <div class="container">
  	<h2>Корзина (Сумма: <?php echo($sum); ?>)</h2>
      <div class="row mb-5">
          <?php foreach ($arr as $value) { ?>
          <div class="col-4 mb-5">
            <div class="card">
              <img class="card-img-top" src="<?php echo($item[$value - 1]["img"]) ?>" alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title"><?php echo($item[$value - 1]["name"]) ?></h3>
                <p class="card-text"><?php  echo($item[$value - 1]["description"]) ?></p>
                <p class="card-text"><input type="text" class="form-control" value="<?php echo($item[$value - 1]["cost"]) ?>" disabled></p>
              </div>
            </div>   
          </div>
          <?php } ?>  
      </div>
  </div>
</div>
</main> 


<script src="../vendor/jQuery/jquery.js"></script>
<script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>