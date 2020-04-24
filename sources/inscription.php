<!-- <!DOCTYPE html> -->
<html>
	<head>
		<title>Inscription</title>
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

<header>   

<?php session_start();
if(isset($_SESSION['login']))
{
  header('Location: ../');
}
?>
        
<ul>
  <li><a href="../">Accueil</a></li>
  <li><a href="connexion.<?php  ?>">Connexion</a></li>
</ul>
        
</header>

	<main>
		<div class="wrapper fadeInDown">
  			<div id="formContent">
  				<h2 class="active"> Inscription </h2>
			    <!-- erreur inscription-->
			    <p id="erreur"></p>
			    <!-- Login Form -->
			    <form>
			    	<input type="text" id="login" name="login" placeholder="Login (5 caractères minimum)">
			    	<input type="text" id="nom" name="nom" placeholder="Nom">
			    	<input type="text" id="prenom" name="prenom" placeholder="Prenom">
			        <input type="email" id="email" name="email" placeholder="Email"><br><br>
			        <label>Position :</label><br><br>
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
		</div>
	</main>

<footer class="footer">
        <nav class="navbar navbar-default navbar-custom">         
        <div class="groupe">
                      <div class="contacter1">
                      <h1 class="contacter"> Contactez-nous </h1>
                      <div class="emailtel">
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSGMGPZjkWhFdrhCNwdvQPSSGtjvxnDHmJCnGTRfbsFsqPCtzrTHHlXgVKGcsHGDqhCnHzMN"><img class="email" src="../img/email.png"></a>
                <a href=""><img class="tel" src="../img/tel.png"></a>
                <h1 class="num"> Numéro de tél: 04.91.66.66.66 </h1>
                <h1 class="admail"> Confinement@gmail.com </h1>
                      </div>
                          <h1 class="association"> Site d'association humanitaire. </h1>
                </div>
                <div class="horaire1">
                      <h1 class="horaire"> Nos horaires: </h1>
                      <p class="bottom">Nous sommes disponible 24h/24, 7j/7.</p>
                      <img class="contentimg" src="../img/content.png">
                   </div>
                      <div class="paiement">
                        <p class="h3">Le choix du paiement:</p>
                        <p class="bottom"> Paiement en ligne ou à la livraison.</p>
                        <p class="bottom"> Réglez par CB, chèque, espèces ou tickets restaurant.</p>
                        <img class="paiement2" src="../img/paiement.jpg">
                        <p class="h3">Pour combien?!</p>
                        <p class="bottom">Le prix de la course se négocie avec les livreurs.</p>               
                                
      </div> 
      </div>                       
    </nav>
</footer>
</body>
</html>