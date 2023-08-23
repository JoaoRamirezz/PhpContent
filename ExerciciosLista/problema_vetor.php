<?php
$numbers = [];

echo "Quantos numeros você irá digitar? ";
$qtt = readLine();


for($i = 0; $i < $qtt; $i++){
    echo "Digite um número: ";
    $number = readLine();
    $numbers[$i] = $number;
}

echo "Valores: ";
foreach($numbers as $number => $n){
    echo $n . " ";
}

echo "\nSoma: ". array_sum($numbers);
echo "\nMedia: ". array_sum($numbers) / count($numbers);
?>