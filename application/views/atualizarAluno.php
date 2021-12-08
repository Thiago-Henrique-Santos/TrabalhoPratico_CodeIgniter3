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

    <h1>Atualizar aluno</h1>

    <form method="POST" action="<?php echo site_url('Controlador/atualizarDados/aluno'); ?>">
        Escolha o aluno:
        <select name="campo_aluno">
            <?php
            foreach ($alunos as $a)
                echo "<option value='" . $a->id . "'>" . $a->nome . "</option>";
            ?>
        </select>
        <input type="submit" style="cursor: pointer;background-color: blue; color:white;" value="Atualizar Aluno">
    </form>

    <br><br><a href="<?php echo site_url('Controlador/voltar'); ?>"><button style='cursor: pointer;background-color: gray; color:black;'>Voltar para o menu</button></a>



</body>

</html>