<?php
    $servidor="107.21.4.106";
    $usuario="sbcpa_user_sipa";
    $senha="@*SbCpA102030##";
    $banco="ed_k197";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $banco);
    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_error());
    }
?>