<?php
class Produto{
    private $id;
    private $nome;
    private $preco;
    private $descricao;
    private $categoria_id;

    public function desconto ($porcentagem = 0.1){
         // 0,1 junto com o parametro esta adicionando um valor default caso nao seja parametro seja nulo
        if($porcentagem >0 && $porcentagem < 1){
            return $this->preco - ($this->preco * porcentgem);
        }
        return $this->preco;

    }

    //getter
    public function getId(){
        return $this->id;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function getCategoriaId(){
        return $this->categoria_id;
    }

    //setter
    public function setId($id){
        return $this->id = $id;
    }
    public function setNome($nome){
        return $this->nome = $nome;
    }
    public function setPreco($preco){
        return $this->preco = $preco;
    }
    public function setDescricao($descricao){
        return $this->descricao = $descricao;
    }
    public function setCategoriaId($categoria_id){
        return $this->categoria_id = $categoria_id;
    }
}
?>