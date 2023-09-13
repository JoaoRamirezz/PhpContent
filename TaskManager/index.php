<?php
require_once "./includes/header.php";
require_once "./conexao.php";
?>

<link rel="stylesheet" type="text/css" href="style.css" />

<main>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nome" id="titulo" class="form-control" 
                        placeholder="Titulo">
                    </div>

                    <div class="form-group">
                        <textarea type="text" name="descricao" id="descricao" rows="2" 
                        placeholder="Descricao" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="date" name="prazo" id="descricao" rows="2" 
                        placeholder="Descricao" class="form-control">
                    </div>

                    <select name="prioridade" id="select" aria-label="Default select example">
                        <option disabled selected>Prioridade</option>
                        <option value="baixa">Baixa</option>
                        <option value="media">Media</option>
                        <option value="alta">Alta</option>
                    </select>

                    <br><br>

                    <select name="concluida" id="select" aria-label="Default select example">
                        <option disabled selected>Concluida</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>

                    <br><br>
                    <input type="submit" name="salvar" value="Salvar" class="btn btn-success btn-block">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tarefa</th>
                        <th>Descrição</th>
                        <th>Prazo</th>
                        <th>Prioridade</th>
                        <th>Concluída</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM `tasks`";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($result)){ 
                    ?>


                    <tr>
                        <td> <?php echo $row['nome'] ?> </td>
                        <td> <?php echo $row['descricao'] ?> </td>
                        <td> <?php echo $row['prazo'] ?> </td>
                        <td> <?php echo $row['prioridade'] ?> </td>
                        <td> <?php echo $row['concluida'] ?> </td>
                        <td> 
                            <a href="edit.php?id=<?=$row['id']?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>


                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>  
    </div>
</main>

<?php
require_once "./includes/header.php";
?>