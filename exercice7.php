<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tester un nombre parfait</title>
</head>
<body>
    <h1>Tester si un nombre est parfait</h1>
    <form method="POST">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" id="nombre" name="nombre" required>
        <br><br>
        <button type="submit">Tester</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = (int)$_POST['nombre'];
        if ($nombre > 0) {
            $sommeDiviseurs = 0;
            for ($i = 1; $i <= $nombre / 2; $i++) {
                if ($nombre % $i === 0) {
                    $sommeDiviseurs += $i;
                }
            }
            if ($sommeDiviseurs === $nombre) {
                echo "<p>Le nombre <strong>$nombre</strong> est un nombre parfait.</p>";
            } else {
                echo "<p>Le nombre <strong>$nombre</strong> n'est pas un nombre parfait.</p>";
            }
        } else {
            echo "<p>Veuillez entrer un nombre positif.</p>";
        }
    }
    ?>
</body>
</html>
