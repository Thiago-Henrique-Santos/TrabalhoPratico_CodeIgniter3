<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cadastro de Turmas</title>

</head>

<body>

    <h1>Cadastrar Turma</h1>
    <form method="POST" action="<?php echo site_url('Controlador/cadastrarBD/turma'); ?>">
        Nome da turma: <input type="text" class="form-control" id="nome" name="nome"> <br><br>
        Série:
        <select name="campo_serie">
            <option value="2">2° ano</option>
            <option value="3">3° ano</option>
            <option value="4">4° ano</option>
            <option value="5">5° ano</option>
            <option value="6">6° ano</option>
            <option value="7">7° ano</option>
            <option value="8">8° ano</option>
            <option value="9">9° ano</option>
        </select> <br><br><br>

        <input type="submit" style="cursor: pointer;background-color: green; color:white;" value="Cadastrar Turma">
        <input type="reset" value="Limpar">
    </form>

    <br><br><a href="<?php echo site_url('Controlador/voltar'); ?>"><button style='cursor: pointer;background-color: gray; color:black;'>Voltar para o menu</button></a>

</body>

</html>