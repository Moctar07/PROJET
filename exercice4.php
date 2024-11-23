<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du PPCM</title>
</head>
<body>
    <h1>Calculateur de PPCM</h1>
    <form method="POST">
        <label for="nombre1">Entrez le premier entier :</label>
        <input type="number" id="nombre1" name="nombre1" required>
        <br><br>
        <label for="nombre2">Entrez le deuxième entier :</label>
        <input type="number" id="nombre2" name="nombre2" required>
        <br><br>
        <button type="submit">Calculer le PPCM</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $nombre1 = (int)$_POST['nombre1'];
        $nombre2 = (int)$_POST['nombre2'];

        function calculPGCD($a, $b) {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }
        function calculPPCM($a, $b) {
            $pgcd = calculPGCD($a, $b);
            return abs($a * $b) / $pgcd; 
        }
        $ppcm = calculPPCM($nombre1, $nombre2);

        
        echo "<p>Le PPCM de $nombre1 et $nombre2 est : <strong>$ppcm</strong></p>";
    }
    ?>
</body>
</html>
