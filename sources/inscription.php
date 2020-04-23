<!-- <!DOCTYPE html> -->
<html>
	<head>
		<title>Accueil</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=0.7">
		<link href="style.css" rel="stylesheet">
		<!-- <link href="sources/style.css" rel="stylesheet"> -->
		<!-- JQUERY -->
		<script type="text/javascript" src="../js/jquery-3.5.0.min"></script>
		<!-- MON SCRIPT -->
		<script type="text/javascript" src="../js/script.js"></script>
	</head>

<body class="inscription">
	<main>
		<div>
			    <!-- erreur inscription-->
			    <p id="erreur"></p>
			    <!-- Login Form -->
			    <form>
			    	<input type="text" id="login" name="login" placeholder="Login (5 caractères minimum)">
			    	<input type="text" id="nom" name="nom" placeholder="Nom">
			    	<input type="text" id="prenom" name="prenom" placeholder="Prenom">
			        <input type="email" id="email" name="email" placeholder="Email">
			        <select id="arrondissement">
			        	<option>13001</option>
			        	<option>13002</option>
			        	<option>13003</option>
			        	<option>13004</option>
			        	<option>13005</option>
			        	<option>13006</option>
			        	<option>13007</option>
			        	<option>13008</option>
			        	<option>13009</option>
			        	<option>13010</option>
			        	<option>13011</option>
			        	<option>13012</option>
			        	<option>13013</option>
			        	<option>13014</option>
			        	<option>13015</option>
			        	<option>13016</option>
			        </select>
			        <input type="password" id="password"  name="password" placeholder="Password (8 caractères minimum)">
			        <input type="password" id="password2"  name="password2" placeholder="Confirm password">
			        <input type="button" id="register" value="Créer un compte">
			    </form>
		</div>
	</main>
</body>
</html>