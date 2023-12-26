<?php
// Connexion à la base de données (à inclure dans votre fichier)
include("connexion.php");

// Requête de sélection
$resultat = $connexion->query("SELECT * FROM exerce_table");

if ($resultat->num_rows > 0) {
    echo "<table border='1'><tr><th>Nom</th><th>Email</th></tr>";

    while ($ligne = $resultat->fetch_assoc()) {
        echo "<tr><td>" . $ligne["nom"] . "</td><td>" . $ligne["email"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}

$resultat->close();
?>
