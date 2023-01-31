<?php
include("path.php");
include("srt/controller/users.php");
?>



<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HAYDIN</title>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/681833e5f2.js" crossorigin="anonymous"></script>
	
	<!-- Custom styling -->
	<link rel = "stylesheet" href = "style/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family= Comfortaa:wght@300 & display=swap" rel="stylesheet">
  </head>
  <body>
 
	<!-- HEADER -->
	 <?php
    include("srt/clude/header.php");
	?>
    <!-- HEADER -->
	
<!-- FORM REGISTRATION START -->
<div class = "container reg_form"> 
<form class = "row justify-content-md-center" method = "post" action = "reg.php">
<h3> Форма регістрації </h3>
<div class = "w-100"></div>
<div class="mb-3 сol-12 col-md-4">
  <label for="formGroupExampleInput" class="form-label">Ваш логін</label>
  <input name = "login" value = "<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Виведіть ваш логін...">
</div>
  <div class = "w-100"></div>
  <div class="mb-3 сol-12 col-md-4">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name = "mail" value = "<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Виведіть ваш емейл...">
  </div>
  <div class = "w-100"></div>
  <div class="mb-3 сol-12 col-md-4">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input name = "pass-first" type="password" class="form-control" id="exampleInputPassword1">
  </div>
   <div class = "w-100"></div>
   <div class="mb-3 сol-12 col-md-4">
    <label for="exampleInputPassword2" class="form-label">Повторіть пароль</label>
    <input name = "pass-second" type="password" class="form-control" id="exampleInputPassword2">
  </div>
  <div class = "w-100"></div>
  <div class="mb-3 сol-12 col-md-4">
    <button type="submit" name='button-reg'  class="btn btn-secondary" name = "button-reg">Реєстрація</button>
	<a href = "log.php"> Увійти </a>
  </div>
</form>
</div>
<!-- FORM REGISTRATION START -->

    <!-- FOOTER -->
     <?php
     include("srt/clude/footer.php");
     ?>
    <!-- FOOTER -->
		
	
	<!-- Optional JavaScript: choose one of the two -->
	
	<!-- Optional 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
	
	
	
	<!--
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    -->
  </body>
</html>