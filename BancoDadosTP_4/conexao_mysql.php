﻿<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "BD_TP_4";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error)
    die("Conexão falhou: " . $conexao->connect_error);

?>

//Iniciando conexao my_sql - teste com nova conta