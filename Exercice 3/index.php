<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 3 (7) PHP</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="sRnfbNnRwW.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	</head>

<?php

	if(!isset($_SESSION)) {
    session_start();
	}

if (isset($_POST['buttonSubmit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        setcookie("username", $username, time() + 3600, '/');
        setcookie("password", $password, time() + 3600, '/');
        echo 'Vos informations ont été enregistrées dans un Cookie.';
    } else {
 ?>
	<body>

		<main role="main">
		  <div class="card has-text-centered is-wide">
		    <header class="card-header">
		      Informations
		    </header>

		   	<div class="card-content">

			<form action="index.php" method="POST">

		            <label for="username">Nom d'utilisateur : </label>
		            <input type="text" name="username" id="username">

		            	<br>

		            <label for="password">Mot de passe : </label>
		            <input type="password" name="password" id="password">

		            	<br>

		            <input type="submit" value="Enregistrer" id="buttonSubmit" name="buttonSubmit">

	        	</form>
	        	
   				 <?php } ?>

   				</div>
    				
		    </div>
		</main>

	</body>


</html>