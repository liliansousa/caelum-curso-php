<?php
    //Factory -  Design Patterns
    class ProdutoFactory{
        private $opcoes = array("Produto","LivroFisico","Ebook");

        function criaObjeto ($tipo){
            if(in_array($this->opcoes,$tipo)){
                return new $tipo;
            }
            return new Produto();
        }
    }
?>