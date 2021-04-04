<?php 
session_start();

if (empty($_SESSION['q7'])) {
  $_SESSION['q7'] = "";
}

if (isset($_GET['next'])) {
  $_SESSION['q7'] = $_GET['q7']; 
  header("Location: 8.php");
}

if (isset($_GET['preview'])) {
  $_SESSION['q7'] = $_GET['q7']; 
  header("Location: 6.php");
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
            <label>Какое принципиальное отличие селектора ID от селектора CLASS?</label>
            <form>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" <?php echo $_SESSION['q7'] == "1" ? 'checked="checked"' : ''?> value="1">
                <label class="form-check-label">
                  CLASS должен быть уникальным на странице, а одинаковый ID может быть у нескольких элементов.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" <?php echo $_SESSION['q7'] == "2" ? 'checked="checked"' : ''?> value="2">
                <label class="form-check-label">
                  Никакого отличия между ними нет.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" <?php echo $_SESSION['q7'] == "3" ? 'checked="checked"' : ''?> value="3">
                <label class="form-check-label">
                  ID должен быть уникальным на странице, а одинаковый CLASS может быть у нескольких элементов.
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" <?php echo $_SESSION['q7'] == "4" ? 'checked="checked"' : ''?> value="4">
                <label class="form-check-label">
                  Разница только в наборе свойств, который может быть использован для этих селекторов. Например, для ID нельзя задавать свойство border, а для CLASS можно.
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