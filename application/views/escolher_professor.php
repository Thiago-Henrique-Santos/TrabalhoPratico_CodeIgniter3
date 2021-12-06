<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Escolher professor</title>
</head>

<body>

    <h1>Listagem de Professor</h1>

    <form method="POST" action="<?php echo site_url('Controlador/exibir/professor'); ?>">
        Escolha o professor:&nbsp;
        <select name="campo_professor">
            <?php
            foreach ($professores as $p) {
                echo "<option value='" . $p->id . "'>" . $p->nome . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Consultar Professor" style="cursor: pointer">
    </form>

    <br><a href="<?php echo site_url('Controlador/voltar'); ?>"><button style='cursor: pointer'>Voltar para o menu</button></a>

</body>

</html>