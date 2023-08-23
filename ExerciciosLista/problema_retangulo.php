<?php

$base = readline("Base do retangulo: ");
$altura = readline("Altura do retangulo: ");

$area = $base * $altura;
$perimetro = ($base * 2) + ($altura * 2);
$diagonal = sqrt(pow($base, 2) + pow($altura,2));

echo "ÁREA = " .number_format($area, 4, ".","").PHP_EOL;
echo "PERIMETRO = " .number_format($perimetro, 4, ".","").PHP_EOL;
echo "DIAGONAL = " .number_format($diagonal, 4, ".","").PHP_EOL;

?>