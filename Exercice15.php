<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
</head>
<body>
    <h1>Bienvenue sur notre agence immobilière</h1>
    <p>Que souhaitez-vous faire ?</p>
    <form method="post" action="redirect.php">
        <button type="submit" name="action" value="vendre">Vendre</button>
        <button type="submit" name="action" value="acheter">Acheter</button>
        <button type="submit" name="action" value="louer">Louer</button>
    </form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];

    // Redirection en fonction de l'action choisie
    switch ($action) {
        case 'vendre':
            header('Location: vendre.php');
            exit;
        case 'acheter':
            header('Location: acheter.php');
            exit;
        case 'louer':
            header('Location: louer.php');
            exit;
        default:
            echo "Action non reconnue.";
            exit;
    }
} else {
    echo "Aucune action détectée.";
}
?>
