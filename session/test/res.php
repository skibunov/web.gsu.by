<?php
 session_start();

 $res = 0;
 if ($_SESSION['q1'] == 4) {
 	$res++;
 }

 if ($_SESSION['q2'] == 3) {
 	$res++;
 }

 if ($_SESSION['q3'] == 4) {
 	$res++;
 }

 if ($_SESSION['q4'] == 4) {
 	$res++;
 }

 if ($_SESSION['q5'] == 2) {
 	$res++;
 }

 if ($_SESSION['q6'] == 3) {
 	$res++;
 }

 if ($_SESSION['q7'] == 1) {
 	$res++;
 }

  if ($_SESSION['q8'] == 3) {
 	$res++;
 }
   if ($_SESSION['q9'] == 1) {
 	$res++;
 }
    if ($_SESSION['q10'] == 1) {
  $res++;
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
  <main class="main">
    <div class="container">
      <div class="row">
        <div class="col-6 mx-auto Larger shadow p-5 mb-5" style="border-radius: 15px;">
          <h1>Ваш результат - <?php echo($res); ?></h1>
        </div>
      </div>
    </div>
  </main> 