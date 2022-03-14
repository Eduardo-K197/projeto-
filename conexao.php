<?php
    $servidor="127.0.0.1";
    $usuario="root";
    $senha="";
    $banco="Cadastro";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $banco);
    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_error());
    }
?>