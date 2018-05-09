<?php
include "./classes/Log.php";

$marque = $_REQUEST['marque'];
if(!empty($marque)){
    $marque = $_REQUEST['marque'] ?? "";

}
else
{
    echo "<p>Merci d'inserer une marque</p>";
}
$modele = $_REQUEST['modele'];
if(!empty($modele)){
    $modele = $_REQUEST['modele'] ?? "";

}
else
{
    echo "<p>Merci d'inserer un modèle de voiture</p>";
}
$annee = $_REQUEST['annee'] ?? "";
if(!empty($annee)){
    $annee = $_REQUEST['annee'] ?? "";

}
else
{
    echo "<p>Merci d'insérer un nombre pour l'année</p>";
}
$couleur = $_REQUEST['couleur'];
if(!empty($couleur)){
    $marque = $_REQUEST['couleur'] ?? "";

}
else
{
    echo "<p>Merci d'inserer une couleur</p>";
}

if (!empty($annee) && !empty($marque) && !empty($modele) && !empty($couleur)) {
    echo "Votre formulaire a bien été envoyé !";
}
else {
    echo "erreur dans l'envoi du formulaire, merci de réessayer";
}

Log::logWrite("la marque est $marque, le modèle est $modele de l'année $annee et de couleur $couleur");
