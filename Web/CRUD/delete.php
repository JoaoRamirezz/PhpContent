<?php

require_once "./conexao.php";

$id = $_GET['id'];

echo $id;

$sqlDelete = "DELETE FROM `tarefa` WHERE id = $id";
$result = mysqli_query($conn, $sqlDelete);

header("Location: index.php");
?>
