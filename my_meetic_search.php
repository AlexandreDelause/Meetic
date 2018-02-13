<?php session_start();
if(!isset($_SESSION['id']))
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
  <div id="search">
    <?php
    echo '<form action='."http://localhost/wsh/my_meetic_search_requete.php?id=".$_SESSION['id'].' method = "post">
      <input type="text" name="keywords" placeholder="ex: Lyon Paris Marseille">
      <select name="selectgenre">
        <option value="NULL"></option>
        <option value="Hommes">Hommes</option>
        <option value="Femmes">Femmes</option>
      </select>
    <select name="selectage">
      <option value="NULL"></option>
      <option value="18-25">18-25</option>
      <option value="25-35">25-35</option>
      <option value="35-45">35-45</option>
      <option value="45+">45+</option>
    </select>
    <input type="submit" name="form" value="Rechercher">
    </form>';
    ?>
  </div>
</body>
</html>
