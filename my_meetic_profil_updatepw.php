<?php
function updatepw()
{
  if(!isset($_SESSION['id']) || $_SESSION['id'] != $_GET['id'])
  {
    header("Location: http://localhost/wsh/my_meetic.php");
    return;
  }
  else
  {
  session_start();
  var_dump($_SESSION['pw']);
  var_dump($_POST['keywords']);
  $keywords = $_POST['keywords'];
  $newpw = sha1($keywords);
  var_dump($newpw);
  $id = $_SESSION['id'];
  $bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
  $bdd->query("UPDATE tp_membres SET pw_membre = '$newpw' WHERE id_membre = $id");
  header("location: http://localhost/wsh/my_meetic_profil_manage.php?id=".$_SESSION['id']);
  }
}
updatepw();
?>
