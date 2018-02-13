<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script type="text/javascript" src="script.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <title></title>
</head>
<body id ="bloc_page">
    <div id="formulaire">
        <p class = "erreur"><strong>Cette adresse mail est déjà utilisée  !!</strong></p>
        <form action = "my_meetic_register_requete.php" method="post" onsubmit="return verifForm()">
                <table>
                    <p class= "pform"><strong>Formulaire d'inscription:</strong></p>
                    <tr>
                        <td><label>Sexe : </label></td>
                        <td>
                            <input type="radio" value="Homme" name="sexe" checked> Homme<br>
                            <input type="radio" value="Femme" name="sexe"> Femme<br>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nom">Nom : </label></td>
                        <td><input  class="champ" name="nom" type="text" id="nom" oninput="verifNom(this)"><br></td>
                    </tr>
                    <tr>
                        <td><label for="prenom">Prénom : </label></td>
                        <td><input class="champ" name="prenom" type="text" id="prenom" oninput="verifPrenom(this)"><br></td>
                    </tr>
                    <tr>
                        <td><label for="ville">Ville :</label></td>
                        <td><input class="champ" name="ville" type="text" id="ville" oninput="verifVille(this)"><br></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email :</label></td>
                        <td><input class="champ" name="email" type="text" id="email" oninput="verifMail(this)"><br></td>
                    </tr>
                    <tr>
                        <td><label for=Lecture"telephone">Téléphone :</label></td>
                        <td><input class="champ" name ="telephone" id="telephone" oninput="verifTelephone(this)"><br></td>
                    </tr>
                    <tr>
                        <td><label for="birthday">Date de naissance :</label></td>
                        <td><input class="champ" name="birthday" type="text" id="birthday" placeholder="         DD/MM/YYYY" oninput="verifBirthday(this)"/></td>
                    </tr>
                    <tr>
                        <td><label for="mdp">Mot de passe :</label></td>
                        <td><input class="champ" name="mot_de_passe" type="password" id="mot_de_passe" oninput="verifMot_de_passe(this)"><br></td>
                    </tr>
                    <tr>
                        <td><label for="mdp">Confirmez mot de passe :</label></td>
                        <td><input class="champ" name="mot_de_passe" type="password" id="verifmdp" oninput="verifMot_de_passeverif(this)"><br></td>
                    </tr>
                </table>
                <input type="submit" value="validation" class="my_button">
        </form>
    <li><a href="my_meetic.php" title="Dejà inscrit?"><strong>Dejà inscrit?</strong></a></Li>
    </div>
</body>
</html>
