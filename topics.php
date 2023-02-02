<?php
include("path.php");
include("admin/controller/categ.php");
$posts = selectAll('post', ['id_topic' => $_GET['id']]);
$topics = selectOne('categ', ['id' => $_GET['id']]);
$topSlider = selectTopFromPostOnIndex('post');

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

<!-- Carousel START -->
   
 

<!-- Carousel FINISH -->
	
<!-- Block main START -->

<div class = "container">
<div class = "content row">

<!-- Main Content -->

<div class = "main-content col-md-9 col-12">
    <h3> Пости з категорії <strong><?=$topics['name'];?></strong> </h3>
	<?php foreach($posts as $post): ?> 
	<div class = "post row">
	  <div class = "img col-12 col-md-4">
	    <img src = "<?=BASE_URL . 'images/img_post/' . $post['img']?>" alt = "<?=$post['title']?>" class = "img-thumbnail">
</div>
<div class = "post_text col-12 col-md-8">
<h3>
 <a href = "<?=BASE_URL . 'blog.php?post=' . $post['id'];?>"><?=substr($post['title'], 0, 120) . '...' ?></a>
 </h3>
 <i class = "far fa-user"> </i>
 <i class = "far- fa-calendar"> <?=$post['create_date'];?> </i>
 <p class = "preview-text">
	 <?=mb_substr($post['content'], 0, 150, 'UTF-8'). '...' ?>
 </p>
 </div>
</div>
<?php endforeach ?>
</div>

<!-- sidebar Content-->
<div class = "sidebar col-md-3 col-12">
<div class = "section search">
  <h3> Пошук </h3>
    <form action = "search.php" method = "post">
	  <input type = "text" name = "search-term" class = "text-input" placeholder = "Пошук...">
	</form>
</div>

<div class = "section topics">
   <h3> Категорії </h3>
     <ul>
        <?php foreach ($categ as $key => $topig): ?>
		<li>
		<a href = "<?=BASE_URL . 'topics.php?id=' . $topig['id'];?>"> <?=$topig['name'];?> </a>
		</li>
		<?php endforeach; ?>
	</ul>
</div>
    </div>
  </div>
</div>

<!-- Block main END -->

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
	

   
   


