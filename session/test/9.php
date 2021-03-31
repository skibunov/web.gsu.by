<?php 
session_start();

if (empty($_SESSION['q9'])) {
  $_SESSION['q9'] = "";
}

if (isset($_GET['next'])) {
  $_SESSION['q9'] = $_GET['q9']; 
  header("Location: 10.php");
}

if (isset($_GET['preview'])) {
  $_SESSION['q9'] = $_GET['q9']; 
  header("Location: 8.php");
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
            <label>Настя обнаружила, что цвет ссылок меняется, когда они являются посещёнными. Какой CSS-код необходимо задать, чтобы цвет посещённых и непосещённых ссылок был одним и тем же:</label>
            <form>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" <?php echo $_SESSION['q6'] == "1" ? 'checked="checked"' : ''?> value="1">
                <label class="form-check-label">
                  a:link {color: yellow;}
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" <?php echo $_SESSION['q6'] == "2" ? 'checked="checked"' : ''?> value="2">
                <label class="form-check-label">
                  a:link, a:active {color: yellow;}
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" <?php echo $_SESSION['q6'] == "3" ? 'checked="checked"' : ''?> value="3">
                <label class="form-check-label">
                  a:link, a:visited {color: yellow;}
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" <?php echo $_SESSION['q6'] == "4" ? 'checked="checked"' : ''?> value="4">
                <label class="form-check-label">
                  a:active, a:visited {color: yellow;}
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