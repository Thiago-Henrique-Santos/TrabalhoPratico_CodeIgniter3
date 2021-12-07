<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cadastro de Disciplinas</title>

</head>

<body>

    <h1>Cadastrar Disciplina</h1>
    <form method="POST" action="<?php echo site_url('Controlador/cadastrarBD/disciplina'); ?>">
        Nome da disciplina: <input type="text" class="form-control" id='nome' name="nome"> <br><br>
        Ano: <input type="number" class="form-control" id="ano" name="ano" min="0"><br><br>
        Professor:
        <select name="campo_professor">
            <?php
            foreach ($professores as $p)
                echo "<option value='" . $p->id . "'>" . $p->nome . "</option>";
            ?>
        </select> <br><br>
        Turma:
        <select name="campo_turma">
            <?php
            foreach ($turmas as $t)
                echo "<option value='" . $t->id . "'>" . $t->serie . "° ano " . $t->nome . "</option>";
            ?>
        </select> <br><br><br>

        <input type="submit" style="cursor: pointer;background-color: green; color:white;" value="Cadastrar Disciplina">
        <input type="reset" value="Limpar">
    </form>

    <br><br><a href="<?php echo site_url('Controlador/voltar'); ?>"><button style='cursor: pointer;background-color: gray; color:black;'>Voltar para o menu</button></a>

</body>

</html>