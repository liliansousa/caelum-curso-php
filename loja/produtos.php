<?php 
  $pageTitle="Loja: Lista de produtos"; 
  include 'header.php';
  require_once ('conecta.php');
  require_once ('banco-produto.php');
  $produtos = listaProdutos($conexao);
?>
<div class="row">
    <div class="col-md-10">
        <h2>Lista de produtos</h2>
        <br>
        <?php if (array_key_exists("removido", $_GET) && $_GET[removido]==true){?>
        <p class="alert-success">Produto <?=$id ?>removido com sucesso</p>
        <?php } ?>
    </div>
</div>
<div class="row">
    <div class="col-md-10">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <td><strong>id</strong></td>
                        <td><strong>Nome</strong></td>
                        <td><strong>Preço</strong></td>
                        <td><strong>Descrição</strong></td>
                        <td><strong>categoria</strong></td>
                    </tr>
                   
                </thead>
                <tbody>
                
                <?php foreach($produtos as $produto): ?>
                    <tr>
                        <td><?= $produto->getId(); ?></td>
                        <td><?= $produto->getNome(); ?></td>
                        <td><?= $produto->getPreco(); ?></td>
                        <td><?= substr($produto->getDescricao(),0, 40) ?></td>
                        <td></td>
                        <td><a class="btn btn-default" href="remove-produto.php?id=<?=$produto->getId(); ?>">Excluir</a></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>