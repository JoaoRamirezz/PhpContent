<?php

echo "Digite o numero ";
$number = readLine();
$result = 1;


for($i = 1; $i < $number+1; $i++)
{
    $result *= $i;
}

echo $result;
?>