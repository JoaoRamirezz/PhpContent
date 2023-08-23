<?php

$numbers = [];

echo "Digite as idades: \n";
$counter = 0;

while(true){
    $n = readLine();
    if($n < 0){
        break;
    }
    $numbers[$counter] = $n;
    $counter += 1;
}

if(count($numbers) > 0){
    echo "A media dos numeros é: ". array_sum($numbers)/$counter;
}
else{
    echo "Impossível calcular.";
}
    
?>