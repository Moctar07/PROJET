<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de TVA</title>
</head>
<body>
    <h1>Calculateur de TVA</h1>
    <form method="post">
        <label for="prix_ht">Prix HT (€) :</label><br>
        <input type="number" id="prix_ht" name="prix_ht" step="0.01" value="<?php echo isset($_POST['prix_ht']) ? htmlspecialchars($_POST['prix_ht']) : ''; ?>" required><br><br>

        <label for="taux_tva">Taux de TVA (%) :</label><br>
        <input type="number" id="taux_tva" name="taux_tva" step="0.01" value="<?php echo isset($_POST['taux_tva']) ? htmlspecialchars($_POST['taux_tva']) : ''; ?>" required><br><br>

        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $prixHT = floatval($_POST['prix_ht']);
        $tauxTVA = floatval($_POST['taux_tva']);

        // Calcul des valeurs
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;

        // Affichage des résultats dans des zones de texte
        echo '<h2>Résultats</h2>';
        echo '<label for="montant_tva">Montant de la TVA (€) :</label><br>';
        echo '<input type="text" id="montant_tva" value="' . round($montantTVA, 2) . '" readonly><br><br>';
        echo '<label for="prix_ttc">Prix TTC (€) :</label><br>';
        echo '<input type="text" id="prix_ttc" value="' . round($prixTTC, 2) . '" readonly><br>';
    }
    ?>
</body>
</html>
