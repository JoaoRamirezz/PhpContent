<?php
$ages = [];
$names = [];
$index = 0;

$older = -9999;

echo "quantas pessoas você vai digitar? ";
$qtt = readLine();

for($i = 0; $i < $qtt; $i++){
    $a = $i+1;
    echo "Dados da {$a}ª pessoa: \n";
    
    echo "Nome:";
    $name = readLine();
    $names[$i] = $name;
    
    echo "Idade: ";
    $age =readLine();
    $ages[$i] = $age;
    
    if($age > $older){
        $older = $age;
        $index = $i;
    }
}
echo "Pessoa mais velha: " . $names[$index];
?>