<?php
$joursRestants = null;
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dateInput = $_POST['date'];

    // Vérifier si la date est valide
    if (DateTime::createFromFormat('Y-m-d', $dateInput)) {
        $dateSaisie = new DateTime($dateInput);
        $finAnnee = new DateTime($dateSaisie->format('Y') . '-12-31');

        // Calcul des jours restants
        $interval = $dateSaisie->diff($finAnnee);
        $joursRestants = $interval->days;
    } else {
        $message = "La date saisie est invalide. Veuillez réessayer.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul des jours restants</title>
</head>
<body>
    <h1>Nombre de jours restants jusqu'à la fin de l'année</h1>
    <form method="post">
        <label for="date">Entrez une date (format YYYY-MM-DD) :</label><br>
        <input type="date" name="date" id="date" required><br><br>
        <button type="submit">Calculer</button>
    </form>

    <?php if ($joursRestants !== null): ?>
        <p>Il reste <strong><?php echo $joursRestants; ?></strong> jour(s) jusqu'à la fin de l'année.</p>
    <?php elseif (!empty($message)): ?>
        <p style="color: red;"><?php echo $message; ?></p>
    <?php endif; ?>
</body>
</html>
