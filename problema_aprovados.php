<?php
$grades = [];
$names = [];
$index = 0;
$disapproved = [];

echo "quantas pessoas você vai digitar? ";
$qtt = readLine();

for($i = 0; $i < $qtt; $i++){
    echo "Digite nome, primeira e segunda nota do {$i} aluno: \n";
    $name = readLine();
    $gA = readLine();
    $gB = readLine();
    
    $names[$i] = $name;
    $grades[$i] = ($gA + $gB)/2;
    
    if($grades[$i] < 6){
        $disapproved[$index] = $name;
        $index++;
    }
}

echo "Alunos reprovados: \n";
foreach($disapproved as $dis => $d){
    echo $d . "\n";
}
?>