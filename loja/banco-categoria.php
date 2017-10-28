<?php
    require_once ('autoload.php') ;

    function listaCategorias($conexao){
        $categorias = array();
        $query = "SELECT * FROM categorias";
        $resultado = mysqli_query($conexao, $query);

        while($categoria = mysqli_fetch_assoc($resultado)){
            $categoria = new categoria();
            $categoria->getId();
            $categoria->getNome();
            array_push($categorias, $categoria);
        }
        return $categorias;
    }

    function insereCategoria($conexao, $nome){
        $query = "INSERT INTO categorias(nome) values ('{$nome}')";
        $resultado = mysqli_query($conexao, $query);
        return $resultado;
    }
?>