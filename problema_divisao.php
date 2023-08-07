<?php

echo "Quantos casos você vai realizar? ";
$cases = readLine();


for($i = 0; $i < $cases; $i++)
{
    echo "Digite o numerador: ";
    $numerador = readLine();
    
    echo "Digite o denominador: ";
    $denominador = readLine();
    
    if($denominador == 0){
        echo "DIVISÃO IMPOSSÍVEL!!\n";
    }else{
        echo "DIVISÃO: " . $numerador / $denominador . "\n";
    }
}
?>