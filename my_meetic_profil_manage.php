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
    echo '<li><a href='."http://localhost/wsh/my_meetic_acceuil.php?id=".$_SESSION['id'].'>Accueil</a></li>';
    echo '<li><a href='."http://localhost/wsh/my_meetic_profil_manage.php?id=".$_SESSION['id'].'> Gérer mon profil</a></li>';
  	echo '<li><a href=http://localhost/wsh/my_meetic_search.php>Rechercher l\'amour</a></li>';
  	echo '<li><a href=http://localhost/wsh/my_meetic_disconnect.php>Déconnexion</a></li>';
    ?>
    <html>
  </ul>
  <div id="profil">
    <?php
    echo '<form action='."http://localhost/wsh/my_meetic_profil_updatemail.php?id=".$_SESSION['id'].' method = "post">
      <input type="email" name="keywords" placeholder="Modifier adresse mail utilisateur">
      <input type="submit" name="form" value="Entrez la nouvelle adresse">
    </form>';
    echo '<form action='."http://localhost/wsh/my_meetic_profil_updatepw.php?id=".$_SESSION['id'].' method = "post">
      <input type="text" name="keywords" placeholder="Modifier mot de passe utilisateur">
      <input type="submit" name="form" value="Entrez votre nouveau pwrd">
    </form>';
    echo '<li><a href='."http://localhost/wsh/my_meetic_deleteaccount.php?id=".$_SESSION['id'].'>Supprimer account</a></li>';
    ?>
</body>
</html>
