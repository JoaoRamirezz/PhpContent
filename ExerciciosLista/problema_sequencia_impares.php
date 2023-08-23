<?php
echo "Digite o valor desejado: ";
$value = readLine();
$counter = 1;

while($counter != $value){
    echo $counter . "\n";
    if($counter == $value-1){
        break;
    }
    $counter += 2;
}
echo $counter;
?>