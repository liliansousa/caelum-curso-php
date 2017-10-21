<?php
    require_once ('produto.php') ;
    require_once ('categoria.php') ;

    function insereProduto($conexao, $produto){
        $query = "INSERT INTO produtos(nome, preco, descricao, categoria_id) values (
            '{$produto->setNome( $produto['nome'] )}',
            {$produto->setPreco( $preco['preco'] )},
            '{$produto->setDescricao( $preco['descricao'] )}',
            {$produto->setCategoriaID( $categoria_id['categoria_id'] )}
        )";
        $resultado = mysqli_query($conexao, $query);
        return $resultado;
    }

    function listaProdutos ($conexao){
        $query = "SELECT p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id";
        $resultado = mysqli_query($conexao, $query);
        $produtos = array();
        
        while($array = mysqli_fetch_assoc($resultado)){
            $produto = new Produto();
            $produto->setId($array['id']);
            $produto->setNome($array['nome']);
            $produto->setPreco($array['preco']);
            $produto->setDescricao($array['descricao']);
            $produto->setCategoriaId($array['categoria_id']);

            //relacionando com categoria

            //$produto->categoria = new Categoria();
            //$produto->categoria->id = $array['categoria_id'];
            //$produto->categoria->nome = $array['categoria_nome'];
            array_push($produtos, $produto);
        }
        return $produtos;
    }

    function removeProduto($conexao, $id){
        $query = "DELETE FROM produtos WHERE id = {$id}";
        return mysqli_query($conexao, $query);
    }
?>