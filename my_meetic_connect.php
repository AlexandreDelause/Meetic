<?php

$pass_hache = sha1($_POST['mot_de_passe']);
$mail = $_POST['email'];

$bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
$req = $bdd->prepare('SELECT * FROM tp_membres WHERE mail_membre = :mail AND pw_membre = :pass');
$req->execute(array(
    'mail' => $mail,
    'pass' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat || $resultat['statut'] == "deleted")
{

    echo 'Mauvais identifiant ou mot de passe !';
    header("Location: http://localhost/wsh/my_meetic_erreur_co.php");
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id_membre'];
    $_SESSION['prenom'] = $resultat['prenom_membre'];
    $_SESSION['mail'] = $resultat['mail_membre'];
    $_SESSION['sexe'] = $resultat['sexe_membre'];
    $_SESSION['nom'] = $resultat['nom_membre'];
    $_SESSION['dob'] = $resultat['dob_membre'];
    $_SESSION['pw'] = $resultat['pw_membre'];
    $_SESSION['pww'] = $_POST['mot_de_passe'];
    header("Location: http://localhost/wsh/my_meetic_acceuil.php?id=".$_SESSION['id']);
    echo 'Vous êtes connecté !';
}
?>
