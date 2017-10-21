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
            //$produto->id= $array['id'];
            $produto->getId();
            //$produto->nome= $array['nome'];
            $produto->getNome();
            //$produto->preco= $array['preco'];
            $produto->getPreco();
            //$produto->descricao= $array['descricao'];
            $produto->getDescricao();
            //$produto->categoria_id = $array['categoria_id'];
            $produto->getCategoriaId();

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