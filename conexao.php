<?php

$servidor="localhost";
$usuario="Eduardo";
$senha="353331499Eduardo";
$banco="cadastro";

$conexao=mysqli_connect($servidor, $usuario, $senha, $banco);
if(!$conexao){
    die( "Não pode conectar: ".mysqli_connect_error());
}
