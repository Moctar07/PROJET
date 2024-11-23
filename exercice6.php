<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diviseurs d'un nombre</title>
</head>
<body>
    <h1>Afficher les diviseurs d'un nombre</h1>
    <form method="POST">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" id="nombre" name="nombre" required>
        <br><br>
        <button type="submit">Afficher les diviseurs</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $nombre = (int)$_POST['nombre'];

        if ($nombre > 0) {
            echo "<h2>Les diviseurs de $nombre sont :</h2>";
            echo "<ul>";
            for ($i = 1; $i <= $nombre; $i++) {
                if ($nombre % $i === 0) {
                    echo "<li>$i</li>";
                }
            }
            echo "</ul>";
        } else {
            echo "<p>Veuillez entrer un nombre positif.</p>";
        }
    }
    ?>
</body>
</html>
