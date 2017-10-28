<?php
    class ProdutoDAO{

        private $conexao;

        function __construct($conexao){
            $this->conexao = $conexao;
        }

        function insereProduto($produto){
            $query = "INSERT INTO produtos(nome, preco, descricao, categoria_id) values (
                '{$produto->getNome()}',
                {$produto->getPreco()},
                '{$produto->getDescricao()}',
                {$produto->getCategoriaId()}
            )";
            $resultado = mysqli_query($this->conexao, $query);
            return $resultado;
        }

        function listaProdutos (){
            $query = "SELECT p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id";
            $resultado = mysqli_query($this->conexao, $query);
            $produtos = array();
            
            while($array = mysqli_fetch_assoc($resultado)){
                $produto = new Produto();
                $produto->setId($array['id']);
                $produto->setNome($array['nome']);
                $produto->setPreco($array['preco']);
                $produto->setDescricao($array['descricao']);
                $produto->setCategoriaId($array['categoria_id']);

                //relacionando com categoria
                $produto->setCategoria(new Categoria());
                $produto->getCategoria()->setId($array['categoria_id']);
                $produto->getCategoria()->setNome($array['categoria_nome']);
                array_push($produtos, $produto);
            }
            return $produtos;
        }

        function removeProduto($id){
            $query = "DELETE FROM produtos WHERE id = {$id}";
            return mysqli_query($this->conexao, $query);
        }
    }
?>