<?php

$nombreInitial = 100; 
$tirages = 0;
$nombreTire = 0;
while ($nombreTire !== $nombreInitial) {
    $nombreTire = rand(100, 999); 
    $tirages++;
}
echo "Nombre initial : $nombreInitial<br>";
echo "Nombre de tirages nécessaires : $tirages<br>";
?>
<?php

$nombreInitial = 100; 
$tirages = 0;
$nombreTire = 0;
for (; $nombreTire !== $nombreInitial; $tirages++) {
    $nombreTire = rand(100, 999); 
}
echo "Nombre initial : $nombreInitial<br>";
echo "Nombre de tirages nécessaires : $tirages<br>";
?>
