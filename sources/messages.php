<!DOCTYPE html>
<?php session_start();


if(!isset($_SESSION['login']))
{
  header('Location: ../');
}


?>

<html>
<head>
  <meta charset="UTF-8">
  <title>Notre super chat !</title>
  <link rel="stylesheet" href="style2.css">
  <script type="text/javascript" src="../js/jquery-3.5.0.min"></script>
  <script src="../js/app.js"></script>
</head>
<body class="messagerie">

<header>
  <ul>
    <li><a href="../">Accueil</a></li>
    <li><a href="aide.php">Proposer mon aide</a></li>  
    <li><a href="deconnexion.php">Déconnexion</a></li>
  </ul>
</header>
    
    <h1>Chat</h1>
  <section class="chat">
    <div class="messages">
     
</div>
  <div class="user-inputs">
    <form>
        <input type="text" name="author" disabled id="author" value="<?php echo $_SESSION['login'];?>">
        <input type="text" id="content" name="content" placeholder="ecrivez votre message ici">
        <input type="button" id="messages_send" value="🔥 Envoyer">
      </form>
</div>
</section>
  
</body>
</html>