<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cadastro de Alunos</title>

</head>

<body>

    <h1>Cadastrar Aluno</h1>
    <form method="POST" action="<?php echo site_url('Controlador/cadastrarBD/aluno'); ?>">
        Nome do aluno: <input type="text" class="form-control" id='nome' name="nome"> <br><br>
        Email: <input type="text" class="form-control" id="email" name="email"><br><br>
        Idade: <input type="number" class="form-control" id="idade" name="idade" min="0"><br><br>
        Número de matrícula: <input type="text" class="form-control" id='numero_matricula' name="numero_matricula"> <br><br>
        Nome do responsavel: <input type="text" class="form-control" id='nome_responsavel' name="nome_responsavel"> <br><br>
        Senha: <input type="password" class="form-control" id='senha' name="senha"> <br><br>
        Turma:
        <select name="campo_turma">
            <?php
            foreach ($turmas as $t)
                echo "<option value='" . $t->id . "'>" . $t->serie . "° ano " . $t->nome . "</option>";
            ?>
        </select> <br><br><br>

        <input type="submit" style="cursor: pointer;background-color: green; color:white;" value="Cadastrar Aluno">
        <input type="reset" value="Limpar">
    </form>

    <br><br><a href="<?php echo site_url('Controlador/voltar'); ?>"><button style='cursor: pointer;background-color: gray; color:black;'>Voltar para o menu</button></a>

</body>

</html>