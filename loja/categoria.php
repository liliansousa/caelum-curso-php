<?php

    class Categoria{
        private $id;
        private $nome;

        //getter
        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }

        //setter
        public function setID($id){
            return $this->id = $id;
        }
        public function setNome($nome){
            return $this->nome = $nome;
        }
    }

?>