<?php

    echo "Digite uma quantidade de segundos: ";
    $segundos = readLine();
    
    $h = $segundos / 3600;
    $resto = $segundos % 3600;
    $m = $resto / 60;
    $s = $resto % 60;
    
    echo (int)$h . ":" . (int)$m . ":" . (int)$s;
    
?>