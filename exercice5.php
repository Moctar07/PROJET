<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du cercle</title>
</head>
<body>
    <h1>Calcul du diamètre, périmètre et surface d’un cercle</h1>
    <form method="POST">
        <label for="rayon">Entrez le rayon du cercle :</label>
        <input type="number" id="rayon" name="rayon" step="0.01" required>
        <br><br>
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $rayon = (float)$_POST['rayon'];
        $diametre = 2 * $rayon; 
        $perimetre = 2 * pi() * $rayon; 
        $surface = pi() * pow($rayon, 2); 

        echo "<h2>Résultats :</h2>";
        echo "<p>Rayon : <strong>$rayon</strong></p>";
        echo "<p>Diamètre : <strong>$diametre</strong></p>";
        echo "<p>Périmètre : <strong>" . number_format($perimetre, 2) . "</strong></p>";
        echo "<p>Surface : <strong>" . number_format($surface, 2) . "</strong></p>";
    }
    ?>
</body>
</html>
