<?php require_once ('conecta.php'); ?>
<?php require_once ('banco-produto.php') ; ?>

<?php 
$id= $_GET['id'];
removeProduto($conexao, $id);

header("Location: produtos.php?removido=true");
die();
?>

  