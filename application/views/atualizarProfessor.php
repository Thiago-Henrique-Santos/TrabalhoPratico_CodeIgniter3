<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Atualização de Professores</title>

</head>

<body>

    <h1>Atualizar professor</h1>

    <form method="POST" action="<?php echo site_url('Controlador/atualizarDados/professor'); ?>">
        Escolha o professor:
        <select name="campo_professor">
            <?php
            foreach ($professores as $p)
                echo "<option value='" . $p->id . "'>" . $p->nome . "</option>";
            ?>
        </select>
        <input type="submit" style="cursor: pointer;background-color: blue; color:white;" value="Atualizar Professor">
    </form>

    <br><br><a href="<?php echo site_url('Controlador/voltar'); ?>"><button style='cursor: pointer;background-color: gray; color:black;'>Voltar para o menu</button></a>



</body>

</html>