<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "BD_TP_4";

    $conexao = new mysqli ($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error)
        die ("Conexão falhou: " . $conexao->connect_error);

    //Turma
    $sql = "CREATE TABLE IF NOT EXISTS turma (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(10),
            serie INT
            )";

    if($conexao->query($sql) === TRUE)
        echo "<br> Tabela de turma criada com sucesso!";
    else    
        echo "<br> Erro criando a tabela turma: " . $conexao->error;


    //Aluno
    $sql = "CREATE TABLE IF NOT EXISTS aluno (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(80),
            email VARCHAR(70),
            idade INT,
            numero_matricula VARCHAR(15),
            nome_responsavel VARCHAR(80),
            senha VARCHAR(15),
            id_turma INT UNSIGNED,
            FOREIGN KEY(id_turma) REFERENCES turma(id) ON DELETE SET NULL
            )";

    if($conexao->query($sql) === TRUE)
        echo "<br> Tabela de aluno criada com sucesso!";
    else    
        echo "<br> Erro criando a tabela aluno: " . $conexao->error;


    //Professor
    $sql = "CREATE TABLE IF NOT EXISTS professor (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(80),
        email VARCHAR(70),
        masp VARCHAR(8),
        senha VARCHAR(15)
        )";

    if($conexao->query($sql) === TRUE)
        echo "<br> Tabela de professor criado com sucesso!";
    else    
        echo "<br> Erro criando a tabela professor: " . $conexao->error;


    //Disciplina
    $sql = "CREATE TABLE IF NOT EXISTS disciplina (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(30),
        ano YEAR,
        id_professor INT UNSIGNED,
        id_turma INT UNSIGNED,
        FOREIGN KEY(id_professor) REFERENCES professor(id) ON DELETE SET NULL,
        FOREIGN KEY(id_turma) REFERENCES turma(id)
        )";

    if($conexao->query($sql) === TRUE)
        echo "<br> Tabela de disciplina criada com sucesso!";
    else    
        echo "<br> Erro criando a tabela disciplina: " . $conexao->error;

    $conexao->close();
