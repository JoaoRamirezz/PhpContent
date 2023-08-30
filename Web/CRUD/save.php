<?php

    require_once 'conexao.php';

    $title = $_POST['titulo'];
    $description = $_POST['descricao'];


    $sqlInsert = "INSERT INTO `tarefa`( `title`, `description`) VALUES 
    ('$title','$description')";

    $result = mysqli_query($conn, $sqlInsert);

    if(!$result){
        echo 'Query falhou!';
    }
?>