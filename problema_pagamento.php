<?php
echo "Digite o nome do trabalhador: ";
$name = readLine();

echo "Digite o valor recebido por horas trabalhadas: ";
$value = readLine();

echo "Digite quantas horas foram trabalhadas: ";
$hours = readLine();

echo "O pagamento de ". $name . " sera " . $value * $hours;

?>