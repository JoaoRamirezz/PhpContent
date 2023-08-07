<?php
$gasolina = 0;
$alcool = 0;
$diesel = 0;


while(true){
    echo "Digite sua prefência:\n1)Gasolina\n2)Alcool\n3)Diesel\n4)Parar\nR: ";
    $choice = readLine();
    
    if($choice > 4 || $choice < 0){
        echo "Valor inválido!";
    }
    
    if($choice == 1){
        $gasolina += 1;
    }
    
    if($choice == 2){
        $alcool += 1;
    }
    
    if($choice == 3){
        $diesel += 1;
    }
    
    if($choice == 4){
        break;
    }
}

echo "\n\n-------RESULTADO-------\n";
echo "Gasolina: " . $gasolina . "\nAlcool: " . $alcool . "\nDiesel: " . $diesel;
?>