<!DOCTYPE html>
<html>
<head>
	<title>Classement ligue 1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
	<header>
		<img src="../img/ligue1.jpg">
	</header>
	<a href="exo2.php">page2</a>
	<section class="classe">
	<?php
		$classement = fopen('classement2.txt',"r");
		while (!feof($classement)){
		$clament = fgets($classement);
 			$clament_explod = explode("|", $clament);
				echo "<li>";
				foreach ($clament_explod as $element) {
					echo " ".$element." ";
				}
			echo "</li>";
			}
		fclose($classement);
 	?>	
	</section>
	<section class="classe">
		<?php
			$tab = fopen('classement3.txt',"r");
			$effectif = array(
					'cp' => array(),
					'terroriste' => array(),
					'cochonne' => array(),
					'moche' => array(),
					'vilaine' => array(),
					 );
			while (!feof($tab)){
				$ligne = explode("|", fgets($tab));
				$classe = strtolower(trim($ligne[2]));
				array_push($effectif[$classe], $ligne[0]." ".$ligne[1]);			
				}	
				foreach ($effectif as $key => $value) {
					echo "Classe de ".$key." :<br>";
					echo "<p>";
					echo implode(', ', $value);
					echo "</p>";
					echo "<hr>";
				}

				fclose($tab);

		?>
	</section>
	<form  class="classe" id="classe" method="POST">
		<input type="text" name="prenom" placeholder="Nom et Prenom" required><br><br>
		<input type="text" name="Sujet" placeholder="Sujet" required><br><br>
		<input type="email" name="email" id="email1" placeholder="Email" required><br><br>
		<textarea name="texte" minlength="50" maxlength="200">Limiter à 200 caratères</textarea><br><br>
		<input type="Submit" name="Valider">
	</form>
	
</body>
</html>
