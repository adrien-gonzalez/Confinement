<?php

/**
 * Connexion simple à la base de données via PDO !
 */
session_start();
$db = new PDO('mysql:host=localhost;dbname=confinement;charset=utf8', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);



if(isset($_POST['content']))
{
  postMessage();
}
else
{
  getMessages();
}

function getMessages(){
  global $db;

  // 1. On requête la base de données pour sortir les 20 derniers messages
  $resultats = $db->query("SELECT * FROM messages ORDER BY created_at DESC LIMIT 20");
  // 2. On traite les résultats
  $messages = $resultats->fetchAll();
  // 3. On affiche les données sous forme de JSON
  echo json_encode($messages);
}

function postMessage(){
  global $db;


  $author = $_POST['author'];
  $content = $_POST['content'];

  // 2. Créer une requête qui permettra d'insérer ces données
  $query = $db->prepare('INSERT INTO messages SET author = :author, content = :content, created_at = NOW()');

  $query->execute([
    "author" => $author,
    "content" => $content
  ]);
 
}
