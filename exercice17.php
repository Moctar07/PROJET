<?php
function calculerSinus(float $angle, string $unite = 'r'): float {
    // Convertit l'angle en radians si nécessaire
    switch (strtolower($unite)) {
        case 'd': // Degrés
            $angle = deg2rad($angle);
            break;
        case 'g': // Grades
            $angle = $angle * pi() / 200; // Conversion des grades en radians
            break;
        case 'r': // Radians (par défaut)
            // Pas de conversion nécessaire
            break;
        default:
            throw new InvalidArgumentException("Unité invalide. Utilisez 'r' pour radians, 'd' pour degrés, ou 'g' pour grades.");
    }

    // Calcul du sinus
    return sin($angle);
}

// Exemple d'utilisation
try {
    echo "Sinus en radians (π/6) : " . calculerSinus(pi() / 6) . "\n";
    echo "Sinus en degrés (30°) : " . calculerSinus(30, 'd') . "\n";
    echo "Sinus en grades (33.33g) : " . calculerSinus(33.33, 'g') . "\n";
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
