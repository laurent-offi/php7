<?php

	if(!isset($_SESSION)) {
    session_start();
	}

    $_SESSION["lastname"] = "COURCELLE";
    $_SESSION["firstname"] = "Laurent";
    $_SESSION["age"] = 19;
 ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 2 (7) PHP</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="sRnfbNnRwW.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	</head>

	<body>

		<main role="main">
		  <div class="card has-text-centered is-wide">
		    <header class="card-header">
		      Informations
		    </header>

    				    <a href="informations.php">Mes informations</a>
    				
		    </div>
		</main>

	</body>


</html>