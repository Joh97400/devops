<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Bienvenue sur TimDevOps</title>
    <!-- Bootstrap core CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
	<script type="text/javascript">
	function toggle_div(bouton, id) { // On déclare la fonction toggle_div qui prend en param le bouton et un id
	  var div = document.getElementById(id); // On récupère le div ciblé grâce à l'id
	  if(div.style.display=="none") { // Si le div est masqué...
		div.style.display = "block"; // ... on l'affiche...
		bouton.value="Masquer les détails"; // on change la valeur du bouton
	  } else { // S'il est visible...
		div.style.display = "none"; // ... on le masque...
		bouton.value ="Plus de détails...";// on change la valeur du bouton
	  }
	}
</script>
 <style type="text/css">
	body{font-family:"Roboto","Helvetica Neue",Helvetica,Arial,sans-serif;font-size:13px;line-height:1.846;
	color:#666666;background-color:<?php $couleur ="white";echo $couleur;?>}
 </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Timspirit</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!--<li class="active"><a href="#">Logiciel</a></li>
           <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
		<h1>DevOps</h1>
		Votre version de logiciel est <?php echo $couleur;?>. </br>Timspirit © </br>
		<input type="button" onclick="toggle_div(this,'details');" value="Plus de détails..."/></br></br>
		<div id="details" style="display:none;">
			Vous êtes connecté sur la machine de <?php echo gethostname();?>.
		</div>
    </div>
  </body>
</html>
