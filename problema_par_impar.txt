<?php

while(true){
    echo "Digite o numero: ";
    $number = readLine();
    
    if($number%2 == 0){
        $str = "PAR";
    }else{
        $str = "IMPAR";
    }
    
    if($number > 0){
        echo $str . " POSITIVO\n";
    }else{
        echo $str . " NEGATIVO\n";
    }
}

?>