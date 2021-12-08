<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Atualização de Alunos</title>

</head>

<body>

    <h1>Atualizar Aluno</h1>
    <?php foreach ($aluno as $a) ?>
    <form method="POST" action="<?php echo site_url('Controlador/atualizarBD/aluno'); ?>">
        <input type="hidden" name="id" value="<?php echo $a->id; ?>">
        Nome do aluno: <input type="text" name="nome" value="<?php echo $a->nome; ?>"> <br><br>
        Email: <input type="text" class="form-control" id="email" name="email" value="<?php echo $a->email; ?>"><br><br>
        Idade: <input type="number" class="form-control" id="idade" name="idade" min="0" value="<?php echo $a->idade; ?>"><br><br>
        Número de matrícula: <input type="text" class="form-control" id='numero_matricula' name="numero_matricula" value="<?php echo $a->numero_matricula; ?>"><br><br>
        Nome do responsavel: <input type="text" class="form-control" id='nome_responsavel' name="nome_responsavel" value="<?php echo $a->nome_responsavel; ?>"><br><br>
        Senha: <input type="password" class="form-control" id='senha' name="senha" value="<?php echo $a->senha; ?>"><br><br>
        Turma:
        <select name="campo_turma">
            <?php
            foreach ($turmas as $t)
                if ($t->id == $a->id_turma)
                    echo "<option value='" . $a->id_turma . "' selected>" . $t->serie . "° ano " . $t->nome . "</option>";
                else
                    echo "<option value='" . $t->id . "'>" . $t->serie . "° ano " . $t->nome . "</option>";
            ?>
        </select> <br><br><br>

        <input type="submit" style="cursor: pointer;background-color: blue; color:white;" value="Atualizar Aluno">
        <input type="reset" value="Limpar">
    </form>

    <br><br><a href="<?php echo site_url('Controlador/voltar'); ?>"><button style='cursor: pointer;background-color: gray; color:black;'>Voltar para o menu</button></a>

</body>

</html>