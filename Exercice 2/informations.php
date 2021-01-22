<?php

	if(!isset($_SESSION)) {
    session_start();
	}

if (isset($_POST['buttonSubmit'])) {
        $username = $_POST['pseudo'];
        $userPW = $_POST['password'];
        setcookie("pseudoEx3", $username, time() + 3600, '/');
        setcookie("passwordEx3", $userPW, time() + 3600, '/');
        echo 'Cookie enregistré';
    } else {
 ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Informations - Exercice 1 (7) PHP</title>
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

			<form action="index.php" method="POST">

	            <label for="pseudo">Pseudo : </label>
	            <input type="text" name="pseudo" id="pseudo">

	            <label for="password">MdP : </label>
	            <input type="password" name="password" id="password">

	            <input type="submit" value="GO" id="buttonSubmit" name="buttonSubmit">

        	</form>
        	
    <?php } ?>
    				
		    </div>
		</main>

	</body>


</html>