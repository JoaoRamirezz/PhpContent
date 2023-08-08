<?php
$sizes = [];
$tallNames = [];

echo "Quantos numeros você irá digitar? ";
$qtt = readLine();


for($i = 0; $i < $qtt; $i++){
    echo "Dados da {$i}ª pessoa: \n";
    
    echo "Nome: ";
    $name = readLine();
    
    echo "Idade: ";
    $age = readLine();
    
    echo "Altura: ";
    $size = readLine();
    
    if($age < 16){
        $tallNames[$i] = $name;
    }
    
    $sizes[$i] = $size;
}

$pct = (count($tallNames)*100) / count($sizes);

echo "Altura média: " . array_sum($sizes)/count($sizes) . "\n";
echo "Pessoas com menos de 16 anos: " . $pct . "%\n";

foreach($tallNames as $name => $n){
    echo $n . "\n";
}
?>