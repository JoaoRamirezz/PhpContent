<?php
$A = [];
$B = [];

echo "Quantos numeros você irá digitar? ";
$qtt = readLine();

echo "Preencha o vetor A: \n";
for($i = 0; $i < $qtt; $i++){
    echo "Digite um número: ";
    $number = readLine();
    $A[$i] = $number;
}

echo "Preencha o vetor B: \n";
for($i = 0; $i < $qtt; $i++){
    echo "Digite um número: ";
    $number = readLine();
    $B[$i] = $number;
}

echo "Vetor Resultante: \n";
for($i = 0; $i < $qtt; $i++){
    $C[$i] = $A[$i] + $B[$i];
    echo $C[$i] . "\n";
}

?>