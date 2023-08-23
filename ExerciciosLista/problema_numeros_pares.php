<?php
$numbers = [];
$counter = 0;

echo "Quantos numeros você irá digitar? ";
$qtt = readLine();

for($i = 0; $i < $qtt; $i++){
    echo "Digite um número: ";
    $number = readLine();
    $numbers[$i] = $number;
}

echo "NUMEROS PARES: ";
foreach($numbers as $number => $n){
    if($n%2 == 0){
        echo $n . " ";
        $counter += 1;
    }
}

echo "\nQUANTIDADE DE PARES: ". $counter;
?>