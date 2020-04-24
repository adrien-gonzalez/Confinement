<?php


session_start();
require "config.php";

$erreurs=false;

$nom        = $_POST['nom'];
$prenom     = $_POST['prenom'];
$login  	= $_POST['login'];
$email      = $_POST['email'];
$arrondissement	= $_POST['arrondissement'];
$password   = $_POST['password'];
$password2  = $_POST['password2'];


$subject = [$nom, $prenom, $login, $password, $arrondissement];
$pattern = '/^[ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]*$/i';


// SECURITE
$nom = trim(htmlspecialchars($nom));
$prenom = trim(htmlspecialchars($prenom));
$login = trim(htmlspecialchars($login));
$email = trim(htmlspecialchars($email));
$password = trim(htmlspecialchars($password));


// REQUETE LOGIN
$sql_login="SELECT *FROM utilisateurs WHERE login='$login'";
$req_login=mysqli_query($base,$sql_login);

// REQUETE EMAIL
$sql_email="SELECT *FROM utilisateurs WHERE email='$email'";
$req_email=mysqli_query($base,$sql_email);


// Si la chaîne contient des caractères spéciaux

for($i=0; $i < sizeof($subject); $i++)
{
	
	if (preg_match($pattern, $subject[$i], $matches))
	{
    	$erreurs = true;
	}
}
if($erreurs == true)
{
	echo "Les caractères spéciaux ne sont pas acceptés";
}
else if (mysqli_num_rows($req_login) > 0)
{
	echo "utilisateur existant";
}
else if (mysqli_num_rows($req_email) > 0)
{
	echo "Cet email est déjà utilisé";
}
else if(strlen($login) < 5)
{
	echo "Login trop court";
}
else if(strlen($password) < 8)
{
	echo "Mot de passe trop court";
}
else if($password != $password2)
{
	echo "Mots de passe différents";
}
else
{	
	$password=password_hash($password, PASSWORD_BCRYPT, ["cost" => 12]);
	$insert="INSERT INTO utilisateurs VALUES (NULL, '$login', '$nom', '$prenom', '$email', '$arrondissement', '$password')";
	mysqli_query($base, $insert);
	echo "Inscrit";
}
?>