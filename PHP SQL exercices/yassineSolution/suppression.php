<?php
// Connexion à la base de données (à inclure dans votre fichier)
include("connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idASupprimer = $_POST["id_a_supprimer"];

    // Requête de suppression
    $requete = "DELETE FROM exerce_table WHERE id=$idASupprimer";

    if ($connexion->query($requete) === TRUE) {
        echo "Enregistrement supprimé avec succès !";
    } else {
        echo "Erreur : " . $requete . "<br>" . $connexion->error;
    }
}
?>

<!-- Liste des enregistrements avec bouton de suppression -->
<?php
$resultat = $connexion->query("SELECT * FROM exerce_table");

if ($resultat->num_rows > 0) {
    while ($ligne = $resultat->fetch_assoc()) {
        echo "ID: " . $ligne["id"] . " - Nom: " . $ligne["nom"] . " - Email: " . $ligne["email"] . " <form method='post' action=''><input type='hidden' name='id_a_supprimer' value='" . $ligne["id"] . "'><input type='submit' value='Supprimer'></form><br>";
    }
} else {
    echo "Aucun résultat trouvé.";
}

$resultat->close();
?>
