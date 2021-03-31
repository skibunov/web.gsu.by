<?php 
session_start();

if (empty($_SESSION['q5'])) {
  $_SESSION['q5'] = "";
}

if (isset($_GET['next'])) {
  $_SESSION['q5'] = $_GET['q5']; 
  header("Location: 6.php");
}

if (isset($_GET['preview'])) {
  $_SESSION['q5'] = $_GET['q5']; 
  header("Location: 4.php");
}


?>
<!doctype html>
<html lang="ru">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../vendor/bootstrap/dist/css/bootstrap.min.css">

  <title>Hello, world!</title>
</head>
<body>

  <main class="main">
    <div class="container">
      <div class="row">
        <div class="col-6 mx-auto Larger shadow p-5 mb-5" style="border-radius: 15px;">
          <div class="form-group">
            <label>Есть такой CSS-код во внешнем файле: p {color: blue;}. На странице написан такой HTML-код: p style="color: red;">текст/p>. Какого цвета будет "текст"?</label>
            <form>
              <div class="form-group">
                <input type="text" class="form-control" value="<?php echo($_SESSION['q5']); ?>" name="q5">
              </div>
              <div class="btn-group btn-block" role="group">
                <button type="submit" class="btn btn-primary" name="preview" value="Preview">Preview</button>
                <button type="submit" class="btn btn-secondary" name="next" value="Next">Next</button>
              </div>
            </form>
          </div>  
        </div>
      </div>
    </div>
  </main> 


  <script src="../../vendor/jQuery/jquery.js"></script>
  <script src="../../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>