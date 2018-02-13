<?php
function deleteaccount()
{
session_start();
if(!isset($_SESSION['id']) || $_SESSION['id'] != $_GET['id'])
{
  header("Location: http://localhost/wsh/my_meetic.php");
  return;
}
else
{
  $id = $_SESSION['id'];
  $bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
  $bdd->query("UPDATE tp_membres SET statut = 'deleted' WHERE id_membre = $id");
  header("Location: http://localhost/wsh/my_meetic.php");
  return;
}
}
deleteaccount();
?>
