<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";

    $conexao = new mysqli ($servidor, $usuario, $senha);

    if($conexao->connect_error)
        die ("Conexão falhou: " . $conexao->connect_error);

    $sql = "DROP DATABASE BD_TP_4";
    if($conexao->query($sql) === TRUE)
        echo "Banco de dados BD_TP_4 excluido com sucesso!<br>";
    else    
        echo "Erro excluindo o banco de dados BD_TP_4: " . $conexao->error;

    $conexao->close();
?>