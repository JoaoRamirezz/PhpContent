<?php

    require_once 'conexao.php';

    $title = $_POST['titulo'];
    $description = $_POST['descricao'];


    $sqlInsert = "INSERT INTO `id`(`id`, `title`, `description`) VALUES 
    (NULL,'$title','$description')";

    $result = mysql_query($conn, $sqlInsert);

    if(!$result){
        echo 'Query falhou!';
    }
?>