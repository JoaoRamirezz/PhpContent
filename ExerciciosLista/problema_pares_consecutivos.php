<?php
while(true){
    $numbers = [];
    
    echo "\nDigite um numero inteiro: ";
    $number = readLine();
     if($number <= 0){
         break;
     }
     
     if($number %2 != 0){
         $number += 1;
     }
     
     for($i = 0; $i < 5; $i++){
         $numbers[$i] = $number;
         $number += 2;
     }
     
     echo array_sum($numbers);
}
?>