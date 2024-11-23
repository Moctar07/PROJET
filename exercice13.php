<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul sur un tableau d'entiers</title>
</head>
<body>
    <h1>Analyse d'un tableau d'entiers</h1>
    <form method="POST">
        <label for="nombres">Entrez un tableau d'entiers séparés par des virgules :</label>
        <br>
        <input type="text" id="nombres" name="nombres" placeholder="Exemple : 12,45,78" required>
        <br><br>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Récupérer les nombres saisis par l'utilisateur
        $nombres = $_POST['nombres'];

        // Convertir la chaîne en tableau d'entiers
        $tableau = array_map('intval', explode(',', $nombres));

        // Vérifier que le tableau n'est pas vide
        if (count($tableau) > 0) {
            // Calculs
            $moyenne = array_sum($tableau) / count($tableau); // Moyenne
            $maximum = max($tableau); // Maximum
            $minimum = min($tableau); // Minimum

            // Affichage des résultats
            echo "<h2>Résultats :</h2>";
            echo "<p>Tableau : [" . implode(', ', $tableau) . "]</p>";
            echo "<p>Moyenne : <strong>" . number_format($moyenne, 2) . "</strong></p>";
            echo "<p>Maximum : <strong>$maximum</strong></p>";
            echo "<p>Minimum : <strong>$minimum</strong></p>";
        } else {
            echo "<p>Veuillez entrer un tableau d'entiers valide.</p>";
        }
    }
    ?>
</body>
</html>
