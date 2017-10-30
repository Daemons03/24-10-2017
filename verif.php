<html>
<head>
	<title>Formulaire</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script3.js"></script>
</head>
<body>
	<?php 
		$tab = array("Maxime","azerty");
		if (($_POST["pseudo"] == $tab[0]) && ($_POST["password"] == $tab[1])){
			header('Location: base.php');
			// $id = htmlspecialchars($_POST["pseudo"]);
			// echo " ".$id." ";
		}
		else{
			include("index.php");
			echo "<span>Les identifiants ne sont pas bon</span>";
		}

	 ?>
</body>
</html>