<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>DrinkECard/Home</title>

	<link href="css/DrinkECard.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
	
	<div class="grid-container">

		<?php require_once('inc/header.php'); ?>
		
		<div class="main">
			<h1>Présentation</h1>

			<p> DrinkECard est un projet sur la base du volontariat de ses utilisateurs pour les accompagner pendant leurs soirées au bar ou en boîte de nuit en les incitant à réguler leurs consommations d'alcool par la maitrise de leur budget. 

			<p> En effet, ce système de carte de paiement prépayée magnétique permet à ses utilisateurs de faciliter leurs paiements et leur accès aux lieux, puisque leurs cartes bancaires et leurs justificatifs d'identités pourront rester au vestiaire ou chez eux en toute sécurité  tout en garantissant aux établissements qu'ils seront payés.

			<p> Le principe est simple, depuis votre bar préféré, il vous suffit de vous inscrire (n'oubliez pas de valider votre compte.
				
			<p> Vous recevrez alors, GRATUITEMENT votre carte magnétique personnelle que vous pourrez dès lors utiliser dans les établissement munis des terminaux de paiement. Lors de vos achats d'alcools, le délai écoulé depuis votre dernière consommation vous est indiqué. Un message d'alerte vous est envoyé si vous recommandez de l'alcool il y a moins d'une heure.
			<p> Afin de vous sensibilisez.
		</div>	

	<?php require_once('inc/nav.php'); 
	?>
	<?php require_once('inc/footer.php');
	?>
	</div>
</body>

</html>