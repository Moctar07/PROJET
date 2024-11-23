<?php
// Tableau multidimensionnel associatif
$personnes = [
    "Dupont" => [
        "prenom" => "Jean",
        "ville" => "Paris",
        "age" => 32
    ],
    "Durand" => [
        "prenom" => "Marie",
        "ville" => "Lyon",
        "age" => 28
    ],
    "Morel" => [
        "prenom" => "Luc",
        "ville" => "Marseille",
        "age" => 45
    ],
    "Martin" => [
        "prenom" => "Sophie",
        "ville" => "Toulouse",
        "age" => 37
    ]
];

// Affichage du tableau
echo "<h1>Liste des personnes</h1>";
foreach ($personnes as $nom => $details) {
    echo "<h2>$nom</h2>";
    echo "<p>Prénom : " . $details['prenom'] . "</p>";
    echo "<p>Ville : " . $details['ville'] . "</p>";
    echo "<p>Âge : " . $details['age'] . " ans</p>";
}
?>
