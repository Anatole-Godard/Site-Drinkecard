<nav>
    <h1> MENU </h1>
    <ul id="nav-mobile">
    	<li><a href="index.php">Home</a></li>
    	<li><a href="code.php">code</a></li>
    	<?php 
    	if(!empty($_SESSION['user'])) {
    		echo '<li><a href="#">Hello : ' . $_SESSION['user']['username'] . '</a></li>';
			echo '<li><a href="historique.php">Historique</a></li>';
			echo '<li><a href="logout.php">Logout</a></li>';
    	}else {
    		echo '<li><a href="login.php">Login</a></li>';
    	} 
    	?>
	</ul>
</nav>