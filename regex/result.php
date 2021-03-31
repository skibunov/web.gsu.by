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

<?php 
		if (isset($_POST['submit'])) {
			$file = file($_POST['file']);
			$str = implode(" ", $file);

			if ($_POST['chan'] == 1) {
				preg_match_all("/([А-ЯёЁ][а-яёЁ]*\s+[А-ЯёЁ][а-яёЁ]*\s+[А-ЯёЁ][а-яёЁ]*|[А-ЯёЁ][а-яёЁ]*\s+[А-Я][а-яёЁ]*)/u",$str,$matches,PREG_PATTERN_ORDER);
				for ($j = 0; $j < count($matches[0]); $j++) { 
					echo($matches[0][$j]."<br>");
				}	
			} else {
				echo preg_replace("/(?<=\d)(?=(\d{3})+(?!\d))/u",$_POST['input'],$str);	
			}
			
		}


		




?>