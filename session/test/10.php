<?php 
session_start();

if (empty($_SESSION['q10'])) {
  $_SESSION['q10'] = "";
}

if (isset($_GET['next'])) {
  $_SESSION['q10'] = $_GET['q10']; 
  header("Location: res.php");
}

if (isset($_GET['preview'])) {
  $_SESSION['q10'] = $_GET['q10']; 
  header("Location: 9.php");
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
            <label>Есть такой CSS-код: body {font-size: 14pt;} p {font-size: 2em;}. Какой размер текста будет в теге <p>:</label>
            <form>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" <?php echo $_SESSION['q10'] == "1" ? 'checked="checked"' : ''?> value="1">
                <label class="form-check-label">
                  28pt
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" <?php echo $_SESSION['q10'] == "2" ? 'checked="checked"' : ''?> value="2">
                <label class="form-check-label">
                  16pt
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" <?php echo $_SESSION['q10'] == "3" ? 'checked="checked"' : ''?> value="3">
                <label class="form-check-label">
                  7pt
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" <?php echo $_SESSION['q10'] == "4" ? 'checked="checked"' : ''?> value="4">
                <label class="form-check-label">
                  12pt
                </label>
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