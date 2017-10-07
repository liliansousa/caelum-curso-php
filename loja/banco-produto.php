<?php
    function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id){
        $query = "INSERT INTO produtos(nome, preco, descricao, categoria_id) values ('{$nome}',{$preco},'{$descricao}', {$categoria_id})";
        $resultado = mysqli_query($conexao, $query);
        return $resultado;
    }

    function listaProdutos ($conexao){
        $query = "SELECT p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id";
        $resultado = mysqli_query($conexao, $query);
        $produtos = array();
        
        while($produto = mysqli_fetch_assoc($resultado)){
            array_push($produtos, $produto);
        }
        return $produtos;
    }

    function removeProduto($conexao, $id){
        $query = "DELETE FROM produtos WHERE id = {$id}";
        return mysqli_query($conexao, $query);
    }
?>