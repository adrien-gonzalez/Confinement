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

<header>
	<ul>
		<li><a href="../">Accueil</a></li>
		<li><a href="messages.php">Discussion</a></li>
    <li><a href="profil.php">Profil</a></li>
		<li><a href="deconnexion.php">Déconnexion</a></li>
	</ul>
</header>

<main>
		<div class="form_aide">

	  			 <!-- erreur inscription-->
			    <p id="erreur"></p>
			    <!-- Help Form -->
			    <form>
			    	<h2 class="active"> Aide </h2>
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