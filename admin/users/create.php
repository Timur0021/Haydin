<?php
include("../../path.php");
include("../controller/user.php");
?>
<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/681833e5f2.js" crossorigin="anonymous"></script>
	
	<!-- Custom styling -->
	<link rel="stylesheet" href="../css/admin.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family= Comfortaa:wght@300 & display=swap" rel="stylesheet">
	<title>HAYDIN</title>
  </head>
  <body>
  
  
<!-- header -->
<?php include('../header.php');?>
<!-- header -->

<div class = 'container'>
   <?php include('../sidebar.php'); ?>
    <div class = 'posts col-9'>
	<div class = 'button-row'>
		<a href = 'posts.php' name = 'button' type="button" class="col-2 btn btn-success"> Створити  </button></a>
		<a href = 'index.php' name = 'button' type="button" class="col-2 btn btn-danger"> Керувати  </button></a>
	</div>	
	  <div class = 'row title-table'>
	    <h2> Додати користувача </h2>
	  </div>
	  <div class = 'row add-post'>
	  <div class="mb-3 сol-12 col-md-4 err">
	   <!-- Виводим масив з помилками -->
         <?php include '../../srt/help/error.php'; ?>
       </div>
	  <form action = 'create.php' method = 'post'>
	  <div class="col">
      <label for="formGroupExampleInput" class="form-label">Ваш логін</label>
      <input name = "login" value = "<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Виведіть ваш логін...">
     </div>
   
     <div class="col">
       <label for="exampleInputEmail1" class="form-label">Email</label>
       <input name = "mail" value = "<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Виведіть ваш емейл...">
     </div>
    
     <div class="col">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input name = "pass-first" type="password" class="form-control" id="exampleInputPassword1">
      </div>
  
      <div class="col">
       <label for="exampleInputPassword2" class="form-label">Повторіть пароль</label>
       <input name = "pass-second" type="password" class="form-control" id="exampleInputPassword2">
     </div>
	  <input name="admin" class="form-check-input" value="1" type="checkbox" id="flexCheckChecked">
           <label class="form-check-label" for="flexCheckChecked">
            Admin?
           </label>
		<div class="col">
        <button name="create-user" class="btn btn-primary" type="submit">Добавити пост</button>
        </div>
		 </form>
	  </div>
	</div>
</div>

<!-- footer -->  
<?php include('../../srt/clude/footer.php');?> 	 
<!-- footer -->
   
		
	
	<!-- Optional JavaScript: choose one of the two -->
	
	<!-- Optional 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
	<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
	
	
	<!--
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    -->
	
	<script src="../../js/script.js"></script>
  </body>
</html>