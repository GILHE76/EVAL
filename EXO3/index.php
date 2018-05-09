<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire AJAX</title>
    <script type="text/javascript" src="getXHR.js"></script>

</head>
<body>
<script type="text/javascript">

    var sendForm = function() {
        var vehicule = getXHR();
        vehicule.onreadystatechange = function() {
            if(vehicule.readyState == 4 && (vehicule.status == 200 || vehicule.status == 0)) {
                console.log(vehicule.responseText);
            }
        }

        var marque = document.getElementById('marque').value;
        var modele = document.getElementById('modele').value;
        var annee = document.getElementById('annee').value;
        var couleur = document.getElementById('couleur').value;
        var data = "marque=" + marque + "&modele=" + modele + "&annee=" + annee + "&couleur=" + couleur;
        vehicule.open("POST", "validation.php", true);
        vehicule.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        vehicule.send(data);
    };
</script>
<form action="validation.php" method="post">
    <div>
        <label for="marque">Marque : </label>
        <input type="text" id="marque" name="marque"/>

    </div>
    <div>
        <label for="modele">Modèle : </label>
        <input type="text" id="modele" name="modele"/>

    </div>
    <div>
        <label for="annee">Année : </label>
        <input type="text" id="annee" name="annee"/>

    </div>
    <div>
        <label for="couleur">Couleur : </label>
        <input type="text" id="couleur" name="couleur"/>
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>

</form>

</body>
</html>