<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>DrinkECard/code</title>

	<link href="css/DrinkECard.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/highlight/styles/Obsidian.css">
	<script src="css/highlight/highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>

</head>
<body>
	
	<div class="grid-container">

		<?php require_once('inc/header.php'); ?>
		
		<div class="main code"> 
			<h1>Le PHP de la page login</h1>
		<pre><code class="php">

session_start();

if (!empty($_SESSION['user'])) {
	header('location:index.php');
}

$message = null;

if (!empty($_POST)) {
	if (!empty($_POST['Login']) && !empty($_POST['Password'])) {
		try {
			$pdo = new PDO('sqlite:'.dirname(__FILE__).'/db/db.sqlite3');
			$login = filter_var($_POST['Login'], FILTER_SANITIZE_STRING);
			$pass = filter_var($_POST['Password'], FILTER_SANITIZE_STRING);

			$stmt = $pdo->prepare("SELECT * FROM auth_user WHERE username = :login");
			$stmt->execute(array('login' => $login));
			$result = $stmt->fetchAll();

			if (empty($result)) {
				$message = "Utilisateur introuvable";
			} else {
				$hash = substr($result[0]['password'], 6);

				if (password_verify($pass, $hash)){

					$_SESSION['user']  = $result[0];
					header('location:index.php');

				} else {
					$message = "c'est pas bon !";
				}
			}

		} catch (Exception $e) {
			echo 'Aie : ' . $e->getMessage();
		}
	} else {
		$message = "Attention à la saisie des données !";
	}
} 



		</code></pre> </div>	
		<?php require_once('inc/nav.php'); ?>
		<?php require_once('inc/footer.php'); ?>
	</div>
</body>

</html>