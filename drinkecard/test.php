<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>DrinkECard/login</title>

	<link href="css/DrinkECard.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
	
	<div class="grid-container">
		
		<?php require_once('inc/header.php'); ?>
		
		<div class="main">
			<form action="" method="post">
				<h1>Création du compte.</h1>
				<input type="text" placeholder="Login" name="Login">
				<input type="password" name="Password" placeholder="Password">
				<input type="submit" value="Envoyer">
			</form>

		</div>	
		<?php require_once('inc/nav.php'); ?>
		<?php require_once('inc/footer.php'); ?>
	</div>
</body>

</html>