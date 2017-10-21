<?php 
  require_once ('header.php');
  require_once ('conecta.php');
  require_once ('banco-produto.php') ;
  require_once ('verifica-sessao.php') ;
  require_once ('produto.php') ;
  $pageTitle="Loja: Cadastro de produto"; 

  $produto = new Produto();

  $produto->setNome($_POST["nome"]);
  $produto->setPreco($_POST["preco"]);
  $produto->setDescricao($_POST["descricao"]);
  $produto->setCategoriaID($_POST["categoria_id"]);
  

  if(insereProduto($conexao, $produto)){?>
    <p>Produto <?=$produto->getNome(); ?> inserido com sucesso! </p>
  <?php
  }else { ?>
    <p>Falha ao inserir o produto</p>
  <?php  
  }
  mysqli_close($conexao);
?>

<?php require_once ('footer.php'); ?>
