<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title></title>
</head>
<body id ="bloc_page">
    <div id="formulaire">
        <form action = "my_meetic_connect.php" method="post">
                <table>
                    <p class = "pform"><strong>Connexion:</strong></p>
                    <td><label for="email">Email :</label></td>
                        <td><input class="champ" name="email" type="text" id="email"><br></td>
                    </tr>
                    <tr>
                        <td><label for="mdp">Mot de passe :</label></td>
                        <td><input class="champ" name="mot_de_passe" type="password" id="mot_de_passe"><br></td>
                    </tr>
                </table>
                <input type="submit" value="validation" class="my_button">
        </form>
        <li class="lien"><a href="my_meetic_register.php" title="Pas encore inscrit?"><strong>Pas encore inscrit?</strong></a></Li>
        </div>
</body>
</html>
