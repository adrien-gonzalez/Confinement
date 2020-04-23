<!-- <!DOCTYPE html> -->

<?php session_start();?>


<html>
	<head>
		<title>Accueil</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=0.7">
		<link href="sources/style.css" rel="stylesheet">
		<!-- <link href="sources/style.css" rel="stylesheet"> -->
		<!-- JQUERY -->
		<script type="text/javascript" src="js/jquery-3.5.0.min"></script>
		<!-- MON SCRIPT -->
		<script type="text/javascript" src="js/script.js"></script>
	</head>

<body class="accueil">

<header>
	<ul>
		<?php if(!isset($_SESSION['login']))
		{
		?>
			<li><a href="sources/inscription.php">Inscription</a></li>
	 		<li><a href="sources/connexion.php">Connexion</a></li>
		<?php
		}
		else
		{
		?>
			<li><a href="sources/messagerie.php">Proposer mon aide</a></li>
			<li><a href="sources/deconnexion.php">Déconnexion</a></li>
		<?php
		}
		?>
	  
	</ul>
</header>

	<main>
		<div class="liste_annonces">
		</div>
	</main>
</body>
</html>