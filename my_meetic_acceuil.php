<?php session_start();
if(!isset($_SESSION['id']) || $_SESSION['id'] != $_GET['id'])
{
  header("Location: http://localhost/wsh/my_meetic.php");
  return;
} ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>my meetic</title>
</head>
<body>
  <ul id="nav">
    </html>
    <?php
    //session_start();
    echo '<li><a href='."http://localhost/wsh/my_meetic_acceuil.php?id=".$_SESSION['id'].'>Accueil</a></li>';
    echo '<li><a href='."http://localhost/wsh/my_meetic_profil_manage.php?id=".$_SESSION['id'].'> Gérer mon profil</a></li>';
  	echo '<li><a href=http://localhost/wsh/my_meetic_search.php>Rechercher l\'amour</a></li>';
  	echo '<li><a href=http://localhost/wsh/my_meetic_disconnect.php>Déconnexion</a></li>';
    ?>
    <html>
  </ul>
  <div id="profil">
    <?php
    echo '<p>'."nom: ".$_SESSION['nom'].'<p>';
    echo '<p>'."prenom: ".$_SESSION['prenom'].'<p>';
    echo '<p>'.'date naissance: '.$_SESSION['dob'].'<p>';
    echo '<p>'.'sexe: '.$_SESSION['sexe'].'<p>';
    echo '<p>'.'mail: '.$_SESSION['mail'].'<p>';
    ?>
  </div>
</body>
</html>
