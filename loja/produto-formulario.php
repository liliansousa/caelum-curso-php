<?php 
  $pageTitle="Loja: Formulário de cadastro de produto"; 
  include 'header.php';
?>
<div class="row">
    <div class="col-md-8">
        <h1>Formulário de cadadastro</h1>
        <form action="adiciona-produto.php">
            <div class="form-group">
                <label for="nomeProd">Nome:</label>
                <input type="text" class="form-control" id="nomeProd" name="nome" placeholder="Nome do produto">
            </div>
            <div class="form-group">
                <label for="precoProd">Preço:</label>
                <input type="number" class="form-control" id="precoProd" name="preco" placeholder="Preço do produto">
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </form>
    </div>
</div>
<?php include 'footer.php' ?>