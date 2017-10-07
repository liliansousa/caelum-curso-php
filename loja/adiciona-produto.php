<?php 
  $pageTitle="Loja: Cadastro de produto"; 
  include 'header.php';
  $nome = $_GET["nome"];
  $preco = $_GET["preco"];

  $conexao = mysqli_connect('localhost','root','caelum','loja');

  function insereProduto($conexao, $nome, $preco){
    $query = "INSERT INTO produtos(nome, preco) values ('{$nome}',{$preco})";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
  }

  if(insereProduto($conexao, $nome, $preco)){?>
    <p>Produto <?=$nome ?> inserido com sucesso! </p>
  <?php
  }else { ?>
    <p>Falha ao inserir o produto</p>
  <?php  
  }
  mysqli_close($conexao);
?>

<?php include 'footer.php' ?>
