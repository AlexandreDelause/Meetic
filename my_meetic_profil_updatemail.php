<?php
function updatemail()
{
  session_start();
  if(!isset($_SESSION['id']) || $_SESSION['id'] != $_GET['id'])
  {
    header("Location: http://localhost/wsh/my_meetic.php");
    return;
  }
  else
  {
  $newmail = $_POST['keywords'];
  $id = $_SESSION['id'];
  $bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
  $bdd->query("UPDATE tp_membres SET mail_membre = '$newmail' WHERE id_membre = $id");
  header("location: http://localhost/wsh/my_meetic_profil_manage.php?id=".$_SESSION['id']);
  }
}
updatemail();
?>
