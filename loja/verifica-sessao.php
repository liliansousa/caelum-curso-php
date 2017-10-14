<?php
    session_start();
    function validaSessao(){
        if(!isset($_SESSION["usuario_logado"])){
            Header("Location: index.php?sempermissao=true");
            die();
        }
    }
    return false;

    function usuarioEstaLogado(){
        return isset($_SESSION["usuario_logado"]);
    }

    function usuarioLogado(){
        return $_SESSION["usuario_logado"];
    }
    
    function logaUsuario($login){
        $_SESSION["usuario_logado"] = $login;
    }

    function logout(){
        session_destroy();
    }

?>