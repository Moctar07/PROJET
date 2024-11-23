<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer la chaîne saisie par l'utilisateur
    $chaine = trim($_POST['chaine']);

    // Initialisation des compteurs
    $voyelles = 0;
    $consonnes = 0;

    // Liste des voyelles
    $listeVoyelles = 'aeiouy';

    // Parcourir chaque caractère de la chaîne
    foreach (str_split(strtolower($chaine)) as $char) {
        if (ctype_alpha($char)) { // Vérifie si c'est une lettre
            if (strpos($listeVoyelles, $char) !== false) {
                $voyelles++;
            } else {
                $consonnes++;
            }
        }
    }

    // Afficher les résultats
    echo "Nombre de voyelles : $voyelles<br>";
    echo "Nombre de consonnes : $consonnes<br>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compter Voyelles et Consonnes</title>
</head>
<body>
    <form method="post">
        <label for="chaine">Entrez une chaîne de caractères :</label><br>
        <input type="text" name="chaine" id="chaine" required><br><br>
        <button type="submit">Compter</button>
    </form>
</body>
</html>
