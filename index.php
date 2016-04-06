<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<?php
	//Si le titre est indiquee, on l'affiche entre les balises <title>
	echo (!empty($titre))?'<title>'.$titre.'</title>':'<title> Forum </title>';
	// Declaration de variables maj
	$version = 4.6;
	$maj = 0;
	if ($maj == 0) { ?>
		<!-- Déclaration des normes et des caracteristiques de la page-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="style.css" />
		</head>
		<div id="blue">
			<body>
				<!-- Mise en place de deux div qui permettent de centrer la zone au milieu de la page, banniere et centre (voir style.css)-->
				<div id="centre">
						<!-- Titre generale -->
						<h1>Bienvenue sur TimDevOps</h1></br>
						<h3>Votre version de logiciel est la <?php echo $version; ?>.  Il s'agit de la dernière version.</h3>
						<h3>Vous êtes connecté sur la machine de <?php echo gethostname(); ?>.</h3>						
				</div>
			</body>
		</div>	
		<?php 
	}
	else {?>
		<!-- Declaration des normes et des caractÃ©ristiques de la page -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="style.css" />
		</head>
		<div id="blue">
			<body>
				<!-- Mise en place de deux div qui permettent de centrer la zone au milieu de la page, banniere et centre (voir style.css)-->
					<!-- Titre generale -->
					<h1>Bienvenue sur TimDevOps </h1></br>
					<h3>Votre version de logiciel est la <?php echo $version; ?>.</h3>
					<!-- Mise en place d'un formulaire afin de rÃ©cupÃ©rer les valeurs version et maj-->
					<form id="test" action="maj.php" method  ="POST">
						<!-- On cache les valeurs pour qu'elle soit invisible pour l'utilisateur 
						Nous pouvons donc recuperer grÃ¢ce au formulaire les variables dans la page maj.php -->
						<input type="hidden" name="maj" value="<?php echo $maj; ?>"/>				
					</form>
					<a href='#' onclick='document.getElementById("test").submit()'> <img src="maj.jpg" alt="simspon" width="200" height="200" border="0" /></a>
					<h3>Vous êtes connecté sur la machine de <?php echo gethostname(); ?>.</h3>
			</body>
		</div>	
		<?php	
	}?>
</html>