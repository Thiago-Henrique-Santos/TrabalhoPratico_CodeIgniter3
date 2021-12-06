<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";

    $conexao = new mysqli ($servidor, $usuario, $senha);

    if($conexao->connect_error)
        die ("Conexão falhou: " . $conexao->connect_error);

    $sql = "CREATE DATABASE IF NOT EXISTS BD_TP_4";
    if($conexao->query($sql) === TRUE)
        echo "Banco de dados BD_TP_4 criado com sucesso!";
    else    
        echo "Erro criando o banco de dados BD_TP_4: " . $conexao->error;

    $conexao->close();
?>