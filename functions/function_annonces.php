<?php


session_start();
require "config.php";

$req_annonces="SELECT annonces.id, nom, prenom, arrondissement, description FROM utilisateurs, annonces WHERE id_utilisateur=utilisateurs.id";
$execute_req_annonces=mysqli_query($base, $req_annonces);
$element=mysqli_num_rows($execute_req_annonces);


if($element > 0)
{
	while($data = mysqli_fetch_assoc($execute_req_annonces)) {	
	    	$json[] = $data;
		}
	 echo json_encode($json);
}


?>