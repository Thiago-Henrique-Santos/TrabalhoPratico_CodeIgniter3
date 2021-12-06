<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Escolher aluno</title>
</head>

<body>

    <h1>Listagem de Alunos</h1>

    <form method="POST" action="<?php echo site_url('Controlador/exibir/aluno'); ?>">
        Escolha o aluno:&nbsp;
        <select name="campo_aluno">
            <?php
            foreach ($alunos as $a) {
                echo "<option value='" . $a->id . "'>" . $a->nome . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Consultar Aluno" style="cursor: pointer">
    </form>

    <br><a href="<?php echo site_url('Controlador/voltar'); ?>"><button style='cursor: pointer'>Voltar para o menu</button></a>

</body>

</html>