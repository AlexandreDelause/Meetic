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
  <div id= "profil">
  <?php
    if(!empty($_POST['keywords']) && $_POST['selectage'] == 'NULL' && $_POST['selectgenre'] == 'NULL')
    {
      $bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
      $keywords = explode(' ', $_POST['keywords']);
      $like = "";
      foreach($keywords as $keyword)
      {
        $like.= " ville_membre LIKE '%".$keyword."%' OR";
      }
      $like = substr($like, 0, strlen($like) - 3);
      $membres = $bdd->query("SELECT * FROM tp_membres WHERE ".$like );
      while ($data = $membres->fetch())
      {
        echo "<p>". $data['prenom_membre'].' '.$data['nom_membre'] ."</p>";
      }
    }
   ?>
  </div>
</body>
</html>
