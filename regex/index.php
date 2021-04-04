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
            <form method="POST" action="result.php">
              <div class="form-group">
                <div class="custom-file">
                  <input name="file" type="file" class="custom-file-input" id="validatedCustomFile" required="" accept=".txt" aria-describedby="fileHelp" lang="ru" required>
                  <label class="custom-file-label" for="validatedCustomFile">Добавить файл</label>
                </div>
              </div>
              <div class="form-group">
                <select class="form-control" required name="chan">
                  <option disabled value="" selected>Выбор</option>
                  <option value="1">Первое задание</option>
                  <option value="2">Второе задание</option>
                </select>
              </div>

              <div class="work"></div>
              <button type="submit" class="btn btn-primary w-100" name="submit" value="Next">Отправить</button>
            </form>
          </div>  
        </div>
      </div>
    </div>
  </main> 

<footer class="footer text-muted py-5 bg-light ">
  <div class="container">
    <p class="mt-0 mb-0">
      <a href="mailto:admin@artifakt.org"><i class="fas fa-envelope fa-lg text-dark"></i></a>
    </p>
    <p class="mb-0 mt-0">© 2020 Copyright <span class="text-dark">Скибунов Андрей</span>.</p>
  </div>
</footer>


  <script src="../../vendor/jQuery/jquery.js"></script>
  <script src="../../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  $('select').on('change', function() {
    if (this.value == 1) {
      accept = '<p>В заданном тесте выбрать все сочетания ФИО людей – 2 или 3 слова начинаются с большой буквы и между ними нет знаков препинания. Могут присутствовать как инициалы так и полные имя отчество.</p>';
      $('.work').html(accept);
    } else if (this.value == 2){

      accept = '<p>Файл представляет собой числа разделённые «;». Разделить их на разряды символом, указанным в input.</p><div class="form-group"><input type="text" class="form-control" name="input"></div>';
      $('.work').html(accept);
    }
  });



  </script>


</body>
</html>