<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script3.js"></script>
</head>
<body>
	<form method="POST" action="verif.php">
		<h2>Connexion</h2>
		<input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" required><br/><br/>
		<input type="password" name="password" placeholder="Mot de passe" required><br/><br/>
		<input type="submit" id="valider" name="Valider">
	</form>
</body>
</html>