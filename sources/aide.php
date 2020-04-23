<!-- <!DOCTYPE html> -->

<?php
session_start();

if(!isset($_SESSION['login']))
{
	header('Location: ../');
}
?>
<html>
	<head>
		<title>Aide</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=0.7">
		<link href="style.css" rel="stylesheet">
		<!-- <link href="sources/style.css" rel="stylesheet"> -->
		<!-- JQUERY -->
		<script type="text/javascript" src="../js/jquery-3.5.0.min"></script>
		<!-- MON SCRIPT -->
		<script type="text/javascript" src="../js/script.js"></script>
	</head>

<body class="aide">
	<main>
		<div class="form_aide">
	  			 <!-- erreur inscription-->
			    <p id="erreur"></p>
			    <!-- Help Form -->
			    <form>
			    	<label>Votre type d'aide :</label><br>
			    	<div>
			    		<input type="radio" id="course" name="type_aide" value="course" checked>
  						<label for="course">Aide pour les courses de premières nécéssité</label>
  					</div>
  					<div>
  						<input type="radio" id="conversation" name="type_aide" value="conversation">
  						<label for="conversation">Conversation à distance</label>
  					</div>
  					<div>
  						<input type="radio" id="autre" name="type_aide" value="autre">
  						<label for="autre">Autre type d'aide</label>
  					</div>
  					<br><textarea id="description" placeholder="Précisez l'aide que vous pouvez apporter et présentez-vous"></textarea><br>
  					<div class="button_validate">
			       		<input type="button" id="help" value="Proposer mon aide">
			    	</div>
			    </form>
		</div>
	</main>
</body>
</html>