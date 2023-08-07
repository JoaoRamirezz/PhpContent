<?php

echo "Deseja a tabuada para qual valor?: ";
$valor = readline();

for ($i=0; $i <= 10; $i++){
    echo "$valor x $i = " . ($valor * $i) . PHP_EOL;
}
