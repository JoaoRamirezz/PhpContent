<?php
$numbers = [];

while(true){
    echo "Quantos numeros você irá digitar? ";
    $qtt = readLine();
    if($qtt < 11){
        break;
    }
    echo "Valor inválido!\n";
}


for($i = 0; $i < $qtt; $i++){
    echo "Digite um número: ";
    $number = readLine();
    $numbers[$i] = $number;
}

foreach($numbers as $number => $n){
    if($n < 0){
        echo $n . "\n";
    }
}
?>