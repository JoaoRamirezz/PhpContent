<?php
echo "preço do produto: ";
$preco = readLine();

echo "Quantidade comprada: ";
$qtt = readLine();

echo "Dinheiro recebido: ";
$dinheiro = readLine();

echo "Troco: " . $dinheiro - $preco*$qtt;
?>