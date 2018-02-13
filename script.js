function surligne(champ, erreur)
{
    if(erreur)
    {
        champ.style.backgroundColor = "#fba";
    }
    else
    {
        champ.style.backgroundColor = "#00FF00";
    }
}

function verifNom(champ)
{
    if(document.getElementById("nom").value.length < 2 || document.getElementById("nom").value.length > 25)
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}

function verifPrenom(champ)
{
    if(document.getElementById("prenom").value.length < 2 || document.getElementById("prenom").value.length > 25)
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}

function verifMot_de_passe(champ)
{
    if(document.getElementById("mot_de_passe").value.length < 2 || document.getElementById("mot_de_passe").value.length > 25)
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}

function verifMot_de_passeverif(champ)
{
    if(document.getElementById("mot_de_passe").value === document.getElementById("verifmdp").value)
    {
        surligne(champ, false);
        return true;
    }
    else
    {
      surligne(champ, true);
      //alert("Veuillez entrez un mot de passe indentique");
      return false;
    }
}

function verifVille(champ)
{
    if(document.getElementById("ville").value.length < 2 || document.getElementById("ville").value.length > 25)
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}

function verifMail(champ)
{
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

    if(!regex.test(document.getElementById("email").value))
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}

function verifTelephone(champ)
{
    var regex = /^([\d]{10}$)/;

    if(!regex.test(document.getElementById("telephone").value))
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}

function verifBirthday(champ)
{
    var regex = /[0-9]{2,2}\/[0-9]{2,2}\/[0-9]{4,4}$/;

    if(!regex.test(document.getElementById("birthday").value))
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}

function verifForm()
{
    var nom = verifNom(document.getElementById("nom"));
    var prenom = verifPrenom(document.getElementById("prenom"));
    var mail = verifMail(document.getElementById("email"));
    var telephone = verifTelephone(document.getElementById("telephone"));
    var naissance= verifBirthday(document.getElementById("birthday"));
    var mdp = verifNom(document.getElementById("mot_de_passe"));
    var ville = verifNom(document.getElementById("ville"));
    var verifmdp = verifMot_de_passeverif(document.getElementById("verifmdp"));

    if(nom && prenom && mail && telephone && naissance && mdp && ville && verifmdp)
    {
        alert("Formulaire validé");
        return (true);
    }
    else
    {
        alert("Veuillez remplir correctement tous les champs");
        return (false);
    }
    alert("test");
}
