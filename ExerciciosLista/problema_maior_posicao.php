<?php
$numbers = [];
$position = 1;
$bigger = -99999;

echo "Quantos numeros você irá digitar? ";
$qtt = readLine();

for($i = 0; $i < $qtt; $i++){
    echo "Digite um número: ";
    $number = readLine();
    $numbers[$i] = $number;
    
    if($number > $bigger){
        $bigger = $number;
        $position = $i;
    }
}

echo "MAIOR VALOR: " .$bigger. "\n";
echo "POSIÇÃO DO MAIOR VALOR: " . $position;

?>