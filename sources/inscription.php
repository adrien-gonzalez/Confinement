<html>
	<head>
		<title>Accueil</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=0.7">
		<!-- <link href="sources/style.css" rel="stylesheet"> -->
		<!-- JQUERY -->
		<script type="text/javascript" src="../js/jquery-3.5.0.min"></script>
		<!-- MON SCRIPT -->
		<script type="text/javascript" src="../js/script.js"></script>
	</head>

<body class="inscription">
	<main>
		<div>
	  		<div>
			    <!-- erreur inscription-->
			    <p id="erreur_log"></p>
			    <!-- Login Form -->
			    <form>
			    	<input type="text" id="login" name="login" placeholder="Login (5 caractères minimum)">
			    	<input type="text" id="nom" name="nom" placeholder="Nom">
			    	<input type="text" id="prenom" name="prenom" placeholder="Prenom">
			        <input type="email" id="email" name="email" placeholder="Email">
			        <input type="text" id="adresse" name="adresse" placeholder="Adresse">
			        <input type="password" id="password"  name="password" placeholder="Password (8 caractères minimum)">
			        <input type="password" id="password2"  name="password2" placeholder="Confirm password">
			        <input type="button" id="register" value="Créer un compte">
			    </form>
	  		</div>
		</div>
	</main>
</body>