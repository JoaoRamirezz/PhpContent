<?php

echo "Digite o largura do terreno: ";
$largura = readline();


echo "Digite o comprimeto do terreno: ";
$comprimento = readLine();

echo "Digite o valor do metro quadrado: ";
$m2 = readLine();

$area = $largura * $comprimento;
$preco = $area * $m2;

echo "Area do terreno = " . $area . "\n";
echo "Preço do terreno = ". $preco;

?>