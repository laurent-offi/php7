<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 1 (7) PHP</title>
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
				     Votre navigateur :  <b><?php echo $_SERVER["HTTP_USER_AGENT"]; ?></b><br>
    				Votre adresse IP : <b><?php echo $_SERVER['REMOTE_ADDR']; ?></b> <br>
    				 Le nom du serveur : <b><?php echo $_SERVER['SERVER_NAME']; ?></b>
    				
		    </div>
		</main>

	</body>


</html>