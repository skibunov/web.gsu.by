<?php 
	session_start();
	if (isset($_POST['submit'])) {
		if (empty($_SESSION['email'])) {
			$_SESSION['email'] = $_POST['email'];
		}
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
    <div class="row">
      <div class="col-6 mx-auto Larger shadow p-5 mb-5" style="border-radius: 15px;">
        <div class="form-group">
          <label>Email: </label>
          <input type="text" class="form-control" value="<?php echo($_SESSION['email']); ?>">
        </div>
      </div>  
    </div>
  </div>
</div>
</main> 


<script src="../vendor/jQuery/jquery.js"></script>
<script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>