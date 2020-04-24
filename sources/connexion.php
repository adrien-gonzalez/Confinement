<html>
<link rel="stylesheet" href="style.css"/>

<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">   

<head>

</head>
<body class="connexion">
<header>   

<?php session_start();
if(isset($_SESSION['login']))
{
  header('Location: ../');
}
?>

<ul>
  <li><a href="../">Accueil</a></li>
  <li><a href="inscription.<?php  ?>">Inscription</a></li>
</ul>
        
</header>

<div class="wrapper fadeInDown">
  <div id="formContent">

    <h2 class="active"> Connexion </h2>
   

    <div class="fadeIn first">
    </div>
    <?php

if(isset ($_POST['valider']))
{
    

    $db=mysqli_connect("localhost","root","","confinement");
    $login=$_POST['login'];
    $password=$_POST['password'];
    $requete1="SELECT password FROM utilisateurs WHERE login='$login'";
    $query= mysqli_query ($db,$requete1);
    $resultat=mysqli_fetch_array($query);

    if(password_verify($password, $resultat['password']))
    {
      $_SESSION['message']="vous êtes connecté :)";
      $_SESSION['login']=$login;
      $_SESSION['password']=$_POST['password'];
      header('location: ../');
    }
    else
    {
       echo "Pseudo ou Mot de passe incorrect";
    }
}


?>

    <form class="formulaire" name="inscription" method="post" action="connexion.php">
      <input type="text" placeholder= "Login" required  name="login"/> <br/>
</br>
        <input type="password" placeholder= "Mot de passe" required  name="password"/> <br/>
 
        <input type="submit" class="fadeIn fourth" name="valider" value="Se Connecter"/>
    </form>

    </div>

  </div>
</div>



</div>

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