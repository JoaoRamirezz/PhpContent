<?php 
    require_once 'conexao.php';
    require_once 'editBack.php';
?>

<link rel="stylesheet" type="text/css" href="style.css" />

<?php require_once "includes/header.php"; ?>
    <main>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit.php?id=<?=$row['id']?>" method="POST">
                    <div class="form-group">
                            <input type="text" name="id" id="id" class="form-control" placeholder="Código" value="id"  disabled>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nome" id="titulo" placeholder="Titulo" class="form-control" value="<?=$name?>">
                        </div>
                        <div class="form-group">
                            <textarea name="descricao" id="descricao" placeholder="Descrição" class="form-control"
                                      rows="2" value="descricao"> <?=$description?></textarea>
                        </div>
                        <div class="form-group">
                            <input name="prazo" type="date" id="descricao" class="form-control"
                                    value="descricao" placeholder=<?=$time?>> 
                        </div>
                        <select name="prioridade" id="select" aria-label="Default select example">
                            <option selected><?=$priority?></option>
                            <option value="baixa">Baixa</option>
                            <option value="media">Media</option>
                            <option value="alta">Alta</option>
                        </select>

                        <br><br>
                        <select name="concluida" id="select" aria-label="Default select example">
                            <option selected><?=$finished?></option>
                            <option value="Sim">Sim</option>
                            <option value="Nao">Não</option>
                        </select>
                        <br><br>

                        <div class="form-group">
                            <input type="submit" value="alterar" name="alterar" class="btn btn-secondary btn-block">
                        </div>
                    </form>
                </div>
            </div>

        </div>


<?php
require_once "includes/footer.php";
?>