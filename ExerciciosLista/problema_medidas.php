<?php
echo "Digite a medida A: ";
$a = readLine();

echo "Digite a medida B: ";
$b = readLine();

echo "Digite a medida C: ";
$c = readLine();

echo "Area do quadrado: " . $a * $a . "\n";
echo "Area do triangulo: " . ($a * $b)/2 . "\n";
echo "Area do trapezio: " . ($a + $b)*$c/2 . "\n";
?>