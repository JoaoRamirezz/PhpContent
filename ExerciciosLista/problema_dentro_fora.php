<?php

$in = 0;
$out = 0;

echo "Quantos números você vai digitar? ";
$qtt = readLine();

for($i = 0; $i < $qtt; $i++){
    echo "Digite um numero: ";
    $number = readLine();
    
    if($number <= 20 && $number >= 10)
    {
        $in++;
    }else{
        $out++;
    }
}

echo "Dentro: " . $in . "\nFora: " . $out;
?>