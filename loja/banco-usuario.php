<?php
    $senhaMD5 = md5($senha);
    $query = "select * from usuarios where login='{$login}' and senha='{$senhaMDS5}'";

    function buscaUsuario($conexao, $login, $senha){
        $senhaMD5 = md5($senha);
        $login = mysqli_real_escape_string($conexao, $login);
        $query = "select * from usuarios where login = '{$login}' and senha = '{$senhaMD5}'"; 
        $resultado = mysqli_query($conexao, $query);
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }

?>