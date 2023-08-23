<?php

while(true){
    echo "Digite o valor de x: ";
    $x = readLine();
    
    echo "Digite o valor de y: ";
    $y = readLine();

    
    if($x > 0 && $y > 0){
        echo "Quadrante 1\n";
    }
    
    if($x > 0 && $y < 0){
        echo "Quadrante 4\n";
    }
    
    if($x < 0 && $y < 0){
        echo "Quadrante 3\n";
    }
    
    if($x < 0 && $y > 0){
        echo "Quadrante 2\n";
    }
    
    if($x == 0 || $y == 0){
        break;
    }
}
?>