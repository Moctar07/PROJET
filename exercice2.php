<<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tester les multiples de 3 et 5</title>
</head>
<body>
    <h1>Vérifiez si un nombre est un multiple de 3 et de 5</h1>
    <form method="POST">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" id="nombre" name="nombre" required>
        <button type="submit">Vérifier</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $nombre = $_POST['nombre'];

    
        if ($nombre % 3 === 0 && $nombre % 5 === 0) {
            echo "<p>Le nombre <strong>$nombre</strong> est un multiple de 3 et de 5.</p>";
        } else {
            echo "<p>Le nombre <strong>$nombre</strong> n'est pas un multiple de 3 et de 5.</p>";
        }
    }
    ?>
</body>
</html>
