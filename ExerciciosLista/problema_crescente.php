<?php

echo "Digite dois numeros: \n";

$n1 = readline();
$n2 = readline();

while($n1 != $n2){
    if($n1 > $n2){
        echo "DECRESCENTE!" . PHP_EOL;
    } else {
        echo "CRESCENTE!" . PHP_EOL;
    }

    echo "Digite outros dois números: \n";
    $n1 = readline();
    $n2 = readline();
}

echo "NUMEROS IGUAIS";


?>