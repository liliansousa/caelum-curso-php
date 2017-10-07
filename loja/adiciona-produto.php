<?php 
  $nome = $_POST["nome"];
  $preco = $_POST["preco"];
  $descricao = $_POST["descricao"];  
  $categoria_id = $_POST["categoria_id"];

  require_once ('header.php');
  require_once ('conecta.php');
  require_once ('banco-produto.php') ;

  if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)){?>
    <p>Produto <?=$nome ?> inserido com sucesso! </p>
  <?php
  }else { ?>
    <p>Falha ao inserir o produto</p>
  <?php  
  }
  mysqli_close($conexao);
?>

<?php require_once ('footer.php'); ?>
