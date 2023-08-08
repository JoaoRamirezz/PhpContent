<?php
$numbers = [];

echo "Quantos numeros você irá digitar? ";
$qtt = readLine();

for($i = 0; $i < $qtt; $i++){
    echo "Digite um número: ";
    $number = readLine();
    $numbers[$i] = $number;
}

$media = array_sum($numbers)/count($numbers);
echo "MEDIA DO VETOR: " .$media. "\n";
echo "ELEMENTOR ABAIXO DA MEDIA: \n";

foreach($numbers as $number => $n){
    if($n < $media){
        echo $n . "\n";
    }
}

?>