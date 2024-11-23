<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérificateur de Palindrome</title>
</head>
<body>
    <h1>Vérifiez si un mot est un palindrome</h1>
    <form method="POST">
        <label for="mot">Entrez un mot :</label>
        <input type="text" id="mot" name="mot" required>
        <button type="submit">Vérifier</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $mot = $_POST['mot'];

        
        $motNettoye = strtolower(str_replace(' ', '', $mot));

       
        $inverse = strrev($motNettoye);

        if ($motNettoye === $inverse) {
            echo "<p>Le mot <strong>'$mot'</strong> est un palindrome !</p>";
        } else {
            echo "<p>Le mot <strong>'$mot'</strong> n'est pas un palindrome.</p>";
        }
    }
    ?>
</body>
</html>
