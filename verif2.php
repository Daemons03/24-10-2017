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
		<?php
		if((htmlspecialchars($_POST['nom']) !="") &&
		(htmlspecialchars($_POST['sujet']) !="") &&
		(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))){
			$from = htmlspecialchars($_POST["email"]);
    		$to = "herzo03120@gmail.com"; 
    		$subject = htmlspecialchars($_POST["sujet"]);
    		$message = htmlspecialchars($_POST["newtext"]);
    		// $headers = "From:" . $from;
   			// mail($to,$subject,$message, $headers);
    		echo "<section id='message'>A: <span>$to</span><br/>De: <span>$from</span><br/>Sujet: <span>$subject</span><br/>Contenu:<br/> <article id='contenumsg'>$message</article>";
    		;
		}else{
			echo "Certains champs ne sont pas remplis.";
		}
		?>

	</section>
	<?php 
	require_once './inc/footer.inc.php'; 
	?>
</body>
</html>