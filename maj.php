<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<?php
		//Si le titre est indiqué, on l'affiche entre les balises <title>
		echo (!empty($titre))?'<title>'.$titre.'</title>':'<title> Bienvenue sur TimDevOps</title>';
		// On récupère les variables du formulaire grâce à la méthode POST
		$_POST['maj'];
		$maj = $_POST['maj'];
	?>
	<!-- Déclaration des normes et des caractéristiques de la page-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="style.css" />
	</head>
	<body>
		<!-- Mise en place de deux div qui permettent de centrer la zone au milieu de la page-->
		<div id="yellow">
				<!-- Titre générale -->
				<h1>Bienvenue sur TimDevOps </h1>				
				<h3>Félicitations votre version est à jour. Version <?php echo $maj	;?></h3>
				<!-- On affiche la version du logiciel grâce à la variable $version -->
				<h3>Vous êtes connecté sur la machine de <?php echo gethostname(); ?>.</h3>
		</div>
	</body>
</html>