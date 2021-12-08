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

    <h1>Atualizar Professor</h1>
    <?php foreach ($professor as $p) ?>
    <form method="POST" action="<?php echo site_url('Controlador/atualizarBD/professor'); ?>">
        <input type="hidden" name="id" value="<?php echo $p->id; ?>">
        Nome do aluno: <input type="text" name="nome" value="<?php echo $p->nome; ?>"> <br><br>
        Email: <input type="text" class="form-control" id="email" name="email" value="<?php echo $p->email; ?>"><br><br>
        MASP: <input type="text" class="form-control" id='masp' name="masp" value="<?php echo $p->masp; ?>"><br><br>
        Senha: <input type="password" class="form-control" id='senha' name="senha" value="<?php echo $p->senha; ?>"><br><br>

        <input type="submit" style="cursor: pointer;background-color: blue; color:white;" value="Atualizar Professor">
        <input type="reset" value="Limpar">
    </form>

    <br><br><a href="<?php echo site_url('Controlador/voltar'); ?>"><button style='cursor: pointer;background-color: gray; color:black;'>Voltar para o menu</button></a>

</body>

</html>