<?php
class membre
{
  private $sexe;
  private $nom;
  private $prenom;
  private $ville;
  private $adressemail;
  private $telephone;
  private $date_naissance;
  private $mot_de_passe;
  private $mailexist;
  private $pasmajeur;
  private $age;

  public function __construct()
  {
    $this->sexe = $_POST["sexe"];
    $this->nom = $_POST["nom"];
    $this->prenom = $_POST["prenom"];
    $this->ville = $_POST["ville"];
    $this->adressemail = $_POST["email"];
    $this->telephone = $_POST["telephone"];
    $this->date_naissance = $_POST["birthday"];
    $this->mot_de_passe = $_POST["mot_de_passe"];
    $this->mailexist = false;
    $this->pasmajeur = false;
    $this->age = "";
  }

  public function verifAge()
  {
    $tab = explode("/", $this->date_naissance);
    if($tab[1] > 12 || $tab[0] > 31)
    {
      header("Location: http://localhost/wsh/my_meetic_register_erreur_age.php");
    }
      $this->date_naissance = $tab[2]."-".$tab[1]."-".$tab[0];
      $diff = (new \DateTime())->diff(new \DateTime($this->date_naissance));
      if($diff->y < 18)
      {
        $this->pasmajeur = true;
        header("Location: http://localhost/wsh/my_meetic_register_erreur_age.php");
      }
      else
      {
        $this->age = $diff->y;
        return;
      }
  }

  public function mailExist()
  {
    $bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
    $exist = $bdd->query("SELECT `mail_membre` FROM `tp_membres` WHERE `mail_membre` = '".$this->adressemail."'");
    $donnees = $exist->fetch();
    if($donnees['mail_membre'] != NULL)
    {
      $this->mailexist = true;
      header("Location: http://localhost/wsh/my_meetic_register_erreur_mail.php");
    }
  }

  public function hashMdp()
  {
    $this->mot_de_passe = sha1($this->mot_de_passe);
  }

  public function register()
  {
    if($this->mailexist == true || $this->pasmajeur == true)
    {
      return;
    }
    else
    {
    $bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
    $bdd->query("INSERT INTO `tp_membres`(`sexe_membre`, `nom_membre`, `prenom_membre`, `ville_membre`, `mail_membre`, `tel_membre`, `dob_membre`, `pw_membre`, `age_membre`)
    VALUES ('".$this->sexe."','".$this->nom."','".$this->prenom."','".$this->ville."','".$this->adressemail."','".$this->telephone."','".$this->date_naissance."','".$this->mot_de_passe."','".$this->age."')");
    header("Location: http://localhost/wsh/my_meetic.php");
    }
  }
}

$membre = new membre;
$membre->verifAge();
$membre->mailExist();
$membre->hashMdp();
$membre->register();
