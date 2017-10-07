<?php 
  $pageTitle="Loja: Cadastro de categorias"; 
  require_once 'header.php';
  require_once ('conecta.php');
  require_once ('banco-categoria.php');
?>
<div class="row">
    <div class="col-md-10">
        <h3>Cadastro de categorias</h3>
        <br>
        <form action="adiciona-categoria.php" method="post">
            <div class="form-group">
                <label for="nomeCategoria">Nome:</label>
                <input type="text" class="form-control" id="nomeCategoria" name="nome" placeholder="Nome da categoria">
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-10">
    </div>
</div>