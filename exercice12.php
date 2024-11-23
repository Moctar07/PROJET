<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adresse Client</title>
</head>
<body>
    <h1>Adresse Client</h1>
    <form action="traitement.php" method="post">
        <fieldset>
            <legend>Adresse client</legend>
            <label for="nom">Nom :</label><br>
            <input type="text" id="nom" name="nom" required><br><br>

            <label for="prenom">Prénom :</label><br>
            <input type="text" id="prenom" name="prenom" required><br><br>

            <label for="adresse">Adresse :</label><br>
            <input type="text" id="adresse" name="adresse" required><br><br>

            <label for="ville">Ville :</label><br>
            <input type="text" id="ville" name="ville" required><br><br>

            <label for="code_postal">Code postal :</label><br>
            <input type="text" id="code_postal" name="code_postal" required><br><br>

            <button type="submit">Envoyer</button>
        </fieldset>
    </form>
</body>
</html>
<?php
// Vérifie si les données ont été soumises
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $ville = htmlspecialchars($_POST['ville']);
    $code_postal = htmlspecialchars($_POST['code_postal']);
} else {
    echo "Aucune donnée reçue.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adresse Client - Résultats</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Informations du client</h1>
    <table>
        <tr>
            <th>Champ</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>Nom</td>
            <td><?php echo $nom; ?></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><?php echo $prenom; ?></td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td><?php echo $adresse; ?></td>
        </tr>
        <tr>
            <td>Ville</td>
            <td><?php echo $ville; ?></td>
        </tr>
        <tr>
            <td>Code postal</td>
            <td><?php echo $code_postal; ?></td>
        </tr>
    </table>
</body>
</html>
