<?php
$p1 = 2;
$p2 = 3;
$p3 = 5;


echo "Quantos casos você vai realizar? ";
$cases = readLine();


for($i = 0; $i < $cases; $i++)
{
    echo "Digite a primeira nota: ";
    $q1 = readLine();
    $q1 *= $p1;
    
    echo "Digite a segunda nota: ";
    $q2 = readLine();
    $q2 *= $p2;
    
    echo "Digite a terceira nota: ";
    $q3 = readLine();
    $q3 *= $p3;
    
    echo "MEDIA = ". ($q1 + $q2 + $q3) / ($p1 +$p2 +$p3) . "\n";
}
?>