<?php
$womens = [];
$index = 0;

$mans = 0;

$taller = 9999;
$higher = -9999;

echo "quantas pessoas você vai digitar? ";
$qtt = readLine();

for($i = 0; $i < $qtt; $i++){
    echo "Dados da {$i} pessoa: \n";
    echo "Altura: ";
    $altura = readLine();
    
    echo "Genero: ";
    $genero = readLine();
    
    if($genero == "f"){
        $womens[$index] = $altura;
        $index++;
    }
    if($genero == "m"){
        $mans++;
    }
    if($altura > $higher){
        $higher = $altura;
    }
    if($altura < $taller){
        $taller = $altura;
    }
}

echo "RELATORIO:\n";
echo "Menor altura: " . $taller . "\n";
echo "Maior altura: " . $higher . "\n";
echo "Media das alturas das mulheres: " . array_sum($womens)/count($womens) . "\n";
echo "Numero de Homens: " . $mans . "\n";

?>