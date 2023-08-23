<?php
echo "Digite a senha: ";
$senha = "2002";

while(true){
    $tentativa = readLine();
    if($tentativa == $senha){
        break;
    }
    echo "Tente novamente!\n";
}

echo "Senha correta!";
?>