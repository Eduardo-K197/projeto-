<?php
    include ("conexao.php");

    $nome=$_POST['nome'];
    $nascimento=$_POST['nascimento'];
    $sexo=$_POST['sexo'];
    $peso=$_POST['peso'];
    $altura=$_POST['altura'];
    $nacionalidade=$_POST['nacionalidade'];
    $profissão=$_POST['profissão'];

    $sql="insert into pessoas(nome, nascimento, sexo, peso, altura, nacionalidade, profissão) 
    VALUE ('$nome', '$nascimento', '$sexo', '$peso', '$altura', '$nacionalidade', '$profissão')";

if(mysqli_query($conexao, $sql)){
        echo "Usúario cadastrado com sucesso";
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
    ?>