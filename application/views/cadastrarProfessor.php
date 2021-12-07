<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cadastro de Professores</title>

</head>

<body>

    <h1>Cadastrar Professor</h1>
    <form method="POST" action="<?php echo site_url('Controlador/cadastrarBD/professor'); ?>">
        Nome da professor: <input type="text" class="form-control" id="nome" name="nome"> <br><br>
        Email: <input type="text" class="form-control" id="email" name="email"><br><br>
        MASP: <input type="text" class="form-control" id='masp' name="masp"> <br><br>
        Senha: <input type="password" class="form-control" id='senha' name="senha"> <br><br><br>

        <input type="submit" style="cursor: pointer;background-color: green; color:white;" value="Cadastrar Professor">
        <input type="reset" value="Limpar">
    </form>

    <br><br><a href="<?php echo site_url('Controlador/voltar'); ?>"><button style='cursor: pointer;background-color: gray; color:black;'>Voltar para o menu</button></a>

</body>

</html>