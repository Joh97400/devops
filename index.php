<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<?php
	// Declaration d'une variable version et maj
	$version = 4.6;
	$maj = 0;
	// S'il n'y a pas de mise à jour alors on affiche qu'il s'agit de la dernière version
	if ($maj == 0) { ?>
		<!-- Déclaration des normes et des caracteristiques de la page-->
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title> Bienvenue sur TimDevOps </title>
			<link rel="stylesheet" media="screen" type="text/css" title="Design" href="style.css" />
		</head>
			<body>
				<div id="blue">
					<!-- Mise en place de deux div qui permettent de centrer la zone au milieu de la page, banniere et centre (voir style.css)-->
					<!-- Titre generale -->
					<h1>Bienvenue sur TimDevOps</h1></br>
					<h3>Votre version de logiciel est la <?php echo $version; ?>.  Il s'agit de la dernière version.</h3>
					<h3>Vous êtes connecté sur la machine de <?php echo gethostname(); ?>.</h3>						
				</div>
			</body>
		<?php 
	}
	// Sinon cela veut dire qu'il y a un upgrade, alors on affiche un lien afin de faire la mise à jour
	else {?>
		<!-- Declaration des normes et des caractÃ©ristiques de la page -->
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title> Bienvenue sur TimDevOps </title>
			<link rel="stylesheet" media="screen" type="text/css" title="Design" href="style.css" />
		</head>
		<body>
			<div id="blue">
				<!-- Titre generale -->
				<h1>Bienvenue sur TimDevOps </h1></br>
				<!-- Affichage de la version avec la variable $version -->
				<h3>Votre version de logiciel est la <?php echo $version; ?>.</h3>
				<!-- Mise en place d'un formulaire afin de récupérer la valeur maj-->
				<form id="test" action="maj.php" method  ="POST">
					<!-- On cache un lien contenant la variable pour qu'elle soit invisible pour l'utilisateur. On pourra la récupérer sur la page maj.php 
					Nous pouvons donc recuperer grace au formulaire les variables dans la page maj.php -->
					<input type="hidden" name="maj" value="<?php echo $maj; ?>"/>				
				</form>
				<!-- Insertion d'un lien permettant de cliquer sur la maj -->
				<a href='#' onclick='document.getElementById("test").submit()'> <img src="maj.jpg" alt="simspon" width="200" height="200" border="0" /></a>
				<!-- Ligne qui permet de voir le nom d'utlisateur de la machine -->
				<h3>Vous êtes connecté sur la machine de <?php echo gethostname(); ?>.</h3>
			</div>
		</body>
		<?php	
	}?>
</html>
