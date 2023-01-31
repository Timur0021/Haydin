<?php if(count($errmsg) > 0): ?>
<ul>
   <?php foreach($errmsg as $error): ?>
     <li><?=$error; ?></li>
    <?php endforeach; ?>
</ul>
  <?php endif; ?>