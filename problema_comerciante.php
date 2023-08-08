<?php
$v1 = 0;
$v2 = 0;
$v3 = 0;
$vendas = [];
$purchases = [];
$profit = [];

echo "quantas pessoas você vai digitar? ";
$qtt = readLine();

for($i = 0; $i < $qtt; $i++){
    echo "Produto {$i}\n";
    echo "Nome: ";
    $name = readLine();
    
    echo "Preço de compra: ";
    $p = readLine();
    $purchases[$i] = $p;
    
    echo "Preço de venda: ";
    $v = readLine();
    $vendas[$i] = $v;
    
    $prof = $v - $p;
    $profit[$i] = $prof;
    
    if($prof < $p*0.1){
        $v1++;
    }
    else if($prof >= $p*0.1|| $prof <= $p*0.2){
        $v2++;
    }
    else if($prof > $p*0.2){
        $v3++;
    }
}

echo "RELATORIO:\n";
echo "Lucro abaixo de 10%: " . $v1 . "\n";
echo "Lucro entre 10% e 20%: " . $v2 . "\n";
echo "Lucro acima de 20%: " . $v3 . "\n";
echo "Valor total de compra: " . array_sum($purchases) . "\n";
echo "Valor total de vendas: " . array_sum($vendas) . "\n";
echo "Valor total de lucro: " . array_sum($profit) . "\n";

?>