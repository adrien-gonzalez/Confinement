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
			<li><a href="sources/aide.php">Proposer mon aide</a></li>
			<li><a href="sources/messages.php">Discussion</a></li>
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

<footer class="footer">
        <nav class="navbar navbar-default navbar-custom">         
        <div class="groupe">
                      <div class="contacter1">
                      <h1 class="contacter"> Contactez-nous </h1>
                      <div class="emailtel">
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSGMGPZjkWhFdrhCNwdvQPSSGtjvxnDHmJCnGTRfbsFsqPCtzrTHHlXgVKGcsHGDqhCnHzMN"><img class="email" src="img/email.png"></a>
                <a href=""><img class="tel" src="img/tel.png"></a>
                <h1 class="num"> Numéro de tél: 04.91.66.66.66 </h1>
                <h1 class="admail"> Confinement@gmail.com </h1>
                      </div>
                          <h1 class="association"> Site d'association humanitaire. </h1>
                </div>
                <div class="horaire1">
                      <h1 class="horaire"> Nos horaires: </h1>
                      <p class="bottom">Nous sommes disponible 24h/24, 7j/7.</p>
                      <img class="contentimg" src="img/content.png">
                   </div>
                      <div class="paiement">
                        <p class="h3">Le choix du paiement:</p>
                        <p class="bottom"> Paiement en ligne ou à la livraison.</p>
                        <p class="bottom"> Réglez par CB, chèque, espèces ou tickets restaurant.</p>
                        <img class="paiement2" src="img/paiement.jpg">
                        <p class="h3">Pour combien?!</p>
                        <p class="bottom">Le prix de la course se négocie avec les livreurs.</p>               
                                
      </div> 
      </div>                       
    </nav>
</footer>
</body>
</html>