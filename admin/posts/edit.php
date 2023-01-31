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
	  <div class = 'row title-table'>
	    <h2> Редагування поста </h2>
	  </div>
	  <div class = 'row add-post'>
	   <div class="mb-3 сol-12 col-md-4 err">
	   <!-- Виводим масив з помилками -->
         <?php include '../../srt/help/error.php'; ?>
       </div>
	     <form action ='edit.php' method ='post' enctype='multipart/form-data'>
		   <input type="hidden" name="id" value="<?=$id;?>">
            <div class="col mb-4">
            <input value="<?=$post['title'];?>" name="title" type="text" class="form-control" placeholder="Title" aria-label="Назва статті">
            </div>
			
			<div class="col">
            <label for="editor" class="form-label">Вміст поста</label>
            <textarea name="content" id="editor" class="form-control" rows="6"><?=$post['content'];?></textarea>
            </div>
			
			<div class="input-group col mb-4 mt-4">
            <input name="img" type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
			
		<select name="topic" class="form-select" aria-label="Default select example">
	
        <?php foreach ($categ as $key => $topic): ?>
		  <option value="<?=$topic['id'];?>"><?=$topic['name'];?></option>
		<?php endforeach; ?>
        </select>
		<div class="form-check">
		<?php if(empty($publish) && $publish == 0): ?>
           <input name="publish" class="form-check-input" type="checkbox" id="flexCheckChecked">
           <label class="form-check-label" for="flexCheckChecked">
            Publish
           </label>
		<?php else: ?>
		<input name="publish" class="form-check-input" type="checkbox" id="flexCheckChecked" checked>
           <label class="form-check-label" for="flexCheckChecked">
            Publish
           </label>
		<?php endif; ?>
        </div>
		<div class="col col-6">
        <button name="button-add" class="btn btn-primary" type="submit">Зберегти</button>
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