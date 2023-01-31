<?php
include("../../path.php");
include("../controller/post.php");
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
	    <h2> Керування постами </h2>
	      <div class = 'id col-1'> ID </div>
		  <div class = 'title col-5'> Назва </div> 
		  <div class = 'author col-2'> Автор </div> 
		  <div class = 'del col-4'> Керувати </div>
	  </div>
	  <?php foreach($postsAdm as $key => $post): ?>
	  <div class = 'row post'>
	      <div class = 'id col-1'><?=$key + 1; ?></div>
		  <div class = 'title col-5'><?=$post['title']; ?></div> 
		  <div class = 'author col-2'><?=$post['username']; ?></div> 
		  <div class = 'red col-1'><a href = 'edit.php?id=<?=$post['id'];?>'> edid </a></div> 
		  <div class = 'del col-1'><a href = 'edit.php?del_id=<?=$post['id'];?>'> delete </a></div>
		  <?php if($post['status']): ?>
		  <div class = 'stat col-2'><a href = 'edit.php?publish=0&public_id=<?=$post['id'];?>'> unpublish </a></div>
		  <?php else: ?>
		  <div class = 'stat col-2'><a href = 'edit.php?publish=1&public_id=<?=$post['id'];?>'> publish </a></div>
		  <?php endif; ?>
	  </div>
	  <?php endforeach ?>
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