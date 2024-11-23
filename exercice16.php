<?php
function formatTableauCasse(array &$tableau) {
    foreach ($tableau as &$chaine) {
        // Vérifie si l'élément est bien une chaîne de caractères
        if (is_string($chaine)) {
            $chaine = ucfirst(strtolower($chaine)); // Met le premier caractère en majuscule, les autres en minuscules
        }
    }
}

// Exemple d'utilisation
$tableauExemple = ["bOnJour", "tOUt LE moNde", "php eSt gÉnIal"];
formatTableauCasse($tableauExemple);

// Affichage du tableau transformé
print_r($tableauExemple);
?>
