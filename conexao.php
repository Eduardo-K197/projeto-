<?php
$servidor="52.21.128.106";
$usuario="Eduardo";
$senha="353331499Eduardo";
$banco="cadastro";

$conexao=mysqli_connect($servidor, $usuario, $senha, $banco);
if(!$conexao){
    die("Houve um erro: ".mysqli_connect_error());
}
?>