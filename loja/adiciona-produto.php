<?php 
  require_once ('header.php');
  require_once ('conecta.php');
  //require_once ('banco-produto.php') ; replaced from ProdutoDAO
  require_once ('verifica-sessao.php') ;
  require_once ('autoload.php') ;
  $pageTitle="Loja: Cadastro de produto"; 

  $produto = new Produto();
  $daoProd = new ProdutoDAO($conexao);

  $produto->setNome($_POST["nome"]);
  $produto->setPreco($_POST["preco"]);
  $produto->setDescricao($_POST["descricao"]);
  $produto->setCategoria(new Categoria());
  $produto->getCategoria()->setId($_POST["categoria_id"]);
  $produto->setUsado($_POST['usado']);
  $prodito->setTipoProduto($_POST['tipoProduto']);
  $produto->setIsbn($_POST['isbn']);

  if($tipo == 'Produto'){

  }
  

  if($daoProd->insereProduto($produto)){?>
    <p>Produto <?=$produto->getNome(); ?> inserido com sucesso! </p>
  <?php
  }else { ?>
    <p>Falha ao inserir o produto</p>
  <?php  
  }
  mysqli_close($conexao);
?>

<?php require_once ('footer.php'); ?>
