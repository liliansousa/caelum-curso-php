<?php 
  $pageTitle="Loja: Cadastro de produto"; 
  require_once 'header.php';
  require_once 'conecta.php';
  require_once 'banco-categoria.php';
  require_once 'verifica-sessao.php';
  validaSessao();
?>
<div class="row">
    <div class="col-md-8">
        <h3>Formulário de cadadastro</h3><br>
        <form action="adiciona-produto.php" method="post">
            <div class="form-group">
                <label for="nomeProd">Nome:</label>
                <input type="text" class="form-control" id="nomeProd" name="nome" placeholder="Nome do produto">
            </div>
            <div class="form-group">
                <label for="precoProd">Preço:</label>
                <input type="number" class="form-control" id="precoProd" name="preco" placeholder="Preço do produto">
            </div>
            <div class="form-group">
                <label for="categoriaProd">Categoria:</label>
                <select name="categoria_id" id="categoriaProd" class="form-control">
                <?php 
                $categorias = listaCategorias($conexao);
                foreach($categorias as $categoria) : 
                ?>
                    <option value="<?= $categoria->getId() ?>"><?= $categoria->getNome() ?></option>
                <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="descricaoProd">Descrição:</label>
                <textarea class="form-control" name="descricao" id="descricaoProd" cols="30" rows="5"></textarea>
            </div>
            
            
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </form>
    </div>
</div>
<?php include 'footer.php' ?>