<?php
session_start();

if(!isset($_SESSION['login']))
{
	header('Location: ../');
}
?>


<html>
	<head>
		<link href="style2.css" rel="stylesheet">
	</head>

<body class="profil">


<header>
  <ul>
    <li><a href="../">Accueil</a></li>
    <li><a href="aide.php">Proposer mon aide</a></li> 
    <li><a href="message.php">Discussion</a></li> 
    <li><a href="deconnexion.php">Déconnexion</a></li>
  </ul>
</header>

<div class="form-style-6">
    

<h1>Modifier son profil</h1>
<div class="formulaire">		
	<form name="inscription" method="post" action="profil.php">
		<input type="text" name="login" placeholder="login"  value="<?php echo $_SESSION ['login'];?>"><br>
		<input type="password" name="password"  placeholder="mot de passe" value="<?php echo $_SESSION['password'];?>"><br>
		<input type="password" placeholder="confirmer mot de passe" name="password1"value="<?php
		        echo $_SESSION['password'];?>"><br/>
		<input type="submit" name="valider" value="OK"/>
	</form>
</div>
</div>


<?php
if(isset($_POST['valider']))
{

 $db=mysqli_connect("localhost","root","","confinement");

 $newlogin= $_POST['login']; 
 $login= $_SESSION['login']; 
 $password=$_POST['password'];

 $password=password_hash($password, PASSWORD_BCRYPT, ["cost" => 12]);
 $req= "UPDATE utilisateurs SET login = '".$newlogin."', password = '".$password."' WHERE login= '".$login."' ";
 $query= mysqli_query ($db, $req);
 $_SESSION['login']=$newlogin;
 $_SESSION['password']=$password;
 header('location: ../index.php');
 
}
?>

</body>
</html>