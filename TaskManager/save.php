<?php

    require_once 'conexao.php';

    $name = $_POST['nome'];
    $description = $_POST['descricao'];
    $time = $_POST['prazo'];
    $priority = $_POST['prioridade'];
    $finished = $_POST['concluida'];


    $sqlInsert = "INSERT INTO `tasks`( `nome`, `descricao`, `prazo`, `prioridade`, `concluida`) VALUES 
    ('$name','$description','$time','$priority','$finished')";

    $result = mysqli_query($conn, $sqlInsert);

    if(!$result){
        echo 'Query falhou!';
    }

    ?>
<meta http-equiv="refresh" content="0;url=index.php">