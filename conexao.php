<?php
    $servidor="18.206.125.194";
    $usuario="Eduardo";
    $senha="353331499Eduardo";
    $banco="Cadastro";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $banco);
    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_error());
    }
?>