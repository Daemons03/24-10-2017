<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style5.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script5.js"></script>
</head>
<body>
	<?php 
	require_once './inc/header.inc.php'; 
	?>
	<section id="formulaire">
		<h2>Une question?</h2>
		<form method="POST" action="verif2.php">
			<label>Votre nom:</label><br/>
			<input type="text" id="nom" name="nom" placeholder="Nom" required><br/>
			<label>Votre Email:</label><br/>
			<input type="email" id="email" name="email" placeholder="Email"><br/>
			<label>Sujet de votre email:</label><br/>
			<input type="text" id="sujet" name="sujet" placeholder="Sujet" required><br/>
			<label>Votre question:</label><br/>
			<textarea minlength="50" name="newtext" maxlength="250">Votre texte, limiter à 250 caractères.</textarea><br/>
			<input type="submit" id="valider" name="valider">
		</form>
	</section>
	<?php
	 require_once './inc/footer.inc.php'; 
	 ?>
</body>
</html>