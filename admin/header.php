<header class = "container-fluid">
	  <div class = "container">
	    <div class = "row">
		  <div class = "col-4">
		    
			<a href ="<?php echo BASE_URL ?>"> <h1> My Site</h1> </a> 
			
		</div>
	    <nav class = "col-8">
		<ul>
		  <li>  
			<a href = "#">
			    <i class="fa-solid fa-user"></i> 
			    <?php echo $_SESSION['login']; ?>
			</a>
		  </li>
            <li>
			<a href = "<?php echo BASE_URL . "logout.php"; ?>"> Вихід </a>
			</li>
	    </ul>
		</nav>
	</div>
</div>
</header>