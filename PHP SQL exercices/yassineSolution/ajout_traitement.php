<?php
// Connexion à la base de données (à inclure dans votre fichier)
include("connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];

    // Requête d'insertion
    $requete = "INSERT INTO exerce_table (nom, email) VALUES ('$nom', '$email')";

    if ($connexion->query($requete) === FALSE) {
        echo "Enregistrement ajouté avec succès !";
    } else {
        echo "Erreur : " . $requete . "<br>" . $connexion->error;
    }
}
?>