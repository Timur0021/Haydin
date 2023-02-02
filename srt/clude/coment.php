<?php
include SITE_ROOT . '/srt/clude/comentaries.php';

?>
<link rel = "stylesheet" href = "style/style.css">
<div class="cpl-md-12 col-12 coment">
  <h3> Лишити комент </h3>
  <form action="<?=BASE_URL . "blog.php?post=$page"?>" method="post">
  <!--http://localhost/haydin/blog.php?post=51-->
     <input type="hidden" name="page" value="<?=$page;?>">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Електронна пошта</label>
      <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
   <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Вміст коменту</label>
      <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
   </div>
   <div class="col-12">
     <button type="submit" name="creatcom" class="btn btn-info">Відправити</button>
   </div>
  </form>
  <?php if(count($comen) > 0): ?>
   <div class="row all-comments">
      <h3 class="col-12"> Коментарі до постів </h3>
       <?php foreach($comen as $coment): ?>
	   <div class="one-coment col-12">
	      <span><?=$coment['email']?></span>
		  <span><?=$coment['created_date']?></span>
		  <div class="col-12 text">
		    <?=$coment['comment']?>
		  </div>
       </div>
        <?php endforeach; ?>
       <?php endif; ?>
    </div>
</div>