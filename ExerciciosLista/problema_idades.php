<?php
echo "Dados da primeira pessoa:\n";

echo "Nome:";
$nome1 = readLine();

echo "Idade:";
$idade1 = readLine();

echo "Dados da segunda pessoa:\n";

echo "Nome:";
$nome2 = readLine();

echo "Idade:";
$idade2 = readLine();

$media = ($idade1 + $idade2) / 2;

echo "Media entre as idades:" .number_format($media,1,".","");
?>