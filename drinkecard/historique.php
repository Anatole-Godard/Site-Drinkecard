<?php

session_start();

$message = null;
	$pdo = new PDO('sqlite:'.dirname(__FILE__).'/db/db.sqlite3');

	$stmt = $pdo->prepare("SELECT * FROM conso WHERE pseudo = :login");
	$stmt->execute(array('login' => $_SESSION['user']['first_name']));
	$result = $stmt->fetchAll();
	array_reverse($result, true);
	
	
?>


<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>DrinkECard/historique</title>

	<link href="css/DrinkECard.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
	
	<div class="grid-container">

			<?php require_once('inc/header.php'); ?>

		<div class="main"> 
				<?php 
				if (count($result)) {
					echo '<table>';
					echo '<tr>';
					echo "<th> type </th>";
					echo "<th> montant </th>";
					echo "<th> date </th>";

					foreach ($result as $value) {
						echo '<tr>';
						echo '<td>' . $value['type'] . '</td>';
						echo '<td>' . $value['montant'] .' € </td>';
						echo '<td>' . date ('d-m-Y H:i', strtotime($value['date_conso'])) . '</td>';
						echo '</tr>';
					}

					echo "</table>";
				} else{
					echo "Vous n'avez rien consomé !";
				}

				?>
		</div>	
		<?php require_once('inc/nav.php'); ?>
		<?php require_once('inc/footer.php'); ?>
	</div>
</body>

</html>

