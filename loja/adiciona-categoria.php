<?php 
    $pageTitle="Adiciona Categoria"; 
    include 'header.php';

    $nome = $_POST["nome"];
    require_once ('conecta.php');
    require_once ('banco-categoria.php') ;

    if(insereCategoria($conexao, $nome)){?>
        <p>Categoria <?=$nome ?> adicionada com sucesso! </p>
    <?php
    }else { ?>
        <p>Falha ao inserir o categoria</p>
    <?php  
    }
    mysqli_close($conexao);
  
?>
<?php require_once ('footer.php'); ?>