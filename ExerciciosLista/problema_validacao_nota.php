<?php

while(true){
    while(true){
        echo "Digite a primeira nota: ";
        $n1 = readLine();
        
        if($n1 > 0){
            break;
        }
        
        echo "Valor inválido!\n";
    }
    
    while(true){
        echo "Digite a segunda nota: ";
        $n2 = readLine();
        
        if($n2 > 0){
            break;
        }
        
        echo "Valor inválido!\n";
    }
    
    echo "Media: " . ($n1 + $n2)/2;
    break;
}
?>