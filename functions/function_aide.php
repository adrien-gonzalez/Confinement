<?php


session_start();
require "config.php";

$_SESSION['login']="Firefou";
$type_aide=$_POST['type_aide'];
$description=$_POST['description'];
$login=$_SESSION['login'];



// RECUP ID UTILISATEUR

$req_id="SELECT id FROM utilisateurs WHERE login='$login'";
$execute_req_id=mysqli_query($base, $req_id);
$result_req_id=mysqli_fetch_array($execute_req_id);
$id=$result_req_id['id'];

// INSERT LA PROPOSITION D'AIDE DANS LA BDD

$insert_aide="INSERT INTO annonces VALUES (NULL, '$id', '$type_aide', '$description')";
mysqli_query($base, $insert_aide);
echo "aide proposée";


?>