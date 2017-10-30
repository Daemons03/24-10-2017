<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style4.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script4.js"></script>
</head>
<body>
	
		<form method="POST" action="formulaire.php">
			<input type="text" name="recherche" placeholder="Ecrivez votre recherche">
			<input type="submit" name="valider"><br/><br/>
		</form>
		<section>
		<?php
		$texte = "Sur The Way of Naruto vous incarnez l'un de vos héros préférés et partez à l'aventure pour le compte de votre village ou de votre clan ! Remplissez des missions pour tester vos connaissances sur Naruto ainsi que vos aptitudes ! Gravissez les échellons en passant les examens pour devenir le meilleur combattant des cachots du Naruto Fight Club grâce aux jutsus appris ! Venez vous mesurer aux autres ninjas venus du monde entier lors des arènes, gigantesques tournois organisés tout les deux mois afin de décerner le prix du meilleur combattant du moment ! ";

			
		
		if (isset($_POST["recherche"]) == ""){
			echo "$texte";
			}
		if (isset($_POST["recherche"])) {
			$research = $_POST["recherche"];
			
			if ($research != ""){
				$nb = substr_count($texte, $research);
				$texte = str_ireplace($research, "<span class='surli'>$research</span>", $texte);			
				echo "Ta recherche '$research' est présente $nb fois<br/><br/>";
				echo "$texte";
			}else{
				echo "<p>Tu n'as rien écris IDIOT!!!<br/><br/>Chante avec moi<br/><br/>Tu es con<br/><br/>Tu es con<br/><br/>Tu es con con con con<br/></p>";
			}
		}	
	?>
	</section>
</body>
</html>
