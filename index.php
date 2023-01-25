<?php
include("path.php");
include("srt/database/db.php");
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
	<link rel = "stylesheet" href = "css/style.css">
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

<div class = "container">
 <div class = "row">
   <h2 class = "slider-title"> Топ опублікування </h2>
 </div>
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/hp.png" class="d-block w-100" alt="...">
      <div class="carousel-caption-hack carousel-caption d-none d-md-block">
        <h5><a href = "blog.php"> First slide label </a></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/lui.png" class="d-block w-100" alt="...">
      <div class="carousel-caption-hack carousel-caption d-none d-md-block">
        <h5><a href = "\"> Second slide label </a></h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/pietro.png" class="d-block w-100" alt="...">
      <div class="carousel-caption-hack carousel-caption d-none d-md-block">
        <h5><a href = "\"> Third slide label </a></h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<!-- Carousel FINISH -->
	
<!-- Block main START -->

<div class = "container">
<div class = "content row">

<!-- Main Content -->

<div class = "main-content col-md-9 col-12">
    <h3> Остання публікація </h3>
	
	<div class = "post row">
	  <div class = "img col-12 col-md-4">
	    <img src = "images/pietro.png" alt = "" class = "img-thumbnail">
</div>
<div class = "post_text col-12 col-md-8">
<h3>
 <a href = "#"> Класна публікація на тему людина і навколишнє середовище... </a>
 </h3>
 <i class = "far fa-user"> Ім'я Автора </i>
 <i class = "far- fa-calendar"> 7 Січня 2023 рік </i>
 <p class = "preview-text">
     Спасіння світу лежить у людському серці, у людській спроможності міркувати, в людській лагідності і у людській відповідальності. 
 </p>
 </div>
</div>

<div class = "main-content col-md-12 col-12">
<div class = "post row">
	  <div class = "img col-12 col-md-4">
	    <img src = "images/anderso.png" alt = "" class = "img-thumbnail">
</div>
<div class = "post_text col-12 col-md-8">
<h3>
 <a href = "#"> Фото - це мистецтво... </a>
 </h3>
 <i class = "far fa-user"> Ім'я Автора </i>
 <i class = "far- fa-calendar"> 7 Січня 2023 рік </i>
 <p class = "preview-text">
    Щастя в моментах
 </p>
 </div>
</div>
</div>
</div>
<!-- sidebar Content-->
<div class = "sidebar col-md-3 col-12">
<div class = "section search">
  <h3> Search </h3>
    <form action = "index.html" method = "post">
	  <input type = "text" name = "search-form" class = "text-input" placeholder = "Пошук...">
	</form>
</div>

<div class = "section topics">
   <h3> Пошук </h3>
     <ul>
        <li><a href = "#"> Друзі </a></li>
		<li><a href = "#"> Цікаві місця </a></li>
		<li><a href = "#"> poems </a></li>
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
	

   
   


