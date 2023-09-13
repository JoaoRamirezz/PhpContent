<?php 
    require_once 'conexao.php';

    if(isset($_GET['id']))  {

        $id = $_GET['id'];
        $query = "SELECT * FROM `tasks` WHERE `id`='$id'";
        $result = mysqli_query($conn, $query);

        $row = mysqli_fetch_assoc($result);
        $name = $row['nome'];
        $description = $row['descricao'];
        $time = $row['prazo'];
        $priority = $row['prioridade'];
        $finished = $row['concluida'];
        
    }

    if(isset($_POST['alterar'])){
        $id = $_GET['id'];
        $name = $_POST['nome'];
        $description = $_POST['descricao'];
        $time = $_POST['prazo'];
        $priority = $_POST['prioridade'];
        $finished = $_POST['concluida'];

        $sqlUpdate = "UPDATE `tasks` SET 
        `nome`='$name',
        `descricao`='$description',
        `prazo`='$time', 
        `prioridade`='$priority',
        `concluida`='$finished' WHERE `id`= '$id'";

        $result = mysqli_query($conn, $sqlUpdate);
        header("Location: index.php");
    }
?>