<?php
// Connexion à la base de données (à inclure dans votre fichier)
include("connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nouveauNom = $_POST["nouveau_nom"];

    // Requête de mise à jour
    $requete = "UPDATE exerce_table  SET nom='$nouveauNom' WHERE id=$id";

    if ($connexion->query($requete) === TRUE) {
        echo "Enregistrement mis à jour avec succès !";
    } else {
        echo "Erreur : " . $requete . "<br>" . $connexion->error;
    }
}
?>