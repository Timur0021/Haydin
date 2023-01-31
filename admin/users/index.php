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
    <div class = 'category col-9'>
	<div class = 'button-cat'>
		<a href = 'create.php' name = 'button' type="button" class="col-2 btn btn-success"> Створити </button></a>
		<a href = 'index.php' name = 'button' type="button" class="col-2 btn btn-danger"> Керувати </button></a>
	</div>	
	  <div class = 'row title-table'>
	    <h2> Користувачі </h2>
		<div class = 'col-1'>ID</div>
		<div class = 'col-5'>Login</div>
		<div class = 'col-2'>Role</div>
		<div class = 'col-4'>Manage</div>
	  </div>
	  <?php foreach($users as $key => $user): ?>
	  <div class = 'row post'>
	    <div class = 'col-1'><?=$user['id'];?></div>
		 <div class = 'col-2'><?=$user['username'];?></div>
		<div class = 'col-3'><?=$user['email'];?></div>
		<?php if($user['admin'] == 1): ?>
		<div class = 'col-2'>Admin</div>
		<?php else: ?>
		<div class = 'col-2'>User</div>
		<?php endif; ?>
		<div class = 'col-2'><a href = "edit.php?edit_id=<?=$user['id'];?>">edit</a></div>
		<div class = 'col-2'><a href = "index.php?delete_id=<?=$user['id'];?>">delete</a></div>
	  </div>
	     <?php endforeach; ?>
	  </div>
	</div>


<!-- footer -->  
<?php include('../../srt/clude/footer.php');?> 	 
<!-- footer -->
   
		
	
	<!-- Optional JavaScript: choose one of the two -->
	
	<!-- Optional 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
	
	
	
	<!--
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    -->
	
	
  </body>
</html>